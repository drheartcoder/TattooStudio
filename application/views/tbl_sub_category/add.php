<div class="row">
    <div class="col-md-12">
      	<div class="box box-info">
            <div class="box-header with-border">
              	<h3 class="box-title">Tbl Sub Category Add</h3>
            </div>
            <?php echo form_open('tbl_sub_category/add'); ?>
          	<div class="box-body">
          		<div class="row clearfix">
					<div class="col-md-6">
						<label for="sub_category" class="control-label">Sub Category</label>
						<div class="form-group">
							<input type="text" name="sub_category" value="<?php echo $this->input->post('sub_category'); ?>" class="form-control" id="sub_category" />
						</div>
					</div>
					<div class="col-md-6">
						<label for="fk_category_id" class="control-label">Fk Category Id</label>
						<div class="form-group">
							<input type="text" name="fk_category_id" value="<?php echo $this->input->post('fk_category_id'); ?>" class="form-control" id="fk_category_id" />
						</div>
					</div>
					<div class="col-md-6">
						<label for="fk_sub_category_tag_id" class="control-label">Fk Sub Category Tag Id</label>
						<div class="form-group">
							<input type="text" name="fk_sub_category_tag_id" value="<?php echo $this->input->post('fk_sub_category_tag_id'); ?>" class="form-control" id="fk_sub_category_tag_id" />
						</div>
					</div>
					<div class="col-md-6">
						<label for="sub_cat_status" class="control-label">Sub Cat Status</label>
						<div class="form-group">
							<input type="text" name="sub_cat_status" value="<?php echo $this->input->post('sub_cat_status'); ?>" class="form-control" id="sub_cat_status" />
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