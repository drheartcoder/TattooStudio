<div class="row">
    <div class="col-md-12">
        <div class="box">
            <div class="box-header">
                <h3 class="box-title">Tbl Business Settings Listing</h3>
            	<div class="box-tools">
                    <a href="<?php echo site_url('tbl_business_setting/add'); ?>" class="btn btn-success btn-sm">Add</a> 
                </div>
            </div>
            <div class="box-body">
                <table class="table table-striped">
                    <tr>
						<th>Settings Id</th>
						<th>Fk Business Id</th>
						<th>Calender System</th>
						<th>Booking Time Interval</th>
						<th>Advance Marketplace Notice</th>
						<th>Advance Booking Time</th>
						<th>Advance Booking Time Type</th>
						<th>Booking Entity</th>
						<th>Booking Auto Accept</th>
						<th>Marketplace Booking Email</th>
						<th>Marketplace Booking Call No</th>
						<th>Marketplace Booking Text No</th>
						<th>Cancel Time</th>
						<th>Communicator Options</th>
						<th>Direct Staff Member Booking</th>
						<th>Price Vary By Location</th>
						<th>Scheduler Access Level</th>
						<th>Track Compensation</th>
						<th>Clock In Out</th>
						<th>Actions</th>
                    </tr>
                    <?php foreach($tbl_business_settings as $t){ ?>
                    <tr>
						<td><?php echo $t['settings_id']; ?></td>
						<td><?php echo $t['fk_business_id']; ?></td>
						<td><?php echo $t['calender_system']; ?></td>
						<td><?php echo $t['booking_time_interval']; ?></td>
						<td><?php echo $t['advance_marketplace_notice']; ?></td>
						<td><?php echo $t['advance_booking_time']; ?></td>
						<td><?php echo $t['advance_booking_time_type']; ?></td>
						<td><?php echo $t['booking_entity']; ?></td>
						<td><?php echo $t['booking_auto_accept']; ?></td>
						<td><?php echo $t['marketplace_booking_email']; ?></td>
						<td><?php echo $t['marketplace_booking_call_no']; ?></td>
						<td><?php echo $t['marketplace_booking_text_no']; ?></td>
						<td><?php echo $t['cancel_time']; ?></td>
						<td><?php echo $t['communicator_options']; ?></td>
						<td><?php echo $t['direct_staff_member_booking']; ?></td>
						<td><?php echo $t['price_vary_by_location']; ?></td>
						<td><?php echo $t['scheduler_access_level']; ?></td>
						<td><?php echo $t['track_compensation']; ?></td>
						<td><?php echo $t['clock_in_out']; ?></td>
						<td>
                            <a href="<?php echo site_url('tbl_business_setting/edit/'.$t['settings_id']); ?>" class="btn btn-info btn-xs"><span class="fa fa-pencil"></span> Edit</a> 
                            <a href="<?php echo site_url('tbl_business_setting/remove/'.$t['settings_id']); ?>" class="btn btn-danger btn-xs"><span class="fa fa-trash"></span> Delete</a>
                        </td>
                    </tr>
                    <?php } ?>
                </table>
                                
            </div>
        </div>
    </div>
</div>
