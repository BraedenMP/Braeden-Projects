function screenBig() {
  if ($(window).width() >= 600){
    console.log("screen big");
    return true;
  } else {
    console.log("screen small");
    return false;
  }
}

function isMobile() {
   return /Android|webOS|iPhone|iPad|iPod|BlackBerry|IEMobile|Opera Mini/i.test(navigator.userAgent);
}


//Animsition - Adds Page Load Animation
$(".animsition").animsition();


//Checks if mobile
if (!isMobile() && screenBig() == true ) {


 	//Paralax affect 


var pContainerHeight = $('header').height();

  $(window).scroll(function() {


  	var wScroll = $(this).scrollTop();

    if (wScroll <= pContainerHeight) {

  	 $('#paraOne').css({
  		'transform' : 'translate(0px, '+ wScroll /2.25 +'px)'
  	 });

  	console.log(wScroll);

    }
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