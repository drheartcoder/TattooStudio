<div class="row">
    <div class="col-md-12">
        <div class="box">
            <div class="box-header">
                <h3 class="box-title">Tbl Business Staff Listing</h3>
            	<div class="box-tools">
                    <a href="<?php echo site_url('tbl_business_staff/add'); ?>" class="btn btn-success btn-sm">Add</a> 
                </div>
            </div>
            <div class="box-body">
                <table class="table table-striped">
                    <tr>
						<th>Staff Id</th>
						<th>Staff Password</th>
						<th>Fk Business Id</th>
						<th>Staff Profile Img</th>
						<th>Staff Name</th>
						<th>Staff Lname</th>
						<th>Staff Title</th>
						<th>Staff Email</th>
						<th>Available Days</th>
						<th>Staff Role</th>
						<th>Staff Status</th>
						<th>Track Compensation</th>
						<th>Regular Pay Per Hour Amt</th>
						<th>Regular Percent Revenue</th>
						<th>Overtime Pay Per Hour Amt</th>
						<th>Overtime Percent Revenue</th>
						<th>Email Me</th>
						<th>Call Me</th>
						<th>Text Me</th>
						<th>Is Delete</th>
						<th>Staff Birthdate</th>
						<th>Staff Contact Number</th>
						<th>Confirm Code</th>
						<th>Staff Tattoo Img</th>
						<th>Managed Location</th>
						<th>Served Locations</th>
						<th>About Me Point 1</th>
						<th>About Me Point 2</th>
						<th>Services Served</th>
						<th>Events Served</th>
						<th>Actions</th>
                    </tr>
                    <?php foreach($tbl_business_staff as $t){ ?>
                    <tr>
						<td><?php echo $t['staff_id']; ?></td>
						<td><?php echo $t['staff_password']; ?></td>
						<td><?php echo $t['fk_business_id']; ?></td>
						<td><?php echo $t['staff_profile_img']; ?></td>
						<td><?php echo $t['staff_name']; ?></td>
						<td><?php echo $t['staff_lname']; ?></td>
						<td><?php echo $t['staff_title']; ?></td>
						<td><?php echo $t['staff_email']; ?></td>
						<td><?php echo $t['available_days']; ?></td>
						<td><?php echo $t['staff_role']; ?></td>
						<td><?php echo $t['staff_status']; ?></td>
						<td><?php echo $t['track_compensation']; ?></td>
						<td><?php echo $t['regular_pay_per_hour_amt']; ?></td>
						<td><?php echo $t['regular_percent_revenue']; ?></td>
						<td><?php echo $t['overtime_pay_per_hour_amt']; ?></td>
						<td><?php echo $t['overtime_percent_revenue']; ?></td>
						<td><?php echo $t['email_me']; ?></td>
						<td><?php echo $t['call_me']; ?></td>
						<td><?php echo $t['text_me']; ?></td>
						<td><?php echo $t['is_delete']; ?></td>
						<td><?php echo $t['staff_birthdate']; ?></td>
						<td><?php echo $t['staff_contact_number']; ?></td>
						<td><?php echo $t['confirm_code']; ?></td>
						<td><?php echo $t['staff_tattoo_img']; ?></td>
						<td><?php echo $t['managed_location']; ?></td>
						<td><?php echo $t['served_locations']; ?></td>
						<td><?php echo $t['about_me_point_1']; ?></td>
						<td><?php echo $t['about_me_point_2']; ?></td>
						<td><?php echo $t['services_served']; ?></td>
						<td><?php echo $t['events_served']; ?></td>
						<td>
                            <a href="<?php echo site_url('tbl_business_staff/edit/'.$t['staff_id']); ?>" class="btn btn-info btn-xs"><span class="fa fa-pencil"></span> Edit</a> 
                            <a href="<?php echo site_url('tbl_business_staff/remove/'.$t['staff_id']); ?>" class="btn btn-danger btn-xs"><span class="fa fa-trash"></span> Delete</a>
                        </td>
                    </tr>
                    <?php } ?>
                </table>
                                
            </div>
        </div>
    </div>
</div>
