<div class="row">
    <div class="col-md-12">
        <div class="box">
            <div class="box-header">
                <h3 class="box-title">Tbl Review Ratings Listing</h3>
            	<div class="box-tools">
                    <a href="<?php echo site_url('tbl_review_rating/add'); ?>" class="btn btn-success btn-sm">Add</a> 
                </div>
            </div>
            <div class="box-body">
                <table class="table table-striped">
                    <tr>
						<th>ID</th>
						<th>Rating User Id</th>
						<th>Business Id</th>
						<th>Professional</th>
						<th>Hard Worker</th>
						<th>Excellent Hire</th>
						<th>Trust Worthy</th>
						<th>Friendly</th>
						<th>Overall Rating</th>
						<th>Review Msg</th>
						<th>Review Status</th>
						<th>Is Delete</th>
						<th>Rating Date</th>
						<th>Actions</th>
                    </tr>
                    <?php foreach($tbl_review_ratings as $t){ ?>
                    <tr>
						<td><?php echo $t['id']; ?></td>
						<td><?php echo $t['rating_user_id']; ?></td>
						<td><?php echo $t['business_id']; ?></td>
						<td><?php echo $t['professional']; ?></td>
						<td><?php echo $t['hard_worker']; ?></td>
						<td><?php echo $t['excellent_hire']; ?></td>
						<td><?php echo $t['trust_worthy']; ?></td>
						<td><?php echo $t['friendly']; ?></td>
						<td><?php echo $t['overall_rating']; ?></td>
						<td><?php echo $t['review_msg']; ?></td>
						<td><?php echo $t['review_status']; ?></td>
						<td><?php echo $t['is_delete']; ?></td>
						<td><?php echo $t['rating_date']; ?></td>
						<td>
                            <a href="<?php echo site_url('tbl_review_rating/edit/'.$t['id']); ?>" class="btn btn-info btn-xs"><span class="fa fa-pencil"></span> Edit</a> 
                            <a href="<?php echo site_url('tbl_review_rating/remove/'.$t['id']); ?>" class="btn btn-danger btn-xs"><span class="fa fa-trash"></span> Delete</a>
                        </td>
                    </tr>
                    <?php } ?>
                </table>
                                
            </div>
        </div>
    </div>
</div>
