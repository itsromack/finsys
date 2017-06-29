(function($) {
    $.fn.scrollToTop = function(options) {

        return this.each(function() {

            var $this = $(this);

            $(window).scroll(function() {
                if ($(this).scrollTop() > 600) {
                	$this.attr( "style", "display:inline-block;" );
                    $this.fadeIn(300);
                } else {
                    $this.fadeOut(300);
                }
            });
        });
    };
    $.fn.popUpmsg = function(options) {

        return this.each(function() {

            var $this = $(this);

            $(window).scroll(function() {
                // if ($(this).scrollTop() > 400 && $(this).scrollTop() < 1100 ) {
                if ($(this).scrollTop() > 400 ) {

                    if ($("#popUpBox").hasClass("appeared")) {
                        $('.custom-popup').delay(2000).fadeIn(500);
                        $("#popUpBox").removeClass("appeared");
                        $('.dropdown-menu').addClass('open');
                    } else {
                    }
                } else {
                    $('.custom-popup').fadeOut();
                }
            });
        });
    };
})(jQuery);

$(function() {
    $("#popUpBox").popUpmsg();
    $("#header_getAquote").scrollToTop();
});

// Custom
$("#popUpmessage").on("click",function(){
    if ($('.custom-popup').hasClass("opened")) {
        $('.custom-popup').fadeOut();
        $('.custom-popup').removeClass("opened");
    }
    else{
        $('.custom-popup').fadeIn();
        $('.custom-popup').addClass("opened");
    }
});

$(".close").on("click",function(){
    $('.custom-popup').fadeOut();   
    $('.dropdown-menu').removeClass('open');
});