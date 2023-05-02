

<script type="text/javascript">
		
	alert("Your registration form has been submitted and please visit your nearest D.A.O")


</script>


<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>E-Citizeship system</title>

  <link rel="stylesheet" href="./assets/css/styles.min.css" />
</head>
<body>
	<div style="

		margin: 0px;
		margin-left: 10px;

	">
 <table class="table table-bordered table-hover">
                      <thead>
                        <tr>
                          <th scope="col">id</th>
                          <th scope="col">First name</th>
                          <th scope="col">Middle name</th>
                          <th scope="col">Last name</th>
                          <th scope="col">Father first name</th>
                          <th scope="col">Father middle name</th>
                          <th scope="col">Father last name</th>
                          <th scope="col">Mother name</th>
                          <th scope="col">Grand father name</th>
                          <th scope="col">Gender</th>
                          <th scope="col">Mobile no</th>
                          <th scope="col">DOB</th>
                          <th scope="col">Age</th>
                          <th scope="col">Citizenship type</th>
  
                        </tr>
                      </thead>
                      <tbody>
                         <?php 
                              @include 'config.php';

                              $query = "SELECT * FROM `general_details` ";
                              $query_run = mysqli_query($conn,$query);

                                if (mysqli_num_rows($query_run)>0) {
                                  foreach($query_run as $row){
                                    ?>
                                      <tr>
                                        <td><?=  $row['id']; ?></td>
                                        <td><?=  $row['firstname']; ?></td>
                                        <td><?=  $row['middlename']; ?></td>
                                        <td><?=  $row['lastname']; ?></td>
                                        <td><?=  $row['ff_name']; ?></td>
                                        <td><?=  $row['fm_name']; ?></td>
                                        <td><?=  $row['fl_name']; ?></td>
                                        <td><?=  $row['mother_name']; ?></td>
                                        <td><?=  $row['grandfather_name']; ?></td>
                                        <td><?=  $row['gender']; ?></td>
                                        <td><?=  $row['mobile_no']; ?></td>
                                        <td><?=  $row['DOB']; ?></td>
                                        <td><?=  $row['age']; ?></td>
                                        <td><?=  $row['citizenship_type']; ?></td>
                                        
                                      </tr>
                                    <?php
                                  }
                                }else{
                                  // echo "No records found";
                                  ?>
                                    <tr>
                                      <td colspan="4">No record found</td>
                                    </tr>
                                  <?php
                                }
                             ?>
                      </tbody>
              </table>

		<button onclick="window.print()" name="print">Print Details</button>
		
	</div>
</body>
</html>