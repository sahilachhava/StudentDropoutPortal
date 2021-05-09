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
	 <!-- Sweet Alert -->
        <link href="assets/plugins/sweet-alert2/sweetalert2.min.css" rel="stylesheet" type="text/css">
	<link href="assets/plugins/alertify/css/alertify.css" rel="stylesheet" type="text/css">
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
                        <a href="index.php" class="logo"><i class="mdi mdi-assistant"></i> SDAP</a>
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

                             <li class="has_sub">
                                <a href="javascript:void(0);" class="waves-effect"><i class="mdi mdi-account-multiple"></i> <span>All Students </span> <span class="float-right"><i class="mdi mdi-chevron-right"></i></span></a>
                                <ul class="list-unstyled">
				<li><a href="#" id="adds">Add New Student</a></li>
                                    <li><a href="student.php">All Students</a></li>
                                    <li><a href="dstudent.php">Droped Students</a></li>
                                </ul>
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
                                    <li><a href="pirarea.php"><i class="mdi mdi-chart-pie"></i>Show Pie-Chart</a></li>
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
                                            <h5> <?php 
					   $sq = "select name from school_details where school_id=".$_SESSION['user_id']; 
					   $re = mysqli_query($conn,$sq);
					   $name = mysqli_fetch_array($re);
					    echo "Hello, ".$name[0]; ?></h5>
                                        </div>
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
                                                        <i class="mdi mdi-account-multiple"></i>
                                                    </div>
                                                </div>
                                                <div class="col-8 text-center align-self-center">
                                                    <div class="m-l-10 ">
                                                        <h5 class="mt-0 round-inner"><?php
												include('../connection.php');
												$sql = "SELECT count(*) FROM `student_details` where school_id=".$_SESSION['user_id'];
												$result =mysqli_query($conn,$sql);
												$s = mysqli_fetch_array($result);
												echo $s[0];
											?></h5>
                                                        <p class="mb-0 text-muted">Total Enroll Student</p>
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
												$sql = "SELECT count(*) FROM `dropout_details` where school_id=".$_SESSION['user_id'];
												$result =mysqli_query($conn,$sql);
												$s = mysqli_fetch_array($result);
												echo $s[0];
											?></h5>
                                                        <p class="mb-0 text-muted">Total Dropout Student</p>
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
												$sql = "SELECT count(reason) FROM `dropout_details` where `reason`='Family Financial Issue' AND school_id=".$_SESSION['user_id'];
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
												$sql = "SELECT count(reason) FROM `dropout_details` where `reason`='Social Issue' AND school_id=".$_SESSION['user_id'];
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
												$sql = "SELECT count(reason) FROM `dropout_details` where `reason`='Co-Education System' AND school_id=".$_SESSION['user_id'];
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
												$sql = "SELECT count(reason) FROM `dropout_details` where `reason`='Lack of Higher Studies in Village' AND school_id=".$_SESSION['user_id'];
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
												$sql = "SELECT count(reason) FROM `dropout_details` where `reason`='Not Interested in Further Education' AND school_id=".$_SESSION['user_id'];
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
        
        <script src="assets/pages/dashborad.js"></script>
	 <!-- Sweet-Alert  -->
         <script src="assets/plugins/sweet-alert2/sweetalert2.min.js"></script>
        <!-- <script src="assets/pages/sweet-alert.init.js"></script> -->

	<script src="assets/plugins/alertify/js/alertify.js"></script>
        <script src="assets/pages/alertify-init.js"></script>
        <!-- App js -->
        <script src="assets/js/app.js"></script>
       <script type="text/javascript">
	$('#adds').click(function () {
            swal({
                title: 'Student have Aadhaar ?',
                text: "You don't have to fill all details..!",
                type: 'warning',
                showCancelButton: true,
                confirmButtonText: 'Yes, available !',
                cancelButtonText: 'Not, available!',
                confirmButtonClass: 'btn btn-success',
                cancelButtonClass: 'btn btn-danger m-l-10',
                buttonsStyling: false
            }).then(function () {
		    alertify
            .defaultValue("Enter Aadhaar Number")
            .prompt("Enter 12 Digit Aadhaar Number", function (str, ev) {
                ev.preventDefault();
		    if(str.length != 12)
		    {
			swal(
				'Invalid',
				'Invalid Aadhaar Number' + '  ' + str,
				'error')
		    }
		    else
		    {
			window.location.href='addstudenta.php?anum='+str;
		}
		
            }, function(ev) {
                ev.preventDefault();
                alertify.error("You've clicked Cancel");
            });
            }, function (dismiss) {
                if (dismiss === 'cancel') {
                    swal(
                        'No, problem',
                        'You are redirecting :)',
                        'error'
                    ).then(function() {
		window.location.href = "addstudent.php";
		});
                }
            })
        });
</script>

    </body>

</html>
<?php

if(isset($_GET['ch']))
{
	$a = $_GET['ch'];
	if($a == 0)
	{
	echo "<script type='text/javascript'>
	swal(
	'Invalid Aadhaar',
	'Aadhaar Doesn\'t Exist',
	'error');
	</script>";
	}
	else
	{
	echo "<script type='text/javascript'>
	swal(
	'Duplicate Entry',
	'Student Already Enrolled',
	'error');
	</script>";
	}
}
?>