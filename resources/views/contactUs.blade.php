@extends('layouts.custom')

@section('content')

<section id="contact"  >
    <div class="name-heading">
        <div class="row">
            <h2> Contact Us </h2>
        </div>  
    </div>
    
    <div class="content-box-md">
        <div class="container">
            <div class="row">
                <div class="col-md-6 col-sm-6 col-xs-12"> 
                    <!-- contact left side -->
                    <div id="contact-left">
                        <div class="vertical-heading">
                            <h2 style="margin-bottom: 10px;">Need help?</h2>
                        </div>

                        <div id="offices">
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="office" style="box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2), 0 6px 20px 0 rgba(0, 0, 0, 0.19); width: 350px; padding-top: 15px;padding-bottom: 15px;">

                                        <ul style="list-style: none; margin-left: 40px;">
                                            <li >
                                                <h5 style="color: red; font-weight: 1; padding-bottom: 0;"><b>Location</b></h5>
                                                <span>1st Floor,Fodai Plaza,
                                                <br>Community 18 Junction
                                                <br>Baatsona, Accra</span>
                                            </li>
                                            <li>
                                                <h5 style="color: red; font-weight: 1; padding-bottom: 0;"><b>Phone</b></h5>
                                                <!-- <i class="fa fa-mobile"></i> -->
                                                <span>+233200404010</span>
                                            </li>
                                            <li>
                                                    <h5 style="color: red; font-weight: 1; padding-bottom: 0;"><b>Mailing Address</b></h5>
                                                <span>P.O.Box GP 18376,
                                                <br>Accra,Ghana.</span>
                                            </li>
                                            
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>

                    </div>
                </div>
                <div class="col-md-6 col-sm-6 col-xs-12">
                    <div id="contact-right">
                        <form>
                            <h3>Leave a Message</h3>
                            <p>Please fill out the form and we will get in touch soon</p>
                            <div class="row">
                            <div class="col-md-6 col-sm-6">
                                <div class="form-group">
                                <input type="text" name="username" class="form-control" id="name" placeholder="Enter your name here">
                                </div>
                            </div>
                            <div class="col-md-6 col-sm-6">
                                <div class="form-group">
                                <input type="email" name="email" class="form-control" id="email" placeholder="Enter your email here">
                                </div>
                            </div>

                            <div class="form-group">
                                <textarea class="form-control" id="message" placeholder="Message goes here"></textarea>
                            </div>
                            <div id="submit-btn">
                                <a href="#" class="btn btn-general" role="button" title="submit" class="background-color:#444141ed">Submit</a>
                            </div>
                        </form>
                    </div>
                </div>
            </div> 

            <!-- for google map -->
            <div class="row">
                <div>

                </div>
            </div> 
            <div id="map">

            </div>
                
        </div>

        <!-- <div class="container-fluid">
            <div class="row">
                <div id="map">

                </div>
            </div>
        </div> -->
    </div>
</section>

@endsection