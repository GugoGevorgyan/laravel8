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
                                        update {{$product->name}} id:{{$product->id}}
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
                    <form method="POST" action="{{url('product/'.$product->id)}}" enctype="multipart/form-data" autocomplete="on">
                        @csrf
                        @method("PUT")
                        <div class="form-group">
                            <label for="name">{{ __('Name') }}</label>
                            <div>
                                <input id="name" type="text" class="form-control @error('name') is-invalid @enderror"
                                       name="name" autofocus value={{$product->name}}>

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
                                <textarea id="description" class="form-control @error('description') is-invalid @enderror"
                                          name="description" >{{$product->description}}
                                </textarea>
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
                                <input id="price" type="number" class="form-control @error('price') is-invalid @enderror"
                                       name="price" value={{$product->price}}>
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
                                       name="sale" value={{$product->sale}}>
                                @error('sale')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group">
                            <label for="category">{{ __('Category') }}</label>
                            <div>
                                <select name="category" id="category" class="form-control @error('category') is-invalid @enderror" required>
                                    @foreach ($categories as $category)
                                        @foreach ($category->subCategory as $subCategory)
                                            <option value="{{$subCategory->id}}">{{$subCategory->name}}</option>
                                        @endforeach
                                    @endforeach
                                </select>
                                @error('parent-category')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group">
                            <label for="img">{{ __('Image') }}</label>
                            <input id="img" type="file"  class="form-control @error('img') is-invalid @enderror"
                                   name="img">
                            @error('img')
                            <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>

                        <div class="form-group">
                            <div>

                                <button type="submit" class="btn btn-lg btn-block btn-primary mb-3 col-4">
                                    update
                                </button>
                            </div>
                        </div>
                    </form>

                </div>
            </div> <!-- / .row -->
        </div>

    </div> <!-- / .main-content -->
@endsection

