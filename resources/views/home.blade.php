
@extends('layouts.app')

@section('content')


    <!-- Home  -->
    <section id="home">
        <div id="carousel-example-generic" class="carousel slide" data-ride="carousel">
            <!-- Indicators -->
            <ol class="carousel-indicators">
                <li data-target="#carousel-example-generic" data-slide-to="0" class="active"></li>
                <li data-target="#carousel-example-generic" data-slide-to="1"></li>
                <li data-target="#carousel-example-generic" data-slide-to="2"></li>
                <li data-target="#carousel-example-generic" data-slide-to="3"></li>
            </ol>
            <!-- Wrapper for slides -->
            <div class="carousel-inner" role="listbox" >
                <div class="item active">
                    <img src="/img/home/Banner.jpg" alt="first slide" class="img-responsive">
                    
                </div>
                <div class="item ">
                    <img src="/img/home/web-mobile.jpg" alt="second slide" class="img-responsive">
                    
                </div>
                <div class="item">
                    <img src="/img/home/Banner1.jpg" alt="third slide" class="img-responsive">
                    
                </div>
                <div class="item">
                    <img src="img/home/web-app.jpg" alt="fourth slide" class="img-responsive">
                    
                </div>
               
            </div>
            <!-- Controls -->
            <a class="left carousel-control" href="#carousel-example-generic" role="button" data-slide="prev">
                <span class="glyphicon glyphicon-chevron-left" aria-hidden="true" style="font-size:40px;"></span>
                <span class="sr-only">Previous</span>
            </a>
            <a class="right carousel-control" href="#carousel-example-generic" role="button" data-slide="next">
                <span class="glyphicon glyphicon-chevron-right" aria-hidden="true" style="font-size:40px;"></span>
                <span class="sr-only">Next</span>
            </a>
        </div>
        
        
        <!-- Home Ends -->
    </section>

    <!-- About Korba section -->
    <section id="about">
        <div id="services-02">
            <div class="content-box-md">
                
                <div id="service-tab-1" class="service-tab">
                    <div class="container">
                        <div class="row">
                            <div class="col-md-6 col-sm-12 col-xs-12 col-lg-6 wow fadeInLeft">
                                <img src="img/home/image3.jpg" style="border-radius: 25px;margin-top: 50px;">
                            </div>
                            <div class="col-md-6 col-sm-12 col-xs-12 col-lg-6 wow fadeInRight">
                                <div class="tab-bg">
                                    <h3>About Korba</h3>
                                    <p>Korba is a cross-platform system that creates a need-fit access to users to perform financial transactions securely across all mobile networks and banks including rural banks via their multiple access points.
                                        <!-- <ul class="no_bullet" >
                                            <li class="korba-logo">Korba enables multiple access payments through payment cards and all mobile money wallets.</li>
                                            <li class="korba-logo">Thus on Korba, funds can be transferred from payment cards and all mobile money wallets and received into any bank account including rural banks, savings and loans and mobile money wallets.</li>
                                        </ul>     -->
                                    </p>
                                   

                                    <div id="services-02-btn-01" style="text-align: center;">
                                        <a class="btn btn-general btn-red hover-effect-all" href="/whatkorba" title="learn more" role="button">LEARN MORE</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                
                <div id="service-tab-2" class="service-tab">
                    <div class="container">
                        <div class="row">
                            <div class="col-md-6 col-sm-12 col-xs-12 wow fadeInLeft">
                                <div class="tab-bg">
                                    <h3>Why Use Korba</h3>
                                    <p>
                                        <ul class="no_bullet" >
                                            <li class="korba-logo">We provide multiple payment access channels to the convienience of our clients.</li>
                                            <li class="korba-logo">Intergrated with all banks and telcos in Ghana Korba provides tailor-made payment solutions to meet your organizational needs.</li>
                                            <li class="korba-logo">No internet? No worries. With Korba, access to payment platforms is not limited to access to internet or sophisticated phones. Transactions can be performed with the most basic telephone technology. Just download the Korba App or dial *395#.</li>
                                            <!-- <li class="korba-logo">At Korba, our clients are our partners and their needs come first. With our dedicated proactive customer service team, your issue resolution is just a call away.</li>
                                            <li class="korba-logo">Korba has highly skilled professionals well equipped to develop new technology solutions and manage them to the maximum profitability of our clients be it individual or an organization.</li> -->
                                        </ul>
                                    </p>
                                    <div id="services-02-btn-02" style="text-align: center;">
                                        <a class="btn btn-general btn-red hover-effect-all" href="https://liveweb.korbaweb.com/" title="sign up" role="button">SIGN UP</a>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6 col-sm-12 col-xs-12 wow fadeInRight">
                                <img src="img/home/web-mobile.jpg" style="border-radius: 25px;margin-top: 70px;">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    

    

   
    <!-- Other products -->
    <section id="other-products">
        <div id="about-02">
            <div class="content-box-sm">
                <div class="vertical-heading">
                    <h2 style="text-align: center; margin-bottom: 5vh;">
                        <strong>Our Channels</strong> </h2>
                </div>
                <div class="container">
                    <div class="row">
                        <div class="col-md-4 col-sm-4 col-xs-12 wow fadeInLeft other-products">
                            
                            <div class="about-item text-center hover-effect-all" style="border-radius: 25px;height: 300px; padding-top:35px;" >
                                <!-- <div class="col-md-5 col-sm-5 col-xs-5">
                                    <h3>Web App</h3>
                                </div> -->
                                <div class="col-md-12 col-sm-12 col-xs-12">
                                    <h2>KORBA WEB</h2>
                                    <img src="img/logo/Laptop.png" class="other-products-img" style="height: 110px;">
                                    <h3>Visit <a href="https://liveweb.korbaweb.com/" target="_blank" style="border-bottom:0.5px solid red; color: red;">Now</a></h3>
                                </div>
                                
                            </div>
                        </div>

                        <div class="col-md-4 col-sm-4 col-xs-12 wow fadeInUp" data-wow-duration="2s">
                            
                            <div class="about-item text-center hover-effect-all" style="border-radius: 25px; height: 300px;padding-top:35px;">
                                <div class="col-md-12 col-sm-12 col-lg-12">
                                    <h2>KORBA MOBILE</h2>
                                    <div class="col-md-6 col-sm-6 col-xs-6" style="margin-top:50px;padding-left:40px;">  
                                        <a href="https://play.google.com/store/apps/details?id=com.pentiumtech.korba" target="_blank" > <img src="img/logo/Android.png" style="width:100px; margin-bottom: 5px;"></a>
                                        <a href="https://itunes.apple.com/gh/app/korba-app/id1123354947?mt=8" target="_blank"><img src="img/logo/Apple.png" style="width:100px;"></a>
                                    </div>
                                    <div class="col-md-6 col-sm-6 col-xs-6">
                                        <img src="img/logo/Services.png" class="other-products-img img-responsive" style="height: 160px;">
                                    </div>
                                </div>
                                
                                
                            </div> 
                        </div>

                        <div class="col-md-4 col-sm-4 col-xs-12 wow fadeInRight" data-wow-duration="2s">
                            
                            <div class="about-item text-center hover-effect-all" style="border-radius: 25px; height: 300px;padding-top:35px;">
                                <div class="col-md-12 col-sm-12 col-xs-12  ">
                                    <h2 >KORBA USSD</h2>
                                    <img src="img/logo/395ussd.png" class="other-products-img1 img-responsive">
                                </div>
                                
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-xs-0 col-sm-3 col-md-4"></div>
                        <div class="col-xs-12 col-sm-6 col-md-4 " style="margin: 30px;">
                            <img src="img/logo/Layer 1.png" class="other-channels-img hover-effect-all">
                            <img src="img/logo/Layer 2.png" class="other-channels-img hover-effect-all">
                            <img src="img/logo/Layer 3.png" class="other-channels-img hover-effect-all">
                            <img src="img/logo/Layer 4.png" class="other-channels-img hover-effect-all">
                            <img src="img/logo/Layer 5.png" class="other-channels-img hover-effect-all">
                            
                        </div>
                        <div class="col-xs-0 col-sm-3 col-md-4"></div>
                    </div>
                </div>
            </div>



            <div class="content-box-sm">
                <div class="vertical-heading">
                    <h2 style="margin-bottom: 5vh; text-align:center;">
                        <strong>Other Products</strong> </h2>
                </div>
                <div class="container">
                    <div class="row">
                        <div class="col-md-4 col-sm-4 col-xs-12 wow fadeInLeft other-products">
                            <div class="about-item text-center hover-effect-all" style="border-radius: 25px; min-height: 300px;">
                                <img src="img/other-products/korba-logo.jpg" class="other-products-img ">
                                <hr>
                                <h3>E-Business</h3>
                                <p>E-Business is a custom-made solution ready to be tailored for organisations that need real time...
                                </p>
                                <a class="btn  btn-lg btn-block btn-danger pro-button" href="/ebusiness" style="background: #ed1944;">Learn More</a>
                            </div>


                        </div>

                        <div class="col-md-4 col-sm-4 col-xs-12 wow fadeInUp" data-wow-duration="2s">
                            <div class="about-item text-center hover-effect-all" style="border-radius: 25px; min-height: 300px;">
                                <img src="img/other-products/enterprise.png" class="other-products-img">
                                <hr>
                                <h3>Korba Enterprise</h3>
                                <p>Korba enterprise creates the possibility for institutions to make bulk payments.This process involves debiting...<br/>
                                </p>
                                <a class="btn  btn-lg btn-block btn-danger pro-button" href="/enterprise" style="background: #ed1944;">Learn More</a>
                            </div>


                        </div>

                        <div class="col-md-4 col-sm-4 col-xs-12 wow fadeInRight">
                            <div class="about-item text-center hover-effect-all" style="border-radius: 25px; min-height: 300px;">
                                <img src="img/other-products/korba-exchange.jpg" class="other-products-img">
                                <hr>
                                <h3>Korba Exchange</h3>
                                <p>Korba Exchange is a uniquely designed platform for institutions that need payment functionalities...<br/>
                                </p>
                                <a class="btn  btn-lg btn-block btn-danger pro-button" href="/whitelabel" style="background: #ed1944;">Learn More</a>
                            </div>

                        </div>
                    </div>
                </div>
  
            </div>

            
            <div class="content-box-sm">
                <div class="container">
                    <div class="row">
                        <div class="col-md-12 text-center">
                            <div class="horizontal-heading ">
                                
                                <h2><strong>Our Happy Clients</strong></h2>
                            </div>
                        </div>
                    </div>
                    <div class="row wow bounceInLeft">
                        <div class="main_cbrand text-center roomy-100">
                            <div class="row">
                                <div class="col-md-2 col-sm-2 col-xs-12">
                                    <div class="cbrand_item m-bottom-2">
                                    </div>
                                </div>
                                <div class="col-md-2 col-sm-2 col-xs-12">
                                    <div class="cbrand_item m-bottom-2">
                                    </div>
                                </div>
                                <div class="col-md-2 col-sm-2 col-xs-12">
                                    <div class="cbrand_item m-bottom-2">
                                        <img src="/img/client/Prudential.jpg" alt="Prudential" style="width: 100%; min-height: 100px; max-height: 100px "/>
                                    </div>
                                </div>
                                <div class="col-md-2 col-sm-2 col-xs-12">
                                    <div class="cbrand_item m-bottom-2">
                                        <img src="/img/client/Mtn.jpg" alt="Mtn" style="min-height: 100px; max-height: 100px "/>
                                    </div>
                                </div>
                                <div class="col-md-2 col-sm-2 col-xs-12">
                                    <div class="cbrand_item m-bottom-2">
                                        <img src="/img/client/Busy.jpg" alt="Busy" style="min-height: 100px; max-height: 100px " />
                                    </div>
                                </div>
                                <div class="col-md-2 col-sm-2 col-xs-12">
                                    <div class="cbrand_item m-bottom-2">
                                        <img src="/img/client/Airtel.jpg" alt="Airtel" style="width: 100%; min-height: 100px; max-height: 100px "/>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-2 col-sm-2 col-xs-12">
                                    <div class="cbrand_item m-bottom-2">
                                        <img src="/img/client/Enterprise.jpg" alt="Enterprise" style="width: 100%; min-height: 100px; max-height: 100px "/>
                                    </div>
                                </div>
                                <div class="col-md-2 col-sm-2 col-xs-12">
                                    <div class="cbrand_item m-bottom-2">
                                        <img src="/img/client/Surfline.jpg" alt="Surfline" style="width: 100%; min-height: 100px; max-height: 100px "/>
                                    </div>
                                </div>
                                <div class="col-md-2 col-sm-2 col-xs-12">
                                    <div class="cbrand_item m-bottom-2">
                                        <img src="/img/client/UGCCU.jpg" alt="UGCCU" style="width: 100%; min-height: 100px; max-height: 100px "/>
                                    </div>
                                </div>
                                <div class="col-md-2 col-sm-2 col-xs-12">
                                    <div class="cbrand_item m-bottom-2">
                                        <img src="/img/client/Vodafone.jpg" alt="Vodafone" style="width: 100%; min-height: 100px; max-height: 100px "/>
                                    </div>
                                </div>
                            </div> 
                        </div>
                    </div><!-- End off row -->
                </div>
            </div>
        </div>
    </section>


@endsection
        

            

  
       

  
