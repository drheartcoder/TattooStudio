<div class="row">
    <div class="col-md-12">
      	<div class="box box-info">
            <div class="box-header with-border">
              	<h3 class="box-title">Tbl Stripe Detail Add</h3>
            </div>
            <?php echo form_open('tbl_stripe_detail/add'); ?>
          	<div class="box-body">
          		<div class="row clearfix">
					<div class="col-md-6">
						<label for="user_id" class="control-label">User Id</label>
						<div class="form-group">
							<input type="text" name="user_id" value="<?php echo $this->input->post('user_id'); ?>" class="form-control" id="user_id" />
						</div>
					</div>
					<div class="col-md-6">
						<label for="business_id" class="control-label">Business Id</label>
						<div class="form-group">
							<input type="text" name="business_id" value="<?php echo $this->input->post('business_id'); ?>" class="form-control" id="business_id" />
						</div>
					</div>
					<div class="col-md-6">
						<label for="stripe_live_api_key" class="control-label">Stripe Live Api Key</label>
						<div class="form-group">
							<input type="text" name="stripe_live_api_key" value="<?php echo $this->input->post('stripe_live_api_key'); ?>" class="form-control" id="stripe_live_api_key" />
						</div>
					</div>
					<div class="col-md-6">
						<label for="stripe_live_public_api_key" class="control-label">Stripe Live Public Api Key</label>
						<div class="form-group">
							<input type="text" name="stripe_live_public_api_key" value="<?php echo $this->input->post('stripe_live_public_api_key'); ?>" class="form-control" id="stripe_live_public_api_key" />
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