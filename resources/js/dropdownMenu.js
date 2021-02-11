$(document).ready(function(){
    $('.dropdown-submenu a.media_subMenu').on("click", function(e){
        $(this).next('ul').toggle();
        e.stopPropagation();
        e.preventDefault();
    });
});
