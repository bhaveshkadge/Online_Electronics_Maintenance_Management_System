<!-- Code for Admin to delete engineers database -->
<?php require_once "admin-newcontrollerUserData.php"; ?>	<!-- It is used for unique session for particular admin in all web pages-->
<?php


include("admin-newconnection.php");		//include database connection file, if connection success then details stored

$message = "Engineer has been deleted sucessfully";
$delete_id=$_GET['del'];
$delete_query="delete from engineers WHERE engineer_id ='$delete_id'";
$run=mysqli_query($con,$delete_query);

//Alert Popup
if($run)
{

	echo "<script type='text/javascript'>alert('$message');</script>";
    echo "<script>window.open('admin-newdeleteengineer.php?deleted=Engineer has been deleted Sucessfully','_self')</script>";
}

?>
