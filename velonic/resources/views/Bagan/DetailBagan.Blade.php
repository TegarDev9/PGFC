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
                    <button type="button" class="btn btn-warning"  id="printPdfBtn" >Generate Bagan</button>
                <br>
                </br>
                    <div class="responsive-table-plugin">
                        <div class="table-rep-plugin">
                            <div class="table-responsive" data-pattern="priority-columns">
                                <table id="tech-companies-1" class="table table-striped">
                                    <thead>
                                        <tr>
                                            <th>Company</th>
                                            <th data-priority="1">Last Trade</th>
                                            <th data-priority="3">Trade Time</th>
                                            <th data-priority="1">Change</th>
                                            <th data-priority="3">Prev Close</th>
                                            <th data-priority="3">Open</th>
                                            <th data-priority="6">Bid</th>
                                            <th data-priority="6">Ask</th>
                                            <th data-priority="6">1y Target Est</th>
                                            <th data-priority="6">Action</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <th>GOOG <span class="co-name">Google Inc.</span></th>
                                            <td>597.74</td>
                                            <td>12:12PM</td>
                                            <td>14.81 (2.54%)</td>
                                            <td>582.93</td>
                                            <td>597.95</td>
                                            <td>597.73 x 100</td>
                                            <td>597.91 x 300</td>
                                            <td>731.10</td>

                                            <td>
                                                <div class="dropdown">
                                                    <button class="btn btn-outline-success dropdown-toggle" type="button"
                                                        id="dropdownMenuButton" data-bs-toggle="dropdown"
                                                        aria-haspopup="true" aria-expanded="false">
                                                        Action
                                                    </button>
                                                    <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                                                        <a class=" btn btn-secondary dropdown-item" href="#">View</a>
                                                        <a class="dropdown-item edit-btn" data-id="" data-bs-toggle="modal" data-bs-target="#exampleModal">Edit</a>
                                                        <a class="dropdown-item" href="">Hapus</a>
                                                    </div>
                                            </td>
                                        </tr>
                                       
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
