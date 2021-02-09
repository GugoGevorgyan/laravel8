@extends('layouts.app')
@include('home.subscribe')
@section('content')
    <div class=" center">
        <div class="container-md container-fluid pt-4">
            <div class="">

                <div class="">
                    <div class="d-flex flex-row align-items-start col-7 p-0 m-0">
                        <div class="container col-1 m-0">
                            <input type="radio" name="">
                        </div>
                        <div class="container p-0 col-4 m-0">
                            <div class="hot_sales_img center">
                                <img class="" src="{{asset('storage/computer.png')}}" alt="computers">
                            </div>
                        </div>
                        <div class="container p-0 col-4 m-0">
                            <div >
                                <p class="sales_name">HP proBook 4530s</p>

                            </div>
                            <div class="d-flex flex-column">
                                <p class="">15-inch display </p>
                                <p> Color: black</p>
                            </div>
                            <div>
                                {{--                                <p class="price_sale text-danger">${{$computers[1] ->price}}</p>--}}
                                <div class="container">
                                    <div class="align-items-end d-flex flex-row">
                                        {{--                                        @if($computer -> old_price)--}}
                                        <p class="price_sale text-danger">${{$computers[1] ->price}}</p>
                                        <strike class="old_price"><p>${{$computers[0] ->old_price}}</p></strike>
                                        {{--                                        @else--}}
                                        {{--                                            <p class="price_sale" style="color: #151414 !important;">--}}
                                        {{--                                                ${{$computer ->price}}</p>--}}
                                        {{--                                        @endif--}}
                                    </div>

                                </div>
                            </div>
                        </div>
                        <div class="container p-0 col-3 m-0">
                                <div class="d-flex flex-row justify-content-between">
                                    {{--                                                @if($computer -> old_price)--}}
                                    <div class="yes_sale text-white bg-danger position-relative center"> Sale</div>
                                    {{--                                                @endif--}}
                                    <div class="heart position-relative">
                                        <img class="img_heart"
                                             src="{{asset('storage/favorites_black.png')}}"
                                             alt="favorites">
                                    </div>
                                </div>
                        </div>
                    </div>
@endsection
