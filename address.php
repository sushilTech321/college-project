<?php 

@include 'config.php';
 session_start();
if (isset($_POST['addss_sub'])) {

			//address section 
			
				    $province = $_POST['subject'];
				    $district = $_POST['topic'];
				    $sthaniya = $_POST['chapter'];
				    $wadano		= $_POST['wno'];

				    $addinsert = " INSERT INTO `address`(`province`, `district`, `village_nagar`, `wada_no`) VALUES ('$province','$district','$sthaniya','$wadano') ";
						
					$add_run = mysqli_query($conn, $addinsert);	

					if ($add_run) {
						echo'<script>

						alert("Your information successfully inserted in the database.");

						</script>';

						header('Location:citizenship.php');
					};


};
	

 ?>