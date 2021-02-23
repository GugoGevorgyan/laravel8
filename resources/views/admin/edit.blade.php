@extends('admin.app')
@include('admin.sidebar')
@section('content')
    @stack('sidebar')

    <div class="main-content">
        <!-- CONTENT -->
        <div class="container-fluid">
            <div class="row justify-content-center">
                <div class="col-12 col-lg-10 col-xl-8">

                    <!-- Header -->
                    <div class="header mt-md-5">
                        <div class="header-body">
                            <div class="row align-items-center">
                                <div class="col">

                                    <!-- Pretitle -->
                                    @if(Session::has('message'))
                                        <p class="alert alert-info">{{ Session::get('message') }}</p>
                                @endif

                                    <!-- Title -->
                                    <h1 class="header-title">
                                        {{$user->name}}
                                    </h1>

                                </div>
                            </div> <!-- / .row -->
                        </div>
                    </div>
                    <h2 class="text-center">change info</h2>
                    <!-- Form -->
                    <form method="POST" action="{{asset('admin/'.$user->id)}}" class="mb-4">
                        @csrf
                        @method("PUT")
                        <div class="d-flex flex-column">
                            <div class="col-12 col-md-6">
                                <div class="form-group">
                                    <label for="name">
                                         name
                                    </label>
                                    <input id="name" type="text" class="form-control @error('name') is-invalid @enderror" name="name" value="{{$user->name}} ">
                                    @error('name')
                                    <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                                    @enderror
                                </div>
                            </div>
                                <button type="submit" class="btn btn-primary col-3">
                                    Update info
                                </button>
                        </div>
                    </form>
                    <hr class="mt-4 mb-5">
                    <h2 class="text-center">change password</h2>
                    <div class="row">
                        <div class="col-12 col-md-6 order-md-2">

                            <!-- Card -->
                            <div class="card bg-light border ml-md-4">
                                <div class="card-body">

                                    <p class="mb-2">
                                        Password requirements
                                    </p>

                                    <p class="small text-muted mb-2">
                                        To create a new password, you have to meet all of the following requirements:
                                    </p>

                                    <ul class="small text-muted pl-4 mb-0">
                                        <li>
                                            Minimum 5 character
                                        </li>
                                        <li>
                                            password must be entirely alpha-numeric characters.
                                        </li>

                                    </ul>

                                </div>
                            </div>

                        </div>
                        <form method="POST" action="{{asset('admin/password/'.$user->id)}}" class="col-6">
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

                    </div> <!-- / .row -->

                </div>
            </div> <!-- / .row -->
        </div>

    </div> <!-- / .main-content -->


@endsection
