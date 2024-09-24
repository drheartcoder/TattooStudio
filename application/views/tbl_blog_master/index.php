<div class="row">
    <div class="col-md-12">
        <div class="box">
            <div class="box-header">
                <h3 class="box-title">Tbl Blog Master Listing</h3>
            	<div class="box-tools">
                    <a href="<?php echo site_url('tbl_blog_master/add'); ?>" class="btn btn-success btn-sm">Add</a> 
                </div>
            </div>
            <div class="box-body">
                <table class="table table-striped">
                    <tr>
						<th>Blog Id</th>
						<th>Blog Status</th>
						<th>Blog Title</th>
						<th>Blog Description</th>
						<th>Actions</th>
                    </tr>
                    <?php foreach($tbl_blog_master as $t){ ?>
                    <tr>
						<td><?php echo $t['blog_id']; ?></td>
						<td><?php echo $t['blog_status']; ?></td>
						<td><?php echo $t['blog_title']; ?></td>
						<td><?php echo $t['blog_description']; ?></td>
						<td>
                            <a href="<?php echo site_url('tbl_blog_master/edit/'.$t['blog_id']); ?>" class="btn btn-info btn-xs"><span class="fa fa-pencil"></span> Edit</a> 
                            <a href="<?php echo site_url('tbl_blog_master/remove/'.$t['blog_id']); ?>" class="btn btn-danger btn-xs"><span class="fa fa-trash"></span> Delete</a>
                        </td>
                    </tr>
                    <?php } ?>
                </table>
                                
            </div>
        </div>
    </div>
</div>
