<!-- Code for Admin to delete Registered Engineer -->
<?php require_once "admin-newcontrollerUserData.php"; ?>	<!-- It is used for unique session for particular admin in all web pages-->
<!DOCTYPE html>
<html>
<head>
	<title>Delete Engineers</title>

<!-- Add company icon image in website-->
<link rel="shortcut icon" href="images/smnew-br.png" type="image/x-icon">

</head>
<body>

<?php include 'admin-newheader.php'; ?>		<!-- Include header to show header elements like Login/Logout/Signup -->
<div class="container-fluid" style="margin-top: 2%; margin-bottom: 2%;">
<div class="row">

<div class="col-md-12 bg-info" style="box-shadow:0 0 5px grey; color:black; float: inherit; margin-bottom: 25%;">
<h1> Engineer's List </h1>

<!-- Show fields of Registered Engineers -->
<table class="table table-stripped">
<thead class="bg-warning">
<tr>
<td> Engineer's ID </td>
<td> Engineer's Name </td>
<td> Email ID </td>
<td> Mobile No </td>
<td> Date of Joining </td>
<td> Engineer's Specialities </td>
<td> Delete Details </td>
</tr>



<!-- Retrieve information from "engineers" table for Registered Engineers information-->
<?php 
require 'admin-newconnection.php';
$view_users_query="select * from engineers";
$run=mysqli_query($con,$view_users_query);

while($row=mysqli_fetch_array($run))
{
		$engineer_id = $row[0];
		$engineer_name = $row[1];
		$email = $row[2];
		$mobile = $row[3];
		$doj = $row[4];
		$engineer_specialities = $row[5];
		
 ?>


</thead>

<!-- To show table field data of users "Registerd Engineers" record -->
<tbody>

<tr>
<td> <?php echo $engineer_id; ?> </td>	
<td> <?php echo $engineer_name; ?> </td>
<td> <?php echo $email; ?> </td>
<td> <?php echo $mobile; ?> </td>
<td> <?php echo $doj; ?> </td>
<td> <?php echo $engineer_specialities; ?> </td>

<td> <a href="admin-newdeleteengineerdatabase.php?del=<?php echo $engineer_id ?>"><button class="btn btn-danger"> Delete </button> </a></td>



</tr>

</tbody>
<?php } ?>
</table>

</div>
</div>
</div>

<?php include 'admin-newfooter.php'; ?>		<!-- To include footer -->

</body>
</html>