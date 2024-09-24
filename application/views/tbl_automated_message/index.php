<div class="row">
    <div class="col-md-12">
        <div class="box">
            <div class="box-header">
                <h3 class="box-title">Tbl Automated Message Listing</h3>
            	<div class="box-tools">
                    <a href="<?php echo site_url('tbl_automated_message/add'); ?>" class="btn btn-success btn-sm">Add</a> 
                </div>
            </div>
            <div class="box-body">
                <table class="table table-striped">
                    <tr>
						<th>Auto Id</th>
						<th>Fk Event Id</th>
						<th>Event Category Name</th>
						<th>Message Name</th>
						<th>Fk User Id</th>
						<th>Fk Business Id</th>
						<th>Reply Name</th>
						<th>Reply Email</th>
						<th>Message Body One</th>
						<th>Message Body Two</th>
						<th>Text Message</th>
						<th>Default Send Type</th>
						<th>Subject</th>
						<th>Status</th>
						<th>Actions</th>
                    </tr>
                    <?php foreach($tbl_automated_message as $t){ ?>
                    <tr>
						<td><?php echo $t['auto_id']; ?></td>
						<td><?php echo $t['fk_event_id']; ?></td>
						<td><?php echo $t['event_category_name']; ?></td>
						<td><?php echo $t['message_name']; ?></td>
						<td><?php echo $t['fk_user_id']; ?></td>
						<td><?php echo $t['fk_business_id']; ?></td>
						<td><?php echo $t['reply_name']; ?></td>
						<td><?php echo $t['reply_email']; ?></td>
						<td><?php echo $t['message_body_one']; ?></td>
						<td><?php echo $t['message_body_two']; ?></td>
						<td><?php echo $t['text_message']; ?></td>
						<td><?php echo $t['default_send_type']; ?></td>
						<td><?php echo $t['subject']; ?></td>
						<td><?php echo $t['status']; ?></td>
						<td>
                            <a href="<?php echo site_url('tbl_automated_message/edit/'.$t['auto_id']); ?>" class="btn btn-info btn-xs"><span class="fa fa-pencil"></span> Edit</a> 
                            <a href="<?php echo site_url('tbl_automated_message/remove/'.$t['auto_id']); ?>" class="btn btn-danger btn-xs"><span class="fa fa-trash"></span> Delete</a>
                        </td>
                    </tr>
                    <?php } ?>
                </table>
                                
            </div>
        </div>
    </div>
</div>
