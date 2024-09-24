<div class="row">
    <div class="col-md-12">
      	<div class="box box-info">
            <div class="box-header with-border">
              	<h3 class="box-title">Tbl Service Package Edit</h3>
            </div>
			<?php echo form_open('tbl_service_package/edit/'.$tbl_service_package['package_id']); ?>
			<div class="box-body">
				<div class="row clearfix">
					<div class="col-md-6">
						<label for="fk_business_id" class="control-label">Fk Business Id</label>
						<div class="form-group">
							<input type="text" name="fk_business_id" value="<?php echo ($this->input->post('fk_business_id') ? $this->input->post('fk_business_id') : $tbl_service_package['fk_business_id']); ?>" class="form-control" id="fk_business_id" />
						</div>
					</div>
					<div class="col-md-6">
						<label for="fk_subcat_id" class="control-label">Fk Subcat Id</label>
						<div class="form-group">
							<input type="text" name="fk_subcat_id" value="<?php echo ($this->input->post('fk_subcat_id') ? $this->input->post('fk_subcat_id') : $tbl_service_package['fk_subcat_id']); ?>" class="form-control" id="fk_subcat_id" />
						</div>
					</div>
					<div class="col-md-6">
						<label for="package_name" class="control-label">Package Name</label>
						<div class="form-group">
							<input type="text" name="package_name" value="<?php echo ($this->input->post('package_name') ? $this->input->post('package_name') : $tbl_service_package['package_name']); ?>" class="form-control" id="package_name" />
						</div>
					</div>
					<div class="col-md-6">
						<label for="no_of_appointments" class="control-label">No Of Appointments</label>
						<div class="form-group">
							<input type="text" name="no_of_appointments" value="<?php echo ($this->input->post('no_of_appointments') ? $this->input->post('no_of_appointments') : $tbl_service_package['no_of_appointments']); ?>" class="form-control" id="no_of_appointments" />
						</div>
					</div>
					<div class="col-md-6">
						<label for="expires" class="control-label">Expires</label>
						<div class="form-group">
							<input type="text" name="expires" value="<?php echo ($this->input->post('expires') ? $this->input->post('expires') : $tbl_service_package['expires']); ?>" class="form-control" id="expires" />
						</div>
					</div>
					<div class="col-md-6">
						<label for="package_details" class="control-label">Package Details</label>
						<div class="form-group">
							<input type="text" name="package_details" value="<?php echo ($this->input->post('package_details') ? $this->input->post('package_details') : $tbl_service_package['package_details']); ?>" class="form-control" id="package_details" />
						</div>
					</div>
					<div class="col-md-6">
						<label for="package_price" class="control-label">Package Price</label>
						<div class="form-group">
							<input type="text" name="package_price" value="<?php echo ($this->input->post('package_price') ? $this->input->post('package_price') : $tbl_service_package['package_price']); ?>" class="form-control" id="package_price" />
						</div>
					</div>
					<div class="col-md-6">
						<label for="can_be_used_for" class="control-label">Can Be Used For</label>
						<div class="form-group">
							<textarea name="can_be_used_for" class="form-control" id="can_be_used_for"><?php echo ($this->input->post('can_be_used_for') ? $this->input->post('can_be_used_for') : $tbl_service_package['can_be_used_for']); ?></textarea>
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