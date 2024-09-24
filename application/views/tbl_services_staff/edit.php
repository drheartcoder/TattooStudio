<div class="row">
    <div class="col-md-12">
      	<div class="box box-info">
            <div class="box-header with-border">
              	<h3 class="box-title">Tbl Services Staff Edit</h3>
            </div>
			<?php echo form_open('tbl_services_staff/edit/'.$tbl_services_staff['id']); ?>
			<div class="box-body">
				<div class="row clearfix">
					<div class="col-md-6">
						<label for="fk_location_id" class="control-label">Fk Location Id</label>
						<div class="form-group">
							<input type="text" name="fk_location_id" value="<?php echo ($this->input->post('fk_location_id') ? $this->input->post('fk_location_id') : $tbl_services_staff['fk_location_id']); ?>" class="form-control" id="fk_location_id" />
						</div>
					</div>
					<div class="col-md-6">
						<label for="fk_service_id" class="control-label">Fk Service Id</label>
						<div class="form-group">
							<input type="text" name="fk_service_id" value="<?php echo ($this->input->post('fk_service_id') ? $this->input->post('fk_service_id') : $tbl_services_staff['fk_service_id']); ?>" class="form-control" id="fk_service_id" />
						</div>
					</div>
					<div class="col-md-6">
						<label for="fk_business_id" class="control-label">Fk Business Id</label>
						<div class="form-group">
							<input type="text" name="fk_business_id" value="<?php echo ($this->input->post('fk_business_id') ? $this->input->post('fk_business_id') : $tbl_services_staff['fk_business_id']); ?>" class="form-control" id="fk_business_id" />
						</div>
					</div>
					<div class="col-md-6">
						<label for="fk_staff_id" class="control-label">Fk Staff Id</label>
						<div class="form-group">
							<textarea name="fk_staff_id" class="form-control" id="fk_staff_id"><?php echo ($this->input->post('fk_staff_id') ? $this->input->post('fk_staff_id') : $tbl_services_staff['fk_staff_id']); ?></textarea>
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