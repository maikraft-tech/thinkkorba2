$(window).on('load',function(){$('.carousel').carousel({interval:2000});$('#status').fadeOut();$('#preloader').delay(350).fadeOut('slow')});$(function(){$("#team-members").owlCarousel({items:2,autoplay:!0,smartSpeed:700,loop:!0,autoplayHoverPause:!0,nav:!0,dots:!1,navText:['<i class="fa fa-angle-left"></i>','<i class="fa fa-angle-right"></i>'],responsive:{0:{items:1},480:{items:2}}})});$(function(){$("#progress-elements").waypoint(function(){$(".progress-bar").each(function(){$(this).animate({width:$(this).attr("aria-valuenow")+"%"},2000)});this.destroy()},{offset:'bottom-in-view'})});$(function(){$("#services-tabs").responsiveTabs({animation:'slide'})});$(function(){$("#clients-list").owlCarousel({items:6,autoplay:!0,smartSpeed:700,loop:!0,autoplayHoverPause:!0,nav:!0,dots:!1,navText:['<i class="fa fa-angle-left"></i>','<i class="fa fa-angle-right"></i>'],esponsive:{0:{items:2},480:{items:3},768:{items:6}}})});$(function(){showHideNavigation();$(window).scroll(function(){showHideNavigation()});function showHideNavigation(){if($(window).scrollTop()>50){$("nav").addClass('white-nav-top');$(".navbar-brand img").attr("src","img/logo/logo-dark.png");$("#back-to-top").fadeIn()}else{$("nav").removeClass('white-nav-top');$(".navbar-brand img").attr("src","img/logo/logo.png");$("#back-to-top").fadeOut()}}});$(function(){$("a.smooth-scroll").click(function(event){event.preventDefault();var section_id=$(this).attr("href");$("html, body").animate({scrollTop:$(section_id).offset().top-64},1250,"easeInOutExpo")})});$(function(){$("#mobile-nav-open-btn").click(function(){$("#mobile-nav").css("height","100%")});$("#mobile-nav-close-btn, #mobile-nav a").click(function(){$("#mobile-nav").css("height","0%")})});$(function(){new WOW().init()});$(window).on('load',function(){$("#home-heading-1").addClass("animated fadeInDown");$("#home-heading-2").addClass("animated fadeInLeft");$("#home-text").addClass("animated zoomIn");$("#home-btn").addClass("animated zoomIn");$("#arrow-down i").addClass("animated fadeInDown infinite")});$(".header-menu li a").on("click",function(e){if(!$(this).parent().has("ul").length){return}
e.preventDefault();if(!$(this).hasClass("active")){var currentLevel=$(this).closest('ul')
$("li ul",currentLevel).slideUp(300);$("li a",currentLevel).removeClass("active");$(this).next("ul").slideDown(300);$(this).addClass("active")}else{$(this).removeClass("active");$(this).next("ul").slideUp(300)}});
// $(".close").click(function(){
//     $("#menu").toggle()});
    
//     $('body').click(function(e){
//       if ($('.menu-bar').hasClass('bar')) {
//       $(".menu").addClass('bar')
//     }});


    $(".menu-bar").click(function(){
        $("#menu").toggle()});
        
        var dropdown=document.querySelectorAll('.dropdown');var dropdownArray=Array.prototype.slice.call(dropdown,0);dropdownArray.forEach(function(el){var button=el.querySelector('a[data-toggle="dropdown"]'),menu=el.querySelector('.dropdown-menu'),arrow=button.querySelector('i.icon-arrow');button.onclick=function(event){if(!$(menu).hasClass('show')){$('.dropdown-menu').removeClass('show');$('.dropdown-menu').addClass('hide');$('i.icon-arrow').removeClass('open');$('i.icon-arrow').addClass('close');menu.classList.add('show');menu.classList.remove('hide');arrow.classList.add('open');arrow.classList.remove('close');event.preventDefault()}
else{menu.classList.remove('show');menu.classList.add('hide');arrow.classList.remove('open');arrow.classList.add('close');event.preventDefault()}}})
Element.prototype.hasClass=function(className){return this.className&&new RegExp("(^|\\s)"+className+"(\\s|$)").test(this.className)};
var menuToggle=document.querySelector('[data-js="menu-toggle"]');
var interval=setInterval(function(){menuToggle.click()},2000);
document.body.addEventListener('click',function(){clearInterval(interval)});

menuToggle.addEventListener('click',function(){document.body.classList.toggle('panel-open');
menuToggle.classList.toggle('open')});var closePanel=document.querySelector('[data-js="hidden-panel-close"]');closePanel.addEventListener('click',function(){document.body.classList.remove('panel-open');menuToggle.classList.remove('open')})