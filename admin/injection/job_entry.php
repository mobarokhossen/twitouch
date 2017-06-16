<?php
	if(isset($_POST['submit']))
	{
		$catagory = $_POST['catagory'];
		$question = $_POST['question'];
		$answer = $_POST['answer'];
		
		$pay2 = mysqli_query($con,"SELECT * FROM job_catagory WHERE catagory='$catagory'");
		$pay = mysqli_num_rows($pay2);
		$pay = mysqli_fetch_assoc($pay2);
		$payment = $pay[payment];
		
		$add3 = mysqli_query($con,"INSERT INTO job(catagory,question,answer,payment)VALUES('$catagory','$question','$answer','$payment')");
			if(!$add3)
			{
				echo "<script>alert('Database Error')</script>";
			}
			else
			{
				echo "<script>alert('Success')</script>";
			}
	}
?>