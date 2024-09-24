<div class="row">
    <div class="col-md-12">
      	<div class="box box-info">
            <div class="box-header with-border">
              	<h3 class="box-title">Tbl Automated Event Edit</h3>
            </div>
			<?php echo form_open('tbl_automated_event/edit/'.$tbl_automated_event['event_type_id']); ?>
			<div class="box-body">
				<div class="row clearfix">
					<div class="col-md-6">
						<label for="event_category_name" class="control-label">Event Category Name</label>
						<div class="form-group">
							<input type="text" name="event_category_name" value="<?php echo ($this->input->post('event_category_name') ? $this->input->post('event_category_name') : $tbl_automated_event['event_category_name']); ?>" class="form-control" id="event_category_name" />
						</div>
					</div>
					<div class="col-md-6">
						<label for="event_name" class="control-label">Event Name</label>
						<div class="form-group">
							<input type="text" name="event_name" value="<?php echo ($this->input->post('event_name') ? $this->input->post('event_name') : $tbl_automated_event['event_name']); ?>" class="form-control" id="event_name" />
						</div>
					</div>
					<div class="col-md-6">
						<label for="event_sub_title" class="control-label">Event Sub Title</label>
						<div class="form-group">
							<input type="text" name="event_sub_title" value="<?php echo ($this->input->post('event_sub_title') ? $this->input->post('event_sub_title') : $tbl_automated_event['event_sub_title']); ?>" class="form-control" id="event_sub_title" />
						</div>
					</div>
					<div class="col-md-6">
						<label for="message_body_one" class="control-label">Message Body One</label>
						<div class="form-group">
							<input type="text" name="message_body_one" value="<?php echo ($this->input->post('message_body_one') ? $this->input->post('message_body_one') : $tbl_automated_event['message_body_one']); ?>" class="form-control" id="message_body_one" />
						</div>
					</div>
					<div class="col-md-6">
						<label for="message_body_two" class="control-label">Message Body Two</label>
						<div class="form-group">
							<input type="text" name="message_body_two" value="<?php echo ($this->input->post('message_body_two') ? $this->input->post('message_body_two') : $tbl_automated_event['message_body_two']); ?>" class="form-control" id="message_body_two" />
						</div>
					</div>
					<div class="col-md-6">
						<label for="subject" class="control-label">Subject</label>
						<div class="form-group">
							<input type="text" name="subject" value="<?php echo ($this->input->post('subject') ? $this->input->post('subject') : $tbl_automated_event['subject']); ?>" class="form-control" id="subject" />
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