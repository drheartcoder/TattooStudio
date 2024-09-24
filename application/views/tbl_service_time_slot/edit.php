<div class="row">
    <div class="col-md-12">
      	<div class="box box-info">
            <div class="box-header with-border">
              	<h3 class="box-title">Tbl Service Time Slot Edit</h3>
            </div>
			<?php echo form_open('tbl_service_time_slot/edit/'.$tbl_service_time_slot['time_slot_id']); ?>
			<div class="box-body">
				<div class="row clearfix">
					<div class="col-md-6">
						<label for="fk_service_menu_id" class="control-label">Fk Service Menu Id</label>
						<div class="form-group">
							<input type="text" name="fk_service_menu_id" value="<?php echo ($this->input->post('fk_service_menu_id') ? $this->input->post('fk_service_menu_id') : $tbl_service_time_slot['fk_service_menu_id']); ?>" class="form-control" id="fk_service_menu_id" />
						</div>
					</div>
					<div class="col-md-6">
						<label for="day" class="control-label">Day</label>
						<div class="form-group">
							<input type="text" name="day" value="<?php echo ($this->input->post('day') ? $this->input->post('day') : $tbl_service_time_slot['day']); ?>" class="form-control" id="day" />
						</div>
					</div>
					<div class="col-md-6">
						<label for="start_time" class="control-label">Start Time</label>
						<div class="form-group">
							<input type="text" name="start_time" value="<?php echo ($this->input->post('start_time') ? $this->input->post('start_time') : $tbl_service_time_slot['start_time']); ?>" class="form-control" id="start_time" />
						</div>
					</div>
					<div class="col-md-6">
						<label for="end_time" class="control-label">End Time</label>
						<div class="form-group">
							<input type="text" name="end_time" value="<?php echo ($this->input->post('end_time') ? $this->input->post('end_time') : $tbl_service_time_slot['end_time']); ?>" class="form-control" id="end_time" />
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