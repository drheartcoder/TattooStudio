<div class="row">
    <div class="col-md-12">
      	<div class="box box-info">
            <div class="box-header with-border">
              	<h3 class="box-title">Tbl Myplan Master Edit</h3>
            </div>
			<?php echo form_open('tbl_myplan_master/edit/'.$tbl_myplan_master['myplan_id']); ?>
			<div class="box-body">
				<div class="row clearfix">
					<div class="col-md-6">
						<label for="user_id" class="control-label">User Id</label>
						<div class="form-group">
							<input type="text" name="user_id" value="<?php echo ($this->input->post('user_id') ? $this->input->post('user_id') : $tbl_myplan_master['user_id']); ?>" class="form-control" id="user_id" />
						</div>
					</div>
					<div class="col-md-6">
						<label for="bussiness_id" class="control-label">Bussiness Id</label>
						<div class="form-group">
							<input type="text" name="bussiness_id" value="<?php echo ($this->input->post('bussiness_id') ? $this->input->post('bussiness_id') : $tbl_myplan_master['bussiness_id']); ?>" class="form-control" id="bussiness_id" />
						</div>
					</div>
					<div class="col-md-6">
						<label for="plan_type" class="control-label">Plan Type</label>
						<div class="form-group">
							<input type="text" name="plan_type" value="<?php echo ($this->input->post('plan_type') ? $this->input->post('plan_type') : $tbl_myplan_master['plan_type']); ?>" class="form-control" id="plan_type" />
						</div>
					</div>
					<div class="col-md-6">
						<label for="amount" class="control-label">Amount</label>
						<div class="form-group">
							<input type="text" name="amount" value="<?php echo ($this->input->post('amount') ? $this->input->post('amount') : $tbl_myplan_master['amount']); ?>" class="form-control" id="amount" />
						</div>
					</div>
					<div class="col-md-6">
						<label for="plan_duration" class="control-label">Plan Duration</label>
						<div class="form-group">
							<input type="text" name="plan_duration" value="<?php echo ($this->input->post('plan_duration') ? $this->input->post('plan_duration') : $tbl_myplan_master['plan_duration']); ?>" class="form-control" id="plan_duration" />
						</div>
					</div>
					<div class="col-md-6">
						<label for="myplan_card_token" class="control-label">Myplan Card Token</label>
						<div class="form-group">
							<input type="text" name="myplan_card_token" value="<?php echo ($this->input->post('myplan_card_token') ? $this->input->post('myplan_card_token') : $tbl_myplan_master['myplan_card_token']); ?>" class="form-control" id="myplan_card_token" />
						</div>
					</div>
					<div class="col-md-6">
						<label for="transaction_ref_token" class="control-label">Transaction Ref Token</label>
						<div class="form-group">
							<input type="text" name="transaction_ref_token" value="<?php echo ($this->input->post('transaction_ref_token') ? $this->input->post('transaction_ref_token') : $tbl_myplan_master['transaction_ref_token']); ?>" class="form-control" id="transaction_ref_token" />
						</div>
					</div>
					<div class="col-md-6">
						<label for="transaction_date_time" class="control-label">Transaction Date Time</label>
						<div class="form-group">
							<input type="text" name="transaction_date_time" value="<?php echo ($this->input->post('transaction_date_time') ? $this->input->post('transaction_date_time') : $tbl_myplan_master['transaction_date_time']); ?>" class="form-control" id="transaction_date_time" />
						</div>
					</div>
					<div class="col-md-6">
						<label for="transaction_end_date" class="control-label">Transaction End Date</label>
						<div class="form-group">
							<input type="text" name="transaction_end_date" value="<?php echo ($this->input->post('transaction_end_date') ? $this->input->post('transaction_end_date') : $tbl_myplan_master['transaction_end_date']); ?>" class="has-datepicker form-control" id="transaction_end_date" />
						</div>
					</div>
					<div class="col-md-6">
						<label for="transaction_correlation_id" class="control-label">Transaction Correlation Id</label>
						<div class="form-group">
							<input type="text" name="transaction_correlation_id" value="<?php echo ($this->input->post('transaction_correlation_id') ? $this->input->post('transaction_correlation_id') : $tbl_myplan_master['transaction_correlation_id']); ?>" class="form-control" id="transaction_correlation_id" />
						</div>
					</div>
					<div class="col-md-6">
						<label for="status" class="control-label">Status</label>
						<div class="form-group">
							<input type="text" name="status" value="<?php echo ($this->input->post('status') ? $this->input->post('status') : $tbl_myplan_master['status']); ?>" class="form-control" id="status" />
						</div>
					</div>
					<div class="col-md-6">
						<label for="is_paid" class="control-label">Is Paid</label>
						<div class="form-group">
							<input type="text" name="is_paid" value="<?php echo ($this->input->post('is_paid') ? $this->input->post('is_paid') : $tbl_myplan_master['is_paid']); ?>" class="form-control" id="is_paid" />
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