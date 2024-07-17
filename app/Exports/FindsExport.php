<?php

namespace App\Exports;

use App\Models\Find;
use Maatwebsite\Excel\Concerns\FromCollection;
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
        $finds = DB::table('finds')
            ->join('biological_entities', 'finds.id', '=', 'biological_entities.id_reperto')
            ->join('collections', 'finds.id_collezione', '=', 'collections.id')
            ->join('deposits', 'finds.id_deposito', '=', 'deposits.id')
            ->join('catalogs', 'finds.id', '=', 'catalogs.id_reperto')
            ->join('compositions', 'finds.id', '=', 'compositions.id_reperto')
            ->join('acquisitions', 'finds.id', '=', 'acquisitions.id_reperto')
            ->join('renders', 'finds.id', '=', 'renders.id_reperto')
            ->join('gigapixels', 'finds.id', '=', 'gigapixels.id_reperto')
            ->select(
                'finds.*',
                'biological_entities.*',
                'collections.*',
                'deposits.*',
                'catalogs.*',
                'compositions.*',
                'acquisitions.*',
                'renders.*',
                'gigapixels.*',
                'finds.descrizione as find_descrizione',
                'collections.descrizione as collection_descrizione',
            )
            ->whereIn('finds.id', $this->ids)
            ->get();

            

        return view('export', ['finds' => $finds]);
    }
}
