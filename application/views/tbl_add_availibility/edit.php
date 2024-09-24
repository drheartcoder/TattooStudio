<div class="row">
    <div class="col-md-12">
      	<div class="box box-info">
            <div class="box-header with-border">
              	<h3 class="box-title">Tbl Add Availibility Edit</h3>
            </div>
			<?php echo form_open('tbl_add_availibility/edit/'.$tbl_add_availibility['availibility_id']); ?>
			<div class="box-body">
				<div class="row clearfix">
					<div class="col-md-6">
						<label for="fk_business_id" class="control-label">Fk Business Id</label>
						<div class="form-group">
							<input type="text" name="fk_business_id" value="<?php echo ($this->input->post('fk_business_id') ? $this->input->post('fk_business_id') : $tbl_add_availibility['fk_business_id']); ?>" class="form-control" id="fk_business_id" />
						</div>
					</div>
					<div class="col-md-6">
						<label for="staff_id" class="control-label">Staff Id</label>
						<div class="form-group">
							<input type="text" name="staff_id" value="<?php echo ($this->input->post('staff_id') ? $this->input->post('staff_id') : $tbl_add_availibility['staff_id']); ?>" class="form-control" id="staff_id" />
						</div>
					</div>
					<div class="col-md-6">
						<label for="day_of_week" class="control-label">Day Of Week</label>
						<div class="form-group">
							<input type="text" name="day_of_week" value="<?php echo ($this->input->post('day_of_week') ? $this->input->post('day_of_week') : $tbl_add_availibility['day_of_week']); ?>" class="form-control" id="day_of_week" />
						</div>
					</div>
					<div class="col-md-6">
						<label for="date" class="control-label">Date</label>
						<div class="form-group">
							<input type="text" name="date" value="<?php echo ($this->input->post('date') ? $this->input->post('date') : $tbl_add_availibility['date']); ?>" class="has-datepicker form-control" id="date" />
						</div>
					</div>
					<div class="col-md-6">
						<label for="start_time" class="control-label">Start Time</label>
						<div class="form-group">
							<input type="text" name="start_time" value="<?php echo ($this->input->post('start_time') ? $this->input->post('start_time') : $tbl_add_availibility['start_time']); ?>" class="form-control" id="start_time" />
						</div>
					</div>
					<div class="col-md-6">
						<label for="end_time" class="control-label">End Time</label>
						<div class="form-group">
							<input type="text" name="end_time" value="<?php echo ($this->input->post('end_time') ? $this->input->post('end_time') : $tbl_add_availibility['end_time']); ?>" class="form-control" id="end_time" />
						</div>
					</div>
					<div class="col-md-6">
						<label for="date_time" class="control-label">Date Time</label>
						<div class="form-group">
							<input type="text" name="date_time" value="<?php echo ($this->input->post('date_time') ? $this->input->post('date_time') : $tbl_add_availibility['date_time']); ?>" class="form-control" id="date_time" />
						</div>
					</div>
					<div class="col-md-6">
						<label for="status" class="control-label">Status</label>
						<div class="form-group">
							<input type="text" name="status" value="<?php echo ($this->input->post('status') ? $this->input->post('status') : $tbl_add_availibility['status']); ?>" class="form-control" id="status" />
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