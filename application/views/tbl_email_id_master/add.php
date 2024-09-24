<div class="row">
    <div class="col-md-12">
      	<div class="box box-info">
            <div class="box-header with-border">
              	<h3 class="box-title">Tbl Email Id Master Add</h3>
            </div>
            <?php echo form_open('tbl_email_id_master/add'); ?>
          	<div class="box-body">
          		<div class="row clearfix">
					<div class="col-md-6">
						<label for="contact_email" class="control-label">Contact Email</label>
						<div class="form-group">
							<input type="text" name="contact_email" value="<?php echo $this->input->post('contact_email'); ?>" class="form-control" id="contact_email" />
						</div>
					</div>
					<div class="col-md-6">
						<label for="info_email" class="control-label">Info Email</label>
						<div class="form-group">
							<input type="text" name="info_email" value="<?php echo $this->input->post('info_email'); ?>" class="form-control" id="info_email" />
						</div>
					</div>
					<div class="col-md-6">
						<label for="support_email" class="control-label">Support Email</label>
						<div class="form-group">
							<input type="text" name="support_email" value="<?php echo $this->input->post('support_email'); ?>" class="form-control" id="support_email" />
						</div>
					</div>
					<div class="col-md-6">
						<label for="business_email" class="control-label">Business Email</label>
						<div class="form-group">
							<input type="text" name="business_email" value="<?php echo $this->input->post('business_email'); ?>" class="form-control" id="business_email" />
						</div>
					</div>
					<div class="col-md-6">
						<label for="media_email" class="control-label">Media Email</label>
						<div class="form-group">
							<input type="text" name="media_email" value="<?php echo $this->input->post('media_email'); ?>" class="form-control" id="media_email" />
						</div>
					</div>
					<div class="col-md-6">
						<label for="job_email" class="control-label">Job Email</label>
						<div class="form-group">
							<input type="text" name="job_email" value="<?php echo $this->input->post('job_email'); ?>" class="form-control" id="job_email" />
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