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