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

 	//Paralax Affect: Header

  var pContainerHeight = $('header').height();

  $(window).scroll(function() {


  	var wScroll = $(this).scrollTop();

    if (wScroll <= pContainerHeight) {

  	 $('.paraHead').css({
  		'transform' : 'translate(0px, '+ wScroll /2.25 +'px)'
  	 });

  	console.log(wScroll);

    }
  });



  //HOME PAGE

  //Fades Up all the paragraphs 

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

      //First promo window tint
      if(wScroll > $('.productCategoryOne').offset().top - $(window).height()){


          $('.productCategoryOne').css({'background-position':'left center'+ (wScroll - $('.productCategoryOne').offset().top) +'px'});
        

        var opacity = (wScroll - $('.productCategoryOne').offset().top + 900) / (wScroll / 2);

        $('.window-tint').css({'opacity': opacity});
      }

      //Second promo window tint
      if(wScroll > $('.productCategory').offset().top - $(window).height()){

        $('.productCategoryTwo').css({'background-position':'left center '+ (wScroll - $('.productCategoryTwo').offset().top) +'px'});

        var opacity = (wScroll - $('.productCategoryTwo').offset().top + 900) / (wScroll / 5);

        $('.window-tint').css({'opacity': opacity});
      }

    });

   
  

 

} else {	
	console.log('Mobile Detected, Plugins Auto Disable');


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

//Fades Up all the paragraphs 

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
    

    //First promo window tint

        $('.productCategoryOne').css({'background-position':'left center'+ (wScroll - $('.productCategoryOne').offset().top) + 0});

        $('.window-tint').css({'opacity': 1});


      //Second promo window tint

        $('.productCategoryTwo').css({'background-position':'left center '+ (wScroll - $('.productCategoryTwo').offset().top) + 0});

        $('.window-tint').css({'opacity': 1});
        
      });
  }



