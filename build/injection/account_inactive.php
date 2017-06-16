<?php
	if(isset($_POST['submit']))
	{
		$username = $_POST['username'];
		$password = md5($_POST['password']);

		$date = date("Y/m/d");
		$approval = 'no';
		$take = $con->query("SELECT * FROM users WHERE username = '$username' AND password = '$password' AND name='$user'");
		$next = $take->num_rows;
		
		$member2 = $con->query("SELECT * FROM member WHERE username = '$username'");

		foreach ($member2 as $member)
		$member_id = $member['member_id'];

		if($next == 0)
		{
			echo "<script>alert('Username or Password Incorrect')</script>";
		}
		else
		{
			$q =  $con->query("INSERT INTO inactive_request(member_id,username,request_date,approval)VALUES('$member_id','$username','$date','$approval')");
			if(!$q)
			{
				echo "<script>alert('Error!!')</script>";
			}
			else
			{
				echo "<script>alert('Success')</script>";
			}
		}
	}

?>