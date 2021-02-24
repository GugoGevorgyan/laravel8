<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    {{--    <meta name="csrf-token" content="{{ csrf_token() }}">--}}

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.carousel.min.css">
    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">

    <link href="https://fonts.googleapis.com/css?family=Montserrat:100,300,500,800" rel="stylesheet">
    <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css"
          integrity="sha384-AYmEC3Yw5cVb3ZcuHtOA93w35dYTsvhLPVnYs9eStHfGJvOvKxVfELGroGkvsg+p"
          crossorigin="anonymous"/>
    <!-- Styles -->

    <link href="{{ mix('css/app.css') }}" rel="stylesheet">
    <link rel="stylesheet" href="{{asset('vendor/owl-carousel/owl.theme.css')}}">
</head>
<body>
<div id="app">
    <main>
            <div class=" container-md container-fluid p-sm-0 p-1 flex_row owl-caroucel owl-theme overflow-hidden position-relative" id="owl_2" >
                    <div class=" container center align-items-end col-12 col-lg-6 col-md-10 pl-sm-2  p-sm-0 p-3">
                        <div class="col-12 col-sm-11 bg-white p-4 m-0">
                            <div class="center p-md-5 pt-4 mt-2 m-1 mb-md-1 mb-4 pb-3 ">
                                <div class="mb-md-3 m-md-2 pt-5 pb-4">
                                    <img class="container p-0" src="{{asset('storage/images/image27.png')}}" alt="shipping">
                                </div>
                            </div>

                            <div class="pb-5 pl-md-5 ml-md-2 mb-md-3 mb-2">
                                <div> <p class="font29_size24 text-cart">HP proBook 4530s</p></div>
                                <div><h2 class="order_faster_text text-danger font-weight-bold ">$1500</h2></div>
                            </div>
                        </div>
                    </div>
                    <div class=" container col-12 col-lg-6 col-md-10 pr-sm-2 p-sm-0 p-3 text-white">
                        <div class="col-12 col-sm-11 bg-info text-white p-sm-3 p-0 m-0">
                            <div class="center">
                                <h6 class="font29_size24 pt-5 m-0 pb-4 mb-3 mt-2 top_0">Order now and faster !</h6>
                            </div>
                            <form class="pr-sm-4 pl-sm-4 pr-3 pl-3  shipping_text" method="get" action='{{route('home.index')}}'>
                                <div class="mr-1 ml-1 m-sm-0 bg-info text-white">
                                    <div class="flex-wrap center">
                                        <div class="col-12 p-0 m-0 d-flex flex-wrap">
                                            <div class="d-flex flex-wrap pr-2 pl-2 m-0 col-6">
                                                <div class="border-bottom w-100 pt-3 pl-2">
                                                    <label for="firstName" class="ml-1 mt-1 m-0 d-block">First Name</label>
                                                    <input type="text" class="d-block bg-info text-white border-0 w-100 p-0 m-0" id="firstName"
                                                           placeholder="">
                                                </div>
                                            </div>
                                            <div class="d-flex flex-wrap pl-2 pr-2 m-0 col-6">
                                                <div class="border-bottom w-100 pt-3 pl-2 text-left">
                                                    <label for="lastName" class="ml-1 mt-1 m-0 d-block">Last Name</label>
                                                    <input type="text" class="d-block border-0 bg-info text-white w-100 p-0 m-0" id="lastName"
                                                           placeholder="">
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="flex-wrap center">
                                        <div class="col-12 p-0 m-0 d-flex flex-wrap">
                                            <div class=" pr-2 pl-2 m-0 col-6">
                                                <div class="border-bottom w-100 pt-3 pb-3 pl-2">
                                                    <label for="country" class="ml-1 mt-1 m-0 d-block"></label>
                                                    <select id="country" class="col-10 d-block bg-info text-white border-0 w-100 p-0 m-0">
                                                        <option selected>Country</option>
                                                        <option>...</option>
                                                    </select>
                                                </div>
                                            </div>
                                            <div class=" pl-2 pr-2 m-0 col-6">
                                                <div class="border-bottom w-100 pt-3 pb-3 pl-2 text-left">
                                                    <label for="state" class="ml-1 mt-1 m-0 d-block"></label>
                                                    <select id="state" class="col-10 d-block bg-info text-white border-0 w-100 p-0 m-0">
                                                        <option selected>State</option>
                                                        <option>...</option>
                                                    </select>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="flex-wrap center">
                                        <div class="col-12 p-0 m-0 d-flex flex-wrap">
                                            <div class=" pr-2 pl-2 m-0 col-6">
                                                <div class="border-bottom w-100 pt-3 pb-3 pb-lg-4 pl-2">
                                                    <label for="city" class="ml-1 mt-1 m-0 d-block"></label>
                                                    <select id="city" class="col-10 d-block bg-info text-white border-0 w-100 p-0 m-0">
                                                        <option selected>City</option>
                                                        <option>...</option>
                                                    </select>
                                                </div>
                                            </div>
                                            <div class=" pl-2 pr-2 m-0 col-6">
                                                <div class="border-bottom w-100 pt-3 pl-2 text-left">
                                                    <label for="zipCode" class="ml-1 mt-1 m-0 d-block">Zip Code</label>
                                                    <input type="text" class="d-block bg-info text-white border-0 w-100 p-0 m-0" id="zipCode">
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="flex-wrap center">
                                        <div class="col-12 p-0 m-0 d-flex flex-wrap">
                                            <div class=" pr-2 pl-2 m-0 col-12">
                                                <div class="border-bottom w-100 pt-3 pl-2">
                                                    <label for="email" class="ml-1 mt-1 m-0 d-block">E-Mail</label>
                                                    <input type="email" class="d-block border-0 bg-info text-white w-100 p-0 m-0" id="email">
                                                </div>
                                            </div>
                                            <div class=" pr-2 pl-2 m-0 col-12">
                                                <div class="border-bottom w-100 pt-3 pl-2">
                                                    <label for="phone" class="ml-1 mt-1 m-0 d-block">Phone Number</label>
                                                    <input type="number" class="d-block bg-info text-white border-0 w-100 p-0 m-0" id="phone">
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="pt-5 pb-5 pl-lg-2 pr-lg-3 mt-2 mb-2 d-flex justify-content-center">
                                        <button type="reset" class="btn text-white focus rounded-pill capitalize pt-2 pb-2 pb-md-3 pt-md-3 col-4">Cancel</button>
                                        <button type="submit" class="btn rounded-pill bg-white uppercase pt-2 pb-2 pb-md-3 pt-md-3 col-7">place order
                                        </button>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
            </div>
    </main>

</div>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/owl.carousel.min.js"></script>
</body>
</html>
