function isMobile() {
   return /Android|webOS|iPhone|iPad|iPod|BlackBerry|IEMobile|Opera Mini/i.test(navigator.userAgent);
}

function screenBig() {
  if ($(window).width() >= 600){
    console.log("screen big");
    return true;
  } else {
    console.log("screen small");
    return false;
  }
}






//Checks if mobile
if (!isMobile() && screenBig() == true ) {


$(document).ready(function() {
  
  //Animsition and letter fx
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

  $(".fontfx").letterfx({"fx":"fade","backwards":false,"timing":190,"fx_duration":"1200ms","letter_end":"restore","element_end":"restore"});
  
});

 	//Paralax Affect: Header

var pContainerHeight = $('header').height();

$(window).scroll(function() {

	var wScroll = $(this).scrollTop();

  if (wScroll <= pContainerHeight) {
	 $('.paraHead').css({
		'transform' : 'translate(0px, '+ wScroll /1.75 +'px)'
	 });
   
	 console.log(wScroll);

  }
});


//Product Parallax Scroll

$(window).scroll(function() {

	var wScroll = $(this).scrollTop();

	if(wScroll > $('.productRowOne').offset().top - ($(window).height() / 1.0)) {
    $('.productRowOne').addClass('fadeInUp');
  }

  if(wScroll > $('.productRowTwo').offset().top - ($(window).height() / 1.0)) {
    $('.productRowTwo').addClass('fadeInUp');
  }

  if(wScroll > $('.productRowThree').offset().top - ($(window).height() / 1.0)) {
    $('.productRowThree').addClass('fadeInUp');
  }

  if(wScroll > $('.productRowFour').offset().top - ($(window).height() / 0.95)) {
    $('.productRowfour').addClass('fadeInUp');
  }

}); 

} else {	
	console.log('Mobile Detected, Plugins Auto Disable');

  //Animsition and letter fx
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

  $(".fontfx").letterfx({"fx":"fade","backwards":false,"timing":190,"fx_duration":"1200ms","letter_end":"restore","element_end":"restore"});
  


//Product Parallax Scroll

$(window).scroll(function() {

  var wScroll = $(this).scrollTop();

  if(wScroll > $('.productRowOne').offset().top - ($(window).height() / 1.0)) {
    $('.productRowOne').addClass('fadeInUp');
  }

  if(wScroll > $('.productRowTwo').offset().top - ($(window).height() / 1.0)) {
    $('.productRowTwo').addClass('fadeInUp');
  }

  if(wScroll > $('.productRowThree').offset().top - ($(window).height() / 1.0)) {
    $('.productRowThree').addClass('fadeInUp');
  }

  if(wScroll > $('.productRowFour').offset().top - ($(window).height() / 0.95)) {
    $('.productRowfour').addClass('fadeInUp');
  }

}); 
}

//Show and Hide product descriptions with Hover


