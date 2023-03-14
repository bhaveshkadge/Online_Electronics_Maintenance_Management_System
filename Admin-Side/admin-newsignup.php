<!-- Code for Register new Admins -->
<?php require_once "admin-newcontrollerUserData.php"; ?>    <!-- It is used for unique session for particular admin in all web pages-->
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Signup Form</title>
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
            <div class="col-md-4 offset-md-4 form">
                <form action="admin-newsignup.php" method="POST" autocomplete="">      <!-- Admin Signup Form Starts -->
                    <h3 class="text-center">Admin Signup Form</h3>
                    <p class="text-center">It's quick and easy.</p>
                    <?php
                    if(count($errors) == 1){
                        ?>
                        <div class="alert alert-danger text-center">
                            <?php
                            foreach($errors as $showerror){
                                echo $showerror;
                            }
                            ?>
                        </div>
                        <?php
                    }elseif(count($errors) > 1){
                        ?>
                        <div class="alert alert-danger">
                            <?php
                            foreach($errors as $showerror){
                                ?>
                                <li><?php echo $showerror; ?></li>
                                <?php
                            }
                            ?>
                        </div>
                        <?php
                    }
                    ?>
                    <div class="form-group">
                        <input type="text" class="form-control" name="name" id="name" placeholder="Enter Your Name" onkeypress='return ((event.charCode >= 65 && event.charCode <= 90) || (event.charCode >= 97 && event.charCode <= 122) || (event.charCode == 32))' title="Enter alphabets only." required value="<?php echo $name ?>"/>
                    </div>

                    <div class="form-group">
                        <input class="form-control" type="date" name="dob" placeholder="Date of Birth" min="1950-01-01" max="2050-12-31" required value="<?php echo $dob ?>">
                    </div>

                    <div class="form-group">
                        <input class="form-control" type="email" name="email" placeholder="Email Address" required value="<?php echo $email ?>">
                    </div>
                    <div class="form-group">
                        <input class="form-control" type="password" name="password" placeholder="Password" required>
                    </div>
                    <div class="form-group">
                        <input class="form-control" type="password" name="cpassword" placeholder="Confirm password" required>
                    </div>
                    <div class="form-group">
                        <input class="form-control button" type="submit" name="admin-newsignup" value="Signup">
                    </div>
                    <div class="link login-link text-center">Already a member? <a href="admin-newlogin.php">Login here</a></div>
                    <div class="link login-link text-center">Or Go to Homepage? <a href="homepage.php">Click Here</a></div>
                </form>     <!-- Form Ends -->
            </div>
        </div>
    </div>
    
</body>
</html>