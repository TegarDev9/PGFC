<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Jadwal;

class DetailJadwalController extends Controller
{
    //
    public function view(Request $request){
        return view('Detailjadwal');
  
    }

    public function index(){
        $Detailjadwal = Jadwal::all();
        return view('Detailjadwal', ['Detailjadwal' => $Detailjadwal]);
    }
}
