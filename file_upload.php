	<?php
		
			// This is for birth certificate number and father citizenship number.
	

			@include 'config.php';

			$bdayc_no = $_POST['bcert_no'];
			$fc_no = $_POST['fc_certno'];

			$fetch = "SELECT * FROM `user_document` WHERE `birth_cert_no`='$bdayc_no' ";
			$retrieve = mysqli_query($conn, $fetch);

			if (mysqli_num_rows($retrieve) > 0) {
				echo '<script> alert("your birth certificate number already exits!") </script>';
			}else{

				$store = " INSERT INTO `user_document`(`birth_cert_no`, `f_citizenship_no`) VALUES ('$bdayc_no','$fc_no') ";
				mysqli_query($conn, $store);
				header('location:submission.php');
			}

	?>

