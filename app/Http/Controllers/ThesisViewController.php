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

    public function convertToPdf($filePath)
    {
        // Implementa la logica di conversione in PDF, se necessario
        // Qui puoi usare una libreria di conversione, se disponibile
        // Questo è solo un esempio, quindi dovrai adattarlo alle tue esigenze specifiche
        $newFilePath = preg_replace('/\.(doc|docx)$/i', '.pdf', $filePath);

        // Esempio di conversione
        // $pdf = PdfConverter::convert($filePath);
        // Storage::put($newFilePath, (string) $pdf);

        // Restituisce il nuovo percorso del file
        return $newFilePath;
    }

    public function convertPdfMethod($theses)
    {
        foreach ($theses as $thesis) {
            $filePath = 'storage/theses/' . $thesis->percorso_file;
            $newFilePath = $this->convertToPdf($filePath);
            $thesis->percorso_file = $newFilePath;
        }

        return $theses;
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
        return view('store-thesis', compact('deposits', 'museums'));
    }

    public function store(Request $request)
    {
        // Implementa la logica di salvataggio della tesi
        // Esempio:
         $validatedData = $request->validate([
             'id_museo' => 'required|integer',
             'id_deposito' => 'required|integer',
             'autore' => 'required|string|max:255',
             'titolo' => 'required|string|max:255',
             'anno_accademico' => 'required|string|max:9',
             'disciplina' => 'required|string|max:255',
             'relatore' => 'required|string|max:255',
             'correlatore' => 'nullable|string|max:255',
             'contro_relatore' => 'nullable|string|max:255',
             'percorso_file' => 'required|string|max:255',
             'note' => 'nullable|string'
         ]);

         Thesis::create($validatedData);

         return redirect()->route('thesis-consultation');
    }
}
