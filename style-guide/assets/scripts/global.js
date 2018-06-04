const $ = require("jquery");

import HeaderMenu from './modules/header-menu';
new HeaderMenu();

import HeaderSearch from './modules/header-search';
new HeaderSearch();

import ShrinkExpand from './modules/header-shrink-expand';
new ShrinkExpand();

import SocialSticker from './modules/social-sticker';
new SocialSticker();

import BookshelfSearch from './modules/bookshelf-search';
new BookshelfSearch();

import BxSlider from './modules/bxslider';
new BxSlider();

import Accordion from './modules/accordion';
//new Accordion();

import AnalysisProjections from './modules/analysis-projections';
new AnalysisProjections();

import ModuleScripts from './modules/modules';
new ModuleScripts();

import ScrollTo from './modules/scroll-to';
new ScrollTo();

import LocalScroll from './modules/local-scroll';
new LocalScroll();

// must use full path
const jqueryUiTabs = require('jquery-ui-dist/jquery-ui.js');
// jquery ui init files go below
//import PageTabs from './modules/page-tabs';
//new PageTabs();

import FirefoxHack from './modules/firefox-hack';
new FirefoxHack();