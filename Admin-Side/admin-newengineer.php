<!-- Code for Admin to Assign an Enginner to the users requests -->
<?php require_once "admin-newcontrollerUserData.php"; ?>    <!-- It is used for unique session for particular admin in all web pages-->
<!DOCTYPE html>
<html>
<head>
	<title>
		Admin - Suggest Engineer
	</title>

    <!-- Add company icon image in website-->
<link rel="shortcut icon" href="images/smnew-br.png" type="image/x-icon">

</head>
<body>
	<?php include 'admin-newheader.php'; ?>    <!-- Include header to show header elements like Login/Logout/Signup -->
	<div class="container" style="margin-top: 2%; margin-bottom: 0%;">
	<div class="col-md-4"> </div>
	<div class="col-md-4" style="margin-top: 6%; margin-bottom: 15%;">
                <h2>
                    <center>Suggest Engineer's</center>
                </h2>

                <form role="form" method="post" action="">      <!-- Form Starts for assigning engineer -->
                  <div class="form-group">
                        <label for="name">Select Engineer's:</label>
                        <select class="form-control" name="select_engineer" required>
                    <option value="Ritesh"> Ritesh </option>
                    <option value="Rahul"> Rakesh </option>
                        </select>
                    </div>
                    <div class="form-group">
                    	<label for="name">Mobile No :</label>
                        
                        <input type="text" class="form-control" name="eng_number" placeholder="Mobile no of engineer" oninput="this.value = this.value.replace(/[^0-9.]/g, '').replace(/(\..*?)\..*/g, '$1').replace(/^0[^.]/, '0');" maxlength="10" style="width: 15em; height: 27px;">

                        <input type="text" class="form-control" name="id" placeholder="Mobile no of engineer" oninput="this.value = this.value.replace(/[^0-9.]/g, '').replace(/(\..*?)\..*/g, '$1').replace(/^0[^.]/, '0');" maxlength="10" style="width: 15em; height: 27px;" value="<?php echo $_GET['id']; ?>">
                    </div>

                    <button type="submit" class="btn btn-primary btn-block" name="REQUEST"> Submit </button>

        </form>
  </div>
</div>

<?php include 'admin-newfooter.php'; ?>     <!-- To include footer -->

</body>
</html>


<!-- Database Codings --> 
<!-- When Admin click on "REQUEST" in the form--> 
<?php

require "admin-newconnection.php";
if (isset($_POST['REQUEST'])) {

// To store form field elements in the table
$select_engineer = $_POST['select_engineer'];
$eng_number = $_POST['eng_number'];
$id = $_POST['id'];

//SQL query to update the data in "fault_repair" Table
$sql  = "update fault_repair set eng_name='$select_engineer', eng_phone ='$eng_number' where fault_repair_id='$id' ";

$us = mysqli_query($con,$sql);

//Alert popup after click on "REQUEST"
        if($us){
            echo"<script>alert('Engineer Assigned Sucessfully')</script>";

}
}

?>