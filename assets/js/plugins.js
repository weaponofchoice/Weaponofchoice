// Avoid `console` errors in browsers that lack a console.
(function() {
    var method;
    var noop = function () {};
    var methods = [
        'assert', 'clear', 'count', 'debug', 'dir', 'dirxml', 'error',
        'exception', 'group', 'groupCollapsed', 'groupEnd', 'info', 'log',
        'markTimeline', 'profile', 'profileEnd', 'table', 'time', 'timeEnd',
        'timeStamp', 'trace', 'warn'
    ];
    var length = methods.length;
    var console = (window.console = window.console || {});

    while (length--) {
        method = methods[length];

        // Only stub undefined methods.
        if (!console[method]) {
            console[method] = noop;
        }
    }
}());

//Place any jQuery/helper plugins in here.
$.getScript("/assets/js/vendor/jquery.mosaicflow.min.js", function(){
	
});

$.getScript("/assets/js/vendor/waypoints.min.js", function(){
	
	$('#profile').waypoint(function(down) {
	  $('header').addClass('profile');
	  $('.profile-text').addClass('position-fixed position-top');
	}, { offset: '50px'});
	
	$('#profile').waypoint(function(up) {
	  $('header').removeClass();
	  $('.profile-text').removeClass('position-fixed position-top');
	}, { offset: '60px'});
	
	$('#work').waypoint(function(down) {
	  $('header').addClass('work secondary');
	  
	}, { offset: '50px'});
	
	$('#work').waypoint(function(up) {
	 $('footer').removeClass();
	  
	}, { offset: '95%'});
	
	$('#work').waypoint(function(down) {
	 $('footer').addClass('secondary');
	  
	}, { offset: '90%'});
	
	
	
	$('#work').waypoint(function(up) {
	  $('header').removeClass().addClass('profile');
	}, { offset: '60px'});
	
	
	$('#archive').waypoint(function(down) {
	  $('header').addClass('archive secondary');
	}, { offset: '50px'});
	
	$('#archive').waypoint(function(up) {
	  $('header').removeClass().addClass('work ');
	}, { offset: '60px'});
	
	$('#archive').waypoint(function(up) {
	 $('footer').removeClass('position-relative');
	  
	}, { offset: '95%'});
	
	$('#archive').waypoint(function(down) {
	 $('footer').addClass('position-relative');
	  
	}, { offset: '93%'});
	

});

$.getScript("/assets/js/vendor/jquery.backstretch.min.js", function(){
	$(".case01-container").backstretch("/img/fry.jpg");
	
});

$.getScript("/assets/js/vendor/jquery.lazyload.min.js", function(){
	$("img.img-responsive").lazyload();
	
});

$.getScript("/assets/js/vendor/retina-1.1.0.min.js", function(){
	
});