<div class="row">
    <div class="col-md-12">
      	<div class="box box-info">
            <div class="box-header with-border">
              	<h3 class="box-title">Tbl Business Video Add</h3>
            </div>
            <?php echo form_open('tbl_business_video/add'); ?>
          	<div class="box-body">
          		<div class="row clearfix">
					<div class="col-md-6">
						<label for="fk_business_id" class="control-label">Fk Business Id</label>
						<div class="form-group">
							<input type="text" name="fk_business_id" value="<?php echo $this->input->post('fk_business_id'); ?>" class="form-control" id="fk_business_id" />
						</div>
					</div>
					<div class="col-md-6">
						<label for="fk_staff_id" class="control-label">Fk Staff Id</label>
						<div class="form-group">
							<input type="text" name="fk_staff_id" value="<?php echo $this->input->post('fk_staff_id'); ?>" class="form-control" id="fk_staff_id" />
						</div>
					</div>
					<div class="col-md-6">
						<label for="video_name" class="control-label">Video Name</label>
						<div class="form-group">
							<input type="text" name="video_name" value="<?php echo $this->input->post('video_name'); ?>" class="form-control" id="video_name" />
						</div>
					</div>
					<div class="col-md-6">
						<label for="video_status" class="control-label">Video Status</label>
						<div class="form-group">
							<input type="text" name="video_status" value="<?php echo $this->input->post('video_status'); ?>" class="form-control" id="video_status" />
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