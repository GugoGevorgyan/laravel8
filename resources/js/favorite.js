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
     /*          if(result){
                   $('.heart[data-id="'+id+'"]').addClass('zmruxt');
                   // console.log(e.target.classList.add('d-none'),'ok')
               }else{
                   console.log($(this));
                   // console.log(e.target);
                   // console.log(e.target(),'cka')
               }*/
            }});
    });
});
