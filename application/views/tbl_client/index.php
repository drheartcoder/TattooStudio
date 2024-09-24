<div class="row">
    <div class="col-md-12">
        <div class="box">
            <div class="box-header">
                <h3 class="box-title">Tbl Client Listing</h3>
            	<div class="box-tools">
                    <a href="<?php echo site_url('tbl_client/add'); ?>" class="btn btn-success btn-sm">Add</a> 
                </div>
            </div>
            <div class="box-body">
                <table class="table table-striped">
                    <tr>
						<th>Client Id</th>
						<th>Fk Business Id</th>
						<th>Fk User Id</th>
						<th>Fname</th>
						<th>Lname</th>
						<th>Email</th>
						<th>Mobile Phone</th>
						<th>Home Phone</th>
						<th>Work Phone</th>
						<th>Profile Image</th>
						<th>Client Since</th>
						<th>Fk Location Id</th>
						<th>Fk Staff Id</th>
						<th>Contact Preference</th>
						<th>Date Of Birth</th>
						<th>Gender</th>
						<th>Is Booking</th>
						<th>Client Notes</th>
						<th>Edited On</th>
						<th>Is Delete</th>
						<th>Actions</th>
                    </tr>
                    <?php foreach($tbl_client as $t){ ?>
                    <tr>
						<td><?php echo $t['client_id']; ?></td>
						<td><?php echo $t['fk_business_id']; ?></td>
						<td><?php echo $t['fk_user_id']; ?></td>
						<td><?php echo $t['fname']; ?></td>
						<td><?php echo $t['lname']; ?></td>
						<td><?php echo $t['email']; ?></td>
						<td><?php echo $t['mobile_phone']; ?></td>
						<td><?php echo $t['home_phone']; ?></td>
						<td><?php echo $t['work_phone']; ?></td>
						<td><?php echo $t['profile_image']; ?></td>
						<td><?php echo $t['client_since']; ?></td>
						<td><?php echo $t['fk_location_id']; ?></td>
						<td><?php echo $t['fk_staff_id']; ?></td>
						<td><?php echo $t['contact_preference']; ?></td>
						<td><?php echo $t['date_of_birth']; ?></td>
						<td><?php echo $t['gender']; ?></td>
						<td><?php echo $t['is_booking']; ?></td>
						<td><?php echo $t['client_notes']; ?></td>
						<td><?php echo $t['edited_on']; ?></td>
						<td><?php echo $t['is_delete']; ?></td>
						<td>
                            <a href="<?php echo site_url('tbl_client/edit/'.$t['client_id']); ?>" class="btn btn-info btn-xs"><span class="fa fa-pencil"></span> Edit</a> 
                            <a href="<?php echo site_url('tbl_client/remove/'.$t['client_id']); ?>" class="btn btn-danger btn-xs"><span class="fa fa-trash"></span> Delete</a>
                        </td>
                    </tr>
                    <?php } ?>
                </table>
                                
            </div>
        </div>
    </div>
</div>
