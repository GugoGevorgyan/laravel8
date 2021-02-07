@extends('layouts.app')
@include('home.subscribe')
@section('content')
    <div class=" center">
        <div class=" container">
            <div class="d-flex flex-row flex-wrap pt-5 pb-5 justify-content-between">
                <div class="d-flex flex-row flex-wrap  col-7 p-0">
                    <div class="center  col-3 p-0">
                        <div class="container-fluid p-0 pt-2 pb-2  ">
                            <div class=" border rounded w-100 float-right">
                                <img class=" float-right" src="{{asset('storage/accesuar_2.png')}}" alt="">
                            </div>

                        </div>
                        <div class="container-fluid p-0 pt-2 pb-2   ">
                            <div class=" border rounded w-100">
                                <img  src="{{asset('storage/accesuar_3.png')}}" alt="">
                            </div>

                        </div>
                        <div class="container-fluid p-0 pt-2 pb-2 ">
                            <div class=" border rounded w-100">
                                <img src="{{asset('storage/accesuar_4.png')}}" alt="">
                            </div>

                        </div>
                        <div class="container-fluid p-0 pt-2 pb-2 ">
                            <div class=" border rounded w-100 float-right">
                                <img class="float-right" src="{{asset('storage/accesuar_5.png')}}" alt="">
                            </div>
                        </div>
                    </div>
                    <div class=" center col-9 p-0">
                        <div class="container-fluid p-2 pl-3 pr-3 h-100  ">
                        <div  class="center border rounded float-right w-100  h-100 ">
                            <div >
                            <img src="{{asset('storage/accesuar_1.png')}}" alt="">
                            </div>
                        </div>
                        </div>

                    </div>
                </div>
                <div class=" col-5 ">
                    <div class="flex_row justify-content-between pb-4">
                        <div class="">
                            <p class="font29_size24 uppercase">Beats by dr. dre</p>
                            <p class="single_currency"> US $1500</p>
                        </div>
                        <div>
                            <img src="{{asset('storage/add-to-favorites.png')}}" alt="">
                        </div>
                    </div>
                    <div class="line"></div>
                    <div class="pt-4 pb-3">
                        <p class="single_text">
                            Amet minim mollit non deserunt ullamco est sit aliqua dolor do amet sint.
                            Velit officia consequat duis enim velit mollit.
                            Exercitation veniam consequat sunt nostrud amet.
                        </p>
                    </div>
                    {{--                    color --}}
                    <div class="container p-0">
                        <p class="font18_size22">Color</p>
                        <div class=" flex_row container p-0 ">
                            @foreach($colors as $color)
                                <div class="col-2 container pr-2 p-0 ">
                                    <div class="col-12 pt-3 pb-4" style="background:{{$color}}"></div>
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
                        <div class="flex_row">
                            <button type="button" class="order_now center sales_name text-white col-md-9 col-11 p-0">ORDER NOW</button>
                            <a href="#"><img class="single_cart" src="http://design/storage/Cart-with-plus.png"
                                             alt="paiment"></a>
                        </div>
                    </div>
                </div>

            </div>
            {{--            description  --}}

            <div class="single_description_container just_between">
                <div class="single_description center">
                    <p class="font29_size24">Description</p>
                </div>
                <div class="line"></div>
                <div>
                    <p class="single_description_text">
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
                <div class="description_half flex_row justify-content-between">
                    <ul>
                        <li>
                            <p>Amet minim mollit non deserunt ullamco </p>
                        </li>
                        <li>
                            <p>Amet minim mollit non deserunt ullamco </p>
                        </li>
                        <li>
                            <p>Amet minim mollit non deserunt ullamco </p>
                        </li>
                        <li>
                            <p>Amet minim mollit non deserunt ullamco </p>
                        </li>
                        <li>
                            <p>Amet minim mollit non deserunt ullamco </p>
                        </li>
                    </ul>
                    <div>
                        <p>5124</p>
                        <p>5124</p>
                        <p>5124</p>
                        <p>5124</p>
                        <p>5124</p>
                    </div>
                </div>
            </div>
            {{--                   similar Items               --}}
            <div class="similar_items_container">
                <p class="popular_text  p-4">similar Items</p>
                <div>
                    <div class="line"></div>
                    <div class="vector_left_container center"><a href="#">
                            <img class="vector_left" src="{{asset('storage/Vector.png')}}" alt="">
                        </a></div>
                    <div class="vector_right_container center"><a href="#">
                            <img class="vector_right" src="{{asset('storage/Vector.png')}}" alt="">
                        </a></div>
                </div>
                <div class="evenly flex_row ">
                    @foreach($computers as $computer)
                        <div class="hot_sales_imgs_container just_around ">
                            <div class="d-flex flex-row position-relative h-15">
                                @if($computer -> old_price)
                                    <div class="yes_sale center"> Sale</div>
                                @endif
                                <div class="heart">
                                    <img class="img_heart" src="{{asset('storage/add-to-favorites.png')}}"
                                         alt="favorites">
                                </div>
                            </div>


                            <div class="hot_sales_img center">
                                <img src="{{asset('storage/'.$computer->img)}}" alt="computers">
                            </div>
                            <div class="ml-1">
                                <div class="align-items-end flex_row">
                                    @if($computer -> old_price)
                                        <p class="price_sale">${{$computer ->price}}</p>
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
                            <div class="d-flex justify-content-around">
                                <button type="button" class="order_now bg-dark center sales_name text-white col-md-9  col-11 p-0">ORDER NOW
                                </button>
                                <a href="#"><img src="{{asset('storage/Cart-with-plus.png')}}" alt="paiment"></a>
                            </div>

                        </div>
                    @endforeach
                </div>
            </div>

        </div>

    </div>
@endsection
