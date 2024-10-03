<?php

namespace App\Http\Controllers;

use App\Exports\FindsExport;
use Illuminate\Http\Request;
use Maatwebsite\Excel\Facades\Excel;

class ExportController extends Controller
{
    public function export(Request $request)
    {

        // Aumenta il tempo massimo di esecuzione e la memoria disponibile
        set_time_limit(300); // 300 secondi
        ini_set('memory_limit', '1024M');

        // Recupera l'array di ID dal parametro di richiesta
        $ids = $request->input('ids', []); // Ritorna un array vuoto se non presente
        
        // Assicurati che gli ID siano un array di numeri interi solo se esistono
        if (!empty($ids)) {
            if (is_string($ids)) {
                $ids = explode(',', preg_replace('/[^0-9,]/', '', $ids));
            }

            // Converti tutti i valori in numeri interi
            $ids = array_map('intval', $ids);
        }

        // Se l'array di ID è vuoto, restituisci un messaggio di errore
        if (empty($ids)) {
            return back()->with('error', 'Nessun ID valido fornito per l\'esportazione.');
        }



        // Effettua il download del file Excel con i dati filtrati
        return Excel::download(new FindsExport($ids), 'finds_export.xlsx');
    }
}
