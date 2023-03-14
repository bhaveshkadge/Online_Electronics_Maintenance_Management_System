<!-- Code for Admin to delete record -->
<?php require_once "admin-newcontrollerUserData.php"; ?>	<!-- It is used for unique session for particular admin in all web pages-->
<?php


include("admin-newconnection.php");		//Including connection file

$message = "User has been deleted sucessfully";
$delete_id=$_GET['del'];
$delete_query="delete from usertable WHERE id ='$delete_id'";
$run=mysqli_query($con,$delete_query);

//Alert popup
if($run)
{

	echo "<script type='text/javascript'>alert('$message');</script>";
    echo "<script>window.open('admin-newdeleteuser.php?deleted=user has been deleted','_self')</script>";
}

?>
