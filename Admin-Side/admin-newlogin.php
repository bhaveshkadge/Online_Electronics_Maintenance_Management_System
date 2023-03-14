<!-- Code for Admin Login Form -->
<?php require_once "admin-newcontrollerUserData.php"; ?>    <!-- It is used for unique session for particular admin in all web pages-->
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Admin- Login Form</title>

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
                <form action="admin-newlogin.php" method="POST" autocomplete="">    <!-- Login Form Starts -->
                    <h2 class="text-center">Admin Login Form</h2>
                    <p class="text-center">Login with your email and password.</p>
                    <?php
                    if(count($errors) > 0){
                        ?>
                        <div class="alert alert-danger text-center">
                            <?php
                            foreach($errors as $showerror){
                                echo $showerror;
                            }
                            ?>
                        </div>
                        <?php
                    }
                    ?>
                    <div class="form-group">
                        <input class="form-control" type="email" name="email" placeholder="Email Address" required value="<?php echo $email ?>">
                    </div>
                    <div class="form-group">
                        <input class="form-control" type="password" name="password" placeholder="Password" required>
                    </div>
                    <div class="link forget-pass text-left"><a href="admin-newforgotpassword.php">Forgot password?</a></div>
                    <div class="form-group">
                        <input class="form-control button" type="submit" name="admin-newlogin" value="Login">
                    </div>
                    <div class="link login-link text-center">Not yet a member? <a href="admin-newsignup.php">Signup now</a></div>
                    <div class="link login-link text-center">Or Go to Homepage? <a href="homepage.php">Click Here</a></div>
                    
                </form>     <!-- Form Ends -->
            </div>
        </div>
    </div>
    
</body>
</html>
