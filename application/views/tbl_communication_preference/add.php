<div class="row">
    <div class="col-md-12">
      	<div class="box box-info">
            <div class="box-header with-border">
              	<h3 class="box-title">Tbl Communication Preference Add</h3>
            </div>
            <?php echo form_open('tbl_communication_preference/add'); ?>
          	<div class="box-body">
          		<div class="row clearfix">
					<div class="col-md-6">
						<label for="fk_user_id" class="control-label">Fk User Id</label>
						<div class="form-group">
							<input type="text" name="fk_user_id" value="<?php echo $this->input->post('fk_user_id'); ?>" class="form-control" id="fk_user_id" />
						</div>
					</div>
					<div class="col-md-6">
						<label for="receive_product_announcements" class="control-label">Receive Product Announcements</label>
						<div class="form-group">
							<input type="text" name="receive_product_announcements" value="<?php echo $this->input->post('receive_product_announcements'); ?>" class="form-control" id="receive_product_announcements" />
						</div>
					</div>
					<div class="col-md-6">
						<label for="email" class="control-label">Email</label>
						<div class="form-group">
							<input type="text" name="email" value="<?php echo $this->input->post('email'); ?>" class="form-control" id="email" />
						</div>
					</div>
					<div class="col-md-6">
						<label for="sms" class="control-label">Sms</label>
						<div class="form-group">
							<input type="text" name="sms" value="<?php echo $this->input->post('sms'); ?>" class="form-control" id="sms" />
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