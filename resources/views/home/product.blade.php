@extends('home.app')
@extends('home.footer')
@section('content')
    <img src="{{asset('storage/currency.png')}}" alt="">
    <div class="home_content center">
        <div class="w-100 h-500 Rectangle Rectangle1 d-flex justify-content-end">
            <div class="description text-white d-flex">
                <div class="text-white description_name">
                    <p class="font-weight-lighter">MACBOOK</p>
                    <p class="font-weight-bold">PRO</p>
                </div>
                <div class="description_param">
                    <p>16 INCH</p>
                    <p>268GB MEMORY</p>
                </div>
                <button type="button" class="bg-white  explore">
                    EXPLORE
                </button>
            </div>
        </div>

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
                                    <p class="price_sale">${{$computer ->price}}</p>
                                    @if($computer -> old_price)
                                        <strike class="old_price font18_size22"><p>${{$computer ->old_price}}</p>
                                        </strike>
                                    @endif
                                </div>
                                <div>
                                    <p class="sales_name">{{$computer ->name}} </p>
                                </div>
                            </div>
                            <div class="d-flex justify-content-around">
                                <button type="button" class="order_now center sales_name text-white">ORDER NOW</button>
                                <img src="{{asset('storage/Cart-with-plus.png')}}" alt="paiment">
                            </div>

                        </div>
                    @endforeach
                </div>

                <div class="row">
                    <div class="col">
                        {{ $computers->onEachSide(1)->links() }}
                    </div>
                </div>
{{--                <P class="popular_text  pt-5 pb-4">Brands we deliver</P>--}}
{{--                <div class="flex_row align-items-baseline justify-content-sm-between pb-sm-5">--}}
{{--                    @foreach($brands as $brand)--}}
{{--                        <div class="brand"><img src="{{asset('storage/'.$brand)}}" alt="{{$brand}}"></div>--}}
{{--                    @endforeach--}}
{{--                </div>--}}
            </div>
            @yield('footer')
        </div>
    </div>
@endsection
