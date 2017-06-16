<?php
	if(isset($_POST['submit']))
	{
		$username = $_POST['username'];
		$password = md5($_POST['password']);
		$reciever_id = $_POST['reciever_id'];
		$amount = $_POST['amount'];
		$message = $_POST['message'];
		$date = date("Y/m/d");
		
		$collect2 = $con->query("SELECT * FROM member_balance WHERE member_id='$member_id'");

		foreach ($collect2 as $collect)
		$current = $collect['balance'];
		
		$match2 = $con->query("SELECT * FROM users WHERE username='$username' AND password='$password'");
		$match = $match2->num_rows;
		if($match == 1)
		{
			if($current > $amount)
			{
				$new = $current - $amount;
				$update1 = $con->query("INSERT INTO transfer_history(member_id,reciever_id,amount,message,transfer_date)VALUES('$member_id','$reciever_id','$amount','$message','$date')") or die(mysqli_error());
				$update2 = $con->query("UPDATE member_balance SET balance='$new' WHERE member_id='$member_id'") or die(mysqli_error());
				
				if(!$update1 or !$update2)
				{
					echo "<script>alert('Error!!!!')</script>";
				}
				else
				{
					echo "<script>alert('Transfer Success')</script>";
				}
			}
			else
			{
				echo "<script>alert('Enter Right Amount')</script>";
			}
		}
		else
		{
			echo "<script>alert('Username or Password Incorrect')</script>";
		}
	}
?>