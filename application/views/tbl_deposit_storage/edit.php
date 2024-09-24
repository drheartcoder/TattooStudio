<div class="row">
    <div class="col-md-12">
      	<div class="box box-info">
            <div class="box-header with-border">
              	<h3 class="box-title">Tbl Deposit Storage Edit</h3>
            </div>
			<?php echo form_open('tbl_deposit_storage/edit/'.$tbl_deposit_storage['deposit_info_id']); ?>
			<div class="box-body">
				<div class="row clearfix">
					<div class="col-md-6">
						<label for="fk_user_id" class="control-label">Fk User Id</label>
						<div class="form-group">
							<input type="text" name="fk_user_id" value="<?php echo ($this->input->post('fk_user_id') ? $this->input->post('fk_user_id') : $tbl_deposit_storage['fk_user_id']); ?>" class="form-control" id="fk_user_id" />
						</div>
					</div>
					<div class="col-md-6">
						<label for="paypal_email" class="control-label">Paypal Email</label>
						<div class="form-group">
							<input type="text" name="paypal_email" value="<?php echo ($this->input->post('paypal_email') ? $this->input->post('paypal_email') : $tbl_deposit_storage['paypal_email']); ?>" class="form-control" id="paypal_email" />
						</div>
					</div>
					<div class="col-md-6">
						<label for="paper_check" class="control-label">Paper Check</label>
						<div class="form-group">
							<input type="text" name="paper_check" value="<?php echo ($this->input->post('paper_check') ? $this->input->post('paper_check') : $tbl_deposit_storage['paper_check']); ?>" class="form-control" id="paper_check" />
						</div>
					</div>
					<div class="col-md-6">
						<label for="selected" class="control-label">Selected</label>
						<div class="form-group">
							<input type="text" name="selected" value="<?php echo ($this->input->post('selected') ? $this->input->post('selected') : $tbl_deposit_storage['selected']); ?>" class="form-control" id="selected" />
						</div>
					</div>
					<div class="col-md-6">
						<label for="direct_deposit" class="control-label">Direct Deposit</label>
						<div class="form-group">
							<textarea name="direct_deposit" class="form-control" id="direct_deposit"><?php echo ($this->input->post('direct_deposit') ? $this->input->post('direct_deposit') : $tbl_deposit_storage['direct_deposit']); ?></textarea>
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