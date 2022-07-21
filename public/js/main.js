(function($) {
    $(window).on('scroll',function(event) {
        var scroll = $(window).scrollTop();
        if (scroll < 245) {
            $("header").removeClass("sticky");
        } else {
            $("header").addClass("sticky");
        }
    });

    var size;

    function windowSize() {
        size = $(document).width();
        if (size >= 991) {
            $('body').removeClass('open-menu');
            $('.hamburger-menu .bar').removeClass('animate');
        }

        else {
            $('#cd-primary-nav > li').hover(function() {
                $whidt_item = $(this).width();
                $whidt_item = $whidt_item-8;

                $prevEl = $(this).prev('li');
                $preWidth = $(this).prev('li').width();
                var pos = $(this).position();
                pos = pos.left+4;
            });

            $('.hamburger-menu').on('click', function() {
                $('.hamburger-menu .bar').toggleClass('animate');
                if($('body').hasClass('open-menu')){
                    $('body').removeClass('open-menu');
                }else{
                    $('body').toggleClass('open-menu');
                }
            });

            $('header .menu-container .menu .menu-item-has-children ul').each(function(index) {
                $(this).append('<li class="back"><a href="#">Back</a></li>');
            });

            $('header .menu-container .menu .menu-item-has-children > a').on('click', function(e) {
                e.preventDefault();
                if(size <= 1200){
                    $(this).next('ul').addClass('open-sub');
                }
            });

            $('header .menu-container .menu .menu-item-has-children ul .back').on('click', function(e) {
                e.preventDefault();
                $(this).parent('ul').removeClass('open-sub');
            });
        }
    };

    $(document).keyup(function(e) {
        if (e.keyCode == 27) {
            $('.bar').removeClass('animate');
            $('body').removeClass('open-menu');
            $('header .menu-container .menu .menu-item-has-children a ul').each(function( index ) {
                $(this).removeClass('open-sub');
            });
        }
    });
  
    $(document).ready(function(){
        windowSize();
    });

    $(window).resize(function(){
        windowSize();
    });
})(jQuery);