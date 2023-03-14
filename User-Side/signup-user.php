<!-- Code for Signup User Form -->
<?php require_once "controllerUserData.php";?> <!-- It is used for unique session for particular user in all web pages-->
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Signup Form</title>
    <!-- Link to use Bootstrap contents -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <!-- Link to use CSS contents -->
    <link rel="stylesheet" href="style.css">
    <!-- Link to use Javascript contents -->
    <script type="text/javascript" src="validations/validations/all-letter.js"></script>
    <!-- Add company icon image in website-->
    <link rel="shortcut icon" href="images/smnew-br.png" type="image/x-icon">
</head>
<body>
    <div class="container">
        <div class="row">
            <div class="col-md-4 offset-md-4 form">
                <form action="signup-user.php" method="POST" autocomplete="">   <!-- Form Starts -->

                    
                    <h2 class="text-center">User Signup Form</h2>
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
                        <input type="text" class="form-control" name="name" id="name" style="height: 27px;" placeholder="Enter Your Name" onkeypress='return ((event.charCode >= 65 && event.charCode <= 90) || (event.charCode >= 97 && event.charCode <= 122) || (event.charCode == 32))' title="Enter alphabets only." required value="<?php echo $name ?>"/>

                    </div>


                    <div class="form-group">
                        <input class="form-control" type="date" name="dob" placeholder="Date of Birth" style="height: 27px;" min="1950-01-01" max="2050-12-31" required value="<?php echo $dob ?>">
                    </div>

                    
                    <div class="form-group">
                        <input class="form-control" type="email" name="email" placeholder="Email Address" style="height: 27px;" required value="<?php echo $email ?>">
                    </div>

                    <select class="custom-select" name="phone_code" required="" style="width: 12em; height: 32px;">
                        <option selected="">Select Phone Code </option>
                        <option value="+91">+91</option>
                        <option value="0">0</option>
                    </select>
                    <div class="form-group">

                        <!-- Validation for Enter Only Numbers -->
                        <input type="text" name="phone" class="form-control" oninput="this.value = this.value.replace(/[^0-9.]/g, '').replace(/(\..*?)\..*/g, '$1').replace(/^0[^.]/, '0');" maxlength="10" style="width: 15em; height: 27px;" required/>
                    </div>

                    <div class="form-group">
                        <input class="form-control" type="text" name="address" style="height: 27px;" placeholder="Enter your address" required/>
                    </div>


                    <div class="form-group">
                        <input class="form-control" type="password" name="password" style="height: 27px;" placeholder="Password" required/>
                    </div>
                    <div class="form-group">
                        <input class="form-control" type="password" name="cpassword" style="height: 27px;" placeholder="Confirm password" required/>
                    </div>
                    <div class="form-group">
                        <input class="form-control button" type="submit" name="signup" value="Signup">
                    </div>
                    <div class="link login-link text-center">Already a member? <a href="login-user.php">Login here</a></div>
                    <div class="link login-link text-center">Or Go to Homepage? <a href="homepage.php">Click Here</a></div>
                </form>     <!-- Form Ends -->
            </div>
        </div>
    </div>
    
</body>
</html>


