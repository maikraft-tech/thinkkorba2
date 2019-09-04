@extends('layouts.map')

@section('content')


<section id="contact"  >
    <div class="name-heading">
        <div class="row">
            <h2 style="font-family: 'Merriweather' !important;"> Contact Us </h2>
        </div>  
    </div>
    
    <div class="content-box-md">
        <div class="container">
            <div class="row">
                <div class="col-md-6 col-sm-6 col-xs-12"> 
                    <!-- contact left side --><br>
                    <div id="contact-left">
                        <h3 class="text-right">Need help?</h3>
                        <div id="offices">
                            <div class="row">
                                <div class="col-md-6">
                                    <div>

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
                                                <span>(+233) 2040 4010</span>
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
                        <form action="{{ url('contactUs') }}" method="POST">
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
                                <textarea class="form-control" name="message" id="message" placeholder="Message goes here"></textarea>
                            </div>
                            <div id="submit-btn">
                                <a href="#" class="btn btn-general" role="button" title="submit" class="background-color:#444141ed" type="submit">Submit</a>
                            </div>
                        </form>
                    </div>
                </div>
            </div> 

            
                
        </div>

        <div class="container-fluid">
           
                {!! $map['html'] !!}
            
        </div>
    </div>
</section>

@endsection