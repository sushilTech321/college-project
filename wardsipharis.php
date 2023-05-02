<?php 

@include 'config.php';
	

if (isset($_POST['wards']) && isset($_FILES['ward_sipharis'])) {

	// echo "<pre>";
	// print_r($_FILES['ward_sipharis']);
	// echo "</pre>";

	$img_name = $_FILES['ward_sipharis']['name'];
	$img_size = $_FILES['ward_sipharis']['size'];
	$tmp_name = $_FILES['ward_sipharis']['tmp_name'];
	$error = $_FILES['ward_sipharis']['error'];

	if ($error === 0) {
		if ($img_size >500000) {
			$em = "Sorry, your file is too large.";
		    header("Location: citizenship.php?error=$em");
		}else {
			$img_ex = pathinfo($img_name, PATHINFO_EXTENSION);
			$img_ex_lc = strtolower($img_ex);

			$allowed_exs = array("jpg", "jpeg", "png","pdf","docx"); 

			if (in_array($img_ex_lc, $allowed_exs)) {
				$new_img_name = uniqid("IMG-", true).'.'.$img_ex_lc;
				$img_upload_path = 'uploads/'.$new_img_name;
				move_uploaded_file($tmp_name, $img_upload_path);

				// Insert into Database
				$sql = "INSERT INTO `ward_doc` ( `ward_sipharis`) VALUES('$new_img_name')";
				mysqli_query($conn, $sql);
				header("Location:citizenship.php");
					
			}else {
				$em = "You can't upload files of this type";
		        // header("Location: citizenship.php?error=$em");
			}
		}
	}else {
		$em = "unknown error occurred!";
		// header("Location: citizenship.php?error=$em");
	}

}else {
	header("Location: citizenship.php");
}


 ?>