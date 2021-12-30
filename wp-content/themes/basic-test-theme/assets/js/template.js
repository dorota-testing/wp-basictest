(function( $ ) {
	'use strict';
    //alert('Lorem');
    $(document).ready(function () {
        /**
         * These are settings for carousels. Slick js must be included for it to work !!!
         */

        // person
        $(".my-slick-carousel").slick({
            autoplay: false,
            arrows: false,
            dots: true,
            speed: 500,
            centerMode: true,
            centerPadding: "230px",
            slidesToShow: 1,
            responsive: [
            {
                breakpoint: 1400,
                settings: {
                centerPadding: "15vw", 
                },
            },
            {
                breakpoint: 901,
                settings: {
                centerPadding: "5vw",
                slidesToShow: 1,
                },
            },
            ],
        });
    });
})( jQuery );