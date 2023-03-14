<!-- Code for Admin to delete Support requested done by the User -->
<?php require_once "admin-newcontrollerUserData.php"; ?>	<!-- It is used for unique session for particular admin in all web pages-->
<!DOCTYPE html>
<html>
<head>
	<title>Delete Users Support Requests</title>

<!-- Add company icon image in website-->
<link rel="shortcut icon" href="images/smnew-br.png" type="image/x-icon">

</head>
<body>

<?php include 'admin-newheader.php'; ?>		<!-- Include header to show header elements like Login/Logout/Signup -->
<div class="container-fluid" style="margin-top: 2%; margin-bottom: 2%;">
<div class="row">

<div class="col-md-12 bg-info" style="box-shadow:0 0 5px grey; color:black; float: inherit; margin-bottom: 25%;">
<h1> Support Records </h1>

<!-- Show fields of Support Requests done by the user -->
<table class="table table-stripped">
<thead class="bg-warning">
<tr>
<td> Support ID </td>	
<td> Name </td>
<td> Email </td>

<td> Registered Mobile No </td>
<td> Product </td>
<td> Problem Facing </td>
<td> Query Request </td>
<td> Delete Details </td>
</tr>



<!-- Retrieve information from "support" table -->
<?php 
require 'admin-newconnection.php';
$view_users_query="select * from support";
$run=mysqli_query($con,$view_users_query);

while($row=mysqli_fetch_array($run))
{
		$support_id = $row[0];
		$name = $row[1];
		$email = $row[2];
		$mobile = $row[3];
		$product_name = $row[4];
		$query = $row[5];
		$support_req_date = $row[6];
 ?>


</thead>

<!-- To show table field data of users "Support" record page -->
<tbody>

<tr>
<td> <?php echo $support_id; ?> </td>	
<td> <?php echo $name; ?> </td>
<td> <?php echo $email; ?> </td>
<td> <?php echo $mobile; ?> </td>
<td> <?php echo $product_name; ?> </td>
<td> <?php echo $query; ?> </td>
<td> <?php echo $support_req_date; ?> </td>

<td> <a href="admin-newdeletesupportconnection.php?del=<?php echo $support_id ?>"><button class="btn btn-danger"> Delete </button> </a></td>



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