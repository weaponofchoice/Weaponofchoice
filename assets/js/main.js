

$(document).ready(function(){
	
	$('#profile').waypoint(function(down) {
	  $('header').addClass('profile');
	  $('.profile-text').addClass('position-fixed position-top');
	}, { offset: '50px'});

	$('#profile').waypoint(function(up) {
	  $('header').removeClass();
	  $('.profile-text').removeClass('position-fixed position-top');
	}, { offset: '60px'});

	$('#work').waypoint(function(down) {
		$('header').removeClass();
	  $('header').addClass('bg-transparent secondary');
  
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
	  $('header').removeClass().addClass('bg-transparent ');
	}, { offset: '60px'});

	$('#archive').waypoint(function(up) {
	 $('footer').removeClass('position-relative');
  
	}, { offset: '95%'});

	$('#archive').waypoint(function(down) {
	 $('footer').addClass('position-relative');
  
	}, { offset: '93%'});



	/*Article Waypoints*/
	$('#body').waypoint(function(down) {
		$('header').removeClass();
	  $('header').addClass('');
  
	}, { offset: '50px'});

	$('#body').waypoint(function(up) {
	  $('header').removeClass().addClass('bg-transparent secondary');
	}, { offset: '60px'});

)}