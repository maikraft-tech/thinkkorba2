$(document).ready(function() {
    $("#menu").click(function(e) {
        e.stopPropagation();
        e.preventDefault();
        $(this).toggleClass("active");
        $(".berrymenu").toggleClass("active");
    });
	$(document).click(function(e){
      if(!e.target.closest("ul") && $(".berrymenu").hasClass("active")){
         $(".berrymenu").toggleClass("active");
         $(".toggle-nav").toggleClass("active");
      }
    })
	
});