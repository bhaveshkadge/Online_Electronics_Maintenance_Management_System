<!-- Code to change the password-->
<?php require_once "controllerUserData.php";?>  <!-- It is used for unique session for particular user in all web pages-->

<?php
if($_SESSION['info'] == false){
    header('Location: login-user.php');  
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Login Form</title>
    <!-- It is used to add Bootstrap contents-->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <!-- It is used to add CSS contents-->
    <link rel="stylesheet" href="style.css">
    <!-- It is used to add image icon in website-->
    <link rel="shortcut icon" href="images/smnew-br.png" type="image/x-icon">   
</head>
<body>
    <div class="container">
        <div class="row">
            <div class="col-md-4 offset-md-4 form login-form">
            <?php 
            if(isset($_SESSION['info'])){
                ?>
                <div class="alert alert-success text-center">
                <?php echo $_SESSION['info']; ?>
                </div>
                <?php
            }
            ?>

                <form action="login-user.php" method="POST">    <!-- Start a Form-->
                    <div class="form-group">
                        <input class="form-control button" type="submit" name="login-now" value="Login Now"> 
                        <!-- This button is used to perform another tasks, has value "login-now"-->
                    </div>
                </form>
            </div>
        </div>
    </div>
    
</body>
</html>
