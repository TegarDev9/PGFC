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
            
                    <div class="responsive-table-plugin">
                        <div class="table-rep-plugin">
                            <div class="table-responsive" data-pattern="priority-columns">
                                <table id="tech-companies-1" class="table table-striped">
                                    <thead>
                                        <tr>
                                            <th>Company</th>
                                            <th data-priority="1">grub</th>
                                            <th data-priority="3">id Tim</th>
                                            <th data-priority="1">id Tim </th>
                                            <th data-priority="3">Prev Close</th>
                                            <th data-priority="3">Tanggal</th>
                                            <th data-priority="6">Mulai</th>
                                            <th data-priority="6">Selesai</th>
                                          
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @foreach ($detailjadwal->sortBy('id') as $JadwalPertandingan)
                                        <tr>
                                            <th>{{ $JadwalPertandingan->grub }}</th>
                                            <td>{{ $JadwalPertandingan->id_tim }}</td>
                                            <td>{{ $JadwalPertandingan->id_tim2 }}</td>
                                            <td>{{ $JadwalPertandingan->tanggal }}</td>
                                            <td>{{ $JadwalPertandingan->mulai }}</td>
                                            <td>{{ $JadwalPertandingan->selesai }}</td>
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
