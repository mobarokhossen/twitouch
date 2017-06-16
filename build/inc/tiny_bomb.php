<?php
	$amount = $amount2 + $my_amount;
		$up2 = $con->query("SELECT * FROM ref_earn WHERE member_id='$mem_id'");

		if($up2->num_rows > 0)
		{
			$u = $con->query("UPDATE ref_earn SET amount='$amount' WHERE member_id='$mem_id'");
		}
		else
		{
			$u2 = $con->query("INSERT INTO ref_earn(member_id,amount)VALUES('$mem_id','$amount')");
		}
?>