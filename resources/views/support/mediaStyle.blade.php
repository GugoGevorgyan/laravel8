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

            .hot_sales_imgs_container {
                height: 250px;
            }

            .Rectangle1 {
                background-image: url("{{asset('storage/Rectangle3.png')}}");
            }

            .Rectangle2 {
                background-image: url("{{asset('storage/Rectangle4.png')}}");
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
                margin-top: 20px;
            }

            .down {
                font-size: 36px;
                line-height: 44px;
            }

            .h-500 {
                height: 300px;
            }
                .subscribe_text {
                font-size: 18px;
                line-height: 22px;
            }

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

            .disp2-none:nth-child(1n+3){
                display: none;
            }

            .single_currency {
                font-size: 26px;
                line-height: 31px;
            }

            .single_text {
                font-size: 16px;
                line-height: 18px;
            }

            .all_computers > div > div > a {
                font-size: 14px;
                line-height: 17px;
            }

        }
    </style>
@endpush
