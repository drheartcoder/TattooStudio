<div class="row">
    <div class="col-md-12">
      	<div class="box box-info">
            <div class="box-header with-border">
              	<h3 class="box-title">Tbl Favorite Edit</h3>
            </div>
			<?php echo form_open('tbl_favorite/edit/'.$tbl_favorite['favorite_id']); ?>
			<div class="box-body">
				<div class="row clearfix">
					<div class="col-md-6">
						<label for="fk_user_id" class="control-label">Fk User Id</label>
						<div class="form-group">
							<input type="text" name="fk_user_id" value="<?php echo ($this->input->post('fk_user_id') ? $this->input->post('fk_user_id') : $tbl_favorite['fk_user_id']); ?>" class="form-control" id="fk_user_id" />
						</div>
					</div>
					<div class="col-md-6">
						<label for="fk_business_id" class="control-label">Fk Business Id</label>
						<div class="form-group">
							<input type="text" name="fk_business_id" value="<?php echo ($this->input->post('fk_business_id') ? $this->input->post('fk_business_id') : $tbl_favorite['fk_business_id']); ?>" class="form-control" id="fk_business_id" />
						</div>
					</div>
					<div class="col-md-6">
						<label for="favorite_link" class="control-label">Favorite Link</label>
						<div class="form-group">
							<input type="text" name="favorite_link" value="<?php echo ($this->input->post('favorite_link') ? $this->input->post('favorite_link') : $tbl_favorite['favorite_link']); ?>" class="form-control" id="favorite_link" />
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