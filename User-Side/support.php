<?php require_once "controllerUserData.php"; ?>
<!DOCTYPE html>
<html>
<head>

        <link rel="shortcut icon" href="images/smnew-br.png" type="image/x-icon">
	
	<title>Submit a Support Request</title>
	<body>

		<?php include 'header.php' ?>
		<br>
		<div class="container">
			<div class="row" style="margin-top: 3%; margin-bottom: 3%;">
				<div class="col-md-4">
					<div class="contact-info">
						<img src="images/email 04.png" style="width: 89%; margin-top: 5%;">		<!-- Add Image -->
						<h2>Contact Us</h2>
						<h4 style="text-align: justify;"> We would love to hear from you, and solve your problem. </h4>
					</div>
				</div>
				<div class="col-md-8">
					<form action="" method="POST">	
					<div class="contact-form">
						<div class="form-group">
							
							<b><label class="control-label col-sm-4" for="name">Your Name:</label></b>
							<br>
							<div class="col-sm-10">          
								<b><input type="text" class="form-control" name="name" id="name" onkeypress='return ((event.charCode >= 65 && event.charCode <= 90) || (event.charCode >= 97 && event.charCode <= 122) || (event.charCode == 32))' placeholder="Enter your name"  title="Enter alphabets only." required/></b>
							
							<br>
							<b>Your Email:</b>
							</div>
							

							<div class="col-sm-10">          
								<input type="email" class="form-control" id="email" placeholder="Enter Your Email" name="email" required />
							</div>

						</div>


						<div class="col-sm-10">
							<b>Registered Mobile No :</b>
							
						
                        <input type="text" name="phone" class="form-control" oninput="this.value = this.value.replace(/[^0-9.]/g, '').replace(/(\..*?)\..*/g, '$1').replace(/^0[^.]/, '0');" maxlength="10" style="width: 17em; height: 35px;" required/>
                    </div>
                    <br>

						<div class="form-group">
							<b><label class="control-label col-sm-4" for="product">Product:</label></b>
							<div class="col-sm-10">
								<input type="text" class="form-control" id="product" onkeypress='return ((event.charCode >= 65 && event.charCode <= 90) || (event.charCode >= 97 && event.charCode <= 122) || (event.charCode == 32))' placeholder="Enter your product Name" name="product_name" required/>
							</div>
						</div>

					
						<div class="form-group">
							<b><label class="control-label col-sm-4" for="problem">Write Your Problem Here :</label></b>
							<div class="col-sm-10">
								<textarea class="form-control" rows="5" id="problem" name="query" required/></textarea>
							</div>
						</div>
					
						<div class="form-group">        
							<div class="col-sm-offset-2 col-sm-10">
								<button type="submit" name="submit_btn" class="btn btn-danger" style="margin-top: 1%;"> Submit </button>
							</div>
						</div>
					
					</div>
					</form>		
				</div>
			</div>
		</div>
<br>
<br>

		<?php include 'footer.php' ?>	

		</body>
	</html>
	

	
	<?php
	if (isset($_POST['submit_btn'])) {

		require "connection.php";

		$name = $_POST['name'];
		$email = $_POST['email'];
		$mobile = $_POST['phone'];
		$product_name = $_POST['product_name'];
		$query = $_POST['query'];
		$support_req_date = Date("d-m-Y");


		$sql ="INSERT Into support (name, email, mobile, product_name,query,support_req_date) values ('$name', '$email','$mobile','$product_name','$query','$support_req_date')";
		$support = mysqli_query($con,$sql);


		if($support) {
			echo  " <script> alert('Your Query is Submitted Sucessfully, our team will call you shortly.');
	window.location.href='user_support_request.php';
	</script>";
		}
	}


	?>
	