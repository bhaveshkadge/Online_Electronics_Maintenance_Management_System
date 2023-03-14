<!DOCTYPE html>
<html>
<head>
	<title> Seemaira's - User Fault Repair Records </title>
</head>
<body>
	<?php include 'admin-header.php'; ?>
<div class="container">
<div class="row">

<div class="col-md-12 bg-info" style="box-shadow:0 0 5px grey; color:black; float: inherit; margin-bottom: 26%;">
<h1> Fault Related Record of All Users </h1>

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


<?php 
require 'admin-connection.php';
$view_users_query="select * from fault_repair";
$run=mysqli_query($conn,$view_users_query);

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
<td><a href="admin-engineer.php?id=<?php echo $fault_repair_id; ?>" class="btn btn-info">Edit</a></td>
</tr>

</tbody>
<?php } ?>
</table>

</div>
</div>
</div>
<?php include 'admin-footer.php'; ?>

</body>
</html>