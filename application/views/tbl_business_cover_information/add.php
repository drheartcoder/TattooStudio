<div class="row">
    <div class="col-md-12">
      	<div class="box box-info">
            <div class="box-header with-border">
              	<h3 class="box-title">Tbl Business Cover Information Add</h3>
            </div>
            <?php echo form_open('tbl_business_cover_information/add'); ?>
          	<div class="box-body">
          		<div class="row clearfix">
					<div class="col-md-6">
						<label for="cover_id" class="control-label">Cover Id</label>
						<div class="form-group">
							<input type="text" name="cover_id" value="<?php echo $this->input->post('cover_id'); ?>" class="form-control" id="cover_id" />
						</div>
					</div>
					<div class="col-md-6">
						<label for="fk_business_id" class="control-label">Fk Business Id</label>
						<div class="form-group">
							<input type="text" name="fk_business_id" value="<?php echo $this->input->post('fk_business_id'); ?>" class="form-control" id="fk_business_id" />
						</div>
					</div>
					<div class="col-md-6">
						<label for="cover_photo" class="control-label">Cover Photo</label>
						<div class="form-group">
							<input type="text" name="cover_photo" value="<?php echo $this->input->post('cover_photo'); ?>" class="form-control" id="cover_photo" />
						</div>
					</div>
					<div class="col-md-6">
						<label for="text_one" class="control-label">Text One</label>
						<div class="form-group">
							<textarea name="text_one" class="form-control" id="text_one"><?php echo $this->input->post('text_one'); ?></textarea>
						</div>
					</div>
					<div class="col-md-6">
						<label for="text_two" class="control-label">Text Two</label>
						<div class="form-group">
							<textarea name="text_two" class="form-control" id="text_two"><?php echo $this->input->post('text_two'); ?></textarea>
						</div>
					</div>
					<div class="col-md-6">
						<label for="text_three" class="control-label">Text Three</label>
						<div class="form-group">
							<textarea name="text_three" class="form-control" id="text_three"><?php echo $this->input->post('text_three'); ?></textarea>
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