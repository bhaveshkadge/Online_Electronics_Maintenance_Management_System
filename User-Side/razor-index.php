<?php require_once "controllerUserData.php"; ?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Services Payment Page</title>

    <link rel="shortcut icon" href="images/smnew-br.png" type="image/x-icon">
    
    <!-- Offline Link -->
  <link rel="stylesheet" type="text/css" href="bootstrap/bootstrap.css">
  <script type="text/javascript" src="bootstrap/bootstrap.js"></script>
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js"></script>
  <script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
<script src="https://checkout.razorpay.com/v1/checkout.js"></script>
</head>

<script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
<script src="https://checkout.razorpay.com/v1/checkout.js"></script>


<body>
        <?php include 'header.php'; ?>
<center>
    <br>
    <u><h5>&nbspWelcome to Preventive Maintenance Services Payment Portal&nbsp</h5></u>
    <br>


<form action="razor-payment_process.php" method="post" required>
   
    <input type="text" name="name" id="name" class="form-control" placeholder="Enter your name" style="width: 22em;" onkeypress='return ((event.charCode >= 65 && event.charCode <= 90) || (event.charCode >= 97 && event.charCode <= 122) || (event.charCode == 32))' required=""/><br/>
    
    <input type="email" name="email" id="email" class="form-control" onchange="ValidateEmail(this.value)" placeholder="Enter your registered email" style="width: 22em;" required/><br/> 

    <input type="text" name="number" id="number" class="form-control" placeholder="Enter your Product Serial no." style="width: 22em;" required/>
    <h5 style="font-size: 0.8rem; color: red; text-align: center; margin: auto;">Note: Enter the serial no. for which you have to pay, else you are responsible for the Payment.</h5>

    <br>

    <i>Amount to be Paid: &nbsp</i><input type="textbox" name="amt" id="amt" class="form-control" placeholder="" readonly value="3000" style="width: 5.5em;" required/><br/>
    <input type="button" name="btn" id="btn" value="Pay Now" onclick="return pay_now()" class="form-control" style="width: 5.5em;" />
    <h5 style="font-size: 1rem; color: red; text-align: center; margin: auto;">Please Go back to submit the contract, if your payment is Successfull.</h5>
    <img src="images/back.jpg" height="50px" width="70px">

</form>

</center>
</body>
</html>


<script>


    function ValidateEmail(mail) 
{
 if (/^\w+([\.-]?\w+)*@\w+([\.-]?\w+)*(\.\w{2,3})+$/.test(mail))
  {
    return (true)
  }
    alert("You have entered an invalid email address!")
    $('#email').val('');
    return (false)
}


    function pay_now(){

    //    var x = document.forms["myForm"]["name","email","number"].value;
    //    if (x == "" || x == null) {
    //        alert("Please fill the correct details first!");
    //    return false;
    //    }
            
        var email=jQuery('#email').val();
        var name=jQuery('#name').val();
        var number=jQuery('#number').val();
        var amt=jQuery('#amt').val();
        
         jQuery.ajax({
               type:'post',
               url:'razor-payment_process.php',
               data:"email="+email+"&name="+name+"&number="+number+"&amt="+amt,
               success:function(result){
                   var options = {
                        "key": "rzp_test_rpcg6jcOZjxW3p", 
                        "amount": amt*100, 
                        "currency": "INR",
                        "name": "Seemaira's Electronics Services",
                        "description": "Preventive Services Transaction",
                        "image": "images/smnew-br.png",
                        "handler": function (response){
                           jQuery.ajax({
                               type:'post',
                               url:'razor-payment_process.php',
                               data:"payment_id="+response.razorpay_payment_id,
                               success:function(result){
                                   window.location.href="Thankyou.php";

                               }
                           });
                        }
                    };
                    var rzp1 = new Razorpay(options);
                    rzp1.open();
               }


           });
        
            
    }

</script>






