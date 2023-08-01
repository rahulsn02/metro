@extends('backendlayout.masterAdmin')
@section('title','Home')

@section('content')
 <div class="content-wrapper">
 
   <div class="content-header">
                    <div class="container-fluid">
                        <div class="row mb-2">
                            <div class="col-sm-6">
                                <h1 class="m-0 text-dark">Create Category</h1>
                            </div><!-- /.col -->
                            <div class="col-sm-6">
                                <ol class="breadcrumb float-sm-right">
                                    <li class="breadcrumb-item"><a href="#">Home</a></li>
                                    <li class="breadcrumb-item active">New Category</li>
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
                <h3 class="card-title">Category Form</h3>
              </div>
                <form action="{{route('category-post')}}" method="post" enctype="multipart/form-data">
                   @csrf
                <div class="card-body">
                    
                    <div class="row">
                    
                                <div class="col-md-3"></div>
                           <div class="col-md-6">
                               
                               
                 <div class="form-group">
                    <label for="exampleInputEmail1">Category Title</label>
                    <input type="Text" name="title" class="form-control" placeholder="Enter Event Title">
                    <input type="hidden" name="base" value="{{$base}}"/>
                    
                  </div>
                  
                   <div class="form-group">
                    <label for="exampleInputEmail1">Category Description</label>
                   <textarea name="description" class="form-control" rows="5" id="comment"></textarea>
                    
                    
                  </div>
                  
                   
                  
                   <div class="form-group">
                    <label for="exampleInputEmail1">image</label>
                    <input type="file" name="image" class="form-control" placeholder="">
                  </div>   
                  
                  <button type="submit" name="submit" class="btn btn-primary">Add Category</button>
                  
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
                <h3 class="card-title">Events List</h3>
              </div>
            
                <div class="card-body"> 
            
                        <div class="row">
                            <div class="col-md-12">
                   
                            <?php
                                        $category_data = DB::table('category')->where('status', '=', 1)->where('base', '=', $base)->get();
                                        $count = 0;
                                        ?>

                                        <table id="example5" class="table table-bordered table-striped">
                                            <thead>
                                                <tr>
                                                    <th>S.No</th>
                                                    <th>Image</th>
                                                    <th>Title</th>
                                                    <th>Description </th>
                                                   
                                                    <th>Action</th>
                                                </tr>
                                            </thead>
                                               <tbody>
                                                <?php $count=0; ?>
                                              @foreach($category_data as $category)
                                                   <?php $count = $count + 1; ?>
                                              <tr>
                                                  <td>{{$count}}</td>
                                                  <td><img src={{asset("category_images/$category->image")}}  style="height:50px;width;50px;"></td>
                                                  <td>{{$category->title}}</td>
                                                  <td>{{$category->description}}</td>
                                                    
                                                    
                                                        
                                                 <td>  <a href="{{url('Trash-Category',['id'=>$category->id,'photo'=>$category->image])}}" class="btn btn-danger btn-xs" target="_blank"> <i class="fa fa-trash" aria-hidden="true"></i> Delete</a></td>
                                                        
                                              </tr>
                                              
                     
                                           @endforeach
                                              </tbody>
                                            
                                            <tfoot>
                                                  <tr>
                                                    <th>S.No</th>
                                                    <th>Title</th>
                                                    <th>Description </th>
                                                    <th>Start Date</th>
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
