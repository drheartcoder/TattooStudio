<div class="row">
    <div class="col-md-12">
      	<div class="box box-info">
            <div class="box-header with-border">
              	<h3 class="box-title">Tbl User Master Add</h3>
            </div>
            <?php echo form_open('tbl_user_master/add'); ?>
          	<div class="box-body">
          		<div class="row clearfix">
					<div class="col-md-6">
						<label for="password" class="control-label">Password</label>
						<div class="form-group">
							<input type="password" name="password" value="<?php echo $this->input->post('password'); ?>" class="form-control" id="password" />
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
						<label for="email_id" class="control-label">Email Id</label>
						<div class="form-group">
							<input type="text" name="email_id" value="<?php echo $this->input->post('email_id'); ?>" class="form-control" id="email_id" />
						</div>
					</div>
					<div class="col-md-6">
						<label for="giftcard_remaining_amount" class="control-label">Giftcard Remaining Amount</label>
						<div class="form-group">
							<input type="text" name="giftcard_remaining_amount" value="<?php echo $this->input->post('giftcard_remaining_amount'); ?>" class="form-control" id="giftcard_remaining_amount" />
						</div>
					</div>
					<div class="col-md-6">
						<label for="zipcode" class="control-label">Zipcode</label>
						<div class="form-group">
							<input type="text" name="zipcode" value="<?php echo $this->input->post('zipcode'); ?>" class="form-control" id="zipcode" />
						</div>
					</div>
					<div class="col-md-6">
						<label for="phone" class="control-label">Phone</label>
						<div class="form-group">
							<input type="text" name="phone" value="<?php echo $this->input->post('phone'); ?>" class="form-control" id="phone" />
						</div>
					</div>
					<div class="col-md-6">
						<label for="terms_check" class="control-label">Terms Check</label>
						<div class="form-group">
							<input type="text" name="terms_check" value="<?php echo $this->input->post('terms_check'); ?>" class="form-control" id="terms_check" />
						</div>
					</div>
					<div class="col-md-6">
						<label for="user_type" class="control-label">User Type</label>
						<div class="form-group">
							<input type="text" name="user_type" value="<?php echo $this->input->post('user_type'); ?>" class="form-control" id="user_type" />
						</div>
					</div>
					<div class="col-md-6">
						<label for="confirm_code" class="control-label">Confirm Code</label>
						<div class="form-group">
							<input type="text" name="confirm_code" value="<?php echo $this->input->post('confirm_code'); ?>" class="form-control" id="confirm_code" />
						</div>
					</div>
					<div class="col-md-6">
						<label for="is_verified" class="control-label">Is Verified</label>
						<div class="form-group">
							<input type="text" name="is_verified" value="<?php echo $this->input->post('is_verified'); ?>" class="form-control" id="is_verified" />
						</div>
					</div>
					<div class="col-md-6">
						<label for="is_special" class="control-label">Is Special</label>
						<div class="form-group">
							<input type="text" name="is_special" value="<?php echo $this->input->post('is_special'); ?>" class="form-control" id="is_special" />
						</div>
					</div>
					<div class="col-md-6">
						<label for="is_assured" class="control-label">Is Assured</label>
						<div class="form-group">
							<input type="text" name="is_assured" value="<?php echo $this->input->post('is_assured'); ?>" class="form-control" id="is_assured" />
						</div>
					</div>
					<div class="col-md-6">
						<label for="is_featured" class="control-label">Is Featured</label>
						<div class="form-group">
							<input type="text" name="is_featured" value="<?php echo $this->input->post('is_featured'); ?>" class="form-control" id="is_featured" />
						</div>
					</div>
					<div class="col-md-6">
						<label for="user_status" class="control-label">User Status</label>
						<div class="form-group">
							<input type="text" name="user_status" value="<?php echo $this->input->post('user_status'); ?>" class="form-control" id="user_status" />
						</div>
					</div>
					<div class="col-md-6">
						<label for="user_city" class="control-label">User City</label>
						<div class="form-group">
							<input type="text" name="user_city" value="<?php echo $this->input->post('user_city'); ?>" class="form-control" id="user_city" />
						</div>
					</div>
					<div class="col-md-6">
						<label for="user_state" class="control-label">User State</label>
						<div class="form-group">
							<input type="text" name="user_state" value="<?php echo $this->input->post('user_state'); ?>" class="form-control" id="user_state" />
						</div>
					</div>
					<div class="col-md-6">
						<label for="user_country" class="control-label">User Country</label>
						<div class="form-group">
							<input type="text" name="user_country" value="<?php echo $this->input->post('user_country'); ?>" class="form-control" id="user_country" />
						</div>
					</div>
					<div class="col-md-6">
						<label for="cdate" class="control-label">Cdate</label>
						<div class="form-group">
							<input type="text" name="cdate" value="<?php echo $this->input->post('cdate'); ?>" class="form-control" id="cdate" />
						</div>
					</div>
					<div class="col-md-6">
						<label for="setup_status" class="control-label">Setup Status</label>
						<div class="form-group">
							<input type="text" name="setup_status" value="<?php echo $this->input->post('setup_status'); ?>" class="form-control" id="setup_status" />
						</div>
					</div>
					<div class="col-md-6">
						<label for="gender" class="control-label">Gender</label>
						<div class="form-group">
							<input type="text" name="gender" value="<?php echo $this->input->post('gender'); ?>" class="form-control" id="gender" />
						</div>
					</div>
					<div class="col-md-6">
						<label for="birthdate" class="control-label">Birthdate</label>
						<div class="form-group">
							<input type="text" name="birthdate" value="<?php echo $this->input->post('birthdate'); ?>" class="has-datepicker form-control" id="birthdate" />
						</div>
					</div>
					<div class="col-md-6">
						<label for="profile_image" class="control-label">Profile Image</label>
						<div class="form-group">
							<input type="text" name="profile_image" value="<?php echo $this->input->post('profile_image'); ?>" class="form-control" id="profile_image" />
						</div>
					</div>
					<div class="col-md-6">
						<label for="accredited_batch_request" class="control-label">Accredited Batch Request</label>
						<div class="form-group">
							<input type="text" name="accredited_batch_request" value="<?php echo $this->input->post('accredited_batch_request'); ?>" class="form-control" id="accredited_batch_request" />
						</div>
					</div>
					<div class="col-md-6">
						<label for="accredited_batch_info" class="control-label">Accredited Batch Info</label>
						<div class="form-group">
							<input type="text" name="accredited_batch_info" value="<?php echo $this->input->post('accredited_batch_info'); ?>" class="form-control" id="accredited_batch_info" />
						</div>
					</div>
					<div class="col-md-6">
						<label for="is_first_time" class="control-label">Is First Time</label>
						<div class="form-group">
							<input type="text" name="is_first_time" value="<?php echo $this->input->post('is_first_time'); ?>" class="form-control" id="is_first_time" />
						</div>
					</div>
					<div class="col-md-6">
						<label for="address1" class="control-label">Address1</label>
						<div class="form-group">
							<input type="text" name="address1" value="<?php echo $this->input->post('address1'); ?>" class="form-control" id="address1" />
						</div>
					</div>
					<div class="col-md-6">
						<label for="address2" class="control-label">Address2</label>
						<div class="form-group">
							<input type="text" name="address2" value="<?php echo $this->input->post('address2'); ?>" class="form-control" id="address2" />
						</div>
					</div>
					<div class="col-md-6">
						<label for="register_type" class="control-label">Register Type</label>
						<div class="form-group">
							<input type="text" name="register_type" value="<?php echo $this->input->post('register_type'); ?>" class="form-control" id="register_type" />
						</div>
					</div>
					<div class="col-md-6">
						<label for="city_id" class="control-label">City Id</label>
						<div class="form-group">
							<input type="text" name="city_id" value="<?php echo $this->input->post('city_id'); ?>" class="form-control" id="city_id" />
						</div>
					</div>
					<div class="col-md-6">
						<label for="country_id" class="control-label">Country Id</label>
						<div class="form-group">
							<input type="text" name="country_id" value="<?php echo $this->input->post('country_id'); ?>" class="form-control" id="country_id" />
						</div>
					</div>
					<div class="col-md-6">
						<label for="state_id" class="control-label">State Id</label>
						<div class="form-group">
							<input type="text" name="state_id" value="<?php echo $this->input->post('state_id'); ?>" class="form-control" id="state_id" />
						</div>
					</div>
					<div class="col-md-6">
						<label for="cover_img" class="control-label">Cover Img</label>
						<div class="form-group">
							<input type="text" name="cover_img" value="<?php echo $this->input->post('cover_img'); ?>" class="form-control" id="cover_img" />
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