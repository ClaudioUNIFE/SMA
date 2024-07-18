<?php

namespace App\Http\Controllers;

use App\Exports\FindsExport;
use Illuminate\Http\Request;
use Maatwebsite\Excel\Facades\Excel;

class ExportController extends Controller
{
    public function export($ids)
    {
        set_time_limit(300); // Aumenta il tempo massimo di esecuzione a 300 secondi
        ini_set('memory_limit', '1024M');


        $ids = explode(',', $ids); // Se gli ID sono passati come stringa separata da virgole

        return Excel::download(new FindsExport($ids), 'finds.xlsx');
    }
}
