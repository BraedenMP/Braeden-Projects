//Paralax affect , yet to be using it.
$(window).scroll(function() {

	var wScroll = $(this).scrollTop();

	$('.paraOne').css({
		'transform' : 'translate(0px,'+ wScroll /2 +'px)'
	});
	console.log(wScroll);
})

//HOME PAGE

//Fades in the first two paragraphs on home page
$(window).scroll(function() {

	var wScroll = $(this).scrollTop();

	if(wScroll > $('.content').offset().top - ($(window).height() / 1.1)) {
		$('.animeLeft').addClass('fadeInLeft');
		$('.animeRight').addClass('fadeInRight');
	}

});

//Fades Up all the skills on the skill bar at different speeds
$(window).scroll(function() {

	var wScroll = $(this).scrollTop();

	if(wScroll > $('.skillBar').offset().top - ($(window).height() / 0.65)) {
			$('.animeUp').each(function(i){

			setTimeout(function(){
				$('.animeUp').eq(i).addClass('fadeInUp');	
			}, 150 * (i+1));
		});
	}

});


$('.nav').sticky();






