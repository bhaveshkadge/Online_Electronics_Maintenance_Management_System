<?php require_once "controllerUserData.php"; ?>
<!DOCTYPE html>
<html>
<head>
	<title>
		Preventive Maintenance Request
	</title>

	<!-- add icon link -->	
        <link rel="shortcut icon" href="images/smnew-br.png" type="image/x-icon">
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css">
        <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js"></script>

	
	<!-- Offline Link -->
  <link rel="stylesheet" type="text/css" href="bootstrap/bootstrap.css">
  <script type="text/javascript" src="bootstrap/bootstrap.js"></script>
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js"></script>
  <script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
<script src="https://checkout.razorpay.com/v1/checkout.js"></script>

<style type="text/css">
	
	body {font-family: Arial, Helvetica, sans-serif;}
* {box-sizing: border-box;}

/* Button used to open the contact form - fixed at the bottom of the page */
.open-button {
  background-color: #555;
  color: white;
  padding: 16px 20px;
  border: none;
  cursor: pointer;
  opacity: 0.8;
  position: fixed;
  bottom: 23px;
  right: 28px;
  width: 280px;
}

/* The popup form - hidden by default */
.form-popup {
  display: none;
  position: fixed;
  bottom: 0;
  right: 15px;
  border: 3px solid #f1f1f1;
  z-index: 9;
}

/* Add styles to the form container */
.form-container {
  max-width: 300px;
  padding: 10px;
  background-color: white;
}

/* Full-width input fields */
.form-container input[type=text], .form-container input[type=password] {
  width: 100%;
  padding: 15px;
  margin: 5px 0 22px 0;
  border: none;
  background: #f1f1f1;
}

/* When the inputs get focus, do something */
.form-container input[type=text]:focus, .form-container input[type=password]:focus {
  background-color: #ddd;
  outline: none;
}

/* Set a style for the submit/login button */
.form-container .btn {
  background-color: #04AA6D;
  color: white;
  padding: 16px 20px;
  border: none;
  cursor: pointer;
  width: 100%;
  margin-bottom:10px;
  opacity: 0.8;
}

/* Add a red background color to the cancel button */
.form-container .cancel {
  background-color: red;
}

/* Add some hover effects to buttons */
.form-container .btn:hover, .open-button:hover {
  opacity: 1;
}

</style>

</head>
<body>

	<?php include 'header.php' ?>
<br>
<div class="container-fluid">
			<div class="row">
				
				<div class="col-5" style="margin-left: 3%;">
					<h3 style="margin-left: 12%; margin-top: 6%;"> PREVENTIVE MAINTENANCE </h3>

					<p style="color:Black;text-align: justify;margin-top: 4%;"> <b>We can provide the contract facility to our clients who purchased household products somewhere, and they wants maintenance and management of their products. For such peoples we can provide them maintenance management facility through our website "Seemaira's -An Online Electronics Maintenance System".</b> <br><br>

					<b> Preventive Maintenance is done in every 3 months and it is done our side if your product is in warrenty period, then our Engineers will comes on your address in every 3 months, and check's your products working functinalities or also check it is working properly or not. If your products have any issue in warrenty period then it will fix from us. Maintenance & Management of each and every customer and industry clients should be done here, until clients product's warrenty is avalable. Warrenty which is provide by us while client's submit the preventive maintenance contract or taking fault repair services from us. <br>If your want to take preventive services for you product then please fill the below given form and submit your contract.</b></p>
				
			</div>


			<div class="col-6">
					<div class="col-5">
					<img src="images/preventive 01.jpg" style="width: 262%;height: 399px;margin-top: 15%;margin-left: 20%;">
				</div>
				</div>

		</div>
	</div>
	<div class="container" style="margin-bottom: 2%;"> <br>
		<div class="card bg-light">
			<article class="card-body mx-auto" style="width: 40%;">
				<h4 class="card-title mt-3 text-center"> PREVENTIVE MAINTENANCE FORM</h4>
				<p class="text-center">Provide your product details to us for Preventive Maintenance Services</p>



				<form action="preventive_maintenance.php" method="POST">
				<div class="form-group input-group">
					<div class="input-group-prepend">
						<span class="input-group-text"> <i class="fab fa-product-hunt"></i> </i> </span>
					</div>
					<select class="custom-select" name="product_type" required>
						<option value="">Choose Your Product</option>
						<option value="Air Conditioner">Air Conditioner</option>
						<option value="Television">Television</option>
						<option value="Refrigerator">Refrigerator</option>
						<option value="Microwave Oven">Microwave Oven</option>
						<option value="Fans">Fans</option>
						<option value="Room Heater">Room Heater</option>
						<option value="Geyser">Geyser</option>
						<option value="Cooler">Cooler</option>
						<option value="Laptop">Laptop</option>
						<option value="Computer">Computer</option>
						
					</select>
				</div> <!-- form-group// -->

				<div class="form-group input-group">
					<div class="input-group-prepend">
						<span class="input-group-text"> <i class="fab fa-product-hunt"></i> </i> </span>
					</div>
					<select class="custom-select" name="user_type" required>
						<option value="">Select User Type </option>
						<option value="Household">Household</option>
						<option value="Industry">Industry</option>
					</select>
				</div> <!-- form-group// -->

				
				<div class="form-group input-group">
					<div class="input-group-prepend">
						<span class="input-group-text"> <i class="fas fa-industry"></i> </span>
					</div>
					<div class="form-control">Date of Manufacture</div>
				</div> 

				<div class="form-group input-group">
					<input name="dom" class="form-control" placeholder="Date of Manufacture" type="date" min="2000-01-01" max="2050-12-31" required="">
				</div> <!-- form-group// -->


				<div class="form-group input-group">
					<div class="input-group-prepend">
						<span class="input-group-text"> <i class="fas fa-money-check-alt"></i> </span>
					</div>

					<div class="form-control">Date of Purchase</div>
				</div> 

				<div class="form-group input-group">
					<input name="dop" class="form-control" placeholder="Date of Purchase" type="date" min="2000-01-01" max="2050-12-31" required="">

				</div> <!-- form-group// -->


					<div class="form-group input-group">
						<div class="input-group-prepend">
							<span class="input-group-text"> <i class="fas fa-list-ol"></i> </span>
						</div>
						<input name="serial_number" class="form-control" placeholder="Serial Number" type="text" required="">
					</div> <!-- form-group// -->


					<div class="form-group input-group">
						<div class="input-group-prepend">
							<span class="input-group-text"> <i class="fas fa-rupee-sign"></i> </span>
						</div>
						<input name="product_cost" class="form-control" placeholder="Enter your product orignal cost" type="number" required="">
					</div> <!-- form-group// -->


					<div class="form-group input-group">
						<div class="input-group-prepend">
							<span class="input-group-text"> <i class="fa fa-building"></i> </span>
						</div>
						<input name="address" class="form-control" placeholder="Address" type="text" required="">
					</div> <!-- form-group end.// -->


					<div class="form-group input-group">
						<div class="input-group-prepend">
							<span class="input-group-text"> <i class="fas fa-rupee-sign"></i> </span>
						</div>
						<input name="preventive_cost" class="form-control" placeholder="Preventive Cost" type="number" value="3000" required="" readonly="">
					</div> <!-- form-group// -->
							<u><b>Select a Payment Method:</b></u>

							<br>

			        <input type="radio" name="link" id="link" class="btn btn-success" onclick="location.href = 'razor-index.php';" value="Online"> Pay Online</input>
            
            	&nbsp&nbsp
      				<input type="radio" name="link" id="link" class="btn btn-success" value="Offline"> Or Pay Offline</input>
        

					<br>
					<br>


					<div class="form-group input-group">
						<div class="input-group-prepend">
							<span class="input-group-text"> <i class="fas fa-rupee-sign"></i> </span>
						</div>
						<input name="valid_till" class="form-control" placeholder="" type="text" value="1 Year" readonly="" required="">
					</div> <!-- form-group// -->
				

					<input type="hidden" name="form_submitted" value="1">
					<div class="form-group">
						<a href="#"><button name="submit_btn" type="submit" class="btn btn-primary btn-block"> Submit Preventive Maintenance Contract </button> </a>
					</div> <!-- form-group// -->

				
			</article>
		</div> <!-- card.// -->

	</div> 
	<!--container end.//-->
	<br>
	<br>

	<?php include 'footer.php' ?>


</body>
	</html>

	
	

	<!-- Database Codings --> 
	<?php
	if (isset($_POST['submit_btn'])) {

	require "connection.php";

	$email = $_SESSION['email'];

	$product_type = $_POST['product_type'];
	$user_type = $_POST['user_type'];
	$dom = $_POST['dom'];
	$dop = $_POST['dop'];
	$serial_number = $_POST['serial_number'];
	$product_cost = $_POST['product_cost'];
	$address = $_POST['address'];
	$preventive_cost = $_POST['preventive_cost'];
	$payment_mode = $_POST['link'];
	$email = $_SESSION['email'];
	$date = Date("d-m-Y");
	$valid_till = $_POST['valid_till'];


	$sql ="INSERT Into user_product_info(product_type,user_type,email,dom,dop,serial_number,product_cost,address,preventive_cost,payment_mode,p_date,valid_till) values('$product_type','$user_type','$email','$dom','$dop','$serial_number','$product_cost','$address','$preventive_cost','$payment_mode','$date','$valid_till')";

print_r($sql);
	$us = mysqli_query($con,$sql);
	if($us){
	
	echo  " <script> alert('Your Preventive Services Details has been Submitted Successfully. If you Paid Offline, then you will be redirected to Preventive Services- Offline Payment records. If you Paid Online, then Go to Preventive Services- Online Payments option in Your Profile section.');
	window.location.href='user_preventive_records.php';
	</script>";
}

}
?>

</form>