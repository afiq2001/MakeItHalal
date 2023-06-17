<?php
$con = mysqli_connect("localhost","root","","make_it_halal");
if(isset($_GET['delete'])){
	$apply_date=$_GET['delete'];
	
	$sql="DELETE FROM `marriage_card` WHERE apply_date=$apply_date";
	$result=mysqli_query($con,$sql);
	if($result){
		header('location:marriage_registration.php');
		
	}
	else{
		die(mysqli_error($con));
	}
}


?>


<?php
$con = mysqli_connect("localhost","root","","make_it_halal");

if(isset($_POST['submit'])){
	$marriagecard=$_POST['marriagecard'];
    $apply_date=$row['apply_date'];
    $date_pickup=$row['date_pickup'];

    

		
	$sql="INSERT `marriage_card` (marriagecard,apply_date,date_pickup)
	values('$marriagecard','$apply_date','$date_pickup')";
	
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
