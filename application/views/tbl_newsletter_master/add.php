<div class="row">
    <div class="col-md-12">
      	<div class="box box-info">
            <div class="box-header with-border">
              	<h3 class="box-title">Tbl Newsletter Master Add</h3>
            </div>
            <?php echo form_open('tbl_newsletter_master/add'); ?>
          	<div class="box-body">
          		<div class="row clearfix">
					<div class="col-md-6">
						<label for="news_title" class="control-label">News Title</label>
						<div class="form-group">
							<input type="text" name="news_title" value="<?php echo $this->input->post('news_title'); ?>" class="form-control" id="news_title" />
						</div>
					</div>
					<div class="col-md-6">
						<label for="newsletter_subject" class="control-label">Newsletter Subject</label>
						<div class="form-group">
							<input type="text" name="newsletter_subject" value="<?php echo $this->input->post('newsletter_subject'); ?>" class="form-control" id="newsletter_subject" />
						</div>
					</div>
					<div class="col-md-6">
						<label for="news_status" class="control-label">News Status</label>
						<div class="form-group">
							<input type="text" name="news_status" value="<?php echo $this->input->post('news_status'); ?>" class="form-control" id="news_status" />
						</div>
					</div>
					<div class="col-md-6">
						<label for="news_description" class="control-label">News Description</label>
						<div class="form-group">
							<textarea name="news_description" class="form-control" id="news_description"><?php echo $this->input->post('news_description'); ?></textarea>
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