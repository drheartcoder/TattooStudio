<div class="row">
    <div class="col-md-12">
      	<div class="box box-info">
            <div class="box-header with-border">
              	<h3 class="box-title">Tbl Contact Inquiry Edit</h3>
            </div>
			<?php echo form_open('tbl_contact_inquiry/edit/'.$tbl_contact_inquiry['contact_id']); ?>
			<div class="box-body">
				<div class="row clearfix">
					<div class="col-md-6">
						<label for="name" class="control-label">Name</label>
						<div class="form-group">
							<input type="text" name="name" value="<?php echo ($this->input->post('name') ? $this->input->post('name') : $tbl_contact_inquiry['name']); ?>" class="form-control" id="name" />
						</div>
					</div>
					<div class="col-md-6">
						<label for="email" class="control-label">Email</label>
						<div class="form-group">
							<input type="text" name="email" value="<?php echo ($this->input->post('email') ? $this->input->post('email') : $tbl_contact_inquiry['email']); ?>" class="form-control" id="email" />
						</div>
					</div>
					<div class="col-md-6">
						<label for="subject" class="control-label">Subject</label>
						<div class="form-group">
							<input type="text" name="subject" value="<?php echo ($this->input->post('subject') ? $this->input->post('subject') : $tbl_contact_inquiry['subject']); ?>" class="form-control" id="subject" />
						</div>
					</div>
					<div class="col-md-6">
						<label for="type_of_business" class="control-label">Type Of Business</label>
						<div class="form-group">
							<input type="text" name="type_of_business" value="<?php echo ($this->input->post('type_of_business') ? $this->input->post('type_of_business') : $tbl_contact_inquiry['type_of_business']); ?>" class="form-control" id="type_of_business" />
						</div>
					</div>
					<div class="col-md-6">
						<label for="mobile_no" class="control-label">Mobile No</label>
						<div class="form-group">
							<input type="text" name="mobile_no" value="<?php echo ($this->input->post('mobile_no') ? $this->input->post('mobile_no') : $tbl_contact_inquiry['mobile_no']); ?>" class="form-control" id="mobile_no" />
						</div>
					</div>
					<div class="col-md-6">
						<label for="date_time" class="control-label">Date Time</label>
						<div class="form-group">
							<input type="text" name="date_time" value="<?php echo ($this->input->post('date_time') ? $this->input->post('date_time') : $tbl_contact_inquiry['date_time']); ?>" class="has-datetimepicker form-control" id="date_time" />
						</div>
					</div>
					<div class="col-md-6">
						<label for="seen_status" class="control-label">Seen Status</label>
						<div class="form-group">
							<input type="text" name="seen_status" value="<?php echo ($this->input->post('seen_status') ? $this->input->post('seen_status') : $tbl_contact_inquiry['seen_status']); ?>" class="form-control" id="seen_status" />
						</div>
					</div>
					<div class="col-md-6">
						<label for="country" class="control-label">Country</label>
						<div class="form-group">
							<input type="text" name="country" value="<?php echo ($this->input->post('country') ? $this->input->post('country') : $tbl_contact_inquiry['country']); ?>" class="form-control" id="country" />
						</div>
					</div>
					<div class="col-md-6">
						<label for="appointment_date" class="control-label">Appointment Date</label>
						<div class="form-group">
							<input type="text" name="appointment_date" value="<?php echo ($this->input->post('appointment_date') ? $this->input->post('appointment_date') : $tbl_contact_inquiry['appointment_date']); ?>" class="form-control" id="appointment_date" />
						</div>
					</div>
					<div class="col-md-6">
						<label for="appointment_time" class="control-label">Appointment Time</label>
						<div class="form-group">
							<input type="text" name="appointment_time" value="<?php echo ($this->input->post('appointment_time') ? $this->input->post('appointment_time') : $tbl_contact_inquiry['appointment_time']); ?>" class="form-control" id="appointment_time" />
						</div>
					</div>
					<div class="col-md-6">
						<label for="message" class="control-label">Message</label>
						<div class="form-group">
							<textarea name="message" class="form-control" id="message"><?php echo ($this->input->post('message') ? $this->input->post('message') : $tbl_contact_inquiry['message']); ?></textarea>
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