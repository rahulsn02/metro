@extends('backendlayout.masterAdmin')
@section('title','Home')

@section('content')
 <div class="content-wrapper">
 
   <div class="content-header">
                    <div class="container-fluid">
                        <div class="row mb-2">
                            <div class="col-sm-6">
                                <h1 class="m-0 text-dark">Company</h1>
                            </div><!-- /.col -->
                            <div class="col-sm-6">
                                <ol class="breadcrumb float-sm-right">
                                    <li class="breadcrumb-item"><a href="#">Home</a></li>
                                    <li class="breadcrumb-item active">Company Profile</li>
                                </ol>
                            </div><!-- /.col -->
                        </div><!-- /.row -->
                    </div><!-- /.container-fluid -->
                </div>
                
                
                                  <?php
                                        $comapny_data = DB::table('company_profile')->get();
                                   
                                        ?>
                     <section class="content">
                    <div class="container-fluid">
                 
                      <div class="row">
                          <div class="col-md-12">
                                 <div class="card card-primary">
              <div class="card-header">
                <h3 class="card-title">Company Form</h3>
              </div>
                <form action="{{route('company-profile')}}" method="post" enctype="multipart/form-data">
                   @csrf
                <div class="card-body">
                    
                    <div class="row">
                    
                                <div class="col-md-3"></div>
                                
                <div class="col-md-6">
                    <div class="form-group">
                    <label for="exampleInputEmail1">image</label>
                   <img src='compnay_logo/{{$comapny_data[0]->logo}}'   style="height:50px;"/>
                    <input type="file" name="image" class="form-control" placeholder="">
                    <input type="hidden" name="logo" class="form-control" value="{{$comapny_data[0]->logo}}" placeholder=""/>
                    
                  </div>  
                               
                 <div class="form-group">
                    <label for="exampleInputEmail1">Company Name</label>
                    <input type="Text" name="name" class="form-control" placeholder="Enter Company Name Here..." value="{{$comapny_data[0]->name}}">
                   
                    
                  </div>
                  
                   <div class="form-group">
                    <label for="exampleInputEmail1">Email</label>
                    <input type="Text" name="email" class="form-control" placeholder="Enter Email of company" value="{{$comapny_data[0]->email}}">
                  </div>
                  
                  
                  <div class="form-group">
                    <label for="exampleInputEmail1">mobile</label>
                    <input type="Text" name="mobile" class="form-control" placeholder="Enter Email of company" value="{{$comapny_data[0]->mobile}}">
                  </div>
                  
                   
                   <div class="form-group">
                      <label for="exampleInputEmail1">Office Timing</label>
                       <input type="Text" name="office_time" class="form-control" placeholder="Enter Office Timing" value="{{$comapny_data[0]->office_time}}"> 
                   </div>
                  
                    <div class="form-group">
                      <label for="exampleInputEmail1">Gstin</label>
                       <input type="Text" name="gstin" class="form-control" placeholder="Enter gstin" value="{{$comapny_data[0]->gstin}}"> 
                   </div>
                   
                     <div class="form-group">
                      <label for="exampleInputEmail1">Facebook</label>
                       <input type="Text" name="facebook_link" class="form-control" placeholder="Enter facebook profile link" value="{{$comapny_data[0]->facebook_link}}"> 
                   </div>
                   
                    <div class="form-group">
                      <label for="exampleInputEmail1">Instagram</label>
                       <input type="Text" name="instagram_link" class="form-control" placeholder="Enter facebook profile link" value="{{$comapny_data[0]->instagram_link}}"> 
                   </div>
                   
                    <div class="form-group">
                      <label for="exampleInputEmail1">twitter</label>
                       <input type="Text" name="twitter_link" class="form-control" placeholder="Enter facebook profile link" value="{{$comapny_data[0]->twitter_link}}"> 
                   </div>
                   
                    <div class="form-group">
                      <label for="exampleInputEmail1">Linkdin</label>
                       <input type="Text" name="linkdin_link" class="form-control" placeholder="Enter facebook profile link" value="{{$comapny_data[0]->linkdin_link}}"> 
                   </div>
                   
                   
                  
                  
                   <div class="form-group">
                    <label for="exampleInputEmail1">Address</label>
                   <textarea name="address" class="form-control" rows="5" id="comment">{{$comapny_data[0]->address}}</textarea>
                    
                    
                  </div>
                  
                   
                  
                  
                  
                  <button type="submit" name="submit" class="btn btn-primary">Update Profile</button>
                  
                </div>
               <div class="col-md-3"></div>
             </div>
                </div>
                </form>
                    </div>      
                    </div>
                      </div>
                      
                      
                   
                          
                          
                            
        
                   

                </section>
 
   
</div>
@endsection
