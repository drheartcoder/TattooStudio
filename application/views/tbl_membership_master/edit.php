<div class="row">
    <div class="col-md-12">
      	<div class="box box-info">
            <div class="box-header with-border">
              	<h3 class="box-title">Tbl Membership Master Edit</h3>
            </div>
			<?php echo form_open('tbl_membership_master/edit/'.$tbl_membership_master['membership_id']); ?>
			<div class="box-body">
				<div class="row clearfix">
					<div class="col-md-6">
						<label for="membership_plan" class="control-label">Membership Plan</label>
						<div class="form-group">
							<input type="text" name="membership_plan" value="<?php echo ($this->input->post('membership_plan') ? $this->input->post('membership_plan') : $tbl_membership_master['membership_plan']); ?>" class="form-control" id="membership_plan" />
						</div>
					</div>
					<div class="col-md-6">
						<label for="membership_price" class="control-label">Membership Price</label>
						<div class="form-group">
							<input type="text" name="membership_price" value="<?php echo ($this->input->post('membership_price') ? $this->input->post('membership_price') : $tbl_membership_master['membership_price']); ?>" class="form-control" id="membership_price" />
						</div>
					</div>
					<div class="col-md-6">
						<label for="special_user_price" class="control-label">Special User Price</label>
						<div class="form-group">
							<input type="text" name="special_user_price" value="<?php echo ($this->input->post('special_user_price') ? $this->input->post('special_user_price') : $tbl_membership_master['special_user_price']); ?>" class="form-control" id="special_user_price" />
						</div>
					</div>
					<div class="col-md-6">
						<label for="membership_period" class="control-label">Membership Period</label>
						<div class="form-group">
							<input type="text" name="membership_period" value="<?php echo ($this->input->post('membership_period') ? $this->input->post('membership_period') : $tbl_membership_master['membership_period']); ?>" class="form-control" id="membership_period" />
						</div>
					</div>
					<div class="col-md-6">
						<label for="membership_discount_price" class="control-label">Membership Discount Price</label>
						<div class="form-group">
							<input type="text" name="membership_discount_price" value="<?php echo ($this->input->post('membership_discount_price') ? $this->input->post('membership_discount_price') : $tbl_membership_master['membership_discount_price']); ?>" class="form-control" id="membership_discount_price" />
						</div>
					</div>
					<div class="col-md-6">
						<label for="membership_discount" class="control-label">Membership Discount</label>
						<div class="form-group">
							<input type="text" name="membership_discount" value="<?php echo ($this->input->post('membership_discount') ? $this->input->post('membership_discount') : $tbl_membership_master['membership_discount']); ?>" class="form-control" id="membership_discount" />
						</div>
					</div>
					<div class="col-md-6">
						<label for="membership_type" class="control-label">Membership Type</label>
						<div class="form-group">
							<input type="text" name="membership_type" value="<?php echo ($this->input->post('membership_type') ? $this->input->post('membership_type') : $tbl_membership_master['membership_type']); ?>" class="form-control" id="membership_type" />
						</div>
					</div>
					<div class="col-md-6">
						<label for="membership_plan_short_desc" class="control-label">Membership Plan Short Desc</label>
						<div class="form-group">
							<input type="text" name="membership_plan_short_desc" value="<?php echo ($this->input->post('membership_plan_short_desc') ? $this->input->post('membership_plan_short_desc') : $tbl_membership_master['membership_plan_short_desc']); ?>" class="form-control" id="membership_plan_short_desc" />
						</div>
					</div>
					<div class="col-md-6">
						<label for="membership_plan_long_desc" class="control-label">Membership Plan Long Desc</label>
						<div class="form-group">
							<input type="text" name="membership_plan_long_desc" value="<?php echo ($this->input->post('membership_plan_long_desc') ? $this->input->post('membership_plan_long_desc') : $tbl_membership_master['membership_plan_long_desc']); ?>" class="form-control" id="membership_plan_long_desc" />
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