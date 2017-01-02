
@extends('master')
@section('content')


<div class="page-header">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="page-breadcrumb">
                        <ol class="breadcrumb">
                            <li><a href="index.html">Home</a></li>
                            <li class="active">Contact us</li>
                        </ol>
                    </div>
                </div>
                <div class="col-md-12 col-sm-12 col-xs-12">
                    <div class="bg-white pinside30">
                        <div class="row">
                            <div class="col-md-4 col-sm-5">
                                <h1 class="page-title">Contact us</h1>
                            </div>
                            <div class="col-md-8 col-sm-7">
                                <div class="row">
                                    <div class="col-md-12 col-sm-12">
                                        <div class="btn-action"> <a href="{{url('online-translation')}}" class="btn btn-default">Send Online Translation</a> </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="sub-nav" id="sub-nav">
                        <ul class="nav nav-justified">
                            <li><a href="contact-us.html">Give me call back</a></li>
                            <li><a href="#">Emi Caculator</a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class=" ">
        <!-- content start -->
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="wrapper-content bg-white pinside40">
                        <div class="contact-form mb60">
                        <!--
                            <div class=" ">
                                <div class="col-md-offset-2 col-md-8 col-sm-12 col-xs-12">
                                    <div class="mb60  section-title text-center  ">
                                       
                                        <h1>Get In Touch</h1>
                                        <p>Reach out to us &amp; we will respond as soon as we can.</p>
                                    </div>
                                </div>
                                <div class="row">
                                    <form class="contact-us" method="post" action="http://jituchauhan.com/borrow/borrow/contact-us.php">
                                        <div class=" ">
                                            
                                            <div class="col-md-4 col-sm-12 col-xs-12">
                                                <div class="form-group">
                                                    <label class="sr-only control-label" for="name">name<span class=" "> </span></label>
                                                    <input id="name" name="name" type="text" placeholder="Name" class="form-control input-md" required>
                                                </div>
                                            </div>
                                            
                                            <div class="col-md-4 col-sm-12 col-xs-12">
                                                <div class="form-group">
                                                    <label class="sr-only control-label" for="email">Email<span class=" "> </span></label>
                                                    <input id="email" name="email" type="email" placeholder="Email" class="form-control input-md" required>
                                                </div>
                                            </div>
                                            
                                            <div class="col-md-4 col-sm-12 col-xs-12">
                                                <div class="form-group">
                                                    <label class="sr-only control-label" for="phone">Phone<span class=" "> </span></label>
                                                    <input id="phone" name="phone" type="text" placeholder="Phone" class="form-control input-md" required>
                                                </div>
                                            </div>
                                          
                                            <div class="col-md-12 col-xs-12">
                                                <div class="form-group">
                                                    <label class="control-label" for="message"> </label>
                                                    <textarea class="form-control" id="message" rows="7" name="message" placeholder="Message"></textarea>
                                                </div>
                                            </div>
                                            
                                            <div class="col-md-12 col-xs-12">
                                                <button type="submit" class="btn btn-default">Submit</button>
                                            </div>
                                        </div>
                                    </form>
                                </div>
                            </div>
                           .section title start-->
                        </div>
                        <div class="contact-us mb60">
                            <div class="row">
                                <div class="col-md-12">
                                    <div class="mb60  section-title">
                                        <!-- section title start-->
                                        <h1>We are here to help you </h1>
                                        <p class="lead">you can call us to get information , or send your translation online</p>
                                    </div>
                                    <!-- /.section title start-->
                                </div>
                            </div>
                          <div class="row">
                <div class="col-md-offset-2 col-md-8 col-sm-offset-2 col-sm-8">
                    <div class="mb60 text-center section-title">
                        <!-- section title-->
                        
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
                        <div class="map" id="googleMap"></div>
                        <script>
    function initMap() {
        var myLatLng = {
            lat: 23.0225,
            lng: 72.5714
        };

        var map = new google.maps.Map(document.getElementById('googleMap'), {
            zoom: 8,
            center: myLatLng,
            scrollwheel: false,

        });
        var image = 'images/map-pin.png';
        var marker = new google.maps.Marker({
            position: myLatLng,
            map: map,
            icon: image,
            title: 'Hello World!'

        });
    }
    </script>
     <script async defer
    src="https://maps.googleapis.com/maps/api/js?key=AIzaSyABSO5iwX5h7hIsmVvuk7n0zmAqzvWKXYw&callback=initMap">
    </script> 
                    </div>
                </div>
            </div>
        </div>
    </div>

@stop