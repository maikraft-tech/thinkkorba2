@extends('layouts.custom')

@section('content')
<link rel="stylesheet" type="text/css" href="css/onepage-scroll.css">


<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/onepage-scroll/1.3/jquery.onepage-scroll.js"></script>


<div class="main">
    <section>
        <div class="container what-is-korba" >
            <div class="row align-middle">
                <div class="col-md-6 col-lg-6 col-sm-12 col-xs-12">
                    <img src="img/other/image_2.jpg" class="img-responsive what-is-image">
                </div>
                <div class="col-md-6 col-lg-6 col-sm-12">
                    <h2><strong>What Is Korba?</strong> </h2>
                    <p >
                        Korba is a cross-platform payment system that enables users to securely and congenially perform financial transactions across all the mobile money networks and banks including rural banks via their multiple access points.
                    </p>

                    <br/>

                    <p >
                        Thus on KORBA, funds can be sent from Payment Cards(VISA, Master Card, Gh-Link etc) or Mobile Money wallet(Airtel-Tigo,MTN, Vodafone) and received into any Bank Account(including Rural Banks) or Mobile Money wallets. The settlement is simple,instant,congenial and secure.
                    </p>
                </div>
            </div>  
        </div>
    </section>
    
    <section style="background-image:url('img/other/korba-bg.png')">
        <div class="container what-is-korba2" style="background-color:transparent;margin-top:7%;">
            <div class="row align-middle">
                <div class="col-md-6 col-sm-12 col-lg-6 col-xs-12">
                    <div class="new-page-design">
                        <h2><strong>Why Use Korba?</strong> </h2>
                        <ol type="1" style="text-align:left">
                            <li>On Korba, payments can be made from payment cards (VISA, Master Card, Gh-Link etc.) and mobile money wallet (Airtel, MTN, Tigo, Vodafone).</li>
                            <li>Korba is integrated with all the Banks in Ghana, including all Rural Banks and Mobile Financial Services provided by four of the Mobile Network Operators in Ghana.</li>
                            <li>Korba enables payments to be made directly into bank accounts of organizations on the platform without having to enter their accounts details.</li>
                            <li>Korba enables clients to make payments via a unique USSD Short code (*395#) designed to suit our customers' needs without the use of the internet.</li>
                            <li>Korba is neither a wallet, bank nor a payment system. Korba is an ENABLER.</li>
                        </ol>
                    </div>
                </div>

                <div class="col-md-6 col-sm-12 col-lg-6 hidden-xs" >
                    <img src="img/other/korba-phone.png" alt="full phone image" class="img-responsive" style="max-height:600px;margin-top:80px;margin-left:40px;">
                </div>
            </div>
        </div>
    </section>
    
</div>


<script>
    $(".main").onepage_scroll();
</script>

@endsection