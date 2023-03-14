<!-- Code for Admin add New Engineer -->
<?php require_once "admin-newcontrollerUserData.php"; ?>	<!-- It is used for unique session for particular admin in all web pages-->
<!DOCTYPE html>
<html>
<head>
	<title>
		Add Engineer's Section
	</title>

<!-- Add company icon image in website-->
<link rel="shortcut icon" href="images/smnew-br.png" type="image/x-icon">

</head>
<body>
<?php include 'admin-newheader.php'; ?>		<!-- Include header to show header elements like Login/Logout/Signup -->

<div class="container-fluid" style="margin-top: 2%; margin-bottom: 2%;">
<div class="row" style="margin-top: 5%;margin-bottom: 3%;">
<div class="col-md-3"></div>
<div class="col-md-6" style="border: 2px solid;">

<center> <h1 class="text-info text-center" style="padding-left: 20px;"> Add Engineer </h1> </center>

<form action="" method="post" enctype="multipart/form-data">	<!-- Form Starts for inserting new Engineer -->
<table class="table table-stripped">

</table>
</form>


<form action="" method="post">
	<b>
<table style="align-items: center;" border="" class="table table-stripped">

<tr>
<td> Engineer's Name: 
<td><input type="text" name="engineer_name" class="form-control" onkeypress='return ((event.charCode >= 65 && event.charCode <= 90) || (event.charCode >= 97 && event.charCode <= 122) || (event.charCode == 32))' required>
</tr>

<tr>
<td> Email ID :
<td><input type="email" name="email" class="form-control" required>
</tr>

<tr>
<td> Contact Number :
<td><input type="text" name="mobile" class="form-control" oninput="this.value = this.value.replace(/[^0-9.]/g, '').replace(/(\..*?)\..*/g, '$1').replace(/^0[^.]/, '0');" maxlength="10" style="width: 15em; height: 27px;" required>
</tr>

<tr>
<td> Date of Joining :</td>
<td><input type="date" name="doj" class="form-control" min="2022-11-01" max="2050-12-31"></td>
</tr>

<tr>
<td> Engineer Specialities:</td>
<td><input type="text" name="engineer_specialities" class="form-control"></td>
</tr>
</b>
<tr>
<td></td>
<td><input type="submit" value="Add Engineer" class="btn btn-danger" name="submit_btn">
<input type="reset" value="Reset" class="btn btn-danger">
</td>

</tr>
</table>
</form>


</div>
<div class="col-md-3"></div>
</div>
</div>
<?php include 'admin-newfooter.php'; ?>		<!-- To include footer -->
</body>
</html>


	<!-- Database Codings --> 
	<!-- When Admin click on "submit_btn" in the form--> 
	<?php

	if (isset($_POST['submit_btn'])) {
		
		require "admin-newconnection.php";

		// To store form field elements in the table
		$engineer_name = $_POST['engineer_name'];
		$email = $_POST['email'];
		$mobile = $_POST['mobile'];
		$doj = $_POST['doj'];
		$engineer_specialities = $_POST['engineer_specialities'];
		
		//SQL query to store the data in "engineers" Table
		$sql ="INSERT Into engineers (engineer_name, email, mobile, doj, engineer_specialities) values ('$engineer_name','$email','$mobile','$doj','$engineer_specialities')";
		$us = mysqli_query($con,$sql);

		//Alert popup after click on "submit_btn"
		if($us){
			echo"<script>alert('Engineer Added Sucessfully')</script>";
			echo"<script>window.open('admin-newviewengineer.php','_self')</script>";
		}
	}


	?>