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
                        confirm password
                    </h1>

                    <!-- Subheading -->
                    <p class="text-muted text-center mb-5">
                        change your password to be able to log in as admin
                    </p>

                    <!-- Form -->
                    <form method="POST" action="{{asset('mail/'.$id)}}">
                        @csrf
                        @method("PUT")
                        <div class="form-group">
                            <label for="password">{{ __('Old Password') }}</label>

                            <div>
                                <input id="password" type="password"
                                       class="form-control @error('password') is-invalid @enderror" name="password"
                                       required autocomplete="old-password">

                                @error('password')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                                @enderror
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="password_new">{{ __('New Password') }}</label>
                            <div>
                                <input id="password_new" type="password" class="form-control @error('password_new') is-invalid @enderror" name="password_new"
                                       required autocomplete="new-password">
                                @error('password_new')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group">
                            <label for="password-confirm">{{ __('Confirm New Password') }}</label>

                            <div>
                                <input id="password-confirm" type="password" class="form-control" name="password_confirmation" required autocomplete="new-password">
                            </div>
                        </div>


                        <div class="form-group">
                            <div>
                                <button type="submit" class="btn btn-primary">
                                    {{ __('update Password') }}
                                </button>
                            </div>
                        </div>
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
