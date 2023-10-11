<?php

namespace App\Http\Controllers;

use App\Exports\DataSekolahExport;
use App\Models\DataSekolah;
use Barryvdh\DomPDF\PDF;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Log;
use Maatwebsite\Excel\Facades\Excel;

class DataSekolahController extends Controller
{
    public function index(Request $request)
    {
        return view('DataSekolah');
    }

    public function view(Request $request)
    {
        $DataSekolah = DataSekolah::orderBy('id', 'desc')->orderBy('Nama_Sekolah', 'asc')->orderBy('Telp', 'desc')->orderBy('Fax', 'asc')->orderBy('Email', 'desc')->orderBy('password', 'asc')->orderBy('Tanggal_update', 'desc')->orderBy('Logo', 'asc')->get();
        return view('DataSekolah', ['DataSekolah' => $DataSekolah]);
    }

    function pdfsekolah(){
        try {
            $DataSekolah = DataSekolah::all();
            $pdf = app('dompdf.wrapper')->loadView('DataSekolah', ['DataSekolah' => $DataSekolah]);
            $pdfPath = storage_path('app/public/pdf');
            $pdf->save($pdfPath);
            return response()->json(['url' => $pdfPath]);
        } catch (\Exception $e) {
            // Catat pesan kesalahan
            Log::error($e->getMessage());
            // Melemparkan pengecualian
            return response()->json(['error' => 'Terjadi kesalahan saat membuat PDF'], 500);
        }
    }

    public function downloadExcel($slug)
    {
        return Excel::download(new DataSekolahExport, 'DataSekolah.'.$slug);
    }
    


    public function show($id)
    {
        $dataSekolah = DataSekolah::find($id);
        return response()->json($dataSekolah); 
    }
    
    public function update(Request $request, $id)
    {
        dd($request->all());
        $dataSekolah = DataSekolah::find($id);
        if (!$dataSekolah) {
            return response()->json(['error' => 'Data Sekolah tidak ditemukan'], 404);
        }
    
        $request->validate([
            'Nama_Sekolah' => 'required|string|max:255',
            'Telp' => 'required|string|max:20',
            'Fax' => 'required|string|max:20',
            'Email' => 'required|email|max:255',
            'password' => 'required|string|max:255',
            'Tanggal_update' => 'required|date',
            'Logo' => 'required|string|max:255',
        ]);
        $dataSekolah->update($request->all());
        
        return response()->json(['success' => 'Data Sekolah berhasil diubah']);
    }
    
    
    
    

    public function delete($id){
        $dataSekolah = DataSekolah::find($id);

        if (!$dataSekolah) {
            return response()->json('DataSekolah')->with(['error' => 'Data Sekolah tidak ditemukan']);

        }
        $dataSekolah->delete();
        return redirect()->route('DataSekolah')->with(['success' => 'Data Sekolah berhasil dihapus']);
        
    }
}


function editview(request $request){
    return view('sekolah.edit');
}