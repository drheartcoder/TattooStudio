<div class="row">
    <div class="col-md-12">
      	<div class="box box-info">
            <div class="box-header with-border">
              	<h3 class="box-title">Tbl Appoinment Edit</h3>
            </div>
			<?php echo form_open('tbl_appoinment/edit/'.$tbl_appoinment['appoinment_id']); ?>
			<div class="box-body">
				<div class="row clearfix">
					<div class="col-md-6">
						<label for="deal_id" class="control-label">Deal Id</label>
						<div class="form-group">
							<input type="text" name="deal_id" value="<?php echo ($this->input->post('deal_id') ? $this->input->post('deal_id') : $tbl_appoinment['deal_id']); ?>" class="form-control" id="deal_id" />
						</div>
					</div>
					<div class="col-md-6">
						<label for="fk_user_id" class="control-label">Fk User Id</label>
						<div class="form-group">
							<input type="text" name="fk_user_id" value="<?php echo ($this->input->post('fk_user_id') ? $this->input->post('fk_user_id') : $tbl_appoinment['fk_user_id']); ?>" class="form-control" id="fk_user_id" />
						</div>
					</div>
					<div class="col-md-6">
						<label for="fk_business_id" class="control-label">Fk Business Id</label>
						<div class="form-group">
							<input type="text" name="fk_business_id" value="<?php echo ($this->input->post('fk_business_id') ? $this->input->post('fk_business_id') : $tbl_appoinment['fk_business_id']); ?>" class="form-control" id="fk_business_id" />
						</div>
					</div>
					<div class="col-md-6">
						<label for="fk_business_service_id" class="control-label">Fk Business Service Id</label>
						<div class="form-group">
							<input type="text" name="fk_business_service_id" value="<?php echo ($this->input->post('fk_business_service_id') ? $this->input->post('fk_business_service_id') : $tbl_appoinment['fk_business_service_id']); ?>" class="form-control" id="fk_business_service_id" />
						</div>
					</div>
					<div class="col-md-6">
						<label for="fk_client_id" class="control-label">Fk Client Id</label>
						<div class="form-group">
							<input type="text" name="fk_client_id" value="<?php echo ($this->input->post('fk_client_id') ? $this->input->post('fk_client_id') : $tbl_appoinment['fk_client_id']); ?>" class="form-control" id="fk_client_id" />
						</div>
					</div>
					<div class="col-md-6">
						<label for="fk_location_id" class="control-label">Fk Location Id</label>
						<div class="form-group">
							<input type="text" name="fk_location_id" value="<?php echo ($this->input->post('fk_location_id') ? $this->input->post('fk_location_id') : $tbl_appoinment['fk_location_id']); ?>" class="form-control" id="fk_location_id" />
						</div>
					</div>
					<div class="col-md-6">
						<label for="fk_package_id" class="control-label">Fk Package Id</label>
						<div class="form-group">
							<input type="text" name="fk_package_id" value="<?php echo ($this->input->post('fk_package_id') ? $this->input->post('fk_package_id') : $tbl_appoinment['fk_package_id']); ?>" class="form-control" id="fk_package_id" />
						</div>
					</div>
					<div class="col-md-6">
						<label for="service_cost" class="control-label">Service Cost</label>
						<div class="form-group">
							<input type="text" name="service_cost" value="<?php echo ($this->input->post('service_cost') ? $this->input->post('service_cost') : $tbl_appoinment['service_cost']); ?>" class="form-control" id="service_cost" />
						</div>
					</div>
					<div class="col-md-6">
						<label for="total_cost" class="control-label">Total Cost</label>
						<div class="form-group">
							<input type="text" name="total_cost" value="<?php echo ($this->input->post('total_cost') ? $this->input->post('total_cost') : $tbl_appoinment['total_cost']); ?>" class="form-control" id="total_cost" />
						</div>
					</div>
					<div class="col-md-6">
						<label for="apt_date" class="control-label">Apt Date</label>
						<div class="form-group">
							<input type="text" name="apt_date" value="<?php echo ($this->input->post('apt_date') ? $this->input->post('apt_date') : $tbl_appoinment['apt_date']); ?>" class="has-datepicker form-control" id="apt_date" />
						</div>
					</div>
					<div class="col-md-6">
						<label for="apt_time" class="control-label">Apt Time</label>
						<div class="form-group">
							<input type="text" name="apt_time" value="<?php echo ($this->input->post('apt_time') ? $this->input->post('apt_time') : $tbl_appoinment['apt_time']); ?>" class="form-control" id="apt_time" />
						</div>
					</div>
					<div class="col-md-6">
						<label for="end_apt_time" class="control-label">End Apt Time</label>
						<div class="form-group">
							<input type="text" name="end_apt_time" value="<?php echo ($this->input->post('end_apt_time') ? $this->input->post('end_apt_time') : $tbl_appoinment['end_apt_time']); ?>" class="form-control" id="end_apt_time" />
						</div>
					</div>
					<div class="col-md-6">
						<label for="cancel_time" class="control-label">Cancel Time</label>
						<div class="form-group">
							<input type="text" name="cancel_time" value="<?php echo ($this->input->post('cancel_time') ? $this->input->post('cancel_time') : $tbl_appoinment['cancel_time']); ?>" class="form-control" id="cancel_time" />
						</div>
					</div>
					<div class="col-md-6">
						<label for="medical_condition" class="control-label">Medical Condition</label>
						<div class="form-group">
							<input type="text" name="medical_condition" value="<?php echo ($this->input->post('medical_condition') ? $this->input->post('medical_condition') : $tbl_appoinment['medical_condition']); ?>" class="form-control" id="medical_condition" />
						</div>
					</div>
					<div class="col-md-6">
						<label for="card_token" class="control-label">Card Token</label>
						<div class="form-group">
							<input type="text" name="card_token" value="<?php echo ($this->input->post('card_token') ? $this->input->post('card_token') : $tbl_appoinment['card_token']); ?>" class="form-control" id="card_token" />
						</div>
					</div>
					<div class="col-md-6">
						<label for="transaction_ref_token" class="control-label">Transaction Ref Token</label>
						<div class="form-group">
							<input type="text" name="transaction_ref_token" value="<?php echo ($this->input->post('transaction_ref_token') ? $this->input->post('transaction_ref_token') : $tbl_appoinment['transaction_ref_token']); ?>" class="form-control" id="transaction_ref_token" />
						</div>
					</div>
					<div class="col-md-6">
						<label for="transaction_date_time" class="control-label">Transaction Date Time</label>
						<div class="form-group">
							<input type="text" name="transaction_date_time" value="<?php echo ($this->input->post('transaction_date_time') ? $this->input->post('transaction_date_time') : $tbl_appoinment['transaction_date_time']); ?>" class="form-control" id="transaction_date_time" />
						</div>
					</div>
					<div class="col-md-6">
						<label for="transaction_correlation_id" class="control-label">Transaction Correlation Id</label>
						<div class="form-group">
							<input type="text" name="transaction_correlation_id" value="<?php echo ($this->input->post('transaction_correlation_id') ? $this->input->post('transaction_correlation_id') : $tbl_appoinment['transaction_correlation_id']); ?>" class="form-control" id="transaction_correlation_id" />
						</div>
					</div>
					<div class="col-md-6">
						<label for="apt_repeat_status" class="control-label">Apt Repeat Status</label>
						<div class="form-group">
							<input type="text" name="apt_repeat_status" value="<?php echo ($this->input->post('apt_repeat_status') ? $this->input->post('apt_repeat_status') : $tbl_appoinment['apt_repeat_status']); ?>" class="form-control" id="apt_repeat_status" />
						</div>
					</div>
					<div class="col-md-6">
						<label for="apt_repeat_more_count" class="control-label">Apt Repeat More Count</label>
						<div class="form-group">
							<input type="text" name="apt_repeat_more_count" value="<?php echo ($this->input->post('apt_repeat_more_count') ? $this->input->post('apt_repeat_more_count') : $tbl_appoinment['apt_repeat_more_count']); ?>" class="form-control" id="apt_repeat_more_count" />
						</div>
					</div>
					<div class="col-md-6">
						<label for="apt_repeat_more_type" class="control-label">Apt Repeat More Type</label>
						<div class="form-group">
							<input type="text" name="apt_repeat_more_type" value="<?php echo ($this->input->post('apt_repeat_more_type') ? $this->input->post('apt_repeat_more_type') : $tbl_appoinment['apt_repeat_more_type']); ?>" class="form-control" id="apt_repeat_more_type" />
						</div>
					</div>
					<div class="col-md-6">
						<label for="apt_repeat_end" class="control-label">Apt Repeat End</label>
						<div class="form-group">
							<input type="text" name="apt_repeat_end" value="<?php echo ($this->input->post('apt_repeat_end') ? $this->input->post('apt_repeat_end') : $tbl_appoinment['apt_repeat_end']); ?>" class="form-control" id="apt_repeat_end" />
						</div>
					</div>
					<div class="col-md-6">
						<label for="apt_repeat_end_date" class="control-label">Apt Repeat End Date</label>
						<div class="form-group">
							<input type="text" name="apt_repeat_end_date" value="<?php echo ($this->input->post('apt_repeat_end_date') ? $this->input->post('apt_repeat_end_date') : $tbl_appoinment['apt_repeat_end_date']); ?>" class="form-control" id="apt_repeat_end_date" />
						</div>
					</div>
					<div class="col-md-6">
						<label for="apt_status" class="control-label">Apt Status</label>
						<div class="form-group">
							<input type="text" name="apt_status" value="<?php echo ($this->input->post('apt_status') ? $this->input->post('apt_status') : $tbl_appoinment['apt_status']); ?>" class="form-control" id="apt_status" />
						</div>
					</div>
					<div class="col-md-6">
						<label for="payment_status" class="control-label">Payment Status</label>
						<div class="form-group">
							<input type="text" name="payment_status" value="<?php echo ($this->input->post('payment_status') ? $this->input->post('payment_status') : $tbl_appoinment['payment_status']); ?>" class="form-control" id="payment_status" />
						</div>
					</div>
					<div class="col-md-6">
						<label for="confirmed_status" class="control-label">Confirmed Status</label>
						<div class="form-group">
							<input type="text" name="confirmed_status" value="<?php echo ($this->input->post('confirmed_status') ? $this->input->post('confirmed_status') : $tbl_appoinment['confirmed_status']); ?>" class="form-control" id="confirmed_status" />
						</div>
					</div>
					<div class="col-md-6">
						<label for="refTransactionId" class="control-label">RefTransactionId</label>
						<div class="form-group">
							<input type="text" name="refTransactionId" value="<?php echo ($this->input->post('refTransactionId') ? $this->input->post('refTransactionId') : $tbl_appoinment['refTransactionId']); ?>" class="form-control" id="refTransactionId" />
						</div>
					</div>
					<div class="col-md-6">
						<label for="refTransactionDate" class="control-label">RefTransactionDate</label>
						<div class="form-group">
							<input type="text" name="refTransactionDate" value="<?php echo ($this->input->post('refTransactionDate') ? $this->input->post('refTransactionDate') : $tbl_appoinment['refTransactionDate']); ?>" class="form-control" id="refTransactionDate" />
						</div>
					</div>
					<div class="col-md-6">
						<label for="refAmount" class="control-label">RefAmount</label>
						<div class="form-group">
							<input type="text" name="refAmount" value="<?php echo ($this->input->post('refAmount') ? $this->input->post('refAmount') : $tbl_appoinment['refAmount']); ?>" class="form-control" id="refAmount" />
						</div>
					</div>
					<div class="col-md-6">
						<label for="is_recurring" class="control-label">Is Recurring</label>
						<div class="form-group">
							<input type="text" name="is_recurring" value="<?php echo ($this->input->post('is_recurring') ? $this->input->post('is_recurring') : $tbl_appoinment['is_recurring']); ?>" class="form-control" id="is_recurring" />
						</div>
					</div>
					<div class="col-md-6">
						<label for="recurring_parent" class="control-label">Recurring Parent</label>
						<div class="form-group">
							<input type="text" name="recurring_parent" value="<?php echo ($this->input->post('recurring_parent') ? $this->input->post('recurring_parent') : $tbl_appoinment['recurring_parent']); ?>" class="form-control" id="recurring_parent" />
						</div>
					</div>
					<div class="col-md-6">
						<label for="fk_location_hours_id" class="control-label">Fk Location Hours Id</label>
						<div class="form-group">
							<input type="text" name="fk_location_hours_id" value="<?php echo ($this->input->post('fk_location_hours_id') ? $this->input->post('fk_location_hours_id') : $tbl_appoinment['fk_location_hours_id']); ?>" class="form-control" id="fk_location_hours_id" />
						</div>
					</div>
					<div class="col-md-6">
						<label for="is_present" class="control-label">Is Present</label>
						<div class="form-group">
							<input type="text" name="is_present" value="<?php echo ($this->input->post('is_present') ? $this->input->post('is_present') : $tbl_appoinment['is_present']); ?>" class="form-control" id="is_present" />
						</div>
					</div>
					<div class="col-md-6">
						<label for="fk_staff_id" class="control-label">Fk Staff Id</label>
						<div class="form-group">
							<textarea name="fk_staff_id" class="form-control" id="fk_staff_id"><?php echo ($this->input->post('fk_staff_id') ? $this->input->post('fk_staff_id') : $tbl_appoinment['fk_staff_id']); ?></textarea>
						</div>
					</div>
					<div class="col-md-6">
						<label for="apt_note" class="control-label">Apt Note</label>
						<div class="form-group">
							<textarea name="apt_note" class="form-control" id="apt_note"><?php echo ($this->input->post('apt_note') ? $this->input->post('apt_note') : $tbl_appoinment['apt_note']); ?></textarea>
						</div>
					</div>
					<div class="col-md-6">
						<label for="medical_description" class="control-label">Medical Description</label>
						<div class="form-group">
							<textarea name="medical_description" class="form-control" id="medical_description"><?php echo ($this->input->post('medical_description') ? $this->input->post('medical_description') : $tbl_appoinment['medical_description']); ?></textarea>
						</div>
					</div>
					<div class="col-md-6">
						<label for="recurring_data" class="control-label">Recurring Data</label>
						<div class="form-group">
							<textarea name="recurring_data" class="form-control" id="recurring_data"><?php echo ($this->input->post('recurring_data') ? $this->input->post('recurring_data') : $tbl_appoinment['recurring_data']); ?></textarea>
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