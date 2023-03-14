<!-- Code for Admin change password -->
<?php require_once "admin-newcontrollerUserData.php"; ?>    <!-- It is used for unique session for particular admin in all web pages-->
<?php
if($_SESSION['info'] == false){
    header('Location: admin-newlogin.php');  
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Login Form</title>
    <!-- Link to use Bootstrap contents -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <!-- Link to use CSS contents -->
    <link rel="stylesheet" href="style.css">
    <!-- Add company icon image in website-->
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
                <form action="admin-newlogin.php" method="POST">    <!-- Form Starts-->
                    <div class="form-group">
                        <input class="form-control button" type="submit" name="admin-newloginnow" value="Login Now">
                    </div>
                </form>     <!-- Form Ends -->
            </div>
        </div>
    </div>
    
</body>
</html>