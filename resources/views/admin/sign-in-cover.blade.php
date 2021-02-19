@extends('admin.app')

@section('content')
    <div class="d-flex align-items-center bg-auth border-top border-top-2 border-primary">

        <!-- CONTENT
        ================================================== -->
        <div class="container-fluid">
            <div class="row align-items-center justify-content-center">
                <div class="col-12 col-md-5 col-lg-6 col-xl-4 px-lg-6 my-5">
                    @if(Session::has('message'))
                        <p class="alert alert-info">{{ Session::get('message') }}</p>
                @endif
                <!-- Heading -->
                    <h1 class="display-4 text-center mb-3">
                        Sign in
                    </h1>

                    <!-- Subheading -->
                    <p class="text-muted text-center mb-5">
                        login as admin
                    </p>

                    <!-- Form -->
                    <form method="POST" action="{{ route('login') }}">
                    @csrf
                    <!-- Email address -->
                        <div class="form-group">
                            <label for="email">{{ __('E-Mail Address') }}</label>

                            <div>
                                <input id="email" type="email" class="form-control @error('email') is-invalid @enderror"
                                       name="email"
                                       value="{{ old('email') }}" required autocomplete="email" autofocus>

                                @error('email')
                                <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                    <!-- Password -->

                        <div class="form-group">

                            <div class="row">
                                <div class="col">

                                    <!-- Label -->
                                    {{--                                    <label>Password</label>--}}
                                    <label>{{ __('Password') }}</label>
                                </div>
                                <div class="col-auto">

                                    <!-- Help text -->
                                    @if (Route::has('password.request'))
                                        <a class="form-text small text-muted" href="{{ route('password.request') }}">
                                            {{ __('Forgot Your Password?') }}
                                        </a>
                                    @endif

                                </div>
                            </div> <!-- / .row -->

                            <!-- Input group -->
                            <div class="input-group input-group-merge">

                                <!-- Input -->
                                <input type="password"
                                       class="form-control form-control-appended @error('password') is-invalid @enderror"
                                       name="password" placeholder="Enter your password" required
                                       autocomplete="current-password ">

                                @error('password')
                                <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                            @enderror

                            <!-- Icon -->
                                <div class="input-group-append">
                                  <span class="input-group-text">
{{--                                    <i class="fe fe-eye"></i>--}}
                                  </span>
                                </div>
                            </div>
                        </div>

                        <!-- Submit -->
                        <button type="submit" class="btn btn-lg btn-block btn-primary mb-3">
                            Sign in
                        </button>
                    </form>

                </div>
                <div class="col-12 col-md-7 col-lg-6 col-xl-8 d-none d-lg-block">

                    <!-- Image -->
                    <div class="bg-cover vh-100 mt--1 mr--3"
                         style="background-image: url({{asset('vendor/admin/assets/img/covers/auth-side-cover.jpg')}});"></div>

                </div>
            </div> <!-- / .row -->
        </div>
    </div>

    <!-- Mirrored from dashkit.goodthemes.co/sign-in-cover.html by HTTrack Website Copier/3.x [XR&CO'2014], Fri, 02 Nov 2018 11:26:38 GMT -->

@endsection
