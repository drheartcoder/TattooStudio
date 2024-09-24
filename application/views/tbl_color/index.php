<div class="row">
    <div class="col-md-12">
        <div class="box">
            <div class="box-header">
                <h3 class="box-title">Tbl Color Listing</h3>
            	<div class="box-tools">
                    <a href="<?php echo site_url('tbl_color/add'); ?>" class="btn btn-success btn-sm">Add</a> 
                </div>
            </div>
            <div class="box-body">
                <table class="table table-striped">
                    <tr>
						<th>Color Id</th>
						<th>Color Name</th>
						<th>Color Slug</th>
						<th>Color Status</th>
						<th>Is Delete</th>
						<th>Actions</th>
                    </tr>
                    <?php foreach($tbl_color as $t){ ?>
                    <tr>
						<td><?php echo $t['color_id']; ?></td>
						<td><?php echo $t['color_name']; ?></td>
						<td><?php echo $t['color_slug']; ?></td>
						<td><?php echo $t['color_status']; ?></td>
						<td><?php echo $t['is_delete']; ?></td>
						<td>
                            <a href="<?php echo site_url('tbl_color/edit/'.$t['color_id']); ?>" class="btn btn-info btn-xs"><span class="fa fa-pencil"></span> Edit</a> 
                            <a href="<?php echo site_url('tbl_color/remove/'.$t['color_id']); ?>" class="btn btn-danger btn-xs"><span class="fa fa-trash"></span> Delete</a>
                        </td>
                    </tr>
                    <?php } ?>
                </table>
                                
            </div>
        </div>
    </div>
</div>
