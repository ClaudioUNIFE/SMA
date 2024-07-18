<?php

namespace App\Exports;

use App\Models\Find;
use Maatwebsite\Excel\Concerns\FromCollection;

class FindExport implements FromCollection
{
    /**
    * @return \Illuminate\Support\Collection
    */
    public function collection()
    {
        return Find::all();
    }
}
