<div class="row">
    <div class="col-md-12">
      	<div class="box box-info">
            <div class="box-header with-border">
              	<h3 class="box-title">Tbl Temp Appointment Edit</h3>
            </div>
			<?php echo form_open('tbl_temp_appointment/edit/'.$tbl_temp_appointment['id']); ?>
			<div class="box-body">
				<div class="row clearfix">
					<div class="col-md-6">
						<label for="unique_userid" class="control-label">Unique Userid</label>
						<div class="form-group">
							<input type="text" name="unique_userid" value="<?php echo ($this->input->post('unique_userid') ? $this->input->post('unique_userid') : $tbl_temp_appointment['unique_userid']); ?>" class="form-control" id="unique_userid" />
						</div>
					</div>
					<div class="col-md-6">
						<label for="login_userid" class="control-label">Login Userid</label>
						<div class="form-group">
							<input type="text" name="login_userid" value="<?php echo ($this->input->post('login_userid') ? $this->input->post('login_userid') : $tbl_temp_appointment['login_userid']); ?>" class="form-control" id="login_userid" />
						</div>
					</div>
					<div class="col-md-6">
						<label for="business_id" class="control-label">Business Id</label>
						<div class="form-group">
							<input type="text" name="business_id" value="<?php echo ($this->input->post('business_id') ? $this->input->post('business_id') : $tbl_temp_appointment['business_id']); ?>" class="form-control" id="business_id" />
						</div>
					</div>
					<div class="col-md-6">
						<label for="service_menu_id" class="control-label">Service Menu Id</label>
						<div class="form-group">
							<input type="text" name="service_menu_id" value="<?php echo ($this->input->post('service_menu_id') ? $this->input->post('service_menu_id') : $tbl_temp_appointment['service_menu_id']); ?>" class="form-control" id="service_menu_id" />
						</div>
					</div>
					<div class="col-md-6">
						<label for="tattoo_id" class="control-label">Tattoo Id</label>
						<div class="form-group">
							<input type="text" name="tattoo_id" value="<?php echo ($this->input->post('tattoo_id') ? $this->input->post('tattoo_id') : $tbl_temp_appointment['tattoo_id']); ?>" class="form-control" id="tattoo_id" />
						</div>
					</div>
					<div class="col-md-6">
						<label for="category_id" class="control-label">Category Id</label>
						<div class="form-group">
							<input type="text" name="category_id" value="<?php echo ($this->input->post('category_id') ? $this->input->post('category_id') : $tbl_temp_appointment['category_id']); ?>" class="form-control" id="category_id" />
						</div>
					</div>
					<div class="col-md-6">
						<label for="sub_cat_id" class="control-label">Sub Cat Id</label>
						<div class="form-group">
							<input type="text" name="sub_cat_id" value="<?php echo ($this->input->post('sub_cat_id') ? $this->input->post('sub_cat_id') : $tbl_temp_appointment['sub_cat_id']); ?>" class="form-control" id="sub_cat_id" />
						</div>
					</div>
					<div class="col-md-6">
						<label for="style_id" class="control-label">Style Id</label>
						<div class="form-group">
							<input type="text" name="style_id" value="<?php echo ($this->input->post('style_id') ? $this->input->post('style_id') : $tbl_temp_appointment['style_id']); ?>" class="form-control" id="style_id" />
						</div>
					</div>
					<div class="col-md-6">
						<label for="color_id" class="control-label">Color Id</label>
						<div class="form-group">
							<input type="text" name="color_id" value="<?php echo ($this->input->post('color_id') ? $this->input->post('color_id') : $tbl_temp_appointment['color_id']); ?>" class="form-control" id="color_id" />
						</div>
					</div>
					<div class="col-md-6">
						<label for="size_id" class="control-label">Size Id</label>
						<div class="form-group">
							<input type="text" name="size_id" value="<?php echo ($this->input->post('size_id') ? $this->input->post('size_id') : $tbl_temp_appointment['size_id']); ?>" class="form-control" id="size_id" />
						</div>
					</div>
					<div class="col-md-6">
						<label for="size" class="control-label">Size</label>
						<div class="form-group">
							<input type="text" name="size" value="<?php echo ($this->input->post('size') ? $this->input->post('size') : $tbl_temp_appointment['size']); ?>" class="form-control" id="size" />
						</div>
					</div>
					<div class="col-md-6">
						<label for="staff_id" class="control-label">Staff Id</label>
						<div class="form-group">
							<input type="text" name="staff_id" value="<?php echo ($this->input->post('staff_id') ? $this->input->post('staff_id') : $tbl_temp_appointment['staff_id']); ?>" class="form-control" id="staff_id" />
						</div>
					</div>
					<div class="col-md-6">
						<label for="availibility_id" class="control-label">Availibility Id</label>
						<div class="form-group">
							<input type="text" name="availibility_id" value="<?php echo ($this->input->post('availibility_id') ? $this->input->post('availibility_id') : $tbl_temp_appointment['availibility_id']); ?>" class="form-control" id="availibility_id" />
						</div>
					</div>
					<div class="col-md-6">
						<label for="cover_up" class="control-label">Cover Up</label>
						<div class="form-group">
							<input type="text" name="cover_up" value="<?php echo ($this->input->post('cover_up') ? $this->input->post('cover_up') : $tbl_temp_appointment['cover_up']); ?>" class="form-control" id="cover_up" />
						</div>
					</div>
					<div class="col-md-6">
						<label for="previous_tattoo_img" class="control-label">Previous Tattoo Img</label>
						<div class="form-group">
							<input type="text" name="previous_tattoo_img" value="<?php echo ($this->input->post('previous_tattoo_img') ? $this->input->post('previous_tattoo_img') : $tbl_temp_appointment['previous_tattoo_img']); ?>" class="form-control" id="previous_tattoo_img" />
						</div>
					</div>
					<div class="col-md-6">
						<label for="reference_tattoo" class="control-label">Reference Tattoo</label>
						<div class="form-group">
							<input type="text" name="reference_tattoo" value="<?php echo ($this->input->post('reference_tattoo') ? $this->input->post('reference_tattoo') : $tbl_temp_appointment['reference_tattoo']); ?>" class="form-control" id="reference_tattoo" />
						</div>
					</div>
					<div class="col-md-6">
						<label for="appointment_date" class="control-label">Appointment Date</label>
						<div class="form-group">
							<input type="text" name="appointment_date" value="<?php echo ($this->input->post('appointment_date') ? $this->input->post('appointment_date') : $tbl_temp_appointment['appointment_date']); ?>" class="has-datepicker form-control" id="appointment_date" />
						</div>
					</div>
					<div class="col-md-6">
						<label for="charges" class="control-label">Charges</label>
						<div class="form-group">
							<input type="text" name="charges" value="<?php echo ($this->input->post('charges') ? $this->input->post('charges') : $tbl_temp_appointment['charges']); ?>" class="form-control" id="charges" />
						</div>
					</div>
					<div class="col-md-6">
						<label for="esitmated_amount" class="control-label">Esitmated Amount</label>
						<div class="form-group">
							<input type="text" name="esitmated_amount" value="<?php echo ($this->input->post('esitmated_amount') ? $this->input->post('esitmated_amount') : $tbl_temp_appointment['esitmated_amount']); ?>" class="form-control" id="esitmated_amount" />
						</div>
					</div>
					<div class="col-md-6">
						<label for="amount_to_be_pay_online" class="control-label">Amount To Be Pay Online</label>
						<div class="form-group">
							<input type="text" name="amount_to_be_pay_online" value="<?php echo ($this->input->post('amount_to_be_pay_online') ? $this->input->post('amount_to_be_pay_online') : $tbl_temp_appointment['amount_to_be_pay_online']); ?>" class="form-control" id="amount_to_be_pay_online" />
						</div>
					</div>
					<div class="col-md-6">
						<label for="start_time" class="control-label">Start Time</label>
						<div class="form-group">
							<input type="text" name="start_time" value="<?php echo ($this->input->post('start_time') ? $this->input->post('start_time') : $tbl_temp_appointment['start_time']); ?>" class="form-control" id="start_time" />
						</div>
					</div>
					<div class="col-md-6">
						<label for="end_time" class="control-label">End Time</label>
						<div class="form-group">
							<input type="text" name="end_time" value="<?php echo ($this->input->post('end_time') ? $this->input->post('end_time') : $tbl_temp_appointment['end_time']); ?>" class="form-control" id="end_time" />
						</div>
					</div>
					<div class="col-md-6">
						<label for="location" class="control-label">Location</label>
						<div class="form-group">
							<input type="text" name="location" value="<?php echo ($this->input->post('location') ? $this->input->post('location') : $tbl_temp_appointment['location']); ?>" class="form-control" id="location" />
						</div>
					</div>
					<div class="col-md-6">
						<label for="duration" class="control-label">Duration</label>
						<div class="form-group">
							<input type="text" name="duration" value="<?php echo ($this->input->post('duration') ? $this->input->post('duration') : $tbl_temp_appointment['duration']); ?>" class="form-control" id="duration" />
						</div>
					</div>
					<div class="col-md-6">
						<label for="booking_desc" class="control-label">Booking Desc</label>
						<div class="form-group">
							<input type="text" name="booking_desc" value="<?php echo ($this->input->post('booking_desc') ? $this->input->post('booking_desc') : $tbl_temp_appointment['booking_desc']); ?>" class="form-control" id="booking_desc" />
						</div>
					</div>
					<div class="col-md-6">
						<label for="medical_condition" class="control-label">Medical Condition</label>
						<div class="form-group">
							<input type="text" name="medical_condition" value="<?php echo ($this->input->post('medical_condition') ? $this->input->post('medical_condition') : $tbl_temp_appointment['medical_condition']); ?>" class="form-control" id="medical_condition" />
						</div>
					</div>
					<div class="col-md-6">
						<label for="sub_category" class="control-label">Sub Category</label>
						<div class="form-group">
							<input type="text" name="sub_category" value="<?php echo ($this->input->post('sub_category') ? $this->input->post('sub_category') : $tbl_temp_appointment['sub_category']); ?>" class="form-control" id="sub_category" />
						</div>
					</div>
					<div class="col-md-6">
						<label for="medical_description" class="control-label">Medical Description</label>
						<div class="form-group">
							<textarea name="medical_description" class="form-control" id="medical_description"><?php echo ($this->input->post('medical_description') ? $this->input->post('medical_description') : $tbl_temp_appointment['medical_description']); ?></textarea>
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