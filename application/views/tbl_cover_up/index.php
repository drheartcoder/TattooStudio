<div class="row">
    <div class="col-md-12">
        <div class="box">
            <div class="box-header">
                <h3 class="box-title">Tbl Cover Up Listing</h3>
            	<div class="box-tools">
                    <a href="<?php echo site_url('tbl_cover_up/add'); ?>" class="btn btn-success btn-sm">Add</a> 
                </div>
            </div>
            <div class="box-body">
                <table class="table table-striped">
                    <tr>
						<th>ID</th>
						<th>Cover Up Name</th>
						<th>Cover Up Slug</th>
						<th>Is Delete</th>
						<th>Cover Up Status</th>
						<th>Actions</th>
                    </tr>
                    <?php foreach($tbl_cover_up as $t){ ?>
                    <tr>
						<td><?php echo $t['id']; ?></td>
						<td><?php echo $t['cover_up_name']; ?></td>
						<td><?php echo $t['cover_up_slug']; ?></td>
						<td><?php echo $t['is_delete']; ?></td>
						<td><?php echo $t['cover_up_status']; ?></td>
						<td>
                            <a href="<?php echo site_url('tbl_cover_up/edit/'.$t['id']); ?>" class="btn btn-info btn-xs"><span class="fa fa-pencil"></span> Edit</a> 
                            <a href="<?php echo site_url('tbl_cover_up/remove/'.$t['id']); ?>" class="btn btn-danger btn-xs"><span class="fa fa-trash"></span> Delete</a>
                        </td>
                    </tr>
                    <?php } ?>
                </table>
                                
            </div>
        </div>
    </div>
</div>
