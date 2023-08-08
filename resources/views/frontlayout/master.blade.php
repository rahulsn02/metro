<!DOCTYPE html>
<html lang="en">

  <head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <link href="https://fonts.googleapis.com/css?family=Poppins:100,200,300,400,500,600,700,800,900&display=swap" rel="stylesheet">

    <title>@yield('title')</title>


    <!-- Additional CSS Files -->
    <link rel="stylesheet" type="text/css" href="{{asset('assets/css/bootstrap.min.css')}}">

    <link rel="stylesheet" type="text/css" href="{{asset('assets/css/font-awesome.css')}}">

    <link rel="stylesheet" href="{{asset('assets/css/templatemo-hexashop.css')}}">

    <link rel="stylesheet" href="{{asset('assets/css/owl-carousel.css')}}">

    <link rel="stylesheet" href="{{asset('assets/css/lightbox.css')}}">
    
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css"/>
<!--



-->
<style>
div.fixed {
 position: fixed;
top: 100px;
right: 0;
width: 500px;
height:100%;
border: 2px dashed #EEE;
background: #000000d6;
border-right: 0px;
display:none;
animation:backInRight; /* referring directly to the animation's @keyframe declaration */
  animation-duration: 2s
}

#track_btn{

background: white;
padding: 5px;
border: 1px solid #000;
border-radius: 5px 5px 5px 5px;
}

#close{
  padding: 10px;
  color: white;
  font-size: 28px;
  cursor: grab;
}

#search{
  border-bottom: 2px solid #FFF;
  background: #11050596;
  border-left: 0px;
  border-radius: 0px;
  border-right: 0px;
  border-top: 0px;
  color:white;
  padding: 5px;
}

#search:focus {
    outline: none;
    color:white;
}
#search_btn{

background: #0000;
color: white;
font-family: initial;
padding: 4px;
border: 1px dashed;
border-radius: 0px 4px 4px 0px;
}




</style>


    </head>
    
    <body>
    
    <!-- ***** Preloader Start ***** -->
    <div id="preloader">
        <div class="jumper">
            <div></div>
            <div></div>
            <div></div>
        </div>
    </div>  
    <!-- ***** Preloader End ***** -->
    
    
    <!-- ***** Header Area Start ***** -->
    <header class="header-area header-sticky">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <nav class="main-nav">
                        <!-- ***** Logo Start ***** -->
                        <a href="index.html" class="logo">
                            <img src="assets/images/logo.png" style="height: 90px;">
                        </a>
                        <!-- ***** Logo End ***** -->
                        <!-- ***** Menu Start ***** -->
                        
                          <?php 
                        
                         $posterCategory_data = DB::table('category')->where('status', '=', 1)->limit(4)->get();
                        
                        ?>
                        
                        
                        <ul class="nav">
                            <li class="scroll-to-section"><a href="#top" class="active">Home</a></li>
                             @foreach($posterCategory_data as $category) 
                             
                            
                              
                            <li class="scroll-to-section"><a href="#" onclick=scrol_till(this);>{{$category->title}}</a></li>
                            @endforeach
    
                            <li class="submenu">
                                <a href="javascript:;">Pages</a>
                                <ul>
                                    <li><a href="about.html">About Us</a></li>
                                    <li><a href="products.html">Products</a></li>
                                    <li><a href="single-product.html">Single Product</a></li>
                                    <li><a href="contact.html">Contact Us</a></li>
                                </ul>
                            </li>
                            
                           <li class="scroll-to-section"><button id="track_btn">Track Order Status</button></li> 
                         
                           
                        </ul>        
                        <a class='menu-trigger'>
                            <span>Menu</span>
                        </a>
                        <!-- ***** Menu End ***** -->
                    </nav>
                </div>
            </div>
        </div>
    </header>
    <!-- ***** Header Area End ***** -->
    @yield('content')
    
    
    
      <!-- ***** Footer Start ***** -->
    <footer>
        <div class="container">
            <div class="row">
                <div class="col-lg-3">
                    <div class="first-item">
                        <div class="logo">
                            <img src="assets/images/white-logo.png" alt="hexashop ecommerce templatemo">
                        </div>
                        <ul>
                            <li><a href="#">16501 Collins Ave, Sunny Isles Beach, FL 33160, United States</a></li>
                            <li><a href="#">hexashop@company.com</a></li>
                            <li><a href="#">010-020-0340</a></li>
                        </ul>
                    </div>
                </div>
                <div class="col-lg-3">
                    <h4>Shopping &amp; Categories</h4>
                     <?php 
                        
      $category_data = DB::table('category')->where('status', '=', 1)->get();
                        
    ?>
                    <ul>
                       @foreach($category_data as $category) 
                        <li><a href="#">{{$category->title}}’s Shopping</a></li>
                        @endforeach
                       
                    </ul>
                </div>
                <div class="col-lg-3">
                    <h4>Useful Links</h4>
                    <ul>
                        <li><a href="#">Homepage</a></li>
                        <li><a href="#">About Us</a></li>
                        <li><a href="#">Help</a></li>
                        <li><a href="#">Contact Us</a></li>
                    </ul>
                </div>
                <div class="col-lg-3">
                    <h4>Help &amp; Information</h4>
                    <ul>
                        <li><a href="#">Help</a></li>
                        <li><a href="#">FAQ's</a></li>
                        <li><a href="#">Shipping</a></li>
                        <li><a href="#">Tracking ID</a></li>
                    </ul>
                </div>
                <div class="col-lg-12">
                    <div class="under-footer">
                        <p>Copyright © 2022 HexaShop Co., Ltd. All Rights Reserved. 
                        
                        <br>Design: <a href="https://templatemo.com" target="_parent" title="free css templates">TemplateMo</a></p>
                        <ul>
                            <li><a href="#"><i class="fa fa-facebook"></i></a></li>
                            <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                            <li><a href="#"><i class="fa fa-linkedin"></i></a></li>
                            <li><a href="#"><i class="fa fa-behance"></i></a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </footer>
    

    <!-- jQuery -->
    <script src="assets/js/jquery-2.1.0.min.js"></script>

    <!-- Bootstrap -->
    <script src="assets/js/popper.js"></script>
    <script src="assets/js/bootstrap.min.js"></script>

    <!-- Plugins -->
    <script src="assets/js/owl-carousel.js"></script>
    <script src="assets/js/accordions.js"></script>
    <script src="assets/js/datepicker.js"></script>
    <script src="assets/js/scrollreveal.min.js"></script>
    <script src="assets/js/waypoints.min.js"></script>
    <script src="assets/js/jquery.counterup.min.js"></script>
    <script src="assets/js/imgfix.min.js"></script> 
    <script src="assets/js/slick.js"></script> 
    <script src="assets/js/lightbox.js"></script> 
    <script src="assets/js/isotope.js"></script> 
    
    <!-- Global Init -->
    <script src="assets/js/custom.js"></script>

    <script>
    
    
    $("#track_btn").click(function(){
    
    $(".fixed").toggle();
    
      $("#search").focus();
    
    })
    
    
    
    $("#close").click(function(){
    
    $(".fixed").toggle();
    
    });
    
    
    $("#search_btn").click(function(){
    
       var search_str =   $("#search").val();
     
          alert(search_str);

    
    });
    
    

  function scrol_till(obj){
  
  
   
     
       $(window).scrollTop($('.'+obj.text).offset().top);
  
       const element = $('.'+obj.text);
       element.classList.add('animate__animated', 'animate__bounceOutLeft');

      
      }



        $(function() {
            var selectedClass = "";
            $("p").click(function(){
            selectedClass = $(this).attr("data-rel");
            $("#portfolio").fadeTo(50, 0.1);
                $("#portfolio div").not("."+selectedClass).fadeOut();
            setTimeout(function() {
              $("."+selectedClass).fadeIn();
              $("#portfolio").fadeTo(50, 1);
            }, 500);
                
            });
        });
        
     
        

    </script>

  </body>
</html>
    
    
    
    
