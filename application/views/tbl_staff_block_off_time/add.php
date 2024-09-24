<div class="row">
    <div class="col-md-12">
      	<div class="box box-info">
            <div class="box-header with-border">
              	<h3 class="box-title">Tbl Staff Block Off Time Add</h3>
            </div>
            <?php echo form_open('tbl_staff_block_off_time/add'); ?>
          	<div class="box-body">
          		<div class="row clearfix">
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
						<label for="fk_staff_id" class="control-label">Fk Staff Id</label>
						<div class="form-group">
							<input type="text" name="fk_staff_id" value="<?php echo $this->input->post('fk_staff_id'); ?>" class="form-control" id="fk_staff_id" />
						</div>
					</div>
					<div class="col-md-6">
						<label for="block_off_title" class="control-label">Block Off Title</label>
						<div class="form-group">
							<input type="text" name="block_off_title" value="<?php echo $this->input->post('block_off_title'); ?>" class="form-control" id="block_off_title" />
						</div>
					</div>
					<div class="col-md-6">
						<label for="block_off_start_date" class="control-label">Block Off Start Date</label>
						<div class="form-group">
							<input type="text" name="block_off_start_date" value="<?php echo $this->input->post('block_off_start_date'); ?>" class="has-datepicker form-control" id="block_off_start_date" />
						</div>
					</div>
					<div class="col-md-6">
						<label for="block_off_end_date" class="control-label">Block Off End Date</label>
						<div class="form-group">
							<input type="text" name="block_off_end_date" value="<?php echo $this->input->post('block_off_end_date'); ?>" class="has-datepicker form-control" id="block_off_end_date" />
						</div>
					</div>
					<div class="col-md-6">
						<label for="block_off_start_time" class="control-label">Block Off Start Time</label>
						<div class="form-group">
							<input type="text" name="block_off_start_time" value="<?php echo $this->input->post('block_off_start_time'); ?>" class="form-control" id="block_off_start_time" />
						</div>
					</div>
					<div class="col-md-6">
						<label for="block_off_end_time" class="control-label">Block Off End Time</label>
						<div class="form-group">
							<input type="text" name="block_off_end_time" value="<?php echo $this->input->post('block_off_end_time'); ?>" class="form-control" id="block_off_end_time" />
						</div>
					</div>
					<div class="col-md-6">
						<label for="off_note" class="control-label">Off Note</label>
						<div class="form-group">
							<input type="text" name="off_note" value="<?php echo $this->input->post('off_note'); ?>" class="form-control" id="off_note" />
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