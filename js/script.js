jQuery( document ).ready( function($) {
	$( ".herotext" ).fadeIn(1000);
});

jQuery(document).ready(function() {
    $(window).scroll( function(){
        $( '.hideme' ).each( function(i){
            var bottom_of_object = $(this).position().top + $(this).outerHeight();
            var bottom_of_window = $(window).scrollTop() + $(window).height();
            if( bottom_of_window > bottom_of_object ){
                $(this).animate({'opacity':'1'},1000);       
            }


        }); 
    });   
});


jQuery(document).ready(function(){
 
    var applyTopPosition = jQuery('.apply').offset().top;
    
    
    jQuery('.scroll').click(function(){
        
        jQuery('html, body').animate({scrollTop:applyTopPosition}, 'slow');
        return false;
    });
});

jQuery(".nav").addClass("js");

jQuery(".nav").addClass("js").before('<div class="menu">MENU☰</div>');

jQuery(".menu").click(function(){
    $(".nav").toggle();
});

jQuery(window).resize(function(){
    if(window.innerWidth > 768) {
        $(".nav").removeAttr("style");
    }
});