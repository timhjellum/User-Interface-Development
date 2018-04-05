
$("#nav").html('<ul class="nav">'+
	'<li>'+
		'<a href="/index.html">'+
			'<i class="ti-home"></i>'+
			'<p>Home</p>'+
		'</a>'+
	'</li>'+
	'<li>'+
		'<a href="/base/">'+
			'<i class="ti-world"></i>'+
			'<p>Base</p>'+
			'</a>'+
		'<ul class="sub-nav">'+
			'<li><a href="/base/ellipsis.html">Ellipsis / Truncate</a></li>'+
			'<li><a href="/base/color-palette.html">Color Palette</a></li>'+
			'<li><a href="/base/header-and-footer.html" target="_blank">Header & Footer</a></li>'+
			'<li><a href="/base/icons.html" target="_blank">Iconss</a></li>'+
			'<li><a href="/base/typography.html">Typography</a></li>'+
		'</ul>'+
	'</li>'+
	
	'<li>'+
		'<a href="/layouts/">'+
			'<i class="ti-layout"></i>'+
			'<p>Layouts</p>'+
		'</a>'+
	'</li>'+
	'<li>'+
		'<a href="/modules/">'+
			'<i class="ti-widgetized"></i>'+
			'<p>Modules</p>'+		  
		'</a>'+
		'<ul class="sub-nav">'+
			'<li><a href="/modules/accordion.html">Accordion</a></li>'+
			'<li><a href="/modules/custom-content-containers.html">Custom Content Containers</a></li>'+
			'<li><a href="/modules/home-content-containers.html">Home Content Containers</a></li>'+
			'<li><a href="/modules/reusable-content-containers.html">Reusable Content Containers</a></li>'+
			'<li><a href="/modules/tables.html">Tables</a></li>'+
			'<li><a href="/modules/tabs.html">Tabs</a></li>'+
			'<li><a href="/modules/page-titles.html">Page titles</a></li>'+
			'<li><a href="/modules/messaging.html">Messaging</a></li>'+
			'<li><a href="/modules/slider-home.html" target="_blank">Home Slider</a></li>'+
			'<li><a href="/modules/slider-multi-cards.html" target="_blank">Multi-Card Slider</a></li>'+
		'</ul>'+
	'</li>'+
	'<li>'+
		'<a href="/states/">'+
			'<i class="ti-layers"></i>'+
			'<p>States</p>'+
		'</a>'+
		'<ul class="sub-nav">'+
			'<li><a href="/states/links-list.html">Links List</a></li>'+
//				'<li><a href="/states/header-menu.html">Header Menus</a></li>'+
//				'<li><a href="/states/sub-nav-menus.html">Subnav Menus</a></li>'+
//				'<li><a href="/states/local-scroll.html">Local Scroll</a></li>'+
//				'<li><a href="/states/scroll-to.html">Scroll To</a></li>'+
		'</ul>'+
	'</li>'+
	'<li>'+
		'<a href="themes.html">'+
			'<i class="ti-brush"></i>'+
			'<p>Themes</p>'+
		'</a>'+
	'</li>'+
'</ul>');
$(".nav li a").each(function() {
	var linkPath = $(this).attr('href').split( '/' );
	var linkPage = linkPath[linkPath.length -1];
	var pathArray = window.location.pathname.split( '/' );
	var activePage = pathArray[pathArray.length -1];

	if (activePage == linkPage) {
		$(this).parent().addClass('active');
		console.log("yes"); 
	}
});


