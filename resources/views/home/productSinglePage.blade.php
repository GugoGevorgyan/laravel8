@extends('layouts.app')
@include('home.subscribe')
@section('content')
    <div class=" center">
        <div class="container-md container-fluid">
            <div class="d-flex flex-lg-row flex-column flex-wrap pt-5 pb-5 justify-content-between position-relative z-index-n1">
                <div class="d-flex flex-lg-row flex-column-reverse flex-wrap  col-lg-7 col-12 p-0">
                    <div class="z-10 center flex-lg-column flex-row  col-lg-3 col-12 p-0 ">
                        <div class="container-lg-fluid container pl-sm-2 pr-sm-2 p-lg-0 pt-lg-2 pb-md-2 pr-md-3 pl-md-3 col-lg-12  col-3">
                            <div class=" border rounded w-100 float-right">
                                <img class="col-12 p-0 float-right" src="{{asset('storage/accesuar_2.png')}}" alt="">
                            </div>

                        </div>
                        <div class="container-lg-fluid container pl-sm-2 pr-sm-2 p-lg-0 pt-lg-2 pb-md-2 pr-md-3 pl-md-3 col-lg-12  col-3">
                            <div class=" border rounded w-100">
                                <img class="col-8 p-0" src="{{asset('storage/accesuar_3.png')}}" alt="">
                            </div>

                        </div>
                        <div class="container-lg-fluid container pl-sm-2 pr-sm-2 p-lg-0 pt-lg-2 pb-md-2 pr-md-3 pl-md-3 col-lg-12  col-3">
                            <div class=" border rounded w-100">
                                <img class="col-12 p-0" src="{{asset('storage/accesuar_4.png')}}" alt="">
                            </div>

                        </div>
                        <div class="container-lg-fluid container pl-sm-2 pr-sm-2 p-lg-0 pt-lg-2 pb-md-2 pr-md-3 pl-md-3 col-lg-12  col-3">
                            <div class=" border rounded w-100 float-right">
                                <img class="col-10 p-0 float-right" src="{{asset('storage/accesuar_5.png')}}" alt="">
                            </div>
                        </div>
                    </div>
                    <div class=" center col-lg-9 col-12 p-0">
                        <div class="container-fluid pl-sm-2 pr-sm-2 pt-2 pl-3 pr-3 pb-lg-0 pb-3 h-100">
                        <div  class="center border rounded float-right w-100  h-100 ">
                            <div >
                            <img class="img_single" src="{{asset('storage/accesuar_1.png')}}" alt="">
                            </div>
                        </div>
                        </div>

                    </div>
                </div>
                <div class="col-lg-5 col-12 pt-5 pt-lg-0">
                    <div class="d-flex flex-row flex-wrap justify-content-between pb-4">
                        <div class="">
                            <p class="font29_size24 uppercase">Beats by dr. dre</p>
                            <p class="single_currency"> US $1500</p>
                        </div>
                        <div class="d-lg-block d-none">
                            <img src="{{asset('storage/add-to-favorites.png')}}" alt="">
                        </div>
                    </div>
                    <div class="line"></div>
                    <div class="pt-lg-4 pt-3 pb-4">
                        <p class="single_text">
                            Amet minim mollit non deserunt ullamco est sit aliqua dolor do amet sint.
                            Velit officia consequat duis enim velit mollit.
                            Exercitation veniam consequat sunt nostrud amet.
                        </p>
                    </div>
                    {{--                    color --}}
                    <div class="container-lg container-fluid p-0">
                        <p class="font18_size22 pb-3">Color</p>
                        <div class="d-flex flex-row flex-wrap container p-0 pr-2 col-8 m-0">
                            @foreach($colors as $color)
                                <div class="col-2 container pr-2 pb-2 pl-md-0 pl-1 p-0 hover-color">
                                    <div class="col-12 pt-3 pb-md-4 pb-3 rounded" style="background:{{$color}}"></div>
                                </div>
                            @endforeach
                        </div>
                    </div>
                    {{--                    increment--}}
                    <div class="just_between h-25">
                        <div>
                            <div class="flex_row align-items-center">
                                <a href="#">
                                    <div class="radius50_container center">-</div>
                                </a>
                                <p class="font29_size24 font-weight-normal">1</p>
                                <a class="#" href="#">
                                    <div class="radius50_container center">+</div>
                                </a>
                            </div>
                        </div>
                        <div class="d-flex flex-row flex-wrap">
                            <button type="button" class="order_now bg-dark center sales_name text-white col-5 p-0">ORDER NOW</button>
                            <a  class="center" href="#"><img class="single_cart" src="http://design/storage/Cart-with-plus.png" alt="paiment"></a>
                        </div>
                    </div>
                </div>

            </div>
            {{--            description  --}}

            <div class="container">
                <div class="center">
                    <p class="font29_size24 p-lg-4 p-3">Description</p>
                </div>
                <div class="line"></div>
                <div>
                    <p class="single_description_text  pt-4">
                        Amet minim mollit non deserunt ullamco est sit aliqua dolor do amet sint.
                        Velit officia consequat duis enim velit mollit. Exercitation veniam consequat sunt nostrud amet.
                        Amet minim mollit non deserunt ullamco est sit aliqua dolor do amet sint.
                        Velit officia consequat duis enim velit mollit. Exercitation veniam consequat sunt nostrud amet.
                        Amet minim mollit non deserunt ullamco est sit aliqua dolor do amet sint. Velit officia
                        consequat duis
                        enim velit mollit. Exercitation veniam consequat sunt nostrud amet.
                        Amet minim mollit non deserunt ullamco est sit aliqua dolor do amet sint.
                        Velit officia consequat duis enim velit mollit. Exercitation veniam consequat sunt.
                    </p>
                </div>

                <div class="description_half flex_row justify-content-between mt-4">
                    <ul class="w-100 pl-3">
                        <li>
                            <div class="d-flex justify-content-between">
                                <p>Amet minim mollit non deserunt ullamco </p>
                                <p>5124</p>
                            </div>
                        </li>
                        <li>
                            <div class="d-flex justify-content-between">
                                <p>Amet minim mollit non deserunt ullamco </p>
                                <p>5124</p>
                            </div>
                        </li>
                        <li>
                            <div class="d-flex justify-content-between">
                                <p>Amet minim mollit non deserunt ullamco </p>
                                <p>5124</p>
                            </div>
                        </li>
                        <li>
                            <div class="d-flex justify-content-between">
                                <p>Amet minim mollit non deserunt ullamco </p>
                                <p>5124</p>
                            </div>
                        </li>
                        <li>
                            <div class="d-flex justify-content-between">
                                <p>Amet minim mollit non deserunt ullamco </p>
                                <p>5124</p>
                            </div>
                        </li>
                    </ul>
                </div>
            </div>

            {{--                   similar Items               --}}

            <div class="center w-100 container p-0 pt-4 pb-5 position-relative">
                <div class="all_computers container">
                    <div><h3 class="justify-content-sm-center d-flex d-lg-block popular_text  pt-4 pb-4">Similar Items</h3></div>
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

                <div class="evenly d-flex flex-row flex-wrap container p-0">

                    @foreach($computers as $computer)
                        <div class="col-xl-3 p-md-3 p-2   col-md-4 col-sm-6  disp2-none">
                            <div class="hot_sales_imgs_container just_around ">
                                <div class="d-flex flex-row position-relative h-15">
                                    @if($computer -> old_price)
                                        <div class="yes_sale text-white position-absolute bg-danger center"> Sale</div>
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
                                    <div class="align-items-end d-flex flex-row">
                                        @if($computer -> old_price)
                                            <p class="price_sale text-danger">${{$computer ->price}}</p>
                                            <strike class="old_price"><p>${{$computer ->old_price}}</p></strike>
                                        @else
                                            <p class="price_sale" style="color: #151414 !important;">
                                                ${{$computer ->price}}</p>
                                        @endif
                                    </div>
                                    <div>
                                        <p class="sales_name">{{$computer ->name}} </p>
                                    </div>
                                </div>
                                <div class="d-flex justify-content-around container">
                                    <button type="button" class="order_now bg-dark center sales_name text-white col-md-9  col-10 p-0">ORDER NOW
                                    </button>
                                    <a href="#"><img src="{{asset('storage/Cart-with-plus.png')}}" alt="paiment"></a>

                                </div>

                            </div>
                        </div>

                    @endforeach
                </div>
            </div>
{{--  --}}
        </div>
        @stack('subscribe')
    </div>
@endsection
