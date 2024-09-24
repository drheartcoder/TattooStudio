<div class="row">
    <div class="col-md-12">
      	<div class="box box-info">
            <div class="box-header with-border">
              	<h3 class="box-title">Tbl Home Page Content Edit</h3>
            </div>
			<?php echo form_open('tbl_home_page_content/edit/'.$tbl_home_page_content['id']); ?>
			<div class="box-body">
				<div class="row clearfix">
					<div class="col-md-6">
						<label for="content" class="control-label">Content</label>
						<div class="form-group">
							<textarea name="content" class="form-control" id="content"><?php echo ($this->input->post('content') ? $this->input->post('content') : $tbl_home_page_content['content']); ?></textarea>
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