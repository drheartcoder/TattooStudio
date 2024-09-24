<div class="row">
    <div class="col-md-12">
      	<div class="box box-info">
            <div class="box-header with-border">
              	<h3 class="box-title">Tbl News Edit</h3>
            </div>
			<?php echo form_open('tbl_news/edit/'.$tbl_news['news_id']); ?>
			<div class="box-body">
				<div class="row clearfix">
					<div class="col-md-6">
						<label for="news_title" class="control-label">News Title</label>
						<div class="form-group">
							<input type="text" name="news_title" value="<?php echo ($this->input->post('news_title') ? $this->input->post('news_title') : $tbl_news['news_title']); ?>" class="form-control" id="news_title" />
						</div>
					</div>
					<div class="col-md-6">
						<label for="news_image" class="control-label">News Image</label>
						<div class="form-group">
							<input type="text" name="news_image" value="<?php echo ($this->input->post('news_image') ? $this->input->post('news_image') : $tbl_news['news_image']); ?>" class="form-control" id="news_image" />
						</div>
					</div>
					<div class="col-md-6">
						<label for="news_status" class="control-label">News Status</label>
						<div class="form-group">
							<input type="text" name="news_status" value="<?php echo ($this->input->post('news_status') ? $this->input->post('news_status') : $tbl_news['news_status']); ?>" class="form-control" id="news_status" />
						</div>
					</div>
					<div class="col-md-6">
						<label for="news_desc" class="control-label">News Desc</label>
						<div class="form-group">
							<textarea name="news_desc" class="form-control" id="news_desc"><?php echo ($this->input->post('news_desc') ? $this->input->post('news_desc') : $tbl_news['news_desc']); ?></textarea>
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