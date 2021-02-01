@push('mediaStyle')
    <style>
        @media all and (min-width: 994px) and (max-width: 1900px) {
            .popular_categories_img {
                width: 130px;
                height: 130px;
            }

            .hot_sales_imgs_container {
                width: 190px;
                height: 330px;
            }

            .hot_sales_img {
                width: calc(100% - 10px);
            }

            .hot_sales_img > img {
                width: inherit;
            }
        }


        @media all and (min-width: 413px) and (max-width: 993px) {
            .vector_left_container, .vector_right_container, .search_container, .container_select {
                display: none !important;
            }

            .pt-2 {
                align-items: center !important;
            }

            .see_more {
                position: absolute;
                bottom: 240px;
                right: 0
            }

            .evenly > div:nth-child(1n+3) {
                display: none;
            }

            .img-fluid {
                width: 80px;
            }

            .menu {
                width: auto;
            }

            .navbar-expand-md, .navbar-nav {
                flex-direction: row !important;
            }

            .hot_sales_container {
                width: 90%;
            }

            .hot_sales_imgs_container {
                width: 182px;
                height: 250px;
            }

            .hot_sales_img {
                width: calc(100% - 10px);
            }

            .hot_sales_img > img {
                width: inherit;
            }

            .popular_text {
                display: flex;
                justify-content: center;
            }

            .media_menu_icons {
                display: flex !important;
                width: 150px;
                justify-content: space-between;
            }

            .Rectangle1 {
                background-image: url("{{asset('storage/Rectangle3.png')}}");
            }

            .Rectangle2 {
                background-image: url("{{asset('storage/Rectangle4.png')}}");
            }

            .Rectangle {
                padding-right: 40px;
            }

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
            }

            .down {
                font-size: 36px;
                line-height: 44px;
            }

            .font_size {
                font-size: 26px;
            }

            .h-500 {
                height: 300px;
            }

            .popular_categories_container {
                width: 90%;
            }

            .h-15 {
                height: 15%;
            }
            .subscribe_text {
                font-size: 18px;
                line-height: 22px;
            }

            .subscribe {
                Width: 275px;
                Height: 37px;
            }
            .subscribe_form{
                height: 200px;
            }
            .subscribe_form_container{
                height: 240px;
            }

            .input_subscribe {
                width: 275px;
                height: 35px;
            }
            .subscribe_container{
                min-height: 400px;
            }
        }

        @media all and (min-width: 767px) and (max-width: 993px) {
            .description_param {
                font-size: 24px;
                line-height: 38px;
            }

            .description_name {
                font-size: 28px;
                line-height: 38px;
            }

            .explore {
                width: 200px;
                height: 50px;
                font-size: 24px;
                line-height: 29px;
            }

            .Rectangle {
                padding-right: 110px;
            }

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

        }
        @media all and (min-width: 412px) and (max-width: 768px) {

            .follow_us,.about_us__container{
                display: block;
            }
            .footer__list__container{
                flex-direction: column-reverse;
                height: 90%;
            }
            .about_us{
                margin-bottom: 20px;
            }
            .footer__list{
                height: 900px;
            }
            .follow_us{
                margin-top: 55px;
            }
            .all_computers > div > div > a {
                font-family: Montserrat;
                font-size: 14px;
                line-height: 18px;
            }
            .brand:nth-child(1n+4) {
                display: none;
            }
        }
    </style>
@endpush
