<?php 
	$query2 = $con->query("SELECT * FROM member WHERE username='$user'");
	foreach ($query2 as $query)
	$member_id = $query['member_id'];

	$ref_amount = $up['amount'];
echo $ref_amount;
	$result = $con->query("SELECT SUM(amount) AS total FROM member_jobs WHERE member_id='$member_id'");
	$row = mysqli_fetch_array($result);
	$sum = $row['total'] + $ref_amount + $sum2 + $sum;
	echo "$".sprintf("%.2f",$sum);

	$up4 = $con->query("SELECT * FROM member_balance WHERE member_id='$mem_id'");
	$up5 = $up4->num_rows;
	if($up5 > 0)
	{
		$u2 = $con->query("UPDATE member_balance SET balance='$sum' WHERE member_id='$mem_id'");
	}
	else
	{
		$balance = $con->query("INSERT INTO member_balance(member_id,balance)VALUES('$mem_id','$sum')");
	}
	
?>