<div class="row">
    <div class="col-md-12">
      	<div class="box box-info">
            <div class="box-header with-border">
              	<h3 class="box-title">Tbl Business Location Add</h3>
            </div>
            <?php echo form_open('tbl_business_location/add'); ?>
          	<div class="box-body">
          		<div class="row clearfix">
					<div class="col-md-6">
						<label for="fk_business_id" class="control-label">Fk Business Id</label>
						<div class="form-group">
							<input type="text" name="fk_business_id" value="<?php echo $this->input->post('fk_business_id'); ?>" class="form-control" id="fk_business_id" />
						</div>
					</div>
					<div class="col-md-6">
						<label for="travel_to_customer" class="control-label">Travel To Customer</label>
						<div class="form-group">
							<input type="text" name="travel_to_customer" value="<?php echo $this->input->post('travel_to_customer'); ?>" class="form-control" id="travel_to_customer" />
						</div>
					</div>
					<div class="col-md-6">
						<label for="street_address" class="control-label">Street Address</label>
						<div class="form-group">
							<input type="text" name="street_address" value="<?php echo $this->input->post('street_address'); ?>" class="form-control" id="street_address" />
						</div>
					</div>
					<div class="col-md-6">
						<label for="street_address2" class="control-label">Street Address2</label>
						<div class="form-group">
							<input type="text" name="street_address2" value="<?php echo $this->input->post('street_address2'); ?>" class="form-control" id="street_address2" />
						</div>
					</div>
					<div class="col-md-6">
						<label for="street_address3" class="control-label">Street Address3</label>
						<div class="form-group">
							<input type="text" name="street_address3" value="<?php echo $this->input->post('street_address3'); ?>" class="form-control" id="street_address3" />
						</div>
					</div>
					<div class="col-md-6">
						<label for="city" class="control-label">City</label>
						<div class="form-group">
							<input type="text" name="city" value="<?php echo $this->input->post('city'); ?>" class="form-control" id="city" />
						</div>
					</div>
					<div class="col-md-6">
						<label for="district" class="control-label">District</label>
						<div class="form-group">
							<input type="text" name="district" value="<?php echo $this->input->post('district'); ?>" class="form-control" id="district" />
						</div>
					</div>
					<div class="col-md-6">
						<label for="country" class="control-label">Country</label>
						<div class="form-group">
							<input type="text" name="country" value="<?php echo $this->input->post('country'); ?>" class="form-control" id="country" />
						</div>
					</div>
					<div class="col-md-6">
						<label for="zip" class="control-label">Zip</label>
						<div class="form-group">
							<input type="text" name="zip" value="<?php echo $this->input->post('zip'); ?>" class="form-control" id="zip" />
						</div>
					</div>
					<div class="col-md-6">
						<label for="phone" class="control-label">Phone</label>
						<div class="form-group">
							<input type="text" name="phone" value="<?php echo $this->input->post('phone'); ?>" class="form-control" id="phone" />
						</div>
					</div>
					<div class="col-md-6">
						<label for="ada_accessible" class="control-label">Ada Accessible</label>
						<div class="form-group">
							<input type="text" name="ada_accessible" value="<?php echo $this->input->post('ada_accessible'); ?>" class="form-control" id="ada_accessible" />
						</div>
					</div>
					<div class="col-md-6">
						<label for="parking" class="control-label">Parking</label>
						<div class="form-group">
							<input type="text" name="parking" value="<?php echo $this->input->post('parking'); ?>" class="form-control" id="parking" />
						</div>
					</div>
					<div class="col-md-6">
						<label for="language" class="control-label">Language</label>
						<div class="form-group">
							<input type="text" name="language" value="<?php echo $this->input->post('language'); ?>" class="form-control" id="language" />
						</div>
					</div>
					<div class="col-md-6">
						<label for="location_detail" class="control-label">Location Detail</label>
						<div class="form-group">
							<input type="text" name="location_detail" value="<?php echo $this->input->post('location_detail'); ?>" class="form-control" id="location_detail" />
						</div>
					</div>
					<div class="col-md-6">
						<label for="latitude" class="control-label">Latitude</label>
						<div class="form-group">
							<input type="text" name="latitude" value="<?php echo $this->input->post('latitude'); ?>" class="form-control" id="latitude" />
						</div>
					</div>
					<div class="col-md-6">
						<label for="longitude" class="control-label">Longitude</label>
						<div class="form-group">
							<input type="text" name="longitude" value="<?php echo $this->input->post('longitude'); ?>" class="form-control" id="longitude" />
						</div>
					</div>
					<div class="col-md-6">
						<label for="is_active" class="control-label">Is Active</label>
						<div class="form-group">
							<input type="text" name="is_active" value="<?php echo $this->input->post('is_active'); ?>" class="form-control" id="is_active" />
						</div>
					</div>
					<div class="col-md-6">
						<label for="giolocation" class="control-label">Giolocation</label>
						<div class="form-group">
							<textarea name="giolocation" class="form-control" id="giolocation"><?php echo $this->input->post('giolocation'); ?></textarea>
						</div>
					</div>
					<div class="col-md-6">
						<label for="event_conduct" class="control-label">Event Conduct</label>
						<div class="form-group">
							<textarea name="event_conduct" class="form-control" id="event_conduct"><?php echo $this->input->post('event_conduct'); ?></textarea>
						</div>
					</div>
					<div class="col-md-6">
						<label for="service_conduct" class="control-label">Service Conduct</label>
						<div class="form-group">
							<textarea name="service_conduct" class="form-control" id="service_conduct"><?php echo $this->input->post('service_conduct'); ?></textarea>
						</div>
					</div>
					<div class="col-md-6">
						<label for="staff_conduct" class="control-label">Staff Conduct</label>
						<div class="form-group">
							<textarea name="staff_conduct" class="form-control" id="staff_conduct"><?php echo $this->input->post('staff_conduct'); ?></textarea>
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