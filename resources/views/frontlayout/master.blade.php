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

#item{
animation:backInRight; /* referring directly to the animation's @keyframe declaration */
  animation-duration: 2s

}


#imgStatus{

height:30px;

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
   width: 100%;
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
width:100%;
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
    
    
     <?php 
                        
                         $profile_data = DB::table('company_profile')->get();
                        
                        ?>
    
    
    <!-- ***** Header Area Start ***** -->
    <header class="header-area header-sticky">
          @if(session()->has('Newsletter'))
    <div class="alert alert-success">
        {{ session()->get('Newsletter') }}
    </div>
@endif
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <nav class="main-nav">
                        <!-- ***** Logo Start ***** -->
                        <a href="index.html" class="logo">
                            <img src="/compnay_logo/{{$profile_data[0]->logo}}" style="height: 90px;">
                        </a>
                        <!-- ***** Logo End ***** -->
                        <!-- ***** Menu Start ***** -->
                        
                          <?php 
                        
                         $posterCategory_data = DB::table('category')->where('status', '=', 1)->limit(4)->get();
                        
                        ?>
                        
                        
                        <ul class="nav">
                            <li class="scroll-to-section"><a href="/" class="active">Home</a></li>
                             @foreach($posterCategory_data as $category) 
                             
                            
                              
                            <li class="scroll-to-section"><a href="#" onclick=scrol_till(this);>{{$category->title}}</a></li>
                            @endforeach
    
    
                          <li class="scroll-to-section"><a href="/WHO-WE-ARE">About Us</a></li>
                            <li class="scroll-to-section"><a href="/CONTACT">Contact Us</a></li>
    
    
                           
                            
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
    
     <!-- ***** There Is code to track the order ***** -->
      <div class="fixed">
          
          
           <h4 style="border-bottom: 1px dashed #fff;">  <i class="fa fa-times" aria-hidden="true" id="close"></i>  
            <span style="text-align:center;color:white;">Track Your Order Here </span></h4>
            <br>
            
            
               <div style="width:100%;padding:45px;">
           
               <div style="width:30%;float:left;"> 
                   <select  id="year" style="padding: 5px;background: black;color: white;border-radius: 5px 5px 5px 5px;width:80%;">
                      <option value="2020">2020</option>
                      <option value="2021">2021</option>
                      <option value="2022">2022</option>
                       <option value="M-">M-</option>
                  <select>
               </div>
            
               <div  style="width:50%;float:left;"> 
                    <input type="text" name="search" value="" id="search" placeholder="Enter Slip No."/> 
                     <p style="font-size:8px;color: white;">* you can track order by the order no or mobile No.</p>
               </div> 
           
               <div  style="width:20%;float:right;"> 
                   <button id="search_btn">Search</button>
               </div>
               <br>

           </div>
           
           
           <div id="responseContainer" style="padding:45px;color:white;">
           
           
           </div>
            
          
                  
         

     </div> 
      <!-- ***** Footer Start ***** -->
    <footer>
        <div class="container">
            <div class="row">
                <div class="col-lg-3">
                    <div class="first-item">
                        <div class="logo" style="color:white;">
                            {{$profile_data[0]->name}}
                        </div>
                        <ul>
                            <li><a href="#">{{$profile_data[0]->address}}</a></li>
                            <li><a href="#">{{$profile_data[0]->email}}</a></li>
                            <li><a href="#">{{$profile_data[0]->mobile}}</a></li>
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
                        <li><a href="/">Homepage</a></li>
                        <li><a href="/WHO-WE-ARE">About Us</a></li>
                        <li><a href="/CONTACT">Contact Us</a></li>
                    </ul>
                </div>
                <div class="col-lg-3">
                    <h4>Help &amp; Information</h4>
                    <ul>
                        <li><a href="#">Help</a></li>
                        <li><a href="#">FAQ's</a></li>
                        
                    </ul>
                </div>
                <div class="col-lg-12">
                    <div class="under-footer">
                        <p>Copyright © 2023 {{$profile_data[0]->name}} Ltd. All Rights Reserved. 
                        
                        <br>Design: <a href="https://www.linkedin.com/in/rahul-saini-45041941/" target="_parent" title="desined by Rahul">Rahul Saini</a></p>
                        <ul>
                            <li><a href="{{$profile_data[0]->facebook_link}}"><i class="fa fa-facebook"></i></a></li>
                            <li><a href="{{$profile_data[0]->instagram_link}}"><i class="fa fa-twitter"></i></a></li>
                            <li><a href="{{$profile_data[0]->twitter_link}}"><i class="fa fa-linkedin"></i></a></li>
                            <li><a href="{{$profile_data[0]->linkdin_link}}"><i class="fa fa-instagram"></i></a></li>
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
    
    
     let search_string ='';
       var search_str = $("#search").val();
     
          if(search_str.length==10)
          {
          
            search_string = search_str;
          
          }else{
               
               let year = $("#year").val();
               
                 search_string = year+search_str
               
             // alert(search_string);
          
          }
          
          
                         
                     $.ajax({
                    type: "POST",
                    url: "https://metro.shristitch.com/track_status.php",
                    data: 'SLIP_NO=' + search_string,
                    cache: false,
                    success: function(response) {
                    
                   // alert(response);
                    
                         if(search_str.length==10)
                               { 
                               
                               var str = "Data Not Available";
                               
                               
                               
                                $("#responseContainer").html(str);
                               
                               }else{
          
                        
                        
                        
                        
                         var str = "";
                              $("#responseContainer").html(str);
                        
                     var obj = JSON.parse(response); 
                      
                        for(var i=0; i<obj.length; i++) {
                            
                            //alert(obj[i].istatus);
                         if(obj[i].istatus=='On Cutting'){ 
                             var img_string = 'cutting.jpg';    
                         }
                           if(obj[i].istatus=='On Stitching'){ 
                             var img_string = 'stitching.png';    
                         }
                         
                          if(obj[i].istatus=='Complete'){ 
                             var img_string = 'complete.png';    
                         }
                         
                            if(obj[i].istatus=='Ready From Worker'){ 
                             var img_string = 'complete.png';    
                         }
                         
                         
                         
                          if(obj[i].istatus=='Delivered'){ 
                             var img_string = 'delivered.png';    
                         }
                            
                      // alert(img_string);     
                      
                        
                              str+= "<div style='padding:20px' id='item'><h6 style='margin-bottom:0px;'>"+obj[i].item_title+"</h6><div class='daytime'><div class='imgContainer'> <img class='itemImage' src='icon/"+img_string+"' id='imgStatus'> <span class='itemLabel' id='labelSAREE'>"+obj[i].istatus+"</span></div></div></div>";  
                    }
                    
                   // alert(str);
                    
                     $("#responseContainer").html(str);
                     
                     
                     
                     }
                    
                    }
                    });
          
          
          
          

    
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
    
    
    
    
