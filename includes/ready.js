$(document).ready(function(){
	var h = 0;
	$('#wrap').children().each( function(){ var a = $(this).outerHeight(); h+=a; } );
	if(h > window.innerHeight - $('#footer').outerHeight()) {
		$('#wrap').css("padding","0 0 80px");
	}
	else{
		$('#wrap').css("padding","0px");
	}
	console.log(window.location.pathname);
	$('#slideshow').fadeSlideShow({
		PlayPauseElement: false,
		NextElement: false,
		PrevElement: false,
		ListElement: false
	});
	$(".swipebox").swipebox({
		hideBarsDelay:0
	});
});