@extends('layouts.custom')

@section('content')

<section >
    <div class="name-heading">
        <div class="row">
            <h2> Korba-Prudential Life Cover FAQs </h2>
        </div>
           
    </div>
    <div class="container-fluid">
        <div class="col-md-12 col-xs-12 col-sm-12">
            <div class="row">
            <div>
                <img src="img/other/faq-image.jpg" style="width:100%;height:50%;">
            </div>
            </div>
        </div>
    </div>
    
    

    <div class="container" style="padding-top: 30px; ">
        
        
            
        <!-- <div class="container"> -->
            <div class="row">
                <div class="col-md-12 col-xs-12 col-sm-12" >
                    <div class="panel-group" id="accordion" role="tablist" aria-multiselectable="true">
                        <div class="panel panel-default">
                            <div class="panel-heading" role="tab" id="headingOne" style="background:#a8a8a8; color:#000;">
                                <h4 class="panel-title">
                                    <a role="button" data-toggle="collapse" data-parent="#accordion" href="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                                        What is the partnership about?
                                    </a>
                                </h4>
                            </div>
                            <div id="collapseOne" class="panel-collapse collapse in" role="tabpanel" aria-labelledby="headingOne">
                                <div class="panel-body">
<p>Korba is in partnership with Prudential Life Insurance to give a life cover to all active customers who transact on the Korba Platform. The minimum age as at the start of the cover is 18yrs whiles the maximum is 70 yrs.</p>                                </div>
                            </div>
                        </div>
                        <div class="panel panel-default">
                            <div class="panel-heading" role="tab" id="headingTwo" style="background:#a8a8a8; color:#000;">
                                <h4 class="panel-title">
                                    <a class="collapsed" role="button" data-toggle="collapse" data-parent="#accordion" href="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                                        What benefit do I get under this insurance cover?                                    </a>
                                </h4>
                            </div>
                            <div id="collapseTwo" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingTwo">
                                <div class="panel-body">
                                    <p>All premiums are paid by Korba on behalf of the customer, as long as customer keeps transacting on Korba within the allocated spend threshold.</p>
                                    <p>The Insurance cover benefits comes in two forms:</p>
                                    <h3>COVID – 19 Cover</h3>
                                    <p >
                                        <ul class="no_bullet" style="padding-right:50px;">
                                            <li class="korba-logo">A diagnosis benefit - paying Ghs 1,000 after customer has been diagnosed with Covid</li>
                                            <li class="korba-logo">A hospitalization cover - paying Ghs 200 a day upon hospitalization for 30 days as a result of the Covid-19 infection</li>
                                            <li class="korba-logo">A death benefit of Ghs10,000 to the next of Kin of the insured customer should death kick in as a direct result of the COVID -19 infection.</li>
                                            
                                        </ul>
                                    </p>
                                    <br>
                                    <style>
                                        #customers {
  border-collapse: collapse;
  width: 100%;
}

#customers td, #customers th {
  border: 1px solid #ddd;
  padding: 8px;
}

#customers tr:nth-child(even){background-color: #f2f2f2;}

#customers tr:hover {background-color: #ddd;}

#customers th {
  padding-top: 12px;
  padding-bottom: 12px;
  text-align: left;
  background-color: #c70e1d;
  color: white;
}
                                    </style>
                                    <h3>Hospitalization and Death/Total or Permanent Disability  </h3>
                                    <table id="customers">
                                        <tr>
                                            <th>Benefit</th>
                                            <th>Sum Assured</th>
                                            <th>Premium</th>
                                        </tr>
                                        <tr>
                                            <td>Death/TPD</td>
                                            <td>GHS 1000</td>
                                            <td rowspan=2 >GHS 0.50</td>
                                        </tr>
                                        <tr>
                                            <td>HCP(Daily Benefit)</td>
                                            <td>GHS 15</td>
                                        </tr>
                                        <tr>
                                            <td>Death/TPD</td>
                                            <td>GHS 2000</td>
                                            <td rowspan=2 >GHS 1</td>
                                        </tr>
                                        <tr>
                                            <td>HCP(Daily Benefit)</td>
                                            <td>GHS 30</td>
                                        </tr>
                                        <tr>
                                            <td>Death/TPD</td>
                                            <td>GHS 5000</td>
                                            <td rowspan=2 >GHS 3</td>
                                        </tr>
                                        <tr>
                                            <td>HCP(Daily Benefit)</td>
                                            <td>GHS 50</td>
                                        </tr>
                                        <tr>
                                            <td>Death/TPD</td>
                                            <td>GHS 10,000</td>
                                            <td rowspan=2 >GHS 6</td>
                                        </tr>
                                        <tr>
                                            <td>HCP(Daily Benefit)</td>
                                            <td>GHS 100</td>
                                        </tr>
                                    </table>
                                </div>
                            </div>
                        </div>
                        <div class="panel panel-default">
                            <div class="panel-heading" role="tab" id="headingThree" style="background:#a8a8a8; color:#000;">
                                <h4 class="panel-title">
                                    <a class="collapsed" role="button" data-toggle="collapse" data-parent="#accordion" href="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                                        How long is the waiting Period before one can make claims?
                                    </a>
                                </h4>
                            </div>
                            <div id="collapseThree" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingThree">
                                <div class="panel-body">
                                    <p >
                                        There is no waiting period for customers of Korba.
                                    </p>
                                </div>
                            </div>
                        </div>
                        <div class="panel panel-default">
                            <div class="panel-heading" role="tab" id="headingFour" style="background:#a8a8a8; color:#000;">
                                <h4 class="panel-title">
                                    <a class="collapsed" role="button" data-toggle="collapse" data-parent="#accordion" href="#collapseFour" aria-expanded="false" aria-controls="collapseFour">
                                        Does travel/occupation/residence affect my policy?
                                    </a>
                                </h4>
                            </div>
                            <div id="collapseFour" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingFour">
                                <div class="panel-body">
<p>No restrictions apply as far as travel or occupation is concerned. However, at the time of taking out the policy all Lives Assured must be resident in the Republic of Ghana.</p>                                </div>
                            </div>
                        </div>
                        <div class="panel panel-default">
                            <div class="panel-heading" role="tab" id="headingFive" style="background:#a8a8a8; color:#000;">
                                <h4 class="panel-title">
                                    <a class="collapsed" role="button" data-toggle="collapse" data-parent="#accordion" href="#collapseFive" aria-expanded="false" aria-controls="collapseFive">
                                        Do I need a medical underwriting?
                                    </a>
                                </h4>
                            </div>
                            <div id="collapseFive" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingFive">
                                <div class="panel-body">
<p>There is no medical underwriting requirement for any member on the Customer Loyalty Policy</p>                                </div>
                            </div>
                        </div>
                        <div class="panel panel-default">
                            <div class="panel-heading" role="tab" id="headingSix" style="background:#a8a8a8; color:#000;">
                                <h4 class="panel-title">
                                    <a class="collapsed" role="button" data-toggle="collapse" data-parent="#accordion" href="#collapseSix" aria-expanded="false" aria-controls="collapseSix">
                                        Can anyone be on the policy?                                    </a>
                                </h4>
                            </div>
                            <div id="collapseSix" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingSix">
                                <div class="panel-body">
<p>Minimum Entry age is 18 years and maximum age is 70 years.</p>                                </div>
                            </div>
                        </div>
                        <div class="panel panel-default">
                            <div class="panel-heading" role="tab" id="headingSeven" style="background:#a8a8a8; color:#000;">
                                <h4 class="panel-title">
                                    <a class="collapsed" role="button" data-toggle="collapse" data-parent="#accordion" href="#collapseSeven" aria-expanded="false" aria-controls="collapseSeven">
                                        How long does it take for issues to be resolved?
                                    </a>
                                </h4>
                            </div>
                            <div id="collapseSeven" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingSeven">
                                <div class="panel-body">
<p>48 hours</p>                                </div>
                            </div>
                        </div>
                        <div class="panel panel-default">
                            <div class="panel-heading" role="tab" id="headingEight" style="background:#a8a8a8; color:#000;">
                                <h4 class="panel-title">
                                    <a class="collapsed" role="button" data-toggle="collapse" data-parent="#accordion" href="#collapseEight" aria-expanded="false" aria-controls="collapseEight">
                                        How long does it take for claims to be processed and paid?                                    </a>
                                </h4>
                            </div>
                            <div id="collapseEight" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingEight">
                                <div class="panel-body">
<p>5 working days from date of claim request, as long as all required supporting documents are made available</p>                                </div>
                            </div>
                        </div>
                        <div class="panel panel-default">
                            <div class="panel-heading" role="tab" id="headingNine" style="background:#a8a8a8; color:#000;">
                                <h4 class="panel-title">
                                    <a class="collapsed" role="button" data-toggle="collapse" data-parent="#accordion" href="#collapseNine" aria-expanded="false" aria-controls="collapseNine">
                                        What do I need to make a claim?                                    </a>
                                </h4>
                            </div>
                            <div id="collapseNine" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingNine">
                                <div class="panel-body">
                                    <h3>For Death/TPD</h3>
                                        <p>
                                            <ul class="no_bullet" style="padding-right:50px;">
                                                <li class="korba-logo">A Claim Form completed and signed by the Customer (In instances of death, next of Kin handles this)</li>
                                                <li class="korba-logo">Proof of existence of Customer Loyalty Policy with KORBA at the time of Death
                                                </li>
                                                <li class="korba-logo">Original or Certified Copy of the Life Assured’s Identity Card</li>
                                                <li class="korba-logo">Original or Certified Copy of:</li>
                                                <ol style="list-style-type: lower-alpha; padding-bottom: 0;">
                                                    <li style="margin-left:2em">The Death Certificate or</li>
                                                    <li style="margin-left:2em">The Medical Certificate of the Cause of Death or</li>
                                                    <li style="margin-left:2em">Signed and Stamped Letter from a Traditional Ruler (Chief or Headman). This option will be exercised at the discretion of PRUDENTIAL LIFE.</li>
                                                    <li style="margin-left:2em; padding-bottom: 0;">Police Report (Brought-in-dead Certificate or Road Traffic Accident Report or Report of natural Death) were applicable.</li>
                                                   </ol>
                                            </ul>
                                        </p>
                                        <br><br>
                                        <h3>For Hospitalization</h3>
                                        <p>
                                            <ul class="no_bullet" style="padding-right:50px;">
                                                <li class="korba-logo">   A Claim Form completed and signed by the Customer</li>
                                                <li class="korba-logo"> Original or Certified Copy of the Life Assured’s Identity Card.</li>
                                                <li class="korba-logo">Hospital invoice.</li>
                                                <li class="korba-logo">Medical report from hospital or Discharge form - must capture the name of the ward, telephone landline to hospital and what the patient was treated for.</li>
                                               
                                            </ul>
                                        </p>
                                 </div>
                            </div>
                        </div>
                        
                    </div>
                </div>
            </div>
        <!-- </div> -->
                

    </div>
</section>
@endsection