

function isMobile() {
   return /Android|webOS|iPhone|iPad|iPod|BlackBerry|IEMobile|Opera Mini/i.test(navigator.userAgent);
}
//Animsition - Adds Page Load Animation
$(".animsition").animsition();

//Checks if mobile
if (!isMobile()) {
//Paralax affect 
$(window).scroll(function() {

	var wScroll = $(this).scrollTop();

	$('#paraOne').css({
		'transform' : 'translate(0px, -'+ wScroll /2.5 +'px)'
	});
	console.log(wScroll);
});

//ABOUT PAGE

$(window).scroll(function() {

	var wScroll = $(this).scrollTop();

	if(wScroll > $('.who').offset().top - ($(window).height() / 1.1)) {
		$('.animeUpOne').addClass('fadeInUp');
	}

    if(wScroll > $('.what').offset().top - ($(window).height() / 1.1)) {
		$('.animeUpTwo').addClass('fadeInUp');
	}

});

$(window).scroll(function() {

	var wScroll = $(this).scrollTop();

	if(wScroll > $('.firstRow').offset().top - ($(window).height() / 1.0)) {
		$('.animeLeft').addClass('fadeInLeft');
		$('.animeRight').addClass('fadeInRight');
	}

});

$(window).scroll(function() {

	var wScroll = $(this).scrollTop();

	if(wScroll > $('.secondRow').offset().top - ($(window).height() / 0.9)) {
		$('.animeLeftSecond').addClass('fadeInLeft');
		$('.animeRightSecond').addClass('fadeInRight');
	}

});
} else {	
	console.log('Mobile Detected, Plugins Auto Disable');

}
