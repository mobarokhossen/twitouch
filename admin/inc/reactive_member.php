<?php
$query = $con->query("SELECT * FROM member WHERE status='Inactive'");
if ($query) {
    foreach ($query as $take) {
        $memberid = $take['member_id'];
        ?>
        <tr>
            <td><?php echo $memberid; ?></td>
            <td><?php echo $take['ref_id']; ?></td>
            <td>
                <?php
                $find2 = $con->query("SELECT * FROM inactive_request WHERE member_id='$memberid'");
                foreach ($find2 as $info) {
                    echo $info['inactive_date'];
                }
                ?>
            </td>
            <td><a href="<?php echo "injection/reactive_member.php?member_id=$memberid"; ?>"><input type="button"
                                                                                                    name="order"
                                                                                                    class="btn btn-rounded btn-inline"
                                                                                                    value="Reactive"/></a>
            </td>
        </tr>

        <?php
    }
}
?>