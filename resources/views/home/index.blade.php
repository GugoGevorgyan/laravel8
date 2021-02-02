@extends('home.app')
@extends('home.footer')
@section('content')
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
        <div class="popular_categories_container center">
            <p class="popular_text">Popular Categories</p>

            <div class="flex_row justify-content-center">
                @for ($i = 0; $i < count($imgs) ; $i++)
                    <figure>
                        <div class="popular_categories_img">
                            <img src="{{asset('storage/'.$imgs[$i])}}" alt="photo">
                        </div>

                        <figcaption class="d-flex justify-content-center">{{$figcaption[$i]}}</figcaption>
                    </figure>
                @endfor

            </div>
        </div>

        <div class="w-100 h-500 Rectangle Rectangle2 d-flex justify-content-end">
            <div class="description text-white d-flex">
                <div class="text-white description_name">
                    <p class="font-weight-lighter">TURN THE</p>
                    <p class="font-weight-bold">WORLD</p>
                </div>
                <div class="description_param">
                    <div class='d-flex align-items-baseline justify-content-sm-between h-160'>
                        <p class="font-weight-lighter mr-2">UPSIDE</p>
                        <p class="down">DOWN</p>
                    </div>
                    <div>
                        <p class="font-weight-lighter mr-2">WITH BRAND NEW</p>
                        <p class="font-weight-normal font_size mb-3">HEADPHONES</p>
                    </div>
                </div>
                <button type="button" class="bg-white  explore">
                    EXPLORE
                </button>
                {{--            <div class="btn bg-white  explore"> EXPLORE</div>--}}
            </div>
        </div>
        <div class="center w-100">
            <div class="hot_sales_container">
                <p class="popular_text  p-4">Hot Sales</p>
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
                    @foreach($hot_sales as $sales)
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


                            <div class="hot_sales_img center">
                                <img src="{{asset('storage/'.$sales->img)}}" alt="computers">
                            </div>
                            <div class="sale_container">
                                <div class="sale flex_row">
                                    @if($sales -> old_price)
                                        <p class="price_sale">${{$sales ->price}}</p>
                                        <strike class="old_price"><p>${{$sales ->old_price}}</p></strike>
                                    @else
                                        <p class="price_sale" style="color: #151414 !important;">${{$sales ->price}}</p>
                                    @endif

                                </div>
                                <div>
                                    <p class="sales_name">{{$sales ->name}} </p>
                                </div>
                            </div>
                            <div class="d-flex justify-content-around">
                                <button type="button" class="order_now center sales_name text-white">ORDER NOW</button>
                                <a href="#"><img src="{{asset('storage/Cart-with-plus.png')}}" alt="paiment"></a>
                            </div>

                        </div>
                    @endforeach
                </div>
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
                                    @if($sales -> old_price)
                                        <p class="price_sale">${{$sales ->price}}</p>
                                        <strike class="old_price"><p>${{$sales ->old_price}}</p></strike>
                                    @else
                                        <p class="price_sale" style="color: #151414 !important;">${{$sales ->price}}</p>
                                    @endif
                                </div>
                                <div>
                                    <p class="sales_name">{{$computer ->name}} </p>
                                </div>
                            </div>
                            <div class="d-flex justify-content-around">
                                <button type="button" class="order_now center sales_name text-white">ORDER NOW</button>
                                <a href="#"><img src="{{asset('storage/Cart-with-plus.png')}}" alt="paiment"></a>

                            </div>

                        </div>
                    @endforeach
                </div>

                <P class="popular_text  pt-5 pb-4">Brands we deliver</P>
                <div class="flex_row align-items-baseline justify-content-sm-between pb-sm-5">
                    @foreach($brands as $brand)
                    <div class="brand"><img src="{{asset('storage/'.$brand)}}" alt="{{$brand}}"></div>
                    @endforeach
                </div>
            </div>
            @yield('footer')
        </div>
    </div>
@endsection
