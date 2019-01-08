@extends('layouts.custom')

@section('content')

<div class="name-heading">
        <h2> Refund & Chargeback Policy</h2>
    </div>
<section >
    <div class="container">
        <div class="row" style="margin-top:50px;padding:20px;">
            <div class="col-md-6 col-xs-12 col-sm-12 col-lg-6">
                <img src="img/other/Refund.png" class="img-responsive" style="border-radius:20px; height:250px;"/>
            </div>
            <div class="col-md-6 col-xs-12 col-sm-12 col-lg-6">
                <span style="font-size:40px; color:red;">Refund</span>
                <p>Korba will liaise with its service providers and endeavour to effect refund of a wrong transfer as soon as possible, but in any event not later than 20 days from the date on which a request was made.</p>

                <p>We do not have any obligation to cancel any transfer instructions and refund to the subscriber in the event of any dispute with any designated payee.</p>

                <p>All terms and conditions in relation to refunds for the various service providers (mobile money institutions) will apply.</p>
            </div>

        </div>


    
        

        <div class="row">
            <div class="col-md-12 col-xs-12 col-sm-12 col-lg-12">
                <div class="chargeback">
                    <span style="font-size:50px; color:red;">Chargeback</span>
                    <p>When complaints are received, they would be thoroughly investigated, and if a refund is due, our refund policy shall apply. Kindly refer to the refund policy for more information.</p>

                    <p>However, if a complaint is a chargeback, you would be directed to your bank to have the issue addressed. Most banks have a chargeback policy which would apply.</p>

                </div>
            </div>
        </div>
    </div>
    
    
</section>


@endsection