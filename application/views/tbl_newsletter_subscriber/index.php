<div class="row">
    <div class="col-md-12">
        <div class="box">
            <div class="box-header">
                <h3 class="box-title">Tbl Newsletter Subscriber Listing</h3>
            	<div class="box-tools">
                    <a href="<?php echo site_url('tbl_newsletter_subscriber/add'); ?>" class="btn btn-success btn-sm">Add</a> 
                </div>
            </div>
            <div class="box-body">
                <table class="table table-striped">
                    <tr>
						<th>Sub Id</th>
						<th>Sub Email</th>
						<th>Sub Name</th>
						<th>Sub Zipcode</th>
						<th>Sub City</th>
						<th>Sub Status</th>
						<th>Actions</th>
                    </tr>
                    <?php foreach($tbl_newsletter_subscriber as $t){ ?>
                    <tr>
						<td><?php echo $t['sub_id']; ?></td>
						<td><?php echo $t['sub_email']; ?></td>
						<td><?php echo $t['sub_name']; ?></td>
						<td><?php echo $t['sub_zipcode']; ?></td>
						<td><?php echo $t['sub_city']; ?></td>
						<td><?php echo $t['sub_status']; ?></td>
						<td>
                            <a href="<?php echo site_url('tbl_newsletter_subscriber/edit/'.$t['sub_id']); ?>" class="btn btn-info btn-xs"><span class="fa fa-pencil"></span> Edit</a> 
                            <a href="<?php echo site_url('tbl_newsletter_subscriber/remove/'.$t['sub_id']); ?>" class="btn btn-danger btn-xs"><span class="fa fa-trash"></span> Delete</a>
                        </td>
                    </tr>
                    <?php } ?>
                </table>
                                
            </div>
        </div>
    </div>
</div>
