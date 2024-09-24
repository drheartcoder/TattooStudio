<div class="row">
    <div class="col-md-12">
      	<div class="box box-info">
            <div class="box-header with-border">
              	<h3 class="box-title">Tbl Businessuser Promocode Edit</h3>
            </div>
			<?php echo form_open('tbl_businessuser_promocode/edit/'.$tbl_businessuser_promocode['promo_id']); ?>
			<div class="box-body">
				<div class="row clearfix">
					<div class="col-md-6">
						<label for="business_id" class="control-label">Business Id</label>
						<div class="form-group">
							<input type="text" name="business_id" value="<?php echo ($this->input->post('business_id') ? $this->input->post('business_id') : $tbl_businessuser_promocode['business_id']); ?>" class="form-control" id="business_id" />
						</div>
					</div>
					<div class="col-md-6">
						<label for="promo_code" class="control-label">Promo Code</label>
						<div class="form-group">
							<input type="text" name="promo_code" value="<?php echo ($this->input->post('promo_code') ? $this->input->post('promo_code') : $tbl_businessuser_promocode['promo_code']); ?>" class="form-control" id="promo_code" />
						</div>
					</div>
					<div class="col-md-6">
						<label for="promo_nickname" class="control-label">Promo Nickname</label>
						<div class="form-group">
							<input type="text" name="promo_nickname" value="<?php echo ($this->input->post('promo_nickname') ? $this->input->post('promo_nickname') : $tbl_businessuser_promocode['promo_nickname']); ?>" class="form-control" id="promo_nickname" />
						</div>
					</div>
					<div class="col-md-6">
						<label for="promo_discount" class="control-label">Promo Discount</label>
						<div class="form-group">
							<input type="text" name="promo_discount" value="<?php echo ($this->input->post('promo_discount') ? $this->input->post('promo_discount') : $tbl_businessuser_promocode['promo_discount']); ?>" class="form-control" id="promo_discount" />
						</div>
					</div>
					<div class="col-md-6">
						<label for="discount_type" class="control-label">Discount Type</label>
						<div class="form-group">
							<input type="text" name="discount_type" value="<?php echo ($this->input->post('discount_type') ? $this->input->post('discount_type') : $tbl_businessuser_promocode['discount_type']); ?>" class="form-control" id="discount_type" />
						</div>
					</div>
					<div class="col-md-6">
						<label for="promo_start_date" class="control-label">Promo Start Date</label>
						<div class="form-group">
							<input type="text" name="promo_start_date" value="<?php echo ($this->input->post('promo_start_date') ? $this->input->post('promo_start_date') : $tbl_businessuser_promocode['promo_start_date']); ?>" class="has-datepicker form-control" id="promo_start_date" />
						</div>
					</div>
					<div class="col-md-6">
						<label for="promo_end_date" class="control-label">Promo End Date</label>
						<div class="form-group">
							<input type="text" name="promo_end_date" value="<?php echo ($this->input->post('promo_end_date') ? $this->input->post('promo_end_date') : $tbl_businessuser_promocode['promo_end_date']); ?>" class="has-datepicker form-control" id="promo_end_date" />
						</div>
					</div>
					<div class="col-md-6">
						<label for="one_use" class="control-label">One Use</label>
						<div class="form-group">
							<input type="text" name="one_use" value="<?php echo ($this->input->post('one_use') ? $this->input->post('one_use') : $tbl_businessuser_promocode['one_use']); ?>" class="form-control" id="one_use" />
						</div>
					</div>
					<div class="col-md-6">
						<label for="new_client" class="control-label">New Client</label>
						<div class="form-group">
							<input type="text" name="new_client" value="<?php echo ($this->input->post('new_client') ? $this->input->post('new_client') : $tbl_businessuser_promocode['new_client']); ?>" class="form-control" id="new_client" />
						</div>
					</div>
					<div class="col-md-6">
						<label for="promo_location" class="control-label">Promo Location</label>
						<div class="form-group">
							<input type="text" name="promo_location" value="<?php echo ($this->input->post('promo_location') ? $this->input->post('promo_location') : $tbl_businessuser_promocode['promo_location']); ?>" class="form-control" id="promo_location" />
						</div>
					</div>
					<div class="col-md-6">
						<label for="promo_staff" class="control-label">Promo Staff</label>
						<div class="form-group">
							<input type="text" name="promo_staff" value="<?php echo ($this->input->post('promo_staff') ? $this->input->post('promo_staff') : $tbl_businessuser_promocode['promo_staff']); ?>" class="form-control" id="promo_staff" />
						</div>
					</div>
					<div class="col-md-6">
						<label for="promo_services" class="control-label">Promo Services</label>
						<div class="form-group">
							<input type="text" name="promo_services" value="<?php echo ($this->input->post('promo_services') ? $this->input->post('promo_services') : $tbl_businessuser_promocode['promo_services']); ?>" class="form-control" id="promo_services" />
						</div>
					</div>
					<div class="col-md-6">
						<label for="promocode_status" class="control-label">Promocode Status</label>
						<div class="form-group">
							<input type="text" name="promocode_status" value="<?php echo ($this->input->post('promocode_status') ? $this->input->post('promocode_status') : $tbl_businessuser_promocode['promocode_status']); ?>" class="form-control" id="promocode_status" />
						</div>
					</div>
					<div class="col-md-6">
						<label for="fk_user_id" class="control-label">Fk User Id</label>
						<div class="form-group">
							<input type="text" name="fk_user_id" value="<?php echo ($this->input->post('fk_user_id') ? $this->input->post('fk_user_id') : $tbl_businessuser_promocode['fk_user_id']); ?>" class="form-control" id="fk_user_id" />
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