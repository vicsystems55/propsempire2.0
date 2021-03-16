@extends('layouts.master-without-nav')

@section('title') Register @endsection

@section('body')

<body>
    @endsection

    @section('content')

    <div class="home-btn d-none d-sm-block">
        <a href="index" class="text-dark"><i class="fas fa-home h2"></i></a>
    </div>
    <div class="account-pages my-5 pt-sm-5">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-md-8 col-lg-6 col-xl-5">
                    <div class="card overflow-hidden">
                        <div class="bg-login text-center">
                            <div class="bg-login-overlay"></div>
                            <div class="position-relative">
                                <h5 class="text-white font-size-20">Free {{ __('Register') }}</h5>
                                <p class="text-white-50 mb-0">Create an account today.</p>
                                <a href="index" class="logo logo-admin mt-4">
                                    <img src="/images/logo-sm-dark.png" alt="" height="30">
                                </a>
                            </div>
                        </div>
                        <div class="card-body pt-5">

                            <div class="p-2">
                                <form method="POST" action="{{ route('register') }}">
                                    @csrf
                                    <div class="form-group">
                                        <label for="useremail">{{ __('E-Mail Address') }}</label>
                                        <input type="email" name="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" id="useremail" placeholder="Enter email" autocomplete="email">
                                        @error('email')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                        @enderror
                                    </div>

                                    <div class="row">

                                    <div class="col-3">
                                        <hr>
                                    </div>
                                    <div class="col-6 text-center">
                                       Choose Account Type
                                    </div>
                                    <div class="col-3">
                                        <hr>
                                    </div>

                                    </div>

                                    <div class="row mx-auto">
                                        <div class="col-md-4 custom-control custom-radio mb-2">
                                            <input type="radio" id="customRadio1" name="role" value="vendor" class="custom-control-input">
                                            <label class="custom-control-label" for="customRadio1">Vendor</label>
                                        </div>
                                        <div class="col-md-4 custom-control custom-radio">
                                            <input type="radio" id="customRadio2" name="role" value="agent" class="custom-control-input" checked>
                                            <label class="custom-control-label" for="customRadio2">Agent</label>
                                        </div>
                                        <div class="col-md-4 custom-control custom-radio">
                                            <input type="radio" id="customRadio3" name="role" value="agency" class="custom-control-input" checked>
                                            <label class="custom-control-label" for="customRadio3">Agency</label>
                                        </div>
                                    </div>

                                    <div class="form-group mt-2">
                                        <label for="name">{{ __('Name') }}</label>
                                        <input type="text" name="name" value="{{ old('name') }}" required autocomplete="name" class="form-control @error('name') is-invalid @enderror" autofocus id="name" placeholder="Enter name">
                                        @error('name')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                        @enderror
                                    </div>

                                    <div class="form-group">
                                        <label for="userpassword">{{ __('Password') }}</label>
                                        <input type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="new-password" id="userpassword" placeholder="Enter password">
                                        @error('password')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                        @enderror
                                    </div>

                                    <div class="form-group">
                                        <label for="userpassword">{{ __('Confirm Password') }}</label>
                                        <input type="password" name="password_confirmation" class="form-control" id="userconfirmpassword" placeholder="Confirm password">
                                    </div>

                                    <div class="form-group">
                                        <label for="referral_code">{{ __('Referral Code') }} (Optional)</label>
                                        <input type="text" name="referer_code" class="form-control" id="" value="system" placeholder="Enter Referral code if any">
                                    </div>

                                    <div class="mt-4">
                                        <button class="btn btn-primary btn-block waves-effect waves-light" id="register" type="submit"> {{ __('Register') }}</button>
                                    </div>

                                    <div class="mt-4 text-center">
                                        <p class="mb-0">By registering you agree to the Skote <a href="#" class="text-primary">Terms of Use</a></p>
                                    </div>
                                </form>
                            </div>

                        </div>
                    </div>
                    <div class="mt-5 text-center">
                        <p>Already have an account ? <a href="login" class="font-weight-medium text-primary"> Login</a> </p>
                        <p>© <script> document.write(new Date().getFullYear()) </script> Propsempire. Crafted with <i class="mdi mdi-heart text-danger"></i> by vicSystems</p>
                    </div>

                </div>
            </div>
        </div>
    </div>

    <!-- JAVASCRIPT -->
    <script src="{{ URL::asset('libs/jquery/jquery.min.js')}}"></script>
    <script src="{{ URL::asset('libs/bootstrap/bootstrap.min.js')}}"></script>
    <script src="{{ URL::asset('libs/metismenu/metismenu.min.js')}}"></script>
    <script src="{{ URL::asset('libs/simplebar/simplebar.min.js')}}"></script>
    <script src="{{ URL::asset('libs/node-waves/node-waves.min.js')}}"></script>

    <script src="{{ URL::asset('js/app.min.js')}}"></script>

    @endsection