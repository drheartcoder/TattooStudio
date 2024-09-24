<div class="row">
    <div class="col-md-12">
      	<div class="box box-info">
            <div class="box-header with-border">
              	<h3 class="box-title">Tbl Campaign Scheduler Add</h3>
            </div>
            <?php echo form_open('tbl_campaign_scheduler/add'); ?>
          	<div class="box-body">
          		<div class="row clearfix">
					<div class="col-md-6">
						<label for="uniq_tracker_id" class="control-label">Uniq Tracker Id</label>
						<div class="form-group">
							<input type="text" name="uniq_tracker_id" value="<?php echo $this->input->post('uniq_tracker_id'); ?>" class="form-control" id="uniq_tracker_id" />
						</div>
					</div>
					<div class="col-md-6">
						<label for="fk_business_id" class="control-label">Fk Business Id</label>
						<div class="form-group">
							<input type="text" name="fk_business_id" value="<?php echo $this->input->post('fk_business_id'); ?>" class="form-control" id="fk_business_id" />
						</div>
					</div>
					<div class="col-md-6">
						<label for="type" class="control-label">Type</label>
						<div class="form-group">
							<input type="text" name="type" value="<?php echo $this->input->post('type'); ?>" class="form-control" id="type" />
						</div>
					</div>
					<div class="col-md-6">
						<label for="template_id" class="control-label">Template Id</label>
						<div class="form-group">
							<input type="text" name="template_id" value="<?php echo $this->input->post('template_id'); ?>" class="form-control" id="template_id" />
						</div>
					</div>
					<div class="col-md-6">
						<label for="template_name" class="control-label">Template Name</label>
						<div class="form-group">
							<input type="text" name="template_name" value="<?php echo $this->input->post('template_name'); ?>" class="form-control" id="template_name" />
						</div>
					</div>
					<div class="col-md-6">
						<label for="schedule_date" class="control-label">Schedule Date</label>
						<div class="form-group">
							<input type="text" name="schedule_date" value="<?php echo $this->input->post('schedule_date'); ?>" class="has-datepicker form-control" id="schedule_date" />
						</div>
					</div>
					<div class="col-md-6">
						<label for="schedule_time" class="control-label">Schedule Time</label>
						<div class="form-group">
							<input type="text" name="schedule_time" value="<?php echo $this->input->post('schedule_time'); ?>" class="form-control" id="schedule_time" />
						</div>
					</div>
					<div class="col-md-6">
						<label for="sent_time" class="control-label">Sent Time</label>
						<div class="form-group">
							<input type="text" name="sent_time" value="<?php echo $this->input->post('sent_time'); ?>" class="form-control" id="sent_time" />
						</div>
					</div>
					<div class="col-md-6">
						<label for="reply_to_name" class="control-label">Reply To Name</label>
						<div class="form-group">
							<input type="text" name="reply_to_name" value="<?php echo $this->input->post('reply_to_name'); ?>" class="form-control" id="reply_to_name" />
						</div>
					</div>
					<div class="col-md-6">
						<label for="reply_to_email" class="control-label">Reply To Email</label>
						<div class="form-group">
							<input type="text" name="reply_to_email" value="<?php echo $this->input->post('reply_to_email'); ?>" class="form-control" id="reply_to_email" />
						</div>
					</div>
					<div class="col-md-6">
						<label for="client_id" class="control-label">Client Id</label>
						<div class="form-group">
							<textarea name="client_id" class="form-control" id="client_id"><?php echo $this->input->post('client_id'); ?></textarea>
						</div>
					</div>
					<div class="col-md-6">
						<label for="subject" class="control-label">Subject</label>
						<div class="form-group">
							<textarea name="subject" class="form-control" id="subject"><?php echo $this->input->post('subject'); ?></textarea>
						</div>
					</div>
					<div class="col-md-6">
						<label for="message_body" class="control-label">Message Body</label>
						<div class="form-group">
							<textarea name="message_body" class="form-control" id="message_body"><?php echo $this->input->post('message_body'); ?></textarea>
						</div>
					</div>
					<div class="col-md-6">
						<label for="opened" class="control-label">Opened</label>
						<div class="form-group">
							<textarea name="opened" class="form-control" id="opened"><?php echo $this->input->post('opened'); ?></textarea>
						</div>
					</div>
					<div class="col-md-6">
						<label for="booked" class="control-label">Booked</label>
						<div class="form-group">
							<textarea name="booked" class="form-control" id="booked"><?php echo $this->input->post('booked'); ?></textarea>
						</div>
					</div>
					<div class="col-md-6">
						<label for="bounced" class="control-label">Bounced</label>
						<div class="form-group">
							<textarea name="bounced" class="form-control" id="bounced"><?php echo $this->input->post('bounced'); ?></textarea>
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