<div class="row">
    <div class="col-md-12">
        <div class="box">
            <div class="box-header">
                <h3 class="box-title">Tbl Automated Event Listing</h3>
            	<div class="box-tools">
                    <a href="<?php echo site_url('tbl_automated_event/add'); ?>" class="btn btn-success btn-sm">Add</a> 
                </div>
            </div>
            <div class="box-body">
                <table class="table table-striped">
                    <tr>
						<th>Event Type Id</th>
						<th>Event Category Name</th>
						<th>Event Name</th>
						<th>Event Sub Title</th>
						<th>Message Body One</th>
						<th>Message Body Two</th>
						<th>Subject</th>
						<th>Actions</th>
                    </tr>
                    <?php foreach($tbl_automated_event as $t){ ?>
                    <tr>
						<td><?php echo $t['event_type_id']; ?></td>
						<td><?php echo $t['event_category_name']; ?></td>
						<td><?php echo $t['event_name']; ?></td>
						<td><?php echo $t['event_sub_title']; ?></td>
						<td><?php echo $t['message_body_one']; ?></td>
						<td><?php echo $t['message_body_two']; ?></td>
						<td><?php echo $t['subject']; ?></td>
						<td>
                            <a href="<?php echo site_url('tbl_automated_event/edit/'.$t['event_type_id']); ?>" class="btn btn-info btn-xs"><span class="fa fa-pencil"></span> Edit</a> 
                            <a href="<?php echo site_url('tbl_automated_event/remove/'.$t['event_type_id']); ?>" class="btn btn-danger btn-xs"><span class="fa fa-trash"></span> Delete</a>
                        </td>
                    </tr>
                    <?php } ?>
                </table>
                                
            </div>
        </div>
    </div>
</div>
