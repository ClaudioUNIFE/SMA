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

class FindViewController extends Controller
{
    public function showlist(){
        // Recupera tutti i reperti, carica le info entità biologiche associate e il gigapixel
        $finds=Find::getUtilsforCard();
        //$finds=FindViewController::convertJPGMethod($finds);
       // dd($finds);
        return view('find-consultation', compact('finds'));
    }



function convertToJpeg($filePath)
{
    // Get the original image
    $image = ImageManagerStatic::make(Storage::path($filePath));

    // Define the path for the new image
    $newFilePath = preg_replace('/\.(png|gif|bmp|webp)$/i', '.jpg', $filePath);

    // Convert and save the image as a JPEG with reduced quality (e.g., 75 out of 100)
    $image->encode('jpg', 75);
    Storage::put($newFilePath, (string) $image);

    // Return the new file path
    return $newFilePath;
}

public function convertJPGMethod($finds)
    {
        foreach ($finds as $find) {
            $gigapixelFilePath = 'storage/gigapixel/' . $find->gigapixel_file;
            $newGigapixelFilePath = $this->convertToJpeg($gigapixelFilePath);
            $find->gigapixel_file = $newGigapixelFilePath;
        }

        return $finds;
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
       $catalogs = Catalog::all();
       return view('store-find', compact('catalogs', 'deposits','museums', 'collections'));
   }


   public function store(Request $request){
        
   }

}




