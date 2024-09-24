<div class="row">
    <div class="col-md-12">
        <div class="box">
            <div class="box-header">
                <h3 class="box-title">Tbl Campaign Scheduler Listing</h3>
            	<div class="box-tools">
                    <a href="<?php echo site_url('tbl_campaign_scheduler/add'); ?>" class="btn btn-success btn-sm">Add</a> 
                </div>
            </div>
            <div class="box-body">
                <table class="table table-striped">
                    <tr>
						<th>Scheduler Id</th>
						<th>Uniq Tracker Id</th>
						<th>Fk Business Id</th>
						<th>Type</th>
						<th>Template Id</th>
						<th>Template Name</th>
						<th>Schedule Date</th>
						<th>Schedule Time</th>
						<th>Sent Time</th>
						<th>Reply To Name</th>
						<th>Reply To Email</th>
						<th>Client Id</th>
						<th>Subject</th>
						<th>Message Body</th>
						<th>Opened</th>
						<th>Booked</th>
						<th>Bounced</th>
						<th>Actions</th>
                    </tr>
                    <?php foreach($tbl_campaign_scheduler as $t){ ?>
                    <tr>
						<td><?php echo $t['scheduler_id']; ?></td>
						<td><?php echo $t['uniq_tracker_id']; ?></td>
						<td><?php echo $t['fk_business_id']; ?></td>
						<td><?php echo $t['type']; ?></td>
						<td><?php echo $t['template_id']; ?></td>
						<td><?php echo $t['template_name']; ?></td>
						<td><?php echo $t['schedule_date']; ?></td>
						<td><?php echo $t['schedule_time']; ?></td>
						<td><?php echo $t['sent_time']; ?></td>
						<td><?php echo $t['reply_to_name']; ?></td>
						<td><?php echo $t['reply_to_email']; ?></td>
						<td><?php echo $t['client_id']; ?></td>
						<td><?php echo $t['subject']; ?></td>
						<td><?php echo $t['message_body']; ?></td>
						<td><?php echo $t['opened']; ?></td>
						<td><?php echo $t['booked']; ?></td>
						<td><?php echo $t['bounced']; ?></td>
						<td>
                            <a href="<?php echo site_url('tbl_campaign_scheduler/edit/'.$t['scheduler_id']); ?>" class="btn btn-info btn-xs"><span class="fa fa-pencil"></span> Edit</a> 
                            <a href="<?php echo site_url('tbl_campaign_scheduler/remove/'.$t['scheduler_id']); ?>" class="btn btn-danger btn-xs"><span class="fa fa-trash"></span> Delete</a>
                        </td>
                    </tr>
                    <?php } ?>
                </table>
                                
            </div>
        </div>
    </div>
</div>
