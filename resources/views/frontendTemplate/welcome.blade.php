@extends('frontlayout.master')
@section('title','Metro')

@section('content')

    <!-- ***** Main Banner Area Start ***** -->
    <div class="main-banner" id="top">
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-6">
                    <div class="left-content">
                        <div class="thumb">
                            <div class="inner-content">
                                <h4>We Are Le Merto</h4>
                                <span>Awesome, designer &amp; creative Tailors</span>
                               <!-- <div class="main-border-button">
                                    <a href="#">Purchase Now!</a>
                                </div>-->
                            </div>
                            <img src="assets/images/left-banner-image.jpg" alt="">
                        </div>
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="right-content">
                        <div class="row">
                           <?php 
                        
                         $posterCategory_data = DB::table('category')->where('status', '=', 1)->limit(4)->get();
                        
                        ?>
                      
                            @foreach($posterCategory_data as $posterCategory)
                            <div class="col-lg-6">
                                <div class="right-first-image">
                                    <div class="thumb">
                                        <div class="inner-content">
                                            <h4>{{$posterCategory->title}}</h4>
                                            <span>Best Clothes For {{$posterCategory->title}}</span>
                                        </div>
                                        <div class="hover-content">
                                            <div class="inner">
                                                <h4>{{$posterCategory->title}}</h4>
                                                <p>{{$posterCategory->description}}</p>
                                                <div class="main-border-button">
                                                    <a href="#">Discover More</a>
                                                </div>
                                            </div>
                                        </div>
                                        <img src={{asset("category_images/$posterCategory->image")}}>
                                    </div>
                                </div>
                            </div>
                          @endforeach
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- ***** Main Banner Area End ***** -->

    <!-- ***** Men Area Starts ***** -->
    <?php 
                        
      $category_data = DB::table('category')->where('status', '=', 1)->get();
                        
    ?>
    
   @foreach($category_data as $category) 
    
    <section class="section {{$category->title}}" id="men">
        <div class="container">
            <div class="row">
                <div class="col-lg-6">
                    <div class="section-heading">
                        <h2>{{$category->title}} Latest</h2>
                        <span>{{$category->description}}</span>
                    </div>
                </div>
            </div>
        </div>
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="men-item-carousel">
                        <div class="owl-men-item owl-carousel">
                        <?php 
                        //-----------Product data according to their category------
                         $products_data = DB::table('products')->where('status', '=', 1)->where('category_id', '=', $category->id)->get();
                        
                        ?>
                        
                        @foreach($products_data as $product)
                            <div class="item">
                                <div class="thumb">
                                    <!---<div class="hover-content">
                                        <ul>
                                            <li><a href="single-product.html"><i class="fa fa-eye"></i></a></li>
                                            <li><a href="single-product.html"><i class="fa fa-star"></i></a></li>
                                            <li><a href="single-product.html"><i class="fa fa-shopping-cart"></i></a></li>
                                        </ul>
                                    </div>--->
                                    <img src={{asset("products_images/$product->image")}} alt="">
                                </div>
                                <div class="down-content">
                                    <h4>{{$product->title}}</h4>
                                   <!-- <span><i class="fa fa-rupee"></i> {{$product->price}}</span>--->
                                   <!--- <ul class="stars">
                                        <li><i class="fa fa-star"></i></li>
                                        <li><i class="fa fa-star"></i></li>
                                        <li><i class="fa fa-star"></i></li>
                                        <li><i class="fa fa-star"></i></li>
                                        <li><i class="fa fa-star"></i></li>
                                    </ul>---->
                               </div>
                            </div>
                        @endforeach
                            
                        </div>
                    </div>
                    
                    
                </div>
            </div>
        </div>
    </section>
    <!-- ***** Men Area Ends ***** -->
  @endforeach
    

   



    <!-- ***** Social Area Starts ***** -->
    <!---<section class="section" id="social">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="section-heading">
                        <h2>Social Media</h2>
                        <span>Details to details is what makes Hexashop different from the other themes.</span>
                    </div>
                </div>
            </div>
        </div>
        <div class="container">
            <div class="row images">
                <div class="col-2">
                    <div class="thumb">
                        <div class="icon">
                            <a href="http://instagram.com">
                                <h6>Fashion</h6>
                                <i class="fa fa-instagram"></i>
                            </a>
                        </div>
                        <img src="assets/images/instagram-01.jpg" alt="">
                    </div>
                </div>
                <div class="col-2">
                    <div class="thumb">
                        <div class="icon">
                            <a href="http://instagram.com">
                                <h6>New</h6>
                                <i class="fa fa-instagram"></i>
                            </a>
                        </div>
                        <img src="assets/images/instagram-02.jpg" alt="">
                    </div>
                </div>
                <div class="col-2">
                    <div class="thumb">
                        <div class="icon">
                            <a href="http://instagram.com">
                                <h6>Brand</h6>
                                <i class="fa fa-instagram"></i>
                            </a>
                        </div>
                        <img src="assets/images/instagram-03.jpg" alt="">
                    </div>
                </div>
                <div class="col-2">
                    <div class="thumb">
                        <div class="icon">
                            <a href="http://instagram.com">
                                <h6>Makeup</h6>
                                <i class="fa fa-instagram"></i>
                            </a>
                        </div>
                        <img src="assets/images/instagram-04.jpg" alt="">
                    </div>
                </div>
                <div class="col-2">
                    <div class="thumb">
                        <div class="icon">
                            <a href="http://instagram.com">
                                <h6>Leather</h6>
                                <i class="fa fa-instagram"></i>
                            </a>
                        </div>
                        <img src="assets/images/instagram-05.jpg" alt="">
                    </div>
                </div>
                <div class="col-2">
                    <div class="thumb">
                        <div class="icon">
                            <a href="http://instagram.com">
                                <h6>Bag</h6>
                                <i class="fa fa-instagram"></i>
                            </a>
                        </div>
                        <img src="assets/images/instagram-06.jpg" alt="">
                    </div>
                </div>
            </div>
        </div>
    </section>--->
    <!-- ***** Social Area Ends ***** -->

    <!-- ***** Subscribe Area Starts ***** -->
    <div class="subscribe">
        <div class="container">
            <div class="row">
                <div class="col-lg-8">
                    <div class="section-heading">
                        <h2>By Subscribing To Our Newsletter You Can Get Interesting Offer</h2>
                       
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
                         <?php 
                        
                         $profile_data = DB::table('company_profile')->get();
                        
                        ?>
                        
                            <ul>
                                <li>Store Location:<br><span>{{$profile_data[0]->address}}</span></li>
                                <li>Phone:<br><span>{{$profile_data[0]->mobile}}</span></li>
                                
                            </ul>
                        </div>
                        <div class="col-6">
                            <ul>
                                <li>Work Hours:<br><span>{{$profile_data[0]->office_time}}</span></li>
                                <li>Email:<br><span>{{$profile_data[0]->email}}</span></li>
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
