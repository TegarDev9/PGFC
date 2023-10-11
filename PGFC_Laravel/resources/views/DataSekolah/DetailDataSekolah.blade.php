@extends('layouts.vertical', ['title' => 'Editable Table', 'mode' => $mode ?? '', 'demo' => $demo ?? ''])

@section('css')
@endsection

@section('content')
@include('layouts.shared/page-title',['page_title' => 'Detail Data Sekolah','sub_title' => 'Tables'])

<div class="row">
    <div class="col-12">
        <div class="card">
            <div class="card-body">

                <h5 class="mt-0">Detail Data Sekolah</h5>
                <p class="sub-header font-13">Informasi Umum Mengenai Data Sekolah</p>
                <div  class="table-responsive"  >
                    <table class="table table-centered mb-0" id="inline-editable">
                        <h5 class="mt-0">Data Umum</h5>
                        <thead class="table-warning">
                         
                            <tr>
                                <th>#</th>
                                <th>Status</th>
                                <th>Prestasi</th>
                                <th>Nama Sekolah</th>
                                <th>Alamat Sekolah</th>
                                <th>Telp</th>
                                <th>Fax</th>
                                <th>Email</th>
                                <th>Tanggal Update</th>
                                <th>Logo</th>
                            </tr>
                        </thead >
                   
                    
                        <tbody>
                            @foreach ($DetailDataSekolah as $Data)
                            <tr>
                                
                                <td><span class="co-name">{{ $Data->id }}</span></td>
                                <td>{{ $Data->Nama_Sekolah }}</td>
                                <td>{{ $Data->Telp }}</td>
                                <td>{{ $Data->Fax }}</td>
                                <td>{{ $Data->Email }}</td>
                                <td>{{ $Data->password }}</td>
                                <td>{{ $Data->Tanggal_update }}</td>
                                <td>{{ $Data->Logo }}</td>
                            </tr>
                            @endforeach
                        </tbody>
                    </table>
<br>
                    <table class="table table-centered mb-0" id="inline-editable">
                        <h5 class="mt-0">Data  Pj Sekolah</h5>
                        <thead class="table-dark">
                            <tr>
                                <th>#</th>
                                <th>Nama Kepala Sekolah</th>
                                <th>Alamat Kepala Sekolah</th>
                                <th>Telp</th>
                                <th>Hp</th>
                                <th>Email</th>
                             
                            </tr>
                        </thead>
                    
                        <tbody>
                            <tr>
                                <td>1</td>
                                <td>Tiger Nixon</td>
                                <td>System Architect</td>
                                <td>Edinburgh</td>
                                <td>61</td>
                                <td>2011/04/25</td>
                             
                            </tr>
                      
                        </tbody>
                    </table>

<br>
                    <table class="table table-centered mb-0" id="inline-editable">
                        <h5 class="mt-0">Data  Pj Sekolah TIM</h5>
                        <thead class="table-warning">
                            <tr>
                                <th>#</th>
                                <th>Nama</th>
                                <th>Jabatan</th>
                                <th>Nip</th>
                                <th>Hp</th>
                                <th>Email</th>
                                <th>Salary</th>
                                <th>Foto</th>
                                <th>Ktp</th>
                            </tr>
                        </thead>
                    
                        <tbody>
                            <tr>
                                <td>1</td>
                                <td>Tiger Nixon</td>
                                <td>System Architect</td>
                                <td>Edinburgh</td>
                                <td>61</td>
                                <td>2011/04/25</td>
                                <td>$320,800</td>
                                <td>2011/04/25</td>
                                <td>$320,800</td>
                            </tr>
                      
                        </tbody>
                    </table>
<br>

                    <table class="table table-centered mb-0" id="inline-editable">
                        <h5 class="mt-0">Data Pelatih</h5>
                        <thead class="table-dark">
                            <tr>
                                <th>#</th>
                                <th>Nama</th>
                                <th>Hp</th>
                                <th>Alamat</th>
                                <th>Foto</th>
                                <th>Ktp</th>
                               
                            </tr>
                        </thead>
                    
                        <tbody>
                            <tr>
                                <td>1</td>
                                <td>Tiger Nixon</td>
                                <td>System Architect</td>
                                <td>Edinburgh</td>
                                <td>61</td>
                                <td>2011/04/25</td>
                             
                            </tr>
                      
                        </tbody>
                    </table>
<br>
                    <table class="table table-centered mb-0" id="inline-editable">
                        <h5 class="mt-0">Data Official</h5>
                        <thead class="table-warning">
                            <tr>
                                <th>#</th>
                                <th>Nama</th>
                                <th>Hp</th>
                                <th>Alamat</th>
                                <th>Foto</th>
                                <th>Ktp</th>
                               
                            </tr>
                        </thead>
                    
                        <tbody>
                            <tr>
                                <td>1</td>
                                <td>Tiger Nixon</td>
                                <td>System Architect</td>
                                <td>Edinburgh</td>
                                <td>61</td>
                                <td>2011/04/25</td>
                              
                            </tr>
                      
                        </tbody>
                    </table>


                    <table class="table table-centered mb-0" id="inline-editable">
                        <h5 class="mt-0">Data Manajer</h5>
                        <thead class="table-dark">
                            <tr>
                                <th>#</th>
                                <th>Nama</th>
                                <th>Hp</th>
                                <th>Alamat</th>
                                <th>Foto</th>
                                <th>Ktp</th>
                             
                            </tr>
                        </thead>
                    
                        <tbody>
                            <tr>
                                <td>1</td>
                                <td>Tiger Nixon</td>
                                <td>System Architect</td>
                                <td>Edinburgh</td>
                                <td>61</td>
                                <td>2011/04/25</td>
                            
                            </tr>
                      
                        </tbody>
                    </table>


<br>
                    <table class="table table-centered mb-0" id="inline-editable">
                        <h5 class="mt-0">Data Pj Supporter Siswa</h5>
                        <thead class="table-warning">
                            <tr>
                                <th>#</th>
                                <th>Nama</th>
                                <th>Hp</th>
                                <th>Alamat</th>
                                <th>Foto</th>
                                <th>KTP / Kartu Anggota Siswa</th>
                             
                            </tr>
                        </thead>
                    
                        <tbody>
                            <tr>
                                <td>1</td>
                                <td>Tiger Nixon</td>
                                <td>System Architect</td>
                                <td>Edinburgh</td>
                                <td>61</td>
                                <td>2011/04/25</td>
                              
                            </tr>
                      
                        </tbody>
                    </table>


                    
<br>
<table class="table table-centered mb-0" id="inline-editable">
    <h5 class="mt-0">Data Pj Supporter Guru</h5>
    <thead class="table-dark">
        <tr>
            <th>#</th>
            <th>Nama</th>
            <th>Hp</th>
            <th>Alamat</th>
            <th>Foto</th>
            <th>KTP</th>
         
        </tr>
    </thead>

    <tbody>
        <tr>
            <td>1</td>
            <td>Tiger Nixon</td>
            <td>System Architect</td>
            <td>Edinburgh</td>
            <td>61</td>
            <td>2011/04/25</td>
          
        </tr>
  
    </tbody>
</table>

                </div> <!-- end .table-responsive-->
            </div> <!-- end card-body -->
        </div> <!-- end card -->
    </div> <!-- end col -->
</div> <!-- end row -->


<div class="row">
    <div class="col-12">
        <div class="card">
            <div class="card-body">

                <h5 class="mt-0">Daftar Pemain</h5>
                <p class="sub-header font-13">Inline edit like a spreadsheet, toolbar column with edit button only and without focus on first input.</p>
                <div class="table-responsive">
                    <table class="table table-centered mb-0" id="btn-editable">
                        <thead class="table-primary">
                            <tr>
                                <th>#</th>
                                <th>No Punggung</th>
                                <th>Nama</th>
                                <th>Kelas</th>
                                <th>Tanggal Lahir</th>
                                <th>Ijasah</th>
                                <th>Rapor</th>
                                <th>Keterangan Siswa</th>
                                <th>Kartu Siswa</th>
                                <th>Foto</th>
                                <th>Action</th>
                            </tr>
                        </thead>
                    
                        <tbody>
                            <tr>
                                <td>1</td>
                                <td>Tiger Nixon</td>
                                <td>System Architect</td>
                                <td>Edinburgh</td>
                                <td>61</td>
                                <td>2011/04/25</td>
                                <td>$320,800</td>
                                <td>23</td>
                                <td>2008/12/13</td>
                                <td>$103,600</td>
                            </tr>
                           
                        </tbody>
                    </table>
                </div> <!-- end .table-responsive-->
            </div> <!-- end card-body -->
        </div> <!-- end card -->
    </div> <!-- end col -->
</div> <!-- end row -->
@endsection

@section('script')
    @vite(['resources/js/pages/tabledit.init.js'])
@endsection