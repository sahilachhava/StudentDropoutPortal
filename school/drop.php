<?php
session_start();
include("../connection.php");
if(!isset($_SESSION["user_id"])){

	header("Location:../index.php");
}
if(isset($_GET["student_id"]))
{
	$sql1 = "select * from student_details where student_id = ".$_GET["student_id"];
	
	$result1 = mysqli_query($conn,$sql1);
	while($row=mysqli_fetch_array($result1))
	{
		extract($row);
		$sname = $name;
		$sfname = $f_name;
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
		$sstd = $std;
		$sjyear = $jyear;
		$aa = $aadher_number;
	}
	$ssname = $sname;
	$ssfname = $sfname;
	$sscast = $scast;
	$ssday = $sday;
	$ssmonth = $smonth;
	$ssyear = $syear;
	$ssgender = $sgender;
	$ssstreet = $sstreet;
	$ssarea = $sarea;
	$sspin = $spin;
	$sscity = $scity;
	$ssstate = $sstate;
	$ssstd = $sstd;
	$ssjyear = $sjyear;
	$saa = $aa;
	$slyear = $_GET["leave"];
	$rea = $_GET["reason"];
	$school_id = $_SESSION["user_id"];

	$in1="insert into dropout_details(name,f_name,cast,day,month,year,gender,street,area,pincode,city,state,std,jyear,lyear,reason,aadher_number,school_id) 
	values('$ssname','$ssfname','$sscast','$ssday','$ssmonth','$ssyear','$ssgender','$ssstreet','$ssarea','$sspin','$sscity','$ssstate','$ssstd','$ssjyear','$slyear','$rea','$saa','$school_id')";
	$result=mysqli_query($conn,$in1);
	$del = "DELETE FROM student_details WHERE student_id =".$_GET["student_id"];
	$re = mysqli_query($conn,$del);
	echo "<script type='text/javascript'>window.location.href='student.php';</script>";
}
?>