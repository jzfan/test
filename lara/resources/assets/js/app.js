//import jquery
window.$ = window.jQuery = require('jquery')
//import  bootstrap.js
require('bootstrap-sass');

//test if ok in browser ?
$( document ).ready(function() {
    console.log($.fn.tooltip.Constructor.VERSION);
});