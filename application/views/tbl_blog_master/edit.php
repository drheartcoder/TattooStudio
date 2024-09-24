<div class="row">
    <div class="col-md-12">
      	<div class="box box-info">
            <div class="box-header with-border">
              	<h3 class="box-title">Tbl Blog Master Edit</h3>
            </div>
			<?php echo form_open('tbl_blog_master/edit/'.$tbl_blog_master['blog_id']); ?>
			<div class="box-body">
				<div class="row clearfix">
					<div class="col-md-6">
						<label for="blog_status" class="control-label">Blog Status</label>
						<div class="form-group">
							<input type="text" name="blog_status" value="<?php echo ($this->input->post('blog_status') ? $this->input->post('blog_status') : $tbl_blog_master['blog_status']); ?>" class="form-control" id="blog_status" />
						</div>
					</div>
					<div class="col-md-6">
						<label for="blog_title" class="control-label">Blog Title</label>
						<div class="form-group">
							<textarea name="blog_title" class="form-control" id="blog_title"><?php echo ($this->input->post('blog_title') ? $this->input->post('blog_title') : $tbl_blog_master['blog_title']); ?></textarea>
						</div>
					</div>
					<div class="col-md-6">
						<label for="blog_description" class="control-label">Blog Description</label>
						<div class="form-group">
							<textarea name="blog_description" class="form-control" id="blog_description"><?php echo ($this->input->post('blog_description') ? $this->input->post('blog_description') : $tbl_blog_master['blog_description']); ?></textarea>
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