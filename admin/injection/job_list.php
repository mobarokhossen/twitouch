<?php
$query = $con->query("SELECT * FROM job");
if ($query) {
    foreach ($query as $take) {
        ?>

        <tr>
            <td><?php echo $take['job_id']; ?></td>
            <td><?php echo $take['catagory']; ?></td>
            <td><?php echo $take['question']; ?></td>
            <td><?php echo $take['answer']; ?></td>
            <td><a href="#" class="btn btn-inline">Edit</a></td>
        </tr>
        <?php
    }
}
?>