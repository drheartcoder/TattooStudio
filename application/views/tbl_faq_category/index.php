<div class="row">
    <div class="col-md-12">
        <div class="box">
            <div class="box-header">
                <h3 class="box-title">Tbl Faq Categories Listing</h3>
            	<div class="box-tools">
                    <a href="<?php echo site_url('tbl_faq_category/add'); ?>" class="btn btn-success btn-sm">Add</a> 
                </div>
            </div>
            <div class="box-body">
                <table class="table table-striped">
                    <tr>
						<th>Faq Category Id</th>
						<th>Faq Category Name</th>
						<th>Faq Category Type</th>
						<th>Faq Category Status</th>
						<th>Actions</th>
                    </tr>
                    <?php foreach($tbl_faq_categories as $t){ ?>
                    <tr>
						<td><?php echo $t['faq_category_id']; ?></td>
						<td><?php echo $t['faq_category_name']; ?></td>
						<td><?php echo $t['faq_category_type']; ?></td>
						<td><?php echo $t['faq_category_status']; ?></td>
						<td>
                            <a href="<?php echo site_url('tbl_faq_category/edit/'.$t['faq_category_id']); ?>" class="btn btn-info btn-xs"><span class="fa fa-pencil"></span> Edit</a> 
                            <a href="<?php echo site_url('tbl_faq_category/remove/'.$t['faq_category_id']); ?>" class="btn btn-danger btn-xs"><span class="fa fa-trash"></span> Delete</a>
                        </td>
                    </tr>
                    <?php } ?>
                </table>
                                
            </div>
        </div>
    </div>
</div>
