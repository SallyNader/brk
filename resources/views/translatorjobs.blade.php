
@extends('master')
@section('content')



    <!-- .site-header -->
    <div class="hero">
        <div class="container">
            <div class="row">
                <div class="col-md-6 col-sm-12 col-xs-12">
                    <div class="hero-captions">
                        <h2 class="hero-title">Fill The Form And Be Our Translator </h2>
                        <p class="hero-text">if you are looking for translator jobs from home ,freelance , fulltime ,permanent or part time fill this form  </p>
                        
                      
                    </div>
                </div>
                <div class="col-md-5 col-md-offset-1 col-xs-12">
                    <div class="request-form">
                        <h2>Be Our Translator</h2>
                        <p>fill this form to join us and be our translator </p>
                        <form method="post" action="{{url('online-job')}}">
                        {{ csrf_field() }}
                            <!-- Text input-->
                            <div class="form-group">
                                <label class="control-label sr-only" for="name">Name</label>
                                <input id="name" name="name" type="text" placeholder="Name" class="form-control input-md" value="{{old('name')}}" >

                                <p style="color:#f51f8a">{{$errors->first('name')}}</p>
                            </div>

                             <div class="form-group">
                                <label class="control-label sr-only" for="city">Gender</label>
                                <select id="city" name="gender" class="form-control">
                                    <option value="Female">Female</option>
                                    <option value="Male">Male</option>
                                    
                                </select>
                            </div>
                            <!-- Text input-->
                            <div class="form-group">
                                <label class="control-label sr-only" for="email">E-Mail</label>
                                <input id="email" name="email" type="text" placeholder="E-mail" class="form-control input-md" value="{{old('email')}}" >
                                <p style="color:#f51f8a">{{$errors->first('email')}}</p>
                            </div>
                            <!-- Text input-->
                            <div class="form-group">
                                <label class="control-label sr-only" for="phone">Phone</label>
                                <input id="phone" name="phone" type="text" placeholder="Phone" class="form-control input-md" value="{{old('phone')}}" >
                                <p style="color:#f51f8a">{{$errors->first('phone')}}</p>
                            </div>



                            
                            <!-- Text input-->
                            <div class="form-group">
                                <label class="control-label sr-only" for="phone">Language Pair</label>
                                <input id="phone" name="language" type="text" placeholder="Language Pair" class="form-control input-md" value="{{old('language')}}" >
                                <p style="color:#f51f8a">{{$errors->first('language')}}</p>
                            </div>



                            <!-- Text input-->
                            <div class="form-group">
                                <label class="control-label sr-only" for="email">Daily Output Capacity</label>
                                <input id="email" name="capacity" type="text" placeholder="Daily Output Capacity" class="form-control input-md" value="{{old('capacity')}}" >
                                <p style="color:#f51f8a">{{$errors->first('capacity')}}</p>
                            </div>


                             <div class="form-group">
                                <label class="control-label sr-only" for="city">Job Type</label>
                                <select id="city" name="jobtime" class="form-control">
                                    <option value="Full Time">Full Time</option>
                                    <option value="Freelance">Freelance</option>
                                    <option value="Permanent">Permanent</option>
                                    <option value="Part Time">Part Time</option>
                                    <option value="From Home">From Home</option>
                                </select>
                            </div>


                            <div class="form-group">
                                <label class="control-label sr-only" for="name">Speciality</label>
                                <input id="name" name="speciality" type="text" placeholder="Speciality" class="form-control input-md"  value="{{old('speciality')}}">
                                <p style="color:#f51f8a">{{$errors->first('speciality')}}</p>
                            </div>
                            <!-- Text input-->
                            <div class="form-group">
                                <label class="control-label sr-only" for="email">Years of experience</label>
                                <input id="email" name="experience" type="text" placeholder="Years of experience" class="form-control input-md" value="{{old('experience')}}" >
                                <p style="color:#f51f8a">{{$errors->first('experience')}}</p>
                            </div>
                            <!-- Text input-->
                            <div class="form-group">
                                <label class="control-label sr-only" for="phone">Your Address</label>
                                <input id="phone" name="address" type="text" placeholder="Your Address" class="form-control input-md" value="{{old('address')}}">
                                <p style="color:#f51f8a">{{$errors->first('address')}}</p>
                            </div>
                            <!-- Select Basic -->

                          <div class="form-group">
                                <label >Upload Your CV</label>
                                <input  name="cv" type="file" >
                                <p style="color:#f51f8a">{{$errors->first('cv')}}</p>
                            </div>
                            
                            <!-- Button -->
                            <div class="form-group">
                                <button type="submit" class="btn btn-default btn-block">Apply</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>

@stop