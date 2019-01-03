
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


// /*=================
// |	|	|	Testimonials
// ================*/
// $(function(){
// 	$("#testimonial-slider").owlCarousel({
// 		items:1,
// 		autoplay:false,
// 		smartSpeed: 700,
// 		loop: true,
// 		autoplayHoverPause: true,
// 		nav: true,
// 		dots: false,
// 		navText: ['<i class="fa fa-angle-left"></i>','<i class="fa fa-angle-right"></i>']
// 	});
// });





/*=================
|	|	|	Clients
================*/
$(function(){
	$("#clients-list").owlCarousel({
		items:6,
		autoplay:true,
		smartSpeed: 700,
		loop: true,
		autoplayHoverPause: true,
		nav: true,
		dots: false,
		navText: ['<i class="fa fa-angle-left"></i>','<i class="fa fa-angle-right"></i>'],
		esponsive: {
			// breakpoint from 0 Up
			0: {
				items: 2
			},
			// breakpoint from 480 up
			480: {
				items: 3
			} ,
			// breakpoint from 768 up
			768: {
				items: 6
			}
		}
	});
});


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

	// 2. Add Marker
	// var marker = new google.maps.Marker({
	// 	position: myLatLng,
	// 	map: map,
	// 	 title: "Click to see Address"
	// });

	// 3. Add Info window
	// var infowindow = new google.maps.InfoWindow({
	// 	content = addressString
	// });

	// marker.addListener('click', function(){
	// 	infowindow.open(map,marker);
	// });

	// resize function
	// google.maps.event.addDomListener(window,'resize', function(){
	// 	var center = map.getCenter();
	// 	google.maps.event.trigger(map, 'resize');
	// 	map.setCenter(center);
	// });
// });


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


			// show dark logo
			$(".navbar-brand img").attr("src","img/logo/logo-dark.png");

			// show back to top button
			$("#back-to-top").fadeIn();
		} else {
			// hide white navigation bar
			$("nav").removeClass('white-nav-top');

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
$(function(){
	// show mobile navigation
	$("#mobile-nav-open-btn").click(function(){

		$("#mobile-nav").css("height","100%");
	});

	// hide mobile navigation
	$("#mobile-nav-close-btn, #mobile-nav a").click(function(){
		$("#mobile-nav").css("height","0%");
	});
});


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
			$('.dropdown-menu').removeClass('show');
			$('.dropdown-menu').addClass('hide');
			$('i.icon-arrow').removeClass('open');
			$('i.icon-arrow').addClass('close');
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




var menuToggle = document.querySelector('[data-js="menu-toggle"]');

// Remove this setInterval to trigger the open/close manually through the UI
var interval = setInterval(function() {
  menuToggle.click();
}, 2000);

// Clear the interval on any click
document.body.addEventListener('click', function () {
   clearInterval(interval);
});

menuToggle.addEventListener('click', function () {
  document.body.classList.toggle('panel-open');
  menuToggle.classList.toggle('open');
});

var closePanel = document.querySelector('[data-js="hidden-panel-close"]');

closePanel.addEventListener('click', function () {
  document.body.classList.remove('panel-open');
  menuToggle.classList.remove('open');
});