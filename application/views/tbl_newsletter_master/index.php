<div class="row">
    <div class="col-md-12">
        <div class="box">
            <div class="box-header">
                <h3 class="box-title">Tbl Newsletter Master Listing</h3>
            	<div class="box-tools">
                    <a href="<?php echo site_url('tbl_newsletter_master/add'); ?>" class="btn btn-success btn-sm">Add</a> 
                </div>
            </div>
            <div class="box-body">
                <table class="table table-striped">
                    <tr>
						<th>News Id</th>
						<th>News Title</th>
						<th>Newsletter Subject</th>
						<th>News Status</th>
						<th>News Description</th>
						<th>Actions</th>
                    </tr>
                    <?php foreach($tbl_newsletter_master as $t){ ?>
                    <tr>
						<td><?php echo $t['news_id']; ?></td>
						<td><?php echo $t['news_title']; ?></td>
						<td><?php echo $t['newsletter_subject']; ?></td>
						<td><?php echo $t['news_status']; ?></td>
						<td><?php echo $t['news_description']; ?></td>
						<td>
                            <a href="<?php echo site_url('tbl_newsletter_master/edit/'.$t['news_id']); ?>" class="btn btn-info btn-xs"><span class="fa fa-pencil"></span> Edit</a> 
                            <a href="<?php echo site_url('tbl_newsletter_master/remove/'.$t['news_id']); ?>" class="btn btn-danger btn-xs"><span class="fa fa-trash"></span> Delete</a>
                        </td>
                    </tr>
                    <?php } ?>
                </table>
                                
            </div>
        </div>
    </div>
</div>
