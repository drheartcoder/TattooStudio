<div class="row">
    <div class="col-md-12">
      	<div class="box box-info">
            <div class="box-header with-border">
              	<h3 class="box-title">Tbl Faq Edit</h3>
            </div>
			<?php echo form_open('tbl_faq/edit/'.$tbl_faq['faq_id']); ?>
			<div class="box-body">
				<div class="row clearfix">
					<div class="col-md-6">
						<label for="faq_type" class="control-label">Faq Type</label>
						<div class="form-group">
							<input type="text" name="faq_type" value="<?php echo ($this->input->post('faq_type') ? $this->input->post('faq_type') : $tbl_faq['faq_type']); ?>" class="form-control" id="faq_type" />
						</div>
					</div>
					<div class="col-md-6">
						<label for="fk_faq_category_id" class="control-label">Fk Faq Category Id</label>
						<div class="form-group">
							<input type="text" name="fk_faq_category_id" value="<?php echo ($this->input->post('fk_faq_category_id') ? $this->input->post('fk_faq_category_id') : $tbl_faq['fk_faq_category_id']); ?>" class="form-control" id="fk_faq_category_id" />
						</div>
					</div>
					<div class="col-md-6">
						<label for="faq_question" class="control-label">Faq Question</label>
						<div class="form-group">
							<input type="text" name="faq_question" value="<?php echo ($this->input->post('faq_question') ? $this->input->post('faq_question') : $tbl_faq['faq_question']); ?>" class="form-control" id="faq_question" />
						</div>
					</div>
					<div class="col-md-6">
						<label for="faq_status" class="control-label">Faq Status</label>
						<div class="form-group">
							<input type="text" name="faq_status" value="<?php echo ($this->input->post('faq_status') ? $this->input->post('faq_status') : $tbl_faq['faq_status']); ?>" class="form-control" id="faq_status" />
						</div>
					</div>
					<div class="col-md-6">
						<label for="faq_answer" class="control-label">Faq Answer</label>
						<div class="form-group">
							<textarea name="faq_answer" class="form-control" id="faq_answer"><?php echo ($this->input->post('faq_answer') ? $this->input->post('faq_answer') : $tbl_faq['faq_answer']); ?></textarea>
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