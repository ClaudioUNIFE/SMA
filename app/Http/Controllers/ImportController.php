<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\YourModel; // Assicurati di importare il tuo modello
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Storage;

class ImportController extends Controller
{
    public function import(Request $request)
    {
        $request->validate([
            'file' => 'required|mimes:csv,txt',
        ]);

        // Ottieni il file
        $file = $request->file('file');
        $path = $file->getRealPath();

        // Apri e leggi il file CSV
        if (($handle = fopen($path, 'r')) !== false) {
            // Salta l'intestazione del file CSV
            fgetcsv($handle, 1000, ',');

            // Leggi il resto delle righe
            while (($data = fgetcsv($handle, 1000, ',')) !== false) {
                // Crea un array di dati
                $csvData = [
                    'id_museo' => $data[0],
                    'id_vecchio' => $data[1],
                    'descrizione' => $data[2],
                    'note' => $data[3],
                    'esposto' => $data[4],
                    'digitalizzato' => $data[5],
                    'id_deposito' => $data[6],
                    'id_collezione' => $data[7],
                    'validato' => $data[8],
                    'tipo_entita' => $data[9],
                    'categoria' => $data[10],
                    'gigapixel_flag' => $data[11],
                    'render_flag' => $data[12],
                    'olotipo' => $data[13],
                    'riferimento_tassonomico' => $data[14],
                    'nome_comune' => $data[15],
                    'taxon_group' => $data[16],
                    'riferimento_cronologico' => $data[17],
                    'id_catalogo' => $data[18],
                    'multiplo' => $data[19],
                    'originale' => $data[20],
                    'fossile' => $data[21],
                    'materiale' => $data[22],
                    'modalita_acquisizione' => $data[23],
                    'data_acquisizione' => $data[24],
                    'data_inventario' => $data[25],
                    'proprieta' => $data[26],
                    'provenienza' => $data[27],
                    'codice_patrimonio' => $data[28],
                    'fornitore' => $data[29],
                    'gigapixel_file' => $data[30],
                    'render_file' => $data[31],
                ];

                // Inserisci i dati nel database
                YourModel::create($csvData);
            }

            fclose($handle);

            return redirect()->back()->with('success', 'CSV Imported Successfully.');
        } else {
            return redirect()->back()->with('error', 'There was a problem uploading the file.');
        }
    }
}
