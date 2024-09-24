<div class="row">
    <div class="col-md-12">
      	<div class="box box-info">
            <div class="box-header with-border">
              	<h3 class="box-title">Tbl Business Mailing Addres Add</h3>
            </div>
            <?php echo form_open('tbl_business_mailing_addres/add'); ?>
          	<div class="box-body">
          		<div class="row clearfix">
					<div class="col-md-6">
						<label for="fk_business_id" class="control-label">Fk Business Id</label>
						<div class="form-group">
							<input type="text" name="fk_business_id" value="<?php echo $this->input->post('fk_business_id'); ?>" class="form-control" id="fk_business_id" />
						</div>
					</div>
					<div class="col-md-6">
						<label for="recipient_name" class="control-label">Recipient Name</label>
						<div class="form-group">
							<input type="text" name="recipient_name" value="<?php echo $this->input->post('recipient_name'); ?>" class="form-control" id="recipient_name" />
						</div>
					</div>
					<div class="col-md-6">
						<label for="giolocation" class="control-label">Giolocation</label>
						<div class="form-group">
							<input type="text" name="giolocation" value="<?php echo $this->input->post('giolocation'); ?>" class="form-control" id="giolocation" />
						</div>
					</div>
					<div class="col-md-6">
						<label for="street_address" class="control-label">Street Address</label>
						<div class="form-group">
							<input type="text" name="street_address" value="<?php echo $this->input->post('street_address'); ?>" class="form-control" id="street_address" />
						</div>
					</div>
					<div class="col-md-6">
						<label for="street_address2" class="control-label">Street Address2</label>
						<div class="form-group">
							<input type="text" name="street_address2" value="<?php echo $this->input->post('street_address2'); ?>" class="form-control" id="street_address2" />
						</div>
					</div>
					<div class="col-md-6">
						<label for="street_address3" class="control-label">Street Address3</label>
						<div class="form-group">
							<input type="text" name="street_address3" value="<?php echo $this->input->post('street_address3'); ?>" class="form-control" id="street_address3" />
						</div>
					</div>
					<div class="col-md-6">
						<label for="city" class="control-label">City</label>
						<div class="form-group">
							<input type="text" name="city" value="<?php echo $this->input->post('city'); ?>" class="form-control" id="city" />
						</div>
					</div>
					<div class="col-md-6">
						<label for="district" class="control-label">District</label>
						<div class="form-group">
							<input type="text" name="district" value="<?php echo $this->input->post('district'); ?>" class="form-control" id="district" />
						</div>
					</div>
					<div class="col-md-6">
						<label for="country" class="control-label">Country</label>
						<div class="form-group">
							<input type="text" name="country" value="<?php echo $this->input->post('country'); ?>" class="form-control" id="country" />
						</div>
					</div>
					<div class="col-md-6">
						<label for="zip" class="control-label">Zip</label>
						<div class="form-group">
							<input type="text" name="zip" value="<?php echo $this->input->post('zip'); ?>" class="form-control" id="zip" />
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