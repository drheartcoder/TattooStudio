<div class="row">
    <div class="col-md-12">
      	<div class="box box-info">
            <div class="box-header with-border">
              	<h3 class="box-title">Tbl Home Slider Add</h3>
            </div>
            <?php echo form_open('tbl_home_slider/add'); ?>
          	<div class="box-body">
          		<div class="row clearfix">
					<div class="col-md-6">
						<label for="slider_image" class="control-label">Slider Image</label>
						<div class="form-group">
							<input type="text" name="slider_image" value="<?php echo $this->input->post('slider_image'); ?>" class="form-control" id="slider_image" />
						</div>
					</div>
					<div class="col-md-6">
						<label for="slider_link" class="control-label">Slider Link</label>
						<div class="form-group">
							<input type="text" name="slider_link" value="<?php echo $this->input->post('slider_link'); ?>" class="form-control" id="slider_link" />
						</div>
					</div>
					<div class="col-md-6">
						<label for="status" class="control-label">Status</label>
						<div class="form-group">
							<input type="text" name="status" value="<?php echo $this->input->post('status'); ?>" class="form-control" id="status" />
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