import $ from 'jquery';
import Widget from '../../../../node_modules/jquery-ui/ui/widget.js';
import Core from '../../../../node_modules/jquery-ui/ui/core.js';
import Effect from '../../../../node_modules/jquery-ui/ui/effect.js';
import Accordion from '../../../../node_modules/jquery-ui/ui/widgets/accordion.js';


class jqueryUI {
    constructor() {
        //this.expandCollapseAll = $('.expand-collapse-container span');
        $("#accordion").accordion({
            heightStyle: "content",
            active: false,
            collapsible: true
        });
        $("#accordion.all-open").accordion({
            heightStyle: "content",
            active: true,
            collapsible: true,
            header: "h3",
            //"activeHeader": "ui-icon-triangle-1-s",
            //collapsible: true
            //create: function(event, ui) {
            //    $('#accordion .ui-accordion-content').show();
            //}
        });
        $("#accordion.first-open").accordion({
            heightStyle: "content",
            collapsible: true
        });
        this.events();
        console.log($.ui.version);
    }

    events() {
        // Expand/Collapse all
        //this.expandCollapseAll.click(this.toggleContent.bind(this));  


        $('.expand-collapse-container span').click(function() {
            $('#accordion .ui-accordion-header:not(.ui-state-active)').next().slideToggle();
            $(this).text($(this).text() == 'Expand all' ? 'Collapse all' : 'Expand all');
            $(this).toggleClass('collapse-all');
            return false;
        });
        /*
 $("#accordion").accordion({collapsible:true, active:false});
    $('.open').click(function () {
        $('.ui-accordion-header').removeClass('ui-corner-all').addClass('ui-accordion-header-active ui-state-active ui-corner-top').attr({'aria-selected':'true','tabindex':'0'});
        $('.ui-accordion-header .ui-icon').removeClass('ui-icon-triangle-1-e').addClass('ui-icon-triangle-1-s');
        $('.ui-accordion-content').addClass('ui-accordion-content-active').attr({'aria-expanded':'true','aria-hidden':'false'}).show();
        $(this).hide();
        $('.close').show();
    });
    $('.close').click(function () {
        $('.ui-accordion-header').removeClass('ui-accordion-header-active ui-state-active ui-corner-top').addClass('ui-corner-all').attr({'aria-selected':'false','tabindex':'-1'});
        $('.ui-accordion-header .ui-icon').removeClass('ui-icon-triangle-1-s').addClass('ui-icon-triangle-1-e');
        $('.ui-accordion-content').removeClass('ui-accordion-content-active').attr({'aria-expanded':'false','aria-hidden':'true'}).hide();
        $(this).hide();
        $('.open').show();
    });
    $('.ui-accordion-header').click(function () {
        $('.open').show();
        $('.close').show();
    });

//header closed
ui-accordion-header-icon ui-icon ui-icon-triangle-1-e
ui-accordion-header-active

        */
    }
    /*
    toggleContent() {
        $('#accordion .ui-accordion-header:not(.ui-state-active)').next().slideToggle();
        $('#accordion h3').addClass('ui-accordion-header-active').removeClass('ui-accordion-header-collapsed');
        $(this).text($(this).text() == 'Expand all' ? 'Collapse all' : 'Expand all');
        $(this).toggleClass('collapse');
        return false;
    }
    */
}
export default jqueryUI;