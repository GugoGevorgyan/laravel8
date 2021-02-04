@push('footer')
    <div class="flex_row center footer__list">
        <div class="flex_row col-6 ">

            <div class="center col-9 justify-content-between align-items-baseline ">
                <h5 class="footer_contact mb-2">Contact</h5>
                <ul class="list-unstyled contact">
                    <li>
                        <div class="center">
                            <img src="{{asset('storage/VectorGps.png')}}" alt="">
                        </div>

                        Rich Plaza, Yerevan, Armenia
                    </li>

                    <li>
                        <div class="center">
                            <img src="{{asset('storage/mail.png')}}" alt="">
                        </div>

                        mg@gmail.com
                    </li>
                    <li>
                        <div class="center">
                            <img src="{{asset('storage/phone.png')}}" alt="">
                        </div>

                        +374 95 84 84 54
                    </li>
                </ul>
                <div class="flex_column">
                    <p class="follow_us footer_contact">Follow us on</p>
                    <div class="flex_row">
                        <div class="social_container center"><img src="{{asset('storage/fb.png')}}" alt=""></div>
                        <div class="social_container center"><img src="{{asset('storage/insta.png')}}" alt=""></div>
                    </div>

                </div>

            </div>
            <div>
                <h5 class="footer_contact mb-2">Products</h5>
                <ul class="list-unstyled prod">
                    <li><a href="">Laptops</a></li>
                    <li><a href="">Headphones</a></li>
                    <li><a href="">Speakers</a></li>
                    <li><a href="">Airpods</a></li>
                    <li><a href="">Keyboards</a></li>
                </ul>
            </div>
            <div class="about_us__container">
                <h4 class="about_us font18_size22 font-weight-bold">About us</h4>
                <p class="about_text">Amet minim mollit non deserunt ullamco est sit aliqua dolor do amet sint.
                    Velit officia consequat duis enim velit mollit.
                    Exercitation veniam.</p>
            </div>
        </div>
    </div>

    @endpush
