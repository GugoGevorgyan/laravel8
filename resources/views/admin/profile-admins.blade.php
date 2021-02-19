@extends('admin.app')
@include('admin.sidebar')
@section('content')
    @stack('sidebar')

    <div class="main-content">
        <!-- CONTENT -->
        <div class="container-fluid">
            <div class="row">
                @foreach($admins as $admin)
                    <div class="col-12 col-md-6 col-xl-4">

                        <!-- Card -->
                        <div class="card">

                            <div class="dropdown card-dropdown">
                                <a href="#!" class="dropdown-ellipses dropdown-toggle text-white" role="button"
                                   data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                    <i class="fe fe-more-vertical"></i>
                                </a>
                                <div class="dropdown-menu dropdown-menu-right">
                                    <a href="#!" class="dropdown-item">
                                        Action
                                    </a>
                                    <a href="#!" class="dropdown-item">
                                        Another action
                                    </a>
                                    <a href="#!" class="dropdown-item">
                                        Something else here
                                    </a>
                                </div>
                            </div>

                            <img src="{{asset('vendor/admin/assets/img/covers/profile-cover-2.jpg')}}" alt="..."
                                 class="card-img-top">

                            <div class="card-body text-center">

                                <a href="#!" class="avatar avatar-xl card-avatar card-avatar-top">
                                    <img src="{{asset('vendor/admin/assets/img/avatars/profiles/avatar-2.jpg')}}"
                                         class="avatar-img rounded-circle border border-4 border-card" alt="...">
                                </a>

                                <h2 class="card-title">

                                    <a href="profile-posts.html">{{$admin->name}}</a>
                                </h2>

                                <p class="card-text text-muted">
                                    <small>
                                        {{$admin->email}}
                                    </small>
                                </p>
                                <hr>

                                <div class="row align-items-center justify-content-between">
                                    <div class="col-auto">
                                        <small>
                                            @if($admin->status === '1')
                                            <span class="text-success">●</span>
                                                verify
                                            @else<span class="text-success"></span>
                                            no verify
                                            @endif
                                        </small>
                                    </div>
                                    <div class="col-auto">
                                        <a href="#!" class="btn btn-sm btn-primary">
                                            action
                                        </a>
                                    </div>
                                </div>

                            </div>

                        </div>

                    </div>
                @endforeach
            </div>
        </div>

    </div> <!-- / .main-content -->


@endsection
