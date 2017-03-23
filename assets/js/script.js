(function($){
	
  $('.flexslider').flexslider({
    animation: "slide"
  });



  $('.icon').click(function(){
  	$('.dropdown').slideToggle();
    $(this).children('.fa').toggle();
  	

  });

  $('.dropdown').click(function(){
  	$(this).slideUp();


  });


})(jQuery);

