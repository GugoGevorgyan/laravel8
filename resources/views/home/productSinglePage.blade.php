@extends('home.app')
@extends('home.footer')
@section('content')
    <div class="home_content center">
        <div class="single_container">
            <div class="flex_row  single_container_1 ">
                <div class="flex_row img_container">
                    <div class="center img_zoom">
                        <div><img src="{{asset('storage/accesuar_2.png')}}" alt=""></div>
                        <div><img src="{{asset('storage/accesuar_3.png')}}" alt=""></div>
                        <div><img src="{{asset('storage/accesuar_4.png')}}" alt=""></div>
                        <div><img src="{{asset('storage/accesuar_5.png')}}" alt=""></div>
                    </div>
                    <div class="single_img center">
                        <img src="{{asset('storage/accesuar_1.png')}}" alt="">
                    </div>
                </div>
                <div class="single_more just_between ">
                    <div class="flex_row justify-content-between">
                        <div class="flex_column">
                            <p class="font29_size24 uppercase">Beats by dr. dre</p>
                            <p class="single_currency"> US $1500</p>
                        </div>
                        <div>
                            <img src="{{asset('storage/add-to-favorites.png')}}" alt="">
                        </div>
                    </div>
                    <div class="line"></div>
                    <div>
                        <p class="single_text">
                            Amet minim mollit non deserunt ullamco est sit aliqua dolor do amet sint.
                            Velit officia consequat duis enim velit mollit.
                            Exercitation veniam consequat sunt nostrud amet.
                        </p>
                    </div>
                    {{--                    color --}}
                    <div class="color_container just_around">
                        <p class="font18_size22">Color</p>
                        <div class="color flex_row ">
                            @foreach($colors as $color)
                                <div style="background:{{$color}}"></div>
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
                            <button type="button" class="order_now center sales_name text-white">ORDER NOW</button>
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
            <div></div>

        </div>

    </div>
@endsection
