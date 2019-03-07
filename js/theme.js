; (function ($) {
    "use strict"


    var nav_offset_top = $('header').height() + 50;
    /*-------------------------------------------------------------------------------
	  Navbar 
	-------------------------------------------------------------------------------*/

    //* Navbar Fixed  
    function navbarFixed() {
        if ($('.header_area').length) {
            $(window).scroll(function () {
                var scroll = $(window).scrollTop();
                if (scroll >= nav_offset_top) {
                    $(".header_area").addClass("navbar_fixed");
                } else {
                    $(".header_area").removeClass("navbar_fixed");
                }
            });
        }
    }
    navbarFixed();


    /*----------------------------------------------------*/
    /*  Parallax Effect js
    /*----------------------------------------------------*/
    function parallaxEffect() {
        $('.bg-parallax').parallax("50%", 0.6);
    }
    parallaxEffect();


    /*----------------------------------------------------*/
    /*  Clients Slider
    /*----------------------------------------------------*/
    let clientSlider = $('.clients_slider');
    function clients_slider() {
        if (clientSlider.length) {
            clientSlider.owlCarousel({
                loop: true,
                margin: 30,
                items: 5,
                nav: false,
                autoplay: false,
                smartSpeed: 1500,
                dots: false,
                responsiveClass: true,
                responsive: {
                    0: {
                        items: 1,
                    },
                    400: {
                        items: 2,
                    },
                    575: {
                        items: 3,
                    },
                    768: {
                        items: 4,
                    },
                    992: {
                        items: 5,
                    }
                }
            })
        }
    }
    clients_slider();


    /*----------------------------------------------------*/
    /*  Magnific Pop up js (Home Video)
    /*----------------------------------------------------*/
    $('#play-home-video').magnificPopup({
        type: 'iframe',
        mainClass: 'mfp-fade',
        removalDelay: 160,
        preloader: false,
        fixedContentPos: false
    });

    /*----------------------------------------------------*/
    /*  Magnific Pop up js (Image Gallery)
    /*----------------------------------------------------*/
    $('.pop-up-image').magnificPopup({
        type: 'image',
        gallery: {
            enabled: true
        }
    });

    /*----------------------------------------------------*/
    /*  Isotope Filter js
    /*----------------------------------------------------*/
    function projects_isotope() {
        if ($('.projects_area').length) {
            // Activate isotope in container
            $(".projects_inner").imagesLoaded(function () {
                $(".projects_inner").isotope({
                    layoutMode: 'fitRows',
                    animationOptions: {
                        duration: 750,
                        easing: 'linear'
                    }
                });
            });

            // Add isotope click function
            $(".filter li").on('click', function () {
                $(".filter li").removeClass("active");
                $(this).addClass("active");

                let selector = $(this).attr("data-filter");
                $(".projects_inner").isotope({
                    filter: selector,
                    animationOptions: {
                        duration: 450,
                        easing: "linear",
                        queue: false,
                    }
                });
                return false;
            });
        }
    }
    projects_isotope();


    /*----------------------------------------------------*/
    /*  Testimonials Slider
    /*----------------------------------------------------*/
    function testimonials_slider() {
        let testiSlider = $('.testi_slider');
        if (testiSlider.length) {
            testiSlider.owlCarousel({
                loop: true,
                items: 1,
                nav: false,
                autoplay: true,
                smartSpeed: 500,
                dots: false,
                responsiveClass: true,
                responsive: {
                    0: {
                        items: 1,
                    },
                    768: {
                        items: 1,
                    },
                }
            })
        }
    }
    testimonials_slider();

})(jQuery)