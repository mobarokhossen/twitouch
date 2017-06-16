<?php
	if(isset($_POST['submit']))
	{
		$answer = $_POST['answer'];
		$target2 = $con->query("SELECT * FROM job WHERE job_id='$job_id'");
		foreach ($target2 as $target )
		if($query['question'] == $target['question'])
		{
			if($answer == $target['answer'])
			{
				$amount = $target['payment'];
				$date = date("Y/m/d");
				$in = $con->query("INSERT INTO member_jobs(job_id,member_id,amount,job_date)VALUES('$job_id','$member_id','$amount','$date')");
				if(!$in)
				{
					echo "<script>alert('Error!! Please go back to Job List')</script>";
				}
				else
				{
					echo "<script>window.location.href='jobs.php'</script>";
				}
			}
		}		
	}

?>