<div class="row">
    <div class="col-md-12">
        <div class="box">
            <div class="box-header">
                <h3 class="box-title">Tbl Sub Category Listing</h3>
            	<div class="box-tools">
                    <a href="<?php echo site_url('tbl_sub_category/add'); ?>" class="btn btn-success btn-sm">Add</a> 
                </div>
            </div>
            <div class="box-body">
                <table class="table table-striped">
                    <tr>
						<th>Sub Cat Id</th>
						<th>Sub Category</th>
						<th>Fk Category Id</th>
						<th>Fk Sub Category Tag Id</th>
						<th>Sub Cat Status</th>
						<th>Is Delete</th>
						<th>Actions</th>
                    </tr>
                    <?php foreach($tbl_sub_category as $t){ ?>
                    <tr>
						<td><?php echo $t['sub_cat_id']; ?></td>
						<td><?php echo $t['sub_category']; ?></td>
						<td><?php echo $t['fk_category_id']; ?></td>
						<td><?php echo $t['fk_sub_category_tag_id']; ?></td>
						<td><?php echo $t['sub_cat_status']; ?></td>
						<td><?php echo $t['is_delete']; ?></td>
						<td>
                            <a href="<?php echo site_url('tbl_sub_category/edit/'.$t['sub_cat_id']); ?>" class="btn btn-info btn-xs"><span class="fa fa-pencil"></span> Edit</a> 
                            <a href="<?php echo site_url('tbl_sub_category/remove/'.$t['sub_cat_id']); ?>" class="btn btn-danger btn-xs"><span class="fa fa-trash"></span> Delete</a>
                        </td>
                    </tr>
                    <?php } ?>
                </table>
                                
            </div>
        </div>
    </div>
</div>
