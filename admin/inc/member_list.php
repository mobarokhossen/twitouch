<?php
$query = $con->query("SELECT * FROM member");
if ($query) {
    foreach ($query as $take) {
        ?>
        <tr>
            <td><?php echo $take['member_id']; ?></td>
            <td><?php echo $take['name']; ?></td>
            <td><?php echo $take['username']; ?></td>
            <td><?php echo $take['approve_date']; ?></td>
            <td><?php echo $take['join_date']; ?></td>
            <td><?php echo $take['status']; ?></td>
            <td><a href="#" class="btn btn-inline">Block</a></td>
            <td><a href="#" class="btn btn-inline">Member Panel</a></td>
        </tr>
        <?php
    }
}
?>