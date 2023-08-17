@extends('backendlayout.masterAdmin')
@section('title','Home')

@section('content')
 <div class="content-wrapper">
 
                             
           <div class="card card-primary">
              <div class="card-header">
                <h3 class="card-title">Contact List By Users</h3>
              </div>
              
                        @if(session()->has('trashMessage'))
    <div class="alert alert-success">
        {{ session()->get('trashMessage') }}
    </div>
@endif


          @if(session()->has('trashNewsletter'))
    <div class="alert alert-success">
        {{ session()->get('trashNewsletter') }}
    </div>
@endif
            
                <div class="card-body"> 
            
                        <div class="row">
                            <div class="col-md-12">
                   
                            <?php
                                        $users_contact_data = DB::table('users_contact')->get();
                                       $count = 0;
                                        ?>

                                        <table id="example5" class="table table-bordered table-striped">
                                            <thead>
                                                <tr>
                                                    <th>S.No</th>
                                                    <th>Full Name</th>
                                                    <th>Email</th>
                                                     <th>Message </th> 
                                                    <th>Action</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                <?php $count=0; ?>
                                              @foreach($users_contact_data as  $user_contact_data)
                                                   <?php $count = $count + 1; ?>
                                              <tr>
                                                  <td>{{$count}}</td>
                                                
                                                  <td>{{$user_contact_data->full_name}}</td>
                                                  <td>{{$user_contact_data->email}}</td>
                                                  <td>{{$user_contact_data->message}}</td>
                                                    
                                                    
                                                        
                                                 <td>  <a href="{{url('Trash-Message',['id'=>$user_contact_data->id])}}" class="btn btn-danger btn-xs"> <i class="fa fa-trash" aria-hidden="true"></i> Delete</a>
                                                 
                                                
                                                 
                                                 </td>
                                                        
                                              </tr>
                                              
                     
                                           @endforeach
                                              </tbody>
                                            
                                            <tfoot>
                                                  <tr>
                                                  <th>S.No</th>
                                                    <th>Full Name</th>
                                                    <th>Email</th>
                                                     <th>Message </th> 
                                                    <th>Action</th>
                                                </tr>
                                            </tfoot>
                                        </table>
                                        </div>
                          </div>
                      </div>
                      </div>
                      
                     <div class="card card-primary">
              <div class="card-header">
                <h3 class="card-title">News Letter List By Users</h3>
              </div>
            
                <div class="card-body"> 
            
                        <div class="row">
                            <div class="col-md-12">
                   
                            <?php
                                        $news_letters = DB::table('news_letters')->get();
                                       $count = 0;
                                        ?>

                                        <table id="example5" class="table table-bordered table-striped">
                                            <thead>
                                                <tr>
                                                    <th>S.No</th>
                                                    <th>Full Name</th>
                                                    <th>Email</th>
                                                      <th>Status</th>
                                                    <th>Action</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                <?php $count=0; ?>
                                              @foreach($news_letters as  $news_letter)
                                                   <?php $count = $count + 1; ?>
                                              <tr>
                                                  <td>{{$count}}</td>
                                                
                                                  <td>{{$news_letter->full_name}}</td>
                                                  <td>{{$news_letter->email}}</td>
                                                 
                                                     <td>@if($news_letter->status==1)
                                                           <label class="success">Active</label>
                                                          @else 
                                                             <label>Deactivated</label>
                                                         @endif  
                                                     </td>
                                                    
                                                        
                                                 <td>  <a href="{{url('Trash-Newsletter',['id'=>$news_letter->id])}}" class="btn btn-danger btn-xs"> <i class="fa fa-trash" aria-hidden="true"></i> Delete</a>
                                                 
                                                
                                                 
                                                 </td>
                                                        
                                              </tr>
                                              
                     
                                           @endforeach
                                              </tbody>
                                            
                                            <tfoot>
                                                  <tr>
                                                  <th>S.No</th>
                                                    <th>Full Name</th>
                                                    <th>Email</th>
                                                    <th>Status</th>
                                                    <th>Action</th>
                                                </tr>
                                            </tfoot>
                                        </table>
                                        </div>
                          </div>
                      </div>
                      </div> 
                      
                      
 
   
</div>
@endsection
