
$(window).on('load', function(){
	$('.carousel').carousel({
		interval: 2000
	});
	$('#status').fadeOut();
	$('#preloader').delay(350).fadeOut('slow');
});

/*=================
|	|	|	Team
================*/
$(function(){
	$("#team-members").owlCarousel({
		items:2,
		autoplay:true,
		smartSpeed: 700,
		loop: true,
		autoplayHoverPause: true,
		nav: true,
		dots: false,
		navText: ['<i class="fa fa-angle-left"></i>','<i class="fa fa-angle-right"></i>'],
		responsive: {
			// breakpoint from 0 Up
			0: {
				items: 1
			},
			// breakpoint from 480 up
			480: {
				items: 2
			} 
		}
	});
});

/*=================
|	|	|	Progress bars
================*/
$(function(){
	

	$("#progress-elements").waypoint(function(){
		$(".progress-bar").each(function(){
		$(this).animate({
			width: $(this).attr("aria-valuenow") + "%"
		},2000);
	});
		this.destroy();
	},{ 
		offset:'bottom-in-view'
	});
});

/*=================
|	|	|	Responsive tabs
================*/
$(function(){
	$("#services-tabs").responsiveTabs({
		animation: 'slide'
	});
});


/*=================
|	|	|	Portfolio Filtering
================*/
$(window).on('load', function(){

	// initialize isotope
	$("#isotope-container").isotope({
	});

	// filter items on button click
	$("#isotope-filters").on('click', 'button', function(){
		// get filter value
		var filterValue = $(this).attr('data-filter');
		$("#isotope-container").isotope({
			filter: filterValue
		});

		// active button
		$("#isotope-filters").find('.active').removeClass('active');
		$(this).addClass('active');
	});
});

/*=================
|	|	|	Magnifier
================*/
$(function(){
	$("#portfolio-wrapper").magnificPopup({
		delegate: 'a',
		type: 'image',
		gallery: {
			enabled: true
		}
	});
});






/*=================
|	|	|	Navigation menu
================*/
// Show and hide white Navigation
$(function(){
	// show/hide navbar on page load
	showHideNavigation();

	// show/hide navbar on scroll
	$(window).scroll(function(){
		showHideNavigation();
	});

	function showHideNavigation(){
		if($(window).scrollTop() > 50){
			//show white navigation bar
			
			
			$("nav").addClass('white-nav-top');
			$("nav").addClass('navbar-fixed-top');
			$("nav").removeClass('navbar-fixed-bottom');


			$("#menu").addClass('menu-top');
			$("#menu").removeClass('menu-bottom');

			// show dark logo
			$(".navbar-brand img").attr("src","img/logo/logo-dark.png");

			// $(".navbar-fixed-bottom").addcss('top','opx');
			$(".navbar-fixed-bottom").removecss('bottom','opx');

			// show back to top button
			$("#back-to-top").fadeIn();
		} else {
			// hide white navigation bar
			$("nav").removeClass('white-nav-top');
			$("nav").addClass('navbar-fixed-bottom');			
			$("nav").removeClass('navbar-fixed-top');


			$("#menu").addClass('menu-bottom');
			$("#menu").removeClass('menu-top');
			// show normal logo
			$(".navbar-brand img").attr("src","img/logo/logo.png");

			// hide back to top button
			$("#back-to-top").fadeOut();
		}
	}
});


/*=================
|	|	|	Smooth Scrolling
================*/
$(function(){
	$("a.smooth-scroll").click(function(event){
		event.preventDefault();

		// get section id like #about, #services, #work
		var section_id = $(this).attr("href");

		$("html, body").animate({
			// get vertical scroll position of section
			scrollTop: $(section_id).offset().top - 64
		}, 1250, "easeInOutExpo");
	});
});


/*=================
|	|	|	Mobile menu
================*/
// $(function(){
// 	// show mobile navigation
// 	$("#mobile-nav-open-btn").click(function(){

// 		$("#berrymenu").css("height","100%");
// 		$("#berrymenu").css("width","100%");
// 	});

// 	// hide mobile navigation
// 	$("#mobile-nav-close-btn, #mobile-nav a").click(function(){
// 		$("#mobile-nav").css("height","0%");
		
// 	});
// });


/*=================
|	|	|	Animation with wowJs
================*/
$(function(){
	new WOW().init();
});

// home animation on page load
$(window).on('load', function(){
	$("#home-heading-1").addClass("animated fadeInDown");
	$("#home-heading-2").addClass("animated fadeInLeft");
	$("#home-text").addClass("animated zoomIn");
	$("#home-btn").addClass("animated zoomIn");
	$("#arrow-down i").addClass("animated fadeInDown infinite");
});



$(".header-menu li a").on("click", function (e) {
	//allow links to be followed if they don't have a sub-menu
	if ( !$(this).parent().has("ul").length ) { return; }

	//we have a sub-menu, so stop the link from being followed
	e.preventDefault();

	if(!$(this).hasClass("active")) {
		//we need to know which 'level' we're on 
		var currentLevel = $(this).closest('ul')
		$("li ul", currentLevel).slideUp(300);
		$("li a", currentLevel).removeClass("active");

		// open our new menu and add the open class
		$(this).next("ul").slideDown(300);
		$(this).addClass("active");
	} else {
		$(this).removeClass("active");
		$(this).next("ul").slideUp(300);
    }
});


$(".close").click(function(){
    $("#menu").toggle();
});

$(".menu-bar").click(function(){
    $("#menu").toggle();
});




// from gino on side menu
var dropdown = document.querySelectorAll('.dropdown');
var dropdownArray = Array.prototype.slice.call(dropdown,0);
dropdownArray.forEach(function(el){
	var button = el.querySelector('a[data-toggle="dropdown"]'),
			menu = el.querySelector('.dropdown-menu'),
			arrow = button.querySelector('i.icon-arrow');

	button.onclick = function(event) {
		if(!$(menu).hasClass('show')) {
			menu.classList.add('show');
			menu.classList.remove('hide');
			arrow.classList.add('open');
			arrow.classList.remove('close');
			event.preventDefault();
		}
		else {
			menu.classList.remove('show');
			menu.classList.add('hide');
			arrow.classList.remove('open');
			arrow.classList.add('close');
			event.preventDefault();
		}
	};
})

Element.prototype.hasClass = function(className) {
    return this.className && new RegExp("(^|\\s)" + className + "(\\s|$)").test(this.className);
};




/*=================
|	|	|	Google Map
================*/
// $(window).on('load', function(){
// 	var addressString = "Awoshie Baah yard";
// 	var myLatLng = {
// 		lat: 40.712685,
// 		lng: -74005920
// 	};

// 	// 1 Render Map
// 	var map = new google.maps.Map(document.getElementById('map'),{
// 		zoom: 11,
// 		center: myLatLng
// 	});

// });