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
        <div class="container col-8 p-0">
            <div class=" col-7 m-0">
                <div>
                    <img src="" alt="">
                </div>
                <form class="center pr-5 pl-4" action="">
                    <div class="pr-4 pl-4 bg-white">
                        <div class="form-row center">
                            <div class="col-12 p-0 m-0 form-row">
                                <div class="form-group pr-2  m-0 col-6">
                                    <label for="firstName" class="d-block"></label>
                                    <input type="text"
                                           class="d-block  border-top-0 border-left-0 border-right-0 border-bottom w-100"
                                           id="firstName" placeholder="First Name">
                                </div>
                                <div class="form-group pl-2 m-0 col-6">
                                    <label for="lastName" class="d-block"></label>
                                    <input type="text"
                                           class="d-block  border-top-0 border-left-0 border-right-0 border-bottom w-100"
                                           id="lastName" placeholder="Last Name">
                                </div>
                            </div>
                        </div>
                        <div class="form-row center">
                            <div class="col-12 p-0 m-0 form-row">
                            <div class="form-group pr-2 m-0 col-6">
                                <label for="country"></label>
                                <select id="country" class="d-block  border-top-0 border-left-0 border-right-0 border-bottom w-100">
                                    <option selected>Country</option>
                                    <option>...</option>
                                </select>
                            </div>
                            <div class="form-group pl-2 m-0 col-6">
                                <label for="state"></label>
                                <select id="state" class="d-block  border-top-0 border-left-0 border-right-0 border-bottom w-100">
                                    <option selected>State</option>
                                    <option>...</option>
                                </select>
                            </div>
                        </div>
                        </div>
                        <div class="form-row center">
                            <div class="col-12 p-0 m-0 form-row">
                            <div class="form-group pr-2 pt-1 m-0 col-6">
{{--                                <div class="  border-top-0 border-left-0 border-right-0 border-bottom w-100">--}}
                                    <label for="city"></label>
                                    <select id="city" class="d-block  border-top-0 border-left-0 border-right-0 border-bottom w-100">
                                        <option selected>City</option>
                                        <option>...</option>
                                    </select>
{{--                                </div>--}}

                            </div>
                            <div class="form-group pl-2 m-0 col-6">
                                <label for="zipCode" ></label>
                                <input type="text"
                                       class="d-block  border-top-0 border-left-0 border-right-0 border-bottom w-100"
                                       id="zipCode" placeholder="Zip Code">
                            </div>
                        </div>
                        </div>
                        <div class="form-row center">
                            <div class="col-12 p-0 m-0 form-row">
                            <div class="form-group m-0 col-12">
                                <label for="email"></label>
                                <input type="email" class="d-block  border-top-0 border-left-0 border-right-0 border-bottom w-100" id="email" placeholder="E-Mail">
                            </div>
                            <div class="form-group m-0 col-12">
                                <label for="phone" class="d-block"></label>
                                <input type="number"
                                       class="d-block  border-top-0 border-left-0 border-right-0 border-bottom w-100"
                                       id="phone" placeholder="Phone Number">
                            </div>
                        </div>
                        </div>

                        <div></div>
                        <div></div>
                        <div></div>
                        <div></div>
                        <div></div>
                    </div>

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
