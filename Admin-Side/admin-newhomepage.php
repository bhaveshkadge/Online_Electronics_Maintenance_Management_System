<!-- Code for Admin Homepage-->
<?php require_once "admin-newcontrollerUserData.php"; ?>	<!-- It is used for unique session for particular admin in all web pages-->
<!DOCTYPE html>
<html>
<head>

	<title>
            Admin Homepage
        </title>
          
        <!-- Add company icon image in website-->
        <link rel="shortcut icon" href="images/smnew-br.png" type="image/x-icon">

	<!-- Offline Link to use Bootstrap contents-->
	<link rel="stylesheet" type="text/css" href="bootstrap/bootstrap.css">
	<!-- Offline Link to use Bootstrap contents-->
	<script type="text/javascript" src="bootstrap/bootstrap.js"></script>

	<!-- Online Link CDN Content dilevery network -->
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>

</head>
<body>

	<?php 
	include 'admin-newheader.php';		//including header file on homepage, for providing Login/Signup options
	include 'slider.php';				//including slider file on homepage, for sliding our services images
	include 'admin-newshort_about_us.php';	//including admin-newshort_about_us file on homepage, for providing information about us
	
	include 'admin-newfooter.php';	//including slider file on homepage, for adding footer to all web pages
	?>

</body>
</html>