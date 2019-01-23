
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
                <li data-target="#carousel-example-generic" data-slide-to="4"></li>
            </ol>
            <!-- Wrapper for slides -->
            <div class="carousel-inner" role="listbox" >
                <div class="item active">
                    <img src="/img/home/ussd.png" alt="first slide" class="img-responsive">
                    
                </div>
                <div class="item ">
                    <img src="/img/home/web-mobile.png" alt="second slide" class="img-responsive">
                    
                </div>
                <div class="item">
                    <img src="/img/home/web-app.jpg" alt="third slide" class="img-responsive">
                    
                </div>
                <div class="item">
                    <img src="img/home/who-we-are.png" alt="fourth slide" class="img-responsive">
                    
                </div>
                <div class="item">
                    <img src="img/home/why-choose-us.png" alt="fifth slide" class="img-responsive">
                    
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
                                <img src="img/home/image3.jpg" style="border-radius: 25px;">
                            </div>
                            <div class="col-md-6 col-sm-12 col-xs-12 col-lg-6 wow fadeInRight">
                                <div class="tab-bg">
                                    <h3>About Korba</h3>
                                    <p>Korba is a cross-platform payment system that enables users to securely and congenially perform
                                        financial transactions across all the mobile money networks and banks including rural
                                        banks via their multiple access points.
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
                                            <li class="korba-logo">On Korba, payments can be made from payment cards (VISA, Master Card, Gh-Link etc) and mobile money wallet (Airtel, MTN, Tigo, Vodafone).
                                            </li>
                                            <li class="korba-logo">Korba is integrated with all the Banks in Ghana, including all Rural Banks and Mobile Financial Services provided by four of the Mobile Network Providers.</li>
                                            <li class="korba-logo">Korba enables payments to be made directly into bank accounts of organizations on the platform without having to enter their bank details.</li>
                                        </ul>
                                    </p>
                                    <div id="services-02-btn-02" style="text-align: center;">
                                        <a class="btn btn-general btn-red hover-effect-all" href="https://liveweb.korbaweb.com/" title="sign up" role="button">SIGN UP</a>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6 col-sm-12 col-xs-12 wow fadeInRight">
                                <img src="img/home/web-mobile.png" style="border-radius: 25px;margin: 30px;">
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
                            
                            <div class="about-item text-center hover-effect-all" style="border-radius: 25px;height: 300px; padding-top:25px;" >
                                <!-- <div class="col-md-5 col-sm-5 col-xs-5">
                                    <h3>Web App</h3>
                                </div> -->
                                <div class="col-md-12 col-sm-12 col-xs-12">
                                <h2>Web App</h2>
                                    <img src="img/logo/Laptop.png" class="other-products-img" style="height: 110px;">
                                    <h2>Visit <a href="https://liveweb.korbaweb.com/" target="_blank" style="border-bottom:0.5px solid red; color: red;">Now</a></h2>
                                </div>
                                
                            </div>
                        </div>

                        <div class="col-md-4 col-sm-4 col-xs-12 wow fadeInUp" data-wow-duration="2s">
                            
                            <div class="about-item text-center hover-effect-all" style="border-radius: 25px; height: 300px;padding-top:35px;">
                                <div class="col-md-6 col-sm-6 col-xs-6">
                                    <h2 style="margin-bottom:40px;">Mobile App</h2>
                                    <a href="https://play.google.com/store/apps/details?id=com.pentiumtech.korba" target="_blank" > <img src="img/logo/Android.png" style="width:100px; margin-bottom: 5px;"></a>
                                    <a href="https://itunes.apple.com/gh/app/korba-app/id1123354947?mt=8" target="_blank"><img src="img/logo/Apple.png" style="width:100px;"></a>
                                </div>
                                <div class="col-md-6 col-sm-6 col-xs-6">
                                    <img src="img/logo/Services.png" class="other-products-img img-responsive" style="height: 200px;">
                                </div>
                                
                            </div> 
                        </div>

                        <div class="col-md-4 col-sm-4 col-xs-12 wow fadeInRight" data-wow-duration="2s">
                            
                            <div class="about-item text-center hover-effect-all" style="border-radius: 25px; height: 300px;padding-top:35px;">
                                <div class="col-md-12 col-sm-12 col-xs-12  ">
                                    <h2 >USSD</h2>
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
                                <h3>E-Solution</h3>
                                <p>Bespoke remote banking platform to enable customers of financial institutions remotely access...
                                </p>
                                <a class="btn  btn-lg btn-block btn-danger pro-button" href="/ebusiness" style="background: #ed1944;">Learn More</a>
                            </div>


                        </div>

                        <div class="col-md-4 col-sm-4 col-xs-12 wow fadeInUp" data-wow-duration="2s">
                            <div class="about-item text-center hover-effect-all" style="border-radius: 25px; min-height: 300px;">
                                <img src="img/other-products/enterprise.png" class="other-products-img">
                                <hr>
                                <h3>Korba Enterprise</h3>
                                <p>This module enables partner institutions to make bulk payments to individuals irrespective
                                    of where financial...<br/>
                                </p>
                                <a class="btn  btn-lg btn-block btn-danger pro-button" href="/enterprise" style="background: #ed1944;">Learn More</a>
                            </div>


                        </div>

                        <div class="col-md-4 col-sm-4 col-xs-12 wow fadeInRight">
                            <div class="about-item text-center hover-effect-all" style="border-radius: 25px; min-height: 300px;">
                                <img src="img/other-products/korba-exchange.jpg" class="other-products-img">
                                <hr>
                                <h3>Korba Exchange</h3>
                                <p>The platform can also enable the provision of APIs with payment functionality to be plugged
                                    into systems ...<br/>
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
                            
                            <div class="col-md-12 col-sm-12 col-xs-12">
                                <div class="cbrand_item m-bottom-10">
                                    <img src="/img/client/clients.png" alt="first"  style="width:100%;"/>
                                </div>
                            </div>
                            
                        </div>
                    </div><!-- End off row -->
                </div>
            </div>
        </div>
    </section>


@endsection
        

            

  
       

  
