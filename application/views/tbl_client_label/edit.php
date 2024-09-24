<div class="row">
    <div class="col-md-12">
      	<div class="box box-info">
            <div class="box-header with-border">
              	<h3 class="box-title">Tbl Client Label Edit</h3>
            </div>
			<?php echo form_open('tbl_client_label/edit/'.$tbl_client_label['label_id']); ?>
			<div class="box-body">
				<div class="row clearfix">
					<div class="col-md-6">
						<label for="fk_client_id" class="control-label">Fk Client Id</label>
						<div class="form-group">
							<input type="text" name="fk_client_id" value="<?php echo ($this->input->post('fk_client_id') ? $this->input->post('fk_client_id') : $tbl_client_label['fk_client_id']); ?>" class="form-control" id="fk_client_id" />
						</div>
					</div>
					<div class="col-md-6">
						<label for="label_name" class="control-label">Label Name</label>
						<div class="form-group">
							<input type="text" name="label_name" value="<?php echo ($this->input->post('label_name') ? $this->input->post('label_name') : $tbl_client_label['label_name']); ?>" class="form-control" id="label_name" />
						</div>
					</div>
					<div class="col-md-6">
						<label for="fk_business_id" class="control-label">Fk Business Id</label>
						<div class="form-group">
							<input type="text" name="fk_business_id" value="<?php echo ($this->input->post('fk_business_id') ? $this->input->post('fk_business_id') : $tbl_client_label['fk_business_id']); ?>" class="form-control" id="fk_business_id" />
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