<?php

@include 'config.php';

session_start();

if(!isset($_SESSION['admin_name'])){
   header('location:login_form.php');
}

?>

<!doctype html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>E-citizenship system</title>
  <link rel="shortcut icon" type="image/png" href="./assets/images/logos/favicon.png" />
  <link rel="stylesheet" href="./assets/css/styles.min.css" />

  <script src="https://kit.fontawesome.com/ee90f4096b.js" crossorigin="anonymous"></script>
</head>

<body>
  <!--  Body Wrapper -->
  <div class="page-wrapper" id="main-wrapper" data-layout="vertical" data-navbarbg="skin6" data-sidebartype="full"
    data-sidebar-position="fixed" data-header-position="fixed">
    <!-- Sidebar Start -->
    <aside class="left-sidebar">
      <!-- Sidebar scroll-->
      <div>
        <div class="brand-logo d-flex align-items-center justify-content-between">
          <li class="sidebar-item">
              <span class="hide-menu">E-citizenship</span>
            </li>
          <div class="close-btn d-xl-none d-block sidebartoggler cursor-pointer" id="sidebarCollapse">
            <i class="ti ti-x fs-8"></i>
          </div>
        </div>
        <!-- Sidebar navigation-->
        <nav class="sidebar-nav scroll-sidebar" data-simplebar="">
          <ul id="sidebarnav">
            <li class="nav-small-cap">
              <i class="ti ti-dots nav-small-cap-icon fs-4"></i>
              <span class="hide-menu">Home</span>
            </li>
            <li class="sidebar-item">
              <a class="sidebar-link" href="index.php" aria-expanded="false">
                <span>
                  <i class="ti ti-layout-dashboard"></i>
                </span>
                <span class="hide-menu">Dashboard</span>
              </a>
            </li>
            <li class="nav-small-cap">
              <i class="ti ti-dots nav-small-cap-icon fs-4"></i>
              <span class="hide-menu">UI COMPONENTS</span>
            </li>
            <li class="sidebar-item">
              <a class="sidebar-link" href="users.php" aria-expanded="false">
                <span>
                  <i class="fa fa-user-o" aria-hidden="true"></i>
                </span>
                <span class="hide-menu">Users</span>
              </a>
            </li>
            <li class="sidebar-item">
              <a class="sidebar-link" href="userdetails.php" aria-expanded="false">
                <span>
                  <i class="fa-solid fa-info"></i>
                </span>
                <span class="hide-menu">User details</span>
              </a>
            </li>
            <li class="sidebar-item">
              <a class="sidebar-link" href="./addresss.php" aria-expanded="false">
                <span>
                  <i class="fa-solid fa-map-location-dot"></i>
                </span>
                <span class="hide-menu">Address</span>
              </a>
            </li>
            <li class="sidebar-item">
              <a class="sidebar-link" href="./bcertificate.php" aria-expanded="false">
                <span>
                 <i class="fa-solid fa-certificate"></i>
                </span>
                <span class="hide-menu">Birth certicate</span>
              </a>
            </li>
            <li class="sidebar-item">
              <a class="sidebar-link" href="./wardsiphariss.php" aria-expanded="false">
                <span>
                  <i class="fa-solid fa-check"></i>
                </span>
                <span class="hide-menu">Ward sipharis</span>
              </a>
            </li>
              <li class="sidebar-item">
              <a class="sidebar-link" href="user_doc.php" aria-expanded="false">
                <span>
                  <i class="fa-solid fa-check"></i>
                </span>
                <span class="hide-menu">User document</span>
              </a>
            </li>
            <li class="nav-small-cap">
              <i class="ti ti-dots nav-small-cap-icon fs-4"></i>
              <span class="hide-menu">AUTH</span>
            </li>
            <li class="sidebar-item">
             <a class="sidebar-link" href="logout.php" aria-expanded="false">
                <span>
                  <i class="ti ti-login"></i>
                </span>
                <span class="hide-menu">Logout</span>
              </a>
            </li>
          </ul>
        </nav>
        <!-- End Sidebar navigation -->
      </div>
      <!-- End Sidebar scroll-->
    </aside>
    <!--  Sidebar End -->
    <!--  Main wrapper -->
    <div class="body-wrapper">
      <!--  Header Start -->
      <header class="app-header">
        <nav class="navbar navbar-expand-lg navbar-light">
          <ul class="navbar-nav">
            <li class="nav-item d-block d-xl-none">
              <a class="nav-link sidebartoggler nav-icon-hover" id="headerCollapse" href="javascript:void(0)">
                <i class="ti ti-menu-2"></i>
              </a>
            </li>
            <li class="nav-item">
              
            </li>
          </ul>
          <div class="navbar-collapse justify-content-end px-0" id="navbarNav">
             
            </ul>
          </div>
        </nav>
      </header>
      <!--  Header End -->
      <div class="container-fluid">
        <div class="container-fluid">
          <div class="card">
            <div class="card-body">
              <h5 class="card-title fw-semibold mb-4">Birth certificates</h5>
               <table class="table table-bordered table-hover">
                      <thead>
                        <tr>
                          <th scope="col">id</th>
                          <th scope="col">Document</th>
                          <th scope="col">View</th>
                          <th scope="col">Action</th>
                        </tr>
                      </thead>
                      <tbody>
                         <?php 
                              @include 'config.php';

                              $query = "SELECT * FROM `birth_cert` ";
                              $query_run = mysqli_query($conn,$query);

                                if (mysqli_num_rows($query_run)>0) {
                                  foreach($query_run as $row){
                                    ?>
                                      <tr>
                                        <td><?=  $row['id']; ?></td>
                                        <td><?=  $row['birth_certificate']; ?></td>

                                        <td colspan="1"><button class="btn  btn-danger text-white"><a class="text-white" href="view.php">Show</a> </button></td>

                                        <td>
                                          <form method="POST" action="bcertificate_del.php">
                                            <input type="hidden" name="delete_id" value="<?php echo $row['id'];  ?>">
                                            <button type="submit" class="btn  btn-danger text-white" name="delete_btn"> Delete</button>
                                          </form>
                                        </td>
                                      </tr>
                                    <?php
                                  }
                                }else{
                                  // echo "No records found";
                                  ?>
                                    <tr>
                                      <td colspan="5">No record found</td>
                                    </tr>
                                  <?php
                                }
                             ?>
                      </tbody>
              </table>
             
            </div>
          </div>
        </div>
      </div>
    </div>
    <p style="text-align: center; font-family: 'Dancing Script', cursive; margin-left: 250px;">@2023 All right reserved</p>
  </div>
  <script src="../assets/libs/jquery/dist/jquery.min.js"></script>
  <script src="../assets/libs/bootstrap/dist/js/bootstrap.bundle.min.js"></script>
  <script src="../assets/js/sidebarmenu.js"></script>
  <script src="../assets/js/app.min.js"></script>
  <script src="../assets/libs/simplebar/dist/simplebar.js"></script>
</body>

</html>