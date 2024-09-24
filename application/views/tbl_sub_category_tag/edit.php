<div class="row">
    <div class="col-md-12">
      	<div class="box box-info">
            <div class="box-header with-border">
              	<h3 class="box-title">Tbl Sub Category Tag Edit</h3>
            </div>
			<?php echo form_open('tbl_sub_category_tag/edit/'.$tbl_sub_category_tag['sub_category_tag_id']); ?>
			<div class="box-body">
				<div class="row clearfix">
					<div class="col-md-6">
						<label for="sub_category_tag_name" class="control-label">Sub Category Tag Name</label>
						<div class="form-group">
							<input type="text" name="sub_category_tag_name" value="<?php echo ($this->input->post('sub_category_tag_name') ? $this->input->post('sub_category_tag_name') : $tbl_sub_category_tag['sub_category_tag_name']); ?>" class="form-control" id="sub_category_tag_name" />
						</div>
					</div>
					<div class="col-md-6">
						<label for="sub_category_tag_status" class="control-label">Sub Category Tag Status</label>
						<div class="form-group">
							<input type="text" name="sub_category_tag_status" value="<?php echo ($this->input->post('sub_category_tag_status') ? $this->input->post('sub_category_tag_status') : $tbl_sub_category_tag['sub_category_tag_status']); ?>" class="form-control" id="sub_category_tag_status" />
						</div>
					</div>
					<div class="col-md-6">
						<label for="is_delete" class="control-label">Is Delete</label>
						<div class="form-group">
							<input type="text" name="is_delete" value="<?php echo ($this->input->post('is_delete') ? $this->input->post('is_delete') : $tbl_sub_category_tag['is_delete']); ?>" class="form-control" id="is_delete" />
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