<div class="row">
    <div class="col-md-12">
      	<div class="box box-info">
            <div class="box-header with-border">
              	<h3 class="box-title">Tbl Faq Category Edit</h3>
            </div>
			<?php echo form_open('tbl_faq_category/edit/'.$tbl_faq_category['faq_category_id']); ?>
			<div class="box-body">
				<div class="row clearfix">
					<div class="col-md-6">
						<label for="faq_category_name" class="control-label">Faq Category Name</label>
						<div class="form-group">
							<input type="text" name="faq_category_name" value="<?php echo ($this->input->post('faq_category_name') ? $this->input->post('faq_category_name') : $tbl_faq_category['faq_category_name']); ?>" class="form-control" id="faq_category_name" />
						</div>
					</div>
					<div class="col-md-6">
						<label for="faq_category_type" class="control-label">Faq Category Type</label>
						<div class="form-group">
							<input type="text" name="faq_category_type" value="<?php echo ($this->input->post('faq_category_type') ? $this->input->post('faq_category_type') : $tbl_faq_category['faq_category_type']); ?>" class="form-control" id="faq_category_type" />
						</div>
					</div>
					<div class="col-md-6">
						<label for="faq_category_status" class="control-label">Faq Category Status</label>
						<div class="form-group">
							<input type="text" name="faq_category_status" value="<?php echo ($this->input->post('faq_category_status') ? $this->input->post('faq_category_status') : $tbl_faq_category['faq_category_status']); ?>" class="form-control" id="faq_category_status" />
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