<div class="row">
    <div class="col-md-12">
      	<div class="box box-info">
            <div class="box-header with-border">
              	<h3 class="box-title">Tbl Gift Card Edit</h3>
            </div>
			<?php echo form_open('tbl_gift_card/edit/'.$tbl_gift_card['gift_card_id']); ?>
			<div class="box-body">
				<div class="row clearfix">
					<div class="col-md-6">
						<label for="fk_user_id" class="control-label">Fk User Id</label>
						<div class="form-group">
							<input type="text" name="fk_user_id" value="<?php echo ($this->input->post('fk_user_id') ? $this->input->post('fk_user_id') : $tbl_gift_card['fk_user_id']); ?>" class="form-control" id="fk_user_id" />
						</div>
					</div>
					<div class="col-md-6">
						<label for="recipient_name" class="control-label">Recipient Name</label>
						<div class="form-group">
							<input type="text" name="recipient_name" value="<?php echo ($this->input->post('recipient_name') ? $this->input->post('recipient_name') : $tbl_gift_card['recipient_name']); ?>" class="form-control" id="recipient_name" />
						</div>
					</div>
					<div class="col-md-6">
						<label for="recipient_email" class="control-label">Recipient Email</label>
						<div class="form-group">
							<input type="text" name="recipient_email" value="<?php echo ($this->input->post('recipient_email') ? $this->input->post('recipient_email') : $tbl_gift_card['recipient_email']); ?>" class="form-control" id="recipient_email" />
						</div>
					</div>
					<div class="col-md-6">
						<label for="recipient_user_id" class="control-label">Recipient User Id</label>
						<div class="form-group">
							<input type="text" name="recipient_user_id" value="<?php echo ($this->input->post('recipient_user_id') ? $this->input->post('recipient_user_id') : $tbl_gift_card['recipient_user_id']); ?>" class="form-control" id="recipient_user_id" />
						</div>
					</div>
					<div class="col-md-6">
						<label for="gift_type" class="control-label">Gift Type</label>
						<div class="form-group">
							<input type="text" name="gift_type" value="<?php echo ($this->input->post('gift_type') ? $this->input->post('gift_type') : $tbl_gift_card['gift_type']); ?>" class="form-control" id="gift_type" />
						</div>
					</div>
					<div class="col-md-6">
						<label for="fk_business_id" class="control-label">Fk Business Id</label>
						<div class="form-group">
							<input type="text" name="fk_business_id" value="<?php echo ($this->input->post('fk_business_id') ? $this->input->post('fk_business_id') : $tbl_gift_card['fk_business_id']); ?>" class="form-control" id="fk_business_id" />
						</div>
					</div>
					<div class="col-md-6">
						<label for="fk_service_menu_id" class="control-label">Fk Service Menu Id</label>
						<div class="form-group">
							<input type="text" name="fk_service_menu_id" value="<?php echo ($this->input->post('fk_service_menu_id') ? $this->input->post('fk_service_menu_id') : $tbl_gift_card['fk_service_menu_id']); ?>" class="form-control" id="fk_service_menu_id" />
						</div>
					</div>
					<div class="col-md-6">
						<label for="total_amount" class="control-label">Total Amount</label>
						<div class="form-group">
							<input type="text" name="total_amount" value="<?php echo ($this->input->post('total_amount') ? $this->input->post('total_amount') : $tbl_gift_card['total_amount']); ?>" class="form-control" id="total_amount" />
						</div>
					</div>
					<div class="col-md-6">
						<label for="remaining_amount" class="control-label">Remaining Amount</label>
						<div class="form-group">
							<input type="text" name="remaining_amount" value="<?php echo ($this->input->post('remaining_amount') ? $this->input->post('remaining_amount') : $tbl_gift_card['remaining_amount']); ?>" class="form-control" id="remaining_amount" />
						</div>
					</div>
					<div class="col-md-6">
						<label for="gift_card_token" class="control-label">Gift Card Token</label>
						<div class="form-group">
							<input type="text" name="gift_card_token" value="<?php echo ($this->input->post('gift_card_token') ? $this->input->post('gift_card_token') : $tbl_gift_card['gift_card_token']); ?>" class="form-control" id="gift_card_token" />
						</div>
					</div>
					<div class="col-md-6">
						<label for="transaction_ref_token" class="control-label">Transaction Ref Token</label>
						<div class="form-group">
							<input type="text" name="transaction_ref_token" value="<?php echo ($this->input->post('transaction_ref_token') ? $this->input->post('transaction_ref_token') : $tbl_gift_card['transaction_ref_token']); ?>" class="form-control" id="transaction_ref_token" />
						</div>
					</div>
					<div class="col-md-6">
						<label for="transaction_date_time" class="control-label">Transaction Date Time</label>
						<div class="form-group">
							<input type="text" name="transaction_date_time" value="<?php echo ($this->input->post('transaction_date_time') ? $this->input->post('transaction_date_time') : $tbl_gift_card['transaction_date_time']); ?>" class="form-control" id="transaction_date_time" />
						</div>
					</div>
					<div class="col-md-6">
						<label for="transaction_correlation_id" class="control-label">Transaction Correlation Id</label>
						<div class="form-group">
							<input type="text" name="transaction_correlation_id" value="<?php echo ($this->input->post('transaction_correlation_id') ? $this->input->post('transaction_correlation_id') : $tbl_gift_card['transaction_correlation_id']); ?>" class="form-control" id="transaction_correlation_id" />
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