<?php

$query = $con->query("select * from job WHERE job_id NOT IN (SELECT job_id FROM member_jobs WHERE member_id='$member_id')");
if ($query) {
    foreach ($query as $take)
        $jobId = $take['job_id'];

    {
        ?>
        <tr>
            <td><?php echo $take['catagory']; ?></td>
            <td><?php echo $take['question']; ?></td>
            <td><?php echo $take['payment']; ?></td>
            <td><a href="<?php echo "job_area.php?job_id=$jobId&member_id=$member_id"; ?>"><input type="button"
                                                                                                  class="btn btn-rounded btn-inline"
                                                                                                  value="Do This Job"/></a>
            </td>
        </tr>

        <?php
    }
}
?>
