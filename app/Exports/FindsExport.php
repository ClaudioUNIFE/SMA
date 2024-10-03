<?php

namespace App\Exports;

use Illuminate\Contracts\View\View;
use Maatwebsite\Excel\Concerns\FromView;
use Illuminate\Support\Facades\DB;

class FindsExport implements FromView
{
    protected $ids;

    public function __construct(array $ids)
    {
        $this->ids = $ids;
    }

    public function view(): View
    {

        // Query per ottenere i dati necessari dai reperti
        $finds = DB::table('finds')
        ->leftJoin('biological_entities', 'finds.id', '=', 'biological_entities.id_reperto')
        ->leftJoin('collections', 'finds.id_collezione', '=', 'collections.id')
        ->leftJoin('deposits', 'finds.id_deposito', '=', 'deposits.id')
        ->leftJoin('catalogs', 'finds.id', '=', 'catalogs.id_reperto')
        ->leftJoin('compositions', 'finds.id', '=', 'compositions.id_reperto')
        ->leftJoin('acquisitions', 'finds.id', '=', 'acquisitions.id_reperto')
        ->leftJoin('attachments', 'finds.id', '=', 'attachments.id_reperto')
        ->select(
            'finds.*',
            'biological_entities.*',
            'collections.*',
            'deposits.*',
            'catalogs.*',
            'compositions.*',
            'acquisitions.*',
            'attachments.*',
            'finds.descrizione as find_descrizione',
            'collections.descrizione as collection_descrizione'
        )
        ->whereIn('finds.id', $this->ids)
        ->get();
        // Restituisci la vista con i dati da esportare
        return view('export', ['finds' => $finds]);
    }
}
