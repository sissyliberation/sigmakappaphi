$(document).ready(function(){
	var h = 0;
	$('#wrap').children().each( function(){ var a = $(this).outerHeight(); h+=a; } );
	if(h > window.innerHeight - $('#footer').outerHeight()) {
		$('#wrap').css("padding","0 0 80px");
	}
	else{
		$('#wrap').css("padding","0px");
	}
	$('#slideshow').fadeSlideShow({
		PlayPauseElement: false,
		NextElement: false,
		PrevElement: false,
		ListElement: false
	});
});