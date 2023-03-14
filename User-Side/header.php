<?php require_once "controllerUserData.php"; ?> 
<!DOCTYPE html>
<html>

<head>


  <link rel="stylesheet" type="text/css" href="bootstrap/bootstrap.css">

  <script type="text/javascript" src="bootstrap/bootstrap.js"></script>

  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.2/css/all.css" integrity="sha384-fnmOCqbTlWIlj8LyTjo7mOUStjsKC4pOpQbqyi7RrhN7udi9RwhKkMHpvLbHG9Sr" crossorigin="anonymous">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>


  <style type="text/css">
    .dropbtn {
  background-color: darkcyan;
  color: white;
  padding: 10px;
  font-size: 14px;
  border: none;
  cursor: pointer;
}

.dropdown {
  position: relative;
  display: inline-block;
}

.dropdown-content {
  display: none;
  position: absolute;
  background-color: #f9f9f9;
  min-width: 290px;
  box-shadow: 0px 8px 16px 0px rgba(0,0,0,0.2);
  z-index: 1;
}

.dropdown-content a {
  color: black;
  padding: 2px 5px;
  text-decoration: none;
  display: block;
}

.dropdown-content a:hover {background-color: white}

.dropdown:hover .dropdown-content {
  display: block;
}

.dropdown:hover .dropbtn {
  background-color: darkcyan;
}
  </style>

</head>
<body>
  <nav class="navbar navbar-expand-lg navbar-dark" style="background-color: lightseagreen;"> 
    <a class="navbar-brand" href="homepage.php"> <img src="images\smok-br.png" style=" height: 50px ;width: 80px;"> <img src="images\maintenance1-br.png" style=" height: 50px ;width: 420px;"> </a>

    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>


    
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav mr-auto">
        
        <li class="nav-item">
          <a class="nav-link" href="about_us.php" style="font-weight: bold;">About Us</a>
        </li>

        <li class="nav-item">
          <a class="nav-link" href="support.php" style="font-weight: bold;">Support</a>
        </li>

      
        
      
        <?php
        if (!empty($_SESSION['email'])) {
          ?>
        
      <div class="dropdown" style="background-color: lightseagreen;">
      <button class="dropbtn dropdown-toggle"><b>Services</b></button>
      <div class="dropdown-content">
      <a href="preventive_maintenance.php">Preventive Maintenance</a>
      <a href="fault_repair.php">Fault Repair</a>
      

      </div>
      </div>


      <?php } ?>

      </ul>
      

      <ul class="nav navbar-nav navbar-right">
        <?php
        if (!empty($_SESSION['email'])) {
          ?>

        <div class="dropdown" style="background-color: lightseagreen">
      <button class="dropbtn dropdown-toggle"><b>Services History</b></button>
      <div class="dropdown-content">
      <a href="user_fault_repair.php">Fault Repair Details</a>
      <a href="view_replaced_part.php">Replaced Part Details</a>
      <a href="user_support_request.php">Support Requests</a>
      </div>
      </div>

      &nbsp&nbsp&nbsp

      <div class="dropdown" style="background-color: lightseagreen">
      <button class="dropbtn dropdown-toggle"><b>Payments History</b></button>
      <div class="dropdown-content">
      <a href="user_preventive_records.php">Preventive Services-Offline Payments</a>
      <a href="user_payment_record.php">Preventive Services-Online Payments</a>
      </div>
      </div>
 
            &nbsp&nbsp&nbsp

               
            <li class="nav-item">
              <a class="nav-link" href="logout-user.php" style="color: white; font-weight: bold; padding-right: 20px;"> <i class="fas fa-sign-out-alt"></i>
              Logout </a>
            </li>        
            <?php
          }else{
            ?>

                        <li class="nav-item">
            <div class="dropdown" style="background-color: lightseagreen;">
      <button class="dropbtn dropdown-toggle"><b>Services</b></button>
      <div class="dropdown-content">
      <a href="about_preventive.php">Preventive Maintenance</a>
      <a href="about_fault_repair.php">Fault Repair</a>
      </div>
      </li>


            <li class="nav-item">

              <a class="nav-link" href="login-user.php" style="color: white; font-weight: bold;"> <i class="far fa-user-circle"></i>
              User Login </a>
            </li>
            

            <li class="nav-item">
              <a class="nav-link" href="signup-user.php" style="color: white; font-weight: bold;"> <i class="fas fa-user-plus"></i>
              User Sign up </a>
            </li>

            <a class="nav-link" href="admin-newlogin.php" style="color: white; font-weight: bold;"> <i class="far fa-user-circle"></i>
              Admin Section </a>
            </li>

            <?php
          }
          ?>


        </div>
      </nav>

    </body>
    </html>




