<div class="row">
    <div class="col-md-12">
      	<div class="box box-info">
            <div class="box-header with-border">
              	<h3 class="box-title">Tbl Client Custom Price Edit</h3>
            </div>
			<?php echo form_open('tbl_client_custom_price/edit/'.$tbl_client_custom_price['custom_price_id']); ?>
			<div class="box-body">
				<div class="row clearfix">
					<div class="col-md-6">
						<label for="fk_client_id" class="control-label">Fk Client Id</label>
						<div class="form-group">
							<input type="text" name="fk_client_id" value="<?php echo ($this->input->post('fk_client_id') ? $this->input->post('fk_client_id') : $tbl_client_custom_price['fk_client_id']); ?>" class="form-control" id="fk_client_id" />
						</div>
					</div>
					<div class="col-md-6">
						<label for="fk_service_menu_id" class="control-label">Fk Service Menu Id</label>
						<div class="form-group">
							<input type="text" name="fk_service_menu_id" value="<?php echo ($this->input->post('fk_service_menu_id') ? $this->input->post('fk_service_menu_id') : $tbl_client_custom_price['fk_service_menu_id']); ?>" class="form-control" id="fk_service_menu_id" />
						</div>
					</div>
					<div class="col-md-6">
						<label for="fk_staff_id" class="control-label">Fk Staff Id</label>
						<div class="form-group">
							<input type="text" name="fk_staff_id" value="<?php echo ($this->input->post('fk_staff_id') ? $this->input->post('fk_staff_id') : $tbl_client_custom_price['fk_staff_id']); ?>" class="form-control" id="fk_staff_id" />
						</div>
					</div>
					<div class="col-md-6">
						<label for="custom_price" class="control-label">Custom Price</label>
						<div class="form-group">
							<input type="text" name="custom_price" value="<?php echo ($this->input->post('custom_price') ? $this->input->post('custom_price') : $tbl_client_custom_price['custom_price']); ?>" class="form-control" id="custom_price" />
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