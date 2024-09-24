<div class="row">
    <div class="col-md-12">
      	<div class="box box-info">
            <div class="box-header with-border">
              	<h3 class="box-title">Tbl Color Edit</h3>
            </div>
			<?php echo form_open('tbl_color/edit/'.$tbl_color['color_id']); ?>
			<div class="box-body">
				<div class="row clearfix">
					<div class="col-md-6">
						<label for="color_name" class="control-label">Color Name</label>
						<div class="form-group">
							<input type="text" name="color_name" value="<?php echo ($this->input->post('color_name') ? $this->input->post('color_name') : $tbl_color['color_name']); ?>" class="form-control" id="color_name" />
						</div>
					</div>
					<div class="col-md-6">
						<label for="color_slug" class="control-label">Color Slug</label>
						<div class="form-group">
							<input type="text" name="color_slug" value="<?php echo ($this->input->post('color_slug') ? $this->input->post('color_slug') : $tbl_color['color_slug']); ?>" class="form-control" id="color_slug" />
						</div>
					</div>
					<div class="col-md-6">
						<label for="color_status" class="control-label">Color Status</label>
						<div class="form-group">
							<input type="text" name="color_status" value="<?php echo ($this->input->post('color_status') ? $this->input->post('color_status') : $tbl_color['color_status']); ?>" class="form-control" id="color_status" />
						</div>
					</div>
					<div class="col-md-6">
						<label for="is_delete" class="control-label">Is Delete</label>
						<div class="form-group">
							<input type="text" name="is_delete" value="<?php echo ($this->input->post('is_delete') ? $this->input->post('is_delete') : $tbl_color['is_delete']); ?>" class="form-control" id="is_delete" />
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