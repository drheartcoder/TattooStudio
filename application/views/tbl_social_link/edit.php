<div class="row">
    <div class="col-md-12">
      	<div class="box box-info">
            <div class="box-header with-border">
              	<h3 class="box-title">Tbl Social Link Edit</h3>
            </div>
			<?php echo form_open('tbl_social_link/edit/'.$tbl_social_link['social_id']); ?>
			<div class="box-body">
				<div class="row clearfix">
					<div class="col-md-6">
						<label for="facebook" class="control-label">Facebook</label>
						<div class="form-group">
							<input type="text" name="facebook" value="<?php echo ($this->input->post('facebook') ? $this->input->post('facebook') : $tbl_social_link['facebook']); ?>" class="form-control" id="facebook" />
						</div>
					</div>
					<div class="col-md-6">
						<label for="twitter" class="control-label">Twitter</label>
						<div class="form-group">
							<input type="text" name="twitter" value="<?php echo ($this->input->post('twitter') ? $this->input->post('twitter') : $tbl_social_link['twitter']); ?>" class="form-control" id="twitter" />
						</div>
					</div>
					<div class="col-md-6">
						<label for="googleplus" class="control-label">Googleplus</label>
						<div class="form-group">
							<input type="text" name="googleplus" value="<?php echo ($this->input->post('googleplus') ? $this->input->post('googleplus') : $tbl_social_link['googleplus']); ?>" class="form-control" id="googleplus" />
						</div>
					</div>
					<div class="col-md-6">
						<label for="instagram" class="control-label">Instagram</label>
						<div class="form-group">
							<input type="text" name="instagram" value="<?php echo ($this->input->post('instagram') ? $this->input->post('instagram') : $tbl_social_link['instagram']); ?>" class="form-control" id="instagram" />
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