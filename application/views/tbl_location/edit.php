<div class="row">
    <div class="col-md-12">
      	<div class="box box-info">
            <div class="box-header with-border">
              	<h3 class="box-title">Tbl Location Edit</h3>
            </div>
			<?php echo form_open('tbl_location/edit/'.$tbl_location['id']); ?>
			<div class="box-body">
				<div class="row clearfix">
					<div class="col-md-6">
						<label for="name" class="control-label">Name</label>
						<div class="form-group">
							<input type="text" name="name" value="<?php echo ($this->input->post('name') ? $this->input->post('name') : $tbl_location['name']); ?>" class="form-control" id="name" />
						</div>
					</div>
					<div class="col-md-6">
						<label for="districts_id" class="control-label">Districts Id</label>
						<div class="form-group">
							<input type="text" name="districts_id" value="<?php echo ($this->input->post('districts_id') ? $this->input->post('districts_id') : $tbl_location['districts_id']); ?>" class="form-control" id="districts_id" />
						</div>
					</div>
					<div class="col-md-6">
						<label for="status" class="control-label">Status</label>
						<div class="form-group">
							<input type="text" name="status" value="<?php echo ($this->input->post('status') ? $this->input->post('status') : $tbl_location['status']); ?>" class="form-control" id="status" />
						</div>
					</div>
					<div class="col-md-6">
						<label for="video" class="control-label">Video</label>
						<div class="form-group">
							<input type="text" name="video" value="<?php echo ($this->input->post('video') ? $this->input->post('video') : $tbl_location['video']); ?>" class="form-control" id="video" />
						</div>
					</div>
					<div class="col-md-6">
						<label for="address" class="control-label">Address</label>
						<div class="form-group">
							<input type="text" name="address" value="<?php echo ($this->input->post('address') ? $this->input->post('address') : $tbl_location['address']); ?>" class="form-control" id="address" />
						</div>
					</div>
					<div class="col-md-6">
						<label for="zipcode" class="control-label">Zipcode</label>
						<div class="form-group">
							<input type="text" name="zipcode" value="<?php echo ($this->input->post('zipcode') ? $this->input->post('zipcode') : $tbl_location['zipcode']); ?>" class="form-control" id="zipcode" />
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