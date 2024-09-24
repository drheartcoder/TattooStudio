<div class="row">
    <div class="col-md-12">
        <div class="box">
            <div class="box-header">
                <h3 class="box-title">Tbl Notifications Listing</h3>
            	<div class="box-tools">
                    <a href="<?php echo site_url('tbl_notification/add'); ?>" class="btn btn-success btn-sm">Add</a> 
                </div>
            </div>
            <div class="box-body">
                <table class="table table-striped">
                    <tr>
						<th>Notification Id</th>
						<th>Sender Id</th>
						<th>Receiver Id</th>
						<th>To Staff Id</th>
						<th>Notification</th>
						<th>Booking Type</th>
						<th>Walkin Id</th>
						<th>Links</th>
						<th>Is Read</th>
						<th>Admin Read</th>
						<th>Date</th>
						<th>Actions</th>
                    </tr>
                    <?php foreach($tbl_notifications as $t){ ?>
                    <tr>
						<td><?php echo $t['notification_id']; ?></td>
						<td><?php echo $t['sender_id']; ?></td>
						<td><?php echo $t['receiver_id']; ?></td>
						<td><?php echo $t['to_staff_id']; ?></td>
						<td><?php echo $t['notification']; ?></td>
						<td><?php echo $t['booking_type']; ?></td>
						<td><?php echo $t['walkin_id']; ?></td>
						<td><?php echo $t['links']; ?></td>
						<td><?php echo $t['is_read']; ?></td>
						<td><?php echo $t['admin_read']; ?></td>
						<td><?php echo $t['date']; ?></td>
						<td>
                            <a href="<?php echo site_url('tbl_notification/edit/'.$t['notification_id']); ?>" class="btn btn-info btn-xs"><span class="fa fa-pencil"></span> Edit</a> 
                            <a href="<?php echo site_url('tbl_notification/remove/'.$t['notification_id']); ?>" class="btn btn-danger btn-xs"><span class="fa fa-trash"></span> Delete</a>
                        </td>
                    </tr>
                    <?php } ?>
                </table>
                                
            </div>
        </div>
    </div>
</div>
