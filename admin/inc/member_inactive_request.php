<?php
$query = $con->query("SELECT * FROM inactive_request WHERE approval='no'");
if ($query) {
    foreach ($query as $take) {
        $memberid = $take['member_id'];
        ?>

        <tr>
            <td><?php echo $take['member_id']; ?></td>
            <td><?php echo $take['request_date']; ?></td>
            <td>
                <div class="btn-group">
                    <button type="button" class="btn btn-inline dropdown-toggle" data-toggle="dropdown"
                            aria-haspopup="true" aria-expanded="false">
                        Select Option
                    </button>
                    <div class="dropdown-menu">
                        <a class="dropdown-item"
                           href="<?php echo "injection/inactive_approve.php?member_id=$memberid"; ?>">Approve</a>
                        <a class="dropdown-item"
                           href="<?php echo "injection/inactive_cancel.php?member_id=$memberid"; ?>">Cancel</a>
                    </div>
                </div>
            </td>
        </tr>
        <?php
    }
}
?>
