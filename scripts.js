jQuery(document).ready(function(){
  // Spiderman drop in
  var spidey = jQuery("#spiderman");
   jQuery(window).scroll(function() {
     var scroll = jQuery(window).scrollTop();
        if (scroll >= window.innerHeight) {
           spidey.addClass("stuck");
         } else {
           spidey.removeClass("stuck");
         }
 });

 /* Hamburger */
 var hoverOrClick = function() {
   var dropdown = jQuery(".dropdown-content");
   if (dropdown.hasClass("visible")) {
     dropdown.removeClass("visible");
   }
   else {
     dropdown.addClass("visible");
   }
 }
 jQuery(".dropdown").click(hoverOrClick);
});


// Add cool alerts for clicking random stuff here like alert("spiderman is dropping in") after jQuery("p").click(function() {})
