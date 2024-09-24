<div class="row">
    <div class="col-md-12">
      	<div class="box box-info">
            <div class="box-header with-border">
              	<h3 class="box-title">Tbl Business Labe Edit</h3>
            </div>
			<?php echo form_open('tbl_business_labe/edit/'.$tbl_business_labe['']); ?>
			<div class="box-body">
				<div class="row clearfix">
					<div class="col-md-6">
						<label for="id" class="control-label">ID</label>
						<div class="form-group">
							<input type="text" name="id" value="<?php echo ($this->input->post('id') ? $this->input->post('id') : $tbl_business_labe['id']); ?>" class="form-control" id="id" />
						</div>
					</div>
					<div class="col-md-6">
						<label for="fk_user_id" class="control-label">Fk User Id</label>
						<div class="form-group">
							<input type="text" name="fk_user_id" value="<?php echo ($this->input->post('fk_user_id') ? $this->input->post('fk_user_id') : $tbl_business_labe['fk_user_id']); ?>" class="form-control" id="fk_user_id" />
						</div>
					</div>
					<div class="col-md-6">
						<label for="label_name" class="control-label">Label Name</label>
						<div class="form-group">
							<input type="text" name="label_name" value="<?php echo ($this->input->post('label_name') ? $this->input->post('label_name') : $tbl_business_labe['label_name']); ?>" class="form-control" id="label_name" />
						</div>
					</div>
					<div class="col-md-6">
						<label for="fk_business_id" class="control-label">Fk Business Id</label>
						<div class="form-group">
							<input type="text" name="fk_business_id" value="<?php echo ($this->input->post('fk_business_id') ? $this->input->post('fk_business_id') : $tbl_business_labe['fk_business_id']); ?>" class="form-control" id="fk_business_id" />
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