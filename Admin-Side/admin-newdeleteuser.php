<!-- Code for Admin to delete Registered User -->
<?php require_once "admin-newcontrollerUserData.php"; ?>	<!-- It is used for unique session for particular admin in all web pages-->
<!DOCTYPE html>
<html>
<head>
	<title>Delete Registered Users</title>

<!-- Add company icon image in website-->
<link rel="shortcut icon" href="images/smnew-br.png" type="image/x-icon">

</head>
<body>

<?php include 'admin-newheader.php'; ?>		<!-- Include header to show header elements like Login/Logout/Signup -->
<div class="container-fluid" style="margin-top: 2%; margin-bottom: 2%;">
<div class="row">

<div class="col-md-12 bg-info" style="box-shadow:0 0 5px grey; color:black; float: inherit; margin-bottom: 25%;">
<h1> Registered User List </h1>

<!-- Show fields of Registered User to delete -->
<table class="table table-stripped">
<thead class="bg-warning">
<tr>
<td> User ID </td>	
<td> Full Name </td>
<td> Date of Birth </td>
<td> Email </td>
<td> Phone Code </td>
<td> Mobile </td>
<td> Address </td>
<td> Password </td>
<td> Delete User </td>
</tr>



<!-- Retrieve information from "usertable" table-->
<?php 
require 'admin-newconnection.php';
$view_users_query="select * from usertable";
$run=mysqli_query($con,$view_users_query);

while($row=mysqli_fetch_array($run))
{
		$c_id = $row[0];
		$fullname = $row[1];
		$dob = $row[2];
		$email = $row[3];
		$phone_code = $row[4];
		$mobile = $row[5];
		$address = $row[6];
		$password = $row[7];
		
 ?>


</thead>

<!-- To show table field data of "Registered Users" record -->
<tbody>

<tr>
<td> <?php echo $c_id; ?> </td>	
<td> <?php echo $fullname; ?> </td>
<td> <?php echo $dob; ?> </td>
<td> <?php echo $email; ?> </td>
<td> <?php echo $phone_code; ?> </td>
<td> <?php echo $mobile; ?> </td>
<td> <?php echo $address; ?> </td>
<td> <?php echo $password; ?> </td>


<td> <a href="admin-newdeletetest.php?del=<?php echo $c_id ?>"><button class="btn btn-danger"> Delete </button> </a></td>



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



