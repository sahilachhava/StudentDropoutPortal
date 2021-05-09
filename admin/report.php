<?php
session_start();
include("../connection.php");
if(!isset($_SESSION["user_id"]))
{
	header("Location: ../index.php");
}
$counter = 0;
$school_counter = 0;
$schoolName = 'Multiple schools';
?>
<!DOCTYPE html>
<html>
<head>
        <meta charset="utf-8" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0, minimal-ui">
        <title>Overall Reports :: Student Dropout Analysis Portal</title>
        <meta content="Admin Dashboard" name="description" />
        <meta content="Mannatthemes" name="author" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge" />

        <link rel="shortcut icon" href="assets/images/sdap.png">

        <link href="assets/plugins/morris/morris.css" rel="stylesheet">

        <link href="assets/css/bootstrap.min.css" rel="stylesheet" type="text/css">
        <link href="assets/css/icons.css" rel="stylesheet" type="text/css">
        <link href="assets/css/style.css" rel="stylesheet" type="text/css">
	<!-- DataTables -->
        <link href="assets/plugins/datatables/dataTables.bootstrap4.min.css" rel="stylesheet" type="text/css" />
        <link href="assets/plugins/datatables/buttons.bootstrap4.min.css" rel="stylesheet" type="text/css" />
        <!-- Responsive datatable examples -->
        <link href="assets/plugins/datatables/responsive.bootstrap4.min.css" rel="stylesheet" type="text/css" />

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
                                                <li class="breadcrumb-item active">Overall Reports</li>
                                            </ol>
                                        </div>
                                        <h4 class="page-title">Overall Reports</h4>
                                    </div>
                                </div>
                            </div>
                            <!-- end page title end breadcrumb -->
			    <!-- dashboard content write below-->
			    <form action="report.php" method="post">
			<div class="form-group row">
			<label for="example-month-input" class="col-sm-1 col-form-label">Year</label>
                                                <div class="col-sm-2">
                                                    <select class="form-control" name="year">
                                                        <option value="0">Select</option>
						<?php
							$sql= "select DISTINCT lyear from dropout_details";
							$re = mysqli_query($conn,$sql);
							while($row=mysqli_fetch_array($re))
							{
								extract($row);
								echo "<option value=".$lyear.">".$lyear."</option>";
							}
						?>
                                                    </select>
                                                </div>
                                                <label for="example-month-input" class="col-sm-1 col-form-label">School</label>
                                                <div class="col-sm-2">
                                                    <select class="form-control" name="school">
                                                        <option value="0">Select</option>
						<?php
							$sql= "SELECT DISTINCT
							    `school_details`.`name`
							FROM
							    `sdportal`.`school_details`
							    INNER JOIN `sdportal`.`dropout_details` 
								ON (`school_details`.`school_id` = `dropout_details`.`school_id`)
							GROUP BY `school_details`.`name`;";
							$re = mysqli_query($conn,$sql);
							while($row=mysqli_fetch_array($re))
							{
								extract($row);
								echo "<option value=".$name.">".$name."</option>";
							}
						?>
                                                    </select>
                                                </div>
						<label for="example-month-input" class="col-sm-1 col-form-label">Area</label>
                                                <div class="col-sm-2">
                                                    <select class="form-control" name="area">
                                                        <option value="0">Select</option>
						<?php
							$sql= "select DISTINCT area from dropout_details";
							$re = mysqli_query($conn,$sql);
							while($row=mysqli_fetch_array($re))
							{
								extract($row);
								echo "<option value=".$area.">".$area."</option>";
							}
						?>
                                                    </select>
                                                </div>
						<label for="example-month-input" class="col-sm-1 col-form-label">Gender</label>
                                                <div class="col-sm-2">
                                                    <select class="form-control" name="gender">
                                                        <option value="0">Select</option>
						<?php
							$sql= "select DISTINCT gender from dropout_details";
							$re = mysqli_query($conn,$sql);
							while($row=mysqli_fetch_array($re))
							{
								extract($row);
								echo "<option value=".$gender.">".$gender."</option>";
							}
						?>
                                                    </select>
                                                </div>
						<label for="example-month-input" class="col-sm-1 col-form-label">Cast</label>
                                                <div class="col-sm-2">
                                                    <select class="form-control" name="cast">
                                                        <option value="0">Select</option>
						<?php
							$sql= "select DISTINCT cast from dropout_details";
							$re = mysqli_query($conn,$sql);
							while($row=mysqli_fetch_array($re))
							{
								extract($row);
								echo "<option value=".$cast.">".$cast."</option>";
							}
						?>
                                                    </select>
                                                </div>
						<label for="example-month-input" class="col-sm-1 col-form-label">Reason</label>
                                                <div class="col-sm-2">
                                                    <select class="form-control" name="reason">
                                                        <option value="0">Select</option>
						<?php
							$sql= "select DISTINCT reason from dropout_details";
							$re = mysqli_query($conn,$sql);
							while($row=mysqli_fetch_array($re))
							{
								extract($row);
								echo "<option value=".$reason.">".$reason."</option>";
							}
						?>
                                                    </select>
                                                </div>
						<label for="example-time-input" class="col-sm-1 col-form-label" ></label>
                                                    <div class="col-sm-1">
                                                        <button type="submit" class="btn btn-primary waves-effect waves-light">Search</button>
                                                    </div>
						      <div class="col-sm-1">
						    <button type="reset" class="btn btn-secondary waves-effect m-l-5">Reset</button>
						    </div>
						    <div class="col-sm-1">
						   <a href="Solution.pdf"><button type="button" class="btn btn-secondary waves-effect m-l-5">Download Solution</button></a>
						    </div>
                                            </div> </form>
					    <div class="row">
                                <div class="col-12">
                                    <div class="card m-b-30">
                                        <div class="card-body">
            
                                            <h4 class="mt-0 header-title">Dropout Student Details</h4> <br>
                                            <table id="datatable-buttons" class="table table-striped table-bordered" cellspacing="0" width="100%">
                                                 <thead>
                                                <tr>
                                                    <th>Name</th>
                                                    <th>Area</th>
                                                    <th>City</th>
                                                    <th>Gender</th>
                                                    <th>Age</th>
					<th>Cast</th>
					<th>Joining Year</th>
					<th>Leaving Year</th>
					<th>Aadhaar Number</th>
					<th>Reason</th>
                                                </tr>
                                                </thead>
                                                <tbody>
                                                <?php
						if(isset($_REQUEST['year']) or isset($_REQUEST['school']) or isset($_REQUEST['gender']) or isset($_REQUEST['cast']) or isset($_REQUEST['reason']) or isset($_REQUEST['area']))
						{
							include("../connection.php");
							$s = $_REQUEST['school'];
							$sql1 =  "select school_id, name from school_details where name like '$s%'";
							$res = mysqli_query($conn,$sql1);
							$row = mysqli_fetch_array($res);
							$sid=$row[0];
							$schoolName=$row[1];
							$query = "";
							if($_REQUEST["year"] != "0"){
								$query = "SELECT * FROM `dropout_details` WHERE `lyear`=".$_REQUEST["year"];
							}
							if($_REQUEST["school"] != "0"){
								if($query == ""){
									$query = "SELECT * FROM `dropout_details` WHERE `school_id`=".$sid;
								}else{
									$query .= " AND `school_id`=".$sid;
								}
							}
							if($_REQUEST["area"] != "0"){
								if($query == ""){
									$query = "SELECT * FROM `dropout_details` WHERE `area`like '".$_REQUEST["area"]."%'";
								}else{
									$query .= " AND `area` like '".$_REQUEST["area"]."%'";
								}
							}
							if($_REQUEST["cast"] != "0"){
								if($query == ""){
									$query = "SELECT * FROM `dropout_details` WHERE `cast`='".$_REQUEST["cast"]."'";
								}else{
									$query .= " AND `cast`='".$_REQUEST['cast']."'";
								}
							}
							if($_REQUEST["gender"] != "0"){
								if($query == ""){
									$query = "SELECT * FROM `dropout_details` WHERE `gender`='".$_REQUEST["gender"]."'";
								}else{
									$query .= " AND `gender`='".$_REQUEST["gender"]."'";
								}
							}
							if($_REQUEST["reason"] != "0"){
								if($query == ""){
									$query = "SELECT * FROM `dropout_details` WHERE `reason`like '".$_REQUEST["reason"]."%'";
								}else{
									$query .= " AND `reason`like '".$_REQUEST["reason"]."%'";
								}
							}
							$result = mysqli_query($conn,$query) or die(mysqli_error($conn)) ;
							while($row=mysqli_fetch_array($result))
							{
								$school_counter++;
								extract($row);
								$dd = "$year"."-"."$month"."-"."$day";
								$dateOfBirth = $dd;
								$today = date("Y-m-d");
								$diff = date_diff(date_create($dateOfBirth), date_create($today));
								$age =  $diff->format('%y');
								echo "<tr>";
								echo "<td> $name </td>";
								echo "<td> $area </td>";
								echo "<td> $city </td>";
								echo "<td> $gender </td>";
								echo "<td> $age </td>";
								echo "<td> $cast </td>";
								echo "<td> $jyear </td>";
								echo "<td> $lyear </td>";
								echo "<td> $aadher_number </td>";
								echo "<td> $reason </td>";
								echo "</tr>";
							}
						}
						else
						{
							include("../connection.php");
							$sql = "select * from dropout_details";
							$result = mysqli_query($conn,$sql);
							while($row=mysqli_fetch_array($result))
							{
								$counter++;
								extract($row);
								$dd = "$year"."-"."$month"."-"."$day";
								$dateOfBirth = $dd;
								$today = date("Y-m-d");
								$diff = date_diff(date_create($dateOfBirth), date_create($today));
								$age =  $diff->format('%y');
								echo "<tr>";
								echo "<td> $name </td>";
								echo "<td> $area </td>";
								echo "<td> $city </td>";
								echo "<td> $gender </td>";
								echo "<td> $age </td>";
								echo "<td> $cast </td>";
								echo "<td> $jyear </td>";
								echo "<td> $lyear </td>";
								echo "<td> $aadher_number </td>";
								echo "<td> $reason </td>";
								echo "</tr>";
							}
						}
					?>
                                                </tbody>
                                            </table>
					    <br /><br />
					    <div id="columnchart_material"></div>
        <script src="assets/js/jquery.min.js"></script>
        <script src="assets/plugins/morris/morris.min.js"></script>
				 <script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>
				<script type="text/javascript">
				$(document).ready(function(){
				      google.charts.load('current', {'packages':['bar']});
				      google.charts.setOnLoadCallback(drawChart);

				      function drawChart() {
					var data = google.visualization.arrayToDataTable([
						['DropOuts','DropOuts'],
						<?php if($_REQUEST["year"] != "0") { ?>
						['<?php echo $_REQUEST["year"]; ?> - DropOuts', <?php echo isset($school_counter) ? $school_counter : 0; ?>],
						<?php } ?>
						<?php if($_REQUEST["school"] != "0") { ?>
						['<?php echo $schoolName; ?> - DropOuts', <?php echo isset($school_counter) ? $school_counter : 0; ?>],
						<?php } ?>
						<?php if($_REQUEST["area"] != "0") { ?>
						['<?php echo $_REQUEST["area"]; ?> - DropOuts', <?php echo isset($school_counter) ? $school_counter : 0; ?>],
						<?php } ?>
						<?php if($_REQUEST["gender"] != "0") { ?>
						['<?php echo $_REQUEST["gender"]; ?> - DropOuts', <?php echo isset($school_counter) ? $school_counter : 0; ?>],
						<?php } ?>
						<?php if($_REQUEST["cast"] != "0") { ?>
						['<?php echo $_REQUEST["cast"]; ?> - DropOuts', <?php echo isset($school_counter) ? $school_counter : 0; ?>],
						<?php } ?>
						<?php if($_REQUEST["reason"] != "0") { ?>
						['<?php echo $_REQUEST["reason"]; ?> - DropOuts', <?php echo isset($school_counter) ? $school_counter : 0; ?>],
						<?php } ?>
						
					]);

					var options = {
					  chart: {
					    title: 'DropOut Students',
					    //subtitle: 'Sales, Expenses, and Profit: 2014-2017',
					  }
					};

					var chart = new google.charts.Bar(document.getElementById('columnchart_material'));

					chart.draw(data, google.charts.Bar.convertOptions(options));
				      }
				      });
				    </script>
            
                                        </div>
                                    </div>
                                </div> <!-- end col -->
                            </div> <!-- end row -->
        <!-- jQuery  -->
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
	<!-- Required datatable js -->
         <script src="assets/plugins/datatables/jquery.dataTables.min.js"></script>
         <script src="assets/plugins/datatables/dataTables.bootstrap4.min.js"></script>
         <!-- Buttons examples -->
         <script src="assets/plugins/datatables/dataTables.buttons.min.js"></script>
	<script src="assets/plugins/datatables/buttons.bootstrap4.min.js"></script>
         <script src="assets/plugins/datatables/jszip.min.js"></script>
         <script src="assets/plugins/datatables/pdfmake.min.js"></script>
         <script src="assets/plugins/datatables/vfs_fonts.js"></script>
         <script src="assets/plugins/datatables/buttons.html5.min.js"></script>
         <script src="assets/plugins/datatables/buttons.print.min.js"></script>
 <script src="assets/plugins/datatables/buttons.colVis.min.js"></script>
 
         <!-- Datatable init js -->
         <script src="assets/pages/datatables.init.js"></script>


    </body>
</html>