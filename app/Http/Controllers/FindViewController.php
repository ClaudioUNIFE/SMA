<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Find;
use App\Models\BiologicalEntity;
use App\Models\Gigapixel;
use Illuminate\Support\Facades\Storage;
use Intervention\Image\ImageManagerStatic;
use App\Http\Controllers\FindViewController;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Facades\DB;
use App\Models\Catalog;
use App\Models\Deposit;
use pp\Models\Museum;
use App\Models\Collection;
use App\Models\Acquisition;
use App\Models\Composition;
use App\Models\Render;
use App\Models\Xit;


class FindViewController extends Controller
{
    public function showlist(){
        // Recupera tutti i reperti, carica le info entità biologiche associate e il gigapixel
        $finds=Find::getUtilsforCard();
        //$finds=FindViewController::convertJPGMethod($finds);
       // dd($finds);
        return view('find-consultation', compact('finds'));
    }





    public function action(Request $request) {
        try {
            if ($request->ajax()) {
                $output = '';
                $query = $request->get('query');

                if ($query != '') {
                    $finds = DB::table('finds')
                        ->join('biological_entities', 'finds.id', '=', 'biological_entities.id_reperto')
                        ->join('collections', 'finds.id_collezione', '=', 'collections.id')
                        ->join('deposits', 'finds.id_deposito', '=', 'deposits.id')
                        ->join('finds_catalogs', 'finds.id', '=', 'finds_catalogs.id_reperto')
                        ->join('catalogs', 'catalogs.id', '=', 'finds_catalogs.id_catalogo')
                        ->join('compositions', 'finds.id', '=', 'compositions.id_reperto')
                        ->where('finds.id_vecchio', 'like', '%'.$query.'%')
                        ->orWhere('finds.descrizione', 'like', '%'.$query.'%')
                        ->orWhere('tipo_entita', 'like', '%'.$query.'%')
                        ->orWhere('riferimento_tassonomico', 'like', '%'.$query.'%')
                        ->orWhere('nome_comune', 'like', '%'.$query.'%')
                        ->orWhere('riferimento_cronologico', 'like', '%'.$query.'%')
                        ->orWhere('categoria', 'like', '%'.$query.'%')
                        ->orWhere('nome_collezione', 'like', '%'.$query.'%')
                        ->orWhere('collocazione', 'like', '%'.$query.'%')
                        ->orWhere('codice_stanza', 'like', '%'.$query.'%')
                        ->orWhere('catalogo', 'like', '%'.$query.'%')
                        ->orWhere('materiale', 'like', '%'.$query.'%')
                        ->orderBy('finds.id', 'desc')
                        ->get();

                } else {
                    $finds = Find::getUtilsforCard();
                }
                Log::debug($finds);
                $totalRows = $finds->count();

                if ($totalRows > 0) {
                    foreach ($finds as $find) {
                        Log::debug(gettype($find));
                        Log::debug($find->first());
                        $output .= view('components.findcard', ['find' => $find])->render();
                    }
                } else {
                    $output .= '<p align="center">No Data Found</p>';
                }

                $data = [
                    'table_data' => $output,
                    'total_data' => $totalRows
                ];

                return response()->json($data);
            }
        } catch (\Exception $e) {
            Log::error($e->getMessage());
            return response()->json(['error' => 'Error fetching user data: ' . $e->getMessage()], 500);
        }
    }





   public function showStore(){
       $catalogs = Catalog::all();
       $deposits = Deposit::all();
       $museums = DB::table('museums')->get();
       $collections = Collection::all();
       return view('store-find', compact('catalogs', 'deposits','museums', 'collections'));
   }

public function store(Request $request) {
    try {
        // Validazione dei dati in input
        $validatedData = $request->validate([
            'id_museo' => 'nullable|integer',
            'id_vecchio' => 'nullable|string',
            'descrizione' => 'nullable|string',
            'note' => 'nullable|string',
            'esposto' => 'nullable|boolean',
            'digitalizzato' => 'nullable|boolean',
            'catalogato' => 'nullable|boolean',
            'restaurato' => 'nullable|boolean',
            'id_deposito' => 'nullable|integer',
            'id_collezione' => 'nullable|integer',
            'validato' => 'nullable|boolean',
            'categoria' => 'nullable|string',
            'cartellino_storico' => 'nullable|string',
            'cartellino_attuale' => 'nullable|string',
            'foto_principale' => 'nullable|file|mimes:jpeg,png,jpg,gif,svg|max:2048',
            'didascalia' => 'nullable|string',
            'olotipo' => 'nullable|boolean',
            'riferimento_tassonomico' => 'nullable|string',
            'nome_comune' => 'nullable|string',
            'taxon_group' => 'nullable|string',
            'riferimento_cronologico' => 'nullable|string',
            'modalita_acquisizione' => 'nullable|string',
            'data_inventario' => 'nullable|date',
            'data_acquisizione' => 'nullable|date',
            'proprieta' => 'nullable|string',
            'codice_patrimonio' => 'nullable|string',
            'provenienza' => 'nullable|string',
            'fornitore' => 'nullable|string',
            'multiplo' => 'nullable|boolean',
            'molteplicita' => 'nullable|integer',
            'originale' => 'nullable|boolean',
            'fossile' => 'nullable|boolean',
            'materiale' => 'nullable|string',
            'catalogo' => 'nullable|string',
            'iccd' => 'nullable|string',
            'pater' => 'nullable|string',
            'vecchio_db' => 'nullable|string',
        ]);

        // Gestione del caricamento del file
        if ($request->hasFile('foto_principale')) {
            $filePath = $request->file('foto_principale')->store('find_photo', 'public');
            $validatedData['foto_principale'] = $filePath;
        } else {
            $validatedData['foto_principale'] = '';
        }

        // Assicurati che i campi non accettino valori null nel database
        $findData = [
            'id_museo' => $validatedData['id_museo'] ?? null,
            'id_vecchio' => $validatedData['id_vecchio'] ?? '',
            'descrizione' => $validatedData['descrizione'] ?? '',
            'note' => $validatedData['note'] ?? '',
            'esposto' => $validatedData['esposto'] ?? 0,
            'digitalizzato' => $validatedData['digitalizzato'] ?? 0,
            'catalogato' => $validatedData['catalogato'] ?? 0,
            'restaurato' => $validatedData['restaurato'] ?? 0,
            'id_deposito' => $validatedData['id_deposito'] ?? null,
            'id_collezione' => $validatedData['id_collezione'] ?? null,
            'validato' => $validatedData['validato'] ?? 0,
            'categoria' => $validatedData['categoria'] ?? '',
            'cartellino_storico' => $validatedData['cartellino_storico'] ?? '',
            'cartellino_attuale' => $validatedData['cartellino_attuale'] ?? '',
            'didascalia' => $validatedData['didascalia'] ?? '',
            'foto_principale' => $validatedData['foto_principale'],
        ];



        // Creazione del nuovo record
        $find = Find::create($findData);
        $id_reperto = $find->id;

        $biologicalEntitiesData = [
            'id_reperto' => $id_reperto,
            'olotipo' => $validatedData['olotipo'] ?? 0,
            'riferimento_tassonomico' => $validatedData['riferimento_tassonomico'] ?? '',
            'nome_comune' => $validatedData['nome_comune'] ?? '',
            'taxon_group' => $validatedData['taxon_group'] ?? '',
            'riferimento_cronologico' => $validatedData['riferimento_cronologico'] ?? '',
        ];

        $biologicalEntities = BiologicalEntity::create($biologicalEntitiesData);

        $acquisitionData = [
            'id_reperto' => $id_reperto,
            'modalita_acquisizione' => $validatedData['modalita_acquisizione'] ?? '',
            'data_inventario' => $validatedData['data_inventario'] ?? now(),
            'data_acquisizione' => $validatedData['data_acquisizione'] ?? now(),
            'proprieta' => $validatedData['proprieta'] ?? '',
            'codice_patrimonio' => $validatedData['codice_patrimonio'] ?? '',
            'provenienza' => $validatedData['provenienza'] ?? '',
            'fornitore' => $validatedData['fornitore'] ?? '',
        ];
        $acquisition = Acquisition::create($acquisitionData);

        $compositionData = [
            'id_reperto' => $id_reperto,
            'multiplo' => $validatedData['multiplo'] ?? 0,
            'molteplicita' => $validatedData['molteplicita'] ?? 0,
            'originale' => $validatedData['originale'] ?? 0,
            'fossile' => $validatedData['fossile'] ?? 0,
            'materiale' => $validatedData['materiale'] ?? '',
        ];

        $composition = Composition::create($compositionData);

        $catalogData=[
            'id_reperto' => $id_reperto,
            'catalogo' => $validatedData['catalogo'] ?? '',
            'iccd' => $validatedData['iccd'] ?? '',
            'pater' => $validatedData['pater'] ?? '',
            'vecchio_db' => $validatedData['vecchio_db'] ?? '',
        ];

        $catalog = Catalog::create($catalogData);

        // Se il record è stato creato, ritorna la view con il messaggio di successo
        if ($find) {
            Log::info('Find creato con successo: ', $find->toArray());
            return redirect()->route('find.showstore')->with('success', 'Find created successfully');
        } else {
            Log::error('Errore nella creazione del find.');
            return redirect()->route('find.showstore')->with('error', 'Error creating find');
        }
    } catch (Exception $e) {
        Log::error('Eccezione nella creazione del find: ' . $e->getMessage());
        return redirect()->route('find.showstore')->with('error', 'Exception occurred: ' . $e->getMessage());
    }
}

public function showfindform(Request $request, $id){
    $find= Find::getUtilsforFindForm($id);
    $museum = DB::table('museums')->where('id', '=', $find->id_museo)->get()->first();
    $deposit = DB::table('deposits')->where('id', '=', $find->id_deposito)->get()->first();
    $collection = DB::table('collections')->where('id', '=', $find->id_collezione)->get()->first();
    return view('find-form', compact('find' ,'museum' , 'deposit' , 'collection'));
}

public function showupdate($id){
    $catalogs = Catalog::all();
       $deposits = Deposit::all();
       $museums = DB::table('museums')->get();
       $collections = Collection::all();
    return view('edit-find', compact('id' , 'catalogs' , 'deposits' ,'museums' , 'collections'));
}


public function update(Request $request, $id) {
    try {
        // Validazione dei dati in input
        $validatedData = $request->validate([
            'id_museo' => 'nullable|integer',
            'id_vecchio' => 'nullable|string',
            'descrizione' => 'nullable|string',
            'note' => 'nullable|string',
            'esposto' => 'nullable|boolean',
            'digitalizzato' => 'nullable|boolean',
            'catalogato' => 'nullable|boolean',
            'restaurato' => 'nullable|boolean',
            'id_deposito' => 'nullable|integer',
            'id_collezione' => 'nullable|integer',
            'validato' => 'nullable|boolean',
            'categoria' => 'nullable|string',
            'cartellino_storico' => 'nullable|string',
            'cartellino_attuale' => 'nullable|string',
            'foto_principale' => 'nullable|file|mimes:jpeg,png,jpg,gif,svg|max:2048',
            'didascalia' => 'nullable|string',
            'olotipo' => 'nullable|boolean',
            'riferimento_tassonomico' => 'nullable|string',
            'nome_comune' => 'nullable|string',
            'taxon_group' => 'nullable|string',
            'riferimento_cronologico' => 'nullable|string',
            'modalita_acquisizione' => 'nullable|string',
            'data_inventario' => 'nullable|date',
            'data_acquisizione' => 'nullable|date',
            'proprieta' => 'nullable|string',
            'codice_patrimonio' => 'nullable|string',
            'provenienza' => 'nullable|string',
            'fornitore' => 'nullable|string',
            'multiplo' => 'nullable|boolean',
            'molteplicita' => 'nullable|integer',
            'originale' => 'nullable|boolean',
            'fossile' => 'nullable|boolean',
            'materiale' => 'nullable|string',
            'catalogo' => 'nullable|string',
            'iccd' => 'nullable|string',
            'pater' => 'nullable|string',
            'vecchio_db' => 'nullable|string',
        ]);

        // Trova il record esistente
        $find = Find::findOrFail($id);

        // Gestione del caricamento del file
        if ($request->hasFile('foto_principale')) {
            $filePath = $request->file('foto_principale')->store('find_photo', 'public');
            $validatedData['foto_principale'] = $filePath;
        }

        // Aggiorna i campi di $find
        $findData = [
            'id_museo' => $validatedData['id_museo'] ?? null,
            'id_vecchio' => $validatedData['id_vecchio'] ?? '',
            'descrizione' => $validatedData['descrizione'] ?? '',
            'note' => $validatedData['note'] ?? '',
            'esposto' => $validatedData['esposto'] ?? 0,
            'digitalizzato' => $validatedData['digitalizzato'] ?? 0,
            'catalogato' => $validatedData['catalogato'] ?? 0,
            'restaurato' => $validatedData['restaurato'] ?? 0,
            'id_deposito' => $validatedData['id_deposito'] ?? null,
            'id_collezione' => $validatedData['id_collezione'] ?? null,
            'validato' => $validatedData['validato'] ?? 0,
            'categoria' => $validatedData['categoria'] ?? '',
            'cartellino_storico' => $validatedData['cartellino_storico'] ?? '',
            'cartellino_attuale' => $validatedData['cartellino_attuale'] ?? '',
            'didascalia' => $validatedData['didascalia'] ?? '',
            'foto_principale' => $validatedData['foto_principale'] ?? $find->foto_principale,
        ];

        $find->update($findData);
        $id_reperto = $find->id;


        $biologicalEntitiesData = [
            'id_reperto' => $id_reperto,
            'olotipo' => $validatedData['olotipo'] ?? 0,
            'riferimento_tassonomico' => $validatedData['riferimento_tassonomico'] ?? '',
            'nome_comune' => $validatedData['nome_comune'] ?? '',
            'taxon_group' => $validatedData['taxon_group'] ?? '',
            'riferimento_cronologico' => $validatedData['riferimento_cronologico'] ?? '',
        ];
        $biologicalEntity = BiologicalEntity::where('id_reperto', '=', $id_reperto)->get()->first();
        $biologicalEntity->update($biologicalEntitiesData);

        $acquisitionData = [
            'id_reperto' => $id_reperto,
            'modalita_acquisizione' => $validatedData['modalita_acquisizione'] ?? '',
            'data_inventario' => $validatedData['data_inventario'] ?? now(),
            'data_acquisizione' => $validatedData['data_acquisizione'] ?? now(),
            'proprieta' => $validatedData['proprieta'] ?? '',
            'codice_patrimonio' => $validatedData['codice_patrimonio'] ?? '',
            'provenienza' => $validatedData['provenienza'] ?? '',
            'fornitore' => $validatedData['fornitore'] ?? '',
        ];
        $acquisition = Acquisition::where('id_reperto', '=', $id_reperto)->get()->first();
        $acquisition->update($acquisitionData);

        $compositionData = [
            'id_reperto' => $id_reperto,
            'multiplo' => $validatedData['multiplo'] ?? 0,
            'molteplicita' => $validatedData['molteplicita'] ?? 0,
            'originale' => $validatedData['originale'] ?? 0,
            'fossile' => $validatedData['fossile'] ?? 0,
            'materiale' => $validatedData['materiale'] ?? '',
        ];
        $composition = Composition::where('id_reperto', '=', $id_reperto)->get()->first();
        $composition->update($compositionData);


        $catalogData=[
            'id_reperto' => $id_reperto,
            'catalogo' => $validatedData['catalogo'] ?? '',
            'iccd' => $validatedData['iccd'] ?? '',
            'pater' => $validatedData['pater'] ?? '',
            'vecchio_db' => $validatedData['vecchio_db'] ?? '',
        ];
        $catalog = Catalog::where('id_reperto', '=', $id_reperto)->get()->first();
        $catalog->update($catalogData);

        // Se il record è stato aggiornato, ritorna la view con il messaggio di successo
        Log::info('Find aggiornato con successo: ', $find->toArray());
        return redirect()->route('find.showlist')->with('success', 'Find updated successfully');
    } catch (Exception $e) {
        Log::error('Eccezione nell\'aggiornamento del find: ' . $e->getMessage());
        return redirect()->route('find.showlist')->with('error', 'Exception occurred: ' . $e->getMessage());
    }
}


public function destroy($id) {
    try {
        DB::transaction(function() use ($id) {
            // Trova il record esistente
            $find = Find::findOrFail($id);

            // Elimina la foto principale dallo storage, se esiste
            if ($find->foto_principale) {
                Storage::disk('public')->delete($find->foto_principale);
            }

            // Elimina le entità correlate usando id_reperto come chiave esterna
            BiologicalEntity::where('id_reperto', $find->id)->delete();
            Acquisition::where('id_reperto', $find->id)->delete();
            Composition::where('id_reperto', $find->id)->delete();
            Catalog::where('id_reperto', $find->id)->delete();
            Xit::where('id_reperto', $find->id)->delete();

            // Elimina il record principale
            $find->delete();

            Log::info('Find eliminato con successo: ', ['id' => $id]);
        });

        return redirect()->route('find.showlist')->with('success', 'Find deleted successfully');
    } catch (Exception $e) {
        Log::error('Eccezione nell\'eliminazione del find: ' . $e->getMessage());
        return redirect()->route('find.showlist')->with('error', 'Exception occurred: ' . $e->getMessage());
    }
}

}
