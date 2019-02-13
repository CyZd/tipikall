/**
 *  Tipikall Wordpress Theme Custom JS
 * Created by PhpStorm.
 * User: Chrisentem
 * Date: 6/2/2019
 */

/** JS **/

// Init Materialize FAB button
document.addEventListener('DOMContentLoaded', function() {
    var elems = document.querySelectorAll('.fixed-action-btn');
    var instances = M.FloatingActionButton.init(elems, {
        toolbarEnabled: true
    });
});

new fullpage('#front-page', {
    anchors: ['page1', 'page2', 'page3', 'page4'],
    sectionsColor: ['#826C7F', '#A88FAC', '#D4B2D8', '#EFCEFA', '#FFF689'],
    navigation: true,
    // scrollOverflow: true,
    // scrollBar: true,
    // navigationPosition: 'right',
    // navigationTooltips: ['First page', 'Second page', 'Third and last page'],
});

/** JQuery **/

/**
 * Setting padding to avoid section content getting hide from header and footer
 *
 * @type {(function())|jQuery}
 */
var j = jQuery.noConflict();

j(document).ready(function(){
    var paddingTop = j('#top-nav-bar').height()+20;
    var paddingBottom = j('#bloc-footer').height()+20;
    j('.fp-tableCell').css({'padding-top':paddingTop,'padding-bottom':paddingBottom});
    // j('.fp-tableCell').css({'padding-top':'200px','padding-bottom':'200px'});
});