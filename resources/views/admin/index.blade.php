@extends('admin.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                @if(Session::has('message'))
                    <p class="alert alert-info">{{ Session::get('message') }}</p>
                @endif
{{--                @if( Auth::user()->role_id === 1)--}}

                <div class="card">
                    <div class="card-header">{{ __('Super Admin') }}</div>

                    <div class="card-body">

                            <a href="{{url('admin/create')}}">
                                <button type="submit" class="btn btn-primary">
                                    {{ __('create admin') }}
                                </button>
                            </a>

                    </div>
                </div>
{{--                    @endif--}}
            </div>
        </div>
    </div>
@endsection
