<div class="row">
    <div class="col-md-12">
        <div class="box">
            <div class="box-header">
                <h3 class="box-title">Tbl Membership Master Listing</h3>
            	<div class="box-tools">
                    <a href="<?php echo site_url('tbl_membership_master/add'); ?>" class="btn btn-success btn-sm">Add</a> 
                </div>
            </div>
            <div class="box-body">
                <table class="table table-striped">
                    <tr>
						<th>Membership Id</th>
						<th>Membership Plan</th>
						<th>Membership Price</th>
						<th>Special User Price</th>
						<th>Membership Period</th>
						<th>Membership Discount Price</th>
						<th>Membership Discount</th>
						<th>Membership Type</th>
						<th>Membership Plan Short Desc</th>
						<th>Membership Plan Long Desc</th>
						<th>Actions</th>
                    </tr>
                    <?php foreach($tbl_membership_master as $t){ ?>
                    <tr>
						<td><?php echo $t['membership_id']; ?></td>
						<td><?php echo $t['membership_plan']; ?></td>
						<td><?php echo $t['membership_price']; ?></td>
						<td><?php echo $t['special_user_price']; ?></td>
						<td><?php echo $t['membership_period']; ?></td>
						<td><?php echo $t['membership_discount_price']; ?></td>
						<td><?php echo $t['membership_discount']; ?></td>
						<td><?php echo $t['membership_type']; ?></td>
						<td><?php echo $t['membership_plan_short_desc']; ?></td>
						<td><?php echo $t['membership_plan_long_desc']; ?></td>
						<td>
                            <a href="<?php echo site_url('tbl_membership_master/edit/'.$t['membership_id']); ?>" class="btn btn-info btn-xs"><span class="fa fa-pencil"></span> Edit</a> 
                            <a href="<?php echo site_url('tbl_membership_master/remove/'.$t['membership_id']); ?>" class="btn btn-danger btn-xs"><span class="fa fa-trash"></span> Delete</a>
                        </td>
                    </tr>
                    <?php } ?>
                </table>
                                
            </div>
        </div>
    </div>
</div>
