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
