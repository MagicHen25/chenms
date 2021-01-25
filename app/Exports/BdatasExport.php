<?php

namespace App\Exports;

use App\Models\Bdata;
use Maatwebsite\Excel\Concerns\FromCollection;

class BdatasExport implements FromCollection
{
    /**
    * @return \Illuminate\Support\Collection
    */
    public function collection()
    {
        return Bdata::all();
    }
}
