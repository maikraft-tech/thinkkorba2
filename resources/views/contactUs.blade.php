@extends('layouts.custom')

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
                <div class="col-md-6"> 
                    <!-- contact left side -->
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
                <div class="col-md-6"> 
                        <!-- contact left side -->
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
</section>

@endsection