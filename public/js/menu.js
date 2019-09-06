$(document).ready(function() {
    $("#menu").click(function(e) {
        e.stopPropagation();
        e.preventDefault();
        $(this).toggleClass("active");
        $(".berrymenu").toggleClass("active");
    });
	$(document).click(function(e){
      if(!e.target.closest("ul") && $(".menu a").hasClass("active")){
         $(".berrymenu").toggleClass("active");
         $(".toggle-nav").toggleClass("active");
      }
    })
	
});