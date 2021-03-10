@extends('admin.app')
@include('admin.sidebar')
@section('content')
@stack('sidebar')

<div class="main-content">
    @if(Session::has('message'))
        <p class="alert alert-info">{{ Session::get('message') }}</p>
@endif
    <!-- HEADER -->
<h1 class="text-center pt-5">WELCOME ADMIN PAGE</h1>

</div> <!-- / .main-content -->

@endsection
