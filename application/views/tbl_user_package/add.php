<div class="row">
    <div class="col-md-12">
      	<div class="box box-info">
            <div class="box-header with-border">
              	<h3 class="box-title">Tbl User Package Add</h3>
            </div>
            <?php echo form_open('tbl_user_package/add'); ?>
          	<div class="box-body">
          		<div class="row clearfix">
					<div class="col-md-6">
						<label for="pakage_name" class="control-label">Pakage Name</label>
						<div class="form-group">
							<input type="text" name="pakage_name" value="<?php echo $this->input->post('pakage_name'); ?>" class="form-control" id="pakage_name" />
						</div>
					</div>
					<div class="col-md-6">
						<label for="fk_user_id" class="control-label">Fk User Id</label>
						<div class="form-group">
							<input type="text" name="fk_user_id" value="<?php echo $this->input->post('fk_user_id'); ?>" class="form-control" id="fk_user_id" />
						</div>
					</div>
					<div class="col-md-6">
						<label for="fk_business_id" class="control-label">Fk Business Id</label>
						<div class="form-group">
							<input type="text" name="fk_business_id" value="<?php echo $this->input->post('fk_business_id'); ?>" class="form-control" id="fk_business_id" />
						</div>
					</div>
					<div class="col-md-6">
						<label for="packge_qty" class="control-label">Packge Qty</label>
						<div class="form-group">
							<input type="text" name="packge_qty" value="<?php echo $this->input->post('packge_qty'); ?>" class="form-control" id="packge_qty" />
						</div>
					</div>
					<div class="col-md-6">
						<label for="fk_pakage_id" class="control-label">Fk Pakage Id</label>
						<div class="form-group">
							<input type="text" name="fk_pakage_id" value="<?php echo $this->input->post('fk_pakage_id'); ?>" class="form-control" id="fk_pakage_id" />
						</div>
					</div>
					<div class="col-md-6">
						<label for="pakage_remaining_qty" class="control-label">Pakage Remaining Qty</label>
						<div class="form-group">
							<input type="text" name="pakage_remaining_qty" value="<?php echo $this->input->post('pakage_remaining_qty'); ?>" class="form-control" id="pakage_remaining_qty" />
						</div>
					</div>
					<div class="col-md-6">
						<label for="purchase_date" class="control-label">Purchase Date</label>
						<div class="form-group">
							<input type="text" name="purchase_date" value="<?php echo $this->input->post('purchase_date'); ?>" class="has-datepicker form-control" id="purchase_date" />
						</div>
					</div>
					<div class="col-md-6">
						<label for="expiry_date" class="control-label">Expiry Date</label>
						<div class="form-group">
							<input type="text" name="expiry_date" value="<?php echo $this->input->post('expiry_date'); ?>" class="has-datepicker form-control" id="expiry_date" />
						</div>
					</div>
					<div class="col-md-6">
						<label for="status" class="control-label">Status</label>
						<div class="form-group">
							<input type="text" name="status" value="<?php echo $this->input->post('status'); ?>" class="form-control" id="status" />
						</div>
					</div>
					<div class="col-md-6">
						<label for="fk_service_menu_id" class="control-label">Fk Service Menu Id</label>
						<div class="form-group">
							<textarea name="fk_service_menu_id" class="form-control" id="fk_service_menu_id"><?php echo $this->input->post('fk_service_menu_id'); ?></textarea>
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