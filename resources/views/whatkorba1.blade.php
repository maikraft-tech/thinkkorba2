@extends('layouts.custom')

@section('content')
<link rel="stylesheet" type="text/css" href="css/onepage-scroll.css">
<style>
    body {
    font-size: 12px;
    }

    h1 {
    margin-top: 0;
    font-family: 'Montserrat', sans-serif;
    font-weight: 400;
    font-size: 20px;
    }

    .pca-hold.iphone-6 {
    width: 154px;
    padding: 3px;
    border-radius: 16.95px;
    overflow: hidden;
    }

    .pca-hold.iphone-6 .pca-main {
    display: block;
    position: relative;
    background-color: #1D1F20;
    border: 4.5px solid #1d2d2d;
    border-top: 34.5px solid #1d2d2d;
    border-bottom: 35.4px solid #1d2d2d;
    border-radius: 16.95px;
    height: 307.8px;
    box-shadow: 0 0 0 1.5px #C6C7CA;
    }

    .pca-hold.iphone-6.iphone-6--on .pca-main {
    background-color: #efefef;
    }

    .pca-hold.iphone-6 .pca-main:after {
    content: '';
    position: absolute;
    top: -19.5px;
    left: 55%;
    -webkit-transform: translate(-50%, 0);
    transform: translate(-50%, 0);
    width: 4.5px;
    height: 4.5px;
    background-color: #959595;
    border-radius: 100%;
    -webkit-transform: translate(-27px, 0);
    transform: translate(-27px, 0);
    }

    .pca-hold.iphone-6 .pca-main:before {
    content: "";
    position: absolute;
    top: -7.5px;
    left: 55%;
    opacity: 1;
    width: 30px;
    height: 1.5px;
    -webkit-transform: translate(-13.5px, -11.25px);
    transform: translate(-13.5px, -11.25px);
    border-radius: 1.5px;
    background-color: #959595;
    }

    .pca-hold.iphone-6.iphone-6--on .pca-inner {
    display: block;
    height: 100%;
    box-shadow: 0 0 25px 0 rgba(255, 255, 255, 0.5);
    }

    .pca-hold.iphone-6 .pca-sub {
    display: block;
    text-align: center;
    position: relative;
    height: 0;
    }

    .pca-hold.iphone-6 .pca-sub .pca-bot {
    border-radius: 100%;
    width: 21px;
    height: 21px;
    display: block;
    margin: 0 auto;
    background-color: transparent;
    z-index: 2;
    box-shadow: 0 0 0 1.65px #636670;
    -webkit-transform: translate(0, -28.2px);
    transform: translate(0, -28.2px);
    }

    .pca-hold.circle-animation {
    width: 356px;
    }

    .pca-hold.circle-animation .pca-main {
    display: block;
    position: relative;
    background: linear-gradient(#A1E5E5, #1987AA);
    border: 10.68px solid #fff;
    border-top: 81.88px solid #fff;
    border-bottom: 84.016px solid #fff;
    border-radius: 40.228px;
    height: 730.512px;
    box-shadow: 0 0 0 3.56px #C6C7CA;
    }

    .pca-hold.circle-animation .pca-main:after {
    content: '';
    position: absolute;
    top: -46.28px;
    left: 55%;
    -webkit-transform: translate(-50%, 0);
    transform: translate(-50%, 0);
    width: 10.68px;
    height: 10.68px;
    background-color: #959595;
    border-radius: 100%;
    -webkit-transform: translate(-64.08px, 0);
    transform: translate(-64.08px, 0);
    }

    .pca-hold.circle-animation .pca-main:before {
    content: "";
    position: absolute;
    top: -17.8px;
    left: 55%;
    opacity: 1;
    width: 71.2px;
    height: 3.56px;
    -webkit-transform: translate(-32.04px, -26.7px);
    transform: translate(-32.04px, -26.7px);
    border-radius: 3.56px;
    background-color: #959595;
    }

    .pca-hold.circle-animation .pca-inner {
    display: block;
    height: 100%;
    overflow: hidden;
    }

    .pca-hold.circle-animation .pca-sub {
    display: block;
    text-align: center;
    position: relative;
    height: 0;
    }

    .pca-hold.circle-animation .pca-sub .pca-bot {
    border-radius: 100%;
    width: 49.84px;
    height: 49.84px;
    display: block;
    margin: 0 auto;
    background-color: transparent;
    z-index: 2;
    box-shadow: 0 0 0 3.916px #636670;
    -webkit-transform: translate(0, -66.928px);
    transform: translate(0, -66.928px);
    }

    .shine-effect:before {
    content: '';
    display: block;
    position: absolute;
    top: 0;
    left: -100%;
    z-index: 2;
    width: 50%;
    height: 100%;
    background-image: linear-gradient(to right, rgba(255, 255, 255, 0) 0%, rgba(255, 255, 255, 0.3) 100%);
    -webkit-transform: skewX(-25deg);
            transform: skewX(-25deg);
    }
    .shine-effect:hover:before {
    -webkit-animation: shine 1s;
            animation: shine 1s;
    }

    @-webkit-keyframes shine {
    100% {
        left: 150%;
    }
    }

    @keyframes shine {
    100% {
        left: 150%;
    }
    }
    section {
    position: relative;
    overflow: hidden;
    }
    section:nth-of-type(1) {
    background-color: #212023;
    color: #fff;
    }
    section:nth-of-type(1) p {
    color: #efefef;
    }
    section:nth-of-type(2) {
    background-color: #4591b8;
    color: #fff;
    }
    section:nth-of-type(2) p {
    color: #efefef;
    }
    section:nth-of-type(3) {
    background-color: #fff;
    color: #212023;
    }
    section:nth-of-type(3) p {
    color: #666;
    }
    section .bg-image {
    width: 100%;
    height: 125%;
    background-repeat: no-repeat;
    background-size: cover;
    background-position: 50% 25%;
    -webkit-filter: blur(4px);
            filter: blur(4px);
    -webkit-transform: translate3d(0, 25%, 0);
            transform: translate3d(0, 25%, 0);
    transition: -webkit-transform 1s ease;
    transition: transform 1s ease;
    transition: transform 1s ease, -webkit-transform 1s ease;
    }
    section .bg-image::before {
    content: '';
    width: 100%;
    height: 100%;
    position: absolute;
    top: 0;
    left: 0;
    background-color: rgba(0, 0, 0, 0.1);
    }

    .copy {
    width: 40%;
    max-width: 500px;
    padding: 0 15px;
    position: absolute;
    }

    .circle {
    width: 50px;
    height: 50px;
    margin-left: -25px;
    background: none;
    border-radius: 50%;
    -webkit-animation: circle 30s linear infinite alternate;
            animation: circle 30s linear infinite alternate;
    }

    @-webkit-keyframes circle {
    0% {
        box-shadow: rgba(255, 255, 255, 0.1) 160px 335px, rgba(255, 255, 255, 0.1) 120px 275px 0 12px, rgba(255, 255, 255, 0.1) 60px 355px 0 23px, rgba(255, 255, 255, 0.1) 230px 445px 0 -8px, rgba(255, 255, 255, 0.1) 60px 125px, rgba(255, 255, 255, 0.1) 260px 145px 0 12px, rgba(255, 255, 255, 0.1) 300px 145px 0 23px, rgba(255, 255, 255, 0.1) 100px 85px 0 -8px, rgba(255, 255, 255, 0.1) 350px 555px, rgba(255, 255, 255, 0.1) 350px 273px 0 -2px, rgba(255, 255, 255, 0.1) 150px 355px 0 23px, rgba(255, 255, 255, 0.1) 180px 205px 0 -8px, rgba(255, 255, 255, 0.1) 0px 0px 0 -8px, rgba(255, 255, 255, 0.1) 100px 555px 0 10px;
    }
    100% {
        box-shadow: rgba(255, 255, 255, 0.1) 70px 10px, rgba(255, 255, 255, 0.1) 300px 205px 0 12px, rgba(255, 255, 255, 0.1) 0px 155px 0 23px, rgba(255, 255, 255, 0.1) 330px 45px 0 -8px, rgba(255, 255, 255, 0.1) 460px 325px, rgba(255, 255, 255, 0.1) 0px 445px 0 12px, rgba(255, 255, 255, 0.1) 300px 145px 0 23px, rgba(255, 255, 255, 0.1) 100px 85px 0 -8px, rgba(255, 255, 255, 0.1) 50px 155px, rgba(255, 255, 255, 0.1) 150px 273px 0 -2px, rgba(255, 255, 255, 0.1) 0px 555px 0 23px, rgba(255, 255, 255, 0.1) 180px 5px 0 -8px, rgba(255, 255, 255, 0.1) 300px 555px 0 -8px, rgba(255, 255, 255, 0.1) 350px 355px 0 10px;
    }
    }

    @keyframes circle {
    0% {
        box-shadow: rgba(255, 255, 255, 0.1) 160px 335px, rgba(255, 255, 255, 0.1) 120px 275px 0 12px, rgba(255, 255, 255, 0.1) 60px 355px 0 23px, rgba(255, 255, 255, 0.1) 230px 445px 0 -8px, rgba(255, 255, 255, 0.1) 60px 125px, rgba(255, 255, 255, 0.1) 260px 145px 0 12px, rgba(255, 255, 255, 0.1) 300px 145px 0 23px, rgba(255, 255, 255, 0.1) 100px 85px 0 -8px, rgba(255, 255, 255, 0.1) 350px 555px, rgba(255, 255, 255, 0.1) 350px 273px 0 -2px, rgba(255, 255, 255, 0.1) 150px 355px 0 23px, rgba(255, 255, 255, 0.1) 180px 205px 0 -8px, rgba(255, 255, 255, 0.1) 0px 0px 0 -8px, rgba(255, 255, 255, 0.1) 100px 555px 0 10px;
    }
    100% {
        box-shadow: rgba(255, 255, 255, 0.1) 70px 10px, rgba(255, 255, 255, 0.1) 300px 205px 0 12px, rgba(255, 255, 255, 0.1) 0px 155px 0 23px, rgba(255, 255, 255, 0.1) 330px 45px 0 -8px, rgba(255, 255, 255, 0.1) 460px 325px, rgba(255, 255, 255, 0.1) 0px 445px 0 12px, rgba(255, 255, 255, 0.1) 300px 145px 0 23px, rgba(255, 255, 255, 0.1) 100px 85px 0 -8px, rgba(255, 255, 255, 0.1) 50px 155px, rgba(255, 255, 255, 0.1) 150px 273px 0 -2px, rgba(255, 255, 255, 0.1) 0px 555px 0 23px, rgba(255, 255, 255, 0.1) 180px 5px 0 -8px, rgba(255, 255, 255, 0.1) 300px 555px 0 -8px, rgba(255, 255, 255, 0.1) 350px 355px 0 10px;
    }
    }
    .layout--copy-right.active .bg-image {
    -webkit-transform: translate3d(0, 0, 0);
            transform: translate3d(0, 0, 0);
    }
    .layout--copy-right.active .iphone-6 {
    -webkit-transform: translate3d(-125%, -60%, 0);
            transform: translate3d(-125%, -60%, 0);
    }
    .layout--copy-right.active .iphone-6.iphone-6--on {
    -webkit-transform: translate3d(-100%, -40%, 0);
            transform: translate3d(-100%, -40%, 0);
    }
    .layout--copy-right .iphone-6 {
    margin-left: -10%;
    position: absolute;
    top: 50%;
    left: 50%;
    z-index: 1;
    -webkit-transform: translate3d(-125%, -75%, 0);
            transform: translate3d(-125%, -75%, 0);
    transition: -webkit-transform 1s ease;
    transition: transform 1s ease;
    transition: transform 1s ease, -webkit-transform 1s ease;
    }
    .layout--copy-right .iphone-6.iphone-6--on {
    z-index: 2;
    -webkit-transform: translate3d(-100%, -125%, 0);
            transform: translate3d(-100%, -125%, 0);
    }
    .layout--copy-right .copy {
    top: 50%;
    left: 50%;
    -webkit-transform: translateY(-50%);
            transform: translateY(-50%);
    }

    .layout--copy-top.active .pca-hold {
    -webkit-transform: translate3d(-50%, -30%, 0);
            transform: translate3d(-50%, -30%, 0);
    }
    .layout--copy-top .pca-hold {
    position: absolute;
    left: 50%;
    top: 50%;
    -webkit-transform: translate3d(-50%, 50%, 0);
            transform: translate3d(-50%, 50%, 0);
    transition: -webkit-transform 1s ease;
    transition: transform 1s ease;
    transition: transform 1s ease, -webkit-transform 1s ease;
    }
    .layout--copy-top .copy {
    width: 100%;
    top: 10%;
    left: 50%;
    -webkit-transform: translateX(-50%);
            transform: translateX(-50%);
    text-align: center;
    }

    .layout--copy-left.active .pca-hold {
    -webkit-transform: translate3d(-20%, -50%, 0) scale(0.5);
            transform: translate3d(-20%, -50%, 0) scale(0.5);
    }
    .layout--copy-left .pca-hold {
    position: absolute;
    top: 50%;
    left: 50%;
    -webkit-transform: translate3d(100%, -100%, 0);
            transform: translate3d(100%, -100%, 0);
    transition: -webkit-transform 1s ease;
    transition: transform 1s ease;
    transition: transform 1s ease, -webkit-transform 1s ease;
    }
    .layout--copy-left .copy {
    text-align: right;
    margin-left: -5%;
    top: 50%;
    left: 50%;
    -webkit-transform: translate(-100%, -50%);
            transform: translate(-100%, -50%);
    }

</style>

<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/onepage-scroll/1.3/jquery.onepage-scroll.js"></script>
<!-- <section  class="what-korba">
    <div class="name-heading">
        <h2> All about Korba<img src="img/logo/question.png" style="position: relative; float: right; width: 25px; padding-bottom: 10px;"></h2>
    </div>
    <div class="container">
        
        <div class="row what ">
            <div class="col-md-6 col-sm-6 col-lg-6">
                <img src="img/home/web-mobile.png" class="img-responsive">
            </div>
            <div class="col-md-6 col-sm-6 col-lg-6">
                <div class="row">
                    <div >
                        <p>
                            Korba is a cross-platform payment system that enables users to securely and congenially perform financial transactions across all the mobile money networks and banks including rural banks via their multiple access points.
                        </p>
                        <p>
                            Thus on KORBA, funds can be sent from Payment Cards(VISA,Master Card, Gh-Link etc.) or Mobile Money Wallet(Airtel, MTN, Tigo, Vodafone) and received into any Bank Account(including Rural Banks) or Mobile Money wallets. The settlement is simple, instant, congenial and secure.
                        </p>
                    </div>
                </div>

                <div class="row">
                    <div class="col-md-12 col-xs-12">
                            <h3><b>Why Use Korba?</b></h3>
                        <ul class="no_bullet">
                            <li class="korba-logo">On Korba, payments can be made from payment cards(VISA, Master Card, Gh-Link etc.) and mobile money wallet(Airtel, MTN, Tigo, Vodafone). </li>
                            <li class="korba-logo">Korba is integrated with all the Banks in Ghana, includingall Rural Banks and Mobile Financial Services provided by four of the Mobile Network Operators in Ghana. </li>
                            <li class="korba-logo">Korba enables Payments to be made directly into bank accounts of organizations on the platform without having to enter their accounts details.</li>
                            <li class="korba-logo">Korba enables clients to make payments via a unique USSD Shortcode (*395#) designed to suit our customers' needs without the use of the internet. </li>
                            <li class="korba-logo">Korba is neither a wallet, bank nor a payment system. Korba is an ENABLER.</li>
                            
                        </ul>
                    </div>
                    
                </div>
                
            </div>
            
        </div>
    </div>


    <div class="container">
        <div class="row what">
            <div class="col-md-6 col-sm-6 col-lg-6">
                <img src="img/other/image_2.jpg" class="img-responsive">
            </div>
            <div class="col-md-6 col-sm-6 col-lg-6">
                <div class="row">
                    <div >
                        <p>
                            Korba is a cross-platform payment system that enables users to securely and congenially perform financial transactions across all the mobile money networks and banks including rural banks via their multiple access points.
                        </p>
                    </div>
                </div>

                <div class="row">
                    <div class="content-box-md" class="who-korba ">
                        <div class="row">
                            <h3 style="margin-left:40px;margin-bottom:20px;"><b>Our Promise to Customers</b></h3>
                            <div class="col-md-6 col-xs-12 col-sm-6 col-lg-6" style="width: auto;margin-left: 30px;">
                                    
                                <ul class="no_bullet">
                                    <li class="korba-logo">To simplify the process of performing financial transactions irrespective of payment channel</li>
                                    <li class="korba-logo">To Save the long hours spent travelling around to make payments that take less than 10 minutes. </li>
                                    
                                </ul>
                            </div>
                            <div class="col-md-6 col-xs-12 col-sm-6 col-lg-6" style="width: auto;margin-left: 30px;">
                                <ul class="no_bullet">
                                    <li class="korba-logo">To Give our customers the time to focus on the essentials of life and celebrate the little details of life</li>
                                    <li class="korba-logo">To Restore value to the quality of life of the everyday person while staying committed to their obligations</li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </div>
     
</section> -->



<!-- <div class="main">
    <section>
        <div class="container">
                    
            <div class="row ">
                <div class="col-md-6 col-sm-6 col-lg-6">
                    <img src="img/home/web-mobile.png" class="img-responsive">
                </div>
                <div class="col-md-6 col-sm-6 col-lg-6">
                    <div class="row">
                        <div >
                            <p>
                                Korba is a cross-platform payment system that enables users to securely and congenially perform financial transactions across all the mobile money networks and banks including rural banks via their multiple access points.
                            </p>
                            <p>
                                Thus on KORBA, funds can be sent from Payment Cards(VISA,Master Card, Gh-Link etc.) or Mobile Money Wallet(Airtel, MTN, Tigo, Vodafone) and received into any Bank Account(including Rural Banks) or Mobile Money wallets. The settlement is simple, instant, congenial and secure.
                            </p>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-md-12 col-xs-12">
                                <h3><b>Why Use Korba?</b></h3>
                            <ul class="no_bullet">
                                <li class="korba-logo">On Korba, payments can be made from payment cards(VISA, Master Card, Gh-Link etc.) and mobile money wallet(Airtel, MTN, Tigo, Vodafone). </li>
                                <li class="korba-logo">Korba is integrated with all the Banks in Ghana, includingall Rural Banks and Mobile Financial Services provided by four of the Mobile Network Operators in Ghana. </li>
                                <li class="korba-logo">Korba enables Payments to be made directly into bank accounts of organizations on the platform without having to enter their accounts details.</li>
                                <li class="korba-logo">Korba enables clients to make payments via a unique USSD Shortcode (*395#) designed to suit our customers' needs without the use of the internet. </li>
                                <li class="korba-logo">Korba is neither a wallet, bank nor a payment system. Korba is an ENABLER.</li>
                                
                            </ul>
                        </div>
                        
                    </div>
                    
                </div>
                
            </div>
        </div>
    </section>


    <section>
        <div class="container">
            <div class="row what">
                <div class="col-md-6 col-sm-6 col-lg-6">
                    <img src="img/other/image_2.jpg" class="img-responsive">
                </div>
                <div class="col-md-6 col-sm-6 col-lg-6">
                    <div class="row">
                        <div >
                            <p>
                                Korba is a cross-platform payment system that enables users to securely and congenially perform financial transactions across all the mobile money networks and banks including rural banks via their multiple access points.
                            </p>
                        </div>
                    </div>

                    <div class="row">
                        <div class="content-box-md" class="who-korba ">
                            <div class="row">
                                <h3 style="margin-left:40px;margin-bottom:20px;"><b>Our Promise to Customers</b></h3>
                                <div class="col-md-6 col-xs-12 col-sm-6 col-lg-6" style="width: auto;margin-left: 30px;">
                                        
                                    <ul class="no_bullet">
                                        <li class="korba-logo">To simplify the process of performing financial transactions irrespective of payment channel</li>
                                        <li class="korba-logo">To Save the long hours spent travelling around to make payments that take less than 10 minutes. </li>
                                        
                                    </ul>
                                </div>
                                <div class="col-md-6 col-xs-12 col-sm-6 col-lg-6" style="width: auto;margin-left: 30px;">
                                    <ul class="no_bullet">
                                        <li class="korba-logo">To Give our customers the time to focus on the essentials of life and celebrate the little details of life</li>
                                        <li class="korba-logo">To Restore value to the quality of life of the everyday person while staying committed to their obligations</li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </section>
    

</div> -->




<main class="main">   
   <!-- section 1 -->
   <section class="layout--copy-right">
      <div class="bg-image" style="background-image: url('https://images.unsplash.com/photo-1438979315413-de5df30042a1?crop=entropy&fit=crop&fm=jpg&h=675&ixjsv=2.1.0&ixlib=rb-0.3.5&q=80&w=1375')"></div>
      
        <div class='iphone-6 '> 
            <div class='pca-main'> 
                <div >
                    <img src="img/home/web-mobile.png" class="img-responsive" style="max-width:600px;"/>
                </div> 
            </div> 
            <div class='pca-sub'> 
                <div class='pca-top'></div> 
                <div class='pca-mid'> 
                    <div class='pca-part'></div> 
                </div> 
                <div class='pca-bot'></div>
            </div>
        </div>
      
      <!-- <div class='iphone-6 pca-hold'> <div class='pca-main'> <div class='pca-inner'> </div> </div> <div class='pca-sub'> <div class='pca-top'></div> <div class='pca-mid'> <div class='pca-part'></div> </div> <div class='pca-bot'></div> </div> </div> -->

      <div class="copy">
         <h1>What is KORBA?</h1>
         <p>Korba is a cross-platform payment system that enables users to securely and congenially perform financial transactions across all the mobile money networks and banks including rural banks via their multiple access points.</p>
         <p>
            Thus on KORBA, funds can be sent from Payment Cards(VISA,Master Card, Gh-Link etc.) or Mobile Money Wallet(Airtel, MTN, Tigo, Vodafone) and received into any Bank Account(including Rural Banks) or Mobile Money wallets. The settlement is simple, instant, congenial and secure.
        </p>
      </div>
      
   </section>
   
   <!-- section 2 -->
   <section class="layout--copy-left">
      
        <div class='pca-hold circle-animation'>
            <div class='pca-main'> 
                <div > 
                    <div class="circle"></div> 
                </div> 
            </div> 
            
            <div class='pca-sub'>
                <div class='pca-top'></div> 
                <div class='pca-mid'> 
                    <div class='pca-part'></div> 
                </div> 
                <div class='pca-bot'></div> 
            </div> 
        </div>
      
      <div class="copy">
         <h1>Why Use KORBA?</h1>
         <p>
            Korba is a cross-platform payment system that enables users to securely and congenially perform financial transactions across all the mobile money networks and banks including rural banks via their multiple access points.
        </p>
      </div>
      
   </section>   

   <!-- section 3 -->
   <!-- <section class="layout--copy-top">
      
      <div class='iphone-6 pca-hold'> <div class='pca-main'> <div class='pca-inner'> </div> </div> <div class='pca-sub'> <div class='pca-top'></div> <div class='pca-mid'> <div class='pca-part'></div> </div> <div class='pca-bot'></div> </div> </div>
      
      <div class="copy">
         <h1>This is a header</h1>
         <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Ut in nisi metus. Donec aliquet molestie ornare.</p>
      </div>
      
   </section> -->
</main>s

<script>
    $(".main").onepage_scroll();
</script>

@endsection