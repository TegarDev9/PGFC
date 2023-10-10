<!DOCTYPE html>
<html lang="en">

<head>
    @include('layouts.shared/title-meta', ['title' => 'Register'])

    @include('layouts.shared/head-css', ['mode' => $mode ?? '', 'demo' => $demo ?? ''])
</head>

<body class="authentication-bg">

    <div class="account-pages pt-2 pt-sm-5 pb-4 pb-sm-5 position-relative">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-xxl-8 col-lg-10">
                    <div class="card overflow-hidden bg-opacity-25">
                        <div class="row g-0">
                            <div class="col-lg-6 d-none d-lg-block p-2">
                                <img src="/images/auth-img.jpg" alt="" class="img-fluid rounded h-100">
                            </div>
                            <div class="col-lg-6">
                                <div class="d-flex flex-column h-100">
                                    {{-- <div class="auth-brand p-4">
                                        <a href="{{ route('any', 'index') }}" class="logo-light">
                                            <img src="/images/logo.png" alt="logo" height="22">
                                        </a>
                                        <a href="{{ route('any', 'index') }}" class="logo-dark">
                                            <img src="/images/logo-dark.png" alt="dark logo" height="22">
                                        </a>
                                    </div> --}}
                                    <div class="p-4 my-auto">
                                        <h4 class="fs-20">Free Sign Up</h4>
                                        <p class="text-muted mb-3">Enter your email address and password to access
                                            account.</p>

                                            <form method="POST" action="{{route('registered')}}">
                                                @csrf
                                            <div class="mb-3">
                                                <label for="name" class="form-label">Nama</label>
                                                <input class="form-control" type="text" id="name"
                                                    placeholder="Enter your name" required autofocus>
                                                    @error('name')
                                                    <span>{{ $message }}</span>
                                                    @enderror
                                            </div>
                                            <div class="mb-3">
                                                <label for="email" class="form-label">Email address</label>
                                                <input class="form-control" type="email" id="email" required autofocus
                                                    placeholder="Enter your email">
                                                    @error('email')
                                                    <span>{{ $message }}</span>
                                                    @enderror
                                            </div>
                                            <div class="mb-3">
                                                <label for="referral_code" class="form-label">Kode Token</label>
                                                <input class="form-control" type="referral_code" required="" id="referral_code"
                                                    placeholder="Masukkan Kode Token Anda">
                                            </div>

                                            <div class="mb-3">
                                                <label for="password" class="form-label">Password</label>
                                                <input class="form-control" type="password" required="" id="password"
                                                    placeholder="Enter your password">
                                            </div>
                                            <div class="mb-3">
                                                <label for="password" class="form-label">Password</label>
                                                <input class="form-control" type="password" required="" id="password"
                                                    placeholder="Enter your password">
                                                    @error('password')
                                                    <span>{{ $message }}</span>
                                                    @enderror
                                            </div>
                                            <div class="mb-3">
                                                <div class="form-check">
                                                    <input type="checkbox" class="form-check-input"
                                                        id="checkbox-signup">
                                                    <label class="form-check-label" for="checkbox-signup">I accept <a
                                                            href="javascript: void(0);" class="text-muted">Terms and
                                                            Conditions</a></label>
                                                </div>
                                            </div>
                                            <div class="mb-0 d-grid text-center">
                                                <button class="btn btn-primary fw-semibold" type="submit" value="Register">Sign
                                                    Up</button>
                                            </div>

                                            <div class="text-center mt-4">
                                                <p class="text-muted fs-16">Sign in with</p>
                                                <div class="d-flex gap-2 justify-content-center mt-3">
                                                    <a href="javascript: void(0);" class="btn btn-soft-primary"><i
                                                            class="ri-facebook-circle-fill"></i></a>
                                                    <a href="javascript: void(0);" class="btn btn-soft-danger"><i
                                                            class="ri-google-fill"></i></a>
                                                    <a href="javascript: void(0);" class="btn btn-soft-info"><i
                                                            class="ri-twitter-fill"></i></a>
                                                    <a href="javascript: void(0);" class="btn btn-soft-dark"><i
                                                            class="ri-github-fill"></i></a>
                                                </div>
                                            </div>
                                        </form>
                                        @if(Session::has('succes'))
    
       <p style="color: green">{{Session::get('sukses') }}</p>
    
    @endif
    @if(Session::has('error'))
    
       <p style="color: red">{{Session::get('error') }}</p>

    @endif 
                                        <!-- end form-->
                                    </div>
                                </div>
                            </div> <!-- end col -->
                        </div>
                    </div>
                </div>
                <!-- end row -->
            </div>
            <div class="row">
                {{-- <div class="col-12 text-center">
                    <p class="text-dark-emphasis">Already have account? <a href="{{ route('second', [ 'auth' , 'login']) }}" class="text-dark fw-bold ms-1 link-offset-3 text-decoration-underline"><b>Log In</b></a></p>
                </div> <!-- end col --> --}}
            </div>
            <!-- end row -->
        </div>
        <!-- end container -->
    </div>
    <!-- end page -->

    <footer class="footer footer-alt fw-medium">
        <span class="text-dark-emphasis">
            <script>document.write(new Date().getFullYear())</script> © Velonic - Theme by Techzaa
        </span>
    </footer>

    @include('layouts.shared/footer-scripts')

</body>

</html>