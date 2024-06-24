<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Acquisition;
use App\Models\BiologicalEntity;
use App\Models\Collection;
use App\Models\Deposit;
use App\Models\Find;
use App\Models\Museum;
use App\Models\Restoration;
use App\Models\User;
use Maatwebsite\Excel\Facades\Excel;
use Illuminate\Support\Facades\Schema;

class ImportController extends Controller
{
    public function showImportForm()
    {
        return view('import');
    }

    public function import(Request $request)
    {
        $request->validate([
            'file' => 'required|mimes:csv,txt',
        ]);

        $file = $request->file('file');
        $importData = array_map('str_getcsv', file($file->getRealPath()));

        // Estrarre l'intestazione
        $header = array_shift($importData);

        // Loop attraverso i dati e inserirli nella tabella appropriata
        foreach ($importData as $row) {
            $data = array_combine($header, $row);
            $table = $data['table'];

            switch ($table) {
                case 'acquisitions':
                    Acquisition::create($data);
                    break;
                case 'biological_entities':
                    BiologicalEntity::create($data);
                    break;
                case 'collections':
                    Collection::create($data);
                    break;
                case 'deposits':
                    Deposit::create($data);
                    break;
                case 'finds':
                    Find::create($data);
                    break;
                case 'museums':
                    Museum::create($data);
                    break;
                case 'restorations':
                    Restoration::create($data);
                    break;
                case 'users':
                    User::create($data);
                    break;
                default:
                    throw new \Exception("Unknown table: $table");
            }
        }

        return back()->with('success', 'File imported successfully.');
    }
}
