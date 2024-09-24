<div class="row">
    <div class="col-md-12">
      	<div class="box box-info">
            <div class="box-header with-border">
              	<h3 class="box-title">Tbl Review Rating Add</h3>
            </div>
            <?php echo form_open('tbl_review_rating/add'); ?>
          	<div class="box-body">
          		<div class="row clearfix">
					<div class="col-md-6">
						<label for="rating_user_id" class="control-label">Rating User Id</label>
						<div class="form-group">
							<input type="text" name="rating_user_id" value="<?php echo $this->input->post('rating_user_id'); ?>" class="form-control" id="rating_user_id" />
						</div>
					</div>
					<div class="col-md-6">
						<label for="business_id" class="control-label">Business Id</label>
						<div class="form-group">
							<input type="text" name="business_id" value="<?php echo $this->input->post('business_id'); ?>" class="form-control" id="business_id" />
						</div>
					</div>
					<div class="col-md-6">
						<label for="professional" class="control-label">Professional</label>
						<div class="form-group">
							<input type="text" name="professional" value="<?php echo $this->input->post('professional'); ?>" class="form-control" id="professional" />
						</div>
					</div>
					<div class="col-md-6">
						<label for="hard_worker" class="control-label">Hard Worker</label>
						<div class="form-group">
							<input type="text" name="hard_worker" value="<?php echo $this->input->post('hard_worker'); ?>" class="form-control" id="hard_worker" />
						</div>
					</div>
					<div class="col-md-6">
						<label for="excellent_hire" class="control-label">Excellent Hire</label>
						<div class="form-group">
							<input type="text" name="excellent_hire" value="<?php echo $this->input->post('excellent_hire'); ?>" class="form-control" id="excellent_hire" />
						</div>
					</div>
					<div class="col-md-6">
						<label for="trust_worthy" class="control-label">Trust Worthy</label>
						<div class="form-group">
							<input type="text" name="trust_worthy" value="<?php echo $this->input->post('trust_worthy'); ?>" class="form-control" id="trust_worthy" />
						</div>
					</div>
					<div class="col-md-6">
						<label for="friendly" class="control-label">Friendly</label>
						<div class="form-group">
							<input type="text" name="friendly" value="<?php echo $this->input->post('friendly'); ?>" class="form-control" id="friendly" />
						</div>
					</div>
					<div class="col-md-6">
						<label for="overall_rating" class="control-label">Overall Rating</label>
						<div class="form-group">
							<input type="text" name="overall_rating" value="<?php echo $this->input->post('overall_rating'); ?>" class="form-control" id="overall_rating" />
						</div>
					</div>
					<div class="col-md-6">
						<label for="review_msg" class="control-label">Review Msg</label>
						<div class="form-group">
							<input type="text" name="review_msg" value="<?php echo $this->input->post('review_msg'); ?>" class="form-control" id="review_msg" />
						</div>
					</div>
					<div class="col-md-6">
						<label for="review_status" class="control-label">Review Status</label>
						<div class="form-group">
							<input type="text" name="review_status" value="<?php echo $this->input->post('review_status'); ?>" class="form-control" id="review_status" />
						</div>
					</div>
					<div class="col-md-6">
						<label for="is_delete" class="control-label">Is Delete</label>
						<div class="form-group">
							<input type="text" name="is_delete" value="<?php echo $this->input->post('is_delete'); ?>" class="form-control" id="is_delete" />
						</div>
					</div>
					<div class="col-md-6">
						<label for="rating_date" class="control-label">Rating Date</label>
						<div class="form-group">
							<input type="text" name="rating_date" value="<?php echo $this->input->post('rating_date'); ?>" class="form-control" id="rating_date" />
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