
@extends('master')
@section('content')

    <!-- .site-header -->
    <div class="hero-home-loan">
        <div class="container">
            <div class="row">
                <div class="col-md-12 col-sm-12 col-xs-12">
                    <div class="hero-captions text-center">
                        <h2 class="hero-title">Our Online Translation Service</h2>
                        <p class="hero-text">alboraq offers online translation service for all types of document with all languages . </p>
                        <div class="price-rate">
                            <div class="new-price"><span class="price-big"></span><small></small></div>
                        </div>
                    </div>
                </div>
                <div class="col-md-offset-1 col-md-10 col-xs-12 col-sm-12">
                    <div class="request-form">
                        <h2 class="form-title">Send Your Document To Translate It</h2>
                        <p>Alboraq offers online translation service to facilitate the provision of translation </p>
                        <form class="row" method="post" action="{{url('online-translation')}}">

                        {{ csrf_field() }}
                            <!-- Text input-->
                            <div class="form-group col-md-6">
                                <label class="control-label sr-only" for="name">Business Name</label>
                                <input id="name" name="business" type="text" placeholder="Business Name" class="form-control input-md" value="{{old('business')}}" >
                                <p style="color:#f51f8a">{{$errors->first('business')}}</p>
                            </div>
                            <!-- Text input-->

                            <div class="form-group col-md-6">
                                <label class="control-label sr-only" for="city">Source Language</label>
                                <select id="city" name="source" class="form-control">
                                 <option value="Arabic">Source Language</option> 
                                   <option value="Arabic">Arabic</option> 
                <option value="Bulgarian">Bulgarian</option> 
                <option value="Catalan">Catalan</option>
                <option value="Chinese(Simplified)">Chinese (Simplified)</option> 
                <option value="Chinese(Traditional)">Chinese (Traditional)</option> 
                <option value="Czech">Czech</option> 
                <option value="Danish">Danish</option> 
                <option value="Dutch">Dutch</option> 
                <option value="English" >English</option> 
                <option value="Estonian">Estonian</option> 
                <option value="Finnish">Finnish</option> 
                <option value="French">French</option> 
                <option value="German">German</option> 
                <option value="Greek">Greek</option> 
                <option value="HaitianCreole">Haitian Creole</option> 
                <option value="Hebrew">Hebrew</option> 
                <option value="Hindi">Hindi</option> 
                <option value="Hungarian">Hungarian</option> 
                <option value="Indonesian">Indonesian</option> 
                <option value="Italian">Italian</option> 
                <option value="Japanese">Japanese</option> 
                <option value="Korean">Korean</option> 
                <option value="Latvian">Latvian</option> 
                <option value="Lithuanian">Lithuanian</option> 
                <option value="Norwegian">Norwegian</option> 
                <option value="Polish">Polish</option> 
                <option value="Portuguese">Portuguese</option> 
                <option value="Romanian">Romanian</option> 
                <option value="Russian">Russian</option> 
                <option value="Slovak">Slovak</option> 
                <option value="Slovenian">Slovenian</option> 
                <option value="Spanish">Spanish</option> 
                <option value="Swedish">Swedish</option> 
                <option value="Thai">Thai</option> 
                <option value="Turkish">Turkish</option> 
                <option value="Ukrainian">Ukrainian</option> 
                <option value="Vietnamese">Vietnamese</option>
                <option value="other">Other</option>
                                </select>
                            </div>
                            <div class="form-group col-md-6">
                                <label class="control-label sr-only" for="email">Expert Volume</label>
                                <input id="email" name="volume" type="text" placeholder="Expert Volume" class="form-control input-md" value="{{old('volume')}}" >

                                <p style="color:#f51f8a">{{$errors->first('volume')}}</p>
                            </div>
                             <div class="form-group col-md-6">
                                <label class="control-label sr-only" for="city">Target Language</label>
                                <select id="city" name="target" class="form-control">
                                 <option value="Arabic">Target Language</option> 
                                   <option value="Arabic">Arabic</option> 
                <option value="Bulgarian">Bulgarian</option> 
                <option value="Catalan">Catalan</option>
                <option value="Chinese(Simplified)">Chinese (Simplified)</option> 
                <option value="Chinese(Traditional)">Chinese (Traditional)</option> 
                <option value="Czech">Czech</option> 
                <option value="Danish">Danish</option> 
                <option value="Dutch">Dutch</option> 
                <option value="English" >English</option> 
                <option value="Estonian">Estonian</option> 
                <option value="Finnish">Finnish</option> 
                <option value="French">French</option> 
                <option value="German">German</option> 
                <option value="Greek">Greek</option> 
                <option value="HaitianCreole">Haitian Creole</option> 
                <option value="Hebrew">Hebrew</option> 
                <option value="Hindi">Hindi</option> 
                <option value="Hungarian">Hungarian</option> 
                <option value="Indonesian">Indonesian</option> 
                <option value="Italian">Italian</option> 
                <option value="Japanese">Japanese</option> 
                <option value="Korean">Korean</option> 
                <option value="Latvian">Latvian</option> 
                <option value="Lithuanian">Lithuanian</option> 
                <option value="Norwegian">Norwegian</option> 
                <option value="Polish">Polish</option> 
                <option value="Portuguese">Portuguese</option> 
                <option value="Romanian">Romanian</option> 
                <option value="Russian">Russian</option> 
                <option value="Slovak">Slovak</option> 
                <option value="Slovenian">Slovenian</option> 
                <option value="Spanish">Spanish</option> 
                <option value="Swedish">Swedish</option> 
                <option value="Thai">Thai</option> 
                <option value="Turkish">Turkish</option> 
                <option value="Ukrainian">Ukrainian</option> 
                <option value="Vietnamese">Vietnamese</option>
                <option value="other">Other</option>
                                </select>
                            </div>
                            

                            <!-- Text input-->
                            <div class="form-group col-md-6">
                                <label class="control-label sr-only" for="phone">Field of translation</label>
                                <input id="phone" name="field" type="text" placeholder="Field of translation" class="form-control input-md" value="{{old('field')}}" >

                                <p style="color:#f51f8a">{{$errors->first('field')}}</p>
                            </div>
                            <div class="form-group col-md-6">
                                <label class="control-label sr-only" for="email">Comments</label>
                                <input id="email" name="comment" type="text" placeholder="Comments" class="form-control input-md"  value="{{old('comment')}}">
                                <p style="color:#f51f8a">{{$errors->first('comment')}}</p>
                            </div>
                            <div class="form-group" style="padding-left: 20px">
                                <label >Upload Document That You Want To Translate</label>
                                <input  name="file" type="file" >
                                <p style="color:#f51f8a">{{$errors->first('file')}}</p>
                            </div>
                             
                            
                            <!-- Select Basic -->
                           
                            
                            <!-- Button -->
                            <div class="form-group col-md-6">
                               
                                <button type="submit" class="btn btn-default btn-block">Send </button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>


@stop