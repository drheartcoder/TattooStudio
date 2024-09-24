<div class="row">
    <div class="col-md-12">
      	<div class="box box-info">
            <div class="box-header with-border">
              	<h3 class="box-title">Notification Edit</h3>
            </div>
			<?php echo form_open('notification/edit/'.$notification['notification_id']); ?>
			<div class="box-body">
				<div class="row clearfix">
					<div class="col-md-6">
						<label for="from_id" class="control-label">From Id</label>
						<div class="form-group">
							<input type="text" name="from_id" value="<?php echo ($this->input->post('from_id') ? $this->input->post('from_id') : $notification['from_id']); ?>" class="form-control" id="from_id" />
						</div>
					</div>
					<div class="col-md-6">
						<label for="to_id" class="control-label">To Id</label>
						<div class="form-group">
							<input type="text" name="to_id" value="<?php echo ($this->input->post('to_id') ? $this->input->post('to_id') : $notification['to_id']); ?>" class="form-control" id="to_id" />
						</div>
					</div>
					<div class="col-md-6">
						<label for="status" class="control-label">Status</label>
						<div class="form-group">
							<input type="text" name="status" value="<?php echo ($this->input->post('status') ? $this->input->post('status') : $notification['status']); ?>" class="form-control" id="status" />
						</div>
					</div>
					<div class="col-md-6">
						<label for="notification_date" class="control-label">Notification Date</label>
						<div class="form-group">
							<input type="text" name="notification_date" value="<?php echo ($this->input->post('notification_date') ? $this->input->post('notification_date') : $notification['notification_date']); ?>" class="has-datepicker form-control" id="notification_date" />
						</div>
					</div>
					<div class="col-md-6">
						<label for="is_delete" class="control-label">Is Delete</label>
						<div class="form-group">
							<input type="text" name="is_delete" value="<?php echo ($this->input->post('is_delete') ? $this->input->post('is_delete') : $notification['is_delete']); ?>" class="form-control" id="is_delete" />
						</div>
					</div>
					<div class="col-md-6">
						<label for="message" class="control-label">Message</label>
						<div class="form-group">
							<textarea name="message" class="form-control" id="message"><?php echo ($this->input->post('message') ? $this->input->post('message') : $notification['message']); ?></textarea>
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