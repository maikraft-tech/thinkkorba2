@extends('layouts.map')

@section('content')


<section id="contact"  >
    <div class="name-heading">
        <div class="row">
            <h2 style="font-family: 'Quicksand', 'sans-serif' !important;"> Contact Us </h2>
        </div>  
    </div>
    
        <div class="container" style="padding-top: 30px; position: relative;">
            <div class="row">
                <div class="col-md-6 col-sm-6 col-xs-12"> 
                    <!-- contact left side --> 
                    <div id="contact-left">
                            <h3>Locate Our Office</h3><br>
                            {!! $map['html'] !!}
                        <div id="offices">
                            <div class="row">
                                <div class="col-md-8">
                                    <div>

                                        <ul style="list-style: none;">
                                            <li >
                                                <h5 style="color: red; font-weight: 1; padding-bottom: 0;"><b>Location</b></h5>
                                                <span>Halges Financial Technologies Limited (Korba),
                                                   <br> No 2, Portuphy  Street,
                                                <br>Nii Owoo Avenue,
                                                <br> WestLands, Accra - Ghana</span>
                                            </li>
                                            <li>
                                                <h5 style="color: red; font-weight: 1; padding-bottom: 0;"><b>Phone</b></h5>
                                                <!-- <i class="fa fa-mobile"></i> -->
                                                <span>(+233) 20 040 4010</span>
                                            </li>
                                            <li>
                                                    <h5 style="color: red; font-weight: 1; padding-bottom: 0;"><b>Mailing Address</b></h5>
                                                <span> Halges Financial Technologies Limited,
                                                <br> P.O.Box GP 18376,
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
                            <h3>Have a Question?</h3>
                        <form action="{{ url('contactUs') }}" method="POST"><br>
                            <p>Please fill out the form and leave a message</p>
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
                            <div class="col-md-12 col-sm-12">
                            <div class="form-group">
                                <textarea class="form-control" name="message" id="message" placeholder="Message goes here"></textarea>
                            </div>
                            </div>
                            <div id="submit-btn">
                                <a href="#" class="btn btn-general" style="float:right" role="button" title="submit" class="background-color:#ed1944" type="submit">Submit</a>
                            </div>
                        </form>
                    </div>
                </div>
            </div> 

            
                
        </div>
</section>

@endsection