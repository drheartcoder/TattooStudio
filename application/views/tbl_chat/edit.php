<div class="row">
    <div class="col-md-12">
      	<div class="box box-info">
            <div class="box-header with-border">
              	<h3 class="box-title">Tbl Chat Edit</h3>
            </div>
			<?php echo form_open('tbl_chat/edit/'.$tbl_chat['id']); ?>
			<div class="box-body">
				<div class="row clearfix">
					<div class="col-md-6">
						<label for="sender_id" class="control-label">Sender Id</label>
						<div class="form-group">
							<input type="text" name="sender_id" value="<?php echo ($this->input->post('sender_id') ? $this->input->post('sender_id') : $tbl_chat['sender_id']); ?>" class="form-control" id="sender_id" />
						</div>
					</div>
					<div class="col-md-6">
						<label for="receiver_id" class="control-label">Receiver Id</label>
						<div class="form-group">
							<input type="text" name="receiver_id" value="<?php echo ($this->input->post('receiver_id') ? $this->input->post('receiver_id') : $tbl_chat['receiver_id']); ?>" class="form-control" id="receiver_id" />
						</div>
					</div>
					<div class="col-md-6">
						<label for="is_read" class="control-label">Is Read</label>
						<div class="form-group">
							<input type="text" name="is_read" value="<?php echo ($this->input->post('is_read') ? $this->input->post('is_read') : $tbl_chat['is_read']); ?>" class="form-control" id="is_read" />
						</div>
					</div>
					<div class="col-md-6">
						<label for="created_at" class="control-label">Created At</label>
						<div class="form-group">
							<input type="text" name="created_at" value="<?php echo ($this->input->post('created_at') ? $this->input->post('created_at') : $tbl_chat['created_at']); ?>" class="form-control" id="created_at" />
						</div>
					</div>
					<div class="col-md-6">
						<label for="message" class="control-label">Message</label>
						<div class="form-group">
							<textarea name="message" class="form-control" id="message"><?php echo ($this->input->post('message') ? $this->input->post('message') : $tbl_chat['message']); ?></textarea>
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