@extends('backendlayout.masterAdmin')
@section('title','Home')

@section('content')
 <div class="content-wrapper">
 
   <div class="content-header">
                    <div class="container-fluid">
                        <div class="row mb-2">
                            <div class="col-sm-6">
                                <h1 class="m-0 text-dark">About page</h1>
                            </div><!-- /.col -->
                            <div class="col-sm-6">
                                <ol class="breadcrumb float-sm-right">
                                    <li class="breadcrumb-item"><a href="#">About</a></li>
                                    <li class="breadcrumb-item active">Who We Are</li>
                                </ol>
                            </div><!-- /.col -->
                        </div><!-- /.row -->
                    </div><!-- /.container-fluid -->
                </div>
                
                
                
                     <section class="content">
                    <div class="container-fluid">
                 
                      <div class="row">
                          <div class="col-md-12">
                                 <div class="card card-primary">
              <div class="card-header">
                <h3 class="card-title">About Form</h3>
              </div>
                <form action="{{route('who-we-are-post')}}" method="post">
                   @csrf
                <div class="card-body">
                    
                    <div class="row">
                      <div class="col-md-3"></div>
                           <div class="col-md-6">
                               
                               
                 <div class="form-group">
                    <label for="exampleInputEmail1">Ribbon Title</label>
                    <input type="Text" name="ribbon_title" class="form-control" placeholder="Enter Ribbon Title"> 
                  </div>
                  
                    <div class="form-group">
                    <label for="exampleInputEmail1">Description Title</label>
                    <input type="Text" name="title" class="form-control" placeholder="Enter Description Title">
                    
                  </div>
                  
                   <div class="form-group">
                    <label for="exampleInputEmail1">Description</label>
                   <textarea name="description" class="form-control" rows="5" id="comment"></textarea>
                    
                    
                  </div>
                  
          
                  <button type="submit" name="submit" class="btn btn-primary">Add</button>
                  
                </div>
               <div class="col-md-3"></div>
             </div>
                </div>
                </form>
                    </div>      
                    </div>
                      </div>
                      
                      
                   
                          
                          
                            
           <div class="card card-primary">
              <div class="card-header">
                <h3 class="card-title">About Content</h3>
              </div>
            
                <div class="card-body"> 
            
                        <div class="row">
                            <div class="col-md-12">
                   
                            <?php
                                        $about_page_data = DB::table('about_page')->get();
                                        $count = 0;
                                        ?>

                                 <table id="example5" class="table table-bordered table-striped">
                                            <thead>
                                                <tr>
                                                    <th>S.No</th>
                                                    <th>Ribbon Title</th>
                                                    <th>Title</th>
                                                    <th>Description </th>  
                                                    <th>Action</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                <?php $count=0; ?>
                                              @foreach($about_page_data as $page_data)
                                                   <?php $count = $count + 1; ?>
                                              <tr>
                                                  <td>{{$count}}</td>
                                                  
                                                  <td>{{$page_data->ribbon_title}}</td>
                                                  <td>{{$page_data->title}}</td>
                                                  <td>{{$page_data->description}}</td>
                                                    
                                                    
                                                        
                                                 <td>  <a href="{{url('Trash-About-Post',['id'=>$page_data->id])}}" class="btn btn-danger btn-xs"> <i class="fa fa-trash" aria-hidden="true"></i> Delete</a>
                                                 
                                                
                                                 
                                                 </td>
                                                        
                                              </tr>
                                              
                     
                                           @endforeach
                                              </tbody>
                                            
                                            <tfoot>
                                                  <tr>
                                                   <th>S.No</th>
                                                
                                                    <th>Ribbon Title</th>
                                                     <th>Title </th>
                                                    <th>Description </th>  
                                                    <th>Action</th>
                                                </tr>
                                            </tfoot>
                                        </table>
                                            
                                           
                                        </div>
                          </div>
                      </div>
                      </div>
                   

                </section>
 
   
</div>
@endsection
