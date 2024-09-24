<div class="row">
    <div class="col-md-12">
      	<div class="box box-info">
            <div class="box-header with-border">
              	<h3 class="box-title">Tbl Notification Add</h3>
            </div>
            <?php echo form_open('tbl_notification/add'); ?>
          	<div class="box-body">
          		<div class="row clearfix">
					<div class="col-md-6">
						<label for="sender_id" class="control-label">Sender Id</label>
						<div class="form-group">
							<input type="text" name="sender_id" value="<?php echo $this->input->post('sender_id'); ?>" class="form-control" id="sender_id" />
						</div>
					</div>
					<div class="col-md-6">
						<label for="receiver_id" class="control-label">Receiver Id</label>
						<div class="form-group">
							<input type="text" name="receiver_id" value="<?php echo $this->input->post('receiver_id'); ?>" class="form-control" id="receiver_id" />
						</div>
					</div>
					<div class="col-md-6">
						<label for="to_staff_id" class="control-label">To Staff Id</label>
						<div class="form-group">
							<input type="text" name="to_staff_id" value="<?php echo $this->input->post('to_staff_id'); ?>" class="form-control" id="to_staff_id" />
						</div>
					</div>
					<div class="col-md-6">
						<label for="notification" class="control-label">Notification</label>
						<div class="form-group">
							<input type="text" name="notification" value="<?php echo $this->input->post('notification'); ?>" class="form-control" id="notification" />
						</div>
					</div>
					<div class="col-md-6">
						<label for="booking_type" class="control-label">Booking Type</label>
						<div class="form-group">
							<input type="text" name="booking_type" value="<?php echo $this->input->post('booking_type'); ?>" class="form-control" id="booking_type" />
						</div>
					</div>
					<div class="col-md-6">
						<label for="walkin_id" class="control-label">Walkin Id</label>
						<div class="form-group">
							<input type="text" name="walkin_id" value="<?php echo $this->input->post('walkin_id'); ?>" class="form-control" id="walkin_id" />
						</div>
					</div>
					<div class="col-md-6">
						<label for="links" class="control-label">Links</label>
						<div class="form-group">
							<input type="text" name="links" value="<?php echo $this->input->post('links'); ?>" class="form-control" id="links" />
						</div>
					</div>
					<div class="col-md-6">
						<label for="is_read" class="control-label">Is Read</label>
						<div class="form-group">
							<input type="text" name="is_read" value="<?php echo $this->input->post('is_read'); ?>" class="form-control" id="is_read" />
						</div>
					</div>
					<div class="col-md-6">
						<label for="admin_read" class="control-label">Admin Read</label>
						<div class="form-group">
							<input type="text" name="admin_read" value="<?php echo $this->input->post('admin_read'); ?>" class="form-control" id="admin_read" />
						</div>
					</div>
					<div class="col-md-6">
						<label for="date" class="control-label">Date</label>
						<div class="form-group">
							<input type="text" name="date" value="<?php echo $this->input->post('date'); ?>" class="form-control" id="date" />
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