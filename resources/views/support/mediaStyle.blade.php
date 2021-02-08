@push('mediaStyle')
    <style>
        @media all and (min-width: 994px) and (max-width: 1200px) {
            .nav-link {
                font-size: 14px;
            }

            .nav-item > img {
                height: 9px !important;
                width: 8px;
            }
        }

        /*@media all and (min-width: 994px) and (max-width: 1900px) {*/
        {{--            .popular_categories_img {--}}
        {{--                /*width: 130px;*/--}}
        {{--                /*height: 130px;*/--}}
        {{--            }--}}
 /*            .order_now {*/
        /*                width: 130px;*/
        /*                height: 50px;*/
        /*            }*/

        /*.hot_sales_imgs_container {*/
        /*    width: 190px;*/
        /*    height: 330px;*/
        /*}*/

        {{--            .hot_sales_img {--}}
        {{--                width: calc(100% - 10px);--}}
        {{--            }--}}

        {{--            .hot_sales_img > img {--}}
        {{--                width: inherit;--}}
        {{--            }--}}
        {{--            .single_container{--}}
        {{--                width: 87%;--}}
        {{--            }--}}
        {{--        }--}}


@media all and (min-width: 413px) and (max-width: 993px) {
            span[aria-current="page"] > span, span[aria-disabled="true"] > span, .rounded-md > a {
                width: 30px;
                height: 30px;
                font-size: 15px;
                line-height: 19px;
                margin: 2px;
            }

            .font29_size24 {
                font-size: 18px;
                line-height: 22px;
            }
            .description_half > ul >li:nth-child(2n+2){
                background: rgba(234, 238, 244, 0.5);
            }
            .description_half{
                border-top: 1.25rem solid  #EAEEF4;
                border-bottom: 1.25rem solid  #EAEEF4;
            }
            .single_description_text{
                display: -webkit-box;
                -webkit-line-clamp: 3;
                -webkit-box-orient: vertical;
                overflow-y: hidden;
            }
            .description_half, .single_description_text{
                font-size: 12px;
                line-height: 18px;
            }


            {{--            .vector_left_container, .vector_right_container, .search_container, .container_select {--}}
{{--                display: none !important;--}}
{{--            }--}}
{{--            .img_zoom {--}}
{{--                width: 100%;--}}
{{--                flex-direction: row;--}}
{{--            }--}}

{{--            .single_img  {--}}
{{--                width: 100%;--}}
{{--            }--}}

{{--            .single_container_1{--}}
{{--                flex-direction: column ;--}}
{{--                height: auto;--}}
{{--            }--}}
{{--            .img_container{--}}
{{--                height: auto;--}}
{{--                width: 100%;--}}
{{--                flex-direction: column-reverse;--}}
{{--            }--}}
{{--            .single_img{--}}
{{--                width: 100%;--}}
{{--            }--}}
{{--            .img_zoom > div {--}}
{{--                width: 24%;--}}
{{--            }--}}

{{--            .pt-2 {--}}
{{--                align-items: center !important;--}}
{{--            }--}}

            .see_more {
                position: absolute;
                bottom: 200px;
                right: 0
            }

            .evenly > div:nth-child(1n+3) {
                display: none;
            }

            .order_now {
                font-size: 14px;
                line-height: 17px;
                height: auto;
            }

        {{--            .img-fluid {--}}
        {{--                width: 80px;--}}
        {{--            }--}}

        {{--            .menu {--}}
        {{--                width: auto;--}}
        {{--            }--}}

        {{--            .navbar-expand-md, .navbar-nav {--}}
        {{--                flex-direction: row !important;--}}
        {{--            }--}}

/*.hot_sales_container {*/
            /*    width: 90%;*/
            /*}*/
            .hot_sales_imgs_container {
                /*width: 182px;*/
                height: 250px;
            }

            /*.hot_sales_img {*/
            /*    width: calc(100% - 10px);*/
            /*}*/
            {{--            .hot_sales_img > img {--}}
{{--                width: inherit;--}}
{{--            }--}}

{{--            .popular_text {--}}
{{--                display: flex;--}}
{{--                justify-content: center;--}}
{{--            }--}}

{{--            .media_menu_icons {--}}
{{--                display: flex !important;--}}
{{--                width: 150px;--}}
{{--                justify-content: space-between;--}}
{{--            }--}}

            .Rectangle1 {
                background-image: url("{{asset('storage/Rectangle3.png')}}");
            }

            .Rectangle2 {
                background-image: url("{{asset('storage/Rectangle4.png')}}");
            }

            {{--            .Rectangle {--}}
{{--                padding-right: 40px;--}}
{{--            }--}}

            .description_param {
                font-size: 16px;
                line-height: 34px;
            }

            .description_name {
                font-size: 24px;
                line-height: 29px;
            }

            .explore {
                width: 120px;
                height: 30px;
                font-size: 14px;
                line-height: 28px;
                margin-top: 20px;
            }

            .down {
                font-size: 36px;
                line-height: 44px;
            }

            .h-500 {
                height: 300px;
            }

            {{--            .popular_categories_container {--}}
{{--                width: 90%;--}}
{{--            }--}}

{{--            .h-15 {--}}
{{--                height: 15%;--}}
{{--            }--}}
                .subscribe_text {
                font-size: 18px;
                line-height: 22px;
            }

        {{--            .subscribe {--}}
        {{--                Width: 275px;--}}
        {{--                Height: 37px;--}}
        {{--            }--}}
        {{--            .subscribe_form{--}}
        {{--                height: 200px;--}}
        {{--            }--}}
        {{--            .subscribe_form_container{--}}
        {{--                height: 240px;--}}
        {{--            }--}}

        {{--            .input_subscribe {--}}
        {{--                width: 275px;--}}
        {{--                height: 35px;--}}
        {{--            }--}}
        {{--            .subscribe_container{--}}
        {{--                min-height: 400px;--}}
        {{--            }--}}

        }

        @media all and (min-width: 767px) and (max-width: 993px) {
            .description_param {
                font-size: 24px;
                line-height: 38px;
            }

            .h4 {
                font-size: 1.125rem;
            }

            .img_single {
                transform: scale(.8);
            }

            {{--            .single_img >img {--}}
{{--                transform: scale(0.6);--}}
{{--            }--}}
{{--            .single_img  {--}}
{{--                height: 350px;--}}
{{--            }--}}

            .single_currency, .description_name {
                font-size: 28px;
                line-height: 38px;
            }

            .explore {
                width: 200px;
                height: 50px;
                font-size: 24px;
                line-height: 29px;
            }

            {{--            .Rectangle {--}}
{{--                padding-right: 110px;--}}
{{--            }--}}

            .down {
                font-size: 46px;
                line-height: 60px;
            }

            .font_size {
                font-size: 35px;
            }

            .h-500 {
                height: 400px;
            }

            .single_text {
                font-size: 16px;
                line-height: 140%;
            }

        }

        @media all and (min-width: 412px) and (max-width: 768px) {

            .h4 {
                font-size: 0.9rem;
            }

            .img_single {
                transform: scale(.6);
            }


            /*.font29_size24{*/
            /*    font-size: 12px;*/
            /*    line-height: 22px;*/
            /*}*/
            .single_currency {
                font-size: 26px;
                line-height: 31px;
            }

            .single_text {
                font-size: 16px;
                line-height: 18px;
            }

            {{--            .follow_us,.about_us__container{--}}
{{--                display: block;--}}
{{--            }--}}
{{--            .single_img >img {--}}
{{--                transform: scale(0.6);--}}
{{--            }--}}
{{--            .single_img  {--}}
{{--                height: 270px;--}}
{{--            }--}}
    {{--            .footer__list__container{--}}
{{--                flex-direction: column-reverse;--}}
{{--                height: 90%;--}}
{{--            }--}}
{{--            .about_us{--}}
{{--                margin-bottom: 20px;--}}
{{--            }--}}
{{--            .footer__list{--}}
{{--                height: 900px;--}}
{{--            }--}}
{{--            .follow_us{--}}
{{--                margin-top: 55px;--}}
{{--            }--}}
            .all_computers > div > div > a {
                font-size: 14px;
                line-height: 17px;
            }

        }
    </style>
@endpush
