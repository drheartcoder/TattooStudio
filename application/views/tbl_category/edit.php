<div class="row">
    <div class="col-md-12">
      	<div class="box box-info">
            <div class="box-header with-border">
              	<h3 class="box-title">Tbl Category Edit</h3>
            </div>
			<?php echo form_open('tbl_category/edit/'.$tbl_category['category_id']); ?>
			<div class="box-body">
				<div class="row clearfix">
					<div class="col-md-6">
						<label for="category_name" class="control-label">Category Name</label>
						<div class="form-group">
							<input type="text" name="category_name" value="<?php echo ($this->input->post('category_name') ? $this->input->post('category_name') : $tbl_category['category_name']); ?>" class="form-control" id="category_name" />
						</div>
					</div>
					<div class="col-md-6">
						<label for="category_slug" class="control-label">Category Slug</label>
						<div class="form-group">
							<input type="text" name="category_slug" value="<?php echo ($this->input->post('category_slug') ? $this->input->post('category_slug') : $tbl_category['category_slug']); ?>" class="form-control" id="category_slug" />
						</div>
					</div>
					<div class="col-md-6">
						<label for="tattoo_commission" class="control-label">Tattoo Commission</label>
						<div class="form-group">
							<input type="text" name="tattoo_commission" value="<?php echo ($this->input->post('tattoo_commission') ? $this->input->post('tattoo_commission') : $tbl_category['tattoo_commission']); ?>" class="form-control" id="tattoo_commission" />
						</div>
					</div>
					<div class="col-md-6">
						<label for="custom_tattoo_commission" class="control-label">Custom Tattoo Commission</label>
						<div class="form-group">
							<input type="text" name="custom_tattoo_commission" value="<?php echo ($this->input->post('custom_tattoo_commission') ? $this->input->post('custom_tattoo_commission') : $tbl_category['custom_tattoo_commission']); ?>" class="form-control" id="custom_tattoo_commission" />
						</div>
					</div>
					<div class="col-md-6">
						<label for="deposit_amount" class="control-label">Deposit Amount</label>
						<div class="form-group">
							<input type="text" name="deposit_amount" value="<?php echo ($this->input->post('deposit_amount') ? $this->input->post('deposit_amount') : $tbl_category['deposit_amount']); ?>" class="form-control" id="deposit_amount" />
						</div>
					</div>
					<div class="col-md-6">
						<label for="cat_logo" class="control-label">Cat Logo</label>
						<div class="form-group">
							<input type="text" name="cat_logo" value="<?php echo ($this->input->post('cat_logo') ? $this->input->post('cat_logo') : $tbl_category['cat_logo']); ?>" class="form-control" id="cat_logo" />
						</div>
					</div>
					<div class="col-md-6">
						<label for="category_status" class="control-label">Category Status</label>
						<div class="form-group">
							<input type="text" name="category_status" value="<?php echo ($this->input->post('category_status') ? $this->input->post('category_status') : $tbl_category['category_status']); ?>" class="form-control" id="category_status" />
						</div>
					</div>
					<div class="col-md-6">
						<label for="is_delete" class="control-label">Is Delete</label>
						<div class="form-group">
							<input type="text" name="is_delete" value="<?php echo ($this->input->post('is_delete') ? $this->input->post('is_delete') : $tbl_category['is_delete']); ?>" class="form-control" id="is_delete" />
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