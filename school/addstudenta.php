<?php
session_start();
include("../connection.php");
if(!isset($_SESSION["user_id"]))
{
	header("Location: ../index.php");
}
if(isset($_GET['anum']))
{
	include("../connection.php");
	$sql = "select * from student_details where aadher_number=".$_GET['anum'];
	$abc = $_GET['anum'];
	$result = mysqli_query($conn,$sql);
	if(mysqli_num_rows($result)>0)
	{
		echo "<script type='text/javascript'>
			window.location.href='index.php?ch=1';
			</script>";
	}
	else
	{
		$sql1 = "select * from aadhaar_details where aadher_number=".$_GET['anum'];
		$result1 = mysqli_query($conn,$sql1);
		if(mysqli_num_rows($result1)>0)
		{
			$sql2 = "select * from dropout_details where aadher_number=".$_GET['anum'];
			$result2 = mysqli_query($conn,$sql2);
			if(mysqli_num_rows($result2)>0)
			{
				while($row=mysqli_fetch_array($result1))
				{
					extract($row);
					$sname = $name;
					$sfname = $father_name;
					$scast = $cast;
					$sday = $day;
					$smonth = $month;
					$syear = $year;
					$sgender = $gender;
					$sstreet = $street;
					$sarea = $area;
					$spin = $pincode;
					$scity = $city;
					$sstate = $state;
					$aa = $aadher_number;
				}
				$sahil = 0;
				
			}
			else
			{
				while($row=mysqli_fetch_array($result1))
				{
					extract($row);
					$sname = $name;
					$sfname = $father_name;
					$scast = $cast;
					$sday = $day;
					$smonth = $month;
					$syear = $year;
					$sgender = $gender;
					$sstreet = $street;
					$sarea = $area;
					$spin = $pincode;
					$scity = $city;
					$sstate = $state;
					$aa = $aadher_number;
				}
			}
		}
		else
		{
			echo "<script type='text/javascript'>
			window.location.href='index.php?ch=0';
			</script>";
		}
	}
}
?>
<!DOCTYPE html>
<html>
<head>
        <meta charset="utf-8" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0, minimal-ui">
        <title>Add New Student :: Student Dropout Analysis Portal</title>
        <meta content="Admin Dashboard" name="description" />
        <meta content="Mannatthemes" name="author" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge" />

        <link rel="shortcut icon" href="assets/images/sdap.png">

        <link href="assets/plugins/morris/morris.css" rel="stylesheet">
 <!-- Sweet Alert -->
        <link href="assets/plugins/sweet-alert2/sweetalert2.min.css" rel="stylesheet" type="text/css">
	<link href="assets/plugins/alertify/css/alertify.css" rel="stylesheet" type="text/css">
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
                                                <li class="breadcrumb-item active">Add New Student</li>
                                            </ol>
                                        </div>
                                        <h4 class="page-title">Add New Student</h4>
                                    </div>
                                </div>
                            </div>
                            <!-- end page title end breadcrumb -->
			    <!-- dashboard content write below-->
			    <div class="row">
                                <div class="col-12">
                                    <div class="card m-b-30">
                                        <div class="card-body">
            
                                            <h4 class="mt-0 header-title">Fill out the form</h4>
					<br>				
					<form action="<?php $_PHP_SELF; ?>" method="post">
                                            <div class="form-group row">
                                                <label for="example-text-input" class="col-sm-2 col-form-label">Full Name</label>
                                                <div class="col-sm-10">
                                                    <input class="form-control" type="text" name="name" placeholder="Full Name" value="<?php echo $sname ?>" id="example-text-input" readonly>
                                                </div>
                                            </div>
                                            <div class="form-group row">
                                                <label for="example-search-input" class="col-sm-2 col-form-label">Father Name</label>
                                                <div class="col-sm-10">
                                                    <input class="form-control" type="text" name="fname" value="<?php echo $sfname ?>" placeholder="Father Name" id="example-search-input" readonly>
                                                </div>
                                            </div>
                                            <div class="form-group row">
                                                <label for="example-url-input" class="col-sm-2 col-form-label">Street</label>
                                                <div class="col-sm-10">
                                                    <input class="form-control" type="text" name="street" value="<?php echo $sstreet ?>" placeholder="Street Address" id="example-url-input" readonly>
                                                </div>
                                            </div>
                                            <div class="form-group row">
                                                <label for="example-tel-input" class="col-sm-2 col-form-label">Area</label>
                                                <div class="col-sm-10">
                                                    <input class="form-control" type="text" value="<?php echo $sarea ?>" name="area" placeholder="Area / Landmark" id="example-tel-input" readonly>
                                                </div>
                                            </div>
                                            <div class="form-group row">
                                                <label for="example-password-input" class="col-sm-2 col-form-label">City</label>
                                                <div class="col-sm-10">
                                                    <input class="form-control" type="text" value="<?php echo $scity ?>" name="city" placeholder="City" id="example-password-input" readonly>
                                                </div>
                                            </div>
                                            <div class="form-group row">
                                                <label for="example-number-input" class="col-sm-2 col-form-label">State</label>
                                                <div class="col-sm-10">
                                                    <input class="form-control" type="text" value="<?php echo $sstate ?>" name="state" placeholder="State" id="example-number-input" readonly>
                                                </div>
                                            </div>
                                            <div class="form-group row">
                                                <label for="example-datetime-local-input" class="col-sm-2 col-form-label">Pincode</label>
                                                <div class="col-sm-10">
                                                    <input class="form-control" type="text" placeholder="000000" name="pin" value="<?php echo $spin ?>" id="example-datetime-local-input" readonly>
                                                </div>
                                            </div>
					<div class="form-group row">
                                                <label for="example-month-input" class="col-sm-2 col-form-label">Date of Birth</label>
                                                <div class="col-sm-10">
                                                    <input class="form-control" type="text" placeholder="DD-MM-YYYY" name="dob" value="<?php echo "$syear-$smonth-$sday"; ?>" id="example-month-input" readonly>
                                                </div>
                                            </div>
					<div class="form-group row">
                                                <label for="example-month-input" class="col-sm-2 col-form-label">Cast / Religion</label>
                                                <div class="col-sm-10">
                                                    <input class="form-control" type="text" value="<?php echo $scast ?>" name="cast" placeholder="Cast" id="example-number-input" readonly>
                                                </div>
                                            </div>
                                            <div class="form-group row">
                                                 <label class="col-sm-2 col-form-label">Gender</label>
                                                <div class="col-sm-10">
                                                    <input class="form-control" type="text" value="<?php echo $sgender ?>" name="gender" placeholder="Gender" id="example-number-input" readonly>
                                                </div>
                                            </div>
                                            <div class="form-group row">
                                                <label class="col-sm-2 col-form-label">Standard</label>
                                                <div class="col-sm-10">
                                                    <select class="form-control" name="std">
                                                        <option>Select</option>
                                                        <option value="1st">1st Standard</option>
                                                       <option value="2nd">2nd Standard</option>
						<option value="3rd">3rd Standard</option>
						<option value="4th">4th Standard</option>
						<option value="5th">5th Standard</option>
						<option value="6th">6th Standard</option>
						<option value="7th">7th Standard</option>
						<option value="8th">8th Standard</option>
						<option value="9th">9th Standard</option>
						<option value="10th">10th Standard</option>
						<option value="11th">11th Standard</option>
						<option value="12th">12th Standard</option>
                                                    </select>
                                                </div>
                                            </div>
                                            <div class="form-group row">
                                                <label for="example-time-input" class="col-sm-2 col-form-label">Joining Year</label>
                                                <div class="col-sm-10">
                                                    <input class="form-control" type="year" value="" placeholder="YYYY" data-mask="0000" name="jyear" id="example-time-input">
                                                </div>
                                            </div>
                                           <div class="form-group row">
					<label for="example-time-input" class="col-sm-2 col-form-label">Aaddhar Number</label>
					<div class="col-sm-10">
						<input type="text" placeholder="e.g 1234-1234-1234" name="anum" value="<?php echo $aa ?>" class="form-control" readonly>
					</div>
					</div>
					<div class="form-group">
					 <label for="example-time-input" class="col-sm-2 col-form-label" ></label>
                                                    <div class="col-sm-10">
						&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
						&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
						&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                                                        <button type="submit" name="save" class="btn btn-primary waves-effect waves-light">Add Student</button>
                                                        <button type="reset" class="btn btn-secondary waves-effect m-l-5">Reset Form</button>
                                                    </div>
                                                </div></form>
                                        </div>
                                    </div>
                                </div> <!-- end col -->
                            </div> <!-- end row -->

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

	<!-- Bootstrap inputmask js -->
        <script src="assets/plugins/bootstrap-inputmask/bootstrap-inputmask.min.js" type="text/javascript"></script>
	
        <!-- App js -->
        <script src="assets/js/app.js"></script>

	<!-- Sweet-Alert  -->
         <script src="assets/plugins/sweet-alert2/sweetalert2.min.js"></script>
         <script src="assets/pages/sweet-alert.init.js"></script> 

	<script src="assets/plugins/alertify/js/alertify.js"></script>
        <script src="assets/pages/alertify-init.js"></script>
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
	include("../connection.php");
	if(isset($_POST['save']))
	{
	$dob = $_POST['dob'];
	$b = explode('-', $dob);
	$y = $b[0];
	$m = $b[1];
	$d  = $b[2];
	
	$name = $_POST['name'];
	$fname = $_POST['fname'];
	$street = $_POST['street'];
	$area = $_POST['area'];
	$city = $_POST['city'];
	$state = $_POST['state'];
	$pincode = $_POST['pin'];
	$day = $d;
	$month = $m;
	$year = $y;
	$cast = $_POST['cast'];
	$gender = $_POST['gender'];
	$std = $_POST['std'];
	$jyear = $_POST['jyear'];
	$anum = $_POST['anum'];
	$school = $_SESSION['user_id'];
	
	$sql = "insert into student_details(name,f_name,street,area,city,state,pincode,day,month,year,cast,gender,std,jyear,aadher_number,school_id) values('$name','$fname','$street','$area','$city','$state','$pincode','$day',
	'$month','$year','$cast','$gender','$std','$jyear','$anum','$school')";
	
	$result = mysqli_query($conn,$sql);
	$sql3 = "DELETE FROM dropout_details WHERE aadher_number=".$_GET['anum'];	
	$re = mysqli_query($conn,$sql3);
	echo "<script type='text/javascript'>
	window.location.href = 'student.php';
	</script>";
	}
?>