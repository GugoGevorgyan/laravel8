@extends('admin.app')
@include('admin.sidebar')
@section('content')
@stack('sidebar')

    <div class="main-content">
        <div class="container-fluid">
            <div class="row justify-content-center">
                <div class="col-8 col-lg-6 col-xl-6">

                    <!-- Header -->
                    <div class="header mt-md-5">
                        <div class="header-body">
                            <div class="row align-items-center">
                                <div class="col">
                                    <!-- Title -->
                                    <h1 class="header-title">
                                        Register Admin
                                    </h1>

                                </div>
                            </div> <!-- / .row -->
                        </div>
                    </div>

                    <!-- Form -->
                    @if(Session::has('message'))
                                            <p class="alert alert-info">{{ Session::get('message') }}</p>
                                    @endif

                                    <!-- Form -->
                                        <form method="POST" action="/admin">
                                            @csrf

                                            <div class="form-group">
                                                <label for="name">{{ __('Name') }}</label>
                                                <div>
                                                    <input id="name" type="text" class="form-control @error('name') is-invalid @enderror"
                                                           name="name" value="{{ old('name') }}" required autocomplete="name" autofocus>

                                                    @error('name')
                                                    <span class="invalid-feedback" role="alert">
                                                          <strong>{{ $message }}</strong></span>
                                                    @enderror
                                                </div>
                                            </div>

                                            <div class="form-group">
                                                <label for="email">{{ __('E-Mail Address') }}</label>

                                                <div>
                                                    <input id="email" type="email" class="form-control @error('email') is-invalid @enderror"
                                                           name="email" value="{{ old('email') }}" required autocomplete="email">

                                                    @error('email')
                                                    <span class="invalid-feedback" role="alert">
                                                        <strong>{{ $message }}</strong></span>
                                                    @enderror
                                                </div>
                                            </div>

                                            <div class="form-group">
                                                <label for="password">{{ __('Password') }}</label>

                                                <div>
                                                    <input id="password" type="password"
                                                           class="form-control @error('password') is-invalid @enderror" name="password"
                                                           required autocomplete="new-password">

                                                    @error('password')
                                                    <span class="invalid-feedback" role="alert">
                                                                                    <strong>{{ $message }}</strong>
                                                                                </span>
                                                    @enderror
                                                </div>
                                            </div>

                                            <div class="form-group">
                                                <label for="password-confirm">{{ __('Confirm Password') }}</label>

                                                <div>
                                                    <input id="password-confirm" type="password" class="form-control"
                                                           name="password_confirmation" required autocomplete="new-password">
                                                </div>
                                            </div>

                                            <div class="form-group">
                                                <div>

                                                    <button type="submit" class="btn btn-lg btn-block btn-primary mb-3 col-4">
                                                        Create
                                                    </button>
                                                </div>
                                            </div>
                                        </form>

                </div>
            </div> <!-- / .row -->
        </div>

    </div> <!-- / .main-content -->
@endsection

