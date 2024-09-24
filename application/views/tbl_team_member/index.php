<div class="row">
    <div class="col-md-12">
        <div class="box">
            <div class="box-header">
                <h3 class="box-title">Tbl Team Members Listing</h3>
            	<div class="box-tools">
                    <a href="<?php echo site_url('tbl_team_member/add'); ?>" class="btn btn-success btn-sm">Add</a> 
                </div>
            </div>
            <div class="box-body">
                <table class="table table-striped">
                    <tr>
						<th>Member Id</th>
						<th>Member Name</th>
						<th>Member Job Role</th>
						<th>Member Img</th>
						<th>Member Status</th>
						<th>Member Desc</th>
						<th>Actions</th>
                    </tr>
                    <?php foreach($tbl_team_members as $t){ ?>
                    <tr>
						<td><?php echo $t['member_id']; ?></td>
						<td><?php echo $t['member_name']; ?></td>
						<td><?php echo $t['member_job_role']; ?></td>
						<td><?php echo $t['member_img']; ?></td>
						<td><?php echo $t['member_status']; ?></td>
						<td><?php echo $t['member_desc']; ?></td>
						<td>
                            <a href="<?php echo site_url('tbl_team_member/edit/'.$t['member_id']); ?>" class="btn btn-info btn-xs"><span class="fa fa-pencil"></span> Edit</a> 
                            <a href="<?php echo site_url('tbl_team_member/remove/'.$t['member_id']); ?>" class="btn btn-danger btn-xs"><span class="fa fa-trash"></span> Delete</a>
                        </td>
                    </tr>
                    <?php } ?>
                </table>
                                
            </div>
        </div>
    </div>
</div>
