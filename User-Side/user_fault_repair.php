<!-- Code to store and show Fault Repair records (For Users) -->
<?php require_once "controllerUserData.php";?>	<!-- It is used for unique session for particular user in all web pages-->
<!DOCTYPE html>
<html>
<head>

	<!-- Add company icon image in website-->
        <link rel="shortcut icon" href="images/smnew-br.png" type="image/x-icon">
	
	<title> Your Fault Repair Records </title>
</head>
<body>
	<?php include 'header.php'; ?>		<!-- Include header to show header elements like Login/Logout/Signup -->

<div class="container-fluid" style="margin-top: 2%; margin-bottom: 2%;">
<div class="row">

<div class="col-md-12 bg-info" style="box-shadow:0 0 5px grey; color:black; float: inherit; margin-bottom: 20%;">
<h2> Your Fault Related Details </h2>


<!-- Show fields of fault repair record page -->
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
<td> Engineer Name </td>
<td> Engineer Mobile No. </td>

</tr>



<!-- Retrieve information from fault_repair table -->
<?php 
require 'connection.php';
$email = $_SESSION['email'];

$view_users_query="select * from fault_repair where email='$email'";
$run=mysqli_query($con,$view_users_query);

//To store form field elements in the table
while($row=mysqli_fetch_assoc($run))
{
	
		$fault_repair_id = $row['fault_repair_id'];
		$product_type = $row['product_type'];
		$brand_name = $row['brand_name'];
		$dom = $row['dom'];
		$dop = $row['dop'];
		$serial_number = $row['serial_number'];
		$product_cost = $row['product_cost'];
		$mobile_no = $row['mobile_no'];
		$address = $row['address'];
		$problem = $row['problem'];
		$email = $_SESSION['email'];
		$eng_name = $row['eng_name'];
		$eng_phone = $row['eng_phone'];
		
		
 ?>


</thead>

<!-- To show table field data of user "fault repair" record page -->
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
<td> <?php echo $eng_name; ?> </td>
<td> <?php echo $eng_phone; ?> </td>

</tr>

</tbody>
<?php 
} ?>
</table>

</div>
</div>
</div>

<?php include 'footer.php'; ?>		<!-- To include footer -->

</body>
</html>