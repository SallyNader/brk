



@extends('master')
@section('content')
























@if(Session::has('message'))

<script type="text/javascript">
    alert("{{Session::get('message')}}")

</script>
@endif
 <div class="slider" id="slider">
        <!-- slider -->
        <div class="slider-img"><img src="images/slider-1.jpg" alt="Borrow - Loan Company Website Template" class="">
            <div class="container">
                <div class="row">
                    <div class="col-lg-6 col-md-12 col-sm-12 col-xs-12">
                        <div class="slider-captions">
                            <!-- slider-captions -->
                            <h1 class="slider-title">Personal Loan to Suit Your Needs. </h1>
                            <p class="slider-text hidden-xs">The low rate you need for the need you want! Call
                                <br>
                                <strong class="text-highlight">(555) 123-4567</strong></p>
                            <a href="team.html" class="btn btn-default hidden-xs">Loan Products</a> </div>
                        <!-- /.slider-captions -->
                    </div>
                </div>
            </div>
        </div>
        <div>
            <div class="slider-img"><img src="images/slider-2.jpg" alt="Borrow - Loan Company Website Template" class="">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-6 col-md-12 col-sm-12 col-xs-12">
                            <div class="slider-captions">
                                <!-- slider-captions -->
                                <h1 class="slider-title"> Lowest Car Loan Rate <strong class="text-highlight">9.60%</strong> </h1>
                                <p class="slider-text hidden-xs"> We provide an excellent service Loan company. Lorem ipsum simple dummy content goes here.</p>
                                <a href="#" class="btn btn-default hidden-xs">Check Eligiblity</a> </div>
                            <!-- /.slider-captions -->
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div>
            <div class="slider-img"><img src="images/slider-3.jpg" alt="Borrow - Loan Company Website Template" class="">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-6 col-md-12 col-sm-12 col-xs-12">
                            <div class="slider-captions">
                                <!-- slider-captions -->
                                <h1 class="slider-title">Student Loans with Greate Rates <strong class="text-highlight">11.10%</strong></h1>
                                <p class="slider-text hidden-xs">We provide an excellent service for all types of loans in
                                    <br> ahmedabad and offer service, advice and direction.</p>
                                <a href="#" class="btn btn-default hidden-xs">View Products</a> </div>
                            <!-- /.slider-captions -->
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>



    <div class="rate-table">
        <div class="container">
            <div class="row">
                <div class="col-md-3 col-sm-6 col-xs-6">
                    <div class="rate-counter-block">
                        <div class="icon rate-icon  "> <img src="images/mortgage.svg" alt="Borrow - Loan Company Website Template" class="icon-svg-1x"></div>
                        <div class="rate-box">
                            <h1 class="loan-rate">3.74%</h1>
                            <small class="rate-title">Home Loans</small>
                        </div>
                    </div>
                </div>
                <div class="col-md-3 col-sm-6 col-xs-6">
                    <div class="rate-counter-block">
                        <div class="icon rate-icon  "> <img src="images/loan.svg" alt="Borrow - Loan Company Website Template" class="icon-svg-1x"></div>
                        <div class="rate-box">
                            <h1 class="loan-rate">8.96%</h1>
                            <small class="rate-title">Personal Loans</small>
                        </div>
                    </div>
                </div>
                <div class="col-md-3 col-sm-6 col-xs-6">
                    <div class="rate-counter-block">
                        <div class="icon rate-icon  "> <img src="images/car.svg" alt="Borrow - Loan Company Website Template" class="icon-svg-1x"></div>
                        <div class="rate-box">
                            <h1 class="loan-rate">6.70%</h1>
                            <small class="rate-title">Car Loans</small>
                        </div>
                    </div>
                </div>
                <div class="col-md-3 col-sm-6 col-xs-6">
                    <div class="rate-counter-block">
                        <div class="icon rate-icon  "> <img src="images/credit-card.svg" alt="Borrow - Loan Company Website Template" class="icon-svg-1x"></div>
                        <div class="rate-box">
                            <h1 class="loan-rate">9.00%</h1>
                            <small class="rate-title">Credit card</small>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

        <div class="section-space80">
        <div class="container">
            <div class="row">
                <div class="col-md-4 col-sm-12 col-xs-12">
                    <i class="icon-users icon-2x icon-default"></i>
                    <h1>Why Alboraq ?</h1>
                    <p>alboraq is certified professional translation service located in egypt (<a>Our Location</a>) which provides  all foreign language translation service .</p>
                    <a href="#" class="btn btn-primary">Online Translation</a>
                </div>
                <div class="col-md-offset-1 col-md-7 col-xs-12 col-sm-12">
                    <div class="st-accordion ">
                        <div class="panel-group" id="accordion" role="tablist" aria-multiselectable="true">
                            <div class="panel panel-default">
                                <div class="panel-heading" role="tab" id="headingOne">
                                    <h4 class="panel-title"> <a role="button" data-toggle="collapse" data-parent="#accordion" href="#collapseOne" aria-expanded="true" aria-controls="collapseOne">Who Is Alboraq ?</a> </h4>
                                </div>
                                <div id="collapseOne" class="panel-collapse collapse in" role="tabpanel" aria-labelledby="headingOne">
                                    <div class="panel-body">alboraq is certified professional translation service located in egypt ( <a>Our Location</a>) which provides  all foreign language translation service with high quality translation, accuracy, commitment to deadlines  , alboraq was founded in 2010 , our office provides 24/7 service including weekends & national holidays (<a>Who is Alboraq</a>).</div>
                                </div>
                            </div>
                            <div class="panel panel-default">
                                <div class="panel-heading" role="tab" id="headingTwo">
                                    <h4 class="panel-title"> <a class="collapsed" role="button" data-toggle="collapse" data-parent="#accordion" href="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">Who Is Our Translators ?</a> </h4>
                                </div>
                                <div id="collapseTwo" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingTwo">
                                    <div class="panel-body">we have certified translators  they have acquired translation certificates from professional providers hey have around 5-10 years experience in written translation in various fields and they are being supervised by an Executive Director who has more than 10 years experience in multinational firms(<a href="">Info About Our Translators</a>).</div>
                                </div>
                            </div>
                            <div class="panel panel-default">
                                <div class="panel-heading" role="tab" id="headingThree">
                                    <h4 class="panel-title"> <a class="collapsed" role="button" data-toggle="collapse" data-parent="#accordion" href="#collapseThree" aria-expanded="false" aria-controls="collapseThree">What Kind Of Services We Provide ?</a> </h4>
                                </div>
                                <div id="collapseThree" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingThree">
                                    <div class="panel-body">we provide Document Translation and Editing (<a>See Our Document Translation</a>), Document Proofreading(<a>See Our Document Proofreading</a>),Simultaneous Translation (<a>See our Simultaneous Translation</a>),Transcription(<a>See Our Transcription) ,Audio and Video Interpreting (<a>See Our Interpreting</a>),Localization(<a>See Our Localization</a>),Scriptwriting(<a>See Our Scriptwriting</a>) and Staffing/outsourcing. </div>
                                </div>
                            </div>
                            <div class="panel panel-default">
                                <div class="panel-heading" role="tab" id="headingFour">
                                    <h4 class="panel-title"> <a class="collapsed" role="button" data-toggle="collapse" data-parent="#accordion" href="#collapseFour" aria-expanded="false" aria-controls="collapseFour">Does Alboraq Have  Accreditations ?</a> </h4>
                                </div>
                                <div id="collapseFour" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingFour">
                                    <div class="panel-body">alboraq is certified professional translation service that have (name of certifications)(<a>See Our Accreditations</a>). </div>
                                </div>

                               
                            </div>


                            <div class="panel panel-default">
                                <div class="panel-heading" role="tab" id="headingFour">
                                    <h4 class="panel-title"> <a class="collapsed" role="button" data-toggle="collapse" data-parent="#accordion" href="#collapseFour" aria-expanded="false" aria-controls="collapseFour"> What About Our Pricing ?</a> </h4>
                                </div>
                                <div id="collapseFour" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingFour">
                                    <div class="panel-body">we have good offers for our customers , you will pay for first copy and the second copy with the half of price and the others copies is completely free. </div>
                                </div>

                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>


     <div class="section-space80">
        <div class="container">
            <div class="row">
                <div class="col-md-offset-2 col-md-8 col-sm-12 col-xs-12">
                    <div class="mb60 text-center section-title">
                        <!-- section title start-->
                        <h1>What Types Of Document We Translate ?</h1>
                        <p>we translate all types of documents for all types of purposes <a>See Document Types We Translate</a></p>
                    </div>
                    <!-- /.section title start-->
                </div>
            </div>
            <div class="row">
                <div class="service" id="service">
                    <div class="col-md-12 col-sm-12 col-xs-12">
                        <div class="bg-white pinside40 service-block outline mb30">
                            <div class="icon mb40"> <img src="images/loan.svg" alt="Borrow - Loan Company Website Template" class="icon-svg-2x"> </div>
                            <h2><a href="#" class="title">Microsoft Word</a></h2>
                            <h2><a href="#" class="title">PDF</a></h2>
                            <h2><a href="#" class="title">Contracts</a></h2>
                             
                            <p></p>
                           <!-- <a href="#" class="btn-link">Read More</a> --></div>
                    </div>
                    <div class="col-md-12 col-sm-12 col-xs-12">
                        <div class="bg-white pinside40 service-block outline mb30">
                            <div class="icon mb40"> <img src="images/mortgage.svg" alt="Borrow - Loan Company Website Template" class="icon-svg-2x"></div>
                            <h2><a href="#" class="title">Books</a></h2>
                            <h2><a href="#" class="title">Business cards</a></h2>
                             <h2><a href="#" class="title"> Certificates</a></h2>
                             </div>
                    </div>
                    <div class="col-md-12 col-sm-12 col-xs-12">
                        <div class="bg-white pinside40 service-block outline mb30">
                            <div class="icon mb40"> <img src="images/piggy-bank.svg" alt="Borrow - Loan Company Website Template" class="icon-svg-2x"></div>
                            <h2><a href="#" class="title">Agreements</a></h2>
                            <h2><a href="#" class="title">Corporate letters</a></h2>
                            <h2><a href="#" class="title">Dictionaries</a></h2></div>
                    </div>
                    <div class="col-md-12 col-sm-12 col-xs-12">

                        <div class="bg-white pinside40 service-block outline mb30">
                            <div class="icon mb40"> <img src="images/loan.svg" alt="Borrow - Loan Company Website Template" class="icon-svg-2x"></div>
                            <h2><a href="#" class="title">Letters/Emails</a></h2> 
                            <h2><a href="#" class="title">Financial statements</a></h2>
                            <h2><a href="#" class="title">Flash files</a></h2>
                             </div>
                    </div>
                    <div class="col-md-12 col-sm-12 col-xs-12">
                        <div class="bg-white pinside40 service-block outline mb30">
                            <div class="icon mb40"> <img src="images/car.svg" alt="Borrow - Loan Company Website Template" class="icon-svg-2x"></div>
                            <h2><a href="#" class="title">Websites</a></h2>
                              <h2><a href="#" class="title">Presentations</a></h2>
                                <h2><a href="#" class="title">Scientific</a></h2>

                              </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="bg-white section-space80">
        <div class="container">
            <div class="row">
                <div class="col-md-offset-2 col-md-8 col-xs-12">
                    <div class="mb100 text-center section-title">
                        <!-- section title start-->
                        <h1>We Guarantee Accurate And Efficient Translation</h1>
                        <p>we are certified translation service who deliver accurate and efficient translation for our customers</p>
                    </div>
                    <!-- /.section title start-->
                </div>
            </div>
            <div class="row">
                <div class="col-md-4 col-sm-4 col-xs-12">
                    <div class="bg-white pinside40 number-block outline mb60 bg-boxshadow">
                        <div class="circle"><span class="number">1</span></div>
                        <h3 class="number-title">Speed</h3>
                        <p>we can translate your document professionally in very short time.</p>
                    </div>
                </div>
                <div class="col-md-4 col-sm-4 col-xs-12">
                    <div class="bg-white pinside40 number-block outline mb60 bg-boxshadow">
                        <div class="circle"><span class="number">2</span></div>
                        <h3 class="number-title">Accuracy</h3>
                        <p>our professional certified translator translate your document with accuracy in short time.</p>
                    </div>
                </div>
                <div class="col-md-4 col-sm-4 col-xs-12">
                    <div class="bg-white pinside40 number-block outline mb60 bg-boxshadow">
                        <div class="circle"><span class="number">3</span></div>
                        <h3 class="number-title">Low Pricing</h3>
                        <p>we provide professional translation with affordable pricing.</p>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-offset-2 col-md-8 col-sm-offset-2 col-sm-8 text-center"> <a href="#" class="btn btn-default">Visit Us And Get Your Translation Service</a> </div>
            </div>
        </div>
    </div>
    <div class="section-space80">
        <div class="container">
            <div class="row">
                <div class="col-md-offset-2 col-md-8">
                    <div class="mb60 text-center section-title">
                        <!-- section title start-->
                        <h1>Our Vision And Mission</h1>
                        <p>we have our mission and vision that make us distinct from other Translation Agencies.</p>
                    </div>
                    <!-- /.section title start-->
                </div>
            </div>
            <div class="row">
                <div class="col-md-12 col-sm-12 col-xs-12">
                    <div class="bg-white bg-boxshadow">
                        <div class="row">
                            <div class="col-md-4 col-sm-6 nopadding col-xs-12">
                                <div class="bg-white pinside60 number-block outline" style="height: 400px">
                                    <div class="mb20"><i class="icon-command  icon-4x icon-primary"></i></div>
                                    <h3>Our Vision</h3>
                                    <p>We aim to be a pioneer in the field of translation with diversified services covering the whole region.</p>
                                     </div>
                            </div>
                            <div class="col-md-4 col-sm-6 nopadding col-xs-12">
                                <div class="bg-white pinside60 number-block outline" style="height: 400px">
                                    <div class="mb20"><i class="icon-cup  icon-4x icon-primary"></i></div>
                                    <h3>Our Mission</h3>
                                    <p>To establish a database of linguists who are not only experienced in both linguistic and technical backgrounds but are also responsible with their assignments. </p>
                                   </div>
                            </div>
                            <div class="col-md-4 col-sm-12 nopadding col-xs-12" >
                                <div class="bg-white pinside60 number-block outline" style="height: 400px">
                                    <div class="mb20"><i class="icon-calculator  icon-4x icon-primary"></i></div>
                                    <h3>Progression</h3>
                                    <p> Alboraq  makes good progressions and soon we will be the best translation agency.</p>
                                     </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="bg-default section-space80">
        <div class="container">
            <div class="row">
                <div class="col-md-offset-2 col-md-8 col-sm-offset-2 col-sm-8">
                    <div class="mb60 text-center section-title">
                        <!-- section title start-->
                        <h1 class="title-white">What Customers Say About Us ?</h1>
                        <p> this is what customers say about Alboraq </p>
                    </div>
                    <!-- /.section title start-->
                </div>
            </div>
            <div class="row">
                <div class="col-md-4 col-sm-4 clearfix col-xs-12">
                    <div class="testimonial-block mb30">
                        <div class="bg-white pinside30 mb20">
                            <p class="testimonial-text"> “Thanks for understanding and continuing good work. If you ever need an international reference for a project, I would be happy to convey my experience with your firm. If I could have it back within aweek, that would be helpful.”</p>
                        </div>
                        <div class="testimonial-autor-box">
                            <div class="testimonial-img pull-left"><img src="images/download.jpg" alt="" style="width: 60px;height: 65px"> </div>
                            <div class="testimonial-autor pull-left">
                                <h4 class="testimonial-name">Mr David Tidwell</h4>
                                <span class="testimonial-meta">BG Americas and Global LNG</span> </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-4 col-sm-4 clearfix col-xs-12">
                    <div class="testimonial-block mb30">
                        <div class="bg-white pinside30 mb20">
                            <p class="testimonial-text"> “Excellent performance on the prompt translations”</p>
                        </div>
                        <div class="testimonial-autor-box">
                            <div class="testimonial-img pull-left"> <img src="images/download.jpg" alt="" style="width: 60px;height: 65px"></div>
                            <div class="testimonial-autor pull-left">
                                <h4 class="testimonial-name">Mr Paul MacDonald</h4>
                                <span class="testimonial-meta">Stena & Mr Mike George</span> </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-4 col-sm-4 clearfix col-xs-12">
                    <div class="testimonial-block mb30">
                        <div class="bg-white pinside30 mb20">
                            <p class="testimonial-text"> “Excellent performance on the prompt translations”</p>
                        </div>
                        <div class="testimonial-autor-box">
                            <div class="testimonial-img pull-left"> <img src="images/download.jpg" alt="" style="width: 60px;height: 65px"> </div>
                            <div class="testimonial-autor pull-left">
                                <h4 class="testimonial-name">HESS EHS Manager</h4>
                                <span class="testimonial-meta">HESS EHS Manager</span> </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="section-space80 bg-white">
        <div class="container">
            <div class="row">
                <div class="col-md-offset-2 col-md-8 col-sm-offset-2 col-sm-8">
                    <div class="mb60 text-center section-title">
                        <!-- section title-->
                        <h1>Quick Services </h1>
                        <p>choose your quick service </p>
                    </div>
                    <!-- /.section title-->
                </div>
            </div>
            <div class="row">
                <div class="col-md-4 col-sm-6 col-xs-12">
                    <div class="bg-white bg-boxshadow pinside40 outline text-center mb30">
                        <div class="mb40"><i class="icon-calendar-3 icon-2x icon-default"></i></div>
                        <h2 class="capital-title">Send Online Translation</h2>
                        <p>despite visiting our agency you can send your translation online ,we provide you professional online translation service</p>
                        <a href="#" class="btn-link">Send Your Translation</a> </div>
                </div>
                <div class="col-md-4 col-sm-6 col-xs-12">
                    <div class="bg-white bg-boxshadow pinside40 outline text-center mb30">
                        <div class="mb40"><i class="icon-phone-call icon-2x icon-default"></i></div>
                        <h2 class="capital-title">Call Us To Get More Information </h2>
                        <h1 class="text-big">202 22685650 </h1>

                        <p>alboraq@alboraq.com.eg</p>
                        <a href="#" class="btn-link">Contact us</a> </div>
                </div>
                <div class="col-md-4 col-sm-12 col-xs-12">
                    <div class="bg-white bg-boxshadow pinside40 outline text-center mb30">
                        <div class="mb40"> <i class="icon-users icon-2x icon-default"></i></div>
                        <h2 class="capital-title">Apply Online For Translator Jobs</h2>
                        <p>you need a job from home or full time in Alboraq you can fill our form and be our translator</p>
                        <a href="#" class="btn-link">Apply For Job Online</a> </div>
                </div>
            </div>
        </div>
    </div>





@stop
