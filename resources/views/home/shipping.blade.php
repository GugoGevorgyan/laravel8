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
        <div class="container col-12 p-1">
            <div class=" col-12 p-3 m-0">
                <div>
                    <img src="" alt="">
                </div>
                <form class="center pr-4 pl-4 border bg-white shipping_text" action="">
                    <div class="mr-1 ml-1 bg-white">
                        <div class="form-row center">
                            <div class="col-12 p-0 m-0 form-row">
                                <div class="form-group pr-2 pl-2 m-0 col-6">
                                    <div class="border-bottom w-100 pt-3 pl-2">
                                        <label for="firstName" class="ml-1 mt-1 m-0 d-block">First Name</label>
                                        <input type="text" class="d-block border-0 w-100 p-0 m-0" id="firstName"
                                               placeholder="">
                                    </div>
                                </div>
                                <div class="form-group pl-2 pr-2 m-0 col-6">
                                    <div class="border-bottom w-100 pt-3 pl-2 text-left">
                                        <label for="lastName" class="ml-1 mt-1 m-0 d-block">Last Name</label>
                                        <input type="text" class="d-block border-0 w-100 p-0 m-0" id="lastName"
                                               placeholder="">
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="form-row center">
                            <div class="col-12 p-0 m-0 form-row">
                                <div class="form-group pr-2 pl-2 m-0 col-6">
                                    <div class="border-bottom w-100 pt-3 pb-3 pl-2">
                                        <label for="country" class="ml-1 mt-1 m-0 d-block"></label>
                                        <select id="country" class="col-10 d-block bg-white border-0 w-100 p-0 m-0">
                                            <option selected>Country</option>
                                            <option>...</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="form-group pl-2 pr-2 m-0 col-6">
                                    <div class="border-bottom w-100 pt-3 pb-3 pl-2 text-left">
                                        <label for="state" class="ml-1 mt-1 m-0 d-block"></label>
                                        <select id="state" class="col-10 d-block bg-white border-0 w-100 p-0 m-0">
                                            <option selected>State</option>
                                            <option>...</option>
                                        </select>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="form-row center">
                            <div class="col-12 p-0 m-0 form-row">
                                <div class="form-group pr-2 pl-2 m-0 col-6">
                                    <div class="border-bottom w-100 pt-3 pb-3 pl-2">
                                        <label for="city" class="ml-1 mt-1 m-0 d-block"></label>
                                        <select id="city" class="col-10 d-block bg-white border-0 w-100 p-0 m-0">
                                            <option selected>City</option>
                                            <option>...</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="form-group pl-2 pr-2 m-0 col-6">
                                    <div class="border-bottom w-100 pt-3 pl-2 text-left">
                                        <label for="zipCode" class="ml-1 mt-1 m-0 d-block">Zip Code</label>
                                        <input type="text" class="d-block border-0 w-100 p-0 m-0" id="zipCode">
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="form-row center">
                            <div class="col-12 p-0 m-0 form-row">
                                <div class="form-group pr-2 pl-2 m-0 col-12">
                                    <div class="border-bottom w-100 pt-3 pl-2">
                                        <label for="email" class="ml-1 mt-1 m-0 d-block">E-Mail</label>
                                        <input type="email" class="d-block border-0 w-100 p-0 m-0" id="email">
                                    </div>
                                </div>
                                <div class="form-group pr-2 pl-2 m-0 col-12">
                                    <div class="border-bottom w-100 pt-3 pl-2">
                                        <label for="phone" class="ml-1 mt-1 m-0 d-block">Phone Number</label>
                                        <input type="number" class="d-block border-0 w-100 p-0 m-0" id="phone">
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <button type="submit" class="btn btn-dark">Sign in</button>
                    <button type="submit" class="btn rounded-pill btn-dark order_now uppercase">save</button>
                </form>
            </div>
        </div>

    </main>

</div>
</body>
</html>
