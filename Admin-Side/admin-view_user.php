<!DOCTYPE html>
<html>
<head>
	<title>Seemaira's - Admin Users</title>

</head>
<body>
<?php include 'admin-header.php'; ?>
<div class="container">
<div class="row">

<div class="col-md-12 bg-info" style="box-shadow:0 0 5px grey; color:black; float: inherit;">
<h1> Registered User List </h1>

<table class="table table-stripped">
<thead class="bg-warning">
<tr>
<td> User ID </td>	
<td> Full Name </td>
<td> Date of Birth </td>
<td> Gender</td>
<td> Email </td>
<td> Phone Code </td>
<td> Mobile </td>
<td> Address </td>
<td> Password </td>
</tr>




<?php 
require 'admin-connection.php';
$view_users_query="select * from register";
$run=mysqli_query($conn,$view_users_query);

while($row=mysqli_fetch_array($run))
{
		$customer_id = $row[0];
		$fullname = $row[1];
		$dob = $row[2];
		$gender = $row[3];
		$email = $row[4];
		$phone_code = $row[5];
		$mobile = $row[6];
		$address = $row[7];
		$password = $row[8];
		
 ?>


</thead>
<tbody>

<tr>
<td> <?php echo $customer_id; ?> </td>	
<td> <?php echo $fullname; ?> </td>
<td> <?php echo $dob; ?> </td>
<td> <?php echo $gender; ?> </td>
<td> <?php echo $email; ?> </td>
<td> <?php echo $phone_code; ?> </td>
<td> <?php echo $mobile; ?> </td>
<td> <?php echo $address; ?> </td>
<td> <?php echo $password; ?> </td>
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


