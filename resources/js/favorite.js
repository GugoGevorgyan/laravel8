jQuery(document).ready(function(){
    jQuery('.heart').click(function(e){
        e.preventDefault();
        // console.log($(this));
        $.ajaxSetup({
            headers: {
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            }
        });
        let id = $(this).data('id');
        jQuery.ajax({
            url: "/home",
            method: 'post',
            data: {
                name: 'heart',
                value: id,
            },
            success: function(result){
                $('.heart[data-id="'+id+'"]').find('.black-heart').toggleClass('d-none');
            }});
    });

    jQuery('#cart').click(totalPrice);

    function totalPrice(){
        console.log("ddd");
        let price = 0;
        // let checkbox = document.getElementsByName('cart[]');
        let checkboxes = $('input[name="cart"]:checked');
        $(checkboxes).each(function() {
            price += parseInt($(this).val());
        });
        jQuery('#totalPrice').text(price);
        console.log(price);
    }

    jQuery('.addToCart').click(function(el){
        el.preventDefault();
        $.ajaxSetup({
            headers: {
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            }
        });
        let id = $(this).data('id');
        jQuery.ajax({
            url: "/addToCart",
            method: 'post',
            data: {
                name: 'cart',
                id: id,
            },
            success: function(result){
                if (result) {
                    totalCarText(el);
                }
            }});
    });

    function totalCarText(el){
        console.log(el.target);
        // let card_color = jQuery('.cart-color');
        el.target.classList.remove('fill-black');
        el.target.classList.add('fill-red');
        toastr.success('product added to cart successfully');
        let div = jQuery('#total_qty');
        let total_qty = div.text();
        if (total_qty[1]){
            div.text('('+(+total_qty[1] + 1)+')');
        }else {
            div.text('('+(1)+')');
        }
    }
});
