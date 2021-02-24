@extends('layouts.app')
@include('home.macbook')
@include('home.subscribe')

@section('content')
    {{--        <img class="position-absolute currency" src="{{asset('storage/images/currency.png')}}" alt="">--}}
    <div class="home_content center">
        @stack('macbook')
        <div class="center w-100 container p-0 pt-4 position-lg-relative">
            <div class="all_computers container">
                <div><h3 class="justify-content-sm-center d-flex d-lg-block popular_text  pt-4">Computers</h3></div>
                <div class="just_between flex-row pb-4 pt-2 justify-content-sm-between">
                    <div class="d-flex flex-row justify-content-md-between col-lg-6 col-md-8 p-0">
                        <a class="p-0 mr-2" href="#">Notebook</a>
                        <a class="p-0 mr-2" href="#">Netbook</a>
                        <a class="p-0 mr-2" href="#">All in one</a>
                        <a class="p-0 mr-2" href="#">Stacionary</a>
                    </div>

                </div>
            </div>
            {{--        <div class="center w-100 container pt-4">--}}
            <div class="container pb-4">
                <div class="line"></div>
                <div class="vector_left_container  d-md-flex d-none center"><a href="#">
                        <img class="vector_left" src="{{asset('storage/images/Vector.png')}}" alt="">
                    </a></div>
                <div class="vector_right_container center d-md-flex d-none"><a href="#">
                        <img class="vector_right" src="{{asset('storage/images/Vector.png')}}" alt="">
                    </a></div>
            </div>

            <div class="evenly d-flex flex-row flex-wrap ">

                @foreach($computers as $computer)
                    <div class="col-xl-3 p-md-3 p-2 col-md-4 col-sm-6 ">
                        <div class="hot_sales_imgs_container just_around ">
                            <div class="d-flex flex-row position-relative h-15">
                                @if($computer -> old_price)
                                    <div class="yes_sale text-white position-absolute bg-danger center"> Sale</div>
                                @endif
                                <div class="heart">
                                    <img class="img_heart" src="{{asset('storage/images/add-to-favorites.png')}}"
                                         alt="favorites">
                                </div>
                            </div>
                            <div class="hot_sales_img center mt-4">
                                <img class="container" src="{{asset('storage/images/'.$computer->img)}}" alt="computers">
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
                                <button type="button"
                                        class="order_now bg-dark center sales_name text-white col-md-9  col-10 p-0">
                                    ORDER NOW
                                </button>
                                <a href="#"><img src="{{asset('storage/images/Cart-with-plus.png')}}" alt="paiment"></a>

                            </div>

                        </div>
                    </div>

                @endforeach
            </div>
        </div>


        <div class="row container">
            <div class="col-6 d-flex justify-content-end ">
                {{ $computers->onEachSide(1)->links() }}
            </div>
        </div>
        {{-- similar item--}}
        <div class="center w-100 container p-0 pt-4 pb-5 position-lg-relative">
            <div class="all_computers container">
                <div><h3 class="justify-content-sm-center d-flex d-lg-block popular_text  pt-4 pb-4">Similar Items</h3>
                </div>
            </div>
            <div class="container pb-4">
                <div class="line"></div>
                <div class="vector_left_container  d-md-flex d-none center"><a href="#">
                        <img class="vector_left" src="{{asset('storage/images/Vector.png')}}" alt="">
                    </a></div>
                <div class="vector_right_container center d-md-flex d-none"><a href="#">
                        <img class="vector_right" src="{{asset('storage/images/Vector.png')}}" alt="">
                    </a></div>
            </div>

            <div class="evenly d-flex flex-row flex-wrap container p-0">

                @foreach($similar as $computer)
                    <div class="col-xl-3 p-md-3 p-2   col-md-4 col-sm-6  disp2-none">
                        <div class="hot_sales_imgs_container just_around ">
                            <div class="d-flex flex-row position-relative h-15">
                                @if($computer -> old_price)
                                    <div class="yes_sale text-white position-absolute bg-danger center"> Sale</div>
                                @endif
                                <div class="heart">
                                    <img class="img_heart" src="{{asset('storage/images/add-to-favorites.png')}}"
                                         alt="favorites">
                                </div>
                            </div>
                            <div class="hot_sales_img center mt-4">
                                <img class="container" src="{{asset('storage/images/'.$computer->img)}}" alt="computers">
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
                                <button type="button"
                                        class="order_now bg-dark center sales_name text-white col-md-9  col-10 p-0">
                                    ORDER NOW
                                </button>
                                <a href="#"><img src="{{asset('storage/images/Cart-with-plus.png')}}" alt="paiment"></a>

                            </div>

                        </div>
                    </div>

                @endforeach
            </div>
        </div>

        @stack('subscribe')
    </div>
@endsection
