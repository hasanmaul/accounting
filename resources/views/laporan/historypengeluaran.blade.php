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
<!--//end-animate-->
<!----webfonts--->
<link href='//fonts.googleapis.com/css?family=Cabin:400,400italic,500,500italic,600,600italic,700,700italic' rel='stylesheet' type='text/css'>
<!---//webfonts---> 
 <!-- Meters graphs -->
<script src="{{url('/js/jquery-1.10.2.min.js')}}"></script>
<!-- Placed js at the end of the document so the pages load faster -->

</head> 
   
 <body class="sticky-header left-side-collapsed"  onload="initMap()">
    <section>
    <!-- left side start-->
        <div class="left-side sticky-left-side">

            <!--logo and iconic logo start-->
            <div class="logo">
                <h3><a href="{{url('index.html')}}">Acounting Assistent <span></span></a></h3>
            </div>
            <div class="logo-icon text-center">
                <a href="{{url('/aa')}}"><i class="lnr lnr-home"></i> </a>
            </div>

            <!--logo and iconic logo end-->
            <div class="left-side-inner">

                <!--sidebar nav start-->
                    <ul class="nav nav-pills nav-stacked custom-nav">
                        <li class="active"><a href="/"><i class="lnr lnr-power-switch"></i><span>Dashboard</span></a></li>
                        <li class="menu-list">
                            <a href="{{url('/penerimaan')}}"><i class="lnr lnr-pencil"></i>
                                <span>Penerimaan</span></a>
                                <ul class="sub-menu-list">
                                    <li><a href="{{url('/penerimaan')}}">Penerimaan</a></li>
                                    <li><a href="{{url('/penerimaan/report')}}">Report Permintaan</a>
                                </ul>
                        </li>
                        <li class="menu-list"><a href="{{url('/pengeluaran')}}"><i class="lnr lnr-envelope"></i> <span>Pengeluaran</span></a>
                            <ul class="sub-menu-list">
                                <li><a href="{{url('/pengeluaran')}}">Pengeluaran</a></li>
                                <li><a href="{{url('/laporan/pengeluaran')}}">Report Setoran</a></li>
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
                                            <li><a href="#">
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
                                            <li><a href="#">
                                               <div class="user_img"><img src="images/1.png" alt=""></div>
                                               <div class="notification_desc">
                                                <p>Lorem ipsum dolor sit amet </p>
                                                <p><span>1 hour ago</span></p>
                                                </div>
                                               <div class="clearfix"></div> 
                                            </a></li>
                                            <li>
                                                <div class="notification_bottom">
                                                    <a href="#">See all messages</a>
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
                                        <script src="{{url('/js/classie.js')}}"></script>
                                        <script src="{{url('/js/uisearch.js')}}"></script>
                                            <script>
                                                new UISearch( document.getElementById( 'sb-search' ) );
                                            </script>
                                        <!-- //search-scripts -->
                            </li>
                            <li class="dropdown">
                                <a href="#" class="dropdown-toggle" data-toggle="dropdown" aria-expanded="false"><i class="fa fa-bell"></i><span class="badge blue">3</span></a>
                                    <ul class="dropdown-menu">
                                        <li>
                                            <div class="notification_header">
                                                <h3>You have 3 new notification</h3>
                                            </div>
                                        </li>
                                        <li><a href="#">
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
                                         <li><a href="#">
                                            <div class="user_img"><img src="images/1.png" alt=""></div>
                                           <div class="notification_desc">
                                            <p>Lorem ipsum dolor sit amet </p>
                                            <p><span>1 hour ago</span></p>
                                            </div>
                                           <div class="clearfix"></div> 
                                         </a></li>
                                         <li>
                                            <div class="notification_bottom">
                                                <a href="#">See all notification</a>
                                            </div> 
                                        </li>
                                    </ul>
                            </li>   
                            <li class="dropdown">
                                <a href="#" class="dropdown-toggle" data-toggle="dropdown" aria-expanded="false"><i class="fa fa-tasks"></i><span class="badge blue1">22</span></a>
                                    <ul class="dropdown-menu">
                                        </ul>                                             
                            <div class="clearfix"></div>    
                        </ul>
                    </div>
                    <div class="profile_details">       
                        <ul>
                            <li class="dropdown profile_details_drop">
                                <a href="#" class="dropdown-toggle" data-toggle="dropdown" aria-expanded="false">
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
                                    <li> <a href="{{url('#')}}"><i class="fa fa-cog"></i> Settings</a> </li> 
                                    <li> <a href="{{url('#')}}"><i class="fa fa-user"></i>Profile</a> </li> 
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
                                <div class="container-fluid">

                <!-- Page Heading -->
                <div class="row">
                    <div class="col-lg-12">
                        <h1 class="page-header">
                            History Pengeluaran
                        </h1>
                        <ol class="breadcrumb">
                            <li>
                                <i class="fa fa-desktop"></i>  <a href="/">Home</a>
                            </li>
                            <li class="active">
                                <i class="fa fa-table"></i> Pengeluaran
                            </li>
                        </ol>
                    </div>
                </div>
                <!-- /.row -->

                <div class="row">
                <div class="col-md-12">
                        <h2><a href="{{ url('laporan/pengeluaran/report') }}"> Report Pengeluaran</a></h2>
                        <div class="table-responsive">
                            <table class="table table-bordered table-hover table-striped">
                                <thead>
                                    <th>No.</th>
                                    <th>Email Pengeluaran        </th>
                                    <th>Nama Nasabah</th>
                                    <th>Jenis Kelamin</th>
                                    <th>Tanggal Pengeluaran</th>
                                    <th>No Rekening</th>
                                    <th>Jenis Rekening</th>
                                    <th>Jumlah Pengeluaran</th>
                                    <th>Opsi</th>
                                </thead>
                                <tbody>
                                <?php $i = 1; ?>
                                    @foreach($data as $post)
                                        <tr>
                                            <td>{{ $i++ }}</td>

                                            <td>{{ $post->email }}</td>

                                            <td>{{ $post->nama_nasabah }}</td>                                              
                                            <td>{{ $post->jenis_kelamin }}</td>                       
                                            <td>{{ $post->tanggal_pengeluaran }}</td>                       
                                            <td>{{ $post->no_rek }}</td>                       
                                            <td>{{ $post->jenis_rek }}</td>
                                            <td>{{ $post->jml_setoran }}</td>
                                            <td>{{ "Rp.".number_format($post->jumlah,0,',','.').",-" }}</td>                     
                                            <!-- <td>{{ $post->status }}</td> -->
                                            <td><a href="{{ url('laporan/history/pengeluaran/edit/'.$post->id) }}">Edit</a>
                                            <a href="{{ url('pengeluaran/delete/'.$post['id']) }}" onclick="return confirm('Apakah anda yakin akan di hapus?')">Hapus</a>
                                            </td>
                                            </tr>
                                            @endforeach 
                                <!--  --></table>
                        </div>
                </div>
                </div>


            <!--body wrapper start-->
            </div>
             <!--body wrapper end-->
        </div>
        <!--footer section start-->
            <footer>
               <p>&copy 2016 Easy Admin Panel. All Rights Reserved | Design by <a href="{{url('https://w3layouts.com/')}}" target="_blank">Hasannova.</a></p>
            </footer>
        <!--footer section end-->

      <!-- main content end-->
   </section>
  
<script src="{{url('/js/jquery.nicescroll.js')}}"></script>
<script src="{{url('/js/scripts.js')}}"></script>
<!-- Bootstrap Core JavaScript -->
   <script src="{{url('/js/bootstrap.min.js')}}"></script>
</body>
</html>