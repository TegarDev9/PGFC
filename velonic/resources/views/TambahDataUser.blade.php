@extends('layouts.vertical', ['title' => 'Tambah Data User Dengan Token', 'mode' => $mode ?? '', 'demo' => $demo ?? ''])

@section('css')
    @vite(['node_modules/select2/dist/css/select2.min.css', 'node_modules/daterangepicker/daterangepicker.css', 'node_modules/bootstrap-touchspin/dist/jquery.bootstrap-touchspin.css', 'node_modules/bootstrap-datepicker/dist/css/bootstrap-datepicker.min.css', 'node_modules/bootstrap-timepicker/css/bootstrap-timepicker.min.css', 'node_modules/flatpickr/dist/flatpickr.min.css'])
@endsection

@section('content')
    @include('layouts.shared/page-title', ['sub_title' => 'Form', 'page_title' => 'Form Tambah user'])

    <div class="row">
        <div class="col-12">
            <div class="card">
                <div class="card-header">
                    <div class="row">
                        <div class="col-12">
                            <div class="card">
                                <div class="card-header">
                                    <h4 class="header-title">Tambah Data User dengan Token</h4>
                                    <p class="text-muted mb-0">
                                        Tambah Data User Dengan Token di bawah ini
                                    </p>
                                </div>

                                {{-- <form method="POST" action="{{route('registered')}}">
                                    @csrf
                                    <div class="card-body">
                                        <div class="row">
                                            <div class="col-lg-6">
                                                <!-- Date Nama -->
                                                <div class="mb-3">
                                                    <label for="name" class="form-label">Nama</label>
                                                    <input class="form-control" type="text" name="name"
                                                        placeholder="Enter your name" required autofocus>
                                                        @error('name')
                                                        <span>{{ $message }}</span>
                                                        @enderror
                                                </div>
                                            </div>

                                            <div class="col-lg-6">
                                                <!-- Date Email -->
                                                <div class="mb-3">
                                                    <label for="email" class="form-label">Email address</label>
                                                    <input class="form-control" type="email" name="email" required autofocus
                                                        placeholder="Enter your email">
                                                        @error('email')
                                                        <span>{{ $message }}</span>
                                                        @enderror
                                                </div>
                                            </div>
                                        </div>


                                        <div class="row">
                                            <div class="col-lg-6">
                                                <!-- Referral Code -->
                                                <div>
                                                    <label for="referral_code" class="form-label">Kode Token</label>
                                    <input class="form-control" type="text"  name="referral_code"
                                        placeholder="Masukkan Kode Token Anda">
                                        @error('referral_code')
                                        <span>{{ $message }}</span>
                                        @enderror
                                            </div>


                                            <div class="row">
                                                <div class="col-lg-6">
                                                    <!-- Password -->
                                                    <div>
                                                        <label for="password" class="form-label">Password</label>
                                                        <input class="form-control" type="password" required="" name="password"
                                                            placeholder="Enter your password">
                                                            @error('password')
                                                            <span>{{ $message }}</span>
                                                            @enderror
                                                    </div>
                                                </div>

                                                <div class="col-lg-6">
                                                    <!-- Predefined Date Ranges -->
                                                    <div>
                                                        <label for="password" class="form-label">Confirm Password</label>
                                                        <input class="form-control" type="password" required="" name="password_confirmation"
                                                            placeholder="Enter your password">
                                                            @error('password_confirmation')
                                                            <span>{{ $message }}</span>
                                                            @enderror

                                                    </div>
                                                    
                                                    <div class="mb-3">
                                                        <div class="form-check text-left">
                                                            <input type="checkbox" class="form-check-input"
                                                                id="checkbox-signup">
                                                            <label class="form-check-label" for="checkbox-signup">I accept <a
                                                                    href="javascript: void(0);" class="text-muted">Terms and
                                                                    Conditions</a></label>
                                                        </div>
                                                </div>
                                            </div>
                                            <br>
                                            <div class="mb-0 d-grid text-center">
                                                <button class="btn btn-primary fw-semibold" type="submit" value="Register">Sign
                                                    Up</button>
                                      
                                        </div> <!-- end card-body -->
                                </form> 
                               --}}


                                <form method="POST" action="{{ route('registered') }}">
                                    @csrf
                                    <div class="mb-3">
                                        <label for="name" class="form-label">Nama</label>
                                        <input class="form-control" type="text" name="name"
                                            placeholder="Enter your name" required autofocus>
                                        @error('name')
                                            <span>{{ $message }}</span>
                                        @enderror
                                    </div>
                                    <div class="mb-3">
                                        <label for="email" class="form-label">Email address</label>
                                        <input class="form-control" type="email" name="email" required autofocus
                                            placeholder="Enter your email">
                                        @error('email')
                                            <span>{{ $message }}</span>
                                        @enderror
                                    </div>
                                    <div class="mb-3 d-none">
                                        <label for="referral_code" class="form-label">Kode Token</label>
                                        <input class="form-control" type="text" name="referral_code"
                                            placeholder="Masukkan Kode Token Anda">
                                        @error('referral_code')
                                            <span>{{ $message }}</span>
                                        @enderror
                                    </div>

                                    <div class="mb-3">
                                        <label for="password" class="form-label">Password</label>
                                        <input class="form-control" type="password" required="" name="password"
                                            placeholder="Enter your password">
                                        @error('password')
                                            <span>{{ $message }}</span>
                                        @enderror
                                    </div>
                                    <div class="mb-3">
                                        <label for="password" class="form-label">Confirm Password</label>
                                        <input class="form-control" type="password" required=""
                                            name="password_confirmation" placeholder="Enter your password">
                                        @error('password_confirmation')
                                            <span>{{ $message }}</span>
                                        @enderror
                                    </div>
                                    <div class="mb-3">
                                        <div class="form-check">
                                            <input type="checkbox" class="form-check-input" id="checkbox-signup">
                                            <label class="form-check-label" for="checkbox-signup">I accept <a
                                                    href="javascript: void(0);" class="text-muted">Terms and
                                                    Conditions</a></label>
                                        </div>
                                    </div>
                                    <div class="mb-0 d-grid text-center">
                                        <button class="btn btn-primary fw-semibold" type="submit" value="Register">
                                            <table>Tambah User</table>
                                        </button>


                                </form>


                            </div> <!-- end card-->
                        </div> <!-- end col -->
                    </div>
                    <!-- end row -->

                    <div class="row">
                        <div class="col-12">
                            <div class="card">
                                <div class="card-body">

                                    <h5 class="mt-0">Data User</h5>
                                    <p class="sub-header font-13">List Data User</p>
                                    <div class="table-responsive">
                                        <table class="table table-centered mb-0" id="inline-editable">
                                            <thead>
                                                <tr>
                                                    <th>id</th>
                                                    <th>Name</th>
                                                    <th>Email</th>
                                                    <th>Password</th>
                                                    <th>Referal_code</th>

                                                    <th>Role</th>

                                                </tr>
                                            </thead>

                                            <tbody>
                                                @foreach ($Datauser->sortBy('id') as $data)
                                                    <tr>
                                                        <td>{{ $data->id }}</td>
                                                        <td>{{ $data->name }}</td>
                                                        <td>{{ $data->email }}</td>
                                                        <td>{{ $data->password }}</td>
                                                        <td>{{ $data->referral_code }}</td>
                                                        <td>{{ $data->role_as }}</td>

                                                    </tr>
                                                @endforeach

                                            </tbody>

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

                                    <h5 class="mt-0">Data User</h5>
                                    <p class="sub-header font-13">Inline edit like a spreadsheet, toolbar column with edit
                                        button only and without focus on first input.</p>
                                    <div class="table-responsive">
                                        <table class="table table-centered mb-0">
                                            <thead>
                                                <tr>
                                                    <th>id</th>
                                                    <th>Name</th>
                                                    <th>Email</th>
                                                    <th>Password</th>
                                                    <th>Referal_code</th>

                                                    <th>Role</th>
                                                    <th>Action</th>

                                                </tr>
                                            </thead>

                                            <tbody>
                                                @foreach ($Datauser->sortBy('id') as $data)
                                                    <tr>
                                                        <td>{{ $data->id }}</td>
                                                        <td>{{ $data->name }}</td>
                                                        <td>{{ $data->email }}</td>
                                                        <td>{{ $data->password }}</td>
                                                        <td>{{ $data->referral_code }}</td>
                                                        <td>{{ $data->role_as }}</td>
                                                        <td>
                                                            <div class="btn-group">
                                                                <button type="button"
                                                                    class="btn btn-warning">Action</button>
                                                                <button type="button"
                                                                    class="btn btn-Success dropdown-toggle dropdown-toggle-split"
                                                                    data-bs-toggle="dropdown" aria-expanded="false">
                                                                    <span class="visually-hidden">Toggle Dropdown</span>
                                                                </button>
                                                                <ul class="dropdown-menu">
                                                                    <li><a class="dropdown-item" href="#">View</a>
                                                                    </li>
                                                                    <li><a class="dropdown-item" data-bs-toggle="modal"
                                                                            data-bs-target="#staticBackdrop" href="{{route('DataSekolah.update',['id'=> $data->id])}}">Edit</a>
                                                                    </li>
                                                                    <li><a class="dropdown-item"
                                                                            href="{{ route('TambahDataUser.delete', ['id' => $data->id]) }}">Hapus</a>
                                                                    </li>

                                                                </ul>
                                                            </div>
                                                        </td>
                                                @endforeach

                                            </tbody>
                                        </table>
                                    </div> <!-- end .table-responsive-->
                                </div> <!-- end card-body -->
                            </div> <!-- end card -->
                        </div>

                       <!-- Form Modal -->
<div class="modal fade" id="staticBackdrop" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1"
aria-labelledby="staticBackdropLabel" aria-hidden="true">
<div class="modal-dialog modal-dialog-scrollable">
    <div class="modal-content">
        <div class="modal-header">
            <h5 class="modal-title" id="staticBackdropLabel">Edit Data User</h5>
            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body">
           <!-- Form Modal -->
           <form id="editForm">
            @csrf
            @method('PUT')
            <div class="mb-3">
                <label for="name" class="form-label">Nama</label>
                <input type="text" class="form-control" id="name" name="name">
            </div>
            <div class="mb-3">
                <label for="email" class="form-label">Email address</label>
                <input type="email" class="form-control" id="email" name="email">
            </div>
            <div class="mb-3">
                <label for="password" class="form-label">Password</label>
                <input type="password" class="form-control" id="password" name="password">
            </div>
            <div class="mb-3">
                <label for="referral_code" class="form-label">Referral Code</label>
                <input type="text" class="form-control" id="referral_code" name="referral_code">
            </div>
            <div class="mb-3">
                <label for="role_as" class="form-label">Role As</label>
                <input type="text" class="form-control" id="role_as" name="role_as">
            </div>
            <div class="mb-3 form-check">
                <input type="checkbox" class="form-check-input" id="exampleCheck1" name="exampleCheck1">
                <label class="form-check-label" for="exampleCheck1">Check me out</label>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                <button type="submit" class="btn btn-primary">Simpan</button>
            </div>
        </form>
        

        </div>
    </div>
</div>
</div>

                    @endsection

                    @section('script')
                    
                  <script>
                    document.getElementById('editForm').addEventListener('submit', function(event) {
    event.preventDefault();
    var formData = new FormData(this);
    var id = /* Ambil ID dari data user yang akan diupdate */;
    axios.put('/TambahDataUser/update/' + id, formData)
        .then(function(response) {
            // Penanganan respon sukses
            console.log(response.data);
        })
        .catch(function(error) {
            // Penanganan kesalahan
            console.error(error);
        });
});

                  </script>
                    
                        @vite(['resources/js/pages/tabledit.init.js'])
                    @endsection
                    @section('script')
                        @vite(['resources/js/pages/form-advanced.init.js'])
                    @endsection
