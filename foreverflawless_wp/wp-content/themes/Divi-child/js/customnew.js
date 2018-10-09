window.onload = MenuClone;
window.onresize = MenuClone;
function MenuClone(){
    if( jQuery(window).width() < 767 && jQuery('.__menuMobile').length == 0 ){
        jQuery('.et-social-icons').clone(true).appendTo('#mobile_menu').addClass('__menuMobile');
        _
    }
}

window.onload = add_div;
function add_div(){
	$('#press').find('article.et_pb_post').find('img').wrap('<div class="__imgWrapper"></div>');
}