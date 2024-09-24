<div class="row">
    <div class="col-md-12">
        <div class="box">
            <div class="box-header">
                <h3 class="box-title">Tbl Payment Listing</h3>
            	<div class="box-tools">
                    <a href="<?php echo site_url('tbl_payment/add'); ?>" class="btn btn-success btn-sm">Add</a> 
                </div>
            </div>
            <div class="box-body">
                <table class="table table-striped">
                    <tr>
						<th>ID</th>
						<th>User Id</th>
						<th>Card No</th>
						<th>Card Cvc</th>
						<th>Card Exp Month</th>
						<th>Card Exp Year</th>
						<th>Paid Amount</th>
						<th>Txn Id</th>
						<th>Balance Transaction</th>
						<th>Payment Date</th>
						<th>StripeResponse</th>
						<th>Actions</th>
                    </tr>
                    <?php foreach($tbl_payment as $t){ ?>
                    <tr>
						<td><?php echo $t['id']; ?></td>
						<td><?php echo $t['user_id']; ?></td>
						<td><?php echo $t['card_no']; ?></td>
						<td><?php echo $t['card_cvc']; ?></td>
						<td><?php echo $t['card_exp_month']; ?></td>
						<td><?php echo $t['card_exp_year']; ?></td>
						<td><?php echo $t['paid_amount']; ?></td>
						<td><?php echo $t['txn_id']; ?></td>
						<td><?php echo $t['balance_transaction']; ?></td>
						<td><?php echo $t['payment_date']; ?></td>
						<td><?php echo $t['stripeResponse']; ?></td>
						<td>
                            <a href="<?php echo site_url('tbl_payment/edit/'.$t['id']); ?>" class="btn btn-info btn-xs"><span class="fa fa-pencil"></span> Edit</a> 
                            <a href="<?php echo site_url('tbl_payment/remove/'.$t['id']); ?>" class="btn btn-danger btn-xs"><span class="fa fa-trash"></span> Delete</a>
                        </td>
                    </tr>
                    <?php } ?>
                </table>
                                
            </div>
        </div>
    </div>
</div>
