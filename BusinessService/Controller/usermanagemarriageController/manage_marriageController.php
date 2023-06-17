<?php
$con = mysqli_connect("localhost","root","","make_it_halal");

if(isset($_POST['submit'])){
	$marriage_category=$row['marriage_category'];
	$akuanNo=$row['akuanNo'];
	$date_registration=$_POST['date_registration'];
    $certNo_groom=$row['certNo_groom'];
	$certNo_bride=$row['certNo_bride'];


    

		
	$sql="INSERT `marriage_registration` (marriage_category,akuanNo,date_registration,certNo_groom,certNo_bride)
	values('$marriage_category','$akuanNo','$date_registration','$certNo_groom','$certNo_bride')";
	
	$result=mysqli_query($con,$sql);
	if($result){
		header('location:marriage_registration.php');
	}
	else{
		die(mysqli_error($con));
	}
}

$con = mysqli_connect("localhost","root","","make_it_halal");
if(isset($_POST['submit1'])){
	
    

	
	if($_POST){
		header('location:marriage_registration.php');
	}
	else{
		die(mysqli_error($con));
	}
}


?>
