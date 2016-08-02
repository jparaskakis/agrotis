jQuery(document).ready(function(){
  //Preloader
  jQuery(window).load(function() {
    jQuery("#loader").fadeOut();
    jQuery("#mask").delay(1000).fadeOut("slow");
  });
});
