<div class="row">
    <div class="col-md-12">
      	<div class="box box-info">
            <div class="box-header with-border">
              	<h3 class="box-title">Tbl Admin Stripe Detail Add</h3>
            </div>
            <?php echo form_open('tbl_admin_stripe_detail/add'); ?>
          	<div class="box-body">
          		<div class="row clearfix">
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