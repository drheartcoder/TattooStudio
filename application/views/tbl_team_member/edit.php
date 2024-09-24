<div class="row">
    <div class="col-md-12">
      	<div class="box box-info">
            <div class="box-header with-border">
              	<h3 class="box-title">Tbl Team Member Edit</h3>
            </div>
			<?php echo form_open('tbl_team_member/edit/'.$tbl_team_member['member_id']); ?>
			<div class="box-body">
				<div class="row clearfix">
					<div class="col-md-6">
						<label for="member_name" class="control-label">Member Name</label>
						<div class="form-group">
							<input type="text" name="member_name" value="<?php echo ($this->input->post('member_name') ? $this->input->post('member_name') : $tbl_team_member['member_name']); ?>" class="form-control" id="member_name" />
						</div>
					</div>
					<div class="col-md-6">
						<label for="member_job_role" class="control-label">Member Job Role</label>
						<div class="form-group">
							<input type="text" name="member_job_role" value="<?php echo ($this->input->post('member_job_role') ? $this->input->post('member_job_role') : $tbl_team_member['member_job_role']); ?>" class="form-control" id="member_job_role" />
						</div>
					</div>
					<div class="col-md-6">
						<label for="member_img" class="control-label">Member Img</label>
						<div class="form-group">
							<input type="text" name="member_img" value="<?php echo ($this->input->post('member_img') ? $this->input->post('member_img') : $tbl_team_member['member_img']); ?>" class="form-control" id="member_img" />
						</div>
					</div>
					<div class="col-md-6">
						<label for="member_status" class="control-label">Member Status</label>
						<div class="form-group">
							<input type="text" name="member_status" value="<?php echo ($this->input->post('member_status') ? $this->input->post('member_status') : $tbl_team_member['member_status']); ?>" class="form-control" id="member_status" />
						</div>
					</div>
					<div class="col-md-6">
						<label for="member_desc" class="control-label">Member Desc</label>
						<div class="form-group">
							<textarea name="member_desc" class="form-control" id="member_desc"><?php echo ($this->input->post('member_desc') ? $this->input->post('member_desc') : $tbl_team_member['member_desc']); ?></textarea>
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