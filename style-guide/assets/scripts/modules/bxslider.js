//import $ from 'jquery';
import bxslider from '../../../../node_modules/bxslider/dist/jquery.bxslider.min.js';

class BxSlider {
	constructor() {
        this.bxSliderHome = $('.slider-home ul');
        this.bxSliderMulti = $('.slider-multi ul');
        this.bxSliderHomeWrapper = $('.slider-home-wrapper');
        this.bxSlidermultiWrapper = $('.slider-multi-wrapper');
		this.window = $(window);
        this.checkSize();
        this.events();
    }
	events() {
        setTimeout(function() {
            $(".slider-multi").addClass("bxslider-visible");
            console.log("visible");
        }, 2000);
    //    this.window.resize(this.checkSize.bind(this));
        this.bxSliderHome.show();
        this.bxSliderMulti.show();
        this.bxSliderHome.bxSlider({
            auto: true,
            minSlides: 1,
            maxSlides: 1,
            slideMargin: 0,  //integer
            wrapperClass: 'slider-home-wrapper',
            autoHover: true,
            controls: false,
            pager: true,
            pagerSelector: '.slider-home-pager',
            slideWidth: 960,
            pause: 10000
        });
        this.window.resize(this.checkSize.bind(this));





        // HP (slider3) - banners
        $('.slider-home h2 a, .slider-home h3 a').attr( "href", function(ind,attr) {
            // if the href contains "?", append &x=z, else, append ?x=z
            var slideOrder = $(this).parents('li').attr('class');
            var hash_position = attr.indexOf('#');
            var new_url_argument = /\?/.test(attr) ? '&src=home-' + slideOrder : '?src=home-' + slideOrder;

            // if there is no hash in the url, then add the new argument to the end, otherwise insert before the hash.
            return hash_position == -1 ? (attr + new_url_argument) : attr.substring(0, hash_position) + new_url_argument + attr.substring(hash_position, attr.length)
            //return /\?/.test(attr) ? attr + '&src=home-' + pos : attr + '?src=home-' + pos;
        });
        $('.features a').attr( "href", function(ind,attr) {
            var featureOrder = $(this).parents('div').attr('class');
            return /\?/.test(attr) ? attr + '&src=home-' + featureOrder : attr + '?src=home-' + featureOrder;
        });

        $(".slider-home h3 a:empty").each(function() {
            $(this).parent().parent().addClass("no-description"); 
        });
    }



    checkSize() {
        var viewPortWidth = window.innerWidth;
        //console.log("Viewport: " + viewPortWidth);
        var slider = $('.slider-multi ul').bxSlider();
        //console.log("multi-slider initiated");
        var mobileLandscapeSlideWidth = parseInt(viewPortWidth/2);
        //console.log("mobile landscape / slide width: " + mobileLandscapeSlideWidth);
        var tabletSlideWidth = parseInt(viewPortWidth/3);
        //console.log("tablet / slide width: " + tabletSlideWidth);
        var tabletLandscapeSlideWidth = parseInt(viewPortWidth/4);
        //console.log("tablet-landscape / slide width: " + tabletLandscapeSlideWidth);

        var laptop = {
            auto: false,
            wrapperClass: 'slider-multi-wrapper',
            minSlides: 5,
            maxSlides: 5,
            moveSlides: 5,
            nextText: '&#8250;',
            prevText: '&#8249;',
            infiniteLoop: true,
            pager: true,
            pagerSelector: '.slider-multi-pager',
            slideWidth: 154,
            slideMargin: 14
        };
        var tabletLandscape = {
            auto: false,
            wrapperClass: 'slider-multi-wrapper',
            minSlides: 4,
            maxSlides: 4,
            moveSlides: 4,
            nextText: '&#8250;',
            prevText: '&#8249;',
            infiniteLoop: true,
            pager: true,
            pagerSelector: '.slider-multi-pager',
            slideWidth: mobileLandscapeSlideWidth,
            slideMargin: 10
        };
        var tablet = {
            auto: false,
            wrapperClass: 'slider-multi-wrapper',
            minSlides: 3,
            maxSlides: 3,
            moveSlides: 3,
            nextText: '&#8250;',
            prevText: '&#8249;',
            infiniteLoop: true,
            pager: true,
            pagerSelector: '.slider-multi-pager',
            slideWidth: tabletSlideWidth,
            slideMargin: 10
        };
        var mobileLandscape = {
            auto: false,
            wrapperClass: 'slider-multi-wrapper',
            minSlides: 2,
            maxSlides: 2,
            moveSlides: 2,
            nextText: '&#8250;',
            prevText: '&#8249;',
            infiniteLoop: true,
            pager: true,
            pagerSelector: '.slider-multi-pager',
            slideWidth: mobileLandscapeSlideWidth,
            slideMargin: 10
        };
        var mobile = {
            auto: false,
            wrapperClass: 'slider-multi-wrapper',
            minSlides: 1,
            maxSlides: 1,
            moveSlides: 1,
            nextText: '&#8250;',
            prevText: '&#8249;',
            infiniteLoop: true,
            pager: true,
            pagerSelector: '.slider-multi-pager',
            slideWidth: viewPortWidth,
            slideMargin: 0
        };
        if ((viewPortWidth >= 801) && (viewPortWidth <= 987)) {
            slider.reloadSlider(tabletLandscape);
            //console.log("tablet-landscape");
        } else if ((viewPortWidth >= 600) && (viewPortWidth <= 800)) {
            slider.reloadSlider(tablet);
            //console.log("tablet");
        } else if ((viewPortWidth >= 450) && (viewPortWidth <= 599)) {
            slider.reloadSlider(mobileLandscape);
            //console.log("mobile landscape");
        } else if ((viewPortWidth >= 320) && (viewPortWidth <= 449)) {
            slider.reloadSlider(mobile);
            //console.log("mobile");
        } else {
            slider.reloadSlider(laptop);
            //console.log("laptop +");
        }
    }
}
export default BxSlider;
