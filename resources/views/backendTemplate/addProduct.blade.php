@extends('backendlayout.masterAdmin')
@section('title','Home')

@section('content')
 <div class="content-wrapper">
 
   <div class="content-header">
                    <div class="container-fluid">
                        <div class="row mb-2">
                            <div class="col-sm-6">
                                <h1 class="m-0 text-dark">Add Product</h1>
                            </div><!-- /.col -->
                            <div class="col-sm-6">
                                <ol class="breadcrumb float-sm-right">
                                    <li class="breadcrumb-item"><a href="#">Home</a></li>
                                    <li class="breadcrumb-item active">New Product</li>
                                </ol>
                            </div><!-- /.col -->
                        </div><!-- /.row -->
                    </div><!-- /.container-fluid -->
                </div>
                
                
                                  <?php
                                        $category = DB::table('category')->where('id', '=',$category_id)->get(['title']);
                                   
                                        ?>
                     <section class="content">
                    <div class="container-fluid">
                 
                      <div class="row">
                          <div class="col-md-12">
                                 <div class="card card-primary">
              <div class="card-header">
                <h3 class="card-title">Product Form <span style="font-size: 18px;font-weight: bolder;color: crimson;">{{$category[0]->title}}</span></h3>
              </div>
                <form action="{{route('product-post')}}" method="post" enctype="multipart/form-data">
                   @csrf
                <div class="card-body">
                    
                    <div class="row">
                    
                                <div class="col-md-3"></div>
                           <div class="col-md-6">
                               
                               
                 <div class="form-group">
                    <label for="exampleInputEmail1">Product Title</label>
                    <input type="Text" name="title" class="form-control" placeholder="Enter Product Title">
                    <input type="hidden" name="category_id" value="{{$category_id}}"/>
                    
                  </div>
                  
                   <div class="form-group">
                    <label for="exampleInputEmail1">Product Price</label>
                    <input type="Text" name="price" class="form-control" placeholder="Enter Product Price">
                    
                    
                  </div>
                  
                   <div class="form-group">
                    <label for="exampleInputEmail1">Product Description</label>
                   <textarea name="description" class="form-control" rows="5" id="comment"></textarea>
                    
                    
                  </div>
                  
                   
                  
                   <div class="form-group">
                    <label for="exampleInputEmail1">image</label>
                    <input type="file" name="image" class="form-control" placeholder="">
                  </div>   
                  
                  <button type="submit" name="submit" class="btn btn-primary">Add Product</button>
                  
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
                <h3 class="card-title">Product List</h3>
              </div>
            
                <div class="card-body"> 
            
                        <div class="row">
                            <div class="col-md-12">
                   
                            <?php
                                        $products_data = DB::table('products')->where('status', '=', 1)->where('category_id', '=',$category_id)->get();
                                       $count = 0;
                                        ?>

                                        <table id="example5" class="table table-bordered table-striped">
                                            <thead>
                                                <tr>
                                                    <th>S.No</th>
                                                    <th>Image</th>
                                                    <th>Title</th>
                                                     <th>Price </th>
                                                    <th>Description </th>  
                                                    <th>Action</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                <?php $count=0; ?>
                                              @foreach($products_data as $product)
                                                   <?php $count = $count + 1; ?>
                                              <tr>
                                                  <td>{{$count}}</td>
                                                  <td><img src={{asset("products_images/$product->image")}}  style="height:50px;width;50px;"></td>
                                                  <td>{{$product->title}}</td>
                                                  <td>{{$product->price}}</td>
                                                  <td>{{$product->description}}</td>
                                                    
                                                    
                                                        
                                                 <td>  <a href="{{url('Trash-Product',['id'=>$product->id,'photo'=>$product->image])}}" class="btn btn-danger btn-xs"> <i class="fa fa-trash" aria-hidden="true"></i> Delete</a>
                                                 
                                                
                                                 
                                                 </td>
                                                        
                                              </tr>
                                              
                     
                                           @endforeach
                                              </tbody>
                                            
                                            <tfoot>
                                                  <tr>
                                                   <th>S.No</th>
                                                    <th>Image</th>
                                                    <th>Title</th>
                                                     <th>Price </th>
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
