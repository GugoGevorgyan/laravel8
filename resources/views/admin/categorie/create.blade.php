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
                                        Create Categorie
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
                    <form method="POST" action="{{asset('/categorie')}}" autocomplete="on">
                        @csrf
                        <div class="form-group">
                            <label for="name">{{ __('Name') }}</label>
                            <div>
                                <input id="name" type="text" class="form-control @error('name') is-invalid @enderror"
                                       name="name" required autofocus>

                                @error('name')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group">
                            <label for="parent-categorie">{{ __('Parent Categorie') }}</label>

                            <div>
                                <select name="parent_categorie" id="parent-categorie" class="form-control">
                                    <option value="main" class="text-success">Main</option>
                                    @foreach($categories as $categorie)
                                    <option value="{{$categorie->id}}">{{$categorie->name}}</option>
                                    @endforeach
                                </select>
                                @error('parent-categorie')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                                @enderror
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

