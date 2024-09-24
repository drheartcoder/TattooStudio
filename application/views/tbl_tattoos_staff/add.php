<div class="row">
    <div class="col-md-12">
      	<div class="box box-info">
            <div class="box-header with-border">
              	<h3 class="box-title">Tbl Tattoos Staff Add</h3>
            </div>
            <?php echo form_open('tbl_tattoos_staff/add'); ?>
          	<div class="box-body">
          		<div class="row clearfix">
					<div class="col-md-6">
						<label for="studio_tattoos_id" class="control-label">Studio Tattoos Id</label>
						<div class="form-group">
							<input type="text" name="studio_tattoos_id" value="<?php echo $this->input->post('studio_tattoos_id'); ?>" class="form-control" id="studio_tattoos_id" />
						</div>
					</div>
					<div class="col-md-6">
						<label for="fk_business_id" class="control-label">Fk Business Id</label>
						<div class="form-group">
							<input type="text" name="fk_business_id" value="<?php echo $this->input->post('fk_business_id'); ?>" class="form-control" id="fk_business_id" />
						</div>
					</div>
					<div class="col-md-6">
						<label for="fk_staff_id" class="control-label">Fk Staff Id</label>
						<div class="form-group">
							<textarea name="fk_staff_id" class="form-control" id="fk_staff_id"><?php echo $this->input->post('fk_staff_id'); ?></textarea>
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