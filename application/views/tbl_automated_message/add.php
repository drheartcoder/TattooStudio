<div class="row">
    <div class="col-md-12">
      	<div class="box box-info">
            <div class="box-header with-border">
              	<h3 class="box-title">Tbl Automated Message Add</h3>
            </div>
            <?php echo form_open('tbl_automated_message/add'); ?>
          	<div class="box-body">
          		<div class="row clearfix">
					<div class="col-md-6">
						<label for="fk_event_id" class="control-label">Fk Event Id</label>
						<div class="form-group">
							<input type="text" name="fk_event_id" value="<?php echo $this->input->post('fk_event_id'); ?>" class="form-control" id="fk_event_id" />
						</div>
					</div>
					<div class="col-md-6">
						<label for="event_category_name" class="control-label">Event Category Name</label>
						<div class="form-group">
							<input type="text" name="event_category_name" value="<?php echo $this->input->post('event_category_name'); ?>" class="form-control" id="event_category_name" />
						</div>
					</div>
					<div class="col-md-6">
						<label for="message_name" class="control-label">Message Name</label>
						<div class="form-group">
							<input type="text" name="message_name" value="<?php echo $this->input->post('message_name'); ?>" class="form-control" id="message_name" />
						</div>
					</div>
					<div class="col-md-6">
						<label for="fk_user_id" class="control-label">Fk User Id</label>
						<div class="form-group">
							<input type="text" name="fk_user_id" value="<?php echo $this->input->post('fk_user_id'); ?>" class="form-control" id="fk_user_id" />
						</div>
					</div>
					<div class="col-md-6">
						<label for="fk_business_id" class="control-label">Fk Business Id</label>
						<div class="form-group">
							<input type="text" name="fk_business_id" value="<?php echo $this->input->post('fk_business_id'); ?>" class="form-control" id="fk_business_id" />
						</div>
					</div>
					<div class="col-md-6">
						<label for="reply_name" class="control-label">Reply Name</label>
						<div class="form-group">
							<input type="text" name="reply_name" value="<?php echo $this->input->post('reply_name'); ?>" class="form-control" id="reply_name" />
						</div>
					</div>
					<div class="col-md-6">
						<label for="reply_email" class="control-label">Reply Email</label>
						<div class="form-group">
							<input type="text" name="reply_email" value="<?php echo $this->input->post('reply_email'); ?>" class="form-control" id="reply_email" />
						</div>
					</div>
					<div class="col-md-6">
						<label for="message_body_one" class="control-label">Message Body One</label>
						<div class="form-group">
							<input type="text" name="message_body_one" value="<?php echo $this->input->post('message_body_one'); ?>" class="form-control" id="message_body_one" />
						</div>
					</div>
					<div class="col-md-6">
						<label for="message_body_two" class="control-label">Message Body Two</label>
						<div class="form-group">
							<input type="text" name="message_body_two" value="<?php echo $this->input->post('message_body_two'); ?>" class="form-control" id="message_body_two" />
						</div>
					</div>
					<div class="col-md-6">
						<label for="text_message" class="control-label">Text Message</label>
						<div class="form-group">
							<input type="text" name="text_message" value="<?php echo $this->input->post('text_message'); ?>" class="form-control" id="text_message" />
						</div>
					</div>
					<div class="col-md-6">
						<label for="default_send_type" class="control-label">Default Send Type</label>
						<div class="form-group">
							<input type="text" name="default_send_type" value="<?php echo $this->input->post('default_send_type'); ?>" class="form-control" id="default_send_type" />
						</div>
					</div>
					<div class="col-md-6">
						<label for="subject" class="control-label">Subject</label>
						<div class="form-group">
							<input type="text" name="subject" value="<?php echo $this->input->post('subject'); ?>" class="form-control" id="subject" />
						</div>
					</div>
					<div class="col-md-6">
						<label for="status" class="control-label">Status</label>
						<div class="form-group">
							<input type="text" name="status" value="<?php echo $this->input->post('status'); ?>" class="form-control" id="status" />
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