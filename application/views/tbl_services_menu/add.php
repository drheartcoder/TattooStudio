<div class="row">
    <div class="col-md-12">
      	<div class="box box-info">
            <div class="box-header with-border">
              	<h3 class="box-title">Tbl Services Menu Add</h3>
            </div>
            <?php echo form_open('tbl_services_menu/add'); ?>
          	<div class="box-body">
          		<div class="row clearfix">
					<div class="col-md-6">
						<label for="regular_price_exisiting" class="control-label">Regular Price Exisiting</label>
						<div class="form-group">
							<input type="text" name="regular_price_exisiting" value="<?php echo $this->input->post('regular_price_exisiting'); ?>" class="form-control" id="regular_price_exisiting" />
						</div>
					</div>
					<div class="col-md-6">
						<label for="is_offpeak_time" class="control-label">Is Offpeak Time</label>
						<div class="form-group">
							<input type="text" name="is_offpeak_time" value="<?php echo $this->input->post('is_offpeak_time'); ?>" class="form-control" id="is_offpeak_time" />
						</div>
					</div>
					<div class="col-md-6">
						<label for="offpeak_type" class="control-label">Offpeak Type</label>
						<div class="form-group">
							<input type="text" name="offpeak_type" value="<?php echo $this->input->post('offpeak_type'); ?>" class="form-control" id="offpeak_type" />
						</div>
					</div>
					<div class="col-md-6">
						<label for="offpeak_price_new" class="control-label">Offpeak Price New</label>
						<div class="form-group">
							<input type="text" name="offpeak_price_new" value="<?php echo $this->input->post('offpeak_price_new'); ?>" class="form-control" id="offpeak_price_new" />
						</div>
					</div>
					<div class="col-md-6">
						<label for="offpeak_price_exisiting" class="control-label">Offpeak Price Exisiting</label>
						<div class="form-group">
							<input type="text" name="offpeak_price_exisiting" value="<?php echo $this->input->post('offpeak_price_exisiting'); ?>" class="form-control" id="offpeak_price_exisiting" />
						</div>
					</div>
					<div class="col-md-6">
						<label for="offpeak_times" class="control-label">Offpeak Times</label>
						<div class="form-group">
							<input type="text" name="offpeak_times" value="<?php echo $this->input->post('offpeak_times'); ?>" class="form-control" id="offpeak_times" />
						</div>
					</div>
					<div class="col-md-6">
						<label for="pause_status" class="control-label">Pause Status</label>
						<div class="form-group">
							<input type="text" name="pause_status" value="<?php echo $this->input->post('pause_status'); ?>" class="form-control" id="pause_status" />
						</div>
					</div>
					<div class="col-md-6">
						<label for="is_setup" class="control-label">Is Setup</label>
						<div class="form-group">
							<input type="text" name="is_setup" value="<?php echo $this->input->post('is_setup'); ?>" class="form-control" id="is_setup" />
						</div>
					</div>
					<div class="col-md-6">
						<label for="time_slot_type" class="control-label">Time Slot Type</label>
						<div class="form-group">
							<input type="text" name="time_slot_type" value="<?php echo $this->input->post('time_slot_type'); ?>" class="form-control" id="time_slot_type" />
						</div>
					</div>
					<div class="col-md-6">
						<label for="is_delete" class="control-label">Is Delete</label>
						<div class="form-group">
							<input type="text" name="is_delete" value="<?php echo $this->input->post('is_delete'); ?>" class="form-control" id="is_delete" />
						</div>
					</div>
					<div class="col-md-6">
						<label for="service_type" class="control-label">Service Type</label>
						<div class="form-group">
							<input type="text" name="service_type" value="<?php echo $this->input->post('service_type'); ?>" class="form-control" id="service_type" />
						</div>
					</div>
					<div class="col-md-6">
						<label for="service_start_date" class="control-label">Service Start Date</label>
						<div class="form-group">
							<input type="text" name="service_start_date" value="<?php echo $this->input->post('service_start_date'); ?>" class="has-datepicker form-control" id="service_start_date" />
						</div>
					</div>
					<div class="col-md-6">
						<label for="service_end_date" class="control-label">Service End Date</label>
						<div class="form-group">
							<input type="text" name="service_end_date" value="<?php echo $this->input->post('service_end_date'); ?>" class="has-datepicker form-control" id="service_end_date" />
						</div>
					</div>
					<div class="col-md-6">
						<label for="fk_business_id" class="control-label">Fk Business Id</label>
						<div class="form-group">
							<input type="text" name="fk_business_id" value="<?php echo $this->input->post('fk_business_id'); ?>" class="form-control" id="fk_business_id" />
						</div>
					</div>
					<div class="col-md-6">
						<label for="fk_category_id" class="control-label">Fk Category Id</label>
						<div class="form-group">
							<input type="text" name="fk_category_id" value="<?php echo $this->input->post('fk_category_id'); ?>" class="form-control" id="fk_category_id" />
						</div>
					</div>
					<div class="col-md-6">
						<label for="fk_subcat_id" class="control-label">Fk Subcat Id</label>
						<div class="form-group">
							<input type="text" name="fk_subcat_id" value="<?php echo $this->input->post('fk_subcat_id'); ?>" class="form-control" id="fk_subcat_id" />
						</div>
					</div>
					<div class="col-md-6">
						<label for="service_index" class="control-label">Service Index</label>
						<div class="form-group">
							<input type="text" name="service_index" value="<?php echo $this->input->post('service_index'); ?>" class="form-control" id="service_index" />
						</div>
					</div>
					<div class="col-md-6">
						<label for="service_name" class="control-label">Service Name</label>
						<div class="form-group">
							<input type="text" name="service_name" value="<?php echo $this->input->post('service_name'); ?>" class="form-control" id="service_name" />
						</div>
					</div>
					<div class="col-md-6">
						<label for="service_cat_name" class="control-label">Service Cat Name</label>
						<div class="form-group">
							<input type="text" name="service_cat_name" value="<?php echo $this->input->post('service_cat_name'); ?>" class="form-control" id="service_cat_name" />
						</div>
					</div>
					<div class="col-md-6">
						<label for="service_duration" class="control-label">Service Duration</label>
						<div class="form-group">
							<input type="text" name="service_duration" value="<?php echo $this->input->post('service_duration'); ?>" class="form-control" id="service_duration" />
						</div>
					</div>
					<div class="col-md-6">
						<label for="service_capacity" class="control-label">Service Capacity</label>
						<div class="form-group">
							<input type="text" name="service_capacity" value="<?php echo $this->input->post('service_capacity'); ?>" class="form-control" id="service_capacity" />
						</div>
					</div>
					<div class="col-md-6">
						<label for="regular_price_new" class="control-label">Regular Price New</label>
						<div class="form-group">
							<input type="text" name="regular_price_new" value="<?php echo $this->input->post('regular_price_new'); ?>" class="form-control" id="regular_price_new" />
						</div>
					</div>
					<div class="col-md-6">
						<label for="service_style" class="control-label">Service Style</label>
						<div class="form-group">
							<input type="text" name="service_style" value="<?php echo $this->input->post('service_style'); ?>" class="form-control" id="service_style" />
						</div>
					</div>
					<div class="col-md-6">
						<label for="service_color" class="control-label">Service Color</label>
						<div class="form-group">
							<input type="text" name="service_color" value="<?php echo $this->input->post('service_color'); ?>" class="form-control" id="service_color" />
						</div>
					</div>
					<div class="col-md-6">
						<label for="service_size" class="control-label">Service Size</label>
						<div class="form-group">
							<input type="text" name="service_size" value="<?php echo $this->input->post('service_size'); ?>" class="form-control" id="service_size" />
						</div>
					</div>
					<div class="col-md-6">
						<label for="service_status" class="control-label">Service Status</label>
						<div class="form-group">
							<input type="text" name="service_status" value="<?php echo $this->input->post('service_status'); ?>" class="form-control" id="service_status" />
						</div>
					</div>
					<div class="col-md-6">
						<label for="service_description" class="control-label">Service Description</label>
						<div class="form-group">
							<textarea name="service_description" class="form-control" id="service_description"><?php echo $this->input->post('service_description'); ?></textarea>
						</div>
					</div>
					<div class="col-md-6">
						<label for="questions_answers" class="control-label">Questions Answers</label>
						<div class="form-group">
							<textarea name="questions_answers" class="form-control" id="questions_answers"><?php echo $this->input->post('questions_answers'); ?></textarea>
						</div>
					</div>
					<div class="col-md-6">
						<label for="offered_by" class="control-label">Offered By</label>
						<div class="form-group">
							<textarea name="offered_by" class="form-control" id="offered_by"><?php echo $this->input->post('offered_by'); ?></textarea>
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