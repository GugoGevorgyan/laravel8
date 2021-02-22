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
                                        Admins
                                    </h1>

                                </div>
                                <div class="col-auto">

                                    <!-- Button -->

                                    @if( Auth::user()->role_id === 1)
                                        <a href="{{url('admin/create')}}" class="btn btn-primary">
                                            {{ __('Create Admin') }}
                                        </a>
                                    @endif

                                </div>
                            </div> <!-- / .row -->
                        </div>
                    </div>

                    <!-- Card -->
                    <div class="card" data-toggle="lists"
                         data-lists-values='["admin-name", "admin-email", "admin-status"]'>

                        <div class="table-responsive">
                            <table class="table table-sm table-nowrap card-table">
                                <thead>
                                <tr>
                                    <th>
                                        <a href="#" class="text-muted sort" data-sort="admin-name">
                                            Name
                                        </a>
                                    </th>
                                    <th>
                                        <a href="#" class="text-muted sort" data-sort="admin-email">
                                            E-mail
                                        </a>
                                    </th>
                                    <th>
                                        <a href="#" class="text-muted sort" data-sort="admin-status">
                                            Status
                                        </a>
                                    </th>
                                </tr>
                                </thead>

                                <tbody class="list">
                                @foreach($admins as $admin)
                                    <tr>

                                        <td class="admin-name">
                                            {{$admin->name}}
                                        </td>
                                        <td class="admin-email">
                                            {{$admin->email}}
                                        </td>

                                        <td class="admin-status">
                                            @if($admin->status)
                                                <div class="badge badge-soft-success">
                                                    {{$admin->status}}
                                                </div>
                                            @else
                                                <div class="badge badge-soft-danger">
                                                    {{$admin->status}}
                                                </div>
                                            @endif
                                        </td>
                                        <td class="text-right">
                                            <div class="dropdown">
                                                <a href="#!" class="dropdown-ellipses dropdown-toggle" role="button"
                                                   data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"
                                                   data-boundary="window">
                                                    <i class="fe fe-more-vertical"></i>
                                                </a>
                                                <div class="dropdown-menu dropdown-menu-right">
                                                    <div class="dropdown-item d-flex flex-column">
                                                        <form action="/admin/status/{{$admin->id}}" method="post" class="py-2">
                                                            @csrf
                                                            @method('PUT')
                                                            @if(!$admin->status)
                                                                <input type="submit" value="Activate"
                                                                       class="btn btn-success w-100">
                                                            @else
                                                                <input type="submit" value="Deactivate"
                                                                       class="btn  btn-warning w-100">
                                                            @endif

                                                        </form>
                                                        <form action="{{url("admin/{$admin->id}")}}" method="post" class="py-2">
                                                            @method('DELETE')
                                                            @csrf
                                                            <input type="submit" value="Delete"
                                                                   class="btn btn-danger w-100">
                                                        </form>
                                                    </div>


                                                </div>
                                            </div>
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
