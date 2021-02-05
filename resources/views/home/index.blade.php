@extends('layouts.app')
@include('home.macbook')
@include('home.subscribe')
@section('content')
    <div class="center">
        @stack('macbook')
        <div class="evenly pt-5 pb-5 center container-md container-fluid">
            <h2 class="popular_text">Popular Categories</h2>

            <div class="d-flex flex-row d-flex flex-row justify-content-between pt-5 flex-wrap container-md container-fluid">
                @for ($i = 0; $i < count($imgs) ; $i++)
                    <figure class="col-xl-2 p-0 col-md-4 col-sm-6 ">
                        <div class="d-flex rounded-circle  popular_categories_img center container">
                            <img src="{{asset('storage/'.$imgs[$i])}}" alt="photo">
                        </div>

                        <figcaption class="d-flex justify-content-center">{{$figcaption[$i]}}</figcaption>
                    </figure>
                @endfor

            </div>
        </div>

        <div class="w-100 h-500 Rectangle Rectangle2 d-flex justify-content-end">
            <div class="description text-white d-flex container-md container-fluid">
                <div class="text-white description_name ">
                    <p class="font-weight-lighter">TURN THE</p>
                    <p class="font-weight-bold">WORLD</p>
                </div>
                <div class="description_param">
                    <div class='d-flex justify-content-sm-end align-items-baseline'>
                        <p class="font-weight-lighter display-4 mr-2 d-none d-lg-block ">UPSIDE</p>
                        <p class="display-2 down">DOWN</p>
                    </div>
                    <div>
                        <p class="font-weight-lighter h4 mr-2">WITH BRAND NEW</p>
                        <p class="font-weight-normal  description_name mb-3">HEADPHONES</p>
                    </div>
                </div>
                <button type="button" class="bg-white  explore">
                    EXPLORE
                </button>
            </div>
        </div>
        <div class="center w-100 container pt-4">
            <div class="position-relative">
                <h3 class="justify-content-sm-center d-flex d-lg-block popular_text  pt-4 pb-4 container">Hot Sales</h3>
                <div class="container pb-4">
                    <div class="line"></div>
                    <div class="vector_left_container d-md-flex d-none center"><a href="#">
                            <img class="vector_left" src="{{asset('storage/Vector.png')}}" alt="">
                        </a></div>
                    <div class="vector_right_container d-md-flex d-none center"><a href="#">
                            <img class="vector_right" src="{{asset('storage/Vector.png')}}" alt="">
                        </a></div>
                </div>
                <div class="evenly d-flex flex-row flex-wrap ">
                    @foreach($hot_sales as $sales)
                        <div class="col-xl-3 p-3   col-md-4 col-sm-6 ">
                            <div class="hot_sales_imgs_container   just_around ">
                                <div class="d-flex flex-row position-relative h-15">
                                    @if($sales -> old_price)
                                        <div class="yes_sale bg-danger center"> Sale</div>
                                    @endif
                                    <div class="heart">
                                        <img class="img_heart" src="{{asset('storage/add-to-favorites.png')}}"
                                             alt="favorites">
                                    </div>
                                </div>

                                <div class="hot_sales_img center mt-4">
                                    <img class="container" src="{{asset('storage/'.$sales->img)}}" alt="computers">
                                </div>
                                <div class="container">
                                    <div class="sale d-flex flex-row">
                                        @if($sales -> old_price)
                                            <p class="price_sale text-danger">${{$sales ->price}}</p>
                                            <strike class="old_price"><p>${{$sales ->old_price}}</p></strike>
                                        @else
                                            <p class="price_sale" style="color: #151414 !important;">
                                                ${{$sales ->price}}</p>
                                        @endif

                                    </div>
                                    <div>
                                        <p class="sales_name">{{$sales ->name}} </p>
                                    </div>
                                </div>
                                <div class="d-flex justify-content-around container pb-1">
                                    <button type="button" class=" order_now bg-dark   center sales_name text-white col-11 p-0">ORDER NOW
                                    </button>
                                    <a href="#"><img src="{{asset('storage/Cart-with-plus.png')}}" alt="paiment"></a>
                                </div>

                            </div>
                        </div>

                    @endforeach
                </div>

                <div class="all_computers container">
                    <div><h3 class="justify-content-sm-center d-flex d-lg-block popular_text  pt-4">Computers</h3></div>
                    <div class="just_between flex-row pb-4 pt-2 ">
                        <div class=" d-flex flex-row justify-content-between col-lg-6 col-md-12 p-0">
                            <a class="p-0" href="#">Notebook</a>
                            <a class="p-0" href="#">Netbook</a>
                            <a class="p-0" href="#">All in one</a>
                            <a class="p-0" href="#">Stacionary</a>
                        </div>
                        <div  class="see_more ">
                            <a class="  " href="{{asset('home/create')}}">see more</a>
                        </div>
                    </div>
                </div>
                <div class="container pb-4">
                    <div class="line"></div>
                    <div class="vector_left_container  d-md-flex d-none center"><a href="#">
                            <img class="vector_left" src="{{asset('storage/Vector.png')}}" alt="">
                        </a></div>
                    <div class="vector_right_container center d-md-flex d-none"><a href="#">
                            <img class="vector_right" src="{{asset('storage/Vector.png')}}" alt="">
                        </a></div>
                </div>

                <div class="evenly1 d-flex flex-row flex-wrap ">

                    @foreach($computers as $computer)
                        <div class="col-xl-3 p-3   col-md-4 col-sm-6 ">
                            <div class="hot_sales_imgs_container just_around ">
                                <div class="d-flex flex-row position-relative h-15">
                                    @if($sales -> old_price)
                                        <div class="yes_sale center"> Sale</div>
                                    @endif
                                    <div class="heart">
                                        <img class="img_heart" src="{{asset('storage/add-to-favorites.png')}}"
                                             alt="favorites">
                                    </div>
                                </div>
                                <div class="hot_sales_img center mt-4">
                                    <img class="container" src="{{asset('storage/'.$computer->img)}}" alt="computers">
                                </div>
                                <div class="container">
                                    <div class="sale d-flex flex-row">
                                        @if($sales -> old_price)
                                            <p class="price_sale text-danger">${{$sales ->price}}</p>
                                            <strike class="old_price"><p>${{$sales ->old_price}}</p></strike>
                                        @else
                                            <p class="price_sale" style="color: #151414 !important;">
                                                ${{$sales ->price}}</p>
                                        @endif
                                    </div>
                                    <div>
                                        <p class="sales_name">{{$computer ->name}} </p>
                                    </div>
                                </div>
                                <div class="d-flex justify-content-around">
                                    <button type="button" class="order_now bg-dark center sales_name text-white">ORDER NOW
                                    </button>
                                    <a href="#"><img src="{{asset('storage/Cart-with-plus.png')}}" alt="paiment"></a>

                                </div>

                            </div>
                        </div>

                    @endforeach
                </div>

                <P class="justify-content-sm-center d-flex d-lg-block popular_text  pt-5 pb-4 container display-2">Brands we deliver</P>
                <div class="d-flex flex-row align-items-baseline justify-content-sm-between pb-sm-5 container overflow-hidden">
                    @foreach($brands as $brand)
                        <div class="brand container"><img  src="{{asset('storage/'.$brand)}}" alt="{{$brand}}"></div>

                    @endforeach
                </div>
            </div>

        </div>
        @stack('subscribe')
    </div>
@endsection
