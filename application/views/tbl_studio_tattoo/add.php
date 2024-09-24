<div class="row">
    <div class="col-md-12">
      	<div class="box box-info">
            <div class="box-header with-border">
              	<h3 class="box-title">Tbl Studio Tattoo Add</h3>
            </div>
            <?php echo form_open('tbl_studio_tattoo/add'); ?>
          	<div class="box-body">
          		<div class="row clearfix">
					<div class="col-md-6">
						<label for="tattoo_title" class="control-label">Tattoo Title</label>
						<div class="form-group">
							<input type="text" name="tattoo_title" value="<?php echo $this->input->post('tattoo_title'); ?>" class="form-control" id="tattoo_title" />
						</div>
					</div>
					<div class="col-md-6">
						<label for="duration" class="control-label">Duration</label>
						<div class="form-group">
							<input type="text" name="duration" value="<?php echo $this->input->post('duration'); ?>" class="form-control" id="duration" />
						</div>
					</div>
					<div class="col-md-6">
						<label for="tatto_staff" class="control-label">Tatto Staff</label>
						<div class="form-group">
							<input type="text" name="tatto_staff" value="<?php echo $this->input->post('tatto_staff'); ?>" class="form-control" id="tatto_staff" />
						</div>
					</div>
					<div class="col-md-6">
						<label for="tattoo_price" class="control-label">Tattoo Price</label>
						<div class="form-group">
							<input type="text" name="tattoo_price" value="<?php echo $this->input->post('tattoo_price'); ?>" class="form-control" id="tattoo_price" />
						</div>
					</div>
					<div class="col-md-6">
						<label for="tattoo_style" class="control-label">Tattoo Style</label>
						<div class="form-group">
							<input type="text" name="tattoo_style" value="<?php echo $this->input->post('tattoo_style'); ?>" class="form-control" id="tattoo_style" />
						</div>
					</div>
					<div class="col-md-6">
						<label for="tattoo_image" class="control-label">Tattoo Image</label>
						<div class="form-group">
							<input type="text" name="tattoo_image" value="<?php echo $this->input->post('tattoo_image'); ?>" class="form-control" id="tattoo_image" />
						</div>
					</div>
					<div class="col-md-6">
						<label for="category" class="control-label">Category</label>
						<div class="form-group">
							<input type="text" name="category" value="<?php echo $this->input->post('category'); ?>" class="form-control" id="category" />
						</div>
					</div>
					<div class="col-md-6">
						<label for="sub_category" class="control-label">Sub Category</label>
						<div class="form-group">
							<input type="text" name="sub_category" value="<?php echo $this->input->post('sub_category'); ?>" class="form-control" id="sub_category" />
						</div>
					</div>
					<div class="col-md-6">
						<label for="color" class="control-label">Color</label>
						<div class="form-group">
							<input type="text" name="color" value="<?php echo $this->input->post('color'); ?>" class="form-control" id="color" />
						</div>
					</div>
					<div class="col-md-6">
						<label for="size" class="control-label">Size</label>
						<div class="form-group">
							<input type="text" name="size" value="<?php echo $this->input->post('size'); ?>" class="form-control" id="size" />
						</div>
					</div>
					<div class="col-md-6">
						<label for="user_id" class="control-label">User Id</label>
						<div class="form-group">
							<input type="text" name="user_id" value="<?php echo $this->input->post('user_id'); ?>" class="form-control" id="user_id" />
						</div>
					</div>
					<div class="col-md-6">
						<label for="is_deleted" class="control-label">Is Deleted</label>
						<div class="form-group">
							<input type="text" name="is_deleted" value="<?php echo $this->input->post('is_deleted'); ?>" class="form-control" id="is_deleted" />
						</div>
					</div>
					<div class="col-md-6">
						<label for="tattoo_description" class="control-label">Tattoo Description</label>
						<div class="form-group">
							<textarea name="tattoo_description" class="form-control" id="tattoo_description"><?php echo $this->input->post('tattoo_description'); ?></textarea>
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