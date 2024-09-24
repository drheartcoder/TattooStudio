<div class="row">
    <div class="col-md-12">
        <div class="box">
            <div class="box-header">
                <h3 class="box-title">Tbl User Master Listing</h3>
            	<div class="box-tools">
                    <a href="<?php echo site_url('tbl_user_master/add'); ?>" class="btn btn-success btn-sm">Add</a> 
                </div>
            </div>
            <div class="box-body">
                <table class="table table-striped">
                    <tr>
						<th>User Id</th>
						<th>Password</th>
						<th>Fname</th>
						<th>Lname</th>
						<th>Email Id</th>
						<th>Giftcard Remaining Amount</th>
						<th>Zipcode</th>
						<th>Phone</th>
						<th>Terms Check</th>
						<th>User Type</th>
						<th>Confirm Code</th>
						<th>Is Verified</th>
						<th>Is Special</th>
						<th>Is Assured</th>
						<th>Is Featured</th>
						<th>User Status</th>
						<th>User City</th>
						<th>User State</th>
						<th>User Country</th>
						<th>Cdate</th>
						<th>Setup Status</th>
						<th>Gender</th>
						<th>Birthdate</th>
						<th>Profile Image</th>
						<th>Accredited Batch Request</th>
						<th>Accredited Batch Info</th>
						<th>Is First Time</th>
						<th>Address1</th>
						<th>Address2</th>
						<th>Register Type</th>
						<th>City Id</th>
						<th>Country Id</th>
						<th>State Id</th>
						<th>Cover Img</th>
						<th>Actions</th>
                    </tr>
                    <?php foreach($tbl_user_master as $t){ ?>
                    <tr>
						<td><?php echo $t['user_id']; ?></td>
						<td><?php echo $t['password']; ?></td>
						<td><?php echo $t['fname']; ?></td>
						<td><?php echo $t['lname']; ?></td>
						<td><?php echo $t['email_id']; ?></td>
						<td><?php echo $t['giftcard_remaining_amount']; ?></td>
						<td><?php echo $t['zipcode']; ?></td>
						<td><?php echo $t['phone']; ?></td>
						<td><?php echo $t['terms_check']; ?></td>
						<td><?php echo $t['user_type']; ?></td>
						<td><?php echo $t['confirm_code']; ?></td>
						<td><?php echo $t['is_verified']; ?></td>
						<td><?php echo $t['is_special']; ?></td>
						<td><?php echo $t['is_assured']; ?></td>
						<td><?php echo $t['is_featured']; ?></td>
						<td><?php echo $t['user_status']; ?></td>
						<td><?php echo $t['user_city']; ?></td>
						<td><?php echo $t['user_state']; ?></td>
						<td><?php echo $t['user_country']; ?></td>
						<td><?php echo $t['cdate']; ?></td>
						<td><?php echo $t['setup_status']; ?></td>
						<td><?php echo $t['gender']; ?></td>
						<td><?php echo $t['birthdate']; ?></td>
						<td><?php echo $t['profile_image']; ?></td>
						<td><?php echo $t['accredited_batch_request']; ?></td>
						<td><?php echo $t['accredited_batch_info']; ?></td>
						<td><?php echo $t['is_first_time']; ?></td>
						<td><?php echo $t['address1']; ?></td>
						<td><?php echo $t['address2']; ?></td>
						<td><?php echo $t['register_type']; ?></td>
						<td><?php echo $t['city_id']; ?></td>
						<td><?php echo $t['country_id']; ?></td>
						<td><?php echo $t['state_id']; ?></td>
						<td><?php echo $t['cover_img']; ?></td>
						<td>
                            <a href="<?php echo site_url('tbl_user_master/edit/'.$t['user_id']); ?>" class="btn btn-info btn-xs"><span class="fa fa-pencil"></span> Edit</a> 
                            <a href="<?php echo site_url('tbl_user_master/remove/'.$t['user_id']); ?>" class="btn btn-danger btn-xs"><span class="fa fa-trash"></span> Delete</a>
                        </td>
                    </tr>
                    <?php } ?>
                </table>
                                
            </div>
        </div>
    </div>
</div>
