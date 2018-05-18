//import $ from 'jquery';

class Accordion {
	constructor() {
		this.headerExpandCollapse = $('.accordion h2 .expand-collapse');
		this.allExpandCollapseInitialState = $('.expand-all');
		this.headerInactive = $('h2.inactive');
		this.headerActive = $('h2.active');
		this.header = $('.accordion h2');
		this.content = $('.accordion-content');
		this.initialState();
		this.events();
	}
	initialState() {
		this.headerExpandCollapse.addClass('expand');
		this.header.addClass('inactive');
		this.content.addClass('collapsed');
		this.allExpandCollapseInitialState.addClass('show');
	}

	events() {
		$('h2.active').click(function() {
			$('.expand-all').toggleClass('show');
			$('.collapse-all').toggleClass('show');
			$(this).toggleClass('active');
			$(this).toggleClass('inactive');
			$(this).next('.accordion-content').toggleClass('expanded');
			$(this).next('.accordion-content').toggleClass('collapsed');
		});
		$('h2.inactive').click(function() {
			$('.expand-all').toggleClass('show');
			$('.collapse-all').toggleClass('show');
			$(this).toggleClass('inactive');
			$(this).toggleClass('active');
			$(this).next('.accordion-content').toggleClass('collapsed');
			$(this).next('.accordion-content').toggleClass('expanded');
		}); 
		$('.expand-all').click(function() {
			$('.accordion h2').addClass('active');
			$('.accordion-content').addClass('expanded');
			$('.expand-all').removeClass('show');
			$('.collapse-all').addClass('show');
			$('.expand-collapse').removeClass('expand');
		});
		$('.collapse-all').click(function() {
			$('.accordion h2').removeClass('active');
			$('.accordion-content').removeClass('expanded');
			$('.expand-all').addClass('show');
			$('.collapse-all').removeClass('show');
			$('.expand-collapse').addClass('expand');
		});

		/*
		console.log('accordion rede');
		$('h2.active').click(this.closeAccordion.bind(this));
		$('h2.inactive').click(this.openAccordion.bind(this));     
		*/
	}
	// opened acccordion panel
	/*
	closeAccordion() {
		$('.expand-all').addClass('show');
		$('.collapse-all').removeClass('show');
		console.log(this);
		//$(this).removeClass('active');
		//$(this).addClass('inactive');
		//$(this).next('.accordion-content').removeClass('expanded');
		//$(this).next('.accordion-content').addClass('collapsed');
	} 

	// opened acccordion panel
	openAccordion() {
		$('.expand-all').addClass('show');
		$('.collapse-all').removeClass('show');
		console.log(this);
		//$(this).removeClass('inactive');
		//$(this).addClass('active');
		//$(this).next('.accordion-content').removeClass('collapsed');
		//$(this).next('.accordion-content').addClass('expanded');
	}
	*/ 
}
export default Accordion;  