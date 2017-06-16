<?php

	$today = date("Y/m/d");
	$result2 = $con->query("SELECT SUM(amount) AS total FROM member_jobs WHERE job_date='$today' AND ref_id='$mem_id'");
	$row2 = $result2->fetch_array();
	$sum2 = sprintf("%.2f",$row2['total']);
	
	$update2 = $con->query("SELECT * FROM member_ref WHERE member_id='$mem_id'");
	foreach ($update2 as $update)
	$my_rank = $update['ref_rank'];
	$my_ref = $update['ref_id'];
	//$my_amount = $update['amount'];
	
	if($my_rank == "1")
	{
		$amount2 = $sum2 * 3/100;
		include "tiny_bomb.php";
	}
	else if($my_rank == "2")
	{
		$amount2 = $sum2 * 2/100;
		include "tiny_bomb.php";
	}
	else if($my_rank == "3")
	{
		$amount2 = $sum2 * 1/100;
		include "tiny_bomb.php";
	}
	else if($my_rank == "4")
	{
		$amount2 = $sum2 * 1/100;
		include "tiny_bomb.php";
	}
	else if($my_rank == "5")
	{
		$amount2 = $sum2 * 1/100;
		include "tiny_bomb.php";
	}
	else if($my_rank == "6")
	{
		$amount2 = $sum2 * 1/100;
		include "tiny_bomb.php";
	}
	else if($my_rank == "7")
	{
		$amount2 = $sum2 * 1/100;
		include "tiny_bomb.php";
	}
	else if($my_rank == "8")
	{
		$amount2 = $sum2 * 1/100;
		include "tiny_bomb.php";
	}
	else if($my_rank == "9")
	{
		$amount2 = $sum2 * 0.5/100;
		include "tiny_bomb.php";
	}
	else if($my_rank == "10")
	{
		$amount2 = $sum2 * 0.5/100;
		include "tiny_bomb.php";
	}
	else
	{
		echo " ";
	}
	
?>