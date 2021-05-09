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
        <title>Students :: Student Dropout Analysis Portal</title>
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
                                                <li class="breadcrumb-item active">All Student Details</li>
                                            </ol>
                                        </div>
                                        <h4 class="page-title">All Student Details</h4>
                                    </div>
                                </div>
                            </div>
                            <!-- end page title end breadcrumb -->
			    <!-- dashboard content write below-->
			    <?php
				$sql2 = "select count(*) from student_details where school_id=".$_SESSION['user_id'];
				$result2 = mysqli_query($conn,$sql2);
				$row = mysqli_fetch_array($result2);
				$total = $row[0];
			?>
			 <div class="row">
                                <div class="col-12">
                                    <div class="card m-b-30">
                                        <div class="card-body">
            
                                            <h4 class="mt-0 header-title"><?php echo "Total Enrolled Student:"." ".$total; ?></h4> <br>
                                            <table id="datatable-buttons" class="table table-striped table-bordered" cellspacing="0" width="100%">
                                                <thead>
                                                <tr>
                                                    <th>Name</th>
                                                    <th>Area</th>
                                                    <th>Gender</th>
                                                    <th>Pincode</th>
                                                    <th>Age</th>
					<th>Cast</th>
					<th>Joining Year</th>
					<th>Aadhaar Number</th>
					<th>Drop</th>
                                                </tr>
                                                </thead>
                                                <tbody>
                                                <?php
                                                include("../connection.php");
						$sql = "select * from student_details where school_id=".$_SESSION['user_id'];
						$result = mysqli_query($conn,$sql);
						$i=0;
						while($row=mysqli_fetch_array($result))
						{
							extract($row);
							$dd = "$year"."-"."$month"."-"."$day";
							$dateOfBirth = $dd;
							$today = date("Y-m-d");
							$diff = date_diff(date_create($dateOfBirth), date_create($today));
							$age =  $diff->format('%y');
							$va = $student_id;
							$i++;
							echo "<tr>";
							echo "<td> $name </td>";
							echo "<td> $area </td>";
							echo "<td> $gender </td>";
							echo "<td> $pincode </td>";
							echo "<td> $age </td>";
							echo "<td> $cast </td>";
							echo "<td> $jyear </td>";
							echo "<td> $aadher_number </td>";
							echo "<td>  <button class='btn btn-primary waves-effect waves-light dro' onClick='back(this.id)' id='$va'  value='$va'>Drop </button> </td>";
							echo "</tr>";
						}
					?>
                                                </tbody>
                                            </table>
            
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
  <!-- Sweet-Alert  -->
         <script src="assets/plugins/sweet-alert2/sweetalert2.min.js"></script>
         <script src="assets/pages/sweet-alert.init.js"></script>

	<script src="assets/plugins/alertify/js/alertify.js"></script>
        <script src="assets/pages/alertify-init.js"></script>
         <!-- Datatable init js -->
         <script src="assets/pages/datatables.init.js"></script>
	 <script type="text/javascript">
	 function back(but) 
	 {
		//var but = document.getElementsBy('drop').e;
		//var issue = ['Family Financial Issue','Social Issue','Not Interested in Further Studies','Lack of Higher Studies in Village','Co-Education System','Other'];
            swal({
                title: 'Reason for Dropout',
                input: 'select',
		inputOptions: {
			'Family Financial Issue':'Family Financial Issue',
			'Social Issue':'Social Issue',
			'Not Interested in Further Studies':'Not Interested in Further Studies',
			'Lack of Higher Studies in Village':'Lack of Higher Studies in Village',
			'Co-Education System':'Co-Education System',
			'Other':'Other'
			},
			inputPlaceholder:'Select',
		//html:'<select class="form-control" name="issue"><option value="Select">Select</option><option value="Family Financial Issue">Family Financial Issue</option><option value="Not Interested in Further Studies">Not Interested in Further Studies</option><option value="Lack of Higher Studies in Village">Lack of Higher Studies in Village</option><option value="Co-Education System">Co-Education System</option><option value="Social Issue">Social Issue</option><option value="Other">Other</option></select>',
                showCancelButton: true,
                confirmButtonText: 'Submit',
                showLoaderOnConfirm: true,
                confirmButtonClass: 'btn btn-success',
                cancelButtonClass: 'btn btn-danger m-l-10',
		inputValidator: function (value) {
		    return new Promise(function (resolve, reject) {
		      if (value == '') {
			reject('You need to select Reason :)')
		      } 
		      else if(value=="Other")
			{
				swal({
				title: 'Other Reason for dropout',
				input: 'text',
				showCancelButton: true,
				confirmButtonText: 'Submit',
				showLoaderOnConfirm: true,
				confirmButtonClass: 'btn btn-success',
				cancelButtonClass: 'btn btn-danger m-l-10',}).then(function(result){
		swal({
                title: 'Dropout Year',
                input: 'text',
                showCancelButton: true,
                confirmButtonText: 'Submit',
                showLoaderOnConfirm: true,
                confirmButtonClass: 'btn btn-success',
                cancelButtonClass: 'btn btn-danger m-l-10',
                 preConfirm: function (text,result) {
                    return new Promise(function (resolve, reject) {
                        setTimeout(function () {
                            if (text == "") {
				swal(
					'Empty',
					'Please Enter Valid Leaving Year',
					'error')
                            } else {
                                resolve()
                            }
                        }, 200)
                    })
                },
                allowOutsideClick: false
            }).then(function (text) {
	    var rr = text;
	    var yy = result;
                swal({
                    type: 'success',
                    title: 'Student Dropped',
                    html: '' ,
                }).then(function () {
		window.location.href='drop.php?reason='+yy+'&leave='+rr+'&student_id='+but;
                    })
	    })
            });
			}
		      else {
			resolve()
		      }
		    })
		  }
		}).then(function(result){
		swal({
                title: 'Dropout Year',
                input: 'text',
                showCancelButton: true,
                confirmButtonText: 'Submit',
                showLoaderOnConfirm: true,
                confirmButtonClass: 'btn btn-success',
                cancelButtonClass: 'btn btn-danger m-l-10',
                 preConfirm: function (text,result) {
                    return new Promise(function (resolve, reject) {
                        setTimeout(function () {
                            if (text == "") {
				swal(
					'Empty',
					'Please Enter Valid Leaving Year',
					'error')
                            } else {
                                resolve()
                            }
                        }, 200)
                    })
                },
                allowOutsideClick: false
            }).then(function (text) {
	    var rr = text;
	    var yy = result;
                swal({
                    type: 'success',
                    title: 'Student Dropped',
                    html: '' ,
                }).then(function () {
		window.location.href='drop.php?reason='+yy+'&leave='+rr+'&student_id='+but;
                    })
	    })
            });
	}
	 </script>
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
	 <!-- Bootstrap inputmask js -->
        <script src="assets/plugins/bootstrap-inputmask/bootstrap-inputmask.min.js" type="text/javascript"></script>
    </body>
</html>