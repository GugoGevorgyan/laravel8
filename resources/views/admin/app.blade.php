
{{--<!doctype html>--}}
{{--<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">--}}
{{--<head>--}}
{{--    <meta charset="utf-8">--}}
{{--    <meta name="viewport" content="width=device-width, initial-scale=1">--}}

{{--    <!-- CSRF Token -->--}}
{{--    <meta name="csrf-token" content="{{ csrf_token() }}">--}}

{{--    <title>{{ config('app.name', 'Laravel') }}</title>--}}

{{--    <!-- Scripts -->--}}
{{--    <script src="{{ asset('js/app.js') }}" defer></script>--}}


{{--    <!-- Fonts -->--}}
{{--    <link rel="dns-prefetch" href="//fonts.gstatic.com">--}}
{{--    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">--}}

{{--    <!-- Styles -->--}}

{{--    <link href="{{ asset('css/app.css') }}" rel="stylesheet">--}}

{{--    <link rel="stylesheet" href="{{asset('vendor/admin/assets/css/theme.min.css')}}">--}}
{{--    <link rel="stylesheet" href="{{asset('vendor/admin/assets/css/theme-dark.min.css')}}">--}}
{{--</head>--}}
{{--<body>--}}
{{--<div id="app">--}}
{{--    <nav class="navbar navbar-expand-md navbar-light bg-white shadow-sm">--}}
{{--        <div class="container">--}}
{{--            <a class="navbar-brand" href="{{ url('/') }}">--}}
{{--                {{ config('app.name', 'Laravel') }}--}}
{{--            </a>--}}
{{--            <button class="navbar-toggler" type="button"--}}
{{--                    data-toggle="collapse" data-target="#navbarSupportedContent"--}}
{{--                    aria-controls="navbarSupportedContent" aria-expanded="false"--}}
{{--                    aria-label="{{ __('Toggle navigation') }}">--}}
{{--                <span class="navbar-toggler-icon"></span>--}}
{{--            </button>--}}

{{--            <div class="collapse navbar-collapse" id="navbarSupportedContent">--}}
{{--                <!-- Left Side Of Navbar -->--}}
{{--                <ul class="navbar-nav mr-auto">--}}

{{--                </ul>--}}

{{--                <!-- Right Side Of Navbar -->--}}
{{--                <ul class="navbar-nav ml-auto">--}}
{{--                    <!-- Authentication Links -->--}}
{{--                    @if(Auth::user())--}}
{{--                        <li class="nav-item dropdown">--}}
{{--                            <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>--}}
{{--                                {{ Auth::user()->name }} <span class="caret"></span>--}}
{{--                            </a>--}}

{{--                            <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">--}}
{{--                                <a class="dropdown-item" href="{{ route('logout') }}"--}}
{{--                                   onclick="event.preventDefault();--}}
{{--                                                     document.getElementById('logout-form').submit();">--}}
{{--                                    {{ __('Logout') }}--}}
{{--                                </a>--}}

{{--                                <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">--}}
{{--                                    @csrf--}}
{{--                                </form>--}}
{{--                            </div>--}}
{{--                        </li>--}}
{{--                    @endif--}}
{{--                </ul>--}}
{{--            </div>--}}
{{--        </div>--}}
{{--    </nav>--}}

{{--    <main class="py-4">--}}
{{--        <div class = "container">--}}
{{--            @yield('content')--}}
{{--        </div>--}}
{{--    </main>--}}
{{--</div>--}}

{{--</body>--}}
{{--</html>--}}


    <!doctype html>
<html lang="en">

<!-- Mirrored from dashkit.goodthemes.co/ by HTTrack Website Copier/3.x [XR&CO'2014], Fri, 02 Nov 2018 11:20:08 GMT -->
<!-- Added by HTTrack --><meta http-equiv="content-type" content="text/html;charset=utf-8" /><!-- /Added by HTTrack -->
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="A fully featured admin theme which can be used to build CRM, CMS, etc.">

    <!-- Libs CSS -->
    <link rel="stylesheet" href="{{asset('vendor/admin/assets/fonts/feather/feather.min.css')}}">
    <link rel="stylesheet" href="{{asset('vendor/admin/assets/libs/highlight.js/styles/vs2015.css')}}">
    <link rel="stylesheet" href="{{asset('vendor/admin/assets/libs/quill/dist/quill.core.css')}}">
    <link rel="stylesheet" href="{{asset('vendor/admin/assets/libs/select2/dist/css/select2.min.css')}}">
    <link rel="stylesheet" href="{{asset('vendor/admin/assets/libs/flatpickr/dist/flatpickr.min.css')}}">

    <!-- Theme CSS -->

    <link rel="stylesheet" href="{{asset('vendor/admin/assets/css/theme.min.css')}}" id="stylesheetLight">

    <link rel="stylesheet" href="{{asset('vendor/admin/assets/css/theme-dark.min.css')}}" id="stylesheetDark">

    <style>body { display: none; }</style>

    <script>
        var colorScheme = ( localStorage.getItem('dashkitColorScheme') ) ? localStorage.getItem('dashkitColorScheme') : 'light';
    </script>


    <title>Dashkit</title>
</head>
<body>

@yield('content')
<!-- JAVASCRIPT
================================================== -->
<!-- Libs JS -->
<script src="{{asset('vendor/admin/assets/libs/jquery/dist/jquery.min.js')}}"></script>
<script src="{{asset('vendor/admin/assets/libs/bootstrap/dist/js/bootstrap.bundle.min.js')}}"></script>
<script src="{{asset('vendor/admin/assets/libs/chart.js/dist/Chart.min.js')}}"></script>
<script src="{{asset('vendor/admin/assets/libs/chart.js/Chart.extension.min.js')}}"></script>
<script src="{{asset('vendor/admin/assets/libs/highlightjs/highlight.pack.min.js')}}"></script>
<script src="{{asset('vendor/admin/assets/libs/flatpickr/dist/flatpickr.min.js')}}"></script>
<script src="{{asset('vendor/admin/assets/libs/jquery-mask-plugin/dist/jquery.mask.min.js')}}"></script>
<script src="{{asset('vendor/admin/assets/libs/list.js/dist/list.min.js')}}"></script>
<script src="{{asset('vendor/admin/assets/libs/quill/dist/quill.min.js')}}"></script>
<script src="{{asset('vendor/admin/assets/libs/dropzone/dist/min/dropzone.min.js')}}"></script>
<script src="{{asset('vendor/admin/assets/libs/select2/dist/js/select2.min.js')}}"></script>

<!-- Theme JS -->
<script src="{{asset('vendor/admin/assets/js/theme.min.js')}}"></script>
</body>

<!-- Mirrored from dashkit.goodthemes.co/ by HTTrack Website Copier/3.x [XR&CO'2014], Fri, 02 Nov 2018 11:22:32 GMT -->
</html>
