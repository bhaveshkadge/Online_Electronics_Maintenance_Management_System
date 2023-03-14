<?php
session_start();		//Start current session
session_unset();		//Unset current session data
session_destroy();		//destroy current session
header('location: admin-newlogin.php');		//After destroy go to Admin Login Form
?>