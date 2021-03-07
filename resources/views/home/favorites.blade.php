@extends('layouts.app')
@include('home.subscribe')
@section('content')
    <div class=" center">
        <div class="container-md container-fluid pt-4">
            <div class="d-flex flex-row flex-wrap container p-0">
                @foreach($computers as $computer)
                    <div class="col-xl-3 p-3 position-static col-md-4 col-sm-6 ">
                        <div class="hot_sales_imgs_container just_around ">
                            <div class="d-flex flex-row position-relative h-15">
                                @if($computer -> sale)
                                    <div class="yes_sale text-white position-absolute bg-danger center"> Sale</div>
                                @endif
                                <div class="heart">
                                    <img class="img_heart" src="{{asset('storage/images/favorites_black.png')}}"
                                         alt="favorites">
                                </div>
                            </div>
                            <div class="hot_sales_img center mt-4">
                                <img class="container" src="{{asset('storage/images/'.$computer->img)}}" alt="computers">
                            </div>
                            <div class="container">
                                <div class="align-items-end d-flex flex-row">
                                    @if($computer -> sale)
                                        <p class="price_sale text-danger">${{$computer ->sale}}</p>
                                        <strike class="old_price"><p>${{$computer ->price}}</p></strike>
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
                                    <a href="{{route('ordernow',$computer->id)}}" class="text-decoration-none text-white">ORDER NOW</a>
                                </button>
                                <a href="#"><img src="{{asset('storage/images/Cart-with-plus.png')}}" alt="paiment"></a>

                            </div>

                        </div>
                    </div>

                @endforeach
            </div>
            {{--                   similar Items               --}}

            <div class="center w-100 container p-0 pt-4 pb-5 position-relative">
                <div class="all_computers container">
                    <div class="d-none d-lg-block"><h3 class="justify-content-sm-center d-flex d-lg-block popular_text  pt-4 pb-4">Similar Items</h3></div>
                    <div class="d-block d-lg-none"><h3 class="justify-content-sm-center d-flex d-lg-block popular_text  pt-4 pb-4">Recommended for you</h3></div>
                </div>
                <div class="container pb-4">
                    <div class="line"></div>
                    <div class="vector_left_container  d-lg-flex d-none center"><a href="#">
                            <img class="vector_left" src="{{asset('storage/images/Vector.png')}}" alt="">
                        </a></div>
                    <div class="vector_right_container center d-lg-flex d-none"><a href="#">
                            <img class="vector_right" src="{{asset('storage/images/Vector.png')}}" alt="">
                        </a></div>
                </div>

                <div class="evenly d-flex flex-row flex-wrap container p-0">

                    @foreach($similar as $computer)
                        <div class="col-xl-3 p-3   col-md-4 col-sm-6  disp2-none">
                            <div class="hot_sales_imgs_container just_around ">
                                <div class="d-flex flex-row position-relative h-15">
                                    @if($computer -> sale)
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
                                        @if($computer -> sale)
                                            <p class="price_sale text-danger">${{$computer ->sale}}</p>
                                            <strike class="old_price"><p>${{$computer ->price}}</p></strike>
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
                                    <button type="button" class="order_now bg-dark center sales_name text-white col-md-9  col-10 p-0">
                                        <a href="{{route('ordernow',$computer->id)}}" class="text-decoration-none text-white">ORDER NOW</a>
                                    </button>
                                    <a href="#"><img src="{{asset('storage/images/Cart-with-plus.png')}}" alt="paiment"></a>

                                </div>

                            </div>
                        </div>

                    @endforeach
                </div>
            </div>
        </div>
    </div>
@endsection
