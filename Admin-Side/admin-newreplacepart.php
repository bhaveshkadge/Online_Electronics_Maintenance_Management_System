<!-- Code for Admin to Assign or put Replace parts information(if done) in users dashboard -->
<?php require_once "admin-newcontrollerUserData.php"; ?>	<!-- It is used for unique session for particular admin in all web pages-->
<!DOCTYPE html>
<html>
<head>
	<title> User Fault Repair Requests </title>

<!-- Add company icon image in website-->
<link rel="shortcut icon" href="images/smnew-br.png" type="image/x-icon">


</head>
<body>
<?php include 'admin-newheader.php'; ?>		<!-- Include header to show header elements like Login/Logout/Signup -->

<div class="container-fluid" style="margin-top: 2%; margin-bottom: 0%;">
	<div class="col-md-4"> </div>
	<div class="col-md-4">
                <h2>
                    <center> Part Replace </center>
                </h2>

                <form role="form" method="post" action="">		<!-- Form Start for adding Replaced parts -->
                	
                	<label for="name">Email :</label>
                	<div class="form-group">
                        <input class="form-control" type="email" name="email" placeholder="Email Address" style="height: 27px;" required value="<?php echo $email ?>">
                    </div>

                	<div class="form-group">
                        <label for="name">Customer Type :</label>
                        <select class="form-control" name="customer_type" required>
                    <option selected=""> Option </option>
						<option value="Household"> Household </option>
						<option value="Industry"> Industry </option>
				</select>
				</div>

                  <div class="form-group">
                        <label for="name">Choose your Product :</label>
                        <select class="form-control" name="product_type" required>
                    <option selected="">Product type </option>
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
                    </div>


                    <div class="form-group">
                        <input type="text" class="form-control" name="brand" placeholder="Brand of your product" onkeypress='return ((event.charCode >= 65 && event.charCode <= 90) || (event.charCode >= 97 && event.charCode <= 122) || (event.charCode == 32))' title="Enter alphabets only." required value="<?php echo $name ?>" required/>
                    </div>


                    <div class="form-group">
                        <input type="text" class="form-control" name="problem" onkeypress='return ((event.charCode >= 65 && event.charCode <= 90) || (event.charCode >= 97 && event.charCode <= 122) || (event.charCode == 32))' title="Enter alphabets only." required value="<?php echo $name ?>" placeholder="Problem with product" required/>
                    </div>


                    <div class="form-group">
                        <input type="text" class="form-control" name="replaced_part" placeholder="Part Replaced" required/>
                    </div>
                    
                    
                    <div class="form-group">
                        <input type="number" class="form-control" name="cost" placeholder="Amount of Replaced Part" required>
                    </div>


                    <div class="form-group">
                        <input type="text" class="form-control" name="engineer" placeholder="Assigning Engineer" required>
                    </div>


                    <div class="form-group">
                        <input type="text" class="form-control" name="warrenty" placeholder="" value="3 Months" readonly="" required="">
                    </div>
                   

                    <button type="submit" class="btn btn-primary btn-block" name="submit_btn">REQUEST</button>  <button type="reset" class="btn btn-primary btn-block" value="reset">RESET</button>
                    <br>
                    <br>
                    

                </form>		<!-- Form Ends -->
            </div>

</div>
<?php include 'admin-newfooter.php'; ?>		<!-- To include footer -->
<div class="col-md-4"> </div>



</body>
</html>


	<!-- Database Codings --> 
	<!-- When Admin click on "submit_btn" in the form--> 
	<?php
	if (isset($_POST['submit_btn'])) {

	require "admin-newconnection.php";

	// To store form field elements in the table
	$email = $_POST['email'];
	$customer_type = $_POST['customer_type'];
	$product_type = $_POST['product_type'];
	$brand = $_POST['brand'];
	$problem = $_POST['problem'];
	$replaced_part = $_POST['replaced_part'];
	$cost = $_POST['cost'];
	$engineer = $_POST['engineer'];
	$date = Date("d-m-Y");
	$warrenty = $_POST['warrenty'];
	
	//SQL query to store the data in "replaced_part" Table	
	$sql ="INSERT Into replaced_part (email, customer_type, product_type, brand, problem, replaced_part, cost, engineer, date_of_replaced, warrenty) values ('$email','$customer_type','$product_type','$brand','$problem','$replaced_part','$cost','$engineer','$date', '$warrenty')";
	$us = mysqli_query($con,$sql);

	//Alert popup after click on "submit_btn"
	if($us){
	echo  " <script> alert('Part Replaced Information Updated Sucessfully ');
	window.location.href='admin-newhome.php';
	</script>";
}
}


?>