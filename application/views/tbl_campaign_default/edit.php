<div class="row">
    <div class="col-md-12">
      	<div class="box box-info">
            <div class="box-header with-border">
              	<h3 class="box-title">Tbl Campaign Default Edit</h3>
            </div>
			<?php echo form_open('tbl_campaign_default/edit/'.$tbl_campaign_default['campaign_id']); ?>
			<div class="box-body">
				<div class="row clearfix">
					<div class="col-md-6">
						<label for="category" class="control-label">Category</label>
						<div class="form-group">
							<input type="text" name="category" value="<?php echo ($this->input->post('category') ? $this->input->post('category') : $tbl_campaign_default['category']); ?>" class="form-control" id="category" />
						</div>
					</div>
					<div class="col-md-6">
						<label for="campaign_name" class="control-label">Campaign Name</label>
						<div class="form-group">
							<input type="text" name="campaign_name" value="<?php echo ($this->input->post('campaign_name') ? $this->input->post('campaign_name') : $tbl_campaign_default['campaign_name']); ?>" class="form-control" id="campaign_name" />
						</div>
					</div>
					<div class="col-md-6">
						<label for="sub_title" class="control-label">Sub Title</label>
						<div class="form-group">
							<input type="text" name="sub_title" value="<?php echo ($this->input->post('sub_title') ? $this->input->post('sub_title') : $tbl_campaign_default['sub_title']); ?>" class="form-control" id="sub_title" />
						</div>
					</div>
					<div class="col-md-6">
						<label for="subject_default" class="control-label">Subject Default</label>
						<div class="form-group">
							<textarea name="subject_default" class="form-control" id="subject_default"><?php echo ($this->input->post('subject_default') ? $this->input->post('subject_default') : $tbl_campaign_default['subject_default']); ?></textarea>
						</div>
					</div>
					<div class="col-md-6">
						<label for="campaign_body" class="control-label">Campaign Body</label>
						<div class="form-group">
							<textarea name="campaign_body" class="form-control" id="campaign_body"><?php echo ($this->input->post('campaign_body') ? $this->input->post('campaign_body') : $tbl_campaign_default['campaign_body']); ?></textarea>
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