<?php

namespace App\Http\Controllers;

use App\Models\DataSekolah;
use Illuminate\Http\Request;

class DetailDataSekolahController extends Controller
{
    public function view($id)
    {
        $DetailDataSekolah = DataSekolah::find($id);
        return view('/DataSekolah/DetailDataSekolah', ['DetailDataSekolah' => $DetailDataSekolah]);


    }
    
    public function index()
    {
        // Jika Anda ingin menampilkan halaman tanpa melakukan operasi dari request, cukup kembalikan tampilan.
        return view('/DataSekolah/DetailDataSekolah');
    }
}
