<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    {{--    <meta name="csrf-token" content="{{ csrf_token() }}">--}}

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    {{--    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">--}}
    <link href="https://fonts.googleapis.com/css?family=Montserrat:100,300,500,800" rel="stylesheet">
    <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css"
          integrity="sha384-AYmEC3Yw5cVb3ZcuHtOA93w35dYTsvhLPVnYs9eStHfGJvOvKxVfELGroGkvsg+p"
          crossorigin="anonymous"/>
    <!-- Styles -->

    <link href="{{ mix('css/app.css') }}" rel="stylesheet">
</head>
<body>
<div id="app">
    <main>
        <div class="container p-0">
            <div>
                <div>
                    <img src="" alt="">
                </div>
                <form action="">
                    <div>
                        <div class="form-row">
                            <div class="form-group m-0 col-5">
                                <label for="firstName" class="d-block"></label>
                                <input type="text" class="form-control border-bottom border-right-0 border-left-0 border-top-0"
                                       id="firstName" placeholder="First Name">
                            </div>
                            <div class="form-group m-0 col-5">
                                <label for="lastName" class="d-block"></label>
                                <input type="text" class="form-control border-bottom border-right-0 border-left-0 border-top-0"
                                       id="lastName" placeholder="Last Name">
                            </div>

                        </div>
                        <div class="form-row">
                            <div class="form-group m-0 col-5">
                                <label for="firstName" class="d-block"></label>
                                <input type="text" class="form-control  border-bottom border-right-0 border-left-0 border-top-0"
                                       id="firstName" placeholder="First Name">
                            </div>
                            <div class="form-group  col-5">
                                <label for="lastName" class="d-block"></label>
                                <input type="text" class="form-control border-bottom border-right-0 border-left-0 border-top-0"
                                       id="lastName" placeholder="Last Name">
                            </div>

                        </div>
                        <div></div>
                        <div></div>
                        <div></div>
                        <div></div>
                        <div></div>
                    </div>

                    {{--                    <div class="form-row">--}}
                    {{--                        <div class="form-group col-md-6">--}}
                    {{--                            <label for="inputEmail4">Email</label>--}}
                    {{--                            <input type="email" class="form-control" id="inputEmail4" placeholder="Email">--}}
                    {{--                        </div>--}}
                    {{--                        <div class="form-group col-md-6">--}}
                    {{--                            <label for="inputPassword4">Password</label>--}}
                    {{--                            <input type="password" class="form-control" id="inputPassword4" placeholder="Password">--}}
                    {{--                        </div>--}}
                    {{--                    </div>--}}
                    {{--                    <div class="form-group">--}}
                    {{--                        <label for="inputAddress">Address</label>--}}
                    {{--                        <input type="text" class="form-control" id="inputAddress" placeholder="1234 Main St">--}}
                    {{--                    </div>--}}
                    {{--                    <div class="form-group">--}}
                    {{--                        <label for="inputAddress2">Address 2</label>--}}
                    {{--                        <input type="text" class="form-control" id="inputAddress2" placeholder="Apartment, studio, or floor">--}}
                    {{--                    </div>--}}
                    {{--                    <div class="form-row">--}}
                    {{--                        <div class="form-group col-md-6">--}}
                    {{--                            <label for="inputCity">City</label>--}}
                    {{--                            <input type="text" class="form-control" id="inputCity">--}}
                    {{--                        </div>--}}
                    {{--                        <div class="form-group col-md-4">--}}
                    {{--                            <label for="inputState">State</label>--}}
                    {{--                            <select id="inputState" class="form-control">--}}
                    {{--                                <option selected>Choose...</option>--}}
                    {{--                                <option>...</option>--}}
                    {{--                            </select>--}}
                    {{--                        </div>--}}
                    {{--                        <div class="form-group col-md-2">--}}
                    {{--                            <label for="inputZip">Zip</label>--}}
                    {{--                            <input type="text" class="form-control" id="inputZip">--}}
                    {{--                        </div>--}}
                    {{--                    </div>--}}
                    {{--                    <div class="form-group">--}}
                    {{--                        <div class="form-check">--}}
                    {{--                            <input class="form-check-input" type="checkbox" id="gridCheck">--}}
                    {{--                            <label class="form-check-label" for="gridCheck">--}}
                    {{--                                Check me out--}}
                    {{--                            </label>--}}
                    {{--                        </div>--}}
                    {{--                    </div>--}}
                    {{--                    <button type="submit" class="btn btn-primary">Sign in</button>--}}
                </form>
            </div>
        </div>
    </main>

</div>
</body>
</html>
