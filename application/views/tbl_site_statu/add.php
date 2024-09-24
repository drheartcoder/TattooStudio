<div class="row">
    <div class="col-md-12">
      	<div class="box box-info">
            <div class="box-header with-border">
              	<h3 class="box-title">Tbl Site Statu Add</h3>
            </div>
            <?php echo form_open('tbl_site_statu/add'); ?>
          	<div class="box-body">
          		<div class="row clearfix">
					<div class="col-md-6">
						<label for="site_id" class="control-label">Site Id</label>
						<div class="form-group">
							<input type="text" name="site_id" value="<?php echo $this->input->post('site_id'); ?>" class="form-control" id="site_id" />
						</div>
					</div>
					<div class="col-md-6">
						<label for="site_status" class="control-label">Site Status</label>
						<div class="form-group">
							<input type="text" name="site_status" value="<?php echo $this->input->post('site_status'); ?>" class="form-control" id="site_status" />
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