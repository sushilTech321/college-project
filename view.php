<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title></title>

  <link rel="stylesheet" href="./assets/css/styles.min.css" />
  <style type="text/css">
  	
  	body{
  		display: flex;
  		justify-content: center;
  		align-items: center;;
  		flex-wrap: wrap;
  		min-height: 100vh;
  	}
  </style>
</head>
<body>
	<div class="container-fluid">
        <div class="container-fluid">
          <div class="card">
            <div class="card-body">
                  <h5 class="card-title fw-semibold mb-4">Birth certificate </h5>

                  <?php 
                   @include 'config.php';

                              $query = "SELECT * FROM `birth_cert` ";
                              $query_run = mysqli_query($conn,$query);

                              if (mysqli_num_rows($query_run)>0) {
                              	while ($images = mysqli_fetch_assoc($query_run)) { ?>
                              	
                              	<div style="width: 200px;height: 200px;padding: 5px;">			
                              	<img style="width: 100%" src="uploads/<?=$images['birth_certificate'];  ?>">
                              	</div>		
                              	<?php }}?>

          </div>
        </div>
      </div>
    </div>
</body>
</html>