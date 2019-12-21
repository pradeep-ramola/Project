<?php
	session_start();
	echo "Logout successfull";
   session_destroy();
   error_reporting(0);
   header('Refresh: 1; URL = Homepagelogout.php');
?>