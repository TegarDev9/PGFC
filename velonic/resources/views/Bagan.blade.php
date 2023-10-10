@extends('layouts.vertical', ['title' => 'Timeline', 'mode' => $mode ?? '', 'demo' => $demo ?? ''])

@section('content')
    @include('layouts.shared/page-title', ['sub_title' => 'Pages', 'page_title' => 'Bagan Champions'])

    <div class="row">
        <div class="col-12">
            <div class="card">
                <div class="card-body">   
                    <div class="row">
                        <div class="col-md-6">
                            <button type="button" class="btn btn-success"  id="" >Print Pdf</button>
                            <button type="button" class="btn btn-warning" data-excel-url="" id="">Unduh excel</button>
                            <a type="button" class="btn btn-dark" href="{{ route('DetailBagan') }}" >Tabel Bagan</a>

                        </div>
                       
                    </div>
                    <br>
                    <div class="text-center mb-4">
                        <a href="" class="btn btn-primary w-lg">16 Besar</a>
                    </div>
                    <div class="timeline" dir="ltr">
                        <article class="timeline-item alt">
                            <div class="text-end">
                            </div>
                            <div class="container">
                                <div class="row">
                                    <div class="col-md-6">
                                        <article class="timeline-item alt">
                                            <div class="timeline-desk">
                                                <div class="panel">
                                                    <div class="timeline-box border-bottom">
                                                        <span class="arrow-alt"></span>
                                                        <h4 class="fs-16 fw-semibold text-center ">Group A</h4>
                                                    </br>
                                                        <table class="table">
                                                            <thead class="table-dark ">
                                                                <tr>   
                                                                    <tr>
                                                                        <h4 class=" fs-16 fw-semibold text-center text-warning  "><Strong>Tanggal</Strong></h4>
                                                                    </tr>
                                                                </tr>
                                                            </thead>
                                                        <br>
                                                            <tbody>
                                                                <tr>
                                                                    <td class="text-center">Sma 1 Gresik</td>
                                                                    <td class="text-center">Sma 1 Surabaya</td>
                                                                    <td class="text-center">Smk 1 Gresik</td>
                                                                    <td class="text-center">Smk 1 Surabaya</td>
                                                                   
                                                                </tr>
                                                            </tbody>
                                                          </table>
                                                    </div>
                                                </div>
                                            </div>
                                        </article>
                                    </div>
                                    
                                    <div class="col-md-6">
                                        <article class="timeline-item">
                                            <div class="timeline-desk">
                                                <div class="panel">
                                                    <div class="timeline-box">
                                                        <span class="arrow"></span>
                                                        <h4 class="fs-16 fw-semibold text-center ">Group A</h4>
                                                    </br>
                                                        <table class="table">
                                                            <thead class="table-dark ">
                                                                <tr>   
                                                                    <tr>
                                                                        <h4 class=" fs-16 fw-semibold text-center text-warning  "><Strong>Tanggal</Strong></h4>
                                                                    </tr>
                                                                </tr>
                                                            </thead>
                                                        <br>
                                                            <tbody>
                                                                <tr>
                                                                    <td class="text-center">Sma 1 Gresik</td>
                                                                    <td class="text-center">Sma 1 Surabaya</td>
                                                                    <td class="text-center">Smk 1 Gresik</td>
                                                                    <td class="text-center">Smk 1 Surabaya</td>
                                                                   
                                                                </tr>
                                                            </tbody>
                                                          </table>
                                                        
                                                    </div>
                                                </div>
                                            </div>
                                        </article>
                                    </div>
                                </div>
                            </div>


                            
                        
                    </div>



                    
                    <!-- end timeline -->

                    <div class="timeline" dir="ltr">
                        <article class="timeline-item alt">
                            <div class="text-end">
                            </div>
                            <div class="container">
                                <div class="row">
                                    <div class="col-md-6">
                                        <article class="timeline-item alt">
                                            <div class="timeline-desk">
                                                <div class="panel">
                                                    <div class="timeline-box border-bottom">
                                                        <span class="arrow-alt"></span>
                                                        <h4 class="fs-16 fw-semibold text-center ">Group A</h4>
                                                    </br>
                                                        <table class="table">
                                                            <thead class="table-dark ">
                                                                <tr>   
                                                                    <tr>
                                                                        <h4 class=" fs-16 fw-semibold text-center text-warning  "><Strong>Tanggal</Strong></h4>
                                                                    </tr>
                                                                </tr>
                                                            </thead>
                                                        <br>
                                                            <tbody>
                                                                <tr>
                                                                    <td class="text-center">Sma 1 Gresik</td>
                                                                    <td class="text-center">Sma 1 Surabaya</td>
                                                                    <td class="text-center">Smk 1 Gresik</td>
                                                                    <td class="text-center">Smk 1 Surabaya</td>
                                                                   
                                                                </tr>
                                                            </tbody>
                                                          </table>
                                                    </div>
                                                </div>
                                            </div>
                                        </article>
                                    </div>
                                    
                                    <div class="col-md-6">
                                        <article class="timeline-item">
                                            <div class="timeline-desk">
                                                <div class="panel">
                                                    <div class="timeline-box">
                                                        <span class="arrow"></span>
                                                        <h4 class="fs-16 fw-semibold text-center ">Group A</h4>
                                                    </br>
                                                        <table class="table">
                                                            <thead class="table-dark ">
                                                                <tr>   
                                                                    <tr>
                                                                        <h4 class=" fs-16 fw-semibold text-center text-warning  "><Strong>Tanggal</Strong></h4>
                                                                    </tr>
                                                                </tr>
                                                            </thead>
                                                        <br>
                                                            <tbody>
                                                                <tr>
                                                                    <td class="text-center">Sma 1 Gresik</td>
                                                                    <td class="text-center">Sma 1 Surabaya</td>
                                                                    <td class="text-center">Smk 1 Gresik</td>
                                                                    <td class="text-center">Smk 1 Surabaya</td>
                                                                   
                                                                </tr>
                                                            </tbody>
                                                          </table>
                                                    </div>
                                                </div>
                                            </div>
                                        </article>
                                    </div>
                                </div>
                            </div>


                            
                        
                    </div>
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
                    <div class="text-center mb-4">
                        <a href="" class="btn btn-primary w-lg">16 Besar</a>
                    </div>
                    <div class="timeline" dir="ltr">
                        <article class="timeline-item alt">
                            <div class="text-end">
                            </div>
                            <div class="container">
                                <div class="row">
                                    <div class="col-md-6">
                                        <article class="timeline-item alt">
                                            <div class="timeline-desk">
                                                <div class="panel">
                                                    <div class="timeline-box border-bottom">
                                                        <span class="arrow-alt"></span>
                                                        <h4 class="fs-16 fw-semibold text-center ">Group A</h4>
                                                    </br>
                                                        <table class="table">
                                                            <thead class="table-dark ">
                                                                <tr>   
                                                                    <tr>
                                                                        <h4 class=" fs-16 fw-semibold text-center text-warning  "><Strong>Tanggal</Strong></h4>
                                                                    </tr>
                                                                </tr>
                                                            </thead>
                                                        <br>
                                                            <tbody>
                                                                <tr>
                                                                    <td class="text-center">Sma 1 Gresik</td>
                                                                    <td class="text-center">Sma 1 Surabaya</td>
                                                                    <td class="text-center">Smk 1 Gresik</td>
                                                                    <td class="text-center">Smk 1 Surabaya</td>
                                                                   
                                                                </tr>
                                                            </tbody>
                                                          </table>
                                                    </div>
                                                </div>
                                            </div>
                                        </article>
                                    </div>
                                    
                                    <div class="col-md-6">
                                        <article class="timeline-item">
                                            <div class="timeline-desk">
                                                <div class="panel">
                                                    <div class="timeline-box">
                                                        <span class="arrow"></span>
                                                        <h4 class="fs-16 fw-semibold text-center ">Group A</h4>
                                                    </br>
                                                        <table class="table">
                                                            <thead class="table-dark ">
                                                                <tr>   
                                                                    <tr>
                                                                        <h4 class=" fs-16 fw-semibold text-center text-warning  "><Strong>Tanggal</Strong></h4>
                                                                    </tr>
                                                                </tr>
                                                            </thead>
                                                        <br>
                                                            <tbody>
                                                                <tr>
                                                                    <td class="text-center">Sma 1 Gresik</td>
                                                                    <td class="text-center">Sma 1 Surabaya</td>
                                                                    <td class="text-center">Smk 1 Gresik</td>
                                                                    <td class="text-center">Smk 1 Surabaya</td>
                                                                   
                                                                </tr>
                                                            </tbody>
                                                          </table>
                                                    </div>
                                                </div>
                                            </div>
                                        </article>
                                    </div>
                                </div>
                            </div>


                            
                        
                    </div>



                    
                    <!-- end timeline -->

                    <div class="timeline" dir="ltr">
                        <article class="timeline-item alt">
                            <div class="text-end">
                            </div>
                            <div class="container">
                                <div class="row">
                                    <div class="col-md-6">
                                        <article class="timeline-item alt">
                                            <div class="timeline-desk">
                                                <div class="panel">
                                                    <div class="timeline-box border-bottom">
                                                        <span class="arrow-alt"></span>
                                                        <h4 class="fs-16 fw-semibold text-center ">Group A</h4>
                                                    </br>
                                                        <table class="table">
                                                            <thead class="table-dark ">
                                                                <tr>   
                                                                    <tr>
                                                                        <h4 class=" fs-16 fw-semibold text-center text-warning  "><Strong>Tanggal</Strong></h4>
                                                                    </tr>
                                                                </tr>
                                                            </thead>
                                                        <br>
                                                            <tbody>
                                                                <tr>
                                                                    <td class="text-center">Sma 1 Gresik</td>
                                                                    <td class="text-center">Sma 1 Surabaya</td>
                                                                    <td class="text-center">Smk 1 Gresik</td>
                                                                    <td class="text-center">Smk 1 Surabaya</td>
                                                                   
                                                                </tr>
                                                            </tbody>
                                                          </table>
                                                    </div>
                                                </div>
                                            </div>
                                        </article>
                                    </div>
                                    
                                    <div class="col-md-6">
                                        <article class="timeline-item">
                                            <div class="timeline-desk">
                                                <div class="panel">
                                                    <div class="timeline-box">
                                                        <span class="arrow"></span>
                                                        <h4 class="fs-16 fw-semibold text-center ">Group A</h4>
                                                    </br>
                                                        <table class="table">
                                                            <thead class="table-dark ">
                                                                <tr>   
                                                                    <tr>
                                                                        <h4 class=" fs-16 fw-semibold text-center text-warning  "><Strong>Tanggal</Strong></h4>
                                                                    </tr>
                                                                </tr>
                                                            </thead>
                                                        <br>
                                                            <tbody>
                                                                <tr>
                                                                    <td class="text-center">Sma 1 Gresik</td>
                                                                    <td class="text-center">Sma 1 Surabaya</td>
                                                                    <td class="text-center">Smk 1 Gresik</td>
                                                                    <td class="text-center">Smk 1 Surabaya</td>
                                                                   
                                                                </tr>
                                                            </tbody>
                                                          </table>
                                                    </div>
                                                </div>
                                            </div>
                                        </article>
                                    </div>
                                </div>
                            </div>


                            
                        
                    </div>
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
                    <div class="text-center mb-4">
                        <a href="" class="btn btn-primary w-lg">Perempat Final</a>
                    </div>
                    <div class="timeline" dir="ltr">
                        <article class="timeline-item alt">
                            <div class="text-end">
                            </div>
                            <div class="container">
                                <div class="row">
                                    <div class="col-md-6">
                                        <article class="timeline-item alt">
                                            <div class="timeline-desk">
                                                <div class="panel">
                                                    <div class="timeline-box border-bottom">
                                                        <span class="arrow-alt"></span>
                                                        <h4 class="fs-16 fw-semibold text-center ">Group A</h4>
                                                    </br>
                                                        <table class="table">
                                                            <thead class="table-dark ">
                                                                <tr>   
                                                                    <tr>
                                                                        <h4 class=" fs-16 fw-semibold text-center text-warning  "><Strong>Tanggal</Strong></h4>
                                                                    </tr>
                                                                </tr>
                                                            </thead>
                                                        <br>
                                                            <tbody>
                                                                <tr>
                                                                    <td class="text-center">Sma 1 Gresik</td>
                                                                    <td class="text-center">Sma 1 Surabaya</td>
                                                                    <td class="text-center">Smk 1 Gresik</td>
                                                                    <td class="text-center">Smk 1 Surabaya</td>
                                                                   
                                                                </tr>
                                                            </tbody>
                                                          </table>
                                                    </div>
                                                </div>
                                            </div>
                                        </article>
                                    </div>
                                    
                                    <div class="col-md-6">
                                        <article class="timeline-item">
                                            <div class="timeline-desk">
                                                <div class="panel">
                                                    <div class="timeline-box">
                                                        <span class="arrow"></span>
                                                        <h4 class="fs-16 fw-semibold text-center ">Group A</h4>
                                                    </br>
                                                        <table class="table">
                                                            <thead class="table-dark ">
                                                                <tr>   
                                                                    <tr>
                                                                        <h4 class=" fs-16 fw-semibold text-center text-warning  "><Strong>Tanggal</Strong></h4>
                                                                    </tr>
                                                                </tr>
                                                            </thead>
                                                        <br>
                                                            <tbody>
                                                                <tr>
                                                                    <td class="text-center">Sma 1 Gresik</td>
                                                                    <td class="text-center">Sma 1 Surabaya</td>
                                                                    <td class="text-center">Smk 1 Gresik</td>
                                                                    <td class="text-center">Smk 1 Surabaya</td>
                                                                   
                                                                </tr>
                                                            </tbody>
                                                          </table>
                                                    </div>
                                                </div>
                                            </div>
                                        </article>
                                    </div>
                                </div>
                            </div>


                            
                        
                    </div>



                    
                    <!-- end timeline -->

                            
                        
                    </div>
                </div>
            </div>
            <!-- end card -->
        </div>
    </div>


    
    <div class="row">
        <div class="col-12">
            <div class="card">
                <div class="card-body">   
                    <div class="text-center mb-4">
                        <a href="" class="btn btn-primary w-lg">Semi Final</a>
                    </div>
                    <div class="timeline" dir="ltr">
                        <article class="timeline-item alt">
                            <div class="text-end">
                            </div>
                            <div class="container">
                                <div class="row">
                                    <div class="col-md-6">
                                        <article class="timeline-item alt">
                                            <div class="timeline-desk">
                                                <div class="panel">
                                                    <div class="timeline-box border-bottom">
                                                        <span class="arrow-alt"></span>

                                                        <h4 class="fs-16 fw-semibold text-center ">Group A</h4>
                                                    </br>
                                                        <table class="table">
                                                            <thead class="table-dark ">
                                                                <tr>   
                                                                    <tr>
                                                                        <h4 class=" fs-16 fw-semibold text-center text-warning  "><Strong>Tanggal</Strong></h4>
                                                                    </tr>
                                                                </tr>
                                                            </thead>
                                                        <br>
                                                            <tbody>
                                                                <tr>
                                                                    <td class="text-center">Sma 1 Gresik</td>
                                                                    <td class="text-center">Sma 1 Surabaya</td>
                                                                    <td class="text-center">Smk 1 Gresik</td>
                                                                    <td class="text-center">Smk 1 Surabaya</td>
                                                                   
                                                                </tr>
                                                            </tbody>
                                                          </table>
                                                    </div>
                                                </div>
                                            </div>
                                        </article>
                                    </div>
                                    
                                    <div class="col-md-6">
                                        <article class="timeline-item">
                                            <div class="timeline-desk">
                                                <div class="panel">
                                                    <div class="timeline-box">
                                                        <span class="arrow"></span>
                                                        <h4 class="fs-16 fw-semibold text-center ">Group A</h4>
                                                    </br>
                                                        <table class="table">
                                                            <thead class="table-dark ">
                                                                <tr>   
                                                                    <tr>
                                                                        <h4 class=" fs-16 fw-semibold text-center text-warning  "><Strong>Tanggal</Strong></h4>
                                                                    </tr>
                                                                </tr>
                                                            </thead>
                                                        <br>
                                                            <tbody>
                                                                <tr>
                                                                    <td class="text-center">Sma 1 Gresik</td>
                                                                    <td class="text-center">Sma 1 Surabaya</td>
                                                                    <td class="text-center">Smk 1 Gresik</td>
                                                                    <td class="text-center">Smk 1 Surabaya</td>
                                                                   
                                                                </tr>
                                                            </tbody>
                                                          </table>
                                                    </div>
                                                </div>
                                            </div>
                                        </article>
                                    </div>
                                </div>
                            </div>


                            
                        
                    </div>



                    
                    <!-- end timeline -->

                            
                        
                    </div>
                </div>
            </div>
            <!-- end card -->
        </div>
    </div>



    
    <div class="row">
        <div class="col-12">
            <div class="card">
                <div class="card-body">   
                    <div class="text-center mb-4">
                        <a href="" class="btn btn-primary w-lg">Perebutan Juara 3</a>
                    </div>
                    <div class="timeline" dir="ltr">
                        <article class="timeline-item alt">
                            <div class="text-end">
                            </div>
                            <div class="container">
                                <div class="row">
                                    <div class="col-md-6">
                                        <article class="timeline-item alt text-center">
                                            <div class="timeline-desk">
                                                <div class="panel">
                                                    <div class="timeline-box border-bottom">
                                                        <span class="arrow-alt"></span>
                                                        <h4 class="fs-16 fw-semibold text-center ">Group A</h4>
                                                    </br>
                                                        <table class="table">
                                                            <thead class="table-dark ">
                                                                <tr>   
                                                                    <tr>
                                                                        <h4 class=" fs-16 fw-semibold text-center text-warning  "><Strong>Tanggal</Strong></h4>
                                                                    </tr>
                                                                </tr>
                                                            </thead>
                                                        <br>
                                                            <tbody>
                                                                <tr>
                                                                    <td class="text-center">Sma 1 Gresik</td>
                                                                    <td class="text-center">Sma 1 Surabaya</td>
                                                                    <td class="text-center">Smk 1 Gresik</td>
                                                                    <td class="text-center">Smk 1 Surabaya</td>
                                                                   
                                                                </tr>
                                                            </tbody>
                                                          </table>
                                                    </div>
                                                </div>
                                            </div>
                                        </article>
                                    </div>
                                    


                    
                    <!-- end timeline -->

                            
                        
                    </div>
                </div>
            </div>
            <!-- end card -->
        </div>
    </div>
@endsection
