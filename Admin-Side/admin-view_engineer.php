<!DOCTYPE html>
<html>
<head>
	<title>
		Seemaira's - View Engineer's Admin Area  
	</title>

</head>
<body>
	<?php include 'admin-header.php'; ?>
<div class="container">
<div class="row">

<div class="col-md-12 bg-info" style="box-shadow:0 0 5px grey; color:black; float: inherit;">
<h1>View Engineer's Details</h1>

<table class="table table-stripped">
<thead class="bg-warning">
<tr>
<td> Engineer's ID </td>	
<td> Engineer's Name </td>
<td> Email ID </td>
<td> Mobile No </td>
<td> Date of Joining </td>
<td> Engineer's Specialities </td>


</tr>


<?php 
require 'admin-connection.php';
$view_users_query="select * from engineers";
$run=mysqli_query($conn,$view_users_query);

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
<tbody>

<tr>
<td> <?php echo $engineer_id; ?> </td>	
<td> <?php echo $engineer_name; ?> </td>
<td> <?php echo $email; ?> </td>
<td> <?php echo $mobile; ?> </td>
<td> <?php echo $doj; ?> </td>
<td> <?php echo $engineer_specialities; ?> </td>
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