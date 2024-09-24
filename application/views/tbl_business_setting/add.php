<div class="row">
    <div class="col-md-12">
      	<div class="box box-info">
            <div class="box-header with-border">
              	<h3 class="box-title">Tbl Business Setting Add</h3>
            </div>
            <?php echo form_open('tbl_business_setting/add'); ?>
          	<div class="box-body">
          		<div class="row clearfix">
					<div class="col-md-6">
						<label for="fk_business_id" class="control-label">Fk Business Id</label>
						<div class="form-group">
							<input type="text" name="fk_business_id" value="<?php echo $this->input->post('fk_business_id'); ?>" class="form-control" id="fk_business_id" />
						</div>
					</div>
					<div class="col-md-6">
						<label for="calender_system" class="control-label">Calender System</label>
						<div class="form-group">
							<input type="text" name="calender_system" value="<?php echo $this->input->post('calender_system'); ?>" class="form-control" id="calender_system" />
						</div>
					</div>
					<div class="col-md-6">
						<label for="booking_time_interval" class="control-label">Booking Time Interval</label>
						<div class="form-group">
							<input type="text" name="booking_time_interval" value="<?php echo $this->input->post('booking_time_interval'); ?>" class="form-control" id="booking_time_interval" />
						</div>
					</div>
					<div class="col-md-6">
						<label for="advance_marketplace_notice" class="control-label">Advance Marketplace Notice</label>
						<div class="form-group">
							<input type="text" name="advance_marketplace_notice" value="<?php echo $this->input->post('advance_marketplace_notice'); ?>" class="form-control" id="advance_marketplace_notice" />
						</div>
					</div>
					<div class="col-md-6">
						<label for="advance_booking_time" class="control-label">Advance Booking Time</label>
						<div class="form-group">
							<input type="text" name="advance_booking_time" value="<?php echo $this->input->post('advance_booking_time'); ?>" class="form-control" id="advance_booking_time" />
						</div>
					</div>
					<div class="col-md-6">
						<label for="advance_booking_time_type" class="control-label">Advance Booking Time Type</label>
						<div class="form-group">
							<input type="text" name="advance_booking_time_type" value="<?php echo $this->input->post('advance_booking_time_type'); ?>" class="form-control" id="advance_booking_time_type" />
						</div>
					</div>
					<div class="col-md-6">
						<label for="booking_entity" class="control-label">Booking Entity</label>
						<div class="form-group">
							<input type="text" name="booking_entity" value="<?php echo $this->input->post('booking_entity'); ?>" class="form-control" id="booking_entity" />
						</div>
					</div>
					<div class="col-md-6">
						<label for="booking_auto_accept" class="control-label">Booking Auto Accept</label>
						<div class="form-group">
							<input type="text" name="booking_auto_accept" value="<?php echo $this->input->post('booking_auto_accept'); ?>" class="form-control" id="booking_auto_accept" />
						</div>
					</div>
					<div class="col-md-6">
						<label for="marketplace_booking_email" class="control-label">Marketplace Booking Email</label>
						<div class="form-group">
							<input type="text" name="marketplace_booking_email" value="<?php echo $this->input->post('marketplace_booking_email'); ?>" class="form-control" id="marketplace_booking_email" />
						</div>
					</div>
					<div class="col-md-6">
						<label for="marketplace_booking_call_no" class="control-label">Marketplace Booking Call No</label>
						<div class="form-group">
							<input type="text" name="marketplace_booking_call_no" value="<?php echo $this->input->post('marketplace_booking_call_no'); ?>" class="form-control" id="marketplace_booking_call_no" />
						</div>
					</div>
					<div class="col-md-6">
						<label for="marketplace_booking_text_no" class="control-label">Marketplace Booking Text No</label>
						<div class="form-group">
							<input type="text" name="marketplace_booking_text_no" value="<?php echo $this->input->post('marketplace_booking_text_no'); ?>" class="form-control" id="marketplace_booking_text_no" />
						</div>
					</div>
					<div class="col-md-6">
						<label for="cancel_time" class="control-label">Cancel Time</label>
						<div class="form-group">
							<input type="text" name="cancel_time" value="<?php echo $this->input->post('cancel_time'); ?>" class="form-control" id="cancel_time" />
						</div>
					</div>
					<div class="col-md-6">
						<label for="communicator_options" class="control-label">Communicator Options</label>
						<div class="form-group">
							<input type="text" name="communicator_options" value="<?php echo $this->input->post('communicator_options'); ?>" class="form-control" id="communicator_options" />
						</div>
					</div>
					<div class="col-md-6">
						<label for="direct_staff_member_booking" class="control-label">Direct Staff Member Booking</label>
						<div class="form-group">
							<input type="text" name="direct_staff_member_booking" value="<?php echo $this->input->post('direct_staff_member_booking'); ?>" class="form-control" id="direct_staff_member_booking" />
						</div>
					</div>
					<div class="col-md-6">
						<label for="price_vary_by_location" class="control-label">Price Vary By Location</label>
						<div class="form-group">
							<input type="text" name="price_vary_by_location" value="<?php echo $this->input->post('price_vary_by_location'); ?>" class="form-control" id="price_vary_by_location" />
						</div>
					</div>
					<div class="col-md-6">
						<label for="scheduler_access_level" class="control-label">Scheduler Access Level</label>
						<div class="form-group">
							<input type="text" name="scheduler_access_level" value="<?php echo $this->input->post('scheduler_access_level'); ?>" class="form-control" id="scheduler_access_level" />
						</div>
					</div>
					<div class="col-md-6">
						<label for="track_compensation" class="control-label">Track Compensation</label>
						<div class="form-group">
							<input type="text" name="track_compensation" value="<?php echo $this->input->post('track_compensation'); ?>" class="form-control" id="track_compensation" />
						</div>
					</div>
					<div class="col-md-6">
						<label for="clock_in_out" class="control-label">Clock In Out</label>
						<div class="form-group">
							<input type="text" name="clock_in_out" value="<?php echo $this->input->post('clock_in_out'); ?>" class="form-control" id="clock_in_out" />
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