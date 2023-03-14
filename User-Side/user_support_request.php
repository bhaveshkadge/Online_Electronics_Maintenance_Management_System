<?php require_once "controllerUserData.php";?>
<!DOCTYPE html>
<html>
<head>
	<title>Your Support Requests</title>

        <link rel="shortcut icon" href="images/smnew-br.png" type="image/x-icon">

</head>
<body>
<?php include 'header.php'; ?>	

<div class="container-fluid" style="margin-top: 2%; margin-bottom: 2%;">
<div class="row">

<div class="col-md-12 bg-info" style="box-shadow:0 0 5px grey; color:black; float: inherit; margin-bottom: 20%;">
<h2> Your Support Request </h2>

<table class="table table-stripped">
<thead class="bg-warning">
<tr>
<td> Your Support ID </td>	
<td> Full Name </td>
<td> Email Address </td>
<td> Mobile Number </td>
<td> Product </td>
<td> Problem </td>
<td> Date of Request </td>
</tr>



<?php 
require 'connection.php';
$email = $_SESSION['email'];
$view_users_query = "SELECT * FROM support WHERE email = '$email'";
$run=mysqli_query($con,$view_users_query);

while($row=mysqli_fetch_array($run))
{
		$support_id = $row[0];
		$name = $row[1];
		$email = $row[2];
		$mobile = $row[3];
		$product_name = $row[4];
		$query = $row[5];
		$support_req_date = $row['6'];
		
 ?>


</thead>

<tbody>


<tr>
<td> <?php echo $support_id; ?> </td>	
<td> <?php echo $name; ?> </td>
<td> <?php echo $email; ?> </td>
<td> <?php echo $mobile; ?> </td>
<td> <?php echo $product_name; ?> </td>
<td> <?php echo $query; ?> </td>
<td> <?php echo $support_req_date; ?> </td>
</tr>

</tbody>
<?php } ?>
</table>

</div>
</div>
<br>
</div>

<?php include 'footer.php'; ?>
</body>
</html>


