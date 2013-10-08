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

//$.getScript("/assets/js/vendor/waypoints.min.js", function(){
	
	
	

//});

//$.getScript("/assets/js/vendor/jquery.backstretch.min.js", function(){
	 
	// ** not using anymre
	
	//});


$.getScript("/assets/js/vendor/jquery.lazyload.min.js", function(){
	$("img.img-responsive").lazyload();
	
});

$.getScript("/assets/js/vendor/retina-1.1.0.min.js", function(){
	
});

$.getScript("/assets/js/vendor/bootstrap.min.js", function(){
	$('body').scrollspy({ target: '.main-nav' })
});

$.getScript("/assets/js/vendor/jquery.colorbox-min.js", function(){
	$(".various").colorbox({maxWidth:"100%", maxHeight:"100%", width:false, height: false, innerWidth: false, innerHeight: "100%", reposition: "true", scalePhotos:"true", });
});
$.getScript("/assets/js/vendor/jquery.scrollTo-1.4.3.1-min.js", function(){
	
});

$.getScript("/assets/js/vendor/jquery.localscroll-1.2.7-min.js", function(){
	 $('.main-nav ').localScroll();
});






