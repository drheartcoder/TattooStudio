<div class="row">
    <div class="col-md-12">
      	<div class="box box-info">
            <div class="box-header with-border">
              	<h3 class="box-title">Tbl Testimonial Edit</h3>
            </div>
			<?php echo form_open('tbl_testimonial/edit/'.$tbl_testimonial['testimony_id']); ?>
			<div class="box-body">
				<div class="row clearfix">
					<div class="col-md-6">
						<label for="title" class="control-label">Title</label>
						<div class="form-group">
							<input type="text" name="title" value="<?php echo ($this->input->post('title') ? $this->input->post('title') : $tbl_testimonial['title']); ?>" class="form-control" id="title" />
						</div>
					</div>
					<div class="col-md-6">
						<label for="address" class="control-label">Address</label>
						<div class="form-group">
							<input type="text" name="address" value="<?php echo ($this->input->post('address') ? $this->input->post('address') : $tbl_testimonial['address']); ?>" class="form-control" id="address" />
						</div>
					</div>
					<div class="col-md-6">
						<label for="status" class="control-label">Status</label>
						<div class="form-group">
							<input type="text" name="status" value="<?php echo ($this->input->post('status') ? $this->input->post('status') : $tbl_testimonial['status']); ?>" class="form-control" id="status" />
						</div>
					</div>
					<div class="col-md-6">
						<label for="image" class="control-label">Image</label>
						<div class="form-group">
							<input type="text" name="image" value="<?php echo ($this->input->post('image') ? $this->input->post('image') : $tbl_testimonial['image']); ?>" class="form-control" id="image" />
						</div>
					</div>
					<div class="col-md-6">
						<label for="name" class="control-label">Name</label>
						<div class="form-group">
							<textarea name="name" class="form-control" id="name"><?php echo ($this->input->post('name') ? $this->input->post('name') : $tbl_testimonial['name']); ?></textarea>
						</div>
					</div>
					<div class="col-md-6">
						<label for="desc" class="control-label">Desc</label>
						<div class="form-group">
							<textarea name="desc" class="form-control" id="desc"><?php echo ($this->input->post('desc') ? $this->input->post('desc') : $tbl_testimonial['desc']); ?></textarea>
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