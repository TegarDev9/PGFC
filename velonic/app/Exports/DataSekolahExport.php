<?php

namespace App\Exports;

use App\Models\DataSekolah;
use Maatwebsite\Excel\Concerns\FromCollection;

class DataSekolahExport implements FromCollection
{
    /**
    * @return \Illuminate\Support\Collection
    */
    public function collection()
    {
        return DataSekolah::all();
    }
}
