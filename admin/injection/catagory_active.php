<?php

	include "../db.php";
	if(isset($_GET['catagory_id']))
	{
		$catagory_id = $_GET['catagory_id'];
		$status = "Active";
		$q = mysqli_query($con,"UPDATE job_catagory SET status='$status' WHERE catagory_id='$catagory_id'");
		if(!$q)
		{
			echo "<script>alert('Error!!!')</script>";
			echo "<script>window.location.href='../job_catagory.php'</script>";
		}
		else
		{
			echo "<script>alert('Success')</script>";
			echo "<script>window.location.href='../job_catagory.php'</script>";
		}
	}
?>