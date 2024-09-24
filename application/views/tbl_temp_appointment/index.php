<div class="row">
    <div class="col-md-12">
        <div class="box">
            <div class="box-header">
                <h3 class="box-title">Tbl Temp Appointment Listing</h3>
            	<div class="box-tools">
                    <a href="<?php echo site_url('tbl_temp_appointment/add'); ?>" class="btn btn-success btn-sm">Add</a> 
                </div>
            </div>
            <div class="box-body">
                <table class="table table-striped">
                    <tr>
						<th>ID</th>
						<th>Unique Userid</th>
						<th>Login Userid</th>
						<th>Business Id</th>
						<th>Service Menu Id</th>
						<th>Tattoo Id</th>
						<th>Category Id</th>
						<th>Sub Cat Id</th>
						<th>Style Id</th>
						<th>Color Id</th>
						<th>Size Id</th>
						<th>Size</th>
						<th>Staff Id</th>
						<th>Availibility Id</th>
						<th>Cover Up</th>
						<th>Previous Tattoo Img</th>
						<th>Reference Tattoo</th>
						<th>Appointment Date</th>
						<th>Charges</th>
						<th>Esitmated Amount</th>
						<th>Amount To Be Pay Online</th>
						<th>Start Time</th>
						<th>End Time</th>
						<th>Location</th>
						<th>Duration</th>
						<th>Booking Desc</th>
						<th>Medical Condition</th>
						<th>Sub Category</th>
						<th>Medical Description</th>
						<th>Actions</th>
                    </tr>
                    <?php foreach($tbl_temp_appointment as $t){ ?>
                    <tr>
						<td><?php echo $t['id']; ?></td>
						<td><?php echo $t['unique_userid']; ?></td>
						<td><?php echo $t['login_userid']; ?></td>
						<td><?php echo $t['business_id']; ?></td>
						<td><?php echo $t['service_menu_id']; ?></td>
						<td><?php echo $t['tattoo_id']; ?></td>
						<td><?php echo $t['category_id']; ?></td>
						<td><?php echo $t['sub_cat_id']; ?></td>
						<td><?php echo $t['style_id']; ?></td>
						<td><?php echo $t['color_id']; ?></td>
						<td><?php echo $t['size_id']; ?></td>
						<td><?php echo $t['size']; ?></td>
						<td><?php echo $t['staff_id']; ?></td>
						<td><?php echo $t['availibility_id']; ?></td>
						<td><?php echo $t['cover_up']; ?></td>
						<td><?php echo $t['previous_tattoo_img']; ?></td>
						<td><?php echo $t['reference_tattoo']; ?></td>
						<td><?php echo $t['appointment_date']; ?></td>
						<td><?php echo $t['charges']; ?></td>
						<td><?php echo $t['esitmated_amount']; ?></td>
						<td><?php echo $t['amount_to_be_pay_online']; ?></td>
						<td><?php echo $t['start_time']; ?></td>
						<td><?php echo $t['end_time']; ?></td>
						<td><?php echo $t['location']; ?></td>
						<td><?php echo $t['duration']; ?></td>
						<td><?php echo $t['booking_desc']; ?></td>
						<td><?php echo $t['medical_condition']; ?></td>
						<td><?php echo $t['sub_category']; ?></td>
						<td><?php echo $t['medical_description']; ?></td>
						<td>
                            <a href="<?php echo site_url('tbl_temp_appointment/edit/'.$t['id']); ?>" class="btn btn-info btn-xs"><span class="fa fa-pencil"></span> Edit</a> 
                            <a href="<?php echo site_url('tbl_temp_appointment/remove/'.$t['id']); ?>" class="btn btn-danger btn-xs"><span class="fa fa-trash"></span> Delete</a>
                        </td>
                    </tr>
                    <?php } ?>
                </table>
                                
            </div>
        </div>
    </div>
</div>
