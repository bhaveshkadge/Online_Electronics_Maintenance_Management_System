<?php
session_start();		//Start current session				
session_destroy();		//destroy current session
header('location: homepage.php');	//After destroy go to Homepage
?>