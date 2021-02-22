@extends('admin.app')
@include('admin.sidebar')
@section('content')
<div class="container">
    <div class="row align-items-center">
        <div class="col-12 col-md-6 offset-xl-2 offset-md-1 order-md-2 mb-5 mb-md-0">

            <!-- Image -->
            <div class="text-center">
                <img src="{{asset('vendor/admin/assets/img/illustrations/lost.svg')}}" alt="..." class="img-fluid">
            </div>

        </div>
        <div class="col-12 col-md-5 col-xl-4 order-md-1 my-5">

            <div class="text-center">

                <!-- Preheading -->
                <h6 class="text-uppercase text-muted mb-4">
                    404 error
                </h6>

                <!-- Heading -->
                <h1 class="display-4 mb-3">
                    There’s no page here 😭
                </h1>

                <!-- Subheading -->
                <p class="text-muted mb-4">
                    you got here because you were deactivated
                </p>

                <!-- Button -->
                <a href="{{ route('logout') }}"  onclick="event.preventDefault();
                    document.getElementById('logout-form1').submit();" class=" btn btn-primary">{{ __('back') }}
                </a>
                <form id="logout-form1" action="{{ route('logout') }}" method="POST" style="display: none;">
                    @csrf
                </form>

            </div>

        </div>
    </div> <!-- / .row -->
</div> <!-- / .container -->
@endsection
