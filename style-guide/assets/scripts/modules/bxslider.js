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
        this.window.resize(this.checkSize.bind(this));
        //this.window.load(this.checkSize.bind(this));
        //this.window.orientationchange(this.checkSize.bind(this));
        //this.window.on("orientationchange load resize", function () {
        //    bxslider();
        //});
    }
	events() {
        setTimeout(function() {
            $(".slider-multi").addClass("bxslider-visible");
            console.log("visible");
        }, 2000);
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
    }

    checkSize() {
        var viewPortWidth = window.innerWidth;
        //console.log("Viewport: " + viewPortWidth);
        var slider = this.bxSliderMulti.bxSlider();
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
            slideWidth: tabletLandscapeSlideWidth,
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
            //slider.destroySlider();
            //console.log("slider destroyed");
            //slider.reloadSlider(tabletLandscape);
            $(".slider-multi ul").bxSlider(tabletLandscape);
            console.log("reloaded tablet-landscape");
        } else if ((viewPortWidth >= 600) && (viewPortWidth <= 800)) {
            //slider.destroySlider();
            //console.log("slider destroyed");
            //slider.reloadSlider(tablet);
            $(".slider-multi ul").bxSlider(tablet);
            console.log("reloaded tablet");
        } else if ((viewPortWidth >= 450) && (viewPortWidth <= 599)) {
            //slider.destroySlider();
            //console.log("slider destroyed");
            //slider.reloadSlider(mobileLandscape);
            $(".slider-multi ul").bxSlider(mobileLandscape);
            console.log("reloaded mobile landscape");
        } else if ((viewPortWidth >= 320) && (viewPortWidth <= 449)) {
            //slider.destroySlider();
            //console.log("slider destroyed");
            //slider.reloadSlider(mobile);
            $(".slider-multi ul").bxSlider(mobile);
            console.log("reloaded mobile");
        } else {
            //slider.destroySlider();
            //console.log("slider destroyed");
            //slider.reloadSlider(laptop);
            $(".slider-multi ul").bxSlider(laptop);
            console.log("reloaded laptop +");
        }
    }
}
export default BxSlider;
