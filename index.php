<?php
session_start();

	include('connection.php');
	if($_SERVER["REQUEST_METHOD"] == "POST"){
		$user = $_POST['user'];
		$pass = $_POST['pass'];
		
		$sql = "select * from admin_detail WHERE `email`='$user' AND `password`='$pass'";
		$result = mysqli_query($conn,$sql) or die(mysqli_error($conn));
		if(mysqli_num_rows($result)>0)
		{
			while($row=mysqli_fetch_array($result))
			{
				extract($row);
				
				if($user == $email && $pass == $password)
				{
					$_SESSION["user_id"] = $id;
					header("location:admin/index.php");
				}
			}
		}
		else
			{
				$sql = "select * from school_details WHERE `email`='$user' AND `password`='$pass'";
				$result = mysqli_query($conn,$sql) or die(mysqli_error($conn));
				if(mysqli_num_rows($result)>0)
				{
					while($row=mysqli_fetch_array($result))
					{
						extract($row);
						
						if($user == $email && $pass == $password)
						{
							$_SESSION["user_id"] = $school_id;
							header("location:school/index.php");
						}
					}
				}
				else
				{
					$sql = "select * from deo WHERE `deo_email`='$user' AND `deo_pass`='$pass'";
					$result = mysqli_query($conn,$sql) or die(mysqli_error($conn));
					if(mysqli_num_rows($result)>0)
					{
						while($row=mysqli_fetch_array($result))
						{
							extract($row);
							
							if($user == $deo_email && $pass == $deo_pass)
							{
								$_SESSION["user_id"] = $deo_id;
								header("location:deo/index.php");
							}
						}
					}
				}
			}
			echo "Incorrect details";
		}
?>
<!DOCTYPE html>
<html>
<head>
        <meta charset="utf-8" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0, minimal-ui">
        <title>Login :: Student Dropout System</title>
        <meta content="Admin Dashboard" name="description" />
        <meta content="Mannatthemes" name="author" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge" />

        <link rel="shortcut icon" href="assets/images/sdap.png">

        <link href="assets/css/bootstrap.min.css" rel="stylesheet" type="text/css">
        <link href="assets/css/icons.css" rel="stylesheet" type="text/css">
        <link href="assets/css/style.css" rel="stylesheet" type="text/css">

    </head>


    <body class="fixed-left">

        <!-- Begin page -->
        <div class="accountbg"></div>
        <div class="wrapper-page">

            <div class="card">
                <div class="card-body">

                    <h3 class="text-center mt-0 m-b-15">
                        <a href="index.php" class="logo logo-admin"><img src="assets/images/slogo.png" height="90" alt="logo"></a>
			<!--<a href="index.php" class="logo"><i class="mdi mdi-assistant"></i> SDS</a>-->
                    </h3>

                    <div class="p-3">
                        <form class="form-horizontal m-t-20" action="<?php $_PHP_SELF; ?>" method="post">

                            <div class="form-group row">
                                <div class="col-12">
                                    <input class="form-control" type="text" required="" name="user" placeholder="Email">
                                </div>
                            </div>

                            <div class="form-group row">
                                <div class="col-12">
                                    <input class="form-control" type="password" required="" name="pass" placeholder="Password">
                                </div>
                            </div>

                            <div class="form-group row">
                                <div class="col-12">
                                    <div class="custom-control custom-checkbox">
                                        <input type="checkbox" class="custom-control-input" id="customCheck1">
                                        <label class="custom-control-label" for="customCheck1">Remember me</label>
                                    </div>
                                </div>
                            </div>

                            <div class="form-group text-center row m-t-20">
                                <div class="col-12">
                                    <button class="btn btn-danger btn-block waves-effect waves-light" type="submit">Log In</button>
                                </div>
                            </div>

                         
                                <div class="col-sm-10 m-t-20">
                                    &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
				    &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
				    &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
				    <a href="forgot.php" class="text-muted"><i class="mdi mdi-lock"></i> <small>Forgot your password ?</small></a>
                                </div>
                          
                        </form>
                    </div>

                </div>
            </div>
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

        <!-- App js -->
        <script src="assets/js/app.js"></script>

    </body>
</html>