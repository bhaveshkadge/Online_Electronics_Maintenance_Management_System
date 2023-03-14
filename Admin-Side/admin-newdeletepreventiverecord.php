<!-- Code for Admin to delete Preventive Maintenance records -->
<?php require_once "admin-newcontrollerUserData.php"; ?>	<!-- It is used for unique session for particular admin in all web pages-->
<!DOCTYPE html>
<html>
<head>
	<title>Delete Users Preventive Records</title>

<!-- Add company icon image in website-->
<link rel="shortcut icon" href="images/smnew-br.png" type="image/x-icon">

</head>
<body>

<?php include 'admin-newheader.php'; ?>		<!-- Include header to show header elements like Login/Logout/Signup -->
<div class="container-fluid" style="margin-top: 2%; margin-bottom: 2%;">
<div class="row">

<div class="col-md-12 bg-info" style="box-shadow:0 0 5px grey; color:black; float: inherit; margin-bottom: 25%;">
<h1> Preventive Service Records </h1>

<!-- Show fields of Preventive Maintenence Records -->
<table class="table table-stripped">
<thead class="bg-warning">
<tr>
<td> Product ID </td>	
<td> Product Type </td>
<td> Customer Type </td>
<td> Email </td>
<td> Date of Manufacture </td>
<td> Date of Purchase </td>
<td> Serial Number </td>
<td> Product Cost </td>
<td> Address </td>
<td> Preventive Cost </td>
<td> Payment Mode </td>
<td> Delete Details </td>
</tr>



<!-- Retrieve information from "user_product_info" table for Preventive maintenance record information -->
<?php 
require 'admin-newconnection.php';
$view_users_query="select * from user_product_info";
$run=mysqli_query($con,$view_users_query);

while($row=mysqli_fetch_array($run))
{
		$product_id = $row[0];
		$product_type = $row[1];
		$customer_type = $row[2];
		$email = $row[3];
		$dom = $row[4];
		$dop = $row[5];
		$serial_number = $row[6];
		$product_cost = $row[7];
		$address = $row[8];
		$preventive_cost = $row[9];
		$payment_mode = $row[10];
		
 ?>


</thead>

<!-- To show table field data of users "Preventive Maintenance" record -->
<tbody>

<tr>
<td> <?php echo $product_id; ?> </td>	
<td> <?php echo $product_type; ?> </td>
<td> <?php echo $customer_type; ?> </td>
<td> <?php echo $email; ?> </td>
<td> <?php echo $dom; ?> </td>
<td> <?php echo $dop; ?> </td>
<td> <?php echo $serial_number; ?> </td>
<td> <?php echo $product_cost; ?> </td>
<td> <?php echo $address; ?> </td>
<td> <?php echo $preventive_cost; ?> </td>
<td> <?php echo $payment_mode; ?> </td>

<td> <a href="admin-newdeletepreventiverecordconnection.php?del=<?php echo $product_id ?>"><button class="btn btn-danger"> Delete </button> </a></td>



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