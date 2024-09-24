<div class="row">
    <div class="col-md-12">
      	<div class="box box-info">
            <div class="box-header with-border">
              	<h3 class="box-title">Tbl Client Addres Edit</h3>
            </div>
			<?php echo form_open('tbl_client_addres/edit/'.$tbl_client_addres['client_address_id']); ?>
			<div class="box-body">
				<div class="row clearfix">
					<div class="col-md-6">
						<label for="fk_client_id" class="control-label">Fk Client Id</label>
						<div class="form-group">
							<input type="text" name="fk_client_id" value="<?php echo ($this->input->post('fk_client_id') ? $this->input->post('fk_client_id') : $tbl_client_addres['fk_client_id']); ?>" class="form-control" id="fk_client_id" />
						</div>
					</div>
					<div class="col-md-6">
						<label for="street_address_1" class="control-label">Street Address 1</label>
						<div class="form-group">
							<input type="text" name="street_address_1" value="<?php echo ($this->input->post('street_address_1') ? $this->input->post('street_address_1') : $tbl_client_addres['street_address_1']); ?>" class="form-control" id="street_address_1" />
						</div>
					</div>
					<div class="col-md-6">
						<label for="street_address_2" class="control-label">Street Address 2</label>
						<div class="form-group">
							<input type="text" name="street_address_2" value="<?php echo ($this->input->post('street_address_2') ? $this->input->post('street_address_2') : $tbl_client_addres['street_address_2']); ?>" class="form-control" id="street_address_2" />
						</div>
					</div>
					<div class="col-md-6">
						<label for="street_address_3" class="control-label">Street Address 3</label>
						<div class="form-group">
							<input type="text" name="street_address_3" value="<?php echo ($this->input->post('street_address_3') ? $this->input->post('street_address_3') : $tbl_client_addres['street_address_3']); ?>" class="form-control" id="street_address_3" />
						</div>
					</div>
					<div class="col-md-6">
						<label for="country" class="control-label">Country</label>
						<div class="form-group">
							<input type="text" name="country" value="<?php echo ($this->input->post('country') ? $this->input->post('country') : $tbl_client_addres['country']); ?>" class="form-control" id="country" />
						</div>
					</div>
					<div class="col-md-6">
						<label for="state" class="control-label">State</label>
						<div class="form-group">
							<input type="text" name="state" value="<?php echo ($this->input->post('state') ? $this->input->post('state') : $tbl_client_addres['state']); ?>" class="form-control" id="state" />
						</div>
					</div>
					<div class="col-md-6">
						<label for="city" class="control-label">City</label>
						<div class="form-group">
							<input type="text" name="city" value="<?php echo ($this->input->post('city') ? $this->input->post('city') : $tbl_client_addres['city']); ?>" class="form-control" id="city" />
						</div>
					</div>
					<div class="col-md-6">
						<label for="zip" class="control-label">Zip</label>
						<div class="form-group">
							<input type="text" name="zip" value="<?php echo ($this->input->post('zip') ? $this->input->post('zip') : $tbl_client_addres['zip']); ?>" class="form-control" id="zip" />
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