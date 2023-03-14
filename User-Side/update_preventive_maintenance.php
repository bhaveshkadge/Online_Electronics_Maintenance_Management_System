<!-- Code to update preventive maintenance records -->
<?php require_once "controllerUserData.php";?>	<!-- It is used for unique session for particular user in all web pages-->
<!DOCTYPE html>
<html>
<head>

	<!-- Add company icon image in website-->
        <link rel="shortcut icon" href="images/titlelogo.png" type="image/x-icon">
	
	<title> Seemaira's - Preventive Records </title>
</head>
<body>
	<?php include 'header.php'; ?>		<!-- Include header to show header elements like Login/Logout/Signup -->
<br>
<div class="container-fluid" style="margin-top: 2%; margin-bottom: 2%;">
<div class="row">

<div class="col-md-12 bg-info" style="box-shadow:0 0 5px grey; color:black; float: inherit;">
<h1> Your Preventive Maintenance Services </h1>

<!-- Show fields of preventive maintenance records page -->
<table class="table table-stripped">
<thead class="bg-warning">
<tr>
<td> Your ID </td>	
<td> Product Type </td>

<td> Email Address</td>
<td> Date of Manufacture </td>
<td> Date of Purchase </td>
<td> Serial Number </td>
<td> Product Cost </td>
<td> Address </td>
<td> Preventive Cost </td>
<td> Payment Mode </td>
<td> Date of Purchasing Preventive Maintenance </td>
<td> Valid Till </td>
<td> Print Report </td>
</tr>



<!-- Retrieve information from user_product_info, payment table -->
<?php 
require 'connection.php';
$email = $_SESSION['email'];
$view_users_query="select * from user_product_info,payment WHERE email='$email' ";
$run=mysqli_query($con,$view_users_query);

if(isset($_POST['payment_id']) && isset($_SESSION['OID'])){
    $payment_id=$_POST['payment_id'];
    mysqli_query($con,"update user_product_info set payment_mode='Online',payment_id='$payment_id' where id='".$_SESSION['OID']."'");
		
 ?>


</thead>

<!-- To show table field data of user preventive maintenance record page -->
<tbody>

<tr>
<td> <?php echo $product_id; ?> </td>
<td> <?php echo $product_type; ?> </td>

<td> <?php echo $email; ?> </td>
<td> <?php echo $dom; ?> </td>
<td> <?php echo $dop; ?> </td>
<td> <?php echo $serial_number; ?> </td>
<td> <?php echo $product_cost; ?> </td>
<td> <?php echo $address; ?> </td>
<td> <?php echo $preventive_cost; ?> </td>
<td> <?php echo $payment_mode; ?> </td>
<td> <?php echo $date; ?> </td>
<td> <?php echo $valid_till; ?> </td>


<td> <button class="btn btn-success" onclick="printf()"> Print </button> </td>


</tr>

</tbody>
<?php } ?>
</table>

</div>
</div>
</div>
<br>
<br>

<?php include 'footer.php'; ?>		<!-- To include footer -->

</body>
</html>