$(document).ready(function() {
    $(".menu-bar").click(function(e) {
        e.stopPropagation();
        e.preventDefault();
        $(this).toggleClass("active");
        $(".berrymenu ul").toggleClass("active");
    });
	$(document).click(function(e){
      if(!e.target.closest("ul") && $(".berrymenu a").hasClass("active")){
         $(".berrymenu ul").toggleClass("active");
         $(".menu-bar").toggleClass("active");
      }
    })
	
});