<div class="row">
    <div class="col-md-12">
        <div class="box">
            <div class="box-header">
                <h3 class="box-title">Tbl Dynamic Pages Listing</h3>
            	<div class="box-tools">
                    <a href="<?php echo site_url('tbl_dynamic_page/add'); ?>" class="btn btn-success btn-sm">Add</a> 
                </div>
            </div>
            <div class="box-body">
                <table class="table table-striped">
                    <tr>
						<th>Page Id</th>
						<th>Page Name</th>
						<th>Slug</th>
						<th>Page Title</th>
						<th>Front Status</th>
						<th>Meta Title</th>
						<th>Page Description</th>
						<th>Meta Keyword</th>
						<th>Meta Description</th>
						<th>Actions</th>
                    </tr>
                    <?php foreach($tbl_dynamic_pages as $t){ ?>
                    <tr>
						<td><?php echo $t['page_id']; ?></td>
						<td><?php echo $t['page_name']; ?></td>
						<td><?php echo $t['slug']; ?></td>
						<td><?php echo $t['page_title']; ?></td>
						<td><?php echo $t['front_status']; ?></td>
						<td><?php echo $t['meta_title']; ?></td>
						<td><?php echo $t['page_description']; ?></td>
						<td><?php echo $t['meta_keyword']; ?></td>
						<td><?php echo $t['meta_description']; ?></td>
						<td>
                            <a href="<?php echo site_url('tbl_dynamic_page/edit/'.$t['page_id']); ?>" class="btn btn-info btn-xs"><span class="fa fa-pencil"></span> Edit</a> 
                            <a href="<?php echo site_url('tbl_dynamic_page/remove/'.$t['page_id']); ?>" class="btn btn-danger btn-xs"><span class="fa fa-trash"></span> Delete</a>
                        </td>
                    </tr>
                    <?php } ?>
                </table>
                                
            </div>
        </div>
    </div>
</div>
