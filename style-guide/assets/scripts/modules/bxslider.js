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

//    initialState() {
//        this.bxSliderHome.show();
//        this.bxSliderMulti.show();
//    }
	events() {
    //    this.window.resize(this.checkSize.bind(this));
        this.bxSliderHome.show();
        this.bxSliderMulti.show();
        this.bxSliderHome.bxSlider({
            auto: true,
            minSlides: 1,
            maxSlides: 1,
            slideMargin: 0,  //integer
            wrapperClass: 'slider-home-wrapper', // overides default bx-wrapper
            autoHover: true,
            controls: false,
            pager: true,
            pagerSelector: '.slider-home-pager',
            slideWidth: 960,
            pause: 10000
        });
        this.bxSliderMulti.bxSlider({
            auto: false,
            wrapperClass: 'slider-multi-wrapper', // overides default bx-wrapper
            minSlides: 5,
            maxSlides: 5,
            nextText: "&#8250;",
            prevText: "&#8249;",
            infiniteLoop: true,
            pager: true,
            pagerSelector: '.slider-multi-pager',
            //slideWidth: slideWidth,
            slideWidth: 154,
            slideMargin: 14
        });
        //console.log("slider found");


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




        // L2 (slider1) - banners
        /*
        var tito = 1;
        $('#slider1 li').each(function(){
            $(this).attr('id', 'b'+tito);
            tito++;
        });
        $('#slider1 a').attr( "href", function(ind,attr) {
            // find parent li class name
            var pos1 = $(this).parents('li').attr('id');
            // parse page title for position reference
            var pos2 = $('.title').text().trim().replace(/(\w+).*
            /,"$1");
                // if the href contains "?", append &x=z, else, append ?x=z
                return /\?/.test(attr) ? attr + '&src=' + pos2 + '-' + pos1 : attr + '?src=' + pos2 + '-' + pos1;
        });
        */
        // HP Features

        /*
        // L2 features
        // Set ban(i) class to carousel li elements
        var tato = 1;
        $('.mr_temp1 .main_col h3').each(function(){
            $(this).addClass('f'+tato);
            tato++;
        });
*/




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
        //console.log("checking size");


    }
}
export default BxSlider;
