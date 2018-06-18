import $ from 'jquery';
import Widget from '../../../../node_modules/jquery-ui/ui/widget.js';
import Position from '../../../../node_modules/jquery-ui/ui/position.js';
import FormResetMixin from '../../../../node_modules/jquery-ui/ui/form-reset-mixin.js';
import Keycode from '../../../../node_modules/jquery-ui/ui/keycode.js';
import Labels from '../../../../node_modules/jquery-ui/ui/labels.js';
import UniqueID from '../../../../node_modules/jquery-ui/ui/unique-id.js';
import Core from '../../../../node_modules/jquery-ui/ui/core.js';
import Effect from '../../../../node_modules/jquery-ui/ui/effect.js';
import Accordion from '../../../../node_modules/jquery-ui/ui/widgets/accordion.js';
import Tabs from '../../../../node_modules/jquery-ui/ui/widgets/tabs.js';
import Datepicker from '../../../../node_modules/jquery-ui/ui/widgets/datepicker.js';

class jqueryUI {
    constructor() {
        //this.expandCollapseAll = $('.expand-collapse-container span');
        $('#accordion').accordion({
            heightStyle: 'content',
            active: false,
            collapsible: true,
            header: 'h3',
            icons: {
                'header': 'ico expand',
                'activeHeader': 'ico collapse'
            },
        });
        //var cornerTop = $('#accordion').accordion('option', 'classes.ui-corner-top');
        //$('#accordion').accordion('option', 'cornerTop', null);

        $('#accordion.all-open').accordion({
            heightStyle: 'content',
            active: true,
            collapsible: true,
            header: 'h3',
            icons: false
        });
        $('#accordion.all-open h3').removeClass('ui-accordion-header-collapsed').addClass('ui-accordion-header-active').attr({ 'aria-selected': 'true', 'tabindex': '0' });
        //$('h3 .ui-icon').removeClass('ui-icon-triangle-1-e').addClass('ui-icon-triangle-1-s');
        $('#accordion.all-open .ui-accordion-content').addClass('ui-accordion-content-active').attr({ 'aria-expanded': 'true', 'aria-hidden': 'false' }).show();





        $('#accordion.first-open').accordion({
            heightStyle: 'content',
            collapsible: true
        });
        // set the initial state
        $('.collapse').hide();
        this.events();
        console.log($.ui.version);

























    }
    events() {
        $('.expand').click(function() {
            $(this).closest('div').find('h3').removeClass('ui-accordion-header-collapsed').addClass('ui-accordion-header-active').attr({ 'aria-selected': 'true', 'tabindex': '0' });
            //$('h3 .ui-icon').removeClass('ui-icon-triangle-1-e').addClass('ui-icon-triangle-1-s');
            $(this).closest('div').find('.ui-accordion-content').addClass('ui-accordion-content-active').attr({ 'aria-expanded': 'true', 'aria-hidden': 'false' }).show();
            $(this).hide();
            $(this).parent('span').find('.collapse').show();
        });
        $('.collapse').click(function() {
            $(this).closest('div').find('h3').removeClass('ui-accordion-header-active').addClass('ui-accordion-header-collapsed').attr({ 'aria-selected': 'false', 'tabindex': '-1' });
            //$('h3 .ui-icon').removeClass('ui-icon-triangle-1-s').addClass('ui-icon-triangle-1-e');
            $(this).closest('div').find('.ui-accordion-content').removeClass('ui-accordion-content-active').attr({ 'aria-expanded': 'false', 'aria-hidden': 'true' }).hide();
            $(this).hide();
            $(this).parent('span').find('.expand').show();
        });
    }
}
export default jqueryUI;