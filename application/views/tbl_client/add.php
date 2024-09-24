<div class="row">
    <div class="col-md-12">
      	<div class="box box-info">
            <div class="box-header with-border">
              	<h3 class="box-title">Tbl Client Add</h3>
            </div>
            <?php echo form_open('tbl_client/add'); ?>
          	<div class="box-body">
          		<div class="row clearfix">
					<div class="col-md-6">
						<label for="fk_business_id" class="control-label">Fk Business Id</label>
						<div class="form-group">
							<input type="text" name="fk_business_id" value="<?php echo $this->input->post('fk_business_id'); ?>" class="form-control" id="fk_business_id" />
						</div>
					</div>
					<div class="col-md-6">
						<label for="fk_user_id" class="control-label">Fk User Id</label>
						<div class="form-group">
							<input type="text" name="fk_user_id" value="<?php echo $this->input->post('fk_user_id'); ?>" class="form-control" id="fk_user_id" />
						</div>
					</div>
					<div class="col-md-6">
						<label for="fname" class="control-label">Fname</label>
						<div class="form-group">
							<input type="text" name="fname" value="<?php echo $this->input->post('fname'); ?>" class="form-control" id="fname" />
						</div>
					</div>
					<div class="col-md-6">
						<label for="lname" class="control-label">Lname</label>
						<div class="form-group">
							<input type="text" name="lname" value="<?php echo $this->input->post('lname'); ?>" class="form-control" id="lname" />
						</div>
					</div>
					<div class="col-md-6">
						<label for="email" class="control-label">Email</label>
						<div class="form-group">
							<input type="text" name="email" value="<?php echo $this->input->post('email'); ?>" class="form-control" id="email" />
						</div>
					</div>
					<div class="col-md-6">
						<label for="mobile_phone" class="control-label">Mobile Phone</label>
						<div class="form-group">
							<input type="text" name="mobile_phone" value="<?php echo $this->input->post('mobile_phone'); ?>" class="form-control" id="mobile_phone" />
						</div>
					</div>
					<div class="col-md-6">
						<label for="home_phone" class="control-label">Home Phone</label>
						<div class="form-group">
							<input type="text" name="home_phone" value="<?php echo $this->input->post('home_phone'); ?>" class="form-control" id="home_phone" />
						</div>
					</div>
					<div class="col-md-6">
						<label for="work_phone" class="control-label">Work Phone</label>
						<div class="form-group">
							<input type="text" name="work_phone" value="<?php echo $this->input->post('work_phone'); ?>" class="form-control" id="work_phone" />
						</div>
					</div>
					<div class="col-md-6">
						<label for="profile_image" class="control-label">Profile Image</label>
						<div class="form-group">
							<input type="text" name="profile_image" value="<?php echo $this->input->post('profile_image'); ?>" class="form-control" id="profile_image" />
						</div>
					</div>
					<div class="col-md-6">
						<label for="client_since" class="control-label">Client Since</label>
						<div class="form-group">
							<input type="text" name="client_since" value="<?php echo $this->input->post('client_since'); ?>" class="has-datepicker form-control" id="client_since" />
						</div>
					</div>
					<div class="col-md-6">
						<label for="fk_location_id" class="control-label">Fk Location Id</label>
						<div class="form-group">
							<input type="text" name="fk_location_id" value="<?php echo $this->input->post('fk_location_id'); ?>" class="form-control" id="fk_location_id" />
						</div>
					</div>
					<div class="col-md-6">
						<label for="fk_staff_id" class="control-label">Fk Staff Id</label>
						<div class="form-group">
							<input type="text" name="fk_staff_id" value="<?php echo $this->input->post('fk_staff_id'); ?>" class="form-control" id="fk_staff_id" />
						</div>
					</div>
					<div class="col-md-6">
						<label for="contact_preference" class="control-label">Contact Preference</label>
						<div class="form-group">
							<input type="text" name="contact_preference" value="<?php echo $this->input->post('contact_preference'); ?>" class="form-control" id="contact_preference" />
						</div>
					</div>
					<div class="col-md-6">
						<label for="date_of_birth" class="control-label">Date Of Birth</label>
						<div class="form-group">
							<input type="text" name="date_of_birth" value="<?php echo $this->input->post('date_of_birth'); ?>" class="has-datetimepicker form-control" id="date_of_birth" />
						</div>
					</div>
					<div class="col-md-6">
						<label for="gender" class="control-label">Gender</label>
						<div class="form-group">
							<input type="text" name="gender" value="<?php echo $this->input->post('gender'); ?>" class="form-control" id="gender" />
						</div>
					</div>
					<div class="col-md-6">
						<label for="is_booking" class="control-label">Is Booking</label>
						<div class="form-group">
							<input type="text" name="is_booking" value="<?php echo $this->input->post('is_booking'); ?>" class="form-control" id="is_booking" />
						</div>
					</div>
					<div class="col-md-6">
						<label for="client_notes" class="control-label">Client Notes</label>
						<div class="form-group">
							<input type="text" name="client_notes" value="<?php echo $this->input->post('client_notes'); ?>" class="form-control" id="client_notes" />
						</div>
					</div>
					<div class="col-md-6">
						<label for="edited_on" class="control-label">Edited On</label>
						<div class="form-group">
							<input type="text" name="edited_on" value="<?php echo $this->input->post('edited_on'); ?>" class="has-datetimepicker form-control" id="edited_on" />
						</div>
					</div>
					<div class="col-md-6">
						<label for="is_delete" class="control-label">Is Delete</label>
						<div class="form-group">
							<input type="text" name="is_delete" value="<?php echo $this->input->post('is_delete'); ?>" class="form-control" id="is_delete" />
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