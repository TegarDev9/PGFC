<?php

namespace App\Http\Controllers;


use Illuminate\Http\Request;
use App\Models\Jadwal;
use Barryvdh\DomPDF\Facade\Pdf;


class JadwalController extends Controller
{
    Public function index(Request $request){
        return view('Jadwal');

    }
    public function view(){
        $Jadwal = Jadwal::all();
        return view('Jadwal', ['Jadwal' => $Jadwal]);
    }

    public function viewdetail($id)
    {
        $detailjadwal = Jadwal::find($id);
        if (!$detailjadwal) {
            abort(404); // Tampilkan halaman 404 jika data tidak ditemukan
        }
        return view('DetailJadwal.blade', compact('detailjadwal'));
    }
    
    

//     public function cetak()
//     {
//         $data['Jadwal'] = Jadwal::all();
//         $pdf = Pdf::loadview('Jadwal', $data);
//         return $pdf->download('Jadwal.pdf');
// }
}


