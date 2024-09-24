<div class="row">
    <div class="col-md-12">
      	<div class="box box-info">
            <div class="box-header with-border">
              	<h3 class="box-title">Tbl Business Staff Add</h3>
            </div>
            <?php echo form_open('tbl_business_staff/add'); ?>
          	<div class="box-body">
          		<div class="row clearfix">
					<div class="col-md-6">
						<label for="staff_password" class="control-label">Staff Password</label>
						<div class="form-group">
							<input type="password" name="staff_password" value="<?php echo $this->input->post('staff_password'); ?>" class="form-control" id="staff_password" />
						</div>
					</div>
					<div class="col-md-6">
						<label for="fk_business_id" class="control-label">Fk Business Id</label>
						<div class="form-group">
							<input type="text" name="fk_business_id" value="<?php echo $this->input->post('fk_business_id'); ?>" class="form-control" id="fk_business_id" />
						</div>
					</div>
					<div class="col-md-6">
						<label for="staff_profile_img" class="control-label">Staff Profile Img</label>
						<div class="form-group">
							<input type="text" name="staff_profile_img" value="<?php echo $this->input->post('staff_profile_img'); ?>" class="form-control" id="staff_profile_img" />
						</div>
					</div>
					<div class="col-md-6">
						<label for="staff_name" class="control-label">Staff Name</label>
						<div class="form-group">
							<input type="text" name="staff_name" value="<?php echo $this->input->post('staff_name'); ?>" class="form-control" id="staff_name" />
						</div>
					</div>
					<div class="col-md-6">
						<label for="staff_lname" class="control-label">Staff Lname</label>
						<div class="form-group">
							<input type="text" name="staff_lname" value="<?php echo $this->input->post('staff_lname'); ?>" class="form-control" id="staff_lname" />
						</div>
					</div>
					<div class="col-md-6">
						<label for="staff_title" class="control-label">Staff Title</label>
						<div class="form-group">
							<input type="text" name="staff_title" value="<?php echo $this->input->post('staff_title'); ?>" class="form-control" id="staff_title" />
						</div>
					</div>
					<div class="col-md-6">
						<label for="staff_email" class="control-label">Staff Email</label>
						<div class="form-group">
							<input type="text" name="staff_email" value="<?php echo $this->input->post('staff_email'); ?>" class="form-control" id="staff_email" />
						</div>
					</div>
					<div class="col-md-6">
						<label for="available_days" class="control-label">Available Days</label>
						<div class="form-group">
							<input type="text" name="available_days" value="<?php echo $this->input->post('available_days'); ?>" class="form-control" id="available_days" />
						</div>
					</div>
					<div class="col-md-6">
						<label for="staff_role" class="control-label">Staff Role</label>
						<div class="form-group">
							<input type="text" name="staff_role" value="<?php echo $this->input->post('staff_role'); ?>" class="form-control" id="staff_role" />
						</div>
					</div>
					<div class="col-md-6">
						<label for="staff_status" class="control-label">Staff Status</label>
						<div class="form-group">
							<input type="text" name="staff_status" value="<?php echo $this->input->post('staff_status'); ?>" class="form-control" id="staff_status" />
						</div>
					</div>
					<div class="col-md-6">
						<label for="track_compensation" class="control-label">Track Compensation</label>
						<div class="form-group">
							<input type="text" name="track_compensation" value="<?php echo $this->input->post('track_compensation'); ?>" class="form-control" id="track_compensation" />
						</div>
					</div>
					<div class="col-md-6">
						<label for="regular_pay_per_hour_amt" class="control-label">Regular Pay Per Hour Amt</label>
						<div class="form-group">
							<input type="text" name="regular_pay_per_hour_amt" value="<?php echo $this->input->post('regular_pay_per_hour_amt'); ?>" class="form-control" id="regular_pay_per_hour_amt" />
						</div>
					</div>
					<div class="col-md-6">
						<label for="regular_percent_revenue" class="control-label">Regular Percent Revenue</label>
						<div class="form-group">
							<input type="text" name="regular_percent_revenue" value="<?php echo $this->input->post('regular_percent_revenue'); ?>" class="form-control" id="regular_percent_revenue" />
						</div>
					</div>
					<div class="col-md-6">
						<label for="overtime_pay_per_hour_amt" class="control-label">Overtime Pay Per Hour Amt</label>
						<div class="form-group">
							<input type="text" name="overtime_pay_per_hour_amt" value="<?php echo $this->input->post('overtime_pay_per_hour_amt'); ?>" class="form-control" id="overtime_pay_per_hour_amt" />
						</div>
					</div>
					<div class="col-md-6">
						<label for="overtime_percent_revenue" class="control-label">Overtime Percent Revenue</label>
						<div class="form-group">
							<input type="text" name="overtime_percent_revenue" value="<?php echo $this->input->post('overtime_percent_revenue'); ?>" class="form-control" id="overtime_percent_revenue" />
						</div>
					</div>
					<div class="col-md-6">
						<label for="email_me" class="control-label">Email Me</label>
						<div class="form-group">
							<input type="text" name="email_me" value="<?php echo $this->input->post('email_me'); ?>" class="form-control" id="email_me" />
						</div>
					</div>
					<div class="col-md-6">
						<label for="call_me" class="control-label">Call Me</label>
						<div class="form-group">
							<input type="text" name="call_me" value="<?php echo $this->input->post('call_me'); ?>" class="form-control" id="call_me" />
						</div>
					</div>
					<div class="col-md-6">
						<label for="text_me" class="control-label">Text Me</label>
						<div class="form-group">
							<input type="text" name="text_me" value="<?php echo $this->input->post('text_me'); ?>" class="form-control" id="text_me" />
						</div>
					</div>
					<div class="col-md-6">
						<label for="is_delete" class="control-label">Is Delete</label>
						<div class="form-group">
							<input type="text" name="is_delete" value="<?php echo $this->input->post('is_delete'); ?>" class="form-control" id="is_delete" />
						</div>
					</div>
					<div class="col-md-6">
						<label for="staff_birthdate" class="control-label">Staff Birthdate</label>
						<div class="form-group">
							<input type="text" name="staff_birthdate" value="<?php echo $this->input->post('staff_birthdate'); ?>" class="has-datepicker form-control" id="staff_birthdate" />
						</div>
					</div>
					<div class="col-md-6">
						<label for="staff_contact_number" class="control-label">Staff Contact Number</label>
						<div class="form-group">
							<input type="text" name="staff_contact_number" value="<?php echo $this->input->post('staff_contact_number'); ?>" class="form-control" id="staff_contact_number" />
						</div>
					</div>
					<div class="col-md-6">
						<label for="confirm_code" class="control-label">Confirm Code</label>
						<div class="form-group">
							<input type="text" name="confirm_code" value="<?php echo $this->input->post('confirm_code'); ?>" class="form-control" id="confirm_code" />
						</div>
					</div>
					<div class="col-md-6">
						<label for="staff_tattoo_img" class="control-label">Staff Tattoo Img</label>
						<div class="form-group">
							<textarea name="staff_tattoo_img" class="form-control" id="staff_tattoo_img"><?php echo $this->input->post('staff_tattoo_img'); ?></textarea>
						</div>
					</div>
					<div class="col-md-6">
						<label for="managed_location" class="control-label">Managed Location</label>
						<div class="form-group">
							<textarea name="managed_location" class="form-control" id="managed_location"><?php echo $this->input->post('managed_location'); ?></textarea>
						</div>
					</div>
					<div class="col-md-6">
						<label for="served_locations" class="control-label">Served Locations</label>
						<div class="form-group">
							<textarea name="served_locations" class="form-control" id="served_locations"><?php echo $this->input->post('served_locations'); ?></textarea>
						</div>
					</div>
					<div class="col-md-6">
						<label for="about_me_point_1" class="control-label">About Me Point 1</label>
						<div class="form-group">
							<textarea name="about_me_point_1" class="form-control" id="about_me_point_1"><?php echo $this->input->post('about_me_point_1'); ?></textarea>
						</div>
					</div>
					<div class="col-md-6">
						<label for="about_me_point_2" class="control-label">About Me Point 2</label>
						<div class="form-group">
							<textarea name="about_me_point_2" class="form-control" id="about_me_point_2"><?php echo $this->input->post('about_me_point_2'); ?></textarea>
						</div>
					</div>
					<div class="col-md-6">
						<label for="services_served" class="control-label">Services Served</label>
						<div class="form-group">
							<textarea name="services_served" class="form-control" id="services_served"><?php echo $this->input->post('services_served'); ?></textarea>
						</div>
					</div>
					<div class="col-md-6">
						<label for="events_served" class="control-label">Events Served</label>
						<div class="form-group">
							<textarea name="events_served" class="form-control" id="events_served"><?php echo $this->input->post('events_served'); ?></textarea>
						</div>
					</div>
				</div>
			</div>
          	<div class="box-footer">
            	<button type="submit" class="btn btn-success">
            		<i class="fa fa-check"></i> Save
            	</button>
          	</div>
            <?php echo form_close(); ?>
      	</div>
    </div>
</div>