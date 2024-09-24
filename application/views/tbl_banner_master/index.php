<div class="row">
    <div class="col-md-12">
        <div class="box">
            <div class="box-header">
                <h3 class="box-title">Tbl Banner Master Listing</h3>
            	<div class="box-tools">
                    <a href="<?php echo site_url('tbl_banner_master/add'); ?>" class="btn btn-success btn-sm">Add</a> 
                </div>
            </div>
            <div class="box-body">
                <table class="table table-striped">
                    <tr>
						<th>Banner Id</th>
						<th>Banner Title</th>
						<th>Banner Image</th>
						<th>Banner Order</th>
						<th>Actions</th>
                    </tr>
                    <?php foreach($tbl_banner_master as $t){ ?>
                    <tr>
						<td><?php echo $t['banner_id']; ?></td>
						<td><?php echo $t['banner_title']; ?></td>
						<td><?php echo $t['banner_image']; ?></td>
						<td><?php echo $t['banner_order']; ?></td>
						<td>
                            <a href="<?php echo site_url('tbl_banner_master/edit/'.$t['banner_id']); ?>" class="btn btn-info btn-xs"><span class="fa fa-pencil"></span> Edit</a> 
                            <a href="<?php echo site_url('tbl_banner_master/remove/'.$t['banner_id']); ?>" class="btn btn-danger btn-xs"><span class="fa fa-trash"></span> Delete</a>
                        </td>
                    </tr>
                    <?php } ?>
                </table>
                                
            </div>
        </div>
    </div>
</div>
