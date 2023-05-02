<?php 

@include 'config.php';

if (isset($_POST['delete_btn'])) {
	
	$id = $_POST['delete_id'];

	$delete = "DELETE FROM `general_details` WHERE `id`='$id' ";
	$delete_run = mysqli_query($conn,$delete);

	if ($delete_run) {
		$_SESSION['success'] = "User is deleted !";
		header("Location:userdetails.php");
	}else{

		$_SESSION['status'] = "User is not deleted !";
		header("Location:userdetails.php");
	}


}


 ?>