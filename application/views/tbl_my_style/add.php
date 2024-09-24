<div class="row">
    <div class="col-md-12">
      	<div class="box box-info">
            <div class="box-header with-border">
              	<h3 class="box-title">Tbl My Style Add</h3>
            </div>
            <?php echo form_open('tbl_my_style/add'); ?>
          	<div class="box-body">
          		<div class="row clearfix">
					<div class="col-md-6">
						<label for="style_id" class="control-label">Style Id</label>
						<div class="form-group">
							<input type="text" name="style_id" value="<?php echo $this->input->post('style_id'); ?>" class="form-control" id="style_id" />
						</div>
					</div>
					<div class="col-md-6">
						<label for="business_user_id" class="control-label">Business User Id</label>
						<div class="form-group">
							<input type="text" name="business_user_id" value="<?php echo $this->input->post('business_user_id'); ?>" class="form-control" id="business_user_id" />
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