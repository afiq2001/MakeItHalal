<?php
$con = mysqli_connect("localhost","root","","make_it_halal");

if(isset($_POST['submit'])){
	$card_status=$_POST['card_status'];
    $card_approval_date=$row['card_approval_date'];
	$comment=$row['comment'];

    

		
	$sql="INSERT `marriage_card` (card_status,card_approval_date,comment)
	values('$card_status','$card_approval_date','$comment')";
	
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
