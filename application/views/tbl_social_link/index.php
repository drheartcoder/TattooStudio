<div class="row">
    <div class="col-md-12">
        <div class="box">
            <div class="box-header">
                <h3 class="box-title">Tbl Social Link Listing</h3>
            	<div class="box-tools">
                    <a href="<?php echo site_url('tbl_social_link/add'); ?>" class="btn btn-success btn-sm">Add</a> 
                </div>
            </div>
            <div class="box-body">
                <table class="table table-striped">
                    <tr>
						<th>Social Id</th>
						<th>Facebook</th>
						<th>Twitter</th>
						<th>Googleplus</th>
						<th>Instagram</th>
						<th>Actions</th>
                    </tr>
                    <?php foreach($tbl_social_link as $t){ ?>
                    <tr>
						<td><?php echo $t['social_id']; ?></td>
						<td><?php echo $t['facebook']; ?></td>
						<td><?php echo $t['twitter']; ?></td>
						<td><?php echo $t['googleplus']; ?></td>
						<td><?php echo $t['instagram']; ?></td>
						<td>
                            <a href="<?php echo site_url('tbl_social_link/edit/'.$t['social_id']); ?>" class="btn btn-info btn-xs"><span class="fa fa-pencil"></span> Edit</a> 
                            <a href="<?php echo site_url('tbl_social_link/remove/'.$t['social_id']); ?>" class="btn btn-danger btn-xs"><span class="fa fa-trash"></span> Delete</a>
                        </td>
                    </tr>
                    <?php } ?>
                </table>
                                
            </div>
        </div>
    </div>
</div>
