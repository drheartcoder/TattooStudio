<div class="row">
    <div class="col-md-12">
      	<div class="box box-info">
            <div class="box-header with-border">
              	<h3 class="box-title">Tbl Price Add</h3>
            </div>
            <?php echo form_open('tbl_price/add'); ?>
          	<div class="box-body">
          		<div class="row clearfix">
					<div class="col-md-6">
						<label for="service_id" class="control-label">Service Id</label>
						<div class="form-group">
							<input type="text" name="service_id" value="<?php echo $this->input->post('service_id'); ?>" class="form-control" id="service_id" />
						</div>
					</div>
					<div class="col-md-6">
						<label for="color_id" class="control-label">Color Id</label>
						<div class="form-group">
							<input type="text" name="color_id" value="<?php echo $this->input->post('color_id'); ?>" class="form-control" id="color_id" />
						</div>
					</div>
					<div class="col-md-6">
						<label for="size_id" class="control-label">Size Id</label>
						<div class="form-group">
							<input type="text" name="size_id" value="<?php echo $this->input->post('size_id'); ?>" class="form-control" id="size_id" />
						</div>
					</div>
					<div class="col-md-6">
						<label for="color" class="control-label">Color</label>
						<div class="form-group">
							<input type="text" name="color" value="<?php echo $this->input->post('color'); ?>" class="form-control" id="color" />
						</div>
					</div>
					<div class="col-md-6">
						<label for="size" class="control-label">Size</label>
						<div class="form-group">
							<input type="text" name="size" value="<?php echo $this->input->post('size'); ?>" class="form-control" id="size" />
						</div>
					</div>
					<div class="col-md-6">
						<label for="time" class="control-label">Time</label>
						<div class="form-group">
							<input type="text" name="time" value="<?php echo $this->input->post('time'); ?>" class="form-control" id="time" />
						</div>
					</div>
					<div class="col-md-6">
						<label for="price" class="control-label">Price</label>
						<div class="form-group">
							<input type="text" name="price" value="<?php echo $this->input->post('price'); ?>" class="form-control" id="price" />
						</div>
					</div>
					<div class="col-md-6">
						<label for="created_at" class="control-label">Created At</label>
						<div class="form-group">
							<input type="text" name="created_at" value="<?php echo $this->input->post('created_at'); ?>" class="form-control" id="created_at" />
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