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
        
        if ((viewPortWidth >= 801) && (viewPortWidth <= 987)) {
            // element width / number of slides
            var slideWidth = parseInt(viewPortWidth/4);
            console.log("tablet-landscape slide width: " + slideWidth);
    
            this.bxSliderMulti.bxSlider({
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
            });
            // slide width - thumb margin (7 + 7) + slideMargin: 10
            /*
            $(".thumbnail").css("width", slideWidth-24);
            $(".thumbnail").css('height', slideWidth/2);
            $(".bx-wrapper").css("width", viewPortWidth);
            $(".bx-viewport").css("width", viewPortWidth);
            $(".slider-multi-cards-container").css("width", viewPortWidth);
    
            var elementHeight = $(".bx-viewport").height();
            console.log(viewPortWidth + ' plus ' + elementHeight);
    
            $(".bx-prev").css("height", elementHeight);
            $(".bx-next").css("height", elementHeight);
            $(".bx-controls-direction").css("top", -elementHeight);
            */
    
        } else if ((viewPortWidth >= 600) && (viewPortWidth <= 800)) {
            // element width / number of slides
            var slideWidth = parseInt(viewPortWidth/3);
            console.log("tablet slide width: " + slideWidth);
            this.bxSliderMulti.bxSlider({
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
            });
            // slide width - thumb margin (7 + 7) + slideMargin: 10
            /*
            $(".thumbnail").css("width", slideWidth-24);
            $(".thumbnail").css('height', slideWidth/2);
            $(".bx-wrapper").css("width", viewPortWidth);
            $(".bx-viewport").css("width", viewPortWidth);
            $(".slider-multi-cards-container").css("width", viewPortWidth);
    
            var elementHeight = $(".bx-viewport").height();
            console.log(viewPortWidth + ' plus ' + elementHeight);
    
            $(".bx-prev").css("height", elementHeight);
            $(".bx-next").css("height", elementHeight);
            $(".bx-controls-direction").css("top", -elementHeight);
            */
        } else if ((viewPortWidth >= 450) && (viewPortWidth <= 599)) {
    
            // element width / number of slides
            var slideWidth = parseInt(viewPortWidth/2);
            console.log("element width: " + viewPortWidth);
            console.log("mobile landscape slide width: " + slideWidth);
    
            this.bxSliderMulti.bxSlider({
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
            });
            // slide width - thumb margin (7 + 7) + slideMargin: 10
            /*
            $(".thumbnail").css("width", slideWidth-24);
            $(".thumbnail").css('height', slideWidth/2);
            $(".bx-wrapper").css("width", viewPortWidth);
            $(".bx-viewport").css("width", viewPortWidth);
            $(".slider-multi-cards-container").css("width", viewPortWidth);
    
            var elementHeight = $(".bx-viewport").height();
            console.log(viewPortWidth + ' plus ' + elementHeight);
    
            $(".bx-prev").css("height", elementHeight);
            $(".bx-next").css("height", elementHeight);
            $(".bx-controls-direction").css("top", -elementHeight);
            */
    
        } else if ((viewPortWidth >= 320) && (viewPortWidth <= 449)) {
    
            console.log("mobile slide width: " + viewPortWidth);
    
            this.bxSliderMulti.bxSlider({
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
            });
            /*
            $(".thumbnail").css("width", viewPortWidth);
            $(".thumbnail").css('height', viewPortWidth / 2);
            $(".slide-content").css("width", viewPortWidth);
            $(".bx-wrapper").css("width", viewPortWidth);
            $(".bx-viewport").css("width", viewPortWidth);
            $(".bx-controls-direction").css("width", viewPortWidth);
            $(".bx-controls").css("width", viewPortWidth);
            $(".slider-multi-cards-container").css("width", viewPortWidth);
    
            var elementHeight = $(".bx-viewport").height();
            console.log(viewPortWidth + ' plus ' + elementHeight);
    
            $(".bx-prev").css("height", elementHeight);
            $(".bx-next").css("height", elementHeight);
            $(".bx-controls-direction").css("top", -elementHeight);
            */
    
        } else  {
            console.log("laptop and everything larger");
            this.bxSliderMulti.bxSlider({
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
            });
            /*
            $(".thumbnail").css("width", slideWidth-28);
            $(".thumbnail").css('height', slideWidth/2);
    
            $(".slider-multi-cards-container").css("width", viewPortWidth);
            $(".bx-wrapper").css("width", viewPortWidth);
            $(".bx-wrapper").css("max-width", viewPortWidth);
    
            var elementHeight = $(".bx-viewport").height();
            console.log(viewPortWidth + ' plus ' + elementHeight);
    
            $(".bx-prev").css("height", elementHeight);
            $(".bx-next").css("height", elementHeight);
            $(".bx-controls-direction").css("top", -elementHeight);
            */
        }
    }
}
export default BxSlider;
