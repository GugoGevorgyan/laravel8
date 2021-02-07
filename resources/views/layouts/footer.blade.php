@push('footer')
    <div class="flex_row center footer__list text-light h-auto">
        <div class="flex-lg-row d-flex flex-wrap col-lg-6 col-10  flex-column-reverse mt-5 mb-5 p-0">
            <div class="center  col-lg-9 col-12 justify-content-between align-items-baseline p-0 m-lg-0 mt-2 mb-2">
                <h5 class="footer_contact font-weight-bold text-white mb-2">Contact</h5>
                <ul class="list-unstyled contact  ">
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
                <div class="flex_column m-lg-0 mb-5">
                    <p class="follow_us footer_contact d-lg-none font-weight-bold text-white mt-5">Follow us on</p>
                    <div class="flex_row">
                        <div class="social_container bg-light center"><img src="{{asset('storage/fb.png')}}" alt=""></div>
                        <div class="social_container bg-light center"><img src="{{asset('storage/insta.png')}}" alt=""></div>
                    </div>

                </div>

            </div>
            <div class="m-lg-0 mt-5 mb-5" >
                <h5 class="footer_contact font-weight-bold text-white mb-2">Products</h5>
                <ul class="list-unstyled prod">
                    <li><a href="">Laptops</a></li>
                    <li><a href="">Headphones</a></li>
                    <li><a href="">Speakers</a></li>
                    <li><a href="">Airpods</a></li>
                    <li><a href="">Keyboards</a></li>
                </ul>
            </div>
            <div class="d-lg-none m-lg-0 mb-2 mt-5">
                <h4 class="about_us font18_size22 font-weight-bold font-weight-bold">About us</h4>
                <p class="about_text col-lg-12 col-md-6 p-0">Amet minim mollit non deserunt ullamco est sit aliqua dolor do amet sint.
                    Velit officia consequat duis enim velit mollit.
                    Exercitation veniam.</p>
            </div>
        </div>
    </div>

    @endpush
