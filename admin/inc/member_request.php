<?php
$query = $con->query("SELECT * FROM member WHERE status='Inactive'");
if($query)
{
    foreach($query as $take){
       $Mid = $take['member_id'];
?>
	<tr>
		<td><?php echo $take['member_id'];?></td>
		<td><?php echo $take['name'];?></td>
		<td><?php echo $take['username'];?></td>
		<td><?php echo $take['email'];?></td>
		<td><?php echo $take['join_date'];?></td>
		<td>
			<div class="btn-group">
				<button type="button" class="btn btn-inline dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
					Select Option
				</button>
				<div class="dropdown-menu">
					<a class="dropdown-item" href="<?php echo "injection/member_approve.php?member_id=$Mid" ;?>">Approve</a>
					<a class="dropdown-item" href="<?php echo "injection/member_cancel.php?member_id=$Mid" ;?>">Cancel</a>
				</div>
			</div>
		</td>
	</tr>

<?php
		}
	}
?>