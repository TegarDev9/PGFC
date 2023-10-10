@extends('layouts.vertical', ['title' => 'Jadwal Pertandingan', 'mode' => $mode ?? '', 'demo' => $demo ?? ''])

@section('content')
    @include('layouts.shared/page-title', ['sub_title' => 'Pages', 'page_title' => 'Jadwal Pertandingan'])

    <div class="row">
        <div class="col-12">
            <div class="card">
                <div class="card-body">
                    <div class="timeline" dir="ltr">
                       

                        <div class="col-md-6">
                            <button type="button" class="btn btn-success"  href="{{url('Jadwal/export/excel')}}" >Export Excel</button>
                            <br>
                        </br>
                            <button type="button" class="btn btn-warning" >Print PDF</button>


                        </div>
                        

                        <article class="timeline-item alt">
                            <div class="text-end">

                                <div class="time-show first">
                                    <a href="" class="btn btn-primary w-lg">Detail Jadwal</a



                                </div>
                            </div>
                            @foreach ($Jadwal->sortBy('grub') as $JadwalPertandingan)
                        </article>
                                <article class="timeline-item alt">
                                    <div class="timeline-desk">
                                        <div class="panel">
                                            <div class="timeline-box">
                                                <span class="arrow-alt"></span>
                                                <span class="timeline-icon"><i class="ri-record-circle-line"></i></span>
                                                <h4 class="fs-16 fw-semibold ">{{ $JadwalPertandingan->tanggal }}</h4>
                   
                                                <p class="timeline-date text-muted">
                                                    <small>{{ $JadwalPertandingan->mulai }}</small></p>
                                                <p>{{ $JadwalPertandingan->grub }}</p>
                                                <p>{{ $JadwalPertandingan->id_tim }}</p>
                                                <p>{{ $JadwalPertandingan->id_tim2 }}</p>
                                            </div>
                                        </div>
                                    </div>
                                </article>

                               
                               
                        @endforeach
                    </div>
                    <!-- end timeline -->
                </div>
            </div>
            <!-- end card -->
        </div>
    </div>
    <!-- end row -->

    <div class="row">
        <div class="col-12">
            <div class="card">
                <div class="card-body">
                    <div class="timeline timeline-left">
                        <article class="timeline-item alt">
                            <div class="text-start">
                                <div class="time-show first">
                                    <a href="#" class="btn btn-primary w-lg">Today</a>
                                </div>
                            </div>
                        </article>
                        @foreach ($Jadwal as $JadwalPertandingan )
                        <article class="timeline-item">
                            <div class="timeline-desk">
                                <div class="panel">
                                    <div class="timeline-box">
                                        <span class="arrow"></span>
                                        <span class="timeline-icon bg-success"><i class="ri-record-circle-line"></i></span>
                                        <h4 class="fs-16 fw-semibold ">{{ $JadwalPertandingan->tanggal }}</h4>
                                        <p class="timeline-date text-muted">
                                            <small>{{ $JadwalPertandingan->mulai }}</small></p>
                                        <p>{{ $JadwalPertandingan->grub }}</p>
                                        <p>{{ $JadwalPertandingan->id_tim }}</p>
                                        <p>{{ $JadwalPertandingan->id_tim2 }}</p>
                                    </div>
                                </div>
                            </div>
                        </article>
                       
                        @endforeach

                    </div>
                    <!-- end timeline -->
                </div>
                <!-- end card-body -->
            </div>
            <!-- end card -->
        </div>
        <!-- end col -->
    </div>
    <!-- end row -->
@endsection
