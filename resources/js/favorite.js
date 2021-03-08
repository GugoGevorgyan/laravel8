jQuery(document).ready(function(){
    jQuery('.heart').click(function(e){
        e.preventDefault();
        $.ajaxSetup({
            headers: {
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            }
        });
        jQuery.ajax({
            url: "/home",
            method: 'post',
            data: {
                name: 'heart',
                value: $(this).data('id'),
            },
            success: function(result){
               if(result){
                   console.log('ok')
               }else{
                   console.log('cka')
               }
            }});
    });
});
