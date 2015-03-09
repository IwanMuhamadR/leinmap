$(function() {
	$('a.page-scroll').bind('click', function(event) {
		var $anchor = $(this);
		$('html, body').stop().animate({
			scrollTop: $($anchor.attr('href')).offset().top
		}, 1600, 'easeInOutExpo');
		event.preventDefault();
	});
});

$('#login-trigger').click(function(){
	$(this).next('#login-content').slideToggle();
	$(this).toggleClass('active');          

	if ($(this).hasClass('active')) $(this).find('span').html('&#x25B2;')
	  else $(this).find('span').html('&#x25BC;')
});

$(document).ready(function (){	
	// create a LatLng object containing the coordinate for the center of the map
	var latlng = new google.maps.LatLng(-6.873085, 107.613968);

	// prepare the map properties
	var options = {
		zoom: 15,
		center: latlng,
		mapTypeId: google.maps.MapTypeId.ROADMAP,
		navigationControl: true,
		mapTypeControl: false,
		scrollwheel: false,
		disableDoubleClickZoom: true
	};

	// initialize the map object
	var map = new google.maps.Map(document.getElementById('google_map'), options);

	// add Marker
	var marker1 = new google.maps.Marker({
		position: latlng, map: map
	});

	// add information window
	var infowindow = new google.maps.InfoWindow({
		content:  '<div class="info"><strong>Leinmap</strong><br>Jl. Cisitu VI No. 194<br> Bandung, West Java<br> Indonesia</div>'
	});
	
	infowindow.open(map, marker1);
});