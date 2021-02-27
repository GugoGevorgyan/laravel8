@extends('admin.app')
@include('admin.sidebar')
@section('content')
    @stack('sidebar')

    <div class="main-content">
        <!-- CONTENT -->
        <div class="container-fluid">
            <div class="row justify-content-center">
                <div class="col-12">
                    <!-- Header -->
                    <div class="header mt-md-5">
                        <div class="header-body">
                            <div class="row align-items-center">
                                <div class="col">

                                    <!-- message -->
                                    @if(Session::has('message'))
                                        <p class="alert alert-info">{{ Session::get('message') }}</p>
                                @endif

                                <!-- Title -->
                                    <h1 class="header-title">
                                        Categories
                                    </h1>

                                </div>
                                <div class="col-auto">

                                    <!-- Button -->
                                    <a href="{{url('category/create')}}" class="btn btn-primary">
                                        {{ __('Create Category / SubCategory') }}
                                    </a>
                                </div>
                            </div> <!-- / .row -->
                        </div>
                    </div>

                    <!-- Card -->
                    <div class="card" data-toggle="lists"
                         data-lists-values='["category-id", "category-name", "category-parent"]'>

                        <div class="table-responsive">
                            <table class="table table-sm table-nowrap card-table">
                                <thead>
                                <tr>
                                    <th>
                                        <a href="#" class="text-muted sort" data-sort="category-id">
                                            id
                                        </a>
                                    </th>
                                    <th>
                                        <a href="#" class="text-muted sort" data-sort="category-name">
                                            Name
                                        </a>
                                    </th>
                                    <th>
                                        <a href="#" class="text-muted sort" data-sort="category-parent">
                                            Parent Category
                                        </a>
                                    </th>
                                </tr>
                                </thead>

                                <tbody class="list">
                                @foreach($categories as $category)
                                    <tr>
                                        <td class="category-id">
                                            {{$category->id}}
                                        </td>
                                        <td class="category-name">
                                            {{$category->name}}
                                        </td>
                                        <td class="category-parent">
                                            @if($category->category)
                                            {{$category->category->name}}
                                            @endif
                                        </td>
                                        <td class="">
                                            <div class="dropdown">
                                                <a href="#!" class="dropdown-ellipses dropdown-toggle" role="button"
                                                   data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"
                                                   data-boundary="window">
                                                    <i class="fe fe-more-vertical"></i>
                                                </a>
                                                <div class="dropdown-menu dropdown-menu-right">
                                                    <div class="dropdown-item d-flex flex-column">
                                                    {{--                delete          --}}
                                                    <!-- Button trigger modal -->
                                                        <a href="{{asset("category/{$category->id}/edit")}}" class="py-2">
                                                            <input type="submit" value="Edit" class="btn btn-primary w-100" >
                                                        </a>
                                                        <div class="py-2">
                                                            <input type="button" value="Delete"
                                                                   class="btn btn-danger w-100" data-toggle="modal"
                                                                   data-target="#deleteModalCategory{{$category->id}}">
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>

                                            {{--                                                            modal Delete--}}
                                            <div class="modal fade" id="deleteModalCategory{{$category->id}}" tabindex="-1" role="dialog"
                                                 aria-labelledby="deleteModalCategoryLabel{{$category->id}}" aria-hidden="true">
                                                <div class="modal-dialog" role="document">
                                                    <div class="modal-content">
                                                        <div class="modal-header">
                                                            <h5 class="modal-title" id="deleteModalCategoryLabel{{$category->id}}">Delete
                                                                Category
                                                                {{$category->name}} </h5>
                                                            <button type="button" class="close" data-dismiss="modal"
                                                                    aria-label="Close">
                                                                <span aria-hidden="true">&times;</span>
                                                            </button>
                                                        </div>
                                                        <div class="modal-body row display-4">
                                                            do you really want to delete .<p
                                                                class="text-danger"> {{$category->name}} </p>
                                                            ?
                                                        </div>
                                                        <div class="modal-footer">
                                                            <button type="button" class="btn btn-secondary"
                                                                    data-dismiss="modal">NO
                                                            </button>
                                                            <form action="{{url("category/{$category->id}")}}" method="post">
                                                                @method('DELETE')
                                                                @csrf
                                                                <button type="submit" class="btn btn-danger">YES
                                                                </button>
                                                            </form>

                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            {{--                                                                  / modal delete--}}
                                        </td>
                                    </tr>
                                @endforeach

                                </tbody>
                            </table>
                        </div>
                    </div>

                </div>
            </div> <!-- / .row -->
        </div>

    </div> <!-- / .main-content -->


@endsection
