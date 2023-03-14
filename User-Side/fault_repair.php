<!-- Code for Fault Repair services details and Contract form -->
<?php require_once "controllerUserData.php"; ?>	<!-- It is used for unique session for particular user in all web pages-->
<!DOCTYPE html>
<html>
<head>
	<title>
		Fault Repair Form
	</title>

	<!-- Add company icon image in website-->
        <link rel="shortcut icon" href="images/smnew-br.png" type="image/x-icon">

	<!-- Link to use CSS contents -->
  <link rel="stylesheet" type="text/css" href="bootstrap/bootstrap.css">
  <!-- Link to use Javascript contents -->
  <script type="text/javascript" src="bootstrap/bootstrap.js"></script>


</head>
<body>

	<?php include 'header.php' ?>	<!-- Include header to show header elements like Login/Logout/Signup -->
	<br>
	<div class="container-fluid">
		<div class="row" style="padding-top: 3%; padding-bottom: 4%;">

			<div class="col-5" style="margin-left: 8%">
				<h3 style="margin-left: 35%; margin-top: 6%;"> FAULT REPAIR </h3>

				<p style="color:Black;text-align: justify;margin-top: 4%;"> <b>This service is provide to you whenever call or request is made by your side, this service covers your products fault repair and if there is need to change products parts if previous part is not working, than it will be changed and we will give you warrenty of that part which is 3 months.</b> <br> <br>

					<b> Doorstep engineer facility if customers/clients products will have any kind of problem. We also provide the warrenty of replaced parts to our clients, which is 3 months of warrenty after replacing it.</b> <br> <br>

					<b> If your product is not working than please fill the below given form and submit your product issues as soon as possible. We will try to short out your query as soon as possible by sending our engineer's at your address.</b>
				</p>
				
			</div>


			<div class="col-6">
				<div class="col-5">
					<img src="images/fault repair.jpg" style="width: 193%; margin-top: 13%; margin-left: 20%;">
				</div>
			</div>

		</div>
	</div>


<div class="container" style="margin-bottom: 2%;"> <br>
		<div class="card bg-light">
			<article class="card-body mx-auto" style="width: 40%;">
				<h4 class="card-title mt-3 text-center"> FAULT REPAIR FORM </h4>
				<p class="text-center">Provide your product details to us for Fault Repair Services </p>




				<form action="fault_repair.php" method="POST">		<!-- Fault Repair Form Starts -->
				<div class="form-group input-group">
					<div class="input-group-prepend">
						<span class="input-group-text"> <i class="fab fa-product-hunt"></i> </i> </span>
					</div>
					<select class="custom-select" name="product_type" required="">
						<option value="">Choose Your Product</option>
						<option value="Air Conditioner">Air Conditioner</option>
						<option value="Television">Television</option>
						<option value="Refrigerator">Refrigerator</option>
						<option value="Washing Machine">Washing Machine</option>
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
							<span class="input-group-text"> <i class="fas fa-list-ol"></i> </span>
						</div>
						<input type="text" class="form-control" name="brand_name" id="name" placeholder="Enter product Brand Name" onkeypress='return ((event.charCode >= 65 && event.charCode <= 90) || (event.charCode >= 97 && event.charCode <= 122) || (event.charCode == 32))' title="Enter alphabets only." required value="<?php echo $name ?>"/>
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
							<span class="input-group-text"> <i class="fas fa-list-ol"></i> </span>
						</div>

						<!-- Validation for Enter Only Numbers -->
						<input type="text" name="mobile_no" class="form-control" placeholder="Enter mobile no." oninput="this.value = this.value.replace(/[^0-9.]/g, '').replace(/(\..*?)\..*/g, '$1').replace(/^0[^.]/, '0');" maxlength="10" style="width: 17em; height: 35px;" required/>
					</div> <!-- form-group// -->

					
					

					<div class="form-group input-group">
						<div class="input-group-prepend">
							<span class="input-group-text"> <i class="fas fa-list-ol"></i> </span>
						</div>
						<input name="address" class="form-control" placeholder="Enter Your Proper Address" type="text" required="">
					</div> <!-- form-group// -->


					<div class="form-group input-group">
						<div class="input-group-prepend">
							<span class="input-group-text"> <i class="fas fa-list-ol"></i> </span>
						</div>
						<input name="problem" class="form-control" placeholder="What problem are you facing" type="text" required="">
					</div> <!-- form-group// -->
				

					<input type="hidden" name="form_submitted" value="1">

					<div class="form-group">
						<a href="#"><button name="submit_btn" type="submit" class="btn btn-primary btn-block"> Submit Fault Repair Contract </button> </a>
					</div> <!-- form-group// -->

				</form>		<!-- Form Ends -->
			</article>
		</div> <!-- card.// -->

	</div> 
	<br>
	<br>
	<!--container end.//-->
	<?php include 'footer.php'; ?>		<!-- Include footer file -->
	
	</body>
	
	</html>

	<!-- Database Codings --> 
	<!-- When user click on "submit_btn" in the form-->
	<?php
	if (isset($_POST['submit_btn'])) {

	require "connection.php";

	// To store form field elements in the table
	$product_type = $_POST['product_type'];
	$brand_name = $_POST['brand_name'];
	$dom = $_POST['dom'];
	$dop = $_POST['dop'];
	$serial_number = $_POST['serial_number'];
	$product_cost = $_POST['product_cost'];
	$mobile_no = $_POST['mobile_no'];
	$address = $_POST['address'];
	$problem = $_POST['problem'];
	$email = $_SESSION['email'];
	


	//SQL query to store the data in Support Table
	$sql ="INSERT Into fault_repair (product_type, brand_name, dom, dop, serial_number, product_cost, mobile_no, address, problem,email) values ('$product_type', '$brand_name','$dom','$dop','$serial_number','$product_cost', '$mobile_no', '$address', '$problem', '$email')";

print_r($sql);
	$us = mysqli_query($con,$sql);

	//Alert popup after click on "submit_btn"
	if($us){
	
	echo  " <script> alert('Your Fault Repair Details has been Submitted Successfully. You will be redirected to your Fault Repair Records.');
	window.location.href='user_fault_repair.php';
	</script>";
}
}


?>
