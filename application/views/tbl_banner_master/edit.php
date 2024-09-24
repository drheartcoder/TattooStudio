<div class="row">
    <div class="col-md-12">
      	<div class="box box-info">
            <div class="box-header with-border">
              	<h3 class="box-title">Tbl Banner Master Edit</h3>
            </div>
			<?php echo form_open('tbl_banner_master/edit/'.$tbl_banner_master['banner_id']); ?>
			<div class="box-body">
				<div class="row clearfix">
					<div class="col-md-6">
						<label for="banner_title" class="control-label">Banner Title</label>
						<div class="form-group">
							<input type="text" name="banner_title" value="<?php echo ($this->input->post('banner_title') ? $this->input->post('banner_title') : $tbl_banner_master['banner_title']); ?>" class="form-control" id="banner_title" />
						</div>
					</div>
					<div class="col-md-6">
						<label for="banner_image" class="control-label">Banner Image</label>
						<div class="form-group">
							<input type="text" name="banner_image" value="<?php echo ($this->input->post('banner_image') ? $this->input->post('banner_image') : $tbl_banner_master['banner_image']); ?>" class="form-control" id="banner_image" />
						</div>
					</div>
					<div class="col-md-6">
						<label for="banner_order" class="control-label">Banner Order</label>
						<div class="form-group">
							<input type="text" name="banner_order" value="<?php echo ($this->input->post('banner_order') ? $this->input->post('banner_order') : $tbl_banner_master['banner_order']); ?>" class="form-control" id="banner_order" />
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