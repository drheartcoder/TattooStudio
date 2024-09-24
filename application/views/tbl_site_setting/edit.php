<div class="row">
    <div class="col-md-12">
      	<div class="box box-info">
            <div class="box-header with-border">
              	<h3 class="box-title">Tbl Site Setting Edit</h3>
            </div>
			<?php echo form_open('tbl_site_setting/edit/'.$tbl_site_setting['id']); ?>
			<div class="box-body">
				<div class="row clearfix">
					<div class="col-md-6">
						<label for="stripe_tansaction_fees" class="control-label">Stripe Tansaction Fees</label>
						<div class="form-group">
							<input type="text" name="stripe_tansaction_fees" value="<?php echo ($this->input->post('stripe_tansaction_fees') ? $this->input->post('stripe_tansaction_fees') : $tbl_site_setting['stripe_tansaction_fees']); ?>" class="form-control" id="stripe_tansaction_fees" />
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