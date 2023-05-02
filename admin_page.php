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
          <!-- <a href="./index.html" class="text-nowrap logo-img">
            <img src="../assets/images/logos/dark-logo.svg" width="180" alt="" />
          </a> -->
          <li class="sidebar-item">
                
                <span class="hide-menu">E-citizenship</span>
              </a>
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
    
  </div>
  <div>
   <h1 style="text-align: center;
     font-size: 20px;
     color:crimson;
     transform: translate(0px,10px);
     font-family: 'Dancing Script', cursive;

   "> <span> <span style="color:#333;">Welcome</span> <span style="color:#9bd927;">admin</span> <?php echo $_SESSION['admin_name']  ?></span></h1>
  </div>

  <script src="./assets/libs/jquery/dist/jquery.min.js"></script>
  <script src="./assets/libs/bootstrap/dist/js/bootstrap.bundle.min.js"></script>
  <script src="./assets/js/sidebarmenu.js"></script>
  <script src="./assets/js/app.min.js"></script>
  <script src="./assets/libs/apexcharts/dist/apexcharts.min.js"></script>
  <script src="./assets/libs/simplebar/dist/simplebar.js"></script>
  <script src="./assets/js/dashboard.js"></script>

</body>

</html>