<!-- Code for Admin to view Fault Repair Requests done by the User -->
<?php require_once "admin-newcontrollerUserData.php"; ?>	<!-- It is used for unique session for particular admin in all web pages-->
<!DOCTYPE html>
<html>
<head>
	<title> User Fault Repair Requests </title>

<!-- Add company icon image in website-->
<link rel="shortcut icon" href="images/smnew-br.png" type="image/x-icon">


</head>
<body>
	<?php include 'admin-newheader.php'; ?>		<!-- Include header to show header elements like Login/Logout/Signup -->
<div class="container-fluid" style="margin-top: 2%; margin-bottom: 2%;">
<div class="row">

<div class="col-md-12 bg-info" style="box-shadow:0 0 5px grey; color:black; float: inherit; margin-bottom: 25%;">
<h1> Fault Related Record of All Users </h1>

<!-- Show fields of Fault Repair Requests done by the user -->
<table class="table table-stripped">
<thead class="bg-warning">
<tr>
<td> Your ID </td>	
<td> Product Type </td>
<td> Brand of Product </td>
<td> Date of Manufacture </td>
<td> Date of Purchase </td>
<td> Serial Number </td>
<td> Cost of Your Product </td>
<td> Mobile No </td>
<td> Address </td>
<td> Problem with your product </td>
<td> Email </td>
<td> Suggest Engineers's </td>

</tr>

<!-- Retrieve information from "fault_repair" table -->
<?php 
require 'admin-newconnection.php';
$view_users_query="select * from fault_repair";
$run=mysqli_query($con,$view_users_query);

while($row=mysqli_fetch_array($run))
{
		$fault_repair_id = $row[0];
		$product_type = $row[1];
		$brand_name = $row[2];
		$dom = $row[3];
		$dop = $row[4];
		$serial_number = $row[5];
		$product_cost = $row[6];
		$mobile_no = $row[7];
		$address = $row[8];
		$problem = $row[9];
		$email = $row[10];		
		
 ?>


</thead>

<!-- To show table field data of users "Fault Repair" record page -->
<tbody>

<tr>
<td> <?php echo $fault_repair_id; ?> </td>	
<td> <?php echo $product_type; ?> </td>
<td> <?php echo $brand_name; ?> </td>
<td> <?php echo $dom; ?> </td>
<td> <?php echo $dop; ?> </td>
<td> <?php echo $serial_number; ?> </td>
<td> <?php echo $product_cost; ?> </td>
<td> <?php echo $mobile_no; ?> </td>
<td> <?php echo $address; ?> </td>
<td> <?php echo $problem; ?> </td>
<td> <?php echo $email; ?> </td>
<td><a href="admin-newengineer.php?id=<?php echo $fault_repair_id; ?>" class="btn btn-info">Edit</a></td>
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