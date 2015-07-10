function isMobile() {
   return /Android|webOS|iPhone|iPad|iPod|BlackBerry|IEMobile|Opera Mini/i.test(navigator.userAgent);
}



$(document).ready(function() {
  
  $(".animsition").animsition({
  
    inClass               :   'fade-in',
    outClass              :   'fade-out',
    inDuration            :    1500,
    outDuration           :    800,
    linkElement           :   '.animsition-link',
    // e.g. linkElement   :   'a:not([target="_blank"]):not([href^=#])'
    loading               :    true,
    loadingParentElement  :   'body', //animsition wrapper element
    loadingClass          :   'animsition-loading',
    unSupportCss          : [ 'animation-duration',
                              '-webkit-animation-duration',
                              '-o-animation-duration'
                            ],
    //"unSupportCss" option allows you to disable the "animsition" in case the css property in the array is not supported by your browser.
    //The default setting is to disable the "animsition" in a browser that does not support "animation-duration".
    
    overlay               :   false,
    
    overlayClass          :   'animsition-overlay-slide',
    overlayParentElement  :   'body'
  });
	$(".fontfx").letterfx({"fx":"fade","backwards":false,"timing":180,"fx_duration":"1000ms","letter_end":"restore","element_end":"restore"});
	
});




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

//HOME PAGE

//Fades in the first two paragraphs on home page
$(window).scroll(function() {

	var wScroll = $(this).scrollTop();


});

//Fades Up all the skills on the skill bar at different speeds
$(window).scroll(function() {

	var wScroll = $(this).scrollTop();

	if(wScroll > $('.firstRow').offset().top - ($(window).height() / 0.35)) {
		$('.animeUp').addClass('fadeInUp');
	}

	if(wScroll > $('.secondRow').offset().top - ($(window).height() / 1.0)) {
		$('.animeUpTwo').addClass('fadeInUp');
	}

	if(wScroll > $('.thirdRow').offset().top - ($(window).height() / 0.7)) {
		$('.animeUpThree').addClass('fadeInUp');
	}
});

} else {	
	console.log('Mobile Detected, Plugins Auto Disable');
}

