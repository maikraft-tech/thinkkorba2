$(window).on('load',function(){
    $('.carousel').carousel({interval:2000});
    $('#status').fadeOut();
    $('#preloader').delay(250).fadeOut('slow')});
    
    $(function(){
        $("#team-members").owlCarousel({
            items:2,autoplay:!0,smartSpeed:700,loop:!0,
            autoplayHoverPause:!0,
            nav:!0,
            dots:!1,
            navText:['<i class="fa fa-angle-left"></i>','<i class="fa fa-angle-right"></i>'],
            responsive:{0:{items:1},
            480:{items:2}}})});
            
    $(function(){
        showHideNavigation();
        $(window).scroll(function(){showHideNavigation()});
        function showHideNavigation(){
            if($(window).scrollTop()>50){
                $("nav").addClass('white-nav-top');
                $("nav").addClass('navbar-fixed-top');
                $("nav").removeClass('navbar-fixed-bottom');
                $("#menu").addClass('menu-top');
                $("#menu").removeClass('menu-bottom');
                $(".navbar-brand img").attr("src","img/logo/logo-dark.png");
                $(".navbar-fixed-bottom").removecss('bottom','opx');
                $("#back-to-top").fadeIn()}else{$("nav").removeClass('white-nav-top');
                $("nav").addClass('navbar-fixed-bottom');
                $("nav").removeClass('navbar-fixed-top');
                $("#menu").addClass('menu-bottom');
                $("#menu").removeClass('menu-top');
                $(".navbar-brand img").attr("src","img/logo/logo.png");
                $("#back-to-top").fadeOut()}}});
                
                $(function(){
                    $("a.smooth-scroll").click(function(event){
                        event.preventDefault();
                        var section_id=$(this).attr("href");
                    $("html, body").animate({
                        scrollTop:$(section_id).offset().top-64},
                        1250,
                        "easeInOutExpo")})});
                        
                        $(function(){
                            new WOW().init()});
                            $(window).on('load',function(){
                                $("#home-heading-1").addClass("animated fadeInDown");
                                $("#home-heading-2").addClass("animated fadeInLeft");
                                $("#home-text").addClass("animated zoomIn");
                                $("#home-btn").addClass("animated zoomIn");
                                $("#arrow-down i").addClass("animated fadeInDown infinite")});
                                $(".header-menu li a").on("click",function(e){
                                    if(!$(this).parent().has("ul").length){return}
e.preventDefault();
if(!$(this).hasClass("active")){
    var currentLevel=$(this).closest('ul')
$("li ul",currentLevel).slideUp(300);
$("li a",currentLevel).removeClass("active");
$(this).next("ul").slideDown(300);
$(this).addClass("active")}
else{
    $(this).removeClass("active");
    $(this).next("ul").slideUp(300)}});
    
// $(".close").click(function(){
//     $("#menu").toggle()
// });
// $(document).mouseup(e => {
//     if (!$menu.is(e.target)
// $('body').on('click', function(event) {
//   var clickedOutside = $(event.target).closest('#menu-bar').length == 0;
//   if (clickedOutside && $body.hasClass('open')) {
//     $("#menu").toggle();
//   }
// })
// const $menu = $('.menu');

// $(document).mouseup(e => {
//    if (!$menu.is(e.target) // if the target of the click isn't the container...
//    && $menu.has(e.target).length === 0) // ... nor a descendant of the container
//    { $(".menu") }});

// $('.toggle').on('click', () => {
//     $("#menu").toggle();
// });
// $(".menu-bar").click(function(){
//     $("#menu").toggle()});


// $(".menu-bar").click(function(e) {
//     e.stopPropagation();
//     $("#menu").toggle(".menu-bar")
//   });
//   $("body").click(function(e) {
//     if ($("#menu").hasClass(".menu-bar")) {
//       $("#menu").stop().toggle()
//     }
//   });
const $menu = $('#menu');
$(".menu-bar").click(function() {
    // e.stopPropagation();
    $("#menu").toggle();
  });
  $("body").mouseup(e => {
       if (!$menu.is(e.target) // if the target of the click isn't the container...
       && $menu.has(e.target).length === 0){
      $("#menu").hide() }
    
  });
$(".close").click(function(){
    $("#menu").hide()
});
    var dropdown=document.querySelectorAll('.dropdown');var dropdownArray=Array.prototype.slice.call(dropdown,0);dropdownArray.forEach(function(el){var button=el.querySelector('a[data-toggle="dropdown"]'),menu=el.querySelector('.dropdown-menu'),arrow=button.querySelector('i.icon-arrow');button.onclick=function(event){if(!$(menu).hasClass('show')){$('.dropdown-menu').removeClass('show');$('.dropdown-menu').addClass('hide');$('i.icon-arrow').removeClass('open');$('i.icon-arrow').addClass('close');menu.classList.add('show');menu.classList.remove('hide');arrow.classList.add('open');arrow.classList.remove('close');event.preventDefault()}
else{menu.classList.remove('show');menu.classList.add('hide');arrow.classList.remove('open');arrow.classList.add('close');event.preventDefault()}}})
Element.prototype.hasClass=function(className){return this.className&&new RegExp("(^|\\s)"+className+"(\\s|$)").test(this.className)};var menuToggle=document.querySelector('[data-js="menu-toggle"]');var interval=setInterval(function(){menuToggle.click()},2000);document.body.addEventListener('click',function(){clearInterval(interval)});menuToggle.addEventListener('click',function(){document.body.classList.toggle('panel-open');menuToggle.classList.toggle('open')});var closePanel=document.querySelector('[data-js="hidden-panel-close"]');closePanel.addEventListener('click',function(){document.body.classList.remove('panel-open');menuToggle.classList.remove('open')})