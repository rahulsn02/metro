@extends('frontlayout.master')
@section('title','Metro')

@section('content')

  <?php 
                        
                         $profile_data = DB::table('company_profile')->get();
                        
                        ?>

    <!-- ***** Main Banner Area Start ***** -->
 
    <div class="page-heading about-page-heading" id="top">
    
              @if(session()->has('message'))
    <div class="alert alert-success">
        {{ session()->get('message') }}
    </div>
@endif
        <div class="container">
            <div class="row">
            
     
            
                <div class="col-lg-12">
                    <div class="inner-content">
                        <h2>Contact Us</h2>
                        <span>Awesome, Designer &amp; creative Tailors at {{$profile_data[0]->name}} </span>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- ***** Main Banner Area End ***** -->

    <!-- ***** Contact Area Starts ***** -->
    <div class="contact-us">
        <div class="container">
            <div class="row">
                <div class="col-lg-6">
                    <div id="map">
     
                      
                    <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3669.2797500176684!2d83.19446597531683!3d23.123447679103197!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3989a3c5f7e2d595%3A0x62dcae8278705d26!2sBabra%20Complex!5e0!3m2!1sen!2sin!4v1692256147826!5m2!1sen!2sin"width="100%" height="400px" frameborder="0" style="border:0" allowfullscreen></iframe>  
                      
                      
                      
                      <!-- You can simply copy and paste "Embed a map" code from Google Maps for any location. -->
                      
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="section-heading">
                        <h2>Say Hello. Don't Be Shy!</h2>
                        
                    </div>
                    <form id="contact" action="{{route('contact-post')}}" method="post">
                     @csrf
                        <div class="row">
                          <div class="col-lg-6">
                            <fieldset>
                              <input name="full_name" type="text" id="name" placeholder="Your name" required="">
                            </fieldset>
                          </div>
                          <div class="col-lg-6">
                            <fieldset>
                              <input name="email" type="text" id="email" placeholder="Your email" required="">
                            </fieldset>
                          </div>
                          <div class="col-lg-12">
                            <fieldset>
                              <textarea name="message" rows="6" id="message" placeholder="Your message" required=""></textarea>
                            </fieldset>
                          </div>
                          <div class="col-lg-12">
                            <fieldset>
                              <button type="submit" id="form-submit" class="main-dark-button"><i class="fa fa-paper-plane"></i></button>
                          </div>
                        </div>
                      </form>
                </div>
            </div>
        </div>
    </div>
    <!-- ***** Contact Area Ends ***** -->

    <!-- ***** Subscribe Area Starts ***** -->
    <div class="subscribe">
        <div class="container">
            <div class="row">
                <div class="col-lg-8">
                    <div class="section-heading">
                        <h2>By Subscribing To Our Newsletter You Can Get 30% Off</h2>
                     
                    </div>
                    <form id="subscribe" action="{{route('news-letter-post')}}" method="post">
                    @csrf
                        <div class="row">
                          <div class="col-lg-5">
                            <fieldset>
                              <input name="full_name" type="text" id="name" placeholder="Your Name" required="">
                            </fieldset>
                          </div>
                          <div class="col-lg-5">
                            <fieldset>
                              <input name="email" type="text" id="email" pattern="[^ @]*@[^ @]*" placeholder="Your Email Address" required="">
                            </fieldset>
                          </div>
                          <div class="col-lg-2">
                            <fieldset>
                              <button type="submit" id="form-submit" class="main-dark-button"><i class="fa fa-paper-plane"></i></button>
                            </fieldset>
                          </div>
                        </div>
                    </form>
                </div>
                <div class="col-lg-4">
                    <div class="row">
                        <div class="col-6">
                            <ul>
                                <li>Store Location:<br><span>{{$profile_data[0]->address}}</span></li>
                                <li>Phone:<br><span>{{$profile_data[0]->mobile}}</span></li>
                                
                            </ul>
                        </div>
                        <div class="col-6">
                            <ul>
                                <li>Work Hours:<br><span>{{$profile_data[0]->office_time}}</span></li>
                                <li>Email:<br><span>{{$profile_data[0]->email }}</span></li>
                                <li>Social Media:<br><span>
                                   <a href="{{$profile_data[0]->facebook_link}}"><i class="fa fa-facebook"></i></a>
                           <a href="{{$profile_data[0]->instagram_link}}"><i class="fa fa-twitter"></i></a>
                           <a href="{{$profile_data[0]->twitter_link}}"><i class="fa fa-linkedin"></i></a>
                            <a href="{{$profile_data[0]->linkdin_link}}"><i class="fa fa-instagram"></i></a>
                                
                                </span></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- ***** Subscribe Area Ends ***** -->


@endsection
