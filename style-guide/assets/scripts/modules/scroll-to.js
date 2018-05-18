//const $ = require("jquery");
//import scrollTo from '../../../../node_modules/scrollto/index.js;
import scrollTo from 'animated-scroll-to';

class ScrollTo {
    constructor() {
//        console.log("animated-scroll-to to checking in");




	// Table expand/contract function
	$(".contable thead").click(function(){
		var $this = $(this);
		//console.log('contable click function: ' + $this.attr('id') + ', ' + $('a[name='+$this.attr('id')+']').offset().top);
		$this.next("tbody").toggle().promise().done(function(){
			//console.log('trigger scroll');
			scrollToAnchor($this.attr('id'));
		});
		var $curr = $this.find("th:first").toggleClass("active");
		//console.log($this.attr('id'));
	});
	
	function scrollToAnchor(pageHash){
		if($('a[name='+pageHash+']:not(.ui-tabs-anchor)').length>0){
			$('html').animate({scrollTop: $('a[name='+pageHash+']').offset().top-50}, 'slow');
			//console.log(pageHash + ' offsest: ' + $('a[name='+pageHash+']').offset().top +' page load anchor scroll');
		}
		else if($(window.location.hash).length>0){
			$('html').animate({scrollTop: $(window.location.hash).offset().top-50}, 'slow');
			//console.log($(window.location.hash) + ' offsest: ' + $(window.location.hash).offset().top +' page load page scroll');
		}
	}
	
	if( window.location.hash != '' ){
		if(window.location.hash.indexOf('/') == -1 && window.location.hash.indexOf('?') == -1){
			$(document).ready(function(){
				var pageHash = window.location.hash.split('#')[1];
				if($(window.location.hash).parent().attr('class')=='contable'){
					//console.log('inside contable hash check');
					$(window.location.hash).click();
				}
				else {
					//console.log('not-a-contable scroll trigger');
					scrollToAnchor(pageHash);
				}
			});
			//$(document).ready(hashHandler);
			//window.onhashchange = hashHandler;
			//$(window.location.hash).click();
		}
	}
	else
		$(".contable .auto_open").click();
	
	//Added so that links to contable sections on the same page will open the section when clicked. -SG 11/4/2013
	if($('.contable').length > 0) {
		$('a[href^="#"]').on('click', function(event) {
			if(!$($(this).attr('href') + " th:first").hasClass("active")) {
				$($(this).attr('href') + " th:first").click();
			}
			return true;
		});
	}
	
	$('body :not(.contable) a').not('.ui-tabs-anchor').click(function(event){
		if(event.target.nodeName == 'A' && event.target.hash) {
			
				var pageHash = event.target.hash.split('#')[1];
				if($('a[name='+pageHash+']').length>0){
					$('html').animate({scrollTop: $('a[name='+pageHash+']').offset().top-50}, 'slow');
					//console.log(event.target + '; anchor scroll');
				}
				else if($(event.target.hash).length>0){
					$('html').animate({scrollTop: $(event.target.hash).offset().top-50}, 'slow');
					//console.log(event.target + '; page scroll');
				}
			
		};
	});
	
	$(".contable a").click( function( e ){
		$curr = $(this).parents('tbody').prev('thead').find('th:first');
			window.location.hash = $curr.children('a').attr('name');
	});

  // Table expand all function 
	$(document).on('click', ".expandall", function(e){
	  $(this).text("- COLLAPSE ALL").removeClass("expandall").addClass("collapseall")
	  .parent().next(".contable").children("tbody").show()
	  .parent().find("th:first-child").addClass("active");
		// redraw all sparklines when tables are expanded. Added 2013-04-16 by christian.stauffer@eia.gov
		$.sparkline_display_visible();
		});
	$(document).on('click', ".collapseall", function(e){
		$(this).text("+ EXPAND ALL").removeClass("collapseall").addClass("expandall")
		.parent().next(".contable").children("tbody").hide()
		.parent().find("th").removeClass("active");
	  });



















    } 
}

export default ScrollTo;



