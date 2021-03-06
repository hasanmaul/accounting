<!--
Author: W3layouts
Author URL: http://w3layouts.com
License: Creative Commons Attribution 3.0 Unported
License URL: http://creativecommons.org/licenses/by/3.0/
-->
<!DOCTYPE HTML>
<html>
<head>
<title>Accounting Assistent</title>
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="keywords" content="Easy Admin Panel Responsive web template, Bootstrap Web Templates, Flat Web Templates, Android Compatible web template, 
Smartphone Compatible web template, free webdesigns for Nokia, Samsung, LG, SonyEricsson, Motorola web design" />
<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script>
 <!-- Bootstrap Core CSS -->
<link href="{{url('/css/bootstrap.min.css')}}" rel='stylesheet' type='text/css' />
<link rel="stylesheet" type="text/css" href="{{ url('dtpicker/css/bootstrap-datetimepicker.css') }}">
<!-- Custom CSS -->
<link href="{{url('/css/style.css')}}" rel='stylesheet' type='text/css' />
<!-- Graph CSS -->
<link href="{{url('/css/font-awesome.css')}}" rel="stylesheet"> 
<!-- jQuery -->
<!-- lined-icons -->
<link rel="stylesheet" href="{{url('/css/icon-font.min.css')}}" type='text/css' />
<!-- //lined-icons -->
<!-- chart -->
<script src="{{url('/js/Chart.js')}}"></script>
<!-- //chart -->
<!--animate-->
<link href="{{url('/css/animate.css')}}" rel="stylesheet" type="text/css" media="all">
<script src="{{url('/js/wow.min.js')}}"></script>
    <script>
         new WOW().init();
    </script>
    <script src="{{ url('plugins/jQuery/jQuery-2.1.4.min.js') }}"></script>
    <script src="{{ url('dtpicker/moment.js')}}"></script>
    <script src="{{ url('bootstrap/js/transition.js') }}"></script>
    <script src="{{ url('bootstrap/js/collapse.js') }}"></script>
    <script src="{{ url('bootstrap/js/bootstrap.min.js') }}"></script>
    <script src="{{ url('/js/jquery-1.10.2.min.js') }}"></script>
    <script src="{{ url('dtpicker/js/bootstrap-datetimepicker.min.js')}}"></script>
<!-- Placed js at the end of the document so the pages load faster -->

</head> 
   
 <body class="sticky-header left-side-collapsed"  onload="initMap()">
    <section>
    <!-- left side start-->
        <div class="left-side sticky-left-side">

            <!--logo and iconic logo start-->
            <div class="logo">
                <h1><a href="index.html">Acounting Assistent <span></span></a></h1>
            </div>
            <div class="logo-icon text-center">
                <a href="{{ url('/aa') }}"><i class="lnr lnr-home"></i> </a>
            </div>

            <!--logo and iconic logo end-->
            <div class="left-side-inner">

                <!--sidebar nav start-->
                    <ul class="nav nav-pills nav-stacked custom-nav">
                        <li class="active"><a href="/"><i class="lnr lnr-power-switch"></i><span>Dashboard</span></a></li>
                        <li class="menu-list">
                            <a href="{{ url('/penerimaan') }}"><i class="lnr lnr-pencil"></i>
                                <span>Penerimaan</span></a>
                                <ul class="sub-menu-list">
                                    <li><a href="{{ url('/penerimaan') }}">Penerimaan</a></li>
                                    <li><a href="{{ url('/penerimaan/report') }}">Report Permintaan</a>
                                </ul>
                        </li>
                        <li class="menu-list"><a href="{{ url('/pengeluaran') }}"><i class="lnr lnr-envelope"></i> <span>Pengeluaran</span></a>
                            <ul class="sub-menu-list">
                                <li><a href="{{ url('/pengeluaran') }}">Pengeluaran</a></li>
                                <li><a href="{{ url('/laporan/pengeluaran') }}">Report Pengeluaran</a></li>
                            </ul>
                        </li>      
                    </ul>
                <!--sidebar nav end-->
            </div>
        </div>
        <!-- left side end-->
    
        <!-- main content start-->
        <div class="main-content">
            <!-- header-starts -->
            <div class="header-section">
             
            <!--toggle button start-->
            <a class="toggle-btn  menu-collapsed"><i class="fa fa-bars"></i></a>
            <!--toggle button end-->

            <!--notification menu start -->
            <div class="menu-right">
                <div class="user-panel-top">    
                    <div class="profile_details_left">
                        <ul class="nofitications-dropdown">
                            <li class="dropdown">                                    
                                        <ul class="dropdown-menu">
                                            <li>
                                                <div class="notification_header">
                                                    <h3>You have 3 new messages</h3>
                                                </div>
                                            </li>
                                            <li><a href="{{ url('#') }}">
                                               <div class="user_img"><img src="images/1.png" alt=""></div>
                                               <div class="notification_desc">
                                                <p>Lorem ipsum dolor sit amet</p>
                                                <p><span>1 hour ago</span></p>
                                                </div>
                                               <div class="clearfix"></div> 
                                             </a></li>
                                             <li class="odd"><a href="#">
                                                <div class="user_img"><img src="images/1.png" alt=""></div>
                                               <div class="notification_desc">
                                                <p>Lorem ipsum dolor sit amet </p>
                                                <p><span>1 hour ago</span></p>
                                                </div>
                                              <div class="clearfix"></div>  
                                             </a></li>
                                            <li><a href="{{ url('#') }}">
                                               <div class="user_img"><img src="images/1.png" alt=""></div>
                                               <div class="notification_desc">
                                                <p>Lorem ipsum dolor sit amet </p>
                                                <p><span>1 hour ago</span></p>
                                                </div>
                                               <div class="clearfix"></div> 
                                            </a></li>
                                            <li>
                                                <div class="notification_bottom">
                                                    <a href="{{ url('#') }}">See all messages</a>
                                                </div> 
                                            </li>
                                        </ul>
                            </li>
                            <li class="login_box" id="loginContainer">
                                    <div class="search-box">
                                        <div id="sb-search" class="sb-search">
                                            <form>
                                                <input class="sb-search-input" placeholder="Enter your search term..." type="search" id="search">
                                                <input class="sb-search-submit" type="submit" value="">
                                                <span class="sb-icon-search"> </span>
                                            </form>
                                        </div>
                                    </div>
                                        <!-- search-scripts -->
                                        <script src="{{ url('/js/classie.js') }}"></script>
                                        <script src="{{ url('/js/uisearch.js') }}"></script>
                                            <script>
                                                new UISearch( document.getElementById( 'sb-search' ) );
                                            </script>
                                        <!-- //search-scripts -->
                            </li>
                            <li class="dropdown">
                                <a href="{{ url('#') }}" class="dropdown-toggle" data-toggle="dropdown" aria-expanded="false"><i class="fa fa-bell"></i><span class="badge blue">3</span></a>
                                    <ul class="dropdown-menu">
                                        <li>
                                            <div class="notification_header">
                                                <h3>You have 3 new notification</h3>
                                            </div>
                                        </li>
                                        <li><a href="{{ url('#') }}">
                                            <div class="user_img"><img src="images/1.png" alt=""></div>
                                           <div class="notification_desc">
                                            <p>Lorem ipsum dolor sit amet</p>
                                            <p><span>1 hour ago</span></p>
                                            </div>
                                          <div class="clearfix"></div>  
                                         </a></li>
                                         <li class="odd"><a href="#">
                                            <div class="user_img"><img src="images/1.png" alt=""></div>
                                           <div class="notification_desc">
                                            <p>Lorem ipsum dolor sit amet </p>
                                            <p><span>1 hour ago</span></p>
                                            </div>
                                           <div class="clearfix"></div> 
                                         </a></li>
                                         <li><a href="{{ url('#') }}">
                                            <div class="user_img"><img src="images/1.png" alt=""></div>
                                           <div class="notification_desc">
                                            <p>Lorem ipsum dolor sit amet </p>
                                            <p><span>1 hour ago</span></p>
                                            </div>
                                           <div class="clearfix"></div> 
                                         </a></li>
                                         <li>
                                            <div class="notification_bottom">
                                                <a href="{{ url('#') }}">See all notification</a>
                                            </div> 
                                        </li>
                                    </ul>
                            </li>   
                            <li class="dropdown">
                                <a href="{{ url('#') }}" class="dropdown-toggle" data-toggle="dropdown" aria-expanded="false"><i class="fa fa-tasks"></i><span class="badge blue1">22</span></a>
                                    <ul class="dropdown-menu">
                                        </ul>                                             
                            <div class="clearfix"></div>    
                        </ul>
                    </div>
                    <div class="profile_details">       
                        <ul>
                            <li class="dropdown profile_details_drop">
                                <a href="{{ url('#') }}" class="dropdown-toggle" data-toggle="dropdown" aria-expanded="false">
                                    <div class="profile_img">   
                                        <span style="background:url(images/) no-repeat center"> </span>
                                            <div class="user-name">
                                            <p>{{ Auth::user()->email }}<span></span></p>
                                         </div>
                                         <i class="lnr lnr-chevron-down"></i>
                                         <i class="lnr lnr-chevron-up"></i>
                                        <div class="clearfix"></div>    
                                    </div>  
                                </a>
                                <ul class="dropdown-menu drp-mnu">
                                    <li> <a href="#"><i class="fa fa-cog"></i> Settings</a> </li> 
                                    <li> <a href="#"><i class="fa fa-user"></i>Profile</a> </li> 
                                    <li> <a href="{{ url('/logout') }}"><i class="fa fa-sign-out"></i> Logout</a> </li>
                                </ul>
                            </li>
                            <div class="clearfix"> </div>
                        </ul>
                    </div>      
                    <div class="social_icons">
            
                        <div class="clearfix"> </div>
                    </div>              
                    <div class="clearfix"></div>
                </div>
              </div>
            <!--notification menu end -->
            </div>
        <!-- //header-ends -->
            <div id="page-wrapper">
                <form action="{{ url('tambahadmin/save') }}" method="POST" enctype="multipart/form-data">
                            <table class="table hovered" style="width: 100%">
                            <input type="hidden" name="_token" value="{{ csrf_token() }}">
                                <tr>
                                    <td>Nama Lengkap</td>
                                    <td>
                                        <div class="input-control text full-size">
                                            <input class="form-control" type="text" name="name" id="name" autocomplete="off" required>
                                        </div>
                                    </td>
                                </tr>
                                <tr>
                                    <td>Email</td>
                                    <td>
                                        <div class="input-control text full-size">
                                            <input class="form-control" type="email" name="email" id="email" autocomplete="off" required>
                                        </div>
                                    </td>
                                </tr>
                                <tr>
                                    <td>Password</td>
                                    <td>
                                        <div class="input-control text full-size">
                                            <input class="form-control" name="password" id="password" type="password" autocomplete="off" required>
                                        </div>
                                    </td>
                                </tr>
                            </table>
                            <br>
                            <div id="success"></div>
                            <div class="row">
                            <div class="form-group col-xs-12">
                                <button type="submit" class="btn btn-primary">Submit</button>
                                <button type="reset" class="btn btn-default">Reset</button>
                            </div>
                            </div>                          
                        </form>
            <!--body wrapper start-->
            </div>
             <!--body wrapper end-->
        </div>
        <!--footer section start-->
            <footer>
               <p>&copy 2016 Easy Admin Panel. All Rights Reserved | Design by <a href="{{ url('https://w3layouts.com/') }}" target="_blank">Hasannova.</a></p>
            </footer>
        <!--footer section end-->

      <!-- main content end-->
   </section>
  
<script src="{{ url('/js/jquery.nicescroll.js') }}"></script>
<script src="{{ url('/js/scripts.js') }}"></script>
<script type="text/javascript">
    $('.for_year').datetimepicker({ format: 'YYYY-MM-DD' });
    </script>
<!-- Bootstrap Core JavaScript -->
   <script src="{{ url('/js/bootstrap.min.js') }}"></script>
</body>
</html>