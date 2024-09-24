<div class="row">
    <div class="col-md-12">
      	<div class="box box-info">
            <div class="box-header with-border">
              	<h3 class="box-title">Tbl Service Pakage Edit</h3>
            </div>
			<?php echo form_open('tbl_service_pakage/edit/'.$tbl_service_pakage['ser_pk_id']); ?>
			<div class="box-body">
				<div class="row clearfix">
					<div class="col-md-6">
						<label for="pakage_name" class="control-label">Pakage Name</label>
						<div class="form-group">
							<input type="text" name="pakage_name" value="<?php echo ($this->input->post('pakage_name') ? $this->input->post('pakage_name') : $tbl_service_pakage['pakage_name']); ?>" class="form-control" id="pakage_name" />
						</div>
					</div>
					<div class="col-md-6">
						<label for="fk_business_id" class="control-label">Fk Business Id</label>
						<div class="form-group">
							<input type="text" name="fk_business_id" value="<?php echo ($this->input->post('fk_business_id') ? $this->input->post('fk_business_id') : $tbl_service_pakage['fk_business_id']); ?>" class="form-control" id="fk_business_id" />
						</div>
					</div>
					<div class="col-md-6">
						<label for="pakage_qty" class="control-label">Pakage Qty</label>
						<div class="form-group">
							<input type="text" name="pakage_qty" value="<?php echo ($this->input->post('pakage_qty') ? $this->input->post('pakage_qty') : $tbl_service_pakage['pakage_qty']); ?>" class="form-control" id="pakage_qty" />
						</div>
					</div>
					<div class="col-md-6">
						<label for="pakage_duration" class="control-label">Pakage Duration</label>
						<div class="form-group">
							<input type="text" name="pakage_duration" value="<?php echo ($this->input->post('pakage_duration') ? $this->input->post('pakage_duration') : $tbl_service_pakage['pakage_duration']); ?>" class="form-control" id="pakage_duration" />
						</div>
					</div>
					<div class="col-md-6">
						<label for="price" class="control-label">Price</label>
						<div class="form-group">
							<input type="text" name="price" value="<?php echo ($this->input->post('price') ? $this->input->post('price') : $tbl_service_pakage['price']); ?>" class="form-control" id="price" />
						</div>
					</div>
					<div class="col-md-6">
						<label for="date" class="control-label">Date</label>
						<div class="form-group">
							<input type="text" name="date" value="<?php echo ($this->input->post('date') ? $this->input->post('date') : $tbl_service_pakage['date']); ?>" class="form-control" id="date" />
						</div>
					</div>
					<div class="col-md-6">
						<label for="is_delete" class="control-label">Is Delete</label>
						<div class="form-group">
							<input type="text" name="is_delete" value="<?php echo ($this->input->post('is_delete') ? $this->input->post('is_delete') : $tbl_service_pakage['is_delete']); ?>" class="form-control" id="is_delete" />
						</div>
					</div>
					<div class="col-md-6">
						<label for="pk_service_menu_id" class="control-label">Pk Service Menu Id</label>
						<div class="form-group">
							<textarea name="pk_service_menu_id" class="form-control" id="pk_service_menu_id"><?php echo ($this->input->post('pk_service_menu_id') ? $this->input->post('pk_service_menu_id') : $tbl_service_pakage['pk_service_menu_id']); ?></textarea>
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