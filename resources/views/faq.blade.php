@extends('layouts.custom')

@section('content')

<section >
    <div class="name-heading">
        <div class="row">
            <h2> FAQ's </h2>
        </div>
           
    </div>
    <div class="container-fluid">
        <div class="col-md-12 col-xs-12 col-sm-12">
            <div class="row">
            <div>
                <img src="img/other/faq-image.png" style="width:100%;height:50%;">
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
                                        What is Korba?
                                    </a>
                                </h4>
                            </div>
                            <div id="collapseOne" class="panel-collapse collapse in" role="tabpanel" aria-labelledby="headingOne">
                                <div class="panel-body">
                                    <p>Korba is an electronic payment system which enables the transfer of funds across mobile networks, payment cards and banks. </p>
                                </div>
                            </div>
                        </div>
                        <div class="panel panel-default">
                            <div class="panel-heading" role="tab" id="headingTwo" style="background:#a8a8a8; color:#000;">
                                <h4 class="panel-title">
                                    <a class="collapsed" role="button" data-toggle="collapse" data-parent="#accordion" href="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                                        What are the benefits of Korba?
                                    </a>
                                </h4>
                            </div>
                            <div id="collapseTwo" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingTwo">
                                <div class="panel-body">
                                    <p >
                                        <ul class="no_bullet" style="padding-right:50px;">
                                            <li class="korba-logo">No hidden charges</li>
                                            <li class="korba-logo">Detailed transaction history</li>
                                            <li class="korba-logo">Instant notification</li>
                                            <li class="korba-logo">Available on USSD</li>
                                            <li class="korba-logo">Works with rural banks</li>
                                        </ul>
                                    </p>
                                </div>
                            </div>
                        </div>
                        <div class="panel panel-default">
                            <div class="panel-heading" role="tab" id="headingThree" style="background:#a8a8a8; color:#000;">
                                <h4 class="panel-title">
                                    <a class="collapsed" role="button" data-toggle="collapse" data-parent="#accordion" href="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                                        What makes Korba Unique?
                                    </a>
                                </h4>
                            </div>
                            <div id="collapseThree" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingThree">
                                <div class="panel-body">
                                    <p >
                                        <ul class="no_bullet" style="padding-right:50px;">
                                            <li class="korba-logo">Korba allows you time to share life with those you love.</li>
                                            <li class="korba-logo">Real-time transactions, no traffic.</li>
                                            <li class="korba-logo">No wallet top-up problems.</li>
                                            <li class="korba-logo">Your money stays where you want it.</li>
                                            
                                        </ul>
                                    </p>
                                </div>
                            </div>
                        </div>
                        <div class="panel panel-default">
                            <div class="panel-heading" role="tab" id="headingFour" style="background:#a8a8a8; color:#000;">
                                <h4 class="panel-title">
                                    <a class="collapsed" role="button" data-toggle="collapse" data-parent="#accordion" href="#collapseFour" aria-expanded="false" aria-controls="collapseFour">
                                        Who can use Korba?
                                    </a>
                                </h4>
                            </div>
                            <div id="collapseFour" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingFour">
                                <div class="panel-body">
                                    <p>Korba is for everyone: individuals, associations, churches and corporate bodies.</p>
                                </div>
                            </div>
                        </div>
                        <div class="panel panel-default">
                            <div class="panel-heading" role="tab" id="headingFive" style="background:#a8a8a8; color:#000;">
                                <h4 class="panel-title">
                                    <a class="collapsed" role="button" data-toggle="collapse" data-parent="#accordion" href="#collapseFive" aria-expanded="false" aria-controls="collapseFive">
                                        Who can sign up to Korba?
                                    </a>
                                </h4>
                            </div>
                            <div id="collapseFive" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingFive">
                                <div class="panel-body">
                                    <p>Anyone who is eighteen years and above, and has a national ID can sign up. Minors (people under the age of 18 years) can be signed up by their parents/guardians in trust for them. </p>
                                </div>
                            </div>
                        </div>
                        <div class="panel panel-default">
                            <div class="panel-heading" role="tab" id="headingSix" style="background:#a8a8a8; color:#000;">
                                <h4 class="panel-title">
                                    <a class="collapsed" role="button" data-toggle="collapse" data-parent="#accordion" href="#collapseSix" aria-expanded="false" aria-controls="collapseSix">
                                        Do I need to come to the office to sign up to Korba?
                                    </a>
                                </h4>
                            </div>
                            <div id="collapseSix" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingSix">
                                <div class="panel-body">
                                    <p>You can download the Korba mobile application from Google Play Store (Android) or App Store(iOS) and sign up by filling in your details. You can also log on to www. korbaweb.com Or dial *395#.</p>
                                </div>
                            </div>
                        </div>
                        <div class="panel panel-default">
                            <div class="panel-heading" role="tab" id="headingSeven" style="background:#a8a8a8; color:#000;">
                                <h4 class="panel-title">
                                    <a class="collapsed" role="button" data-toggle="collapse" data-parent="#accordion" href="#collapseSeven" aria-expanded="false" aria-controls="collapseSeven">
                                        Do I need an agent to sign up to Korba?
                                    </a>
                                </h4>
                            </div>
                            <div id="collapseSeven" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingSeven">
                                <div class="panel-body">
                                    <p>Just download the app onto your device and you are good to go.</p>
                                </div>
                            </div>
                        </div>
                        <div class="panel panel-default">
                            <div class="panel-heading" role="tab" id="headingEight" style="background:#a8a8a8; color:#000;">
                                <h4 class="panel-title">
                                    <a class="collapsed" role="button" data-toggle="collapse" data-parent="#accordion" href="#collapseEight" aria-expanded="false" aria-controls="collapseEight">
                                        What details are required to sign up to Korba?
                                    </a>
                                </h4>
                            </div>
                            <div id="collapseEight" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingEight">
                                <div class="panel-body">
                                    <p>Your personal details [Name, phone number, email address and a national ID number].</p>
                                </div>
                            </div>
                        </div>
                        <div class="panel panel-default">
                            <div class="panel-heading" role="tab" id="headingNine" style="background:#a8a8a8; color:#000;">
                                <h4 class="panel-title">
                                    <a class="collapsed" role="button" data-toggle="collapse" data-parent="#accordion" href="#collapseNine" aria-expanded="false" aria-controls="collapseNine">
                                        Can I sign up to Korba if I have no money at the time of sign up?
                                    </a>
                                </h4>
                            </div>
                            <div id="collapseNine" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingNine">
                                <div class="panel-body">
                                    <p>YES. All you need is the internet, any national ID you have, and a smart device [phone, tablet or computer].</p>
                                </div>
                            </div>
                        </div>
                        <div class="panel panel-default">
                            <div class="panel-heading" role="tab" id="headingTen" style="background:#a8a8a8; color:#000;">
                                <h4 class="panel-title">
                                    <a class="collapsed" role="button" data-toggle="collapse" data-parent="#accordion" href="#collapseTen" aria-expanded="false" aria-controls="collapseTen">
                                        Can I sign up to Korba if I don’t have a bank account/wallet?
                                    </a>
                                </h4>
                            </div>
                            <div id="collapseTen" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingTen">
                                <div class="panel-body">
                                    <p>YES. However, you need to have at least one existing bank account or mobile wallet to enjoy the full benefits of using Korba.</p>
                                </div>
                            </div>
                        </div>
                        <div class="panel panel-default">
                            <div class="panel-heading" role="tab" id="headingEleven" style="background:#a8a8a8; color:#000;">
                                <h4 class="panel-title">
                                    <a class="collapsed" role="button" data-toggle="collapse" data-parent="#accordion" href="#collapseEleven" aria-expanded="false" aria-controls="collapseEleven">
                                            How do I transfer funds with Korba?
                                    </a>
                                </h4>
                            </div>
                            <div id="collapseEleven" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingEleven">
                                <div class="panel-body">
                                    <p>After signing in, you:
                                        <ul class="no_bullet">
                                            <li class="korba-logo">Select Funds transfer</li>
                                            <li class="korba-logo">Select Transfer to</li>
                                            <li class="korba-logo">Select Wallet type (Tigo Cash, MTN etc.)</li>
                                            <li class="korba-logo">Enter Wallet number (recipient’s mobile number)</li>
                                            <li class="korba-logo">Enter Amount</li>
                                            <li class="korba-logo">Enter Purpose</li>
                                            <li class="korba-logo">Select Sender’s wallet type</li>
                                            <li class="korba-logo">Enter Wallet number (sender’s number)</li>
                                            <li class="korba-logo">Confirm Payment</li>
                                            <li class="korba-logo">Wait for a notification to enter your PIN</li>
                                        </ul>
                                        You will then receive a notification of a successful funds transfer.
                                    </p>
                                </div>
                            </div>
                        </div>
                        <div class="panel panel-default">
                            <div class="panel-heading" role="tab" id="headingTwelve" style="background:#a8a8a8; color:#000;">
                                <h4 class="panel-title">
                                    <a class="collapsed" role="button" data-toggle="collapse" data-parent="#accordion" href="#collapseTwelve" aria-expanded="false" aria-controls="collapseTwelve">
                                        Is there a limit to the amount I can transfer on Korba?
                                    </a>
                                </h4>
                            </div>
                            <div id="collapseTwelve" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingTwelve">
                                <div class="panel-body">
                                    <p>This will depend on how much your bank or mobile network allows in a day.</p>
                                </div>
                            </div>
                        </div>
                        <div class="panel panel-default">
                            <div class="panel-heading" role="tab" id="headingThirteen" style="background:#a8a8a8; color:#000;">
                                <h4 class="panel-title">
                                    <a class="collapsed" role="button" data-toggle="collapse" data-parent="#accordion" href="#collapseThirteen" aria-expanded="false" aria-controls="collapseThirteen">
                                        How do I make payments using Korba?
                                    </a>
                                </h4>
                            </div>
                            <div id="collapseThirteen" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingThirteen">
                                <div class="panel-body">
                                    <p>After signing in ,you:
                                        <ul class="no_bullet">
                                            <li class="korba-logo">Select Payment</li>
                                            <li class="korba-logo">Select the institution you are paying to</li>
                                            <li class="korba-logo">Select branch of institution, if any</li>
                                            <li class="korba-logo">Enter payment details of the institution (Branch, Reference, Amount, wallet type)</li>
                                            <li class="korba-logo">Confirm Payment</li>
                                            <li class="korba-logo">Wait for a notification to enter your PIN</li>
                                            
                                        </ul>
                                        Finally, you will receive a notification of a successful payment
                                    </p>
                                </div>
                            </div>
                        </div>
                        <div class="panel panel-default">
                            <div class="panel-heading" role="tab" id="headingFourteen" style="background:#a8a8a8; color:#000;">
                                <h4 class="panel-title">
                                    <a class="collapsed" role="button" data-toggle="collapse" data-parent="#accordion" href="#collapseFourteen" aria-expanded="false" aria-controls="collapseFourteen">
                                        Is there any service charge when I transfer or receive funds using Korba?
                                    </a>
                                </h4>
                            </div>
                            <div id="collapseFourteen" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingFourteen">
                                <div class="panel-body">
                                    <p>YES. You are charged only when you transfer funds or make payment, but not when you receive.</p>
                                </div>
                            </div>
                        </div>
                        <div class="panel panel-default">
                            <div class="panel-heading" role="tab" id="headingFifteen" style="background:#a8a8a8; color:#000;">
                                <h4 class="panel-title">
                                    <a class="collapsed" role="button" data-toggle="collapse" data-parent="#accordion" href="#collapseFifteen" aria-expanded="false" aria-controls="collapseFifteen">
                                        What happens if there is a network failure when undertaking a transaction?
                                    </a>
                                </h4>
                            </div>
                            <div id="collapseFifteen" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingFifteen">
                                <div class="panel-body">
                                    <p>Your transaction status will be pending and either Korba or your network provider will send you a message to notify you.</p>
                                </div>
                            </div>
                        </div>
                        <div class="panel panel-default">
                            <div class="panel-heading" role="tab" id="headingSixteen" style="background:#a8a8a8; color:#000;">
                                <h4 class="panel-title">
                                    <a class="collapsed" role="button" data-toggle="collapse" data-parent="#accordion" href="#collapseSixteen" aria-expanded="false" aria-controls="collapseSixteen">
                                        How many transactions am I allowed to make in a day with Korba?
                                    </a>
                                </h4>
                            </div>
                            <div id="collapseSixteen" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingSixteen">
                                <div class="panel-body">
                                    <p>There is no limit in using Korba as long as there is sufficient balance in your account /wallet.</p>
                                </div>
                            </div>
                        </div>

                        <div class="panel panel-default">
                            <div class="panel-heading" role="tab" id="headingSeventeen" style="background:#a8a8a8; color:#000;">
                                <h4 class="panel-title">
                                    <a class="collapsed" role="button" data-toggle="collapse" data-parent="#accordion" href="#collapseSeventeen" aria-expanded="false" aria-controls="collapseSeventeen">
                                        Can I track my transactions on Korba?
                                    </a>
                                </h4>
                            </div>
                            <div id="collapseSeventeen" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingSeventeen">
                                <div class="panel-body">
                                    <p>YES. Your transaction history is stored on Korba and can be accessed anytime.</p>
                                </div>
                            </div>
                        </div>

                        <div class="panel panel-default">
                            <div class="panel-heading" role="tab" id="headingEighteen" style="background:#a8a8a8; color:#000;">
                                <h4 class="panel-title">
                                    <a class="collapsed" role="button" data-toggle="collapse" data-parent="#accordion" href="#collapseEighteen" aria-expanded="false" aria-controls="collapseEighteen">
                                        Can I have multiple accounts on Korba?
                                    </a>
                                </h4>
                            </div>
                            <div id="collapseEighteen" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingEighteen">
                                <div class="panel-body">
                                    <p>YES. You can have multiple accounts. But since Korba does not hold funds, one account is okay.</p>
                                </div>
                            </div>
                        </div>

                        <div class="panel panel-default">
                            <div class="panel-heading" role="tab" id="headingNinteen" style="background:#a8a8a8; color:#000;">
                                <h4 class="panel-title">
                                    <a class="collapsed" role="button" data-toggle="collapse" data-parent="#accordion" href="#collapseNinteen" aria-expanded="false" aria-controls="collapseNinteen">
                                        Can I have access to my bank statement using Korba?
                                    </a>
                                </h4>
                            </div>
                            <div id="collapseNinteen" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingNinteen">
                                <div class="panel-body">
                                    <p>Korba does not give bank statements, but can issue Korba transaction statements.</p>
                                </div>
                            </div>
                        </div>

                        <div class="panel panel-default">
                            <div class="panel-heading" role="tab" id="headingTwenty" style="background:#a8a8a8; color:#000;">
                                <h4 class="panel-title">
                                    <a class="collapsed" role="button" data-toggle="collapse" data-parent="#accordion" href="#collapseTwenty" aria-expanded="false" aria-controls="collapseTwenty">
                                            How does my institution become a partner with Korba?
                                    </a>
                                </h4>
                            </div>
                            <div id="collapseTwenty" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingTwenty">
                                <div class="panel-body">
                                    <p>Simply go to www.korbaweb.com, upload the required documents, and the Korba team will then contact you as soon as possible.</p>
                                </div>
                            </div>
                        </div>
                        <div class="panel panel-default">
                            <div class="panel-heading" role="tab" id="headingTwentyone" style="background:#a8a8a8; color:#000;">
                                <h4 class="panel-title">
                                    <a class="collapsed" role="button" data-toggle="collapse" data-parent="#accordion" href="#collapseTwentyone" aria-expanded="false" aria-controls="collapseTwentyone">
                                        How is my data protected under Korba?
                                    </a>
                                </h4>
                            </div>
                            <div id="collapseTwentyone" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingTwentyone">
                                <div class="panel-body">
                                    <p>Korba is fully registered under The Data Protection Act, 2012 (Act 843). You are therefore assured of a secure service by Korba.</p>
                                </div>
                            </div>
                        </div>
                        <div class="panel panel-default">
                            <div class="panel-heading" role="tab" id="headingTwentytwo" style="background:#a8a8a8; color:#000;">
                                <h4 class="panel-title">
                                    <a class="collapsed" role="button" data-toggle="collapse" data-parent="#accordion" href="#collapseTwentytwo" aria-expanded="false" aria-controls="collapseTwentytwo">
                                        Any penalties if I decide not to use Korba anymore?
                                    </a>
                                </h4>
                            </div>
                            <div id="collapseTwentytwo" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingTwentytwo">
                                <div class="panel-body">
                                    <p>No penalties involved if you decide to discontinue using Korba.</p>
                                </div>
                            </div>
                        </div>
                        <div class="panel panel-default">
                            <div class="panel-heading" role="tab" id="headingTwentythree" style="background:#a8a8a8; color:#000;">
                                <h4 class="panel-title">
                                    <a class="collapsed" role="button" data-toggle="collapse" data-parent="#accordion" href="#collapseTwentythree" aria-expanded="false" aria-controls="collapseTwentythree">
                                        How do I contact the Korba Team in case I need assistance?
                                    </a>
                                </h4>
                            </div>
                            <div id="collapseTwentythree" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingTwentythree">
                                <div class="panel-body">
                                    <p>You can contact the Korba call center via phone or WhatsApp (0200404010). We can also be reached on social media (korbaweb on Facebook, Twitter and Instagram).</p>
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