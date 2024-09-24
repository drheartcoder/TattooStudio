<div class="row">
    <div class="col-md-12">
        <div class="box">
            <div class="box-header">
                <h3 class="box-title">Tbl Admin Stripe Details Listing</h3>
            	<div class="box-tools">
                    <a href="<?php echo site_url('tbl_admin_stripe_detail/add'); ?>" class="btn btn-success btn-sm">Add</a> 
                </div>
            </div>
            <div class="box-body">
                <table class="table table-striped">
                    <tr>
						<th>Stripe Id</th>
						<th>Stripe Live Api Key</th>
						<th>Stripe Live Public Api Key</th>
						<th>Actions</th>
                    </tr>
                    <?php foreach($tbl_admin_stripe_details as $t){ ?>
                    <tr>
						<td><?php echo $t['stripe_id']; ?></td>
						<td><?php echo $t['stripe_live_api_key']; ?></td>
						<td><?php echo $t['stripe_live_public_api_key']; ?></td>
						<td>
                            <a href="<?php echo site_url('tbl_admin_stripe_detail/edit/'.$t['stripe_id']); ?>" class="btn btn-info btn-xs"><span class="fa fa-pencil"></span> Edit</a> 
                            <a href="<?php echo site_url('tbl_admin_stripe_detail/remove/'.$t['stripe_id']); ?>" class="btn btn-danger btn-xs"><span class="fa fa-trash"></span> Delete</a>
                        </td>
                    </tr>
                    <?php } ?>
                </table>
                                
            </div>
        </div>
    </div>
</div>
