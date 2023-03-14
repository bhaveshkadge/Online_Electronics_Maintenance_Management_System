<!-- Code for Admin Homepage -->
<?php require_once "admin-newcontrollerUserData.php"; ?>	<!-- It is used for unique session for particular admin in all web pages-->
<!DOCTYPE html>
<html>
<head>
	<title> Admin Home </title>

	<!-- Add company icon image in website-->
	<link rel="shortcut icon" href="images/smnew-br.png" type="image/x-icon">
</head>
<body>
	<div class="container-fluid" style="border: 0px solid grey; padding: 0px; padding-top: 0px; text-align: left;">
	

	<?php include 'admin-newheader.php'; ?>		<!-- Include header to show header elements like Login/Logout/Signup -->
</div>
<center>
		<br>
		<img src="admin-images/logo-br.png" height="13%" width="31%">		<!-- Add image -->
		<h1 style='font-size:40px; margin-bottom: 5px; color: darkorange;' > Welcome Admin!</h1>
		
		<br>
</center>
<?php include 'admin-newfooter.php'; ?>		<!-- To include footer -->

</body>
</html>