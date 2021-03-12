@extends('layouts.app')
@include('home.subscribe')
@section('content')
    <div class="center">
        <div class="container-md container-fluid pt-lg-5 p-0">
            <div class="container col-12 m-0 pb-lg-5 p-0 d-flex flex-lg-row flex-column position-static" id="cart">
                <div class="col-lg-8 col-12 m-0 row position-static d-lg-block d-flex flex-row">
                    @if(count($cart_products))
                        @foreach($cart_products as $product)
                            <div class="pt-3 pb-2 pr-2 pl-0 col-lg-12 col-6 m-0 position-static">
                                <div class="d-flex flex-lg-row flex-column align-items-lg-start col-12 p-lg-0
                                    pt-lg-4 pb-lg-4 m-0 rounded shadow position-static" id="cart-container">
                                    <div class="container col-lg-1 pb-lg-0 pb-4 col-12 m-0 center order-lg-0 order-2">
                                        <input checked type="checkbox" name="cart"
                                               class="radio_input appearance p-2 rounded-circle"
                                               value="@if($product->sale){{$product->sale}}@else{{$product->price}} @endif" role="button">
                                    </div>
                                    <div class="container p-0 pt-lg-0 pt-4 col-lg-4 col-12 m-0 position-static
                                        order-lg-1 order-0">
                                        <div class="hot_sales_img center">
                                            <img class="container p-0"
                                                 src="{{asset('storage/images/'.$product->img)}}"
                                                 alt="computers">
                                        </div>
                                    </div>
                                    <div class="d-lg-block d-flex flex-column-reverse
                                        container p-0 col-lg-4 col-12 m-0 position-static order-lg-2 order-1">
                                        <div>
                                            <div>
                                                <p class="font29_size24 text-cart">{{$product->name}}</p>
                                            </div>
                                            <div class="d-flex flex-column pt-lg-2 pb-3 font_16_20 text-cart">
                                                <p class="">{{$product->description}}</p>
                                                <p> Color: black</p>
                                            </div>
                                        </div>
                                        <div>
                                            <div class="container p-0 pt-lg-0 pb-lg-0 pt-1 pb-1 ">
                                                <div class="align-items-end d-flex flex-row">
                                                    @if($product->sale)
                                                        <p class="price_sale text-danger">
                                                            ${{$product->sale}}</p>
                                                        <strike class="old_price"><p>${{$product->price}}</p>
                                                        </strike>
                                                    @else
                                                        <p class="price_sale" style="color: #151414 !important;">
                                                            ${{$product->price}}</p>
                                                    @endif


                                                    {{--                                            <p class="price_sale text-danger ">${{$computers[1]->sale}}</p>--}}
                                                    {{--                                            <strike class="old_price"><p>${{$computers[0]->price}}</p></strike>--}}
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="container pl-3 pr-2 p-0 col-lg-3 col-12 m-0 position-static order-lg-3">

                                        <div class="d-lg-flex d-none flex-row  @if(!$product->sale) justify-content-end @else justify-content-between @endif">
                                            @if($product->sale)
                                            <div class="font_16_20 pr-3 pl-3 text-white bg-danger center"> Sale</div>
                                            @endif
                                                <div class="heart pr-3 position-static" data-id="{{$product->id}}" role="button">
                                                    <div
                                                        class="black-heart {{!empty($product->users->first()->pivot->favorite) ? '' : 'd-none'}}"></div>
                                                    <img class="img_heart"
                                                         src="{{asset('storage/images/add-to-favorites.png')}}"
                                                         alt="favorites">
                                                </div>
{{--                                            <div class="pr-3">--}}
{{--                                                <img class=""--}}
{{--                                                     src="{{asset('storage/images/add-to-favorites.png')}}"--}}
{{--                                                     alt="favorites">--}}
{{--                                            </div>--}}
                                        </div>
                                        <div class="pt-5 position-absolute" id="cart-delete"  data-toggle="modal"
                                             data-target="#deleteProd{{$product->id}}">
                                            <div class="btn btn-danger">Remove</div>
                                        </div>

                                        <div class="modal fade" id="deleteProd{{$product->id}}" tabindex="-1" role="dialog"
                                             aria-labelledby="deleteProdLabel{{$product->id}}" aria-hidden="true">
                                            <div class="modal-dialog" role="document">
                                                <div class="modal-content">
                                                    <div class="modal-header">
                                                        <h5 class="modal-title" id="deleteProdLabel{{$product->id}}">remove Product
                                                            "{{$product->name}} "</h5>
                                                        <button type="button" class="close" data-dismiss="modal"
                                                                aria-label="Close">
                                                            <span aria-hidden="true">&times;</span>
                                                        </button>
                                                    </div>
                                                    <div class="modal-body row ">
                                                        do you really want to remove from the basket -><p
                                                            class="text-danger"> {{$product->name}} </p>
                                                        ?
                                                    </div>

                                                    <div class="modal-footer">
                                                        <button type="button" class="btn btn-secondary"
                                                                data-dismiss="modal">NO
                                                        </button>
                                                            <a href="{{route('deleteToCart',['id'=>$product->id])}}" class="btn btn-danger">YES
                                                            </a>

                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        @endforeach
                    @endif

                    {{--                    two--}}
                    {{--                    <div class="pt-3 pb-3 pr-2 pl-0 col-lg-12 col-6 m-0 position-static">--}}
                    {{--                        <div--}}
                    {{--                            class="d-flex flex-lg-row flex-column align-items-lg-start col-12 p-lg-0 pt-lg-4 pb-lg-4 m-0 rounded shadow position-static">--}}
                    {{--                            <div class="container col-lg-1 pb-lg-0 pb-4 col-12 m-0 center order-lg-0 order-2">--}}
                    {{--                                <input type="radio" name="cart" class="radio_input appearance p-2 rounded-circle ">--}}
                    {{--                            </div>--}}
                    {{--                            <div--}}
                    {{--                                class="container p-0 pt-lg-0 pt-4 col-lg-4 col-12 m-0 position-static order-lg-1 order-0">--}}
                    {{--                                <div class="hot_sales_img center">--}}
                    {{--                                    <img class="container p-0" src="{{asset('storage/images/computer.png')}}" alt="computers">--}}
                    {{--                                </div>--}}
                    {{--                            </div>--}}
                    {{--                            <div class="d-lg-block d-flex flex-column-reverse--}}
                    {{--                                        container p-0 col-lg-4 col-12 m-0 position-static order-lg-2 order-1">--}}
                    {{--                                <div>--}}
                    {{--                                    <div>--}}
                    {{--                                        <p class="font29_size24 text-cart">HP proBook 4530s</p>--}}
                    {{--                                    </div>--}}
                    {{--                                    <div class="d-flex flex-column pt-lg-2 pb-3 font_16_20 text-cart">--}}
                    {{--                                        <p class="">15-inch display </p>--}}
                    {{--                                        <p> Color: black</p>--}}
                    {{--                                    </div>--}}
                    {{--                                </div>--}}
                    {{--                                <div>--}}
                    {{--                                    <div class="container p-0 pt-lg-0 pb-lg-0 pt-1 pb-1 ">--}}
                    {{--                                        <div class="align-items-end d-flex flex-row">--}}

                    {{--                                            @if($computers[1]->sale)--}}
                    {{--                                                <p class="price_sale text-danger">${{$computers[1]->sale}}</p>--}}
                    {{--                                                <strike class="old_price"><p>${{$computers[1]->price}}</p></strike>--}}
                    {{--                                            @else--}}
                    {{--                                                <p class="price_sale" style="color: #151414 !important;">--}}
                    {{--                                                    ${{$computers[1]->price}}</p>--}}
                    {{--                                            @endif--}}

                    {{--                                            <p class="price_sale ">${{$computers[1] ->sale}}</p>--}}
                    {{--                                            <strike class="old_price d-none"><p>${{$computers[0] ->price}}</p>--}}
                    {{--                                            </strike>--}}
                    {{--                                        </div>--}}
                    {{--                                    </div>--}}
                    {{--                                </div>--}}
                    {{--                            </div>--}}
                    {{--                            <div class="container pl-3 pr-2 p-0 col-lg-3 col-12 m-0 position-static order-lg-3">--}}
                    {{--                                <div class="d-lg-flex d-none flex-row justify-content-end">--}}
                    {{--                                    <div class="d-none font_16_20 pr-3 pl-3 text-white bg-danger center"> Sale</div>--}}
                    {{--                                    <div class="pr-3">--}}
                    {{--                                        <img class=""--}}
                    {{--                                             src="{{asset('storage/images/add-to-favorites.png')}}"--}}
                    {{--                                             alt="favorites">--}}
                    {{--                                    </div>--}}
                    {{--                                </div>--}}
                    {{--                            </div>--}}
                    {{--                        </div>--}}
                    {{--                    </div>--}}
{{--                    --}}
                </div>

                {{--                Summary     --}}

                <div class="container col-lg-4 col-12 m-0 p-0 position-static">
                    <div class="container-lg container-fluid  m-0 pt-lg-3 pb-lg-3 pr-lg-0 pl-lg-3">
                        <div class="container shadow shadow_none pr-4 pl-4">
                            <form method="get" action="{{route('shipping')}}">
                                <div class="pt-4 pb-3">
                                    <h2 class="font-weight-bold m-0 font29_size24">Summary</h2>

                                </div>
                                <div class="d-flex flex-column border-top font18_size22 summary_content">
                                    <div class="d-flex flex-row justify-content-between pt-3 pb-2">
                                        <div class="">
                                            <p> Total</p>
                                        </div>
                                        <div class="d-flex flex-row">
                                            <div>
                                                <p class="text-uppercase">us $</p>
                                            </div>
                                            <div>
                                                <p>
                                                    @if(count($cart_products)){{$totalPrice}}@endif
                                                </p>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="d-flex flex-row justify-content-between  pt-2 pb-2">
                                        <div class="d-flex flex-row align-items-start">
                                            <input type="radio" id="shipping" name="cart" value="20" role="button"
                                                   class="radio_input appearance p-2 rounded-circle m-0 mr-2">
                                            <label class="" for="shipping">Shipping</label>
                                        </div>
                                        <div class="d-flex flex-row">
                                            <div>
                                                <p class="text-uppercase">us $</p>
                                            </div>
                                            <div>
                                                <p>
                                                    20
                                                </p>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="d-flex flex-row justify-content-between pt-2 pb-2 pb-lg-5">
                                        <div class="d-flex flex-row align-items-start">
                                            <input type="radio" id="sale" name="cart" value="10" role="button" checked
                                                   class="radio_input appearance p-2 rounded-circle m-0 mr-2">
                                            <label class="pb-3" for="sale">Sale</label>
                                        </div>
                                        <div class="d-flex flex-row">
                                            <div>
                                                <p class="text-uppercase">us $</p>
                                            </div>
                                            <div>
                                                <p>
                                                    10
                                                </p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="d-flex flex-row justify-content-between border-top pt-3">
                                    <div>
                                        <h2 class="text-dark font29_size24">Subtotal</h2>
                                    </div>
                                    <div class="d-flex flex-row">
                                        <h2 class="text-dark font29_size24 text-uppercase">us $</h2>
                                        <h2 class="text-dark font29_size24" id="totalPrice">
                                            @if(count($cart_products)){{$totalPrice + 10}}@endif</h2>
                                    </div>
                                </div>
                                <div class="container-fluid p-0 d-flex justify-content-end pt-4 pb-lg-4 pb-5">
                                    <button type="submit" class="order_now bg-dark center sales_name
                                        text-white col-lg-7 col-7 p-0 pb-lg-0 pt-lg-0 pt-3 pb-3 text-uppercase">checkout
                                    </button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
                {{--                   similar Items               --}}

                <div class="d-lg-none center w-100 container p-0 pt-4 pb-5 position-relative">
                    <div class="all_computers container">
                        <div class="d-none d-lg-block"><h3
                                class="justify-content-sm-center d-flex d-lg-block popular_text  pt-4 pb-4">Similar
                                Items</h3></div>
                        <div class="d-block d-lg-none"><h3
                                class="justify-content-sm-center d-flex d-lg-block popular_text  pt-4 pb-4">Recommended
                                for you</h3></div>
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
                                            <div class="yes_sale text-white position-absolute bg-danger center"> Sale
                                            </div>
                                        @endif
                                        <div class="heart" data-id="{{$computer->id}}" role="button">
                                            <div
                                                class="black-heart {{!empty($computer->users->first()->pivot->favorite) ? '' : 'd-none'}}"></div>
                                            <img class="img_heart"
                                                 src="{{asset('storage/images/add-to-favorites.png')}}"
                                                 alt="favorites">
                                        </div>
                                    </div>
                                    <div class="hot_sales_img center mt-4">
                                        <img class="container" src="{{asset('storage/images/'.$computer->img)}}"
                                             alt="computers">
                                    </div>
                                    <div class="container">
                                        <div class="align-items-end d-flex flex-row">
                                            @if($computer->sale)
                                                <p class="price_sale text-danger">${{$computer->sale}}</p>
                                                <strike class="old_price"><p>${{$computer->price}}</p></strike>
                                            @else
                                                <p class="price_sale" style="color: #151414 !important;">
                                                    ${{$computer->price}}</p>
                                            @endif
                                        </div>
                                        <div>
                                            <p class="sales_name">{{$computer->name}} </p>
                                        </div>
                                    </div>
                                    <div class="d-flex justify-content-around container">
                                        <button type="button"
                                                class="order_now bg-dark center sales_name text-white col-md-9  col-10 p-0">
                                            <a href="{{route('ordernow',$computer->id)}}"
                                               class="text-decoration-none text-white">ORDER NOW</a>
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
{{--                                        <a href="#">--}}
{{--                                            <img src="{{asset('storage/images/Cart-with-plus.png')}}"--}}
{{--                                                         alt="paiment">--}}
{{--                                        </a>--}}

                                    </div>

                                </div>
                            </div>

                        @endforeach
                    </div>
                </div>
                {{--  --}}
            </div>
        </div>
    </div>
@endsection
