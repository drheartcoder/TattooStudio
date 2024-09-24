<div class="row">
    <div class="col-md-12">
      	<div class="box box-info">
            <div class="box-header with-border">
              	<h3 class="box-title">Tbl Campaign Template Edit</h3>
            </div>
			<?php echo form_open('tbl_campaign_template/edit/'.$tbl_campaign_template['template_id']); ?>
			<div class="box-body">
				<div class="row clearfix">
					<div class="col-md-6">
						<label for="campaign_id" class="control-label">Campaign Id</label>
						<div class="form-group">
							<input type="text" name="campaign_id" value="<?php echo ($this->input->post('campaign_id') ? $this->input->post('campaign_id') : $tbl_campaign_template['campaign_id']); ?>" class="form-control" id="campaign_id" />
						</div>
					</div>
					<div class="col-md-6">
						<label for="fk_business_id" class="control-label">Fk Business Id</label>
						<div class="form-group">
							<input type="text" name="fk_business_id" value="<?php echo ($this->input->post('fk_business_id') ? $this->input->post('fk_business_id') : $tbl_campaign_template['fk_business_id']); ?>" class="form-control" id="fk_business_id" />
						</div>
					</div>
					<div class="col-md-6">
						<label for="template_name" class="control-label">Template Name</label>
						<div class="form-group">
							<input type="text" name="template_name" value="<?php echo ($this->input->post('template_name') ? $this->input->post('template_name') : $tbl_campaign_template['template_name']); ?>" class="form-control" id="template_name" />
						</div>
					</div>
					<div class="col-md-6">
						<label for="category" class="control-label">Category</label>
						<div class="form-group">
							<input type="text" name="category" value="<?php echo ($this->input->post('category') ? $this->input->post('category') : $tbl_campaign_template['category']); ?>" class="form-control" id="category" />
						</div>
					</div>
					<div class="col-md-6">
						<label for="subject" class="control-label">Subject</label>
						<div class="form-group">
							<input type="text" name="subject" value="<?php echo ($this->input->post('subject') ? $this->input->post('subject') : $tbl_campaign_template['subject']); ?>" class="form-control" id="subject" />
						</div>
					</div>
					<div class="col-md-6">
						<label for="reply_to_name" class="control-label">Reply To Name</label>
						<div class="form-group">
							<input type="text" name="reply_to_name" value="<?php echo ($this->input->post('reply_to_name') ? $this->input->post('reply_to_name') : $tbl_campaign_template['reply_to_name']); ?>" class="form-control" id="reply_to_name" />
						</div>
					</div>
					<div class="col-md-6">
						<label for="reply_to_email" class="control-label">Reply To Email</label>
						<div class="form-group">
							<input type="text" name="reply_to_email" value="<?php echo ($this->input->post('reply_to_email') ? $this->input->post('reply_to_email') : $tbl_campaign_template['reply_to_email']); ?>" class="form-control" id="reply_to_email" />
						</div>
					</div>
					<div class="col-md-6">
						<label for="message_body" class="control-label">Message Body</label>
						<div class="form-group">
							<textarea name="message_body" class="form-control" id="message_body"><?php echo ($this->input->post('message_body') ? $this->input->post('message_body') : $tbl_campaign_template['message_body']); ?></textarea>
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