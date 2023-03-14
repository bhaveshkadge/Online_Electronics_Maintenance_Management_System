<?php require_once "controllerUserData.php"; ?>
<?php
include('connection.php');

if(isset($_POST['amt']) && isset($_POST['name']) && isset($_POST['email']) && isset($_POST['number'])){
    $name=$_POST['name'];
    $email=$_POST['email'];
    $amt=$_POST['amt'];
    $serial_number=$_POST['number'];
    $payment_status="pending";
    $added_on=date('Y-m-d h:i:s');

    if ($name != "" && $email != "" && $amt != "" && $serial_number != "") 
    {
        
    mysqli_query($con,"insert into payment(name,amount,email,product_serial_no,payment_status,added_on) values('$name','$amt','$email','$serial_number','$payment_status','$added_on')");
    $_SESSION['OID']=mysqli_insert_id($con);
}
}
else {
    echo "<script>alert('Please fill the details first');</script>";
}

if(isset($_POST['payment_id']) && isset($_SESSION['OID'])){
    $payment_id=$_POST['payment_id'];
    $email=$_POST['email'];
    mysqli_query($con,"update payment set payment_status='complete',payment_id='$payment_id' where id='".$_SESSION['OID']."'");
}


?>
