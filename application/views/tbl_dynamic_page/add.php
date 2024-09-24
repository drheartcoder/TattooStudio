<div class="row">
    <div class="col-md-12">
      	<div class="box box-info">
            <div class="box-header with-border">
              	<h3 class="box-title">Tbl Dynamic Page Add</h3>
            </div>
            <?php echo form_open('tbl_dynamic_page/add'); ?>
          	<div class="box-body">
          		<div class="row clearfix">
					<div class="col-md-6">
						<label for="page_name" class="control-label">Page Name</label>
						<div class="form-group">
							<input type="text" name="page_name" value="<?php echo $this->input->post('page_name'); ?>" class="form-control" id="page_name" />
						</div>
					</div>
					<div class="col-md-6">
						<label for="slug" class="control-label">Slug</label>
						<div class="form-group">
							<input type="text" name="slug" value="<?php echo $this->input->post('slug'); ?>" class="form-control" id="slug" />
						</div>
					</div>
					<div class="col-md-6">
						<label for="page_title" class="control-label">Page Title</label>
						<div class="form-group">
							<input type="text" name="page_title" value="<?php echo $this->input->post('page_title'); ?>" class="form-control" id="page_title" />
						</div>
					</div>
					<div class="col-md-6">
						<label for="front_status" class="control-label">Front Status</label>
						<div class="form-group">
							<input type="text" name="front_status" value="<?php echo $this->input->post('front_status'); ?>" class="form-control" id="front_status" />
						</div>
					</div>
					<div class="col-md-6">
						<label for="meta_title" class="control-label">Meta Title</label>
						<div class="form-group">
							<input type="text" name="meta_title" value="<?php echo $this->input->post('meta_title'); ?>" class="form-control" id="meta_title" />
						</div>
					</div>
					<div class="col-md-6">
						<label for="page_description" class="control-label">Page Description</label>
						<div class="form-group">
							<textarea name="page_description" class="form-control" id="page_description"><?php echo $this->input->post('page_description'); ?></textarea>
						</div>
					</div>
					<div class="col-md-6">
						<label for="meta_keyword" class="control-label">Meta Keyword</label>
						<div class="form-group">
							<textarea name="meta_keyword" class="form-control" id="meta_keyword"><?php echo $this->input->post('meta_keyword'); ?></textarea>
						</div>
					</div>
					<div class="col-md-6">
						<label for="meta_description" class="control-label">Meta Description</label>
						<div class="form-group">
							<textarea name="meta_description" class="form-control" id="meta_description"><?php echo $this->input->post('meta_description'); ?></textarea>
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