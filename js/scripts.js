$(function(){
	console.log("this works");

	$('.fa-2x').on('click', function(){

		$('#menu-main-menu').toggleClass('show');
		$('.fa-2x').toggleClass('fa-bars');
		$('.fa-2x').toggleClass('fa-close');
	}); 

});

//	  $(window).scroll(function() {
//		 $(".social-links").each(function() {
//		      /* Check the location of each desired element */
//		      var objectBottom = $(this).offset().top + $(this).outerHeight();
//		      var windowBottom = $(window).scrollTop() + $(window).innerHeight();
		      
		      /* If the element is completely within bounds of the window, fade it in */
//		      if (objectBottom < windowBottom) { //object comes into view (scrolling down)
//		        if ($(this).css("opacity")==0) {$(this).fadeTo(500,1);}
//		      } else { //object goes out of view (scrolling up)
//		        if ($(this).css("opacity")==1) {$(this).fadeTo(500,0);}
//		      }
//   		});
//    });
