<div class="row">
    <div class="col-md-12">
        <div class="box">
            <div class="box-header">
                <h3 class="box-title">Tbl Contact Inquiries Listing</h3>
            	<div class="box-tools">
                    <a href="<?php echo site_url('tbl_contact_inquiry/add'); ?>" class="btn btn-success btn-sm">Add</a> 
                </div>
            </div>
            <div class="box-body">
                <table class="table table-striped">
                    <tr>
						<th>Contact Id</th>
						<th>Name</th>
						<th>Email</th>
						<th>Subject</th>
						<th>Type Of Business</th>
						<th>Mobile No</th>
						<th>Date Time</th>
						<th>Seen Status</th>
						<th>Country</th>
						<th>Appointment Date</th>
						<th>Appointment Time</th>
						<th>Message</th>
						<th>Actions</th>
                    </tr>
                    <?php foreach($tbl_contact_inquiries as $t){ ?>
                    <tr>
						<td><?php echo $t['contact_id']; ?></td>
						<td><?php echo $t['name']; ?></td>
						<td><?php echo $t['email']; ?></td>
						<td><?php echo $t['subject']; ?></td>
						<td><?php echo $t['type_of_business']; ?></td>
						<td><?php echo $t['mobile_no']; ?></td>
						<td><?php echo $t['date_time']; ?></td>
						<td><?php echo $t['seen_status']; ?></td>
						<td><?php echo $t['country']; ?></td>
						<td><?php echo $t['appointment_date']; ?></td>
						<td><?php echo $t['appointment_time']; ?></td>
						<td><?php echo $t['message']; ?></td>
						<td>
                            <a href="<?php echo site_url('tbl_contact_inquiry/edit/'.$t['contact_id']); ?>" class="btn btn-info btn-xs"><span class="fa fa-pencil"></span> Edit</a> 
                            <a href="<?php echo site_url('tbl_contact_inquiry/remove/'.$t['contact_id']); ?>" class="btn btn-danger btn-xs"><span class="fa fa-trash"></span> Delete</a>
                        </td>
                    </tr>
                    <?php } ?>
                </table>
                                
            </div>
        </div>
    </div>
</div>
