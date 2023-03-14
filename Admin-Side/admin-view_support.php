<!DOCTYPE html>
<html>
<head>
	<title> User Fault Repair Records </title>
</head>
<body>
	<?php include 'admin-header.php'; ?>
<div class="container">
<div class="row">

<div class="col-md-12 bg-info" style="box-shadow:0 0 5px grey; color:black; float: inherit; margin-bottom: 26%;">
<h1> Support Related Record of All Users </h1>

<table class="table table-stripped">
<thead class="bg-warning">
<tr>
<td> Support ID </td>	
<td> Name </td>
<td> Registered Mobile No </td>
<td> Product </td>
<td> Problem in Machine </td>
</tr>




<?php 
require 'admin-connection.php';
$view_users_query="select * from support";
$run=mysqli_query($conn,$view_users_query);

while($row=mysqli_fetch_array($run))
{
		$support_id = $row[0];
		$name = $row[1];
		$mobile = $row[2];
		$product_name = $row[3];
		$query = $row[4];
		
		
 ?>


</thead>
<tbody>

<tr>
<td> <?php echo $support_id; ?> </td>	
<td> <?php echo $name; ?> </td>
<td> <?php echo $mobile; ?> </td>
<td> <?php echo $product_name; ?> </td>
<td> <?php echo $query; ?> </td>
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