<div class="row">
    <div class="col-md-12">
        <div class="box">
            <div class="box-header">
                <h3 class="box-title">Tbl Style Listing</h3>
            	<div class="box-tools">
                    <a href="<?php echo site_url('tbl_style/add'); ?>" class="btn btn-success btn-sm">Add</a> 
                </div>
            </div>
            <div class="box-body">
                <table class="table table-striped">
                    <tr>
						<th>Style Id</th>
						<th>Style Name</th>
						<th>Style Slug</th>
						<th>Style Status</th>
						<th>Is Delete</th>
						<th>Actions</th>
                    </tr>
                    <?php foreach($tbl_style as $t){ ?>
                    <tr>
						<td><?php echo $t['style_id']; ?></td>
						<td><?php echo $t['style_name']; ?></td>
						<td><?php echo $t['style_slug']; ?></td>
						<td><?php echo $t['style_status']; ?></td>
						<td><?php echo $t['is_delete']; ?></td>
						<td>
                            <a href="<?php echo site_url('tbl_style/edit/'.$t['style_id']); ?>" class="btn btn-info btn-xs"><span class="fa fa-pencil"></span> Edit</a> 
                            <a href="<?php echo site_url('tbl_style/remove/'.$t['style_id']); ?>" class="btn btn-danger btn-xs"><span class="fa fa-trash"></span> Delete</a>
                        </td>
                    </tr>
                    <?php } ?>
                </table>
                                
            </div>
        </div>
    </div>
</div>
