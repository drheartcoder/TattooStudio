<div class="row">
    <div class="col-md-12">
      	<div class="box box-info">
            <div class="box-header with-border">
              	<h3 class="box-title">Tbl Newsletter Subscriber Edit</h3>
            </div>
			<?php echo form_open('tbl_newsletter_subscriber/edit/'.$tbl_newsletter_subscriber['sub_id']); ?>
			<div class="box-body">
				<div class="row clearfix">
					<div class="col-md-6">
						<label for="sub_email" class="control-label">Sub Email</label>
						<div class="form-group">
							<input type="text" name="sub_email" value="<?php echo ($this->input->post('sub_email') ? $this->input->post('sub_email') : $tbl_newsletter_subscriber['sub_email']); ?>" class="form-control" id="sub_email" />
						</div>
					</div>
					<div class="col-md-6">
						<label for="sub_name" class="control-label">Sub Name</label>
						<div class="form-group">
							<input type="text" name="sub_name" value="<?php echo ($this->input->post('sub_name') ? $this->input->post('sub_name') : $tbl_newsletter_subscriber['sub_name']); ?>" class="form-control" id="sub_name" />
						</div>
					</div>
					<div class="col-md-6">
						<label for="sub_zipcode" class="control-label">Sub Zipcode</label>
						<div class="form-group">
							<input type="text" name="sub_zipcode" value="<?php echo ($this->input->post('sub_zipcode') ? $this->input->post('sub_zipcode') : $tbl_newsletter_subscriber['sub_zipcode']); ?>" class="form-control" id="sub_zipcode" />
						</div>
					</div>
					<div class="col-md-6">
						<label for="sub_city" class="control-label">Sub City</label>
						<div class="form-group">
							<input type="text" name="sub_city" value="<?php echo ($this->input->post('sub_city') ? $this->input->post('sub_city') : $tbl_newsletter_subscriber['sub_city']); ?>" class="form-control" id="sub_city" />
						</div>
					</div>
					<div class="col-md-6">
						<label for="sub_status" class="control-label">Sub Status</label>
						<div class="form-group">
							<input type="text" name="sub_status" value="<?php echo ($this->input->post('sub_status') ? $this->input->post('sub_status') : $tbl_newsletter_subscriber['sub_status']); ?>" class="form-control" id="sub_status" />
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