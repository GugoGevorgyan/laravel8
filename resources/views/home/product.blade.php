@extends('layouts.app')
@include('home.macbook')
@include('home.subscribe')

@section('content')
    {{--    <img src="{{asset('storage/currency.png')}}" alt="">--}}
    <div class="home_content center">
        @stack('macbook')
        <div class="center w-100">
            <div class="hot_sales_container">
                <div class="all_computers">
                    <div><p class="popular_text  pt-4">Computers</p></div>
                    <div class="just_between flex-row pb-4 pt-2">
                        <div class="all_computers__sort flex_row justify-content-between">
                            <a href="#">Notebook</a>
                            <a href="#">Netbook</a>
                            <a href="#">All in one</a>
                            <a href="#">Stacionary</a>
                        </div>
                        <div class="see_more">
                            <a href="#">see more</a>
                        </div>
                    </div>
                </div>
                <div>
                    <div class="line"></div>
                    <div class="vector_left_container center"><a href="#">
                            <img class="vector_left" src="{{asset('storage/Vector.png')}}" alt="">
                        </a></div>
                    <div class="vector_right_container center"><a href="#">
                            <img class="vector_right" src="{{asset('storage/Vector.png')}}" alt="">
                        </a></div>
                </div>

                <div class="evenly1 flex_row">

                    @foreach($computers as $computer)
                        <div class="hot_sales_imgs_container just_around">
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
                            <div>
                                <div class="sale flex_row">
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
                                <button type="button" class="order_now center sales_name text-white">ORDER NOW</button>
                                <a href="{{url("home/{$computer->id}/edit")}}"><img
                                        src="{{asset('storage/Cart-with-plus.png')}}" alt="paiment"></a>
                            </div>

                        </div>
                    @endforeach
                </div>

                <div class="row">
                    <div class="col">
                        {{ $computers->onEachSide(1)->links() }}
                    </div>
                </div>

            </div>
            @stack('subscribe')
        </div>
    </div>
@endsection
