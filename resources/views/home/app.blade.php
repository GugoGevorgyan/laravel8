<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Montserrat:100,300,500,800" rel="stylesheet">
    <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css"
          integrity="sha384-AYmEC3Yw5cVb3ZcuHtOA93w35dYTsvhLPVnYs9eStHfGJvOvKxVfELGroGkvsg+p"
          crossorigin="anonymous"/>
    <!-- Styles -->
    <link href="{{ mix('css/app.css') }}" rel="stylesheet">
    <link href="{{ mix('css/tailwind.css') }}" rel="stylesheet">
    @include('support.style')
    @include('support.mediaStyle')
    @stack('style')
    @stack('mediaStyle')

</head>
<body>

{{--//////////////////////////////////////////////////////////--}}
{{--<nav class="navbar navbar-expand-lg  navbar-light bg-light">--}}
{{--    <div class="container-fluid">--}}
{{--        <a class="navbar-brand" href="#">Navbar w/ text</a>--}}
{{--        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarText" aria-controls="navbarText" aria-expanded="false" aria-label="Toggle navigation">--}}
{{--            <span class="navbar-toggler-icon"></span>--}}
{{--        </button>--}}
{{--        <div class="collapse navbar-collapse" id="navbarText">--}}
{{--            <ul class="navbar-nav me-auto mb-2 mb-lg-0">--}}
{{--                <li class="nav-item">--}}
{{--                    <a class="nav-link active" aria-current="page" href="#">Home</a>--}}
{{--                </li>--}}
{{--                <li class="nav-item">--}}
{{--                    <a class="nav-link" href="#">Features</a>--}}
{{--                </li>--}}
{{--                <li class="nav-item">--}}
{{--                    <a class="nav-link" href="#">Pricing</a>--}}
{{--                </li>--}}
{{--            </ul>--}}
{{--            <span class="navbar-text">--}}
{{--        Navbar text with an inline element--}}
{{--      </span>--}}
{{--        </div>--}}
{{--    </div>--}}
{{--</nav>--}}
{{--////////////////////////////////////////////////////////////////--}}


<div id="app">
    <nav class="navbar navbar-expand-lg navbar-light bg-white shadow-sm">
        <div class="container">

            <img src="{{asset('storage/MGlogo.png')}}" class="img-fluid navbar-brand" alt="logo">
            <!-- @media -->

            <ul class="navbar-toggler  media_menu_icons list-unstyled d-lg-none  d-sm-flex m-0 border-0">
                <li class="media_heart container">
                    <a href="">
                        <img class="img_heart" src="{{asset('storage/add-to-favorites.png')}}" alt="">
                    </a>
                </li>
                <li class="container">
                    <a href="">
                        <img class="img_heart" src="{{asset('storage/Cart-with-plus.png')}}" alt="">
                    </a>
                </li>
                <li class="container">
                    <a href="">
                        <img class="img_heart" src="{{asset('storage/menu-alt-2.png')}}" alt="">
                    </a>
                </li>
            </ul>

            {{--            <button class="navbar-toggler">--}}
{{--                <span class="navbar-toggler-icon"></span>--}}
{{--            </button>--}}
            <div class="collapse navbar-collapse pt-5" id="navbarText">
                <ul class="navbar-nav me-auto mb-2 mb-lg-0 col-6 justify-content-around">
                    <li class="nav-item d-flex flex-row col-3 align-items-center p-0 justify-content-between">
                        <a class="nav-link p-0 active font18_size22" aria-current="page" href="{{asset('home/create')}}">Computers</a>
                        <img class="h-75" src="{{asset('storage/Vector.png')}}" alt="">
                    </li>
                    <li class="nav-item d-flex flex-row col-3 align-items-center p-0 justify-content-between">
                        <a class="nav-link font18_size22" href="{{asset('home/create')}}">Printers</a>
                        <img class="h-75" src="{{asset('storage/Vector.png')}}" alt="">
                    </li>

                    <li class="nav-item dropdown col-3  d-flex flex-row col-3 align-items-center p-0 justify-content-between">
                        <a class="nav-link p-0 select font18_size22" href="#" id="navbarDropdownMenuLink"
                           role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            Accesories
                        </a>
                        <img class="h-75" src="{{asset('storage/Vector.png')}}" alt="">
                        <div class="dropdown-menu menu_txt" aria-labelledby="navbarDropdownMenuLink"
                             id="menu_Accesories">
                            <a class="dropdown-item align_center" href="#">Headphones</a>
                            <a class="dropdown-item align_center" href="#">Airpods</a>
                            <a class="dropdown-item align_center" href="#">Earbuds</a>
                            <a class="dropdown-item align_center" href="#">Speakers</a>
                        </div>
                    </li>
                </ul>

                <!-- Right Side Of Navbar -->
                <ul class="col-6 navbar-nav search_container ">
                    <li class="search">
                        <div class="input-group rounded">
                            <input type="search" class="form-control rounded" placeholder="Search" aria-label="Search"
                                   aria-describedby="search-addon"/>
                            <span class="input-group-text border-0" id="search-addon">
                                <i class="fas fa-search"></i>
                            </span>
                        </div>
                    </li>
                    <li class="nav-item dropdown">
                        <a class="nav-link menu_ellipse " href="#" id="DropdownMenuLink" role="button"
                           data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        </a>

                        <div class="dropdown-menu" aria-labelledby="DropdownMenuLink" id="hidden_menu">
                            <div class="dropdown-item flex_column just_around ">
                                <div class="flex_row align_center menu_content">
                                    <img class="menu_icon" src="{{asset('storage/Cart-with-plus.png')}}"
                                         alt="Favorites">
                                    <p class="menu_txt">Favorites</p>
                                </div>
                                <div class="flex_row align_center menu_content">
                                    <img class="menu_icon" src="{{asset('storage/add-to-favorites.png')}}" alt="Cart">
                                    <p class="menu_txt">Cart</p>
                                </div>
                                <div class="flex_row  justify-content-between menu_content">
                                    <p class="menu_txt"> Currency</p>
                                    <div class="center">
                                        <div class="flex_row  menu_img">
                                            <input type="radio" id="amd" name="Currency" value="AMD">
                                            <label class="menu_txt" for="amd">AMD</label>
                                        </div>
                                        <div class="flex_row menu_img">
                                            <input type="radio" id="usd" name="Currency" value="USD">
                                            <label class="menu_txt" for="usd">USD</label>
                                        </div>
                                    </div>
                                </div>
                                <div class="flex_row justify-content-between menu_content">
                                    <p class="menu_txt"> Language</p>
                                    <div class="center">
                                        <div class="flex_row menu_img">
                                            <input type="radio" id="usa" name="Language" value="usa">
                                            <label for="usa"><img src="{{asset('storage/usa.png')}}" alt="usa"></label>
                                        </div>

                                        <div class="flex_row menu_img">
                                            <input type="radio" id="arm" name="Language" value="arm">
                                            <label for="arm"><img src="{{asset('storage/arm.png')}}" alt="arm"></label>
                                        </div>

                                    </div>
                                </div>
                            </div>
                        </div>
                    </li>
                </ul>



            </div>
        </div>
    </nav>

    <main>
        @yield('content')
        @yield('footer')
    </main>
    <div class="flex_row center footer__list">
        <div class="flex_row col-6 ">

            <div class="center col-9 justify-content-between align-items-baseline ">
                <h5 class="footer_contact mb-2">Contact</h5>
                <ul class="list-unstyled contact">
                    <li>
                        <div class="center">
                            <img src="{{asset('storage/VectorGps.png')}}" alt="">
                        </div>

                        Rich Plaza, Yerevan, Armenia
                    </li>

                    <li>
                        <div class="center">
                            <img src="{{asset('storage/mail.png')}}" alt="">
                        </div>

                        mg@gmail.com
                    </li>
                    <li>
                        <div class="center">
                            <img src="{{asset('storage/phone.png')}}" alt="">
                        </div>

                        +374 95 84 84 54
                    </li>
                </ul>
                <div class="flex_column">
                    <p class="follow_us footer_contact">Follow us on</p>
                    <div class="flex_row">
                        <div class="social_container center"><img src="{{asset('storage/fb.png')}}" alt=""></div>
                        <div class="social_container center"><img src="{{asset('storage/insta.png')}}" alt=""></div>
                    </div>

                </div>

            </div>
            <div>
                <h5 class="footer_contact mb-2">Products</h5>
                <ul class="list-unstyled prod">
                    <li><a href="">Laptops</a></li>
                    <li><a href="">Headphones</a></li>
                    <li><a href="">Speakers</a></li>
                    <li><a href="">Airpods</a></li>
                    <li><a href="">Keyboards</a></li>
                </ul>
            </div>
            <div class="about_us__container">
                <h4 class="about_us font18_size22 font-weight-bold">About us</h4>
                <p class="about_text">Amet minim mollit non deserunt ullamco est sit aliqua dolor do amet sint.
                    Velit officia consequat duis enim velit mollit.
                    Exercitation veniam.</p>
            </div>
        </div>
    </div>
</div>
</body>
</html>
