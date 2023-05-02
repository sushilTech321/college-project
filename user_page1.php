


<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">

	<!-----------------------Google font----------------------->
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
	
	<link rel="preconnect" href="https://fonts.googleapis.com">
	
	<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
	
	<link href="https://fonts.googleapis.com/css2?family=Bitter&display=swap" rel="stylesheet">
	<!-----------------------Google font----------------------->


	<!--************* fontawesome link------------------- -->

	<script src="https://kit.fontawesome.com/235f3b96aa.js" crossorigin="anonymous"></script>

	<!--************* fontawesome link------------------- -->

	<link rel="stylesheet" href="css/style.css">
	<link rel="stylesheet" type="text/css" href="./css/user_page.css">

	<title>E-citizenship system-Home</title>
	<script type="text/javascript"></script>

</head>
<body>

	<div class="container">

   <div class="content">
      <h3>Hi, <span>user</span></h3>
      <h1>welcome <span><?php echo $_SESSION['user_name'] ?></span></h1>
      <p>this is an user page</p>
      <a href="login_form.php" class="btn">login</a>
      <a href="register_form.php" class="btn">register</a>
      <a href="logout.php" class="btn">logout</a>
   </div>
   
</div>

	<!-- Logo and title -->
	<div class="container">
		<div  class="sContent">
		<span id="logo">
			<img src="./img/logo-2.png" width="130px" height="100px" alt="image couldn't load">
			<div class="vl"></div>
		</span>
		</div>
	</div>

	<div class="container-title-50">
			<span>	
				<h4>E-citizenship system</h4> 
			</span>
	</div>
	<!-- Logo and title end -->

	<div class="logout">
		<h3 style="font-size: 20px; text-transform: capitalize;">Hi, <span>user &nbsp;<a href="logout.php">Logout</a></span></h3>
	</div>

	<hr>
	<!-- Navbar section start -->
	
	<div class="navbar-sec">
		<nav class="bg-dark">
			<div class="navbar-content-2">
				
				<ul>
					<li>
						
						<div class="dropdown">
						<button class="dropbtn bg-dark">Administration Section</button>
						<div class="dropdown-content">

							<a href="citizenship.html" class="drpb1">Apply for online citizenship</a>
							<a href="birthcertificate.html" class="drpb1">Apply for online birth certificate</a>
							<a href="marriage.html" class="drpb1">Apply for online marriage certificate</a>
							<a href="immigration.html" class="drpb1">Apply for online local immigration</a>
							
						</div>
						</div>
					</li> 	

					<li>
						<div class="dropdown">
						<button class="dropbtn bg-dark">Health section</button>
						<div class="dropdown-content">

							<a href="#" class="drpb1">Apply for online citizenship</a>
							<a href="#" class="drpb1">Apply for online citizenship</a>
							<a href="#" class="drpb1">Apply for online citizenship</a>
							<a href="#" class="drpb1">Apply for online citizenship</a>
							
						</div>
						</div>
					</li>

					<li>
						<div class="dropdown">
						<button class="dropbtn bg-dark">Legal Section</button>
						<div class="dropdown-content">

							<a href="#" class="drpb1">Apply for online citizenship</a>
							<a href="#" class="drpb1">Apply for online citizenship</a>
							<a href="#" class="drpb1">Apply for online citizenship</a>
							<a href="#" class="drpb1">Apply for online citizenship</a>
							
						</div>
						</div>
					</li>

					<li>
						<div class="dropdown">
						<button class="dropbtn bg-dark">Education section</button>
						<div class="dropdown-content">

							<a href="#" class="drpb1">Apply for online citizenship</a>
							<a href="#" class="drpb1">Apply for online citizenship</a>
							<a href="#" class="drpb1">Apply for online citizenship</a>
							<a href="#" class="drpb1">Apply for online citizenship</a>
							
						</div>
						</div>
					</li>

					<li>
						<div class="dropdown">
						<button class="dropbtn bg-dark">Infrastrucuture section</button>
						<div class="dropdown-content">

							<a href="#" class="drpb1">Apply for online citizenship</a>
							<a href="#" class="drpb1">Apply for online citizenship</a>
							<a href="#" class="drpb1">Apply for online citizenship</a>
							<a href="#" class="drpb1">Apply for online citizenship</a>
							
						</div>
						</div>
					</li>
				</ul>
			</div>
		</nav>

	</div>
	<!-- Navbar section end -->


</body>
</html>