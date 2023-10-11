@extends('layouts.vertical', ['title' => 'Responsive Table', 'mode' => $mode ?? '', 'demo' => $demo ?? ''])

@section('css')
    @vite(['node_modules/admin-resources/rwd-table/rwd-table.min.css'])
@endsection

@section('content')
    @include('layouts.shared/page-title', ['page_title' => 'Responsive Table', 'sub_title' => 'Tables'])

    <div class="row">
        <div class="col-12">
            <div class="card">
                <div class="card-body">
                    <div class="row">
                        <div class="col-md-6">
                            <button type="button" class="btn btn-success"  id="printPdfBtn" >Print Pdf</button>
                            <button type="button" class="btn btn-warning" data-excel-url="{{ route('excel.export') }}" id="downloadExcelBtn">Unduh excel</button>


                        </div>
                    <br>
                    </br>
                   
                </br>
                    </div>
                   <div class="responsive-table-plugin">
                        <div class="table-rep-plugin">
                            <div class="table-responsive" data-pattern="priority-columns">
                                <table id="tech-companies-1" class="table table-striped">
                                    <thead>
                                        <tr>
                                            <th data-priority="6">Grup</th>
                                            <th data-priority="1">Tim</th>
                                            <th data-priority="3">Main</th>
                                            <th data-priority="1">Menang</th>
                                            <th data-priority="3">Kalah</th>
                                            <th data-priority="3">Seri</th>
                                            <th data-priority="6">poin</th>
                                            <th data-priority="6">Gol</th>
                                            <th data-priority="6">Gol_k</th>
                                            <th data-priority="6">Selisih</th>
                                            <th data-priority="6">Peringkat</th>
                                          
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @foreach ($Grub as $DataGrub)
                                        <tr>
                                            <th>{{$DataGrub->grup}}</th>
                                            <td>{{$DataGrub->tim}}</td>
                                            <td>{{$DataGrub->main}}</td>
                                            <td>{{$DataGrub->menang}}</td>
                                            <td>{{$DataGrub->kalah}}</td>
                                            <td>{{$DataGrub->seri}}</td>
                                            <td>{{$DataGrub->poin}}</td>
                                            <td>{{$DataGrub->gol}}</td>
                                            <td>{{$DataGrub->gol_K}}</td>
                                            <td>{{$DataGrub->selisih}}</td>
                                            <td>{{$DataGrub->peringkat}}</td>
                                        </tr>
                                            
                                        @endforeach
                                    
                              
                                    </tbody>
                                </table>
                            </div> <!-- end .table-responsive -->

                        </div> <!-- end .table-rep-plugin-->
                    </div> <!-- end .responsive-table-plugin-->
                </div>
            </div> <!-- end card -->
        </div> <!-- end col -->
    </div>
    <!-- end row -->
@endsection

@section('script')
    @vite(['resources/js/pages/responsive-table.init.js'])
@endsection
s