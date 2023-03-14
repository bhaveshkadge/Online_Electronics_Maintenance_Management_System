<!-- Code to View Replaced parts details -->
<?php require_once "controllerUserData.php";?>	<!-- It is used for unique session for particular user in all web pages-->
<!DOCTYPE html>
<html>
<head>

	<!-- Add company icon image in website-->
        <link rel="shortcut icon" href="images/smnew-br.png" type="image/x-icon">
	
	<title> Your Replaced Parts </title>

	<style type="text/css">
 @media print {
               .noprint {
                  visibility: hidden;
               }
            }
</style>

</head>
<body>
	<?php include 'header.php'; ?>	<!-- Include header to show header elements like Login/Logout/Signup -->

<div class="container-fluid" style="margin-top: 2%; margin-bottom: 2%;">
<div class="row">


<div class="col-md-12 bg-info" style="box-shadow:0 0 5px grey; color:black; float: inherit; margin-bottom: 16%;">
<h2> Your Replaced Part Details </h2>

<!-- Show fields of Replaced Parts details page -->
<table class="table table-stripped">
<thead class="bg-warning">
<tr>
<td> Your ID </td>
<td> Customer Type </td>	
<td> Product Type </td>
<td> Brand of Product </td>
<td> Problem of Product </td>
<td> Replaced Part </td>
<td> Cost of Replaced Part </td>
<td> Assigned Engineer </td>
<td> Date of Replaced </td>
<td> Warrenty of Replaced Part </td>
</tr>


<!-- Retrieve information from replaced_part table -->
<?php 
require 'connection.php';
$email = $_SESSION['email'];

$view_users_query="select * from replaced_part where email='$email'";
$run=mysqli_query($con,$view_users_query);

//To store form field elements in the table
while($row=mysqli_fetch_assoc($run))
{
	
		$replace_id = $row['replace_id'];
		$customer_type = $row['customer_type'];
		$product_type = $row['product_type'];
		$brand = $row['brand'];
		$problem = $row['problem'];
		$replaced_part = $row['replaced_part'];
		$cost = $row['cost'];
		$engineer = $row['engineer'];
		$date_of_replaced = $row['date_of_replaced'];
		$warrenty = $row['warrenty'];
		
		
 ?>

</thead>

<!-- To show table field data of user "Replaced parts" record page -->
<tbody>

<tr>
<td> <?php echo $replace_id; ?> </td>	
<td> <?php echo $customer_type; ?> </td>
<td> <?php echo $product_type; ?> </td>
<td> <?php echo $brand; ?> </td>
<td> <?php echo $problem; ?> </td>
<td> <?php echo $replaced_part; ?> </td>
<td> <?php echo $cost; ?> </td>
<td> <?php echo $engineer; ?> </td>
<td> <?php echo $date_of_replaced; ?> </td>
<td> <?php echo $warrenty; ?> </td>

</tr>

</tbody>
<?php 
} ?>
</table>

</div>
</div>
</div>
<center><button class="btn btn-success noprint" onclick="window.print()"> Print Report</button></center>
<br>
<?php include 'footer.php'; ?>	<!-- To include footer -->

</body>
</html>