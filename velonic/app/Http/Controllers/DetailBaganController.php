<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DetailBaganController extends Controller
{
    public function view(Request $request)
    {
        return view('Bagan/DetailBagan');
    }
}
