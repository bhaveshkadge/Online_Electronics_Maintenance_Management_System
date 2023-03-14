<?php require_once "controllerUserData.php"; ?>
<!DOCTYPE html>
<html>
<head>

	<!-- add icon link -->
        <link rel="shortcut icon" href="images/smnew-br.png" type="image/x-icon">
	
	<title> Your Preventive Records </title>
<style type="text/css">
 @media print {
               .noprint {
                  visibility: hidden;
               }
            }
</style>

</head>
<body>
	<?php include 'header.php'; ?>

<div class="container-fluid" style="margin-top: 2%; margin-bottom: 2%;">
<div class="row">

<div class="col-md-12 bg-info" style="box-shadow:0 0 5px grey; color:black; float: inherit; margin-bottom: 18%;">
<h2> Your Preventive Maintenance Services-(Online Payments)</h2>

<table class="table table-stripped">
<thead class="bg-warning">
<tr>
<td> Your ID </td>	
<td> Product Type </td>
<td> Serial Number </td>
<td> Address </td>
<td> Preventive Cost </td>
<td> Payment Mode </td>
<td> Valid Till </td>
<td> Payee Email </td>
<td> Payment Id </td>
<td> Payment Timings </td>
</tr>


<?php 
require 'connection.php';
$email = $_SESSION['email'];


$view_users_query = "SELECT * FROM\n"

    . "user_product_info upi INNER JOIN payment pmt\n"

    . "ON upi.email = pmt.email\n"

    . "WHERE upi.email='$email' AND upi.serial_number = pmt.product_serial_no;";


$run=mysqli_query($con,$view_users_query);

while($row=mysqli_fetch_array($run))
{
		$product_id = $row[0];
		$product_type = $row[1];
		$user_type = $row[2];
		$email = $row[3];
		$dom = $row[4];
		$dop = $row[5];
		$serial_number = $row[6];
		$product_cost = $row[7];
		$address = $row[8];
		$preventive_cost = $row[9];
		$payment_mode = $row[10];
		$p_date = $row[11];
		$valid_till = $row[12];
		$id = $row[13];
		$name = $row[14];
		$email = $row[15];
		$product_serial_no = $row[16];
		$amount = $row[17];
		$payment_status = $row[18];
		$payment_id = $row[19];
		$added_on = $row[20];
 ?>


</thead>
<tbody>

<tr>
<td> <?php echo $product_id; ?> </td>
<td> <?php echo $email; ?> </td>
<td> <?php echo $product_type; ?> </td>
<td> <?php echo $serial_number; ?> </td>
<td> <?php echo $address; ?> </td>
<td> <?php echo $preventive_cost; ?> </td>
<td> <?php echo $payment_mode; ?> </td>
<td> <?php echo $valid_till; ?> </td>
<td> <?php echo $payment_id; ?> </td>
<td> <?php echo $added_on; ?> </td>

</tr>

</tbody>
<?php } ?>
</table>

</div>
</div>
</div>

<center><button class="btn btn-success noprint" onclick="window.print()" > Print Report</button></center>
<br>
<?php include 'footer.php'; ?>

</body>
</html>