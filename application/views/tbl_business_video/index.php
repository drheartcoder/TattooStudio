<div class="row">
    <div class="col-md-12">
        <div class="box">
            <div class="box-header">
                <h3 class="box-title">Tbl Business Videos Listing</h3>
            	<div class="box-tools">
                    <a href="<?php echo site_url('tbl_business_video/add'); ?>" class="btn btn-success btn-sm">Add</a> 
                </div>
            </div>
            <div class="box-body">
                <table class="table table-striped">
                    <tr>
						<th>Video Id</th>
						<th>Fk Business Id</th>
						<th>Fk Staff Id</th>
						<th>Video Name</th>
						<th>Video Status</th>
						<th>Actions</th>
                    </tr>
                    <?php foreach($tbl_business_videos as $t){ ?>
                    <tr>
						<td><?php echo $t['video_id']; ?></td>
						<td><?php echo $t['fk_business_id']; ?></td>
						<td><?php echo $t['fk_staff_id']; ?></td>
						<td><?php echo $t['video_name']; ?></td>
						<td><?php echo $t['video_status']; ?></td>
						<td>
                            <a href="<?php echo site_url('tbl_business_video/edit/'.$t['video_id']); ?>" class="btn btn-info btn-xs"><span class="fa fa-pencil"></span> Edit</a> 
                            <a href="<?php echo site_url('tbl_business_video/remove/'.$t['video_id']); ?>" class="btn btn-danger btn-xs"><span class="fa fa-trash"></span> Delete</a>
                        </td>
                    </tr>
                    <?php } ?>
                </table>
                                
            </div>
        </div>
    </div>
</div>
