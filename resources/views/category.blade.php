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
                <form action="" method="post">
                   @csrf
                <div class="card-body">
                    
                    <div class="row">
                    
                                <div class="col-md-3"></div>
                           <div class="col-md-6">
                               
                               
                 <div class="form-group">
                    <label for="exampleInputEmail1">Category Title</label>
                    <input type="Text" name="title" class="form-control" placeholder="Enter Event Title">
                    <input type="hidden" name="base" value=""/>
                    
                  </div>
                  
                   
                  
                   <div class="form-group">
                    <label for="exampleInputEmail1">image</label>
                    <input type="file" name="category_image" class="form-control" placeholder="Enter Event Title">
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
                                       // $events = DB::table('events')->where('status', '=', 1)->get();
                                       // $count = 0;
                                        ?>

                                        <table id="example5" class="table table-bordered table-striped">
                                            <thead>
                                                <tr>
                                                    <th>S.No</th>
                                                    <th>Title</th>
                                                    <th>Description </th>
                                                    <th>Program Date</th>
                                                    <th>Action</th>
                                                </tr>
                                            </thead>
                                            
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
