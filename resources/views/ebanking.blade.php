@extends('layouts.custom')

@section('content')

<div class="name-heading">
    <h2>Korba E-Banking</h2>
</div>

<section style="height:94vh;">
   <div class="containerd">
        <div>
            <img src="img/other/ebanking-logo.png" class="img-responsive" style="position:absolute;z-index:1;"/>
        </div>

        <div>
            <div id="carousel-example-generic" class="carousel slide" data-ride="carousel">

                <ol class="carousel-indicators">
                    <li data-target="#carousel-example-generic" data-slide-to="0" class="active"></li>
                    <li data-target="#carousel-example-generic" data-slide-to="1"></li>
                </ol>

                <div class="carousel-inner" role="listbox" >
                    <div class="item active">
                        <img src="img/other/ebanking1.jpg" alt="first slide" class="img-responsive">
                    </div>
                    <div class="item ">
                        <img src="img/other/ebanking2.jpg" alt="second slide" class="img-responsive">
                    </div>
                    
                </div>

                <!-- <a class="left carousel-control" href="#carousel-example-generic" role="button" data-slide="prev">
                    <span class="glyphicon glyphicon-chevron-left" aria-hidden="true" style="font-size:40px;"></span>
                    <span class="sr-only">Previous</span>
                </a>
                <a class="right carousel-control" href="#carousel-example-generic" role="button" data-slide="next">
                    <span class="glyphicon glyphicon-chevron-right" aria-hidden="true" style="font-size:40px;"></span>
                    <span class="sr-only">Next</span>
                </a> -->
            </div>
        </div>
   </div>
    
    
    <div class="info-box-ebank">
        <p>
        Simplified access to remote banking services to clients of banking/financial Institutions anywhere, anytime.
        </p>
    </div> 

    
</section>
@endsection