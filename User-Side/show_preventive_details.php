<!-- Code to show preventive maintenance details -->
<?php require_once "controllerUserData.php";?>	<!-- It is used for unique session for particular user in all web pages-->
<!DOCTYPE html>
<html>
<head>
	<title> Seemaira's - Preventive details</title>
</head>
<body>
	<?php include 'header.php'; ?>		<!-- Include header to show header elements like Login/Logout/Signup -->
	<br>

	<div class="container">
		<div class="row">

			<div class="col-md-3" >
				<img src="" alt="" style="width:100%"/>
			</div>
			<div class="col-md-6" style="margin-bottom: 8%;margin-top: 8%;"" >
				<table class="table table-stripped table-bordered">
					<thead>
						<tr>
							<th colspan="2"  class="text-center"><h3 style="text-align: center;"> Your Product Details for Preventive Maintenance </h3></th>
						</tr>
					</thead>
					<tbody>

						<a href="view_complain_details.php" class="text-primary"><span class="glyphicon glyphicon-trash"></span></a></td>


						<tr>
							<td>Product Type</td>
							<td> <?php echo $_POST['product_type']; ?> </td>
						</tr>

						<tr>
							<td>Date of Manufacture</td>
							<td><?php echo $_POST['dom']; ?> </td>
						</tr>

						<tr>
							<td>Date of Purchase</td>
							<td><?php echo $_POST['dop']; ?> </td>
						</tr>

						<tr>
							<td>Serial Number</td>
							<td><?php echo $_POST['serial_number']; ?> </td>
						</tr>

						<tr>
							<td>Product Cost </td>
							<td> <?php echo $_POST['product_cost']; ?> </td>
						</tr>


					</tbody>

				</table>

		</div>
		<div class="col-md-3 text-center" style="margin-top: 40%; margin-left: -40%;">
		<form action="cart.php" method="post">		<!-- Form Starts -->
		<input type="hidden" name="product_type" value="<?php echo $_POST['product_type']; ?>"/>
		<input type="hidden" name="dom" value="<?php echo $_POST['dom']; ?>"/>
		<input type="hidden" name="dop" value="<?php echo $_POST['dop']; ?>"/>
		<input type="hidden" name="serial_number" value="<?php echo $_POST['serial_number']; ?>"/>
		<input type="hidden" name="product_cost" value="<?php echo $_POST['product_cost']; ?>"/>
		<input type="hidden" name="amount" value="3000"/>

		
		<a href="cart.php"><input type="submit" name="submit" class="btn btn-danger" value="Buy Now" style="width:100%; font-size: 20px; height: 50px;"></a>
		

		</form>		<!-- Form Ends -->
		</div>

			
		</div>
	</div>
<br>
<br>

	<?php include 'footer.php'; ?>		<!-- To include footer -->
</body>
</html>