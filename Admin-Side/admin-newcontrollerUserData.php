<!-- Code for Admin to perform operations from different web pages, using button values,etc for the particular unique sessions -->
<?php 
session_start();                            // start current session
require "admin-newconnection.php";          // connection file
$email = "";
$name = "";
$errors = array();

//if user signup button
if(isset($_POST['admin-newsignup'])){

    //storing form values in the variables
    $name = mysqli_real_escape_string($con, $_POST['name']);
    $dob = mysqli_real_escape_string($con, $_POST['dob']);
    $email = mysqli_real_escape_string($con, $_POST['email']);
    $password = mysqli_real_escape_string($con, $_POST['password']);
    $cpassword = mysqli_real_escape_string($con, $_POST['cpassword']);

    //logical condition to check password and confirm password should same or not
    
    if($password !== $cpassword){
        $errors['password'] = "Confirm password not matched!";
    }

    //SQL query to retrieve adminusertable data
    $email_check = "SELECT * FROM adminusertable WHERE email = '$email'";
    $res = mysqli_query($con, $email_check);
    if(mysqli_num_rows($res) > 0){
        $errors['email'] = "Email that you have entered is already exist!";
    }

    //Generating random 6-digits number for OTP
    if(count($errors) === 0){
        $encpass = password_hash($password, PASSWORD_BCRYPT);
        $code = rand(999999, 111111);
        $status = "notverified";

        //SQL query to insert into adminusertable
        $insert_data = "INSERT INTO adminusertable (name, dob, email, password, code, status)
                        values('$name', '$dob', '$email', '$encpass', '$code', '$status')";
        $data_check = mysqli_query($con, $insert_data);

        //Email function for OTP code send
        if($data_check){
            $subject = "Seemaira's: Email Verification Code";
            $message = "Your 6-digits verification code is $code";
            $sender = "From: rahul.kumar@wrmsglobal.com";
            if(mail($email, $subject, $message, $sender)){
                $info = "We've sent a verification code to your email - $email";
                $_SESSION['info'] = $info;
                $_SESSION['email'] = $email;
                $_SESSION['password'] = $password;
                header('location: admin-newuserotp.php');
                exit();
            }else{
                $errors['otp-error'] = "Failed while sending code!";
            }
        }else{
            $errors['db-error'] = "Failed while inserting data into database!";
        }
    }

}
    //if user click verification code submit button
    //Checking user OTP, and update information
    if(isset($_POST['admin-newcheck'])){
        $_SESSION['info'] = "";

        //storing form values in the variables
        $otp_code = mysqli_real_escape_string($con, $_POST['admin-newuserotp']);

        //SQL query to retrieve adminusertable data
        $check_code = "SELECT * FROM adminusertable WHERE code = $otp_code";
        $code_res = mysqli_query($con, $check_code);
        if(mysqli_num_rows($code_res) > 0){
            $fetch_data = mysqli_fetch_assoc($code_res);
            $fetch_code = $fetch_data['code'];
            $email = $fetch_data['email'];
            $code = 0;
            $status = 'verified';

            //SQL query to update adminusertable data
            $update_otp = "UPDATE adminusertable SET code = $code, status = '$status' WHERE code = $fetch_code";
            $update_res = mysqli_query($con, $update_otp);
            if($update_res){
                $_SESSION['name'] = $name;
                $_SESSION['email'] = $email;
                header('location: admin-newhome.php');
                exit();
            }else{
                $errors['otp-error'] = "Failed while updating code!";
            }
        }else{
            $errors['otp-error'] = "You've entered incorrect code!";
        }
    }

    //if user click login button
    if(isset($_POST['admin-newlogin'])){

        //storing form values in the variables
        $email = mysqli_real_escape_string($con, $_POST['email']);
        $password = mysqli_real_escape_string($con, $_POST['password']);

        //SQL query to retrieve adminusertable data
        $check_email = "SELECT * FROM adminusertable WHERE email = '$email'";
        $res = mysqli_query($con, $check_email);
        if(mysqli_num_rows($res) > 0){
            $fetch = mysqli_fetch_assoc($res);
            $fetch_pass = $fetch['password'];
            if(password_verify($password, $fetch_pass)){
                $_SESSION['email'] = $email;
                $status = $fetch['status'];
                if($status == 'verified'){
                  $_SESSION['email'] = $email;
                  $_SESSION['password'] = $password;
                    header('location: admin-newhome.php');
                }else{
                    $info = "It's look like you haven't still verify your email - $email";
                    $_SESSION['info'] = $info;
                    header('location: admin-newuserotp.php');
                }
            }else{
                $errors['email'] = "Incorrect email or password!";
            }
        }else{
            $errors['email'] = "It's look like you're not yet a member! Click on the bottom link to signup.";
        }
    }

    //if user click continue button in forgot password form
    if(isset($_POST['admin-newcheckemail'])){
        $email = mysqli_real_escape_string($con, $_POST['email']);

        //SQL query to retrieve adminusertable data
        $check_email = "SELECT * FROM adminusertable WHERE email='$email'";
        $run_sql = mysqli_query($con, $check_email);

        //storing form values in the variables
        if(mysqli_num_rows($run_sql) > 0){
            $code = rand(999999, 111111);

            //Generating random 6-digits number for OTP
            $insert_code = "UPDATE adminusertable SET code = $code WHERE email = '$email'";
            $run_query =  mysqli_query($con, $insert_code);

            //Email function for OTP code send
            if($run_query){
                $subject = "Seemaira's: Password Reset Code";
                $message = "Your 6-digits password reset code is $code";
                $sender = "From: rahul.kumar@wrmsglobal.com";
                if(mail($email, $subject, $message, $sender)){
                    $info = "We've sent a passwrod reset otp to your email - $email";
                    $_SESSION['info'] = $info;
                    $_SESSION['email'] = $email;
                    header('location: admin-newresetcode.php');
                    exit();
                }else{
                    $errors['otp-error'] = "Failed while sending code!";
                }
            }else{
                $errors['db-error'] = "Something went wrong!";
            }
        }else{
            $errors['email'] = "This email address does not exist!";
        }
    }

    //if user click check reset otp button
    if(isset($_POST['admin-newcheckresetotp'])){
        $_SESSION['info'] = "";
        //storing form values in the variables
        $otp_code = mysqli_real_escape_string($con, $_POST['admin-newresetotp']);

        //SQL query to retrieve adminusertable data
        $check_code = "SELECT * FROM adminusertable WHERE code = $otp_code";
        $code_res = mysqli_query($con, $check_code);
        if(mysqli_num_rows($code_res) > 0){
            $fetch_data = mysqli_fetch_assoc($code_res);
            $email = $fetch_data['email'];
            $_SESSION['email'] = $email;
            $info = "Please create a new password that you don't use on any other site.";
            $_SESSION['info'] = $info;
            header('location: admin-newpassword.php');
            exit();
        }else{
            $errors['otp-error'] = "You've entered incorrect code!";
        }
    }

    //if user click change password button
    if(isset($_POST['admin-newchangepassword'])){
        $_SESSION['info'] = "";

        //storing form values in the variables
        $password = mysqli_real_escape_string($con, $_POST['password']);
        $cpassword = mysqli_real_escape_string($con, $_POST['cpassword']);

        //logical condition to check password and confirm password should same or not
        if($password !== $cpassword){
            $errors['password'] = "Confirm password not matched!";
        }else{
            $code = 0;
            $email = $_SESSION['email']; //getting this email using session
            $encpass = password_hash($password, PASSWORD_BCRYPT);

            //SQL query to update adminusertable data
            $update_pass = "UPDATE adminusertable SET code = $code, password = '$encpass' WHERE email = '$email'";
            $run_query = mysqli_query($con, $update_pass);
            if($run_query){
                $info = "Your password changed. Now you can login with your new password.";
                $_SESSION['info'] = $info;
                header('Location: admin-newpasswordchanged.php');
            }else{
                $errors['db-error'] = "Failed to change your password!";
            }
        }
    }
    
   //if admin-newloginnow button click, then the Admin redirected to Admin Login Form
    if(isset($_POST['admin-newloginnow'])){
        header('Location: admin-newlogin.php');
    }
?>