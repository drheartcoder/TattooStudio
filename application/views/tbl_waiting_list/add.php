<div class="row">
    <div class="col-md-12">
      	<div class="box box-info">
            <div class="box-header with-border">
              	<h3 class="box-title">Tbl Waiting List Add</h3>
            </div>
            <?php echo form_open('tbl_waiting_list/add'); ?>
          	<div class="box-body">
          		<div class="row clearfix">
					<div class="col-md-6">
						<label for="selected_date" class="control-label">Selected Date</label>
						<div class="form-group">
							<input type="text" name="selected_date" value="<?php echo $this->input->post('selected_date'); ?>" class="form-control" id="selected_date" />
						</div>
					</div>
					<div class="col-md-6">
						<label for="fk_user_id" class="control-label">Fk User Id</label>
						<div class="form-group">
							<input type="text" name="fk_user_id" value="<?php echo $this->input->post('fk_user_id'); ?>" class="form-control" id="fk_user_id" />
						</div>
					</div>
					<div class="col-md-6">
						<label for="fk_business_id" class="control-label">Fk Business Id</label>
						<div class="form-group">
							<input type="text" name="fk_business_id" value="<?php echo $this->input->post('fk_business_id'); ?>" class="form-control" id="fk_business_id" />
						</div>
					</div>
					<div class="col-md-6">
						<label for="fk_location_id" class="control-label">Fk Location Id</label>
						<div class="form-group">
							<input type="text" name="fk_location_id" value="<?php echo $this->input->post('fk_location_id'); ?>" class="form-control" id="fk_location_id" />
						</div>
					</div>
					<div class="col-md-6">
						<label for="fk_location_hours_id" class="control-label">Fk Location Hours Id</label>
						<div class="form-group">
							<input type="text" name="fk_location_hours_id" value="<?php echo $this->input->post('fk_location_hours_id'); ?>" class="form-control" id="fk_location_hours_id" />
						</div>
					</div>
					<div class="col-md-6">
						<label for="fk_service_menu_id" class="control-label">Fk Service Menu Id</label>
						<div class="form-group">
							<input type="text" name="fk_service_menu_id" value="<?php echo $this->input->post('fk_service_menu_id'); ?>" class="form-control" id="fk_service_menu_id" />
						</div>
					</div>
					<div class="col-md-6">
						<label for="serv_start_time" class="control-label">Serv Start Time</label>
						<div class="form-group">
							<input type="text" name="serv_start_time" value="<?php echo $this->input->post('serv_start_time'); ?>" class="form-control" id="serv_start_time" />
						</div>
					</div>
					<div class="col-md-6">
						<label for="serv_end_time" class="control-label">Serv End Time</label>
						<div class="form-group">
							<input type="text" name="serv_end_time" value="<?php echo $this->input->post('serv_end_time'); ?>" class="form-control" id="serv_end_time" />
						</div>
					</div>
					<div class="col-md-6">
						<label for="created_date" class="control-label">Created Date</label>
						<div class="form-group">
							<input type="text" name="created_date" value="<?php echo $this->input->post('created_date'); ?>" class="form-control" id="created_date" />
						</div>
					</div>
					<div class="col-md-6">
						<label for="status" class="control-label">Status</label>
						<div class="form-group">
							<input type="text" name="status" value="<?php echo $this->input->post('status'); ?>" class="form-control" id="status" />
						</div>
					</div>
					<div class="col-md-6">
						<label for="url_status" class="control-label">Url Status</label>
						<div class="form-group">
							<input type="text" name="url_status" value="<?php echo $this->input->post('url_status'); ?>" class="form-control" id="url_status" />
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