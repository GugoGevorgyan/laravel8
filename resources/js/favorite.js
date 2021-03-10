jQuery(document).ready(function(){
    jQuery('.heart').click(function(e){
        e.preventDefault();
        // console.log($(this));
        $.ajaxSetup({
            headers: {
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            }
        });
        var id = $(this).data('id');
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

    jQuery('#cart').click(function(e){
        let price = 0;
        // let checkbox = document.getElementsByName('cart[]');
        let checkboxes = $('input[name="cart"]:checked');
        $(checkboxes).each(function() {
            price += parseInt($(this).val());
        });
        jQuery('#totalPrice').text(price);
        console.log(price);
    });
});
