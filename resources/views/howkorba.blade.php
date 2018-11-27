@extends('layouts.custom')

@section('content')

<section>
    <div class="name-heading">
        <h2> How Korba Works</h2>
    </div>
    <div class="container-fluid" style="padding-top:40px;padding-bottom:80px;">
        <div class="row" style="padding-left: 40px;padding-right: 20px;">
            <div class="col-sm-6 col-md-6 col-xs-12">
                <span style="color: #ed1944;"><b> How to Save A Mobile Money Wallet Number on Korba</b></span>
                <ul class="no_bullet" style="margin:10px; ">
                    <li>Go to my wallet</li>
                    <li>Go add new wallet</li>
                    <li>Select wallet network and input number</li>
                    <li>Give a name to the wallet</li>
                    <li>Submit and get an OTP to confirm the wallet number given, then wallet is added.</li>
                </ul>
            </div>
            <div class="col-sm-6 col-md-6 col-xs-12">
                <video></video>
            </div>
        </div>
        
        <div class="row" style="padding-left: 40px;padding-right: 20px;">
            <div class="col-sm-6 col-md-6 col-xs-12">
                <span style="color: #ed1944;"><b>How to Transfer Money </b></span> 
                <ul class="no_bullet" style="margin:10px; ">
                    <li>To transfer money, you need to choose source of funds(which is an already saved mobile money wallet/ VISA Master Card or choose "add new wallet" to set up a new mobile money wallet)</li>
                    <li>Enter the amount to transfer, Purpose of transaction,Destination details(recepient mobile wallet or bank details)</li>
                    <li>Submit, Confirm and authorize the transaction.</li>
                </ul>
            </div>
            <div class="col-sm-6 col-md-6 col-xs-12">
                <video></video>
            </div>
        </div>

        <div class="row" style="padding-left: 40px;padding-right: 20px;">
            <div class="col-sm-6 col-md-6 col-xs-12">
                <span style="color: #ed1944;"><b> How to Top-Up Airtime</b></span> 
                <ul class="no_bullet" style="margin:10px; ">
                    <li>Select service provider(AirtelTigo,Glo,Vodafone,MTN)</li>
                    <li>Enter recepient phone number</li>
                    <li>Enter amount to buy</li>
                    <li>Pay from the source of funds(which is an already saved mobile money wallet/ VISA Master Card or choose "add new wallet" to set up a new mobile money wallet)</li>
                    <li>Submit, Confirm and authorize the transaction.</li>
                </ul>
            </div>
            <div class="col-sm-6 col-md-6 col-xs-12">
                <video></video>
            </div>
        </div>

        <div class="row" style="padding-left: 40px;padding-right: 20px;">
            <div class="col-sm-6 col-md-6 col-xs-12">
                <span style="color: #ed1944;"> <b>How to Purchase Internet Bundle</b></span> 
                <ul class="no_bullet" style="margin:10px; ">
                    <li>Choose service provider</li>
                    <li>Enter Busy number</li>
                    <li>Select bundle</li>
                    <li>Pay from source</li>
                </ul>
            </div>
            <div class="col-sm-6 col-md-6 col-xs-12">
                <video></video>
            </div>
        </div>
    </div>
    
    

    
</section>

@endsection