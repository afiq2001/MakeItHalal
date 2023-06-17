<?php
$con = mysqli_connect("localhost","root","","make_it_halal");

if(isset($_POST['submit'])){
	$status_approval=$_POST['status_approval'];
    $date_approval=$row['date_approval'];

    

		
	$sql="INSERT `marriage_registration` (status_approval,date_approval)
	values('$status_approval','$date_approval')";
	
	$result=mysqli_query($con,$sql);
	if($result){
		header('location:staff_approval_page.php');
	}
	else{
		die(mysqli_error($con));
	}
}

$con = mysqli_connect("localhost","root","","make_it_halal");
if(isset($_POST['submit1'])){
	
    

	
	if($_POST){
		header('location:staff_approval_page.php');
	}
	else{
		die(mysqli_error($con));
	}
}


?>
