<div class="row">
    <div class="col-md-12">
      	<div class="box box-info">
            <div class="box-header with-border">
              	<h3 class="box-title">Tbl Cc Datum Add</h3>
            </div>
            <?php echo form_open('tbl_cc_datum/add'); ?>
          	<div class="box-body">
          		<div class="row clearfix">
					<div class="col-md-6">
						<label for="fk_user_id" class="control-label">Fk User Id</label>
						<div class="form-group">
							<input type="text" name="fk_user_id" value="<?php echo $this->input->post('fk_user_id'); ?>" class="form-control" id="fk_user_id" />
						</div>
					</div>
					<div class="col-md-6">
						<label for="cc_end_number" class="control-label">Cc End Number</label>
						<div class="form-group">
							<input type="text" name="cc_end_number" value="<?php echo $this->input->post('cc_end_number'); ?>" class="form-control" id="cc_end_number" />
						</div>
					</div>
					<div class="col-md-6">
						<label for="is_active" class="control-label">Is Active</label>
						<div class="form-group">
							<input type="text" name="is_active" value="<?php echo $this->input->post('is_active'); ?>" class="form-control" id="is_active" />
						</div>
					</div>
					<div class="col-md-6">
						<label for="data" class="control-label">Data</label>
						<div class="form-group">
							<textarea name="data" class="form-control" id="data"><?php echo $this->input->post('data'); ?></textarea>
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