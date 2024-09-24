<div class="row">
    <div class="col-md-12">
      	<div class="box box-info">
            <div class="box-header with-border">
              	<h3 class="box-title">Tbl Service Time Add</h3>
            </div>
            <?php echo form_open('tbl_service_time/add'); ?>
          	<div class="box-body">
          		<div class="row clearfix">
					<div class="col-md-6">
						<label for="fk_business_id" class="control-label">Fk Business Id</label>
						<div class="form-group">
							<input type="text" name="fk_business_id" value="<?php echo $this->input->post('fk_business_id'); ?>" class="form-control" id="fk_business_id" />
						</div>
					</div>
					<div class="col-md-6">
						<label for="service_time_count" class="control-label">Service Time Count</label>
						<div class="form-group">
							<input type="text" name="service_time_count" value="<?php echo $this->input->post('service_time_count'); ?>" class="form-control" id="service_time_count" />
						</div>
					</div>
					<div class="col-md-6">
						<label for="service_time" class="control-label">Service Time</label>
						<div class="form-group">
							<input type="text" name="service_time" value="<?php echo $this->input->post('service_time'); ?>" class="form-control" id="service_time" />
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