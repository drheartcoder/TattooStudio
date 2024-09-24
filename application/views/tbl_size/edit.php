<div class="row">
    <div class="col-md-12">
      	<div class="box box-info">
            <div class="box-header with-border">
              	<h3 class="box-title">Tbl Size Edit</h3>
            </div>
			<?php echo form_open('tbl_size/edit/'.$tbl_size['id']); ?>
			<div class="box-body">
				<div class="row clearfix">
					<div class="col-md-6">
						<label for="size_name" class="control-label">Size Name</label>
						<div class="form-group">
							<input type="text" name="size_name" value="<?php echo ($this->input->post('size_name') ? $this->input->post('size_name') : $tbl_size['size_name']); ?>" class="form-control" id="size_name" />
						</div>
					</div>
					<div class="col-md-6">
						<label for="size_slug" class="control-label">Size Slug</label>
						<div class="form-group">
							<input type="text" name="size_slug" value="<?php echo ($this->input->post('size_slug') ? $this->input->post('size_slug') : $tbl_size['size_slug']); ?>" class="form-control" id="size_slug" />
						</div>
					</div>
					<div class="col-md-6">
						<label for="is_delete" class="control-label">Is Delete</label>
						<div class="form-group">
							<input type="text" name="is_delete" value="<?php echo ($this->input->post('is_delete') ? $this->input->post('is_delete') : $tbl_size['is_delete']); ?>" class="form-control" id="is_delete" />
						</div>
					</div>
					<div class="col-md-6">
						<label for="size_status" class="control-label">Size Status</label>
						<div class="form-group">
							<input type="text" name="size_status" value="<?php echo ($this->input->post('size_status') ? $this->input->post('size_status') : $tbl_size['size_status']); ?>" class="form-control" id="size_status" />
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