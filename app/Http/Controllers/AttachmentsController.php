<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Attached;
use App\Models\Metadata;
use App\Models\Paradata;

class AttachmentsController extends Controller
{
    /**
     * Mostra il form per la creazione di un nuovo allegato.
     */
    public function create($id)
    {
        return view('add-attachments', compact('id'));
    }

    public function manage($id){
        $attachments = Attached::where('id_reperto', $id)->first();
        $metadata = Metadata::where('id_allegato', $attachments->id)->first();

        $paradata = Paradata::where('id_allegato', $attachments->id)->first();
        return view('manage-attachments', compact('attachments', 'metadata', 'paradata', 'id'));
    }

    /**
     * Salva un nuovo allegato nel database.
     */
    public function store(Request $request, $id)
    {
        $validatedData = $request->validate([
            'link' => 'nullable|string|max:255',
            'tipo_acquisizione' => 'nullable|string|max:255',

            // Campi Metadata
            'titolo' => 'nullable|string|max:255',
            'autore' => 'nullable|string|max:255',
            'soggetto' => 'nullable|string|max:255',
            'descrizione' => 'nullable|string',
            'editore' => 'nullable|string|max:255',
            'autore_di_contributo' => 'nullable|string|max:255',
            'data' => 'nullable|date',
            'tipo' => 'nullable|string|max:255',
            'formato' => 'nullable|string|max:255',
            'identificatore' => 'nullable|string|max:255',
            'fonte' => 'nullable|string|max:255',
            'lingua' => 'nullable|string|max:255',
            'relazione' => 'nullable|string|max:255',
            'copertura' => 'nullable|string|max:255',
            'gestione_dei_diritti' => 'nullable|string|max:255',

            // Campi Paradata
            'stato_corrente' => 'nullable|string|max:255',
            'responsabile_scelta_reperto' => 'nullable|string|max:255',
            'scheda_validata' => 'nullable|boolean',
            'validatore_scheda' => 'nullable|string|max:255',
            'note' => 'nullable|string',
            'responsabile_acquisizione' => 'nullable|string|max:255',
            'operatore' => 'nullable|string|max:255',
            'tipo_superfice' => 'nullable|string|max:255',
            'descrizione_complessita' => 'nullable|string',
            'fotocamera' => 'nullable|string|max:255',
            'impostazioni' => 'nullable|string|max:255',
            'obiettivo' => 'nullable|string|max:255',
            'illuminazione' => 'nullable|string|max:255',
            'light_box' => 'nullable|boolean',
            'tipo_supporto' => 'nullable|string|max:255',
            'numero_scatti' => 'nullable|string|max:255',
            'software' => 'nullable|string|max:255',
            'output' => 'nullable|string|max:255',
            'strumentazione' => 'nullable|string|max:255',
            'risoluzione' => 'nullable|string|max:255',
            'modalita_scansione' => 'nullable|string|max:255',
            'ingrandimento' => 'nullable|string|max:255',
            'luminosita' => 'nullable|string|max:255',
            'fibra_ottica' => 'nullable|boolean',
            'tiling' => 'nullable|boolean',
            'scala' => 'nullable|string|max:255',
            'data_inizio' => 'nullable|date',
            'data_fine' => 'nullable|date',
            'tempo_totale' => 'nullable|string|max:255',
            'luogo_acquisizione' => 'nullable|string|max:255',
            'temperatura' => 'nullable|string|max:255',
            'condizioni_iniziali_conservazione' => 'nullable|string',
            'condizioni_finali_conservazione' => 'nullable|string',
        ]);

        // Creazione dell'elemento Attached
        $attached = Attached::create([
            'id_reperto' => $id,
            'link' => $validatedData['link'],
            'tipo_acquisizione' => $validatedData['tipo_acquisizione'],
        ]);

        // Creazione dell'elemento Metadata
        Metadata::create([
            'id_allegato' => $attached->id,
            'codice_reperto' => $id,
            'titolo' => $validatedData['titolo'],
            'autore' => $validatedData['autore'],
            'soggetto' => $validatedData['soggetto'],
            'descrizione' => $validatedData['descrizione'],
            'editore' => $validatedData['editore'],
            'autore_di_contributo' => $validatedData['autore_di_contributo'],
            'data' => $validatedData['data'],
            'tipo' => $validatedData['tipo'],
            'formato' => $validatedData['formato'],
            'identificatore' => $validatedData['identificatore'],
            'fonte' => $validatedData['fonte'],
            'lingua' => $validatedData['lingua'],
            'relazione' => $validatedData['relazione'],
            'copertura' => $validatedData['copertura'],
            'gestione_dei_diritti' => $validatedData['gestione_dei_diritti'],
        ]);

        // Creazione dell'elemento Paradata
        Paradata::create([
            'id_allegato' => $attached->id,
            'stato_corrente' => $validatedData['stato_corrente'],
            'responsabile_scelta_reperto' => $validatedData['responsabile_scelta_reperto'],
            'scheda_validata' => $validatedData['scheda_validata'] ?? 0,
            'validatore_scheda' => $validatedData['validatore_scheda'],
            'note' => $validatedData['note'],
            'responsabile_acquisizione' => $validatedData['responsabile_acquisizione'],
            'operatore' => $validatedData['operatore'],
            'tipo_superfice' => $validatedData['tipo_superfice'],
            'descrizione_complessita' => $validatedData['descrizione_complessita'],
            'fotocamera' => $validatedData['fotocamera'],
            'impostazioni' => $validatedData['impostazioni'],
            'obiettivo' => $validatedData['obiettivo'],
            'illuminazione' => $validatedData['illuminazione'],
            'light_box' => $validatedData['light_box'] ?? 0,
            'tipo_supporto' => $validatedData['tipo_supporto'],
            'numero_scatti' => $validatedData['numero_scatti'],
            'software' => $validatedData['software'],
            'output' => $validatedData['output'],
            'strumentazione' => $validatedData['strumentazione'],
            'risoluzione' => $validatedData['risoluzione'],
            'modalita_scansione' => $validatedData['modalita_scansione'],
            'ingrandimento' => $validatedData['ingrandimento'],
            'luminosita' => $validatedData['luminosita'],
            'fibra_ottica' => $validatedData['fibra_ottica'] ?? 0,
            'tiling' => $validatedData['tiling'] ?? 0,
            'scala' => $validatedData['scala'],
            'data_inizio' => $validatedData['data_inizio'],
            'data_fine' => $validatedData['data_fine'],
            'tempo_totale' => $validatedData['tempo_totale'],
            'luogo_acquisizione' => $validatedData['luogo_acquisizione'],
            'temperatura' => $validatedData['temperatura'],
            'condizioni_iniziali_conservazione' => $validatedData['condizioni_iniziali_conservazione'],
            'condizioni_finali_conservazione' => $validatedData['condizioni_finali_conservazione'],
        ]);

        return redirect()->route('attached.create', ['id' => $id])->with('success', 'Allegato creato con successo');
    }

    /**
     * Mostra il form per modificare un allegato esistente.
     */
    public function edit($id)
    {
        $attached = Attached::with(['metadata', 'paradata'])->findOrFail($id);
        return view('edit-attachments', compact('attached'));
    }

    /**
     * Aggiorna un allegato esistente nel database.
     */
    public function update(Request $request, $id)
    {
        $attached = Attached::with(['metadata', 'paradata'])->findOrFail($id);

        $validatedData = $request->validate([
            'link' => 'nullable|string|max:255',
            'tipo_acquisizione' => 'nullable|string|max:255',

            // Campi Metadata
            'titolo' => 'nullable|string|max:255',
            'autore' => 'nullable|string|max:255',
            'soggetto' => 'nullable|string|max:255',
            'descrizione' => 'nullable|string',
            'editore' => 'nullable|string|max:255',
            'autore_di_contributo' => 'nullable|string|max:255',
            'data' => 'nullable|date',
            'tipo' => 'nullable|string|max:255',
            'formato' => 'nullable|string|max:255',
            'identificatore' => 'nullable|string|max:255',
            'fonte' => 'nullable|string|max:255',
            'lingua' => 'nullable|string|max:255',
            'relazione' => 'nullable|string|max:255',
            'copertura' => 'nullable|string|max:255',
            'gestione_dei_diritti' => 'nullable|string|max:255',

            // Campi Paradata
            'stato_corrente' => 'nullable|string|max:255',
            'responsabile_scelta_reperto' => 'nullable|string|max:255',
            'scheda_validata' => 'nullable|boolean',
            'validatore_scheda' => 'nullable|string|max:255',
            'note' => 'nullable|string',
            'responsabile_acquisizione' => 'nullable|string|max:255',
            'operatore' => 'nullable|string|max:255',
            'tipo_superfice' => 'nullable|string|max:255',
            'descrizione_complessita' => 'nullable|string',
            'fotocamera' => 'nullable|string|max:255',
            'impostazioni' => 'nullable|string|max:255',
            'obiettivo' => 'nullable|string|max:255',
            'illuminazione' => 'nullable|string|max:255',
            'light_box' => 'nullable|boolean',
            'tipo_supporto' => 'nullable|string|max:255',
            'numero_scatti' => 'nullable|string|max:255',
            'software' => 'nullable|string|max:255',
            'output' => 'nullable|string|max:255',
            'strumentazione' => 'nullable|string|max:255',
            'risoluzione' => 'nullable|string|max:255',
            'modalita_scansione' => 'nullable|string|max:255',
            'ingrandimento' => 'nullable|string|max:255',
            'luminosita' => 'nullable|string|max:255',
            'fibra_ottica' => 'nullable|boolean',
            'tiling' => 'nullable|boolean',
            'scala' => 'nullable|string|max:255',
            'data_inizio' => 'nullable|date',
            'data_fine' => 'nullable|date',
            'tempo_totale' => 'nullable|string|max:255',
            'luogo_acquisizione' => 'nullable|string|max:255',
            'temperatura' => 'nullable|string|max:255',
            'condizioni_iniziali_conservazione' => 'nullable|string',
            'condizioni_finali_conservazione' => 'nullable|string',
        ]);

        // Aggiorna Attached
        $attached->update([
            'link' => $validatedData['link'],
            'tipo_acquisizione' => $validatedData['tipo_acquisizione'],
        ]);

        // Aggiorna Metadata
        $attached->metadata->update([
            'titolo' => $validatedData['titolo'],
            'autore' => $validatedData['autore'],
            'soggetto' => $validatedData['soggetto'],
            'descrizione' => $validatedData['descrizione'],
            'editore' => $validatedData['editore'],
            'autore_di_contributo' => $validatedData['autore_di_contributo'],
            'data' => $validatedData['data'],
            'tipo' => $validatedData['tipo'],
            'formato' => $validatedData['formato'],
            'identificatore' => $validatedData['identificatore'],
            'fonte' => $validatedData['fonte'],
            'lingua' => $validatedData['lingua'],
            'relazione' => $validatedData['relazione'],
            'copertura' => $validatedData['copertura'],
            'gestione_dei_diritti' => $validatedData['gestione_dei_diritti'],
        ]);

        // Aggiorna Paradata
        $attached->paradata->update([
            'stato_corrente' => $validatedData['stato_corrente'],
            'responsabile_scelta_reperto' => $validatedData['responsabile_scelta_reperto'],
            'scheda_validata' => $validatedData['scheda_validata'] ?? 0,
            'validatore_scheda' => $validatedData['validatore_scheda'],
            'note' => $validatedData['note'],
            'responsabile_acquisizione' => $validatedData['responsabile_acquisizione'],
            'operatore' => $validatedData['operatore'],
            'tipo_superfice' => $validatedData['tipo_superfice'],
            'descrizione_complessita' => $validatedData['descrizione_complessita'],
            'fotocamera' => $validatedData['fotocamera'],
            'impostazioni' => $validatedData['impostazioni'],
            'obiettivo' => $validatedData['obiettivo'],
            'illuminazione' => $validatedData['illuminazione'],
            'light_box' => $validatedData['light_box'] ?? 0,
            'tipo_supporto' => $validatedData['tipo_supporto'],
            'numero_scatti' => $validatedData['numero_scatti'],
            'software' => $validatedData['software'],
            'output' => $validatedData['output'],
            'strumentazione' => $validatedData['strumentazione'],
            'risoluzione' => $validatedData['risoluzione'],
            'modalita_scansione' => $validatedData['modalita_scansione'],
            'ingrandimento' => $validatedData['ingrandimento'],
            'luminosita' => $validatedData['luminosita'],
            'fibra_ottica' => $validatedData['fibra_ottica'] ?? 0,
            'tiling' => $validatedData['tiling'] ?? 0,
            'scala' => $validatedData['scala'],
            'data_inizio' => $validatedData['data_inizio'],
            'data_fine' => $validatedData['data_fine'],
            'tempo_totale' => $validatedData['tempo_totale'],
            'luogo_acquisizione' => $validatedData['luogo_acquisizione'],
            'temperatura' => $validatedData['temperatura'],
            'condizioni_iniziali_conservazione' => $validatedData['condizioni_iniziali_conservazione'],
            'condizioni_finali_conservazione' => $validatedData['condizioni_finali_conservazione'],
        ]);

        return redirect()->route('attached.edit', ['id' => $attached->id])->with('success', 'Allegato aggiornato con successo');
    }

    /**
     * Elimina un allegato dal database.
     */
    public function destroy($id)
    {
        $attached = Attached::with(['metadata', 'paradata'])->findOrFail($id);

        // Eliminazione dei record correlati
        $attached->metadata->delete();
        $attached->paradata->delete();

        // Eliminazione dell'allegato
        $attached->delete();

        return redirect()->back()->with('success', 'Allegato eliminato con successo');
    }
}
