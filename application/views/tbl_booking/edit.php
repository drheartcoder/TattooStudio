<div class="row">
    <div class="col-md-12">
      	<div class="box box-info">
            <div class="box-header with-border">
              	<h3 class="box-title">Tbl Booking Edit</h3>
            </div>
			<?php echo form_open('tbl_booking/edit/'.$tbl_booking['id']); ?>
			<div class="box-body">
				<div class="row clearfix">
					<div class="col-md-6">
						<label for="payment_method" class="control-label">Payment Method</label>
						<div class="form-group">
							<input type="text" name="payment_method" value="<?php echo ($this->input->post('payment_method') ? $this->input->post('payment_method') : $tbl_booking['payment_method']); ?>" class="form-control" id="payment_method" />
						</div>
					</div>
					<div class="col-md-6">
						<label for="admin_seen_status" class="control-label">Admin Seen Status</label>
						<div class="form-group">
							<input type="text" name="admin_seen_status" value="<?php echo ($this->input->post('admin_seen_status') ? $this->input->post('admin_seen_status') : $tbl_booking['admin_seen_status']); ?>" class="form-control" id="admin_seen_status" />
						</div>
					</div>
					<div class="col-md-6">
						<label for="incremental_value" class="control-label">Incremental Value</label>
						<div class="form-group">
							<input type="text" name="incremental_value" value="<?php echo ($this->input->post('incremental_value') ? $this->input->post('incremental_value') : $tbl_booking['incremental_value']); ?>" class="form-control" id="incremental_value" />
						</div>
					</div>
					<div class="col-md-6">
						<label for="db_insert_date" class="control-label">Db Insert Date</label>
						<div class="form-group">
							<input type="text" name="db_insert_date" value="<?php echo ($this->input->post('db_insert_date') ? $this->input->post('db_insert_date') : $tbl_booking['db_insert_date']); ?>" class="form-control" id="db_insert_date" />
						</div>
					</div>
					<div class="col-md-6">
						<label for="txn_id" class="control-label">Txn Id</label>
						<div class="form-group">
							<input type="text" name="txn_id" value="<?php echo ($this->input->post('txn_id') ? $this->input->post('txn_id') : $tbl_booking['txn_id']); ?>" class="form-control" id="txn_id" />
						</div>
					</div>
					<div class="col-md-6">
						<label for="balance_transaction" class="control-label">Balance Transaction</label>
						<div class="form-group">
							<input type="text" name="balance_transaction" value="<?php echo ($this->input->post('balance_transaction') ? $this->input->post('balance_transaction') : $tbl_booking['balance_transaction']); ?>" class="form-control" id="balance_transaction" />
						</div>
					</div>
					<div class="col-md-6">
						<label for="user_id" class="control-label">User Id</label>
						<div class="form-group">
							<input type="text" name="user_id" value="<?php echo ($this->input->post('user_id') ? $this->input->post('user_id') : $tbl_booking['user_id']); ?>" class="form-control" id="user_id" />
						</div>
					</div>
					<div class="col-md-6">
						<label for="walkin_id" class="control-label">Walkin Id</label>
						<div class="form-group">
							<input type="text" name="walkin_id" value="<?php echo ($this->input->post('walkin_id') ? $this->input->post('walkin_id') : $tbl_booking['walkin_id']); ?>" class="form-control" id="walkin_id" />
						</div>
					</div>
					<div class="col-md-6">
						<label for="booking_type" class="control-label">Booking Type</label>
						<div class="form-group">
							<input type="text" name="booking_type" value="<?php echo ($this->input->post('booking_type') ? $this->input->post('booking_type') : $tbl_booking['booking_type']); ?>" class="form-control" id="booking_type" />
						</div>
					</div>
					<div class="col-md-6">
						<label for="business_id" class="control-label">Business Id</label>
						<div class="form-group">
							<input type="text" name="business_id" value="<?php echo ($this->input->post('business_id') ? $this->input->post('business_id') : $tbl_booking['business_id']); ?>" class="form-control" id="business_id" />
						</div>
					</div>
					<div class="col-md-6">
						<label for="service_id" class="control-label">Service Id</label>
						<div class="form-group">
							<input type="text" name="service_id" value="<?php echo ($this->input->post('service_id') ? $this->input->post('service_id') : $tbl_booking['service_id']); ?>" class="form-control" id="service_id" />
						</div>
					</div>
					<div class="col-md-6">
						<label for="tattoo_id" class="control-label">Tattoo Id</label>
						<div class="form-group">
							<input type="text" name="tattoo_id" value="<?php echo ($this->input->post('tattoo_id') ? $this->input->post('tattoo_id') : $tbl_booking['tattoo_id']); ?>" class="form-control" id="tattoo_id" />
						</div>
					</div>
					<div class="col-md-6">
						<label for="start_time" class="control-label">Start Time</label>
						<div class="form-group">
							<input type="text" name="start_time" value="<?php echo ($this->input->post('start_time') ? $this->input->post('start_time') : $tbl_booking['start_time']); ?>" class="form-control" id="start_time" />
						</div>
					</div>
					<div class="col-md-6">
						<label for="end_time" class="control-label">End Time</label>
						<div class="form-group">
							<input type="text" name="end_time" value="<?php echo ($this->input->post('end_time') ? $this->input->post('end_time') : $tbl_booking['end_time']); ?>" class="form-control" id="end_time" />
						</div>
					</div>
					<div class="col-md-6">
						<label for="availibility_id" class="control-label">Availibility Id</label>
						<div class="form-group">
							<input type="text" name="availibility_id" value="<?php echo ($this->input->post('availibility_id') ? $this->input->post('availibility_id') : $tbl_booking['availibility_id']); ?>" class="form-control" id="availibility_id" />
						</div>
					</div>
					<div class="col-md-6">
						<label for="booking_no" class="control-label">Booking No</label>
						<div class="form-group">
							<input type="text" name="booking_no" value="<?php echo ($this->input->post('booking_no') ? $this->input->post('booking_no') : $tbl_booking['booking_no']); ?>" class="form-control" id="booking_no" />
						</div>
					</div>
					<div class="col-md-6">
						<label for="booking_date" class="control-label">Booking Date</label>
						<div class="form-group">
							<input type="text" name="booking_date" value="<?php echo ($this->input->post('booking_date') ? $this->input->post('booking_date') : $tbl_booking['booking_date']); ?>" class="has-datepicker form-control" id="booking_date" />
						</div>
					</div>
					<div class="col-md-6">
						<label for="staff_id" class="control-label">Staff Id</label>
						<div class="form-group">
							<input type="text" name="staff_id" value="<?php echo ($this->input->post('staff_id') ? $this->input->post('staff_id') : $tbl_booking['staff_id']); ?>" class="form-control" id="staff_id" />
						</div>
					</div>
					<div class="col-md-6">
						<label for="service_name" class="control-label">Service Name</label>
						<div class="form-group">
							<input type="text" name="service_name" value="<?php echo ($this->input->post('service_name') ? $this->input->post('service_name') : $tbl_booking['service_name']); ?>" class="form-control" id="service_name" />
						</div>
					</div>
					<div class="col-md-6">
						<label for="service_price" class="control-label">Service Price</label>
						<div class="form-group">
							<input type="text" name="service_price" value="<?php echo ($this->input->post('service_price') ? $this->input->post('service_price') : $tbl_booking['service_price']); ?>" class="form-control" id="service_price" />
						</div>
					</div>
					<div class="col-md-6">
						<label for="esitmated_amount" class="control-label">Esitmated Amount</label>
						<div class="form-group">
							<input type="text" name="esitmated_amount" value="<?php echo ($this->input->post('esitmated_amount') ? $this->input->post('esitmated_amount') : $tbl_booking['esitmated_amount']); ?>" class="form-control" id="esitmated_amount" />
						</div>
					</div>
					<div class="col-md-6">
						<label for="booking_status" class="control-label">Booking Status</label>
						<div class="form-group">
							<input type="text" name="booking_status" value="<?php echo ($this->input->post('booking_status') ? $this->input->post('booking_status') : $tbl_booking['booking_status']); ?>" class="form-control" id="booking_status" />
						</div>
					</div>
					<div class="col-md-6">
						<label for="is_refunded" class="control-label">Is Refunded</label>
						<div class="form-group">
							<input type="text" name="is_refunded" value="<?php echo ($this->input->post('is_refunded') ? $this->input->post('is_refunded') : $tbl_booking['is_refunded']); ?>" class="form-control" id="is_refunded" />
						</div>
					</div>
					<div class="col-md-6">
						<label for="walkin_status" class="control-label">Walkin Status</label>
						<div class="form-group">
							<input type="text" name="walkin_status" value="<?php echo ($this->input->post('walkin_status') ? $this->input->post('walkin_status') : $tbl_booking['walkin_status']); ?>" class="form-control" id="walkin_status" />
						</div>
					</div>
					<div class="col-md-6">
						<label for="reference_tattoo" class="control-label">Reference Tattoo</label>
						<div class="form-group">
							<input type="text" name="reference_tattoo" value="<?php echo ($this->input->post('reference_tattoo') ? $this->input->post('reference_tattoo') : $tbl_booking['reference_tattoo']); ?>" class="form-control" id="reference_tattoo" />
						</div>
					</div>
					<div class="col-md-6">
						<label for="previous_tattoo_img" class="control-label">Previous Tattoo Img</label>
						<div class="form-group">
							<input type="text" name="previous_tattoo_img" value="<?php echo ($this->input->post('previous_tattoo_img') ? $this->input->post('previous_tattoo_img') : $tbl_booking['previous_tattoo_img']); ?>" class="form-control" id="previous_tattoo_img" />
						</div>
					</div>
					<div class="col-md-6">
						<label for="cover_up" class="control-label">Cover Up</label>
						<div class="form-group">
							<input type="text" name="cover_up" value="<?php echo ($this->input->post('cover_up') ? $this->input->post('cover_up') : $tbl_booking['cover_up']); ?>" class="form-control" id="cover_up" />
						</div>
					</div>
					<div class="col-md-6">
						<label for="booking_desc" class="control-label">Booking Desc</label>
						<div class="form-group">
							<input type="text" name="booking_desc" value="<?php echo ($this->input->post('booking_desc') ? $this->input->post('booking_desc') : $tbl_booking['booking_desc']); ?>" class="form-control" id="booking_desc" />
						</div>
					</div>
					<div class="col-md-6">
						<label for="medical_condition" class="control-label">Medical Condition</label>
						<div class="form-group">
							<input type="text" name="medical_condition" value="<?php echo ($this->input->post('medical_condition') ? $this->input->post('medical_condition') : $tbl_booking['medical_condition']); ?>" class="form-control" id="medical_condition" />
						</div>
					</div>
					<div class="col-md-6">
						<label for="medical_description" class="control-label">Medical Description</label>
						<div class="form-group">
							<textarea name="medical_description" class="form-control" id="medical_description"><?php echo ($this->input->post('medical_description') ? $this->input->post('medical_description') : $tbl_booking['medical_description']); ?></textarea>
						</div>
					</div>
					<div class="col-md-6">
						<label for="stripeResponse" class="control-label">StripeResponse</label>
						<div class="form-group">
							<textarea name="stripeResponse" class="form-control" id="stripeResponse"><?php echo ($this->input->post('stripeResponse') ? $this->input->post('stripeResponse') : $tbl_booking['stripeResponse']); ?></textarea>
						</div>
					</div>
					<div class="col-md-6">
						<label for="cancellation_reason" class="control-label">Cancellation Reason</label>
						<div class="form-group">
							<textarea name="cancellation_reason" class="form-control" id="cancellation_reason"><?php echo ($this->input->post('cancellation_reason') ? $this->input->post('cancellation_reason') : $tbl_booking['cancellation_reason']); ?></textarea>
						</div>
					</div>
					<div class="col-md-6">
						<label for="reschedule_reason" class="control-label">Reschedule Reason</label>
						<div class="form-group">
							<textarea name="reschedule_reason" class="form-control" id="reschedule_reason"><?php echo ($this->input->post('reschedule_reason') ? $this->input->post('reschedule_reason') : $tbl_booking['reschedule_reason']); ?></textarea>
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