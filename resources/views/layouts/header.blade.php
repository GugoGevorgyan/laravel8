@push('header')
        <nav class="navbar navbar-expand-lg navbar-light bg-white shadow-sm">
            <div class="container-lg">

                <img src="{{asset('storage/MGlogo.png')}}" class="img-fluid navbar-brand" alt="logo">
                <!-- @media -->

                <ul class="navbar-toggler  list-unstyled d-lg-none  d-sm-flex m-0 border-0 p-0">
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
                    <li class="container pr-0">
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
                            <a class="nav-link p-0 active font18_size22" aria-current="page" href="{{asset('home')}}">Computers</a>
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
                            <div class="dropdown-menu menu_txt text-dark p-0 top" aria-labelledby="navbarDropdownMenuLink"
                                 id="menu_Accesories">
                                <a class="dropdown-item d-flex  align-items-center" href="#">Headphones</a>
                                <a class="dropdown-item d-flex  align-items-center" href="#">Airpods</a>
                                <a class="dropdown-item d-flex  align-items-center" href="#">Earbuds</a>
                                <a class="dropdown-item d-flex  align-items-center" href="#">Speakers</a>
                            </div>
                        </li>
                    </ul>

                    <!-- Right Side Of Navbar -->
                    <ul class="col-6 navbar-nav search_container  ">
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
                                    <div class="flex_row d-flex  align-items-center menu_content">
                                        <img class="menu_icon" src="{{asset('storage/Cart-with-plus.png')}}"
                                             alt="Favorites">
                                        <p class="menu_txt text-dark">Favorites</p>
                                    </div>
                                    <div class="flex_row d-flex  align-items-center menu_content">
                                        <img class="menu_icon" src="{{asset('storage/add-to-favorites.png')}}" alt="Cart">
                                        <p class="menu_txt text-dark">Cart</p>
                                    </div>
                                    <div class="flex_row  justify-content-between menu_content">
                                        <p class="menu_txt text-dark"> Currency</p>
                                        <div class="center">
                                            <div class="flex_row  menu_img">
                                                <input type="radio" id="amd" name="Currency" value="AMD">
                                                <label class="menu_txt text-dark" for="amd">AMD</label>
                                            </div>
                                            <div class="flex_row menu_img">
                                                <input type="radio" id="usd" name="Currency" value="USD">
                                                <label class="menu_txt text-dark" for="usd">USD</label>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="flex_row justify-content-between menu_content">
                                        <p class="menu_txt text-dark"> Language</p>
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

@endpush
