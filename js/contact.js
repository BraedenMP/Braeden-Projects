//CONTACT PAGE

$(window).scroll(function() {

	var wScroll = $(this).scrollTop();

	if(wScroll > $('.content').offset().top - ($(window).height() / 1.1)) {
		$('.animeLeft').addClass('fadeInLeft');
		$('.animeRight').addClass('fadeInRight');
	}

});

$(window).scroll(function() {

	var wScroll = $(this).scrollTop();

	if(wScroll > $('.content').offset().top - ($(window).height() / 1.0)) {

			$('.animeRightList').each(function(i){

			setTimeout(function(){
				$('.animeRightList').eq(i).addClass('fadeInRight');	
			}, 150 * (i+1));
		});
	}

});