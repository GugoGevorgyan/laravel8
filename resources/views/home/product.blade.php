@extends('layouts.app')
@include('home.macbook')
@include('home.subscribe')

@section('content')
    {{--        <img class="position-absolute currency" src="{{asset('storage/images/currency.png')}}" alt="">--}}
    <div class="home_content center">
        @stack('macbook')
        <div class="center w-100 container p-0 pt-4 position-relative">
            <div class="all_computers container">
                <div><h3 class="justify-content-sm-center d-flex d-lg-block popular_text  pt-4">
                        {{$productCategory}}</h3>
                </div>
                <div class="just_between flex-row pb-4 pt-2 justify-content-sm-between">
                    <div class="d-flex flex-row justify-content-md-between col-lg-6 col-md-8 p-0"   >
                        @foreach ($subCategories as $subCategory)
                            @if ($subCategory->subCategory && $subCategory->name === $productCategory)
                                @foreach($subCategory->subCategory as $sub)
                                    <a @if($sub->name === $prod) class="p-0 mr-2 text-danger" @else class="p-0 mr-2" @endif class="p-0 mr-2" href="{{url('prod/'.$sub->name)}}">{{$sub->name}}</a>
                                @endforeach
                            @endif
                        @endforeach
                    </div>

                </div>
            </div>
            <div class="container pb-4">
                <div class="line"></div>
            </div>
            <div class="container evenly d-flex flex-row flex-wrap ">

                @foreach($computers as $computer)
                    <div class="col-xl-3 p-md-3 p-2 col-md-4 col-sm-6 ">
                        <div class="hot_sales_imgs_container just_around ">
                            <div class="d-flex flex-row position-relative h-15">
                                @if($computer -> sale)
                                    <div class="yes_sale text-white position-absolute bg-danger center"> Sale</div>
                                @endif
                                    <div class="heart" data-id="{{$computer->id}}" role="button">
                                        <div class="black-heart {{!empty($computer->users->first()->pivot->favorite) ? '' : 'd-none'}}"></div>
                                    <img class="img_heart" src="{{asset('storage/images/add-to-favorites.png')}}"
                                         alt="favorites">
                                </div>
                            </div>
                            <div class="hot_sales_img center mt-4">
                                <img class="container" src="{{asset('storage/images/'.$computer->img)}}"
                                     alt="computers">
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
                                <div class="addToCart" data-id="{{$computer->id}}" role="button">
{{--                                    <img src="{{asset('storage/images/Cart-with-plus.png')}}" alt="paiment">--}}
                                    <svg class="cart-color
                                            @if(!count($cart_session))
                                        fill-black
@endif
                                    @foreach ($cart_session as $key=>$val)
                                    @if($computer->id == $key) fill-red @else fill-black @endif
                                    @endforeach" width="37" height="36" viewBox="0 0 37 36" fill="none"
                                         xmlns="http://www.w3.org/2000/svg">
                                        <path
                                            d="M13.4185 32C14.6694 32 15.6835 30.9926 15.6835 29.75C15.6835 28.5074 14.6694 27.5 13.4185 27.5C12.1676 27.5 11.1536 28.5074 11.1536 29.75C11.1536 30.9926 12.1676 32 13.4185 32Z"
                                            stroke="white" stroke-width="0.5"/>
                                        <path
                                            d="M27.1795 32C28.4304 32 29.4445 30.9926 29.4445 29.75C29.4445 28.5074 28.4304 27.5 27.1795 27.5C25.9286 27.5 24.9146 28.5074 24.9146 29.75C24.9146 30.9926 25.9286 32 27.1795 32Z"
                                            stroke="white" stroke-width="0.5"/>
                                        <path
                                            d="M33.2999 5.36999C33.2063 5.25527 33.0882 5.1626 32.9541 5.09862C32.8201 5.03465 32.6735 5.00096 32.5248 4.99999H11.5665L12.2208 6.99999H31.2061L28.5184 19H13.4187L8.81832 4.52999C8.76856 4.37645 8.68215 4.23714 8.56646 4.12396C8.45077 4.01077 8.30924 3.92707 8.15393 3.87999L4.02669 2.61999C3.89978 2.58125 3.76644 2.56772 3.63427 2.58017C3.5021 2.59262 3.37369 2.63082 3.25638 2.69257C3.01946 2.81728 2.84211 3.03038 2.76335 3.28499C2.68459 3.53959 2.71087 3.81486 2.83641 4.05021C2.96195 4.28557 3.17647 4.46175 3.43277 4.53999L7.04662 5.63999L11.6671 20.14L10.0162 21.48L9.88536 21.61C9.477 22.0775 9.24554 22.6718 9.23084 23.2906C9.21614 23.9094 9.41912 24.5139 9.80483 25C10.0792 25.3314 10.4279 25.5945 10.8229 25.7682C11.2179 25.9418 11.6484 26.0212 12.0798 26H28.8808C29.1477 26 29.4038 25.8946 29.5926 25.7071C29.7813 25.5196 29.8874 25.2652 29.8874 25C29.8874 24.7348 29.7813 24.4804 29.5926 24.2929C29.4038 24.1053 29.1477 24 28.8808 24H11.9188C11.8029 23.9961 11.6899 23.9625 11.5909 23.9025C11.4918 23.8426 11.41 23.7583 11.3533 23.6577C11.2967 23.5572 11.2671 23.4439 11.2674 23.3286C11.2677 23.2134 11.2979 23.1002 11.3551 23L13.7811 21H29.3237C29.5564 21.0056 29.7838 20.931 29.9674 20.7888C30.1509 20.6466 30.2792 20.4456 30.3303 20.22L33.5214 6.21999C33.552 6.0709 33.548 5.91685 33.5096 5.76955C33.4712 5.62225 33.3995 5.4856 33.2999 5.36999Z"
                                            stroke="white" stroke-width="0.5"/>
                                    </svg>
                                </div>
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
        <div class="center w-100 container p-0 pt-4 pb-5 position-relative">
            <div class="all_computers container">
                <div><h3 class="justify-content-sm-center d-flex d-lg-block popular_text  pt-4 pb-4">Similar Items</h3>
                </div>
            </div>
            <div class="container pb-4">
                <div class="line"></div>

{{--                <div class="row container ">--}}
{{--                    <div class="col-6 d-flex justify-content-end" id="vectors">--}}
{{--                        {{ $similar->links() }}--}}
{{--                    </div>--}}
{{--                </div>--}}

{{--                <div class="vector_left_container  d-md-flex d-none center"><a href="#">--}}
{{--                        <img class="vector_left" src="{{asset('storage/images/Vector.png')}}" alt="">--}}
{{--                    </a></div>--}}
{{--                <div class="vector_right_container center d-md-flex d-none"><a href="#">--}}
{{--                        <img class="vector_right" src="{{asset('storage/images/Vector.png')}}" alt="">--}}
{{--                    </a></div>--}}
            </div>

            <div class="evenly d-flex flex-row flex-wrap container p-0">
                <div class=" owl-carousel owl-theme owl_3" id="owl_3">
                @foreach($similar as $computer)
                    <div class="p-md-3 p-2
{{--                    col-xl-3 col-md-4 col-sm-6n disp2-noe--}}
                        ">
                        <div class="hot_sales_imgs_container just_around ">
                            <div class="d-flex flex-row position-relative h-15">
                                @if($computer -> sale)
                                    <div class="yes_sale text-white position-absolute bg-danger center"> Sale</div>
                                @endif
                                    <div class="heart" data-id="{{$computer->id}}" role="button">
                                        <div class="black-heart {{!empty($computer->users->first()->pivot->favorite) ? '' : 'd-none'}}"></div>
                                    <img class="img_heart" src="{{asset('storage/images/add-to-favorites.png')}}"
                                         alt="favorites">
                                </div>
                            </div>
                            <div class="hot_sales_img center mt-4">
                                <img class="container" src="{{asset('storage/images/'.$computer->img)}}"
                                     alt="computers">
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
                                <div class="addToCart" data-id="{{$computer->id}}" role="button">
                                    <svg class="cart-color
                                            @if(!count($cart_session))
                                        fill-black
@endif
                                    @foreach ($cart_session as $key=>$val)
                                    @if($computer->id == $key) fill-red @else fill-black @endif
                                    @endforeach" width="37" height="36" viewBox="0 0 37 36" fill="none"
                                         xmlns="http://www.w3.org/2000/svg">
                                        <path
                                            d="M13.4185 32C14.6694 32 15.6835 30.9926 15.6835 29.75C15.6835 28.5074 14.6694 27.5 13.4185 27.5C12.1676 27.5 11.1536 28.5074 11.1536 29.75C11.1536 30.9926 12.1676 32 13.4185 32Z"
                                            stroke="white" stroke-width="0.5"/>
                                        <path
                                            d="M27.1795 32C28.4304 32 29.4445 30.9926 29.4445 29.75C29.4445 28.5074 28.4304 27.5 27.1795 27.5C25.9286 27.5 24.9146 28.5074 24.9146 29.75C24.9146 30.9926 25.9286 32 27.1795 32Z"
                                            stroke="white" stroke-width="0.5"/>
                                        <path
                                            d="M33.2999 5.36999C33.2063 5.25527 33.0882 5.1626 32.9541 5.09862C32.8201 5.03465 32.6735 5.00096 32.5248 4.99999H11.5665L12.2208 6.99999H31.2061L28.5184 19H13.4187L8.81832 4.52999C8.76856 4.37645 8.68215 4.23714 8.56646 4.12396C8.45077 4.01077 8.30924 3.92707 8.15393 3.87999L4.02669 2.61999C3.89978 2.58125 3.76644 2.56772 3.63427 2.58017C3.5021 2.59262 3.37369 2.63082 3.25638 2.69257C3.01946 2.81728 2.84211 3.03038 2.76335 3.28499C2.68459 3.53959 2.71087 3.81486 2.83641 4.05021C2.96195 4.28557 3.17647 4.46175 3.43277 4.53999L7.04662 5.63999L11.6671 20.14L10.0162 21.48L9.88536 21.61C9.477 22.0775 9.24554 22.6718 9.23084 23.2906C9.21614 23.9094 9.41912 24.5139 9.80483 25C10.0792 25.3314 10.4279 25.5945 10.8229 25.7682C11.2179 25.9418 11.6484 26.0212 12.0798 26H28.8808C29.1477 26 29.4038 25.8946 29.5926 25.7071C29.7813 25.5196 29.8874 25.2652 29.8874 25C29.8874 24.7348 29.7813 24.4804 29.5926 24.2929C29.4038 24.1053 29.1477 24 28.8808 24H11.9188C11.8029 23.9961 11.6899 23.9625 11.5909 23.9025C11.4918 23.8426 11.41 23.7583 11.3533 23.6577C11.2967 23.5572 11.2671 23.4439 11.2674 23.3286C11.2677 23.2134 11.2979 23.1002 11.3551 23L13.7811 21H29.3237C29.5564 21.0056 29.7838 20.931 29.9674 20.7888C30.1509 20.6466 30.2792 20.4456 30.3303 20.22L33.5214 6.21999C33.552 6.0709 33.548 5.91685 33.5096 5.76955C33.4712 5.62225 33.3995 5.4856 33.2999 5.36999Z"
                                            stroke="white" stroke-width="0.5"/>
                                    </svg>
{{--                                    <img src="{{asset('storage/images/Cart-with-plus.png')}}" alt="paiment">--}}
                                </div>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
            </div>
        </div>

        @stack('subscribe')
    </div>
@endsection
