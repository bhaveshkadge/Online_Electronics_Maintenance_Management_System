<!-- Code to Add Header in required Web Pages (For Admin Section) -->
<?php require_once "admin-newcontrollerUserData.php"; ?>  <!-- It is used for unique session for particular user in all web pages-->
<!DOCTYPE html>
<html>
<head>
  <title></title>
  
  <!-- Link to use Bootstrap, Javascript, Jquery contents -->
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.2/css/all.css" integrity="sha384-fnmOCqbTlWIlj8LyTjo7mOUStjsKC4pOpQbqyi7RrhN7udi9RwhKkMHpvLbHG9Sr" crossorigin="anonymous">
  <link rel="stylesheet" type="text/css" href="bootstrap/bootstrap.css">
  <script type="text/javascript" src="bootstrap/bootstrap.js"></script>

  <!-- Online Link CDN Content dilevery network --> 
  <link rel="styleshOeet" href="https://use.fontawesome.com/releases/v5.7.2/css/all.css" integrity="sha384-fnmOCqbTlWIlj8LyTjo7mOUStjsKC4pOpQbqyi7RrhN7udi9RwhKkMHpvLbHG9Sr" crossorigin="anonymous">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>

</head>

<!-- Declaring styles properties for Body, button, etc -->
<style type="text/css">
    .dropbtn {
  background-color: steelblue;
  color: white;
  padding: 10px;
  font-size: 15px;
  border: none;
  cursor: pointer;
}

.dropdown {
  position: left;
  display: inline-block;
}

.dropdown-content {
  display: none;
  padding: left;
  position: absolute;
  background-color: #f9f9f9;
  min-width: 290px;
  box-shadow: 0px 8px 16px 0px rgba(0,0,0,0.2);
  z-index: 1;
}

.dropdown-content a {
  color: black;
  padding: 2px 14px;
  text-decoration: none;
  display: block;
}

.dropdown-content a:hover {background-color: white}

.dropdown:hover .dropdown-content {
  display: block;
}

.dropdown:hover .dropbtn {
  background-color: none;
}

  </style>

<body>
  <nav class="navbar navbar-expand-lg navbar-dark" style="background-color: steelblue; height: 65px;">
  <a class="navbar-brand" href="admin-newhome.php"> <img src="images\smok-br.png" style=" height: 50px ;width: 80px;"></a>


  <!-- Check if the requested Email is registered, if registered then the below code run, else show Login/Logout/Signup options -->
        <?php

        if (!empty($_SESSION['email'])) {
          ?>
        
      <div class="dropdown" style="background-color: none">
      <button class="dropbtn dropdown-toggle"><b>View</b></button>
      <div class="dropdown-content">
      <a href="admin-newviewuser.php" style="font-size: 14px;">Registered Users</a>
      <a href="admin-newpreventiverecords.php" style="font-size: 14px;">Preventive Maintenance Records</a>
      <a href="admin-newviewfaultrepair.php" style="font-size: 14px;">Fault Repair Records</a>
      <a href="admin-newviewsupport.php" style="font-size: 14px;">Support Details</a>
      <a href="admin-newviewengineer.php" style="font-size: 14px;">Engineer's Details</a>
      </div>
      </div>


      <div class="dropdown" style="background-color: none">
      <button class="dropbtn dropdown-toggle"><b>Add</b></button>
      <div class="dropdown-content">
      <a href="admin-newinsertengineer.php" style="font-size: 14px;">Engineers</a>
      <a href="admin-newreplacepart.php" style="font-size: 14px;">Replaced Part Details on User's Dashboard</a>
      </div>
      </div>

      <div class="dropdown" style="background-color: none">
      <button class="dropbtn dropdown-toggle"><b>Delete</b></button>
      <div class="dropdown-content">
      <a href="admin-newdeleteuser.php" style="font-size: 14px;">Users</a>
      <a href="admin-newdeletepreventiverecord.php" style="font-size: 14px;">Preventive Maintenance Records</a>
      <a href="admin-newdeletefaultrepairrecord.php" style="font-size: 14px;">Fault Repair Records</a>
      <a href="admin-newdeletesupport.php" style="font-size: 14px;">Support Details</a>
      <a href="admin-newdeleteengineer.php" style="font-size: 14px;">Engineer's Detail</a>
      </div>
      </div>

      &nbsp&nbsp&nbsp
        <li class="nav navbar-nav navbar-right">
              <a class="nav-link" href="admin-newlogout.php" style="color: white; font-weight: bold; font-size: 14px;"> <i class="fas fa-sign-out-alt"></i>
                Logout </a>
            </li> 


      <?php 
      }else{
       ?>

            <?php
          }
          ?>
    
</nav>


</body>
</html>

