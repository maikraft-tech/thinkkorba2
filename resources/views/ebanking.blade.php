@extends('layouts.custom')

@section('content')

<div class="name-heading">
    <h2>Korba E-Banking</h2>
</div>

<section style="height:90%;background-image: url('../img/other/E-Banking background.png') ;">
   
    
    <div class="info-box-ebank">
        <p>
        Simplified access to remote banking services to clients of banking/financial Institutions anywhere, anytime.
        </p>
    </div> 

    <div class="static">
        <img src="img/other/ebanking-logo.png" class="img-responsive"/>
    </div>

    <div class="dynamic">
        <div id="carousel-example-generic" class="carousel slide" data-ride="carousel">
            <!-- Indicators -->
            <ol class="carousel-indicators">
                <li data-target="#carousel-example-generic" data-slide-to="0" class="active"></li>
                <li data-target="#carousel-example-generic" data-slide-to="1"></li>
            </ol>
            <!-- Wrapper for slides -->
            <div class="carousel-inner" role="listbox" >
                <div class="item active">
                    <img src="img/other/ebanking1.png" alt="first slide" class="img-responsive">
                </div>
                <div class="item ">
                    <img src="img/other/ebanking2.png" alt="second slide" class="img-responsive">
                </div>
               
            </div>
            <!-- Controls -->
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
    
</section>
@endsection