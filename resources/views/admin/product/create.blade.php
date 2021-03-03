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
                                        create product
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
                    <form method="POST" action="{{route('product.store')}}" enctype="multipart/form-data"
                          autocomplete="on">
                        @csrf

                        <div class="form-group">
                            <label for="name">{{ __('Name') }}</label>
                            <div>
                                <input id="name" type="text" class="form-control @error('name') is-invalid @enderror"
                                       name="name" value="{{old('name')}}" required autofocus>

                                @error('name')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group">
                            <label for="description">{{ __('Description') }}</label>

                            <div>
                                <textarea id="description" type="text"
                                          class="form-control @error('description') is-invalid @enderror"
                                          name="description" required>{{old('description')}}</textarea>
                                @error('description')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group">
                            <label for="price">{{ __('Price') }}</label>

                            <div>
                                <input id="price" type="number"
                                       class="form-control @error('price') is-invalid @enderror" name="price"
                                       value="{{old('price')}}" required>
                                @error('price')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                                @enderror
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="sale">{{ __('Sale') }}</label>

                            <div>
                                <input id="sale" type="number" class="form-control @error('sale') is-invalid @enderror"
                                       name="sale" value="{{old('sale')}}">
                                @error('sale')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                                @enderror
                            </div>
                        </div>
                        <div class="form-group">
                            {{"Categories"}}
                            <ul class="navbar-nav d-flex flex-row justify-content-around">
                                @foreach ($categories as $category)
                                    @if (!$category->category)
                                        <li class="nav-item  justify-content-between">
                                            <a href="#topnavDashboards{{$category->name}}"
                                               class="nav-link" data-toggle="collapse" role="button"
                                               aria-expanded="false"
                                               aria-controls="topnavDashboards{{$category->name}}">
                                                {{$category->name}}
                                            </a>
                                            <div class="collapse " id="topnavDashboards{{$category->name}}">
                                                <ul class="nav nav-sm flex-column">
                                                    @foreach ($subCategories as $subCategory)
                                                        @if ($subCategory->subCategory && $subCategory->name === $category->name)
                                                            @foreach($subCategory->subCategory as $sub)
                                                                <li class="nav-item">
                                                                    <input class=" " type="checkbox" id="{{$sub->name}}"
                                                                           name="subCategory[]" value="{{$sub->id}}">
                                                                    <label for="{{$sub->name}}"> {{$sub->name}}</label>
                                                                </li>
                                                            @endforeach
                                                        @endif
                                                    @endforeach
                                                </ul>
                                            </div>
                                        </li>
                                    @endif
                                @endforeach
                            </ul>
                        </div>
                        <div class="form-group">
                            <label for="img">{{ __('Image') }}</label>
                            <input id="img" type="file" class="form-control @error('img') is-invalid @enderror"
                                   name="img" required>
                            @error('img')
                            <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
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

