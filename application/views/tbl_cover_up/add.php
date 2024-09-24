<div class="row">
    <div class="col-md-12">
      	<div class="box box-info">
            <div class="box-header with-border">
              	<h3 class="box-title">Tbl Cover Up Add</h3>
            </div>
            <?php echo form_open('tbl_cover_up/add'); ?>
          	<div class="box-body">
          		<div class="row clearfix">
					<div class="col-md-6">
						<label for="cover_up_name" class="control-label">Cover Up Name</label>
						<div class="form-group">
							<input type="text" name="cover_up_name" value="<?php echo $this->input->post('cover_up_name'); ?>" class="form-control" id="cover_up_name" />
						</div>
					</div>
					<div class="col-md-6">
						<label for="cover_up_slug" class="control-label">Cover Up Slug</label>
						<div class="form-group">
							<input type="text" name="cover_up_slug" value="<?php echo $this->input->post('cover_up_slug'); ?>" class="form-control" id="cover_up_slug" />
						</div>
					</div>
					<div class="col-md-6">
						<label for="is_delete" class="control-label">Is Delete</label>
						<div class="form-group">
							<input type="text" name="is_delete" value="<?php echo $this->input->post('is_delete'); ?>" class="form-control" id="is_delete" />
						</div>
					</div>
					<div class="col-md-6">
						<label for="cover_up_status" class="control-label">Cover Up Status</label>
						<div class="form-group">
							<input type="text" name="cover_up_status" value="<?php echo $this->input->post('cover_up_status'); ?>" class="form-control" id="cover_up_status" />
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