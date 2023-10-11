<?php

namespace App\Exports;

use App\Models\Jadwal;
use Maatwebsite\Excel\Concerns\FromCollection;
use Maatwebsite\Excel\Facades\Excel;
use Illuminate\Http\Request;

class ExportJadwal implements FromCollection
{
    /**
    * @return \Illuminate\Support\Collection
    */
    public function collection()
    {
        $data = Jadwal::all();
        return view('Jadwal', ['Jadwal' => $data]);
    }
    function cetakexcel()
    {
        return Excel::download(new ExportJadwal, 'Jadwal.xlsx');
    }
}
