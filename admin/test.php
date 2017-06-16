<?php
session_start();
require_once ('db.php"');
		
		$pay2 = $con->query("SELECT payment FROM job_catagory WHERE catagory='$catagory'");
		print_r($pay2[0]);
		
?>