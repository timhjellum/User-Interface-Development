// EIA Global JS Include
//dd = dropdown
$.fn.dd = function( options ){
	var settings = {
		'dropDownClass'	: 'dat_block',
		//'activeImg'			:	'/global/images/menu_fix/active.png',
		'addDownArrow'	: true,
		'activeClass'		:	'on'
	};
	
	if( options )
		$.extend( settings, options );
	
	return this.each(function(){
		var $this = $(this),
				dropdown = $this.next('div')
				.addClass( settings.dropDownClass );
		
		if( settings.addDownArrow )
			$this.children('a').append('<span class="arrow_d"></span>');

		
/*------------Start dropdownFix -----------------*/		
		var $left, 
				$off = $this.position().left,
				$borderW = parseInt( $this.css('border-right-width') ),
				$padLeft = parseInt( $this.children('a').css('padding-left') ),
				$top = $this.position().top + $this.height();
		
		$left = $off + $borderW - $padLeft;
		
		if( settings.align == 'center' ) {
			$left -= dropdown.width()/2;
		}

		dropdown.css({
			//position	: 'absolute', in css stylesheet
			left			:	$left,
			top				:	$top//,
			//display		:	'none'
		});
//		.scale9Grid({ top:10, bottom:10, left:15, right:15 });

		$(window).resize(function(){
			var $borderW = parseInt($this.css('border-right-width')),
				$padLeft = parseInt($this.children('a').css('padding-left'));
			if( settings.align == 'center' ) {
				$left = $this.position().left + $borderW - $padLeft - (dropdown.width()/2);
			} else {
				$left = $this.position().left + $borderW - $padLeft;
			}
			$top = $this.position().top + $this.height();
			
			dropdown.css({
				left	:	$left ,
				top: $top		
			});
		});
/*------------End dropdownFix -----------------*/
		
		dropdown.add(this).hover(function(){
			$this.addClass( settings.activeClass);
			
			if( settings.activeImg ){
				$this.css({'background-image': 'url('+settings.activeImg+')'});
			}

			dropdown.show();
		}, function(){
      $this.removeClass( settings.activeClass);
			dropdown.hide();
		});
    
	});	
};
function debug(obj){if(navigator.userAgent.toLowerCase().indexOf('chrome') > -1)console.info(obj);}
//(function($){

$(function(){ // This is shorthand for $(document).ready(function() {
  /*
  *SD 2012-06-19 Tab and menu hover events are separated.
  * A window timeout is set on each in an out event amounting to a total of 4 events for each tab
  *e.g.timeout_sources_tab_on    sets a time delay on showing the menu when moving into   hovering on tab
  *    timeout_sources_tab_off   sets a time delay on hiding  the menu when moving out of hovering on tab
  *    timeout_sources_menu_on   sets a time delay on showing the menu when moving into   hovering on menu
  *    timeout_sources_menu_off  sets a time delay on hiding  the menu when moving out of hovering on menu
  *  Event destroying should be put on a loop by placing the timeout_X_X_X events as an array
  */
//Timeout control
  var numOfmillisecs_tab_on = 180;  //time delay to display menu after entering hover over tab
  var numOfmillisecs_tab_off = 180; //time delay to hide    menu after leaveing hover over tab
  var numOfmillisecs_menu_on = 0;   //time delay to display menu after entering hover over menu (currently set to 0)
  var numOfmillisecs_menu_off = 50;  //time delay to hide    menu after leaveing hover over menu (should be small but not too small so that if you enter the tab from the menu it does not flash)

  var subObj = {
                    tab:{ 
                            on:'sources_tab_on',
                            off:'sources_tab_off'
                        },
                    menu:{ 
                            on:'sources_tab_on',
                            off:'sources_tab_off'
                        }
                };
  var timeout = {
                    sources : {
                                tab:{ 
                                        on:'sources_tab_on',
                                        off:'sources_tab_off'
                                    },
                                menu:{ 
                                        on:'sources_tab_on',
                                        off:'sources_tab_off'
                                    }
                            },
                    topics : {
                                tab:{ 
                                        on:'sources_tab_on',
                                        off:'sources_tab_off'
                                    },
                                menu:{ 
                                        on:'sources_tab_on',
                                        off:'sources_tab_off'
                                    }
                            },
                    tools : {
                                tab:{ 
                                        on:'sources_tab_on',
                                        off:'sources_tab_off'
                                    },
                                menu:{ 
                                        on:'sources_tab_on',
                                        off:'sources_tab_off'
                                    }
                            },
                    learn : {
                                tab:{ 
                                        on:'sources_tab_on',
                                        off:'sources_tab_off'
                                    },
                                menu:{ 
                                        on:'sources_tab_on',
                                        off:'sources_tab_off'
                                    }
                            },
                    news : {
                                tab:{ 
                                        on:'sources_tab_on',
                                        off:'sources_tab_off'
                                    },
                                menu:{ 
                                        on:'sources_tab_on',
                                        off:'sources_tab_off'
                                    }
                            },
                    az : {
                                tab:{ 
                                        on:'sources_tab_on',
                                        off:'sources_tab_off'
                                    },
                                menu:{ 
                                        on:'sources_tab_on',
                                        off:'sources_tab_off'
                                    }
                            },
                    geo : {
                                tab:{ 
                                        on:'sources_tab_on',
                                        off:'sources_tab_off'
                                    },
                                menu:{ 
                                        on:'sources_tab_on',
                                        off:'sources_tab_off'
                                    }
                            }
                };
    function clearTimeoutAllOthers(currentSelection)
    {
        $.each( timeout, function(k, v){
            if(v != currentSelection)
            {
                $.each( v, function(k1, v1){
                    $.each( v1, function(k2, v2){
                        window.clearTimeout(v2);
                    });
                });
            }
        });
    }
// Sources Nav START *************
  var sourcesOn  = function(){$('.global-es').attr('class', 'global-es_on');$('.global_es_menu').show();};
  var sourcesOff = function(){$('.global-es_on').attr('class', 'global-es');$('.global_es_menu').hide()};
  //Hover event for sources tab
  $(".global-es").hover(function(){
    //Kill sources tab and menu off events
    window.clearTimeout(timeout.sources.tab.off);
    window.clearTimeout(timeout.sources.menu.off);
    
    timeout.sources.tab.on = window.setTimeout(sourcesOn, numOfmillisecs_tab_on );
  }, function() {
    window.clearTimeout(timeout.sources.tab.on); //To avoid flashing if you step in and out of the tab
    timeout.sources.tab.off = window.setTimeout(sourcesOff, numOfmillisecs_tab_off );
  });
  //Hover event for sources menu
  $(".global_es_menu").hover(function(){
    //Kill all other events
    clearTimeoutAllOthers('sources');
    //Kill sources tab off event
    window.clearTimeout(timeout.sources.tab.off);
    timeout.sources.menu.on = window.setTimeout(sourcesOn, numOfmillisecs_menu_on );
  }, function() {
    timeout.sources.menu.off = window.setTimeout(sourcesOff, numOfmillisecs_menu_off );
  });
// Sources Nav END *************

// Topics Nav START *************
  var topicsOn  = function(){$('.global-topics').attr('class', 'global-topics_on');$('.global_topics_menu').show();};
  var topicsOff = function(){$('.global-topics_on').attr('class', 'global-topics');$('.global_topics_menu').hide();};
  //Hover event for Topics tab
  $(".global-topics").hover(function(){
    //Kill topics tab and menu off events
    window.clearTimeout(timeout.topics.tab.off);
    window.clearTimeout(timeout.topics.menu.off);
    timeout.topics.tab.on	= window.setTimeout(topicsOn,numOfmillisecs_tab_on);
  }, function() {
    window.clearTimeout(timeout.topics.tab.on); //To avoid flashing if you step in and out of the tab
    timeout.topics.tab.off = window.setTimeout(topicsOff,numOfmillisecs_tab_off);
  });
  //Hover event for Topics menu
  $(".global_topics_menu").hover(function(){
    //Kill all other events
    clearTimeoutAllOthers('topics');
    //Kill topics tab off event
    window.clearTimeout(timeout.topics.tab.off);
    timeout_topics_menu_on	= window.setTimeout(topicsOn,numOfmillisecs_menu_on);
  }, function() {
    timeout_topics_menu_off = window.setTimeout(topicsOff,numOfmillisecs_menu_off);
  });
// Topics Nav END *************

// Geo Nav START *************
  var geoOn  = function(){$('.global-geo').attr('class', 'global-geo_on');$('.global_geo_menu').show();};
  var geoOff = function(){$('.global-geo_on').attr('class', 'global-geo');$('.global_geo_menu').hide();};
  //Hover event for Geo tab
  $(".global-geo").hover(function(){
    //Kill geo tab and menu off events
    window.clearTimeout(timeout.geo.tab.off);
    window.clearTimeout(timeout.geo.menu.off);
    timeout.geo.tab.on	= window.setTimeout(geoOn,numOfmillisecs_tab_on);
  }, function() {
    window.clearTimeout(timeout.geo.tab.on); //To avoid flashing if you step in and out of the tab
    timeout.geo.tab.off = window.setTimeout(geoOff,numOfmillisecs_tab_off);
  });
  //Hover event for Geo menu
  $(".global_geo_menu").hover(function(){
    //Kill all other events
    clearTimeoutAllOthers('geo');
    //Kill geo tab off event
    window.clearTimeout(timeout.geo.tab.off);
    timeout_geo_menu_on	= window.setTimeout(geoOn,numOfmillisecs_menu_on);
  }, function() {
    timeout_geo_menu_off = window.setTimeout(geoOff,numOfmillisecs_menu_off);
  });
// Geo Nav END *************

// Tools Nav START *************
  var toolsOn  = function(){$('.global-tools').attr('class', 'global-tools_on');$('.global_tools_menu').show();};
  var toolsOff = function(){$('.global-tools_on').attr('class', 'global-tools');$('.global_tools_menu').hide();};
  //Hover event for Tools tab
  $(".global-tools").hover(function(){
    //Kill tools tab and menu off events
    window.clearTimeout(timeout.tools.tab.off);
    window.clearTimeout(timeout.tools.menu.off);
    timeout.tools.tab.on	= window.setTimeout(toolsOn,numOfmillisecs_tab_on);
  }, function() {
    window.clearTimeout(timeout.tools.tab.on); //To avoid flashing if you step in and out of the tab
    timeout.tools.tab.off = window.setTimeout(toolsOff,numOfmillisecs_tab_off);
  });
  //Hover event for Tools menu
  $(".global_tools_menu").hover(function(){
    //Kill all other events
    clearTimeoutAllOthers('tools');
    //Kill tools tab off event
    window.clearTimeout(timeout.tools.tab.off);
    timeout_tools_menu_on	= window.setTimeout(toolsOn,numOfmillisecs_menu_on);
  }, function() {
    timeout_tools_menu_off = window.setTimeout(toolsOff,numOfmillisecs_menu_off);
  });
// Tools Nav END *************

// Learn About Energy Nav START *************
  var learnOn  = function(){$('.global-learn').attr('class', 'global-learn_on');$('.global_learn_menu').show();};
  var learnOff = function(){$('.global-learn_on').attr('class', 'global-learn');$('.global_learn_menu').hide();};
  //Hover event for Learn About Energy tab
  $(".global-learn").hover(function(){
    //Kill learn tab and menu off events
    window.clearTimeout(timeout.learn.tab.off);
    window.clearTimeout(timeout.learn.menu.off);
    timeout.learn.tab.on	= window.setTimeout(learnOn,numOfmillisecs_tab_on);
  }, function() {
    window.clearTimeout(timeout.learn.tab.on); //To avoid flashing if you step in and out of the tab
    timeout.learn.tab.off = window.setTimeout(learnOff,numOfmillisecs_tab_off);
  });
  //Hover event for Learn About Energy menu
  $(".global_learn_menu").hover(function(){
    //Kill all other events
    clearTimeoutAllOthers('learn');
    //Kill learn tab off event
    window.clearTimeout(timeout.learn.tab.off);
    timeout_learn_menu_on	= window.setTimeout(learnOn,numOfmillisecs_menu_on);
  }, function() {
    timeout_learn_menu_off = window.setTimeout(learnOff,numOfmillisecs_menu_off);
  });
// Learn About Energy Nav END *************

// News Nav START *************
  var newsOn  = function(){$('.global-news').attr('class', 'global-news_on');$('.global_news_menu').show();};
  var newsOff = function(){$('.global-news_on').attr('class', 'global-news');$('.global_news_menu').hide();};
  //Hover event for News tab
  $(".global-news").hover(function(){
    //Kill news tab and menu off events
    window.clearTimeout(timeout.news.tab.off);
    window.clearTimeout(timeout.news.menu.off);
    timeout.news.tab.on	= window.setTimeout(newsOn,numOfmillisecs_tab_on);
  }, function() {
    window.clearTimeout(timeout.news.tab.on); //To avoid flashing if you step in and out of the tab
    timeout.news.tab.off = window.setTimeout(newsOff,numOfmillisecs_tab_off);
  });
  //Hover event for News menu
  $(".global_news_menu").hover(function(){
    //Kill all other events
    clearTimeoutAllOthers('news');
    //Kill news tab off event
    window.clearTimeout(timeout.news.tab.off);
    timeout_news_menu_on	= window.setTimeout(newsOn,numOfmillisecs_menu_on);
  }, function() {
    timeout_news_menu_off = window.setTimeout(newsOff,numOfmillisecs_menu_off);
  });
// News Nav END *************

// A-Z Nav START *************
  var azOn  = function(){$('.global-a-z').attr('class', 'global-a-z_on');$('.global_a-z_menu').show();};
  var azOff = function(){$('.global-a-z_on').attr('class', 'global-a-z');$('.global_a-z_menu').hide();};
  //Hover event for A-Z tab
  $(".global-a-z").hover(function(){
    //Kill a-z tab and menu off events
    window.clearTimeout(timeout.az.tab.off);
    window.clearTimeout(timeout.az.menu.off);
    timeout.az.tab.on	= window.setTimeout(azOn,numOfmillisecs_tab_on);
  }, function() {
    window.clearTimeout(timeout.az.tab.on); //To avoid flashing if you step in and out of the tab
    timeout.az.tab.off = window.setTimeout(azOff,numOfmillisecs_tab_off);
  });
  //Hover event for A-Z menu
  $(".global_a-z_menu").hover(function(){
    //Kill all other events
    clearTimeoutAllOthers('az');
    //Kill az tab off event
    window.clearTimeout(timeout.az.tab.off);
    timeout_az_menu_on	= window.setTimeout(azOn,numOfmillisecs_menu_on);
  }, function() {
    timeout_az_menu_off = window.setTimeout(azOff,numOfmillisecs_menu_off);
  });
// A-Z Nav END *************

// Geo Nav 
  /*
  $(".global-geo, .global_geo_menu").hover(function(){
	$('.global-geo').attr('class', 'global-geo_on');$('.global_geo_menu').show();
  }, function() {
    $('.global-geo_on').attr('class', 'global-geo');$('.global_geo_menu').hide();
  });
// Tools Nav 
  $(".global-tools, .global_tools_menu").hover(function(){
	$('.global-tools').attr('class', 'global-tools_on');$('.global_tools_menu').show();
  }, function() {
    $('.global-tools_on').attr('class', 'global-tools');$('.global_tools_menu').hide();
  });
// Learn About Energy Nav 
  $(".global-learn, .global_learn_menu").hover(function(){
	$('.global-learn').attr('class', 'global-learn_on');$('.global_learn_menu').show();
  }, function() {
    $('.global-learn_on').attr('class', 'global-learn');$('.global_learn_menu').hide();
  });
// News Nav 
  $(".global-news, .global_news_menu").hover(function(){
	$('.global-news').attr('class', 'global-news_on');$('.global_news_menu').show();
  }, function() {
    $('.global-news_on').attr('class', 'global-news');$('.global_news_menu').hide();
  });
// A-Z Index 
  $(".global-a-z, .global_a-z_menu").hover(function(){
	$('.global-a-z').attr('class', 'global-a-z_on');$('.global_a-z_menu').show();
  }, function() {
    $('.global-a-z_on').attr('class', 'global-a-z');$('.global_a-z_menu').hide();
  });
  */

  // Banner Query String addition
  if(typeof String.prototype.trim !== 'function') {
    String.prototype.trim = function() {
      return this.replace(/^\s+|\s+$/g, ''); 
    }
  }
  // HP (slider3) - banners

  $('#slider3 h2 a, #slider3 h3 a').attr( "href", function(ind,attr) {
	// if the href contains "?", append &x=z, else, append ?x=z
	var pos = $(this).parents('li').attr('class').replace("feature_new", "b");
	var hash_position = attr.indexOf('#');
	var new_url_argument = /\?/.test(attr) ? '&src=home-' + pos : '?src=home-' + pos;

	// if there is no hash in the url, then add the new argument to the end, otherwise insert before the hash.
	return hash_position == -1 ? (attr + new_url_argument) : attr.substring(0, hash_position) + new_url_argument + attr.substring(hash_position, attr.length)
	//return /\?/.test(attr) ? attr + '&src=home-' + pos : attr + '?src=home-' + pos;
  });
  // L2 (slider1) - banners
  // Set ban(i) class to carousel li elements
  var tito = 1;
  $('#slider1 li').each(function(){
      $(this).attr('id', 'b'+tito);
      tito++;
  });
  $('#slider1 a').attr( "href", function(ind,attr) {
  	// find parent li class name
  	  var pos1 = $(this).parents('li').attr('id');
  	// parse page title for position reference
  	  var pos2 = $('.title').text().trim().replace(/(\w+).*/,"$1");
        // if the href contains "?", append &x=z, else, append ?x=z
        return /\?/.test(attr) ? attr + '&src=' + pos2 + '-' + pos1 : attr + '?src=' + pos2 + '-' + pos1;
  });
  // HP Features
  $('.feature_sec a').attr( "href", function(ind,attr) {
        // if the href contains "?", append &x=z, else, append ?x=z
  	  var pos3 = $(this).parents('span').attr('class').replace("home_sm_feature", "f");
        return /\?/.test(attr) ? attr + '&src=home-' + pos3 : attr + '?src=home-' + pos3;
  });
  // L2 features
  // Set ban(i) class to carousel li elements
  var tato = 1;
  $('.mr_temp1 .main_col h3').each(function(){
      $(this).addClass('f'+tato);
      tato++;
  });
  $('.mr_temp1 .main_col h3 a').attr( "href", function(ind,attr) {
  	// find parent li class name
  	  var pos4 = $(this).parents('h3').attr('class');
  	// parse page title for position reference
  	  var pos5 = $('.title').text().trim().replace(/(\w+).*/,"$1");
        // if the href contains "?", append &x=z, else, append ?x=z
        return /\?/.test(attr) ? attr + '&src=' + pos5 + '-' + pos4 : attr + '?src=' + pos5 + '-' + pos4;
  });

// What's New Menu Loader
//  $('#whatsnew3').load('/CFusionMX7/global/data/whatsnew.htm');
// comment toggle 
  $('#star').click(function () {
	   $('.rs_comments').slideDown('slow');
  });
  // comment toggle 
  $('#closer').click(function () {
	   $('.rs_comments').slideUp('slow');
  });




  // Carousel2 Funtion 
  /*
  var slider2 = $('#slider2').bxSlider({
				controls: false
			});
		
			$('.thumbs2 a').click(function(){
				var thumbIndex2 = $('.thumbs2 a').index(this);
				slider2.goToSlide(thumbIndex2);
				$('.thumbs2 a').removeClass('pager-active2');
				$(this).addClass('pager-active2');
				return false;
			});
			



			$('.thumbs2 a:first').addClass('pager-active2');
  		// Carousel3 Funtion 
  		var slider3 = $('#slider3').bxSlider({
				auto: true,
				autoHover: true,
				controls: false,
				pause: 10000,
				pager: true,
				pagerActiveClass: 'pager-active3',
				pagerSelector: '.thumbs3'
			});
			





		//no 'var' here, this needs to be global
		sliderOpts = {
			controls: false,
			autoHover: true,
			auto: true,
			pager:true,
			pause: 10000,
			pagerActiveClass: 'pager-active',
			pagerSelector: '.thumbs'
		};
		*/

			var defaultTitle = 'U.S. Energy Information Administration - EIA - Independent Statistics and Analysis',
			titlePrefix = 'EIA';
			
			if( document.title == '' ){
			  var title = titlePrefix,
			  titleMMain = $('.title a').text(),
			  titleMain = $('.title h1').text(),
			  titleSub = $('.subnav .active').text();
			  
			  if(titleMain != ''){
			    if( titleMMain != '')
			      title += ' - ' + titleMMain.substring(titleMMain.indexOf(titleMMain.charAt(1)));
			    
			    title += ' - ' + titleMain;
			    
  			  if(titleSub!= '')
  			    title += ' - ' + titleSub;
			  } else 
			    title = defaultTitle;
			  
			  document.title = title;
			}
			  
  // Zebra striping 
/*  $("table.zebra").each(function(){
	$("tbody tr:even", this).not(".odd").addClass("zebra_odd");
  });*/









  
  // Side List / 2 column 
  $("span.side_list, span.side_list2").each(function(){
	$("li:odd", this).not(".odd").addClass("textright");
  });

// FancyBox jQuery plugin
//  $("a.lightbox").fancybox();
  $("a.lightbox").fancybox({
    /*
    onUpdate: function() {
      $.each(Highcharts.charts, function(index, chart){ if ($(chart.container).parents('.fancybox-outer').length > 0){ chart.redraw();console.log('redrawing');} });
    },
    */
    autoResize : false // To sidestep issue with Highcharts in Fancybox 2 disappearing when the browser is resized -SNW
  });

  // For HTML content, since Fancybox 2 now requires specifying IFRAME mode explicitly for non-images
  $("a.lightboxhtml").fancybox({
    type: "iframe",
    fitToView: true,
    autoSize: true
  });

















  // Side Nav Expand function 
  $(".side_nav ul li:not(.active) ul").hide();
	
	$(".side_nav ul li span").click(function( e ){
		$(this).parent().toggleClass("active").children("ul").toggle();
	});
		
  // Table expand/contract function
  $(".contable thead").click(function(){
		var $this = $(this);
    $this.next("tbody").toggle()
    var $curr = $this.find("th:first").toggleClass("active");
	});
	
	if( window.location.hash != '' ){
		if(window.location.hash.indexOf('/') == -1 && window.location.hash.indexOf('?') == -1)
			$(window.location.hash).click();
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

  // List Splitter 
	$('.split_2columns').easyListSplitter({ colNumber: 2 });
	$('.split_3columns').easyListSplitter({ colNumber: 3 });
	$('.split_4columns').easyListSplitter({ colNumber: 4, direction: 'vertical' });
	$('.split_5columns').easyListSplitter({ colNumber: 5, direction: 'vertical' });
	
	$('#search-input').bind({
		focus: function(){
			$(this).val('');
		}/*,
		blur: function(){
			$(this).val('Search eia.gov');
		}*/
	});
//show/hide function
	$(".show").click(function () {
  	$(this).next().toggle();
  	if($(this).next().is(":visible")){$(this).html("[-] See less");}
  	else {$(this).html("[+] See more");};
 	});
}); // END of jQuery ready function

// Other Global functions

// enable drop down in footer for AEO
function MM_jumpMenuGo(objId,targ,restore){ //v9.0
  var selObj = null;  with (document) { 
  if (getElementById) selObj = getElementById(objId);
  if (selObj) eval(targ+".location='"+selObj.options[selObj.selectedIndex].value+"'");
  if (restore) selObj.selectedIndex=0; }
}

// Pub Release Time Stamp
function PubReleaseTimeStamp()
{
	var arMonths;
	var lngPubReleaseMonth, lngPubReleaseDay, lngPubExpectedReleaseDay, lngPubReleaseYear;
	var lngtodaydate, lngCurrentYear;
	var strPubReleaseMonthIndex;	
	var strNextPubReleaseMonth, lngNextPubReleaseYear;
	var strCurrentRelease, strNextRelease, strExpectedRelease, strPubIssue;
	var strPubReleaseOne, strPubReleaseTwo;
	// zero base index array
	arMonths = new Array("January","February","March","April","May","June","July","August","September", "October","November","December");	
	// set publication release month, day, and year value
	lngPubReleaseMonth = 12;
	lngPubReleaseDay = 22;
	lngPubExpectedReleaseDay = 31;
	lngPubReleaseYear = 2010;
	lngPubReleaseMonthIndex = lngPubReleaseMonth - 1;
	strPubIssue =  arMonths[lngPubReleaseMonthIndex] + " " +  lngPubReleaseYear + " Monthly Energy Review" + "<br>";
	strCurrentRelease = "Release Date: " + arMonths[lngPubReleaseMonthIndex] + " " + lngPubReleaseDay + ", " + lngPubReleaseYear + "<br>";
	if (lngPubReleaseMonth == 12)
	{
		strNextPubReleaseMonth = arMonths[0];
		lngNextPubReleaseYear = lngPubReleaseYear + 1;
	}
	else
	{
		strNextPubReleaseMonth = arMonths[lngPubReleaseMonthIndex + 1];
		lngNextPubReleaseYear =  lngPubReleaseYear;
	}
	strNextRelease = "Next Update: Last Week of " + strNextPubReleaseMonth + " " + lngNextPubReleaseYear;
	strExpectedRelease = "Next Update: " + strNextPubReleaseMonth + " " + lngPubExpectedReleaseDay + ", " + lngNextPubReleaseYear;
	//display publication release time stamp
	strPubReleaseOne = strPubIssue + strCurrentRelease + strNextRelease;
	strPubReleaseTwo = strPubIssue + strCurrentRelease + strExpectedRelease;
	document.write(strPubReleaseOne);
//	document.write(strPubReleaseTwo);
	return;
}
function clearForms()
{
  var i;
  for (i = 0; (i < document.forms.length); i++) {
    document.forms[i].reset();
  }
}
function preloadmyImages() { //v3.0
  var d=document; if(d.images){ if(!d.MM_p) d.MM_p=new Array();
    var i,j=d.MM_p.length,a=preloadmyImages.arguments; for(i=0; i<a.length; i++)
    if (a[i].indexOf("#")!=0){ d.MM_p[j]=new Image; d.MM_p[j++].src=a[i];}}
}
/* To avoid Internet Explorer errors caused by extraneous console.log's, make sure window.console exists */
if (!window.console) window.console = { log: function(x){}, info: function(x){}, time: function(x){}, timeEnd: function(x){}, trace: function(x){} }
//console.log("testing");