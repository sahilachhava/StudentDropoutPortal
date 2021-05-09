<?php
session_start();
include("../connection.php");
if(!isset($_SESSION["user_id"]))
{
	header("Location: ../index.php");
}
?>
<!DOCTYPE html>
<html>
<head>
        <meta charset="utf-8" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0, minimal-ui">
        <title>Dashboard :: Student Dropout Analysis Portal</title>
        <meta content="Admin Dashboard" name="description" />
        <meta content="Mannatthemes" name="author" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge" />

        <link rel="shortcut icon" href="assets/images/sdap.png">

        <link href="assets/plugins/morris/morris.css" rel="stylesheet">

        <link href="assets/css/bootstrap.min.css" rel="stylesheet" type="text/css">
        <link href="assets/css/icons.css" rel="stylesheet" type="text/css">
        <link href="assets/css/style.css" rel="stylesheet" type="text/css">

    </head>


    <body class="fixed-left">

        <!-- Loader -->
        <div id="preloader"><div id="status"><div class="spinner"></div></div></div>

        <!-- Begin page -->
        <div id="wrapper">

            <!-- ========== Left Sidebar Start ========== -->
            <div class="left side-menu">
                <button type="button" class="button-menu-mobile button-menu-mobile-topbar open-left waves-effect">
                    <i class="ion-close"></i>
                </button>

                <!-- LOGO -->
                <div class="topbar-left">
                    <div class="text-center">
                        <a href="index.php" class="logo"><i class="mdi mdi-assistant"></i>SDAP</a>
                        <!-- <a href="index.html" class="logo"><img src="assets/images/logo.png" height="24" alt="logo"></a> -->
                    </div>
                </div>

                <div class="sidebar-inner slimscrollleft">

                    <div id="sidebar-menu">
                        <ul>
                            <li class="menu-title">Main</li>

                            <li>
                                <a href="index.php" class="waves-effect">
                                    <i class="mdi mdi-airplay"></i>
                                    <span> Dashboard <span class="badge badge-pill badge-primary float-right"></span></span>
                                </a>
                            </li>

                            <li class="menu-title">Analysis</li>

                                   <li class="has_sub">
                                <a href="javascript:void(0);" class="waves-effect"><i class="mdi mdi-bullseye"></i> <span> School Analysis </span> <span class="float-right"><i class="mdi mdi-chevron-right"></i></span></a>
                                <ul class="list-unstyled">
                                    <li><a href="pieschool.php"><i class="mdi mdi-chart-pie"></i>Show Pie-Chart</a></li>
                                    <li><a href="barschool.php"><i class="mdi mdi-chart-bar"></i>Show Bar-Chart</a></li>
                                </ul>
                            </li>
			    
			<li class="has_sub">
                                <a href="javascript:void(0);" class="waves-effect"><i class="mdi mdi-bullseye"></i> <span> Cast Analysis </span> <span class="float-right"><i class="mdi mdi-chevron-right"></i></span></a>
                                <ul class="list-unstyled">
                                  <li><a href="piecast.php"><i class="mdi mdi-chart-pie"></i>Show Pie-Chart</a></li>
                                    <li><a href="barcast.php"><i class="mdi mdi-chart-bar"></i>Show Bar-Chart</a></li>
                                </ul>
                            </li>
			    
			<li class="has_sub">
                                <a href="javascript:void(0);" class="waves-effect"><i class="mdi mdi-bullseye"></i> <span> Gender Analysis </span> <span class="float-right"><i class="mdi mdi-chevron-right"></i></span></a>
                                <ul class="list-unstyled">
                                    <li><a href="piegender.php"><i class="mdi mdi-chart-pie"></i>Show Pie-Chart</a></li>
                                    <li><a href="bargender.php"><i class="mdi mdi-chart-bar"></i>Show Bar-Chart</a></li>
                                </ul>
                            </li>
			    
			    <li class="has_sub">
                                <a href="javascript:void(0);" class="waves-effect"><i class="mdi mdi-bullseye"></i> <span> Area Analysis </span> <span class="float-right"><i class="mdi mdi-chevron-right"></i></span></a>
                                <ul class="list-unstyled">
                                    <li><a href="piearea.php"><i class="mdi mdi-chart-pie"></i>Show Pie-Chart</a></li>
                                    <li><a href="bararea.php"><i class="mdi mdi-chart-bar"></i>Show Bar-Chart</a></li>
                                </ul>
                            </li>
			    
			    <li class="has_sub">
                                <a href="javascript:void(0);" class="waves-effect"><i class="mdi mdi-bullseye"></i> <span> Age Analysis </span> <span class="float-right"><i class="mdi mdi-chevron-right"></i></span></a>
                                <ul class="list-unstyled">
                                   <li><a href="pieage.php"><i class="mdi mdi-chart-pie"></i>Show Pie-Chart</a></li>
                                    <li><a href="barage.php"><i class="mdi mdi-chart-bar"></i>Show Bar-Chart</a></li>
                                </ul>
                            </li>
			<li>
                                <a href="report.php" class="waves-effect">
                                    <i class="mdi mdi-chart-arc"></i>
                                    <span>All Reports <span class="badge badge-pill badge-primary float-right"></span></span>
                                </a>
                            </li>
                        </ul>
                    </div>
                    <div class="clearfix"></div>
                </div> <!-- end sidebarinner -->
            </div>
            <!-- Left Sidebar End -->

            <!-- Start right Content here -->

            <div class="content-page">
                <!-- Start content -->
                <div class="content">

                    <!-- Top Bar Start -->
                    <div class="topbar">

                        <nav class="navbar-custom">

                            <ul class="list-inline float-right mb-0">

                                <li class="list-inline-item dropdown notification-list">
                                    <a class="nav-link dropdown-toggle arrow-none waves-effect nav-user" data-toggle="dropdown" href="#" role="button"
                                       aria-haspopup="false" aria-expanded="false">
                                        <img src="assets/images/sdap.png" alt="user" class="rounded-circle">
                                    </a>
                                    <div class="dropdown-menu dropdown-menu-right profile-dropdown ">
                                        <!-- item-->
                                        <div class="dropdown-item noti-title">
                                            <h5>Howdy, DEO</h5>
                                        </div>
                                        <div class="dropdown-divider"></div>
                                        <a class="dropdown-item" href="../logout.php"><i class="mdi mdi-logout m-r-5 text-muted"></i> Logout</a>
                                    </div>
                                </li>

                            </ul>

                            <div class="clearfix"></div>

                        </nav>

                    </div>
                    <!-- Top Bar End -->

                    <div class="page-content-wrapper ">

                        <div class="container-fluid">

                            <div class="row">
                                <div class="col-sm-12">
                                    <div class="page-title-box">
                                        <div class="btn-group float-right">
                                            <ol class="breadcrumb hide-phone p-0 m-0">
                                                <li class="breadcrumb-item"><a href="#">SDS</a></li>
                                                <li class="breadcrumb-item active">Dashboard</li>
                                            </ol>
                                        </div>
                                        <h4 class="page-title">Dashboard</h4>
                                    </div>
                                </div>
                            </div>
                            <!-- end page title end breadcrumb -->
			    <!-- dashboard content write below-->
			    <div class="row">
                               <!-- Column -->
				
                                <div class="col-md-6 col-lg-6 col-xl-3">
                                    <div class="card m-b-30">
                                        <div class="card-body">
                                            <div class="d-flex flex-row">
                                                <div class="col-4 align-self-center">
                                                    <div class="round">
                                                        <i class="mdi mdi-school"></i>
                                                    </div>
                                                </div>
                                                <div class="col-8 align-self-center text-center">
                                                    <div class="m-l-10">
                                                        <h5 class="mt-0 round-inner"><?php
												include('../connection.php');
												$sql = "SELECT count(*) FROM `school_details`";
												$result =mysqli_query($conn,$sql);
												$s = mysqli_fetch_array($result);
												echo $s[0];
											?></h5>
                                                        <p class="mb-0 text-muted">Total School</p>                                                                 
                                                    </div>
                                                </div>
                                                <!--<div class="col-3 align-self-end align-self-center">
                                                   <h6 class="m-0 float-right text-center text-danger"> <i class="mdi mdi-arrow-down"></i> <span>5.26%</span></h6>
                                                </div>-->
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!-- Column -->
                                <!-- Column -->
                                <div class="col-md-6 col-lg-6 col-xl-3">
                                    <div class="card m-b-30">
                                        <div class="card-body">
                                            <div class="d-flex flex-row">
                                                <div class="col-4 align-self-center">
                                                    <div class="round">
                                                        <i class="mdi mdi-account-multiple"></i>
                                                    </div>
                                                </div>
                                                <div class="col-8 text-center align-self-center">
                                                    <div class="m-l-10 ">
                                                        <h5 class="mt-0 round-inner"><?php
												include('../connection.php');
												$sql = "SELECT count(*) FROM `student_details`";
												$result =mysqli_query($conn,$sql);
												$s = mysqli_fetch_array($result);
												echo $s[0];
											?></h5>
                                                        <p class="mb-0 text-muted">Total Student</p>
                                                    </div>
                                                </div>
                                               <!-- <div class="col-3 align-self-end align-self-center">
                                                    <h6 class="m-0 float-right text-center text-success"> <i class="mdi mdi-arrow-up"></i> <span>8.68%</span></h6>
                                                </div> -->                                             
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!-- Column -->
                                <!-- Column -->
                                <div class="col-md-6 col-lg-6 col-xl-3">
                                    <div class="card m-b-30">
                                        <div class="card-body">
                                            <div class="d-flex flex-row">
                                                <div class="col-4 align-self-center">
                                                    <div class="round ">
                                                        <i class="mdi mdi-account-remove"></i>
                                                    </div>
                                                </div>
                                                <div class="col-8 align-self-center text-center">
                                                    <div class="m-l-10 ">
                                                        <h5 class="mt-0 round-inner"><?php
												include('../connection.php');
												$sql = "SELECT count(*) FROM `dropout_details`";
												$result =mysqli_query($conn,$sql);
												$s = mysqli_fetch_array($result);
												echo $s[0];
											?></h5>
                                                        <p class="mb-0 text-muted">Total Dropout</p>
                                                    </div>
                                                </div>
                                                <!--<div class="col-3 align-self-end align-self-center">
                                                    <h6 class="m-0 float-right text-center text-danger"> <i class="mdi mdi-arrow-down"></i> <span>2.35%</span></h6>
                                                </div> -->
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!-- Column -->
                                <!-- Column -->
                                <div class="col-md-6 col-lg-6 col-xl-3">
                                    <div class="card m-b-30">
                                        <div class="card-body">
                                            <div class="d-flex flex-row">
                                                <div class="col-4 align-self-center">
                                                    <div class="round">
                                                        <i class="mdi mdi-account-location"></i>
                                                    </div>
                                                </div>
                                                <div class="col-8 align-self-center text-center">
                                                    <div class="m-l-10">
                                                        <h5 class="mt-0 round-inner"><?php
												include('../connection.php');
												$sql = "SELECT count(*) FROM `aadhaar_details`";
												$result =mysqli_query($conn,$sql);
												$s = mysqli_fetch_array($result);
												echo $s[0];
											?></h5>
                                                        <p class="mb-0 text-muted">Total Aadhar</p>
                                                    </div>
                                                </div>
                                               <!-- <div class="col-3 align-self-end align-self-center">
                                                    <h6 class="m-0 float-right text-center text-success"> <i class="mdi mdi-arrow-up"></i> <span>2.35%</span></h6>
                                                </div>-->
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!-- Column -->
				 <!-- Column -->
                                <div class="col-md-6 col-lg-6 col-xl-4">
                                    <div class="card m-b-30">
                                        <div class="card-body">
                                            <div class="d-flex flex-row">
                                                <div class="col-4 align-self-center">
                                                    <div class="round ">
                                                        <i class="mdi mdi-account-remove"></i>
                                                    </div>
                                                </div>
                                                <div class="col-8 align-self-center text-center">
                                                    <div class="m-l-10 ">
                                                        <h5 class="mt-0 round-inner"><?php
												include('../connection.php');
												$sql = "SELECT count(reason) FROM `dropout_details` where `reason`='Family Financial Issue'";
												$result =mysqli_query($conn,$sql);
												$s = mysqli_fetch_array($result);
												echo $s[0];
											?></h5>
                                                        <p class="mb-0 text-muted">Dropout (Financial)</p>
                                                    </div>
                                                </div>
                                                <!--<div class="col-3 align-self-end align-self-center">
                                                    <h6 class="m-0 float-right text-center text-danger"> <i class="mdi mdi-arrow-down"></i> <span>2.35%</span></h6>
                                                </div> -->
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!-- Column -->
				 <!-- Column -->
                                <div class="col-md-6 col-lg-6 col-xl-4">
                                    <div class="card m-b-30">
                                        <div class="card-body">
                                            <div class="d-flex flex-row">
                                                <div class="col-4 align-self-center">
                                                    <div class="round ">
                                                        <i class="mdi mdi-account-remove"></i>
                                                    </div>
                                                </div>
                                                <div class="col-8 align-self-center text-center">
                                                    <div class="m-l-10 ">
                                                        <h5 class="mt-0 round-inner"><?php
												include('../connection.php');
												$sql = "SELECT count(reason) FROM `dropout_details` where `reason`='Social Issue'";
												$result =mysqli_query($conn,$sql);
												$s = mysqli_fetch_array($result);
												echo $s[0];
											?></h5>
                                                        <p class="mb-0 text-muted">Dropout (Social Issue)</p>
                                                    </div>
                                                </div>
                                                <!--<div class="col-3 align-self-end align-self-center">
                                                    <h6 class="m-0 float-right text-center text-danger"> <i class="mdi mdi-arrow-down"></i> <span>2.35%</span></h6>
                                                </div> -->
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!-- Column -->
				 <!-- Column -->
                                <div class="col-md-6 col-lg-6 col-xl-4">
                                    <div class="card m-b-30">
                                        <div class="card-body">
                                            <div class="d-flex flex-row">
                                                <div class="col-4 align-self-center">
                                                    <div class="round ">
                                                        <i class="mdi mdi-account-remove"></i>
                                                    </div>
                                                </div>
                                                <div class="col-8 align-self-center text-center">
                                                    <div class="m-l-10 ">
                                                        <h5 class="mt-0 round-inner"><?php
												include('../connection.php');
												$sql = "SELECT count(reason) FROM `dropout_details` where `reason`='Co-Education System'";
												$result =mysqli_query($conn,$sql);
												$s = mysqli_fetch_array($result);
												echo $s[0];
											?></h5>
                                                        <p class="mb-0 text-muted">Dropout (Co-Education System)</p>
                                                    </div>
                                                </div>
                                                <!--<div class="col-3 align-self-end align-self-center">
                                                    <h6 class="m-0 float-right text-center text-danger"> <i class="mdi mdi-arrow-down"></i> <span>2.35%</span></h6>
                                                </div> -->
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!-- Column -->
					 <!-- Column -->
                                <div class="col-md-6 col-lg-6 col-xl-4">
                                    <div class="card m-b-30">
                                        <div class="card-body">
                                            <div class="d-flex flex-row">
                                                <div class="col-4 align-self-center">
                                                    <div class="round ">
                                                        <i class="mdi mdi-account-remove"></i>
                                                    </div>
                                                </div>
                                                <div class="col-8 align-self-center text-center">
                                                    <div class="m-l-10 ">
                                                        <h5 class="mt-0 round-inner"><?php
												include('../connection.php');
												$sql = "SELECT count(reason) FROM `dropout_details` where `reason`='Lack of Higher Studies in Village'";
												$result =mysqli_query($conn,$sql);
												$s = mysqli_fetch_array($result);
												echo $s[0];
											?></h5>
                                                        <p class="mb-0 text-muted">Dropout (Lack of Higher Studies in Village)</p>
                                                    </div>
                                                </div>
                                                <!--<div class="col-3 align-self-end align-self-center">
                                                    <h6 class="m-0 float-right text-center text-danger"> <i class="mdi mdi-arrow-down"></i> <span>2.35%</span></h6>
                                                </div> -->
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!-- Column -->
						 <!-- Column -->
                                <div class="col-md-6 col-lg-6 col-xl-4">
                                    <div class="card m-b-30">
                                        <div class="card-body">
                                            <div class="d-flex flex-row">
                                                <div class="col-4 align-self-center">
                                                    <div class="round ">
                                                        <i class="mdi mdi-account-remove"></i>
                                                    </div>
                                                </div>
                                                <div class="col-8 align-self-center text-center">
                                                    <div class="m-l-10 ">
                                                        <h5 class="mt-0 round-inner"><?php
												include('../connection.php');
												$sql = "SELECT count(reason) FROM `dropout_details` where `reason`='Not Interested in Further Education'";
												$result =mysqli_query($conn,$sql);
												$s = mysqli_fetch_array($result);
												echo $s[0];
											?></h5>
                                                        <p class="mb-0 text-muted">Dropout (Not Interested in Further Education)</p>
                                                    </div>
                                                </div>
                                                <!--<div class="col-3 align-self-end align-self-center">
                                                    <h6 class="m-0 float-right text-center text-danger"> <i class="mdi mdi-arrow-down"></i> <span>2.35%</span></h6>
                                                </div> -->
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!-- Column -->
                            </div>

        <!-- jQuery  -->
        <script src="assets/js/jquery.min.js"></script>
        <script src="assets/js/popper.min.js"></script>
        <script src="assets/js/bootstrap.min.js"></script>
        <script src="assets/js/modernizr.min.js"></script>
        <script src="assets/js/detect.js"></script>
        <script src="assets/js/fastclick.js"></script>
        <script src="assets/js/jquery.slimscroll.js"></script>
        <script src="assets/js/jquery.blockUI.js"></script>
        <script src="assets/js/waves.js"></script>
        <script src="assets/js/jquery.nicescroll.js"></script>
        <script src="assets/js/jquery.scrollTo.min.js"></script>

        <script src="assets/plugins/skycons/skycons.min.js"></script>
        <script src="assets/plugins/raphael/raphael-min.js"></script>
        <script src="assets/plugins/morris/morris.min.js"></script>
        
        <script src="assets/pages/dashborad.js"></script>

        <!-- App js -->
        <script src="assets/js/app.js"></script>
        <script>
             /* BEGIN SVG WEATHER ICON */
             if (typeof Skycons !== 'undefined'){
            var icons = new Skycons(
                {"color": "#fff"},
                {"resizeClear": true}
                ),
                    list  = [
                        "clear-day", "clear-night", "partly-cloudy-day",
                        "partly-cloudy-night", "cloudy", "rain", "sleet", "snow", "wind",
                        "fog"
                    ],
                    i;

                for(i = list.length; i--; )
                icons.set(list[i], list[i]);
                icons.play();
            };

        // scroll

        $(document).ready(function() {
        
        $("#boxscroll").niceScroll({cursorborder:"",cursorcolor:"#cecece",boxzoom:true});
        $("#boxscroll2").niceScroll({cursorborder:"",cursorcolor:"#cecece",boxzoom:true}); 
        
        });
        </script>

    </body>

<!-- Mirrored from mannatthemes.com/annex/vertical/index.html by HTTrack Website Copier/3.x [XR&CO'2014], Sun, 18 Mar 2018 11:15:51 GMT -->
</html>