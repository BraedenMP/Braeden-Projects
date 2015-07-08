//Animsition - Adds Page Load Animation
$(".animsition").animsition();

function isMobile() {
   return /Android|webOS|iPhone|iPad|iPod|BlackBerry|IEMobile|Opera Mini/i.test(navigator.userAgent);
}

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

} else {	
	console.log('Mobile Detected, Plugins Auto Disable');

}