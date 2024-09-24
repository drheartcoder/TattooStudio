<div class="row">
    <div class="col-md-12">
        <div class="box">
            <div class="box-header">
                <h3 class="box-title">Tbl Email Id Master Listing</h3>
            	<div class="box-tools">
                    <a href="<?php echo site_url('tbl_email_id_master/add'); ?>" class="btn btn-success btn-sm">Add</a> 
                </div>
            </div>
            <div class="box-body">
                <table class="table table-striped">
                    <tr>
						<th>ID</th>
						<th>Contact Email</th>
						<th>Info Email</th>
						<th>Support Email</th>
						<th>Business Email</th>
						<th>Media Email</th>
						<th>Job Email</th>
						<th>Actions</th>
                    </tr>
                    <?php foreach($tbl_email_id_master as $t){ ?>
                    <tr>
						<td><?php echo $t['id']; ?></td>
						<td><?php echo $t['contact_email']; ?></td>
						<td><?php echo $t['info_email']; ?></td>
						<td><?php echo $t['support_email']; ?></td>
						<td><?php echo $t['business_email']; ?></td>
						<td><?php echo $t['media_email']; ?></td>
						<td><?php echo $t['job_email']; ?></td>
						<td>
                            <a href="<?php echo site_url('tbl_email_id_master/edit/'.$t['id']); ?>" class="btn btn-info btn-xs"><span class="fa fa-pencil"></span> Edit</a> 
                            <a href="<?php echo site_url('tbl_email_id_master/remove/'.$t['id']); ?>" class="btn btn-danger btn-xs"><span class="fa fa-trash"></span> Delete</a>
                        </td>
                    </tr>
                    <?php } ?>
                </table>
                                
            </div>
        </div>
    </div>
</div>
