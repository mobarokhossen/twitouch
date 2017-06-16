<?php
$today = date("Y/m/d");
$result2 = $con->query("SELECT SUM(amount) AS total FROM member_jobs WHERE job_date='$today' AND ref_id='$mem_id'");
foreach ($result2 as $row2)
    $sum2 = sprintf("%.2f", $row2['total']);
echo "$" . $sum2;
?>