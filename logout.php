<?php
	session_start();
	 
   session_destroy();
   error_reporting(0);
   header('Refresh: 1; URL = index.html');
?>