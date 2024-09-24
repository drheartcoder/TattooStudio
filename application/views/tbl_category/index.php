<div class="row">
    <div class="col-md-12">
        <div class="box">
            <div class="box-header">
                <h3 class="box-title">Tbl Category Listing</h3>
            	<div class="box-tools">
                    <a href="<?php echo site_url('tbl_category/add'); ?>" class="btn btn-success btn-sm">Add</a> 
                </div>
            </div>
            <div class="box-body">
                <table class="table table-striped">
                    <tr>
						<th>Category Id</th>
						<th>Category Name</th>
						<th>Category Slug</th>
						<th>Tattoo Commission</th>
						<th>Custom Tattoo Commission</th>
						<th>Deposit Amount</th>
						<th>Cat Logo</th>
						<th>Category Status</th>
						<th>Is Delete</th>
						<th>Actions</th>
                    </tr>
                    <?php foreach($tbl_category as $t){ ?>
                    <tr>
						<td><?php echo $t['category_id']; ?></td>
						<td><?php echo $t['category_name']; ?></td>
						<td><?php echo $t['category_slug']; ?></td>
						<td><?php echo $t['tattoo_commission']; ?></td>
						<td><?php echo $t['custom_tattoo_commission']; ?></td>
						<td><?php echo $t['deposit_amount']; ?></td>
						<td><?php echo $t['cat_logo']; ?></td>
						<td><?php echo $t['category_status']; ?></td>
						<td><?php echo $t['is_delete']; ?></td>
						<td>
                            <a href="<?php echo site_url('tbl_category/edit/'.$t['category_id']); ?>" class="btn btn-info btn-xs"><span class="fa fa-pencil"></span> Edit</a> 
                            <a href="<?php echo site_url('tbl_category/remove/'.$t['category_id']); ?>" class="btn btn-danger btn-xs"><span class="fa fa-trash"></span> Delete</a>
                        </td>
                    </tr>
                    <?php } ?>
                </table>
                                
            </div>
        </div>
    </div>
</div>
