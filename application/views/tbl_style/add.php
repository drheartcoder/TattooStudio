<div class="row">
    <div class="col-md-12">
      	<div class="box box-info">
            <div class="box-header with-border">
              	<h3 class="box-title">Tbl Style Add</h3>
            </div>
            <?php echo form_open('tbl_style/add'); ?>
          	<div class="box-body">
          		<div class="row clearfix">
					<div class="col-md-6">
						<label for="style_name" class="control-label">Style Name</label>
						<div class="form-group">
							<input type="text" name="style_name" value="<?php echo $this->input->post('style_name'); ?>" class="form-control" id="style_name" />
						</div>
					</div>
					<div class="col-md-6">
						<label for="style_slug" class="control-label">Style Slug</label>
						<div class="form-group">
							<input type="text" name="style_slug" value="<?php echo $this->input->post('style_slug'); ?>" class="form-control" id="style_slug" />
						</div>
					</div>
					<div class="col-md-6">
						<label for="style_status" class="control-label">Style Status</label>
						<div class="form-group">
							<input type="text" name="style_status" value="<?php echo $this->input->post('style_status'); ?>" class="form-control" id="style_status" />
						</div>
					</div>
					<div class="col-md-6">
						<label for="is_delete" class="control-label">Is Delete</label>
						<div class="form-group">
							<input type="text" name="is_delete" value="<?php echo $this->input->post('is_delete'); ?>" class="form-control" id="is_delete" />
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