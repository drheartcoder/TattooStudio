<div class="row">
    <div class="col-md-12">
      	<div class="box box-info">
            <div class="box-header with-border">
              	<h3 class="box-title">Tbl Staff Location Hour Add</h3>
            </div>
            <?php echo form_open('tbl_staff_location_hour/add'); ?>
          	<div class="box-body">
          		<div class="row clearfix">
					<div class="col-md-6">
						<label for="fk_location_id" class="control-label">Fk Location Id</label>
						<div class="form-group">
							<input type="text" name="fk_location_id" value="<?php echo $this->input->post('fk_location_id'); ?>" class="form-control" id="fk_location_id" />
						</div>
					</div>
					<div class="col-md-6">
						<label for="fk_business_id" class="control-label">Fk Business Id</label>
						<div class="form-group">
							<input type="text" name="fk_business_id" value="<?php echo $this->input->post('fk_business_id'); ?>" class="form-control" id="fk_business_id" />
						</div>
					</div>
					<div class="col-md-6">
						<label for="day_of_week" class="control-label">Day Of Week</label>
						<div class="form-group">
							<input type="text" name="day_of_week" value="<?php echo $this->input->post('day_of_week'); ?>" class="form-control" id="day_of_week" />
						</div>
					</div>
					<div class="col-md-6">
						<label for="start_time" class="control-label">Start Time</label>
						<div class="form-group">
							<input type="text" name="start_time" value="<?php echo $this->input->post('start_time'); ?>" class="form-control" id="start_time" />
						</div>
					</div>
					<div class="col-md-6">
						<label for="end_time" class="control-label">End Time</label>
						<div class="form-group">
							<input type="text" name="end_time" value="<?php echo $this->input->post('end_time'); ?>" class="form-control" id="end_time" />
						</div>
					</div>
					<div class="col-md-6">
						<label for="by_appointment" class="control-label">By Appointment</label>
						<div class="form-group">
							<input type="text" name="by_appointment" value="<?php echo $this->input->post('by_appointment'); ?>" class="form-control" id="by_appointment" />
						</div>
					</div>
					<div class="col-md-6">
						<label for="in_out" class="control-label">In Out</label>
						<div class="form-group">
							<input type="text" name="in_out" value="<?php echo $this->input->post('in_out'); ?>" class="form-control" id="in_out" />
						</div>
					</div>
					<div class="col-md-6">
						<label for="fk_service_menu_id" class="control-label">Fk Service Menu Id</label>
						<div class="form-group">
							<input type="text" name="fk_service_menu_id" value="<?php echo $this->input->post('fk_service_menu_id'); ?>" class="form-control" id="fk_service_menu_id" />
						</div>
					</div>
					<div class="col-md-6">
						<label for="booked_count" class="control-label">Booked Count</label>
						<div class="form-group">
							<input type="text" name="booked_count" value="<?php echo $this->input->post('booked_count'); ?>" class="form-control" id="booked_count" />
						</div>
					</div>
					<div class="col-md-6">
						<label for="fk_staff_id" class="control-label">Fk Staff Id</label>
						<div class="form-group">
							<textarea name="fk_staff_id" class="form-control" id="fk_staff_id"><?php echo $this->input->post('fk_staff_id'); ?></textarea>
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