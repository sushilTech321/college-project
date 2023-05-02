<?php
error_reporting(0);
@include 'config.php';

session_start();

if(isset($_POST['submit'])){

   $name = mysqli_real_escape_string($conn, $_POST['name']);
   $email = mysqli_real_escape_string($conn, $_POST['email']);
   $pass = md5($_POST['password']);
   $cpass = md5($_POST['cpassword']);
   $user_type = $_POST['user_type'];

   $select = " SELECT * FROM user_form WHERE email = '$email' && password = '$pass' ";

   $result = mysqli_query($conn, $select);

   if(mysqli_num_rows($result) > 0){

      $row = mysqli_fetch_array($result);


         // checking admin and user
      if($row['user_type'] == 'admin'){

         $_SESSION['admin_name'] = $row['name'];
            header('location:admin_page.php');

      }elseif($row['user_type'] == 'user'){
            
         $_SESSION['user_name'] = $row['name'];
         header('location:user_page.php');
      }
   }else{
      $error[] = 'incorrect email or password!';
   }

};
?>

<!DOCTYPE html>
<html lang="en">
<head>
   <meta charset="UTF-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   
   <!-----------------------Google font----------------------->
   <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
   
   <link rel="preconnect" href="https://fonts.googleapis.com">
   
   <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
   
   <link href="https://fonts.googleapis.com/css2?family=Bitter&display=swap" rel="stylesheet">

   <!--************* fontawesome link------------------- -->
   <script src="https://kit.fontawesome.com/235f3b96aa.js" crossorigin="anonymous"></script>
   <!--************* fontawesome link close------------------- -->


   <title>E-citizenship system-Login </title>
   <!-- custom css file link  -->
   <link rel="stylesheet" href="./css/login.css">

</head>
<body style="background-color: black;">
   
<div class="form-container">
   <form action="" method="post">
       <span id="logo"><img src="./img/logo-2.png" width="95px" height="80px"></span>
         
         <h4 style="
            font-family: 'Bitter', serif;
            text-transform: uppercase;
            letter-spacing: 1px;
            line-height: 1.5;
            font-size: 20px;
            color: blueviolet;
            font-weight: bolder;
         ">
      E-citizenship system</h4>

           <h3 style="
                 font-family: Poppins-Bold;
                 font-weight: bolder;
                 font-size: 30px;
                 color: blueviolet;
                 text-transform: capitalize;
                 text-align: center;
           ">login </h3>

      <?php
      if(isset($error)){
         foreach($error as $error){
            echo '<span class="error-msg">'.$error.'</span>';
         };
      };
      ?>
      <input type="email" name="email" required placeholder="Enter your email">
      <input type="password" name="password" required placeholder="Enter your password">
      <input type="submit" name="submit" value="login now" class="form-btn">
      <p>Don't have an account? <a href="register_form.php">Register now</a></p>
   </form>

</div>

</body>
</html>