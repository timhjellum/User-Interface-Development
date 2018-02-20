//import $ from 'jquery';
import bxslider from '../../../../node_modules/bxslider/dist/jquery.bxslider.min.js';

class BxSlider {
	constructor() {
        this.bxSliderHome = $('.bxslider-home');
        this.bxSliderMulti = $('.bxslider-multi');
        this.bxSliderHomeWrapper = $('.bxslider-home-wrapper');
        this.bxSlidermultiWrapper = $('.bxslider-multi-wrapper');
		this.window = $(window);
        this.checkSize();
		this.events();
	}
	events() {
        this.window.resize(this.checkSize.bind(this));
        this.bxSliderHome.bxSlider({
            auto: true,
            minSlides: 1,
            maxSlides: 1,
            slideMargin: 0,  //integer
            wrapperClass: 'bxslider-home-wrapper', // overides default bx-wrapper
            pager: true,
            //pagerSelector: '.slider-content',
            slideWidth: 956,
            autoHover: true,
            controls: false,
            adaptiveHeight: true,
            pause: 10000
        });
        this.bxSliderMulti.bxSlider({
            auto: true,
            wrapperClass: 'bxslider-multi-wrapper', // overides default bx-wrapper
            minSlides: 5,
            maxSlides: 5,
            nextText: "&#8250;",
            prevText: "&#8249;",
            infiniteLoop: true,
            pager: true,
            pagerSelector: '.slider-multi-card-pager',
            //slideWidth: slideWidth,
            slideWidth: 154,
            slideMargin: 14
        });
        console.log("slider found");
	}

        // check the page resolution on initial page load and if the browser is resized
        /*
            $('.slider-home h2 a, .slider-home h3 a').attr( "href", function(ind,attr) {
            // if the href contains "?", append &x=z, else, append ?x=z
            var pos = $(this).parents('li').attr('class').replace("feature_new", "b");
            var hash_position = attr.indexOf('#');
            var new_url_argument = /\?/.test(attr) ? '&src=home-' + pos : '?src=home-' + pos;

            // if there is no hash in the url, then add the new argument to the end, otherwise insert before the hash.
            return hash_position == -1 ? (attr + new_url_argument) : attr.substring(0, hash_position) + new_url_argument + attr.substring(hash_position, attr.length)
            //return /\?/.test(attr) ? attr + '&src=home-' + pos : attr + '?src=home-' + pos;
            });
        */       
    checkSize() {
        console.log("checking size");
        //  function checkSize() {
        /*
        var viewPortWidth = window.innerWidth;
        var viewPortHeight = window.innerHeight;
        console.log('viewport width is: '+ viewPortWidth + ' and viewport height is:' + viewPortHeight);
        if ((viewPortWidth) > 957) {
            console.log(viewPortWidth + " = laptop and desktop");
                $(".bxslider").bxSlider({
                auto: true,
                autoHover: true,
                controls: false,
                adaptiveHeight: true,
                pause: 10000,
            });
        } else if ((viewPortWidth >= 801) && (viewPortWidth <= 956)) {
                console.log("tablet-landscape");
                $(".bxslider").bxSlider({
                auto: true,
                autoHover: true,
                controls: false,
                adaptiveHeight: true,
                pause: 10000
            });
            $(".bx-wrapper").css("width", viewPortWidth);
            $(".bx-viewport").css("width", viewPortWidth);
            $(".slider-home").css("width", viewPortWidth);

            } else if ((viewPortWidth >= 600) && (viewPortWidth <= 800)) {
                console.log("tablet slide width");
                $(".bxslider").bxSlider({
                auto: true,
                autoHover: true,
                controls: false,
                adaptiveHeight: true,
                pause: 10000
            });
            $(".bx-wrapper").css("width", viewPortWidth);
            $(".bx-viewport").css("width", viewPortWidth);
            $(".slider-home").css("width", viewPortWidth);

            } else if ((viewPortWidth >= 450) && (viewPortWidth <= 599)) {
                console.log("mobile landscape slide width");
                $(".bxslider").bxSlider({
                auto: true,
                autoHover: true,
                controls: false,
                adaptiveHeight: true,
                pause: 10000
            });
            $(".bx-wrapper").css("width", viewPortWidth);
            $(".bx-viewport").css("width", viewPortWidth);
            $(".slider-home").css("width", viewPortWidth);

            } else if ((viewPortWidth >= 0) && (viewPortWidth <= 449)) {
                console.log("mobile slide width");
                $(".bxslider").bxSlider({
                auto: true,
                autoHover: true,
                controls: false,
                adaptiveHeight: true,
                pause: 10000
            });
            $(".bx-wrapper").css("width", viewPortWidth);
            $(".bx-viewport").css("width", viewPortWidth);
            $(".slider-home").css("width", viewPortWidth);
            } else {
                console.log("cannot determine screen resolution");
        }
        */

    }
}
export default BxSlider;
