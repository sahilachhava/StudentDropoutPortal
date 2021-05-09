<?php
session_start();
include("../connection.php");
if(!isset($_SESSION["user_id"]))
{
	header("Location: ../index.php");
}
$qe = "select day,month,year from dropout_details";
$r = mysqli_query($conn,$qe);
while($row1=mysqli_fetch_array($r))
{	
	extract($row1);
	$dd = "$year"."-"."$month"."-"."$day";
	$dateOfBirth = $dd;
	$today = date("Y-m-d");
	$diff = date_diff(date_create($dateOfBirth), date_create($today));
	$age =  $diff->format('%y');
}
$query = "SELECT day,count(*) as number  FROM dropout_details GROUP BY day";  
$res = $conn->query($query);
?>
<!DOCTYPE html>
<html>
<head>
        <meta charset="utf-8" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0, minimal-ui">
        <title>Age Wise - Bar Chart :: Student Dropout Analysis Portal</title>
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
                                <a href="javascript:void(0);" class="waves-effect"><i class="mdi mdi-school"></i> <span>All Schools </span> <span class="float-right"><i class="mdi mdi-chevron-right"></i></span></a>
                                <ul class="list-unstyled">
                                    <li><a href="addschool.php">Add New School</a></li>
                                    <li><a href="school.php">Manage All Schools</a></li>
                                </ul>
                            </li>

                             <li class="has_sub">
                                <a href="javascript:void(0);" class="waves-effect"><i class="mdi mdi-account-multiple"></i> <span>All Students </span> <span class="float-right"><i class="mdi mdi-chevron-right"></i></span></a>
                                <ul class="list-unstyled">
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
                                            <h5>Howdy, Admin</h5>
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
                                                <li class="breadcrumb-item active">Age Wise</li>
                                            </ol>
                                        </div>
                                        <h4 class="page-title">Student Drop Analysis (Age Wise)</h4>
                                    </div>
                                </div>
                            </div>
                            <!-- end page title end breadcrumb -->
			    <!-- dashboard content write below-->
			<div id="columnchart_material" style="width: 950px; height: 500px;"></div>
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
	<script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>
    <script type="text/javascript">
      google.charts.load('current', {'packages':['bar']});
      google.charts.setOnLoadCallback(drawChart);

      function drawChart() {
        var data = google.visualization.arrayToDataTable([
           ['age','age'],
	<?php
	while($row=$res->fetch_assoc())
	{
		echo "['".$age."',".$row['number']."],";
		
	}
	?>
        ]);

        var options = {
          chart: {
            title: '',
            //subtitle: 'Sales, Expenses, and Profit: 2014-2017',
          }
        };

        var chart = new google.charts.Bar(document.getElementById('columnchart_material'));

        chart.draw(data, google.charts.Bar.convertOptions(options));
      }
    </script>
    
    </body>
</html>