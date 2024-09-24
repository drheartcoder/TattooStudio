<div class="row">
    <div class="col-md-12">
      	<div class="box box-info">
            <div class="box-header with-border">
              	<h3 class="box-title">Tbl Payment Edit</h3>
            </div>
			<?php echo form_open('tbl_payment/edit/'.$tbl_payment['id']); ?>
			<div class="box-body">
				<div class="row clearfix">
					<div class="col-md-6">
						<label for="user_id" class="control-label">User Id</label>
						<div class="form-group">
							<input type="text" name="user_id" value="<?php echo ($this->input->post('user_id') ? $this->input->post('user_id') : $tbl_payment['user_id']); ?>" class="form-control" id="user_id" />
						</div>
					</div>
					<div class="col-md-6">
						<label for="card_no" class="control-label">Card No</label>
						<div class="form-group">
							<input type="text" name="card_no" value="<?php echo ($this->input->post('card_no') ? $this->input->post('card_no') : $tbl_payment['card_no']); ?>" class="form-control" id="card_no" />
						</div>
					</div>
					<div class="col-md-6">
						<label for="card_cvc" class="control-label">Card Cvc</label>
						<div class="form-group">
							<input type="text" name="card_cvc" value="<?php echo ($this->input->post('card_cvc') ? $this->input->post('card_cvc') : $tbl_payment['card_cvc']); ?>" class="form-control" id="card_cvc" />
						</div>
					</div>
					<div class="col-md-6">
						<label for="card_exp_month" class="control-label">Card Exp Month</label>
						<div class="form-group">
							<input type="text" name="card_exp_month" value="<?php echo ($this->input->post('card_exp_month') ? $this->input->post('card_exp_month') : $tbl_payment['card_exp_month']); ?>" class="form-control" id="card_exp_month" />
						</div>
					</div>
					<div class="col-md-6">
						<label for="card_exp_year" class="control-label">Card Exp Year</label>
						<div class="form-group">
							<input type="text" name="card_exp_year" value="<?php echo ($this->input->post('card_exp_year') ? $this->input->post('card_exp_year') : $tbl_payment['card_exp_year']); ?>" class="form-control" id="card_exp_year" />
						</div>
					</div>
					<div class="col-md-6">
						<label for="paid_amount" class="control-label">Paid Amount</label>
						<div class="form-group">
							<input type="text" name="paid_amount" value="<?php echo ($this->input->post('paid_amount') ? $this->input->post('paid_amount') : $tbl_payment['paid_amount']); ?>" class="form-control" id="paid_amount" />
						</div>
					</div>
					<div class="col-md-6">
						<label for="txn_id" class="control-label">Txn Id</label>
						<div class="form-group">
							<input type="text" name="txn_id" value="<?php echo ($this->input->post('txn_id') ? $this->input->post('txn_id') : $tbl_payment['txn_id']); ?>" class="form-control" id="txn_id" />
						</div>
					</div>
					<div class="col-md-6">
						<label for="balance_transaction" class="control-label">Balance Transaction</label>
						<div class="form-group">
							<input type="text" name="balance_transaction" value="<?php echo ($this->input->post('balance_transaction') ? $this->input->post('balance_transaction') : $tbl_payment['balance_transaction']); ?>" class="form-control" id="balance_transaction" />
						</div>
					</div>
					<div class="col-md-6">
						<label for="payment_date" class="control-label">Payment Date</label>
						<div class="form-group">
							<input type="text" name="payment_date" value="<?php echo ($this->input->post('payment_date') ? $this->input->post('payment_date') : $tbl_payment['payment_date']); ?>" class="form-control" id="payment_date" />
						</div>
					</div>
					<div class="col-md-6">
						<label for="stripeResponse" class="control-label">StripeResponse</label>
						<div class="form-group">
							<textarea name="stripeResponse" class="form-control" id="stripeResponse"><?php echo ($this->input->post('stripeResponse') ? $this->input->post('stripeResponse') : $tbl_payment['stripeResponse']); ?></textarea>
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