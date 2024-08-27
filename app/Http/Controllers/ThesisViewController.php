<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Thesis;
use Illuminate\Support\Facades\Storage;
use Intervention\Image\ImageManagerStatic;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Facades\DB;
use App\Models\Deposit;
use App\Models\Museum;

class ThesisViewController extends Controller
{
    public function showList()
    {
        // Recupera tutte le tesi, carica le info associate
        $theses = Thesis::with(['deposit', 'museum'])->get();
        return view('thesis-consultation', compact('theses'));
    }


    public function action(Request $request)
    {
        try {
            if ($request->ajax()) {
                $output = '';
                $query = $request->get('query');

                if ($query != '') {
                    $theses = DB::table('theses')
                        ->join('deposits', 'theses.id_deposito', '=', 'deposits.id')
                        ->join('museums', 'theses.id_museo', '=', 'museums.id')
                        ->where('theses.autore', 'like', '%'.$query.'%')
                        ->orWhere('theses.titolo', 'like', '%'.$query.'%')
                        ->orWhere('theses.anno_accademico', 'like', '%'.$query.'%')
                        ->orWhere('theses.disciplina', 'like', '%'.$query.'%')
                        ->orWhere('deposits.nome', 'like', '%'.$query.'%')
                        ->orWhere('museums.nome', 'like', '%'.$query.'%')
                        ->orderBy('theses.id', 'desc')
                        ->get();
                } else {
                    $theses = Thesis::with(['deposit', 'museum'])->get();
                }

                Log::debug($theses);
                $totalRows = $theses->count();

                if ($totalRows > 0) {
                    foreach ($theses as $thesis) {
                        $output .= view('components.thesiscard', ['thesis' => $thesis])->render();
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
            return response()->json(['error' => 'Error fetching thesis data: ' . $e->getMessage()], 500);
        }
    }

    public function showStore()
    {
        $deposits = Deposit::all();
        $museums = Museum::all();
        return view('store-theses', compact('deposits', 'museums'));
    }

    public function showForm(Request $request, $id)
{
    // Recupera la tesi specifica in base all'ID
    $thesis = Thesis::findOrFail($id);

    // Recupera i dati correlati (es. museo, deposito) in base ai collegamenti
    $museum = DB::table('museums')->where('id', '=', $thesis->id_museo)->first();
    $deposit = DB::table('deposits')->where('id', '=', $thesis->id_deposito)->first();

    // Passa i dati alla vista
    return view('theses-form', compact('thesis', 'museum', 'deposit'));
}


    public function showupdate($id) {
        // Recupera i musei, i depositi, ecc. necessari per il form di aggiornamento
        $museums = DB::table('museums')->get();
        $deposits = Deposit::all();
        $thesis = Thesis::findOrFail($id); // Trova la tesi da aggiornare

        return view('edit-thesis', compact('id', 'museums', 'deposits', 'thesis'));
    }


    public function update(Request $request, $id)
{
    try {
        // Validazione dei dati in input
        $validatedData = $request->validate([
            'id_museo' => 'nullable|integer',
            'id_deposito' => 'nullable|integer',
            'autore' => 'nullable|string|max:255',
            'titolo' => 'nullable|string|max:255',
            'anno_accademico' => 'nullable|string|max:20',
            'disciplina' => 'nullable|string|max:255',
            'relatore' => 'nullable|string|max:255',
            'correlatore' => 'nullable|string|max:255',
            'contro_relatore' => 'nullable|string|max:255',
            'percorso_file' => 'nullable|string|max:255', // Campo di testo per il link
            'note' => 'nullable|string',
        ]);

        // Trova il record della tesi esistente
        $thesis = Thesis::findOrFail($id);

        // Aggiorna i campi di $thesis
        $thesisData = [
            'id_museo' => $validatedData['id_museo'] ?? $thesis->id_museo,
            'id_deposito' => $validatedData['id_deposito'] ?? $thesis->id_deposito,
            'autore' => $validatedData['autore'] ?? $thesis->autore,
            'titolo' => $validatedData['titolo'] ?? $thesis->titolo,
            'anno_accademico' => $validatedData['anno_accademico'] ?? $thesis->anno_accademico,
            'disciplina' => $validatedData['disciplina'] ?? $thesis->disciplina,
            'relatore' => $validatedData['relatore'] ?? $thesis->relatore,
            'correlatore' => $validatedData['correlatore'] ?? $thesis->correlatore,
            'contro_relatore' => $validatedData['contro_relatore'] ?? $thesis->contro_relatore,
            'percorso_file' => $validatedData['percorso_file'] ?? $thesis->percorso_file, // Aggiorna il percorso link se esiste
            'note' => $validatedData['note'] ?? $thesis->note,
        ];

        // Aggiorna il record nel database
        $thesis->update($thesisData);

        // Se il record è stato aggiornato con successo, reindirizza con un messaggio di successo
        Log::info('Tesi aggiornata con successo: ', $thesis->toArray());
        return redirect()->route('theses.showList')->with('success', 'Tesi aggiornata con successo');
    } catch (Exception $e) {
        // Log dell'errore e reindirizzamento in caso di eccezione
        Log::error('Eccezione nell\'aggiornamento della tesi: ' . $e->getMessage());
        return redirect()->route('theses.showList')->with('error', 'Si è verificata un\'eccezione: ' . $e->getMessage());
    }
}

public function destroy($id) {
    try {
        DB::transaction(function() use ($id) {
            // Trova il record della tesi esistente
            $thesis = Thesis::findOrFail($id);

            // Elimina la tesi dal database
            $thesis->delete();

            Log::info('Tesi eliminata con successo: ', ['id' => $id]);
        });

        return redirect()->route('theses.showList')->with('success', 'Tesi eliminata con successo');
    } catch (Exception $e) {
        Log::error('Eccezione nell\'eliminazione della tesi: ' . $e->getMessage());
        return redirect()->route('theses.showList')->with('error', 'Si è verificata un\'eccezione: ' . $e->getMessage());
    }
}



    public function store(Request $request)
{
    $request->validate([
        'id_museo' => 'required|integer',
        'id_deposito' => 'required|integer',
        'autore' => 'required|string|max:255',
        'titolo' => 'required|string|max:255',
        'anno_accademico' => 'required|string|max:255',
        'disciplina' => 'required|string|max:255',
        'relatore' => 'required|string|max:255',
        'percorso_file' => 'required|string|max:255',
    ]);

    DB::beginTransaction();

    try {
        $thesis = new Thesis();
        $thesis->id_museo = $request->input('id_museo');
        $thesis->id_deposito = $request->input('id_deposito');
        $thesis->autore = $request->input('autore');
        $thesis->titolo = $request->input('titolo');
        $thesis->anno_accademico = $request->input('anno_accademico');
        $thesis->disciplina = $request->input('disciplina');
        $thesis->relatore = $request->input('relatore');
        $thesis->correlatore = $request->input('correlatore');
        $thesis->contro_relatore = $request->input('contro_relatore');
        $thesis->percorso_file = $request->input('percorso_file');
        $thesis->note = $request->input('note');
        $thesis->save();

        DB::commit();

        return redirect()->route('theses.store')->with('success', 'Tesi inserita con successo');
    } catch (\Exception $e) {
        DB::rollBack();
        return redirect()->back()->withErrors(['error' => $e->getMessage()]);
    }
}


}
