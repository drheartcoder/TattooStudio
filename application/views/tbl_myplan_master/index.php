<div class="row">
    <div class="col-md-12">
        <div class="box">
            <div class="box-header">
                <h3 class="box-title">Tbl Myplan Master Listing</h3>
            	<div class="box-tools">
                    <a href="<?php echo site_url('tbl_myplan_master/add'); ?>" class="btn btn-success btn-sm">Add</a> 
                </div>
            </div>
            <div class="box-body">
                <table class="table table-striped">
                    <tr>
						<th>Myplan Id</th>
						<th>User Id</th>
						<th>Bussiness Id</th>
						<th>Plan Type</th>
						<th>Amount</th>
						<th>Plan Duration</th>
						<th>Myplan Card Token</th>
						<th>Transaction Ref Token</th>
						<th>Transaction Date Time</th>
						<th>Transaction End Date</th>
						<th>Transaction Correlation Id</th>
						<th>Status</th>
						<th>Is Paid</th>
						<th>Actions</th>
                    </tr>
                    <?php foreach($tbl_myplan_master as $t){ ?>
                    <tr>
						<td><?php echo $t['myplan_id']; ?></td>
						<td><?php echo $t['user_id']; ?></td>
						<td><?php echo $t['bussiness_id']; ?></td>
						<td><?php echo $t['plan_type']; ?></td>
						<td><?php echo $t['amount']; ?></td>
						<td><?php echo $t['plan_duration']; ?></td>
						<td><?php echo $t['myplan_card_token']; ?></td>
						<td><?php echo $t['transaction_ref_token']; ?></td>
						<td><?php echo $t['transaction_date_time']; ?></td>
						<td><?php echo $t['transaction_end_date']; ?></td>
						<td><?php echo $t['transaction_correlation_id']; ?></td>
						<td><?php echo $t['status']; ?></td>
						<td><?php echo $t['is_paid']; ?></td>
						<td>
                            <a href="<?php echo site_url('tbl_myplan_master/edit/'.$t['myplan_id']); ?>" class="btn btn-info btn-xs"><span class="fa fa-pencil"></span> Edit</a> 
                            <a href="<?php echo site_url('tbl_myplan_master/remove/'.$t['myplan_id']); ?>" class="btn btn-danger btn-xs"><span class="fa fa-trash"></span> Delete</a>
                        </td>
                    </tr>
                    <?php } ?>
                </table>
                                
            </div>
        </div>
    </div>
</div>
