{{-- @extends('layouts.custom') --}}
<!DOCTYPE HTML>
<!--
	Industrious by TEMPLATED
	templated.co @templatedco
	Released for free under the Creative Commons Attribution 3.0 license (templated.co/license)
-->

<html>
	<head>
		<title>KorbaCare</title>
		<meta charset="utf-8" />
		<meta name="viewport" content="width=device-width, initial-scale=1" />
		<meta name="description" content="" />
		<meta name="keywords" content="" />
        <link rel="stylesheet" href="css/main.css" />
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    </head>
    <style>
        body{
            font-family: 'Quicksand', sans-serif;
        }

        .ml1 {
        font-weight: 900;
        font-size: 3.5em;
        }

        .ml1 .letter {
        display: inline-block;
        line-height: 1em;
        }

        .ml1 .text-wrapper {
        position: relative;
        display: inline-block;
        padding-top: 0.1em;
        padding-right: 0.05em;
        padding-bottom: 0.15em;
        }

        .ml1 .line {
        opacity: 0;
        position: absolute;
        left: 0;
        height: 3px;
        width: 100%;
        background-color: #fff;
        transform-origin: 0 0;
        }

        .ml1 .line1 { top: 0; }
        .ml1 .line2 { bottom: 0; }

     
        
        footer p{
            color: #fff;
            line-height: 20px;
            margin: 0;
        }
        footer p span{
            color: #f4c613;
        }

        .pad {
            margin-top: 20px;
        }

        .footer {
            background: #000;
            width: 100%;
            color: #fff!important;
            text-align: center;
            position: absolute;
        }

        .footer ul {
            list-style-type: none;
            margin: 0;
            display: inline-block;
            align: center;
            padding: 0;
            overflow: hidden;
        }

        .footer ul li {
            color: #fff;
            /* float: right; */
            align: center;
            float: left;
                padding: 2px 5px;
        }


        .footer ul li a{
            padding-left: 8px;
            color: #fff;
        }

        #view{
                display: none;
            }

            .view2{
                display: none;
            }

        @media screen and (min-width:961px){
            footer .container{
                justify-content: space-between;
                display: flex;
                align-items: center;
                padding: 20px 0;
            }


            footer .container * {
                padding: 0!important;
            }

            footer .container p {
                margin: 0!important;
            }

            #view{
                display: block;
            }

            .view2{
                display: block;
            }
        }
    </style>
	<body class="is-preload">

		<!-- Header -->
			<header id="header"  style="background-color: white;">
                {{-- <a class="logo" href="index.html"></a> --}}
                <div class="col-md-3 col-sm-3 col-xs-3 col-lg-3">
                            <a href="home" style="color: red;font-size: 17px; font-weight: bold;" a>Home</a>
                        </div>
             {{-- <div id="view"> --}}
				<div id="view" style="margin-top: 10px; text-align: center;">
                    <div class="row grid-divider">
                        <a href="https://liveweb.korbaweb.com/" target="_blank" style="text-decoration: none;">
                            <span style="border-right: 2px solid red; margin-right: 10px; padding-right: 15px; padding-left: 5px; color: #61646b; font-size: 17px; font-weight: bold;">Login to Web</span></a>
                        <a href="https://livepartner.korbaweb.com/" target="_blank" style="text-decoration: none;">
                            <span style="color: red;font-size: 17px;  padding-left: 3px;font-weight: bold;">Partner Login</span></a>
                    </div>
                    
                </div>
                <div class="col-md-3 col-sm-3 col-xs-3 col-lg-3 hidden-xs view2" style="text-align:right;margin-top: 10px;text-align:right;">
                    <a class="pull-right" href="/" class="" style=" color:black;">
                        <img src="img/logo/korba-logo.png" alt="logo" style="width: 120px; color:black;">
                    </a>
                </div>
            {{-- </div> --}}
            
    
			</header>

		<!-- Nav -->
			{{-- <nav id="menu">
				<ul class="links">
					<li><a href="index.html">Home</a></li>
					<li><a href="elements.html">Elements</a></li>
					<li><a href="generic.html">Generic</a></li>
				</ul>
			</nav> --}}

		<!-- Banner -->
			<section id="banner">
				<div class="inner">
                    <h1 class="ml1">
                        <span class="text-wrapper">
                          <span class="line line1"></span>
                          <span class="letters">KorbaCare</span>
                          <span class="line line2"></span>
                        </span>
                      </h1>
                      
                    <a href="https://whatsapp.korba365.com/" class="fa fa-whatsapp fa-lg"></a>
                    <a href="https://twitter.com/korba365?lang=en"  class="fa fa-twitter fa-lg"></a>
                    <a href="https://www.facebook.com/1651367525182459/posts/2807412642911269/?app=fbl"  class="fa fa-facebook fa-lg"></a>
                    <a href="https://www.instagram.com/korba365/" class="fa fa-instagram fa-lg"></a>
                    <a href="https://www.youtube.com/channel/UCZjvpTkblEFK9b5VukBqO6g" class="fa fa-youtube fa-lg"></a>
                    <br><br><br><br>
                    <div class="container">
                        {{-- <h2>Button Styles</h2> --}}
                        <a href="korba_prudential" class="btn btn-lg">LIFE INSURANCE PACKAGES</a>
                        <a href="korbacare_faqs" class="btn btn-lg">HAVE A QUESTION?</a>   
                      </div>
            
                </div>
                
                
            
				<video autoplay loop muted playsinline src="images/banner.mp4"></video>
			</section>

		<!-- Highlights -->
			<section class="wrapper">
				<div class="inner">
					<header class="special">
                        <h2>about korbacare</h2>
                        <p>KorbaCare is a loyalty rewards program
                            designed to reward active users on the Korba transactional platform! 
                           
						In addition to offering customers the convenience of making purchases, paying bills and dues without having to visit the premises of any merchant; unlocking time for other valuable activities.
                          <br> We are giving you more value just because you have been loyal by your continuous transacting and doing business with us. This is our own way of saying thank you with unending free benefits.
                            
                            <br>
                           Join the Korba family and keep transacting to qualify for the amazing KorbaCare loyalty programme.<br>
                Dial USSD code *365#  , WhatsApp number 0242426186 or use Korba Mobile App or web (https://www.korba365.com/)</p>
					</header>
					
				</div>
            </section>
          
		<!-- CTA -->
			<section id="cta" class="wrapper">
				<div class="inner">
					<h2>TRANSACT NOW!</h2>
                    <p> Learn more about Korba on any of these platforms</p>
                     <a href="https://whatsapp.korba365.com/" class="fa fa-whatsapp fa-lg"></a>
                     <a href="https://twitter.com/korba365?lang=en"  class="fa fa-twitter fa-lg"></a>
                     <a href="https://www.facebook.com/1651367525182459/posts/2807412642911269/?app=fbl"  class="fa fa-facebook"></a>
                     <a href="https://www.instagram.com/korba365/" class="fa fa-instagram"></a>
                     <a href="https://www.youtube.com/channel/UCZjvpTkblEFK9b5VukBqO6g" class="fa fa-youtube"></a>
                    </div>
			</section>
    
            <footer  class="footer">
                <div class="container">
                    <div style="padding-top: 20px;">
                        <p style="font-size: 14px;">Copyright &copy; <span id="year"></span>. All Rights Reserved By
                            <span style="color:red;"> <br> Halges Financial Technologies Limited </span>
                        </p>
                    </div>
                    <div style="padding-bottom: 15px;">
                        <ul class="text-center">
                            <li>
                                <a href="/philosophy"> About</a> |</li>
                            <li>
                                <a href="/contactUs"> Support</a> |</li>
                            <li>
                                <a href="/privacypolicy"> Privacy Policy</a> |</li>
                            <li>
                                <a href="/terms"> Terms &amp; Conditions</a>
                            </li>
                        </ul>
                    </div>
                    <div style="padding: 20px 20px;">    
                        <a href="https://play.google.com/store/apps/details?id=com.pentiumtech.korba" target="_blank" ><img src="img/logo/Android.png" style="width: 50px;"></a>
                        <a href="https://itunes.apple.com/gh/app/korba-app/id1123354947?mt=8" target="_blank"><img src="img/logo/Apple.png" style="width: 50px;"></a>
                        <a href="https://www.facebook.com/korbaweb/" target="_blank"><img src="img/other/foot-fb.png" style="width: 20px;"></a>
                        <a href="https://www.instagram.com/korbaweb/?utm_source=ig_profile_share&igshid=19f6kkchj46rl" target="_blank"><img src="img/other/foot-ig.png" style="width: 20px;"></a>
                        <a href="http://twitter.com/korbaweb" target="_blank"><img src="img/other/foot-twitter.png" style="width: 20px;"></a>
                        <a href="https://www.youtube.com/channel/UCZjvpTkblEFK9b5VukBqO6g" target="_blank"><img src="img/other/foot-youtube.png" style="width: 20px;"></a>
                    </div>
                </div>
            </footer>
        </body>
    
   
        
    <!-- Scripts -->
			<script src="js/jquery.min.js"></script>
			<script src="js/browser.min.js"></script>
            <script src="js/breakpoints.min.js"></script>
            <script src="https://cdnjs.cloudflare.com/ajax/libs/animejs/2.0.2/anime.min.js"></script>

			<script src="js/util.js"></script>
            <script src="js/main.js"></script>
            <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
            <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
            <script>
                    document.getElementById("year").innerHTML = new Date().getFullYear();

                // Wrap every letter in a span
                    var textWrapper = document.querySelector('.ml1 .letters');
                    textWrapper.innerHTML = textWrapper.textContent.replace(/\S/g, "<span class='letter'>$&</span>");

                    anime.timeline({loop: true})
                    .add({
                        targets: '.ml1 .letter',
                        scale: [0.3,1],
                        opacity: [0,1],
                        translateZ: 0,
                        easing: "easeOutExpo",
                        duration: 600,
                        delay: (el, i) => 70 * (i+1)
                    }).add({
                        targets: '.ml1 .line',
                        scaleX: [0,1],
                        opacity: [0.5,1],
                        easing: "easeOutExpo",
                        duration: 700,
                        offset: '-=875',
                        delay: (el, i, l) => 80 * (l - i)
                    }).add({
                        targets: '.ml1',
                        opacity: 0,
                        duration: 1000,
                        easing: "easeOutExpo",
                        delay: 1000
                    });
            </script>
</html>