<div class="row">
    <div class="col-md-12">
      	<div class="box box-info">
            <div class="box-header with-border">
              	<h3 class="box-title">Tbl User Address Master Add</h3>
            </div>
            <?php echo form_open('tbl_user_address_master/add'); ?>
          	<div class="box-body">
          		<div class="row clearfix">
					<div class="col-md-6">
						<label for="fk_user_id" class="control-label">Fk User Id</label>
						<div class="form-group">
							<input type="text" name="fk_user_id" value="<?php echo $this->input->post('fk_user_id'); ?>" class="form-control" id="fk_user_id" />
						</div>
					</div>
					<div class="col-md-6">
						<label for="street_1" class="control-label">Street 1</label>
						<div class="form-group">
							<input type="text" name="street_1" value="<?php echo $this->input->post('street_1'); ?>" class="form-control" id="street_1" />
						</div>
					</div>
					<div class="col-md-6">
						<label for="street_2" class="control-label">Street 2</label>
						<div class="form-group">
							<input type="text" name="street_2" value="<?php echo $this->input->post('street_2'); ?>" class="form-control" id="street_2" />
						</div>
					</div>
					<div class="col-md-6">
						<label for="street_3" class="control-label">Street 3</label>
						<div class="form-group">
							<input type="text" name="street_3" value="<?php echo $this->input->post('street_3'); ?>" class="form-control" id="street_3" />
						</div>
					</div>
					<div class="col-md-6">
						<label for="country" class="control-label">Country</label>
						<div class="form-group">
							<input type="text" name="country" value="<?php echo $this->input->post('country'); ?>" class="form-control" id="country" />
						</div>
					</div>
					<div class="col-md-6">
						<label for="district" class="control-label">District</label>
						<div class="form-group">
							<input type="text" name="district" value="<?php echo $this->input->post('district'); ?>" class="form-control" id="district" />
						</div>
					</div>
					<div class="col-md-6">
						<label for="city" class="control-label">City</label>
						<div class="form-group">
							<input type="text" name="city" value="<?php echo $this->input->post('city'); ?>" class="form-control" id="city" />
						</div>
					</div>
					<div class="col-md-6">
						<label for="zipcode" class="control-label">Zipcode</label>
						<div class="form-group">
							<input type="text" name="zipcode" value="<?php echo $this->input->post('zipcode'); ?>" class="form-control" id="zipcode" />
						</div>
					</div>
					<div class="col-md-6">
						<label for="is_active" class="control-label">Is Active</label>
						<div class="form-group">
							<input type="text" name="is_active" value="<?php echo $this->input->post('is_active'); ?>" class="form-control" id="is_active" />
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