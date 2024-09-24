<div class="row">
    <div class="col-md-12">
      	<div class="box box-info">
            <div class="box-header with-border">
              	<h3 class="box-title">Admin Login Edit</h3>
            </div>
			<?php echo form_open('admin_login/edit/'.$admin_login['id']); ?>
			<div class="box-body">
				<div class="row clearfix">
					<div class="col-md-6">
						<label for="admin_password" class="control-label">Admin Password</label>
						<div class="form-group">
							<input type="text" name="admin_password" value="<?php echo ($this->input->post('admin_password') ? $this->input->post('admin_password') : $admin_login['admin_password']); ?>" class="form-control" id="admin_password" />
						</div>
					</div>
					<div class="col-md-6">
						<label for="admin_username" class="control-label">Admin Username</label>
						<div class="form-group">
							<input type="text" name="admin_username" value="<?php echo ($this->input->post('admin_username') ? $this->input->post('admin_username') : $admin_login['admin_username']); ?>" class="form-control" id="admin_username" />
						</div>
					</div>
					<div class="col-md-6">
						<label for="first_name" class="control-label">First Name</label>
						<div class="form-group">
							<input type="text" name="first_name" value="<?php echo ($this->input->post('first_name') ? $this->input->post('first_name') : $admin_login['first_name']); ?>" class="form-control" id="first_name" />
						</div>
					</div>
					<div class="col-md-6">
						<label for="last_name" class="control-label">Last Name</label>
						<div class="form-group">
							<input type="text" name="last_name" value="<?php echo ($this->input->post('last_name') ? $this->input->post('last_name') : $admin_login['last_name']); ?>" class="form-control" id="last_name" />
						</div>
					</div>
					<div class="col-md-6">
						<label for="admin_email" class="control-label">Admin Email</label>
						<div class="form-group">
							<input type="text" name="admin_email" value="<?php echo ($this->input->post('admin_email') ? $this->input->post('admin_email') : $admin_login['admin_email']); ?>" class="form-control" id="admin_email" />
						</div>
					</div>
					<div class="col-md-6">
						<label for="admin_contactus" class="control-label">Admin Contactus</label>
						<div class="form-group">
							<input type="text" name="admin_contactus" value="<?php echo ($this->input->post('admin_contactus') ? $this->input->post('admin_contactus') : $admin_login['admin_contactus']); ?>" class="form-control" id="admin_contactus" />
						</div>
					</div>
					<div class="col-md-6">
						<label for="admin_fax" class="control-label">Admin Fax</label>
						<div class="form-group">
							<input type="text" name="admin_fax" value="<?php echo ($this->input->post('admin_fax') ? $this->input->post('admin_fax') : $admin_login['admin_fax']); ?>" class="form-control" id="admin_fax" />
						</div>
					</div>
					<div class="col-md-6">
						<label for="site_status" class="control-label">Site Status</label>
						<div class="form-group">
							<input type="text" name="site_status" value="<?php echo ($this->input->post('site_status') ? $this->input->post('site_status') : $admin_login['site_status']); ?>" class="form-control" id="site_status" />
						</div>
					</div>
					<div class="col-md-6">
						<label for="admin_address2" class="control-label">Admin Address2</label>
						<div class="form-group">
							<input type="text" name="admin_address2" value="<?php echo ($this->input->post('admin_address2') ? $this->input->post('admin_address2') : $admin_login['admin_address2']); ?>" class="form-control" id="admin_address2" />
						</div>
					</div>
					<div class="col-md-6">
						<label for="admin_address3" class="control-label">Admin Address3</label>
						<div class="form-group">
							<input type="text" name="admin_address3" value="<?php echo ($this->input->post('admin_address3') ? $this->input->post('admin_address3') : $admin_login['admin_address3']); ?>" class="form-control" id="admin_address3" />
						</div>
					</div>
					<div class="col-md-6">
						<label for="admin_country" class="control-label">Admin Country</label>
						<div class="form-group">
							<input type="text" name="admin_country" value="<?php echo ($this->input->post('admin_country') ? $this->input->post('admin_country') : $admin_login['admin_country']); ?>" class="form-control" id="admin_country" />
						</div>
					</div>
					<div class="col-md-6">
						<label for="admin_state" class="control-label">Admin State</label>
						<div class="form-group">
							<input type="text" name="admin_state" value="<?php echo ($this->input->post('admin_state') ? $this->input->post('admin_state') : $admin_login['admin_state']); ?>" class="form-control" id="admin_state" />
						</div>
					</div>
					<div class="col-md-6">
						<label for="admin_city" class="control-label">Admin City</label>
						<div class="form-group">
							<input type="text" name="admin_city" value="<?php echo ($this->input->post('admin_city') ? $this->input->post('admin_city') : $admin_login['admin_city']); ?>" class="form-control" id="admin_city" />
						</div>
					</div>
					<div class="col-md-6">
						<label for="admin_postcode" class="control-label">Admin Postcode</label>
						<div class="form-group">
							<input type="text" name="admin_postcode" value="<?php echo ($this->input->post('admin_postcode') ? $this->input->post('admin_postcode') : $admin_login['admin_postcode']); ?>" class="form-control" id="admin_postcode" />
						</div>
					</div>
					<div class="col-md-6">
						<label for="profile_picture" class="control-label">Profile Picture</label>
						<div class="form-group">
							<textarea name="profile_picture" class="form-control" id="profile_picture"><?php echo ($this->input->post('profile_picture') ? $this->input->post('profile_picture') : $admin_login['profile_picture']); ?></textarea>
						</div>
					</div>
					<div class="col-md-6">
						<label for="admin_address" class="control-label">Admin Address</label>
						<div class="form-group">
							<textarea name="admin_address" class="form-control" id="admin_address"><?php echo ($this->input->post('admin_address') ? $this->input->post('admin_address') : $admin_login['admin_address']); ?></textarea>
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