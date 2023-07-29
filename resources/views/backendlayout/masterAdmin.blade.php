<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
     <title>@yield('title')</title>
        <!-- Tell the browser to be responsive to screen width -->
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <!-- Font Awesome -->
        <link rel="stylesheet" href="{{asset('assets/admin_css/all.min.css')}}">
        <!-- Ionicons -->
        <link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">

        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.3.0/css/all.min.css">
        <!-- Tempusdominus Bbootstrap 4 -->
        <link rel="stylesheet" href="{{asset('assets/admin_css/tempusdominus-bootstrap-4.min.css')}}">
        <!-- iCheck -->
        <link rel="stylesheet" href="{{asset('assets/admin_css/icheck-bootstrap.min.css')}}">
        <!-- JQVMap -->
        <link rel="stylesheet" href="{{asset('assets/admin_css/dataTables.bootstrap4.css')}}">
        <!-- Theme style -->
        <link rel="stylesheet" href="{{asset('assets/admin_css/adminlte.min.css')}}">
        <!-- overlayScrollbars -->
        <link rel="stylesheet" href="{{asset('assets/admin_css/OverlayScrollbars.min.css')}}">
          <link rel="stylesheet" href="{{asset('assets/admin_css/bootstrap-editable.css')}}">
        <!-- Daterange picker -->
        <link rel="stylesheet" href="{{asset('assets/admin_css/daterangepicker.css')}}">
        <!-- summernote -->
        <link rel="stylesheet" href="{{asset('assets/admin_css/summernote-bs4.css')}}">
        
        
          <link rel="stylesheet" href="{{asset('assets/admin_css/fullcalendar/main.min.css')}}">
  <link rel="stylesheet" href="{{asset('assets/admin_css/fullcalendar-interaction/main.min.css')}}">
  <link rel="stylesheet" href="{{asset('assets/admin_css/fullcalendar-daygrid/main.min.css')}}">
  <link rel="stylesheet" href="{{asset('assets/admin_css/fullcalendar-timegrid/main.min.css')}}">
  <link rel="stylesheet" href="{{asset('assets/admin_css/fullcalendar-bootstrap/main.min.css')}}">

        <!-- Google Font: Source Sans Pro -->
        <link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700" rel="stylesheet">
    </head>
    <body class="hold-transition sidebar-mini layout-fixed">
        <div class="wrapper">

            <!-- Navbar -->
            <nav class="main-header navbar navbar-expand navbar-white navbar-light">
                <!-- Left navbar links -->
                <ul class="navbar-nav">
                    <li class="nav-item">
                        <a class="nav-link" data-widget="pushmenu" href="#"><i class="fas fa-bars"></i></a>
                    </li>
                    <li class="nav-item d-none d-sm-inline-block">
                        <a href="{{url('/Admin')}}" class="nav-link">Home</a>
                    </li>
                   
                </ul>

                <!-- SEARCH FORM -->
           

                <!-- Right navbar links -->
                <ul class="navbar-nav ml-auto">
                    <!-- Messages Dropdown Menu -->

                    <!-- Notifications Dropdown Menu -->
                    <li class="nav-item dropdown">
                        <a class="nav-link" href="{{url('Logout')}}">
                          <i class="fa fa-lock" aria-hidden="true"></i>

                            Logout
                        </a>

                    </li>

                </ul>
            </nav>
            <!-- /.navbar -->

            <!-- Main Sidebar Container -->
            <aside class="main-sidebar sidebar-dark-primary elevation-4">
                <!-- Brand Logo -->

                <!-- Sidebar -->
                <div class="sidebar">
                    <!-- Sidebar user panel (optional) -->
                    <div class="user-panel mt-3 pb-3 mb-3 d-flex">
                        <div class="image">

                            <img src="img/logo.png" class="img-circle elevation-2" alt="User Image">
                        </div>
                        <div class="info">
                            <a href="#" class="d-block">rahul</a>
                        </div>
                    </div>




                    <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
                        <!-- Sidebar Menu -->
                   
                        
                     
                          <li class="nav-item">
                            <a href="{{url('Birthday-Anniversary-Calendar')}}" class="nav-link">
                                <i class="nav-icon far fa-image"></i>
                                <p>
                                    Birthday & Anniversary
                                </p>
                            </a>
                        </li>
                        
                        
             
                         
                       
                        <li class="nav-item">
                            <a href="{{url('Create-Event')}}" class="nav-link">
                                <i class="nav-icon far fa-image"></i>
                                <p>
                                    New Events
                                </p>
                            </a>
                        </li>  
                        
                          <li class="nav-item">
                            <a href="{{url('Create-User')}}" class="nav-link">
                                <i class="nav-icon far fa-image"></i>
                                <p>
                                    Create New User
                                </p>
                            </a>
                         </li> 
                        
                        
                        
                           <li class="nav-item">
                            <a href="{{url('Create-Circular')}}" class="nav-link">
                                <i class="nav-icon far fa-image"></i>
                                <p>
                                    Create Circular
                                </p>
                            </a>
                        </li> 
                        
                        
                    </ul>
                    <!-- /.sidebar-menu -->
                </div>
                <!-- /.sidebar -->
            </aside>
               <div class="content-wrapper">
  @yield('content')
  
 
    
    
     <footer class="main-footer">
                <strong>Copyright &copy; 2022-2023 <a href="http://shrideva.com">Shrideva Technomech Pvt. Ltd.</a>.</strong>
                All rights reserved.
                <div class="float-right d-none d-sm-inline-block">
                    <b>Version</b> 0.1
                </div>
            </footer>

            <!-- Control Sidebar -->
            <aside class="control-sidebar control-sidebar-dark">
                <!-- Control sidebar content goes here -->
            </aside>
            <!-- /.control-sidebar -->
        </div>
        <!-- ./wrapper -->

        <!-- jQuery -->
        <script src="{{asset('assets/admin_js/jquery.min.js')}}"></script>
        <script src="{{asset('assets/admin_js/bootstrap.bundle.min.js')}}"></script>
        <script src="{{asset('assets/admin_js/jquery.dataTables.js')}}"></script>
        <script src="{{asset('assets/admin_js/dataTables.bootstrap4.js')}}"></script>

        <!-- jQuery UI 1.11.4 -->
        <script src="{{asset('assets/admin_js/jquery-ui.min.js')}}"></script>
        <!-- Resolve conflict in jQuery UI tooltip with Bootstrap tooltip -->
          <script src="{{asset('assets/admin_js/bootstrap-editable.js')}}"></script>
        <script>
$.widget.bridge('uibutton', $.ui.button)
        </script>
        <!-- Bootstrap 4 -->

<!--<script src="{{asset('admin_js/bs-custom-file-input.min.js')}}"></script>-->
        <!-- ChartJS -->
        <!--<script src="{{asset('admin_js/Chart.min.js')}}"></script>-->
        <!-- Sparkline -->
        <script src="{{asset('assets/admin_js/sparkline.js')}}"></script>
        <!-- JQVMap -->
        <script src="{{asset('assets/admin_js/moment.min.js')}}"></script>
        <script src="{{asset('assets/admin_js/fullcalendar/main.min.js')}}"></script>
        <script src="{{asset('assets/admin_js/fullcalendar-daygrid/main.min.js')}}"></script>
        <script src="{{asset('assets/admin_js/fullcalendar-timegrid/main.min.js')}}"></script>
        <script src="{{asset('assets/admin_js/fullcalendar-interaction/main.min.js')}}"></script>
        <script src="{{asset('assets/admin_js/fullcalendar-bootstrap/main.min.js')}}"></script>
        <!-- daterangepicker -->
       
        <script src="{{asset('assets/admin_js/daterangepicker.js')}}"></script>
        <!-- Tempusdominus Bootstrap 4 -->
        <script src="{{asset('assets/admin_js/tempusdominus-bootstrap-4.min.js')}}"></script>
        <!-- Summernote -->
        <script src="{{asset('assets/admin_js/summernote-bs4.min.js')}}"></script>
        <!-- overlayScrollbars -->
        <script src="{{asset('assets/admin_js/jquery.overlayScrollbars.min.js')}}"></script>
        <!-- AdminLTE App -->
        
        <script src="{{asset('assets/admin_js/adminlte.js')}}"></script>
        <!-- AdminLTE dashboard demo (This is only for demo purposes) -->
        <script src="{{asset('assets/admin_js/dashboard.js')}}"></script>
        <!-- AdminLTE for demo purposes -->
        <script src="{{asset('assets/admin_js/demo.js')}}"></script>
        <script type="text/javascript">
        
        

        </script>



    </body>
</html>

