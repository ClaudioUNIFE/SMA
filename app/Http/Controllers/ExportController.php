<?php

namespace App\Http\Controllers;

use App\Exports\FindsExport;
use Illuminate\Http\Request;
use Maatwebsite\Excel\Facades\Excel;


class ExportController extends Controller
{
    public function export($ids)
    {
        //$ids = $request->input('ids'); // Recupera l'array di ID dalla richiesta
        $ids = explode(',', $ids); // Se gli ID sono passati come stringa separata da virgole

        return Excel::download(new FindsExport($ids), 'finds.xlsx');
    }
}
