<div class="row">
    <div class="col-md-12">
      	<div class="box box-info">
            <div class="box-header with-border">
              	<h3 class="box-title">Tbl Event Direction Add</h3>
            </div>
            <?php echo form_open('tbl_event_direction/add'); ?>
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
						<label for="event_directions_name" class="control-label">Event Directions Name</label>
						<div class="form-group">
							<input type="text" name="event_directions_name" value="<?php echo $this->input->post('event_directions_name'); ?>" class="form-control" id="event_directions_name" />
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