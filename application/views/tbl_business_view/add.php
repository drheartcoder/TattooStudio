<div class="row">
    <div class="col-md-12">
      	<div class="box box-info">
            <div class="box-header with-border">
              	<h3 class="box-title">Tbl Business View Add</h3>
            </div>
            <?php echo form_open('tbl_business_view/add'); ?>
          	<div class="box-body">
          		<div class="row clearfix">
					<div class="col-md-6">
						<label for="view_id" class="control-label">View Id</label>
						<div class="form-group">
							<input type="text" name="view_id" value="<?php echo $this->input->post('view_id'); ?>" class="form-control" id="view_id" />
						</div>
					</div>
					<div class="col-md-6">
						<label for="business_id" class="control-label">Business Id</label>
						<div class="form-group">
							<input type="text" name="business_id" value="<?php echo $this->input->post('business_id'); ?>" class="form-control" id="business_id" />
						</div>
					</div>
					<div class="col-md-6">
						<label for="fk_user_id" class="control-label">Fk User Id</label>
						<div class="form-group">
							<input type="text" name="fk_user_id" value="<?php echo $this->input->post('fk_user_id'); ?>" class="form-control" id="fk_user_id" />
						</div>
					</div>
					<div class="col-md-6">
						<label for="ip_address" class="control-label">Ip Address</label>
						<div class="form-group">
							<input type="text" name="ip_address" value="<?php echo $this->input->post('ip_address'); ?>" class="form-control" id="ip_address" />
						</div>
					</div>
					<div class="col-md-6">
						<label for="view_count" class="control-label">View Count</label>
						<div class="form-group">
							<input type="text" name="view_count" value="<?php echo $this->input->post('view_count'); ?>" class="form-control" id="view_count" />
						</div>
					</div>
					<div class="col-md-6">
						<label for="added_date" class="control-label">Added Date</label>
						<div class="form-group">
							<input type="text" name="added_date" value="<?php echo $this->input->post('added_date'); ?>" class="has-datetimepicker form-control" id="added_date" />
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