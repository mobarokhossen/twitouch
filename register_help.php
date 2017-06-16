<?php
require_once('admin/db.php');

if(isset($_POST['register']))
		{
			$name = $_POST['name'];
			$username = $_POST['username'];
			$password = $_POST['password'];
			$password2 = $_POST['password2'];
			$email = $_POST['email'];
			$ref_id = $_POST['ref_id'];
			$role = "user";
			$status = "Inactive";
			$join_date = DATE("Y/m/d");
			
			if($password == $password2)
			{
				$pass = md5($password);
			}
			else
			{
				echo "<script>alert('Password Doesnt match')</script>";
				die();
			}
			$query = $con->query("SELECT * FROM users WHERE username = '$username'")or die (mysqli_error($con));
			$query2 = mysqli_num_rows($query);

			if($query2 > 0)
			{
				echo "<script>alert('Username Already Exits')</script>";
			}
			else
			{

				$q = $con->query("INSERT INTO users(name,username,password,email,ref_id,role,status)VALUES('$name','$username','$pass','$email','$ref_id','$role','$status')");
				$q2 = $con->query("INSERT INTO member(name,username,email,ref_id,join_date,status)VALUES('$name','$username','$email','$ref_id','$join_date','$status')");
				if(empty($q) or empty($q2))
				{
					echo "<script>alert('Database Error')</script>";
				}
				else
				{
					$rank = $con->query("SELECT * FROM member WHERE username='$username'");
					$rank2 = mysqli_num_rows($rank);
                    foreach($rank as $rank2)
					$id = $rank2['member_id'];
					
					$rowSQL = $con->query("SELECT MAX(ref_rank) AS max FROM member_ref WHERE ref_id='$ref_id'" );
					$row_num = mysqli_fetch_array( $rowSQL );
					$largestNumber = $row_num['max'];
					$ref_rank = $largestNumber + 1;
					
					$into = $con->query("INSERT INTO member_ref(member_id,ref_id,ref_rank)VALUES('$id','$ref_id','$ref_rank')");
					
					echo "<script>alert('Registration Successfull')</script>";
				}
			}
		}
?>

