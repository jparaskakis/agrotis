jQuery(document).ready(function(){

  //Adding fixed position to header
  jQuery(document).scroll(function() {
    if (jQuery(document).scrollTop() >= 500) {
      jQuery('.navbar').addClass('navbar-fixed-top');
      jQuery('html').addClass('has-fixed-nav');
    } else {
      jQuery('.navbar').removeClass('navbar-fixed-top');
      jQuery('html').removeClass('has-fixed-nav');
    }
  });

  //Navigation Scrolling
  jQuery('a[href*=#]').click(function() {
    if (location.pathname.replace(/^\//,'') == this.pathname.replace(/^\//,'') && location.hostname == this.hostname) {
      var target = jQuery(this.hash);
      target = target.length ? target : jQuery('[name=' + this.hash.slice(1) +']');
      if (target.length) {
        jQuery('html,body').animate({
          scrollTop: target.offset().top
        }, 1000);
        return false;
      }
    }
  });

  //Close navbar on click
  jQuery('.nav a').on('click', function(){
    if (jQuery(window).width() < 768) {
      jQuery(".navbar-toggle").click();
    }
  });

  //Nav Selection
  jQuery('#nav').onePageNav({
    currentClass: 'active',
    scrollOffset: 50
  });

  //Home Text Slider
  jQuery('.home-slider').flexslider({
      animation: "slide",
      directionNav: false,
      controlNav: false,
      direction: "vertical",
      slideshowSpeed: 5000,
      animationSpeed: 1000,
      smoothHeight: true,
      useCSS: false
  });

  //Elements animation
  jQuery('.animated').appear(function(){
    var element = jQuery(this);
    var animation = element.data('animation');
    var animationDelay = element.data('delay');
    if (animationDelay) {
      setTimeout(function(){
        element.addClass( animation + " visible" );
        element.removeClass('hiding');
        if (element.hasClass('counter')) {
          element.children('.value').countTo();
        }
      }, animationDelay);
    }else {
      element.addClass( animation + " visible" );
      element.removeClass('hiding');
      if (element.hasClass('counter')) {
        element.children('.value').countTo();
      }
    }    
  },{accY: -150});

  

  //Pricing table selection
  jQuery('.plan').click(function(){
    jQuery('.plan').removeClass('selected');
    jQuery(this).addClass('selected');
  });

  //Testimonials slider
  jQuery('.testimonials-slider').flexslider({
    animation: "slide",
    directionNav: false,
    slideshowSpeed: 4000,
    useCSS: false
  });

  //Clients carousel
  jQuery("#clients-carousel").owlCarousel({
    items : 4,
    itemsDesktop : [1000,4],
    itemsDesktopSmall : [900,3],
    itemsTablet: [600,2],
    itemsMobile : false,
    autoPlay: 4000,
    pagination: false
  });
 
    trimString = jQuery('body .fa').text();
    var re = new RegExp(String.fromCharCode(45), "g");
    trimString = jQuery.trim(trimString.replace(re, ""));
    jQuery('body .fa').html(trimString);
	
	// Fix IE9
	jQuery('.catItemIntroText iframe').each(function(){
		var url = jQuery(this).attr("src");
		jQuery(this).attr("src",url+"?wmode=transparent");
	});
	jQuery('.itemIntroText iframe').each(function(){
		var url = jQuery(this).attr("src");
		jQuery(this).attr("src",url+"?wmode=transparent");
	});

});

jQuery(document).ready(function(){
  jQuery(".team-photo").click(function(){
    jQuery(this).find(".team-overlay").show();
  });
});


 if (typeof jQuery != 'undefined' && typeof MooTools != 'undefined' ) {
    Element.implement({
        slide: function(how, mode){
            return this;
        }
    });
}

jQuery(document).ready(function(){
	var with_win = jQuery(window).innerWidth();	
	if(with_win < 768){
		jQuery('#navigation ul li a').click(function(){
			jQuery('#navigation').removeClass('in');
		});
	}
});
