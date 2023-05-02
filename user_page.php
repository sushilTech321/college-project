<?php

@include 'config.php';

session_start();

if(!isset($_SESSION['user_name'])){
   header('location:login_form.php');
}

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
   <!-----------------------Google font----------------------->


   <!--************* fontawesome link------------------- -->
      <script src="https://kit.fontawesome.com/235f3b96aa.js" crossorigin="anonymous"></script>

        <link rel="stylesheet" href="../../maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
        <script src="../../ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
        <script src="../../maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
     <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet">
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"></script>
         <title>user page</title>

   <!-- custom css file link  -->
   <link rel="stylesheet" type="text/css" href="./css/user_page.css">
   <link rel="stylesheet" type="text/css" href="footer.css">



</head>
<body>
<div>
   <div style="background-color: black;
      height: 170px;
      background: url(./img/pt.jpg) center; 
      background-size: cover;
      background-repeat: no-repeat;
      bottom: 20%;
      filter: blur(5px);
  -webkit-filter: blur(3px);

   ">
   </div>
  
   <img style="transform:translate(590px); margin-top: -250px;  "  src="logo-2.png" width="80px">
    <h5  style="transform:translate(520px,-40px);
            font-family: 'Bitter', serif;
            text-transform: uppercase;
            color: darkblue;
            margin-top: -50px;
            font-weight: bolder;


      ">E-citizenship System</h5>

      
   </div>

   
   <!-- user greeting section  -->
   <div class="container2" style="transform: translate(0px,-155px);">
      <div class="content">
         <h3 style="transform:translate(0px,160px);">Welcome <span>user</span></h3>&nbsp;
         <h1><span><?php echo $_SESSION['user_name'] ?></span></h1>
      </div>
   </div>

<!-- notice sec -->
<div style="transform: translate(0px,1px);">

         <div class="bg-danger text-white" style="height:31px;transform: translate(0px,-10px); position: absolute; margin-top:-25px; z-index: ;">
            <p style="transform: translate(0px,2px);">Notice</p>
         </div>

         <div style="margin-top: -35px; margin-left:50px; position: absolute; width: 1200px; z-index: ; background-color:#1c5cb0;">
           <div style="color: white;">
            <marquee scrolldelay="10">
               If your document found fake and wrong then your registration automatic rejected.
            </marquee>
           </div>
         </div>
</div>


   <!-- Navbar section start -->
   

   <div class="navbar-sec">
      <nav class="bg-dark"   style="transform: translate(0px,2px);">
         <div class="navbar-content-2">
            <ul style="transform: translate(-40px);

            ">
               <li>
                  <div class="dropdown">
                  <button class="dropbtn bg-dark">Administration Section</button>
                  <div class="dropdown-content">
                     <a href="citizenship.php" class="drpb1">Apply for online citizenship</a>
                     <a href="./htmlfile/birthcertificate.html" class="drpb1">Apply for online birth certificate</a>
                     <a href="./htmlfile/marriage.html" class="drpb1">Apply for online marriage certificate</a>
                     <a href="./htmlfile/immigration.html" class="drpb1">Apply for online local immigration</a>
                  </div>
                  </div>
               </li>    

               <li style="transform: translate(-10px);">
                  <div class="dropdown">
                  <button class="dropbtn bg-dark">Health section</button>
                  <div class="dropdown-content">

<!--                      <a href="#" class="drpb1">Apply for online citizenship</a>
                     <a href="#" class="drpb1">Apply for online citizenship</a>
                     <a href="#" class="drpb1">Apply for online citizenship</a>
                     <a href="#" class="drpb1">Apply for online citizenship</a> -->
                     
                  </div>
                  </div>
               </li>

               <li style="transform: translate(-20px);">
                  <div class="dropdown">
                  <button class="dropbtn bg-dark">Legal Section</button>
                  <div class="dropdown-content">
<!-- 
                     <a href="#" class="drpb1">Apply for online citizenship</a>
                     <a href="#" class="drpb1">Apply for online citizenship</a>
                     <a href="#" class="drpb1">Apply for online citizenship</a>
                     <a href="#" class="drpb1">Apply for online citizenship</a> -->
                     
                  </div>
                  </div>
               </li>

               <li style="transform: translate(-20px);">
                  <div class="dropdown">
                  <button class="dropbtn bg-dark">Education section</button>
                  <div class="dropdown-content">

                     <!-- <a href="#" class="drpb1">Apply for online citizenship</a>
                     <a href="#" class="drpb1">Apply for online citizenship</a>
                     <a href="#" class="drpb1">Apply for online citizenship</a>
                     <a href="#" class="drpb1">Apply for online citizenship</a>
                      -->
                  </div>
                  </div>
               </li>

               <li style="
                  transform: translate(-35px);
               ">
                  <div class="dropdown">
                  <button class="dropbtn bg-dark">Infrastrucuture section</button>
                  
                  <div class="dropdown-content">
                        <!-- 
                     <a href="#" class="drpb1">Apply for online citizenship</a>
                     <a href="#" class="drpb1">Apply for online citizenship</a>
                     <a href="#" class="drpb1">Apply for online citizenship</a>
                     <a href="#" class="drpb1">Apply for online citizenship</a> -->
                     
                  </div>
                  </div>
               </li>

              <!--  <li>
                 <a class="bg-dark" style="
                 text-decoration: none;
                 font-weight: bolder;
                 font-family: 'Bitter', serif;
                 margin: 100px;
                 margin-left: 1100px;

                 " href="logout.php" class="btn">Logout</a>
                 
               </li> -->


               <li style="transform: translate(-45px);">
                 <a class="bg-dark" style="
                 text-decoration: none;
                 font-weight: bolder;
                 font-family: 'Bitter', serif;
                 

                 " href="logout.php" class="btn">Logout</a>
                 
               </li>

               
            </ul>
         </div>
      </nav>

   </div>
   <!-- Navbar section end -->


   <!-- time -->
   <script type="text/javascript">
      function displayTime(){
         var dateTime = new Date();
         var hrs = dateTime.getHours();
         var min = dateTime.getMinutes();
         var sec = dateTime.getSeconds();
         var session = document.getElementById('session');

         if (hrs>=12) {
            session.innerHTML='PM';
         }else{
            session.innerHTML='AM';
         }

         if (hrs>12) {
            hrs = hrs - 12;
         }        

         document.getElementById('hours').innerHTML=  hrs;
         document.getElementById('minutes').innerHTML=  min;
         document.getElementById('seconds').innerHTML=  sec;
         

      }
      setInterval(displayTime,10);
   </script>
     <div class="container" style="transform: translate(520px,70px);
      font-family: sans-serif;
       text-shadow: 2px 2px 3px #000000;
       


     ">
      <span style="font-size: 30px;" id="hours">00</span>
      <span style="font-size: 30px;">:</span>
      <span style="font-size: 30px;" id="minutes">00</span>
      <span style="font-size: 30px;">:</span>
      <span style="font-size: 30px;" id="seconds">00</span>
      <span style="font-size: 30px;" id="session">AM</span>
   </div>

<br><br><br><br><br><br>
   
 

<!-- main content -->
<div style="
   float: left;
   background-color: yellow;
   width: 700px;
   height: auto;
   box-sizing: border-box;
   border: 1px solid red;
   box-sizing: border-box;
">
    <!-- Carousel -->
<div id="demo" class="carousel slide" data-bs-ride="carousel">

  <!-- Indicators/dots -->

  <div class="carousel-indicators">
    <button type="button" data-bs-target="#demo" data-bs-slide-to="0" class="active"></button>
    <button type="button" data-bs-target="#demo" data-bs-slide-to="1"></button>
    <button type="button" data-bs-target="#demo" data-bs-slide-to="2"></button>
  </div>
  
  <!-- The slideshow/carousel -->
  <div class="carousel-inner">
    <div class="carousel-item active">
      <img src="./img/pt.jpg" alt="Los Angeles" style="width:720px;height: 400px;">
    </div>
    <div class="carousel-item">
      <img src="./img/pt.jpg" alt="Chicago" style="width:720px;height: 400px;">
    </div>
    <div class="carousel-item">
      <img src="./img/pt.jpg" alt="New York" style="width:720px; height: 400px;">
    </div>
  </div>
  
  
</div>
</div>
     


<div style="
   float: right;
   width: 500px;
   height: auto;
   box-sizing: border-box;
   border: 1px solid red;
   box-sizing: border-box;
">
   <h4 style="font-family: 'Nunito Sans', sans-serif; text-align: center; color: blueviolet;">Important links</h4>

   <div style="transform: translate(110px);" ><span><a style="color: blueviolet;" href="faq.html">Frequently asked question (FQA)</a></span></div> <br>
   <div style="transform: translate(110px);" ><span><a style="color: blueviolet;" href="#">Frequently asked question (FQA)</a></span></div> <br>
   <div style="transform: translate(110px);" ><span><a style="color: blueviolet;" href="#">Frequently asked question (FQA)</a></span></div><br>
   <div style="transform: translate(110px);" ><span><a style="color: blueviolet;" href="#">Frequently asked question (FQA)</a></span></div><br>
   <div style="transform: translate(110px);" ><span><a style="color: blueviolet;" href="#">Frequently asked question (FQA)</a></span></div><br>
   <div style="transform: translate(110px);" ><span><a style="color: blueviolet;" href="#">Frequently asked question (FQA)</a></span></div><br>
   <div style="transform: translate(110px);" ><span><a style="color: blueviolet;" href="#">Frequently asked question (FQA)</a></span></div><br>
   <div style="transform: translate(110px);" ><span><a style="color: blueviolet;" href="#">Frequently asked question (FQA)</a></span></div>
 </div>



 <!-- about us -->
 <div 
      style="transform:translate(0px,80px);
      width:550px;
      margin-left:15px;
      float: left;
      border: 1px solid blueviolet;
      padding: 10px;


      " 
   >
   <h5 style="text-align: center;">About us</h5>
   <p style="color:blueviolet;">E-citizenship, also known as digital citizenship, refers to a system that allows individuals to obtain citizenship in a country without physically residing there. The concept is based on the idea that citizenship should not be tied to geography and that people should be able to access the benefits and rights of citizenship from anywhere in the world.

   The e-citizenship system typically operates online and allows individuals to apply for citizenship by filling out an application form, submitting identification documents, and paying a fee. Once approved, e-citizens are issued a digital certificate that confirms their citizenship status and provides them with access to various services and benefits, such as the ability to open bank accounts, establish a business, and access government services.
   </p>  
 </div>

 <div 
      style="transform:translate(0px,80px);
      width:550px;
      margin-left:15px;
      float: right;
      border: 1px solid blueviolet;
      padding: 10px;


      " 
   >
   <h5 style="text-align: center;">Information and Activities</h5>
      <ul>
         <li style="color:blueviolet;">1.Online voting: E-citizenship systems may enable citizens to vote in elections using the internet or other digital technologies.</li>

         <li style="color:blueviolet;">2.Access to government services: E-citizenship systems can provide citizens with online access to government services such as passport applications, tax filings, and business registrations.</li>

         <li style="color:blueviolet;">3. Digital petitions: E-citizenship systems can enable citizens to create and sign petitions online, making it easier to bring issues to the attention of elected officials.</li>
         <li style="color:blueviolet;">4.Online forums: E-citizenship systems can provide citizens with online forums to discuss policy issues, share ideas, and engage in public debates.</li>

      </ul>
 </div>
  


     <br><br><br>

<!-- footer -->
 <footer class="footer" style="height:350px; margin-top: 800px;">
    <div class="container">
      <div class="row">


         <div class="footer-col">
            <h4>Contact</h4>
            <ul style="margin-left: -30px;">
               <li>
                  <span style="color: #ffffff; font-family: 'Poppins', sans-serif;">
                     081-45457
                  </span>
               </li>
               
               <li>
                  <span style="color: #ffffff; font-family: 'Poppins', sans-serif;">
                     Email : ecitizenship@gmail.com
                  </span>
               </li>

               <li><a href="#" style="text-transform: none; color: white;"></a></li>
               <li><p style="text-transform: none; color: white;">Fax number: 0124542</p></li>
               <li><p style="text-transform: none; color: white;">Help room : 014124542</p></li>
            </ul>
         </div>  

         <div class="footer-col">
            <h4>Location</h4>
            <ul>
                  <li>
                     <span><iframe style="height: 200px; width:250px; margin-left: -50px;" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d112658.44112221475!2d81.54704558153087!3d28.067959379674466!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3998675a30f8e175%3A0x93c04013828c9891!2sNepalgunj!5e0!3m2!1sen!2snp!4v1682734962082!5m2!1sen!2snp" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe></span>
                  </li>
            </ul>
         </div>


         <div class="footer-col">
            <h4>office time</h4>
            <ul style="margin-left: -30px; color: white; font-size: 15px;">
               <li><label>summer</label>
                  <br>
                  <span>Sunday-Thursday 10:00 am - 5:00pm </span>
                  <span>Friday 10:00 am - 3:00pm </span>
               </li>

                <li><label>winter</label>
                  <br>
                  <span>Sunday-Thursday 10:00 am - 4:00pm </span>
                   <span>Friday 10:00 am - 3:00pm </span>
               </li>

               <li> <span>Closed on holidays</span></li>
            </ul>
         </div>   


         <div class="footer-col">
            <h4>follow us</h4>
            <div class="social-links">
               <a href="#"><i class="fab fa-facebook-f"></i></a>
               <a href="#"><i class="fab fa-twitter"></i></a>
            </div>
         </div>
         </div>
      </div>
  </footer>

</body>
</html>