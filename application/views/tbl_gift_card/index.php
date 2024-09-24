<div class="row">
    <div class="col-md-12">
        <div class="box">
            <div class="box-header">
                <h3 class="box-title">Tbl Gift Card Listing</h3>
            	<div class="box-tools">
                    <a href="<?php echo site_url('tbl_gift_card/add'); ?>" class="btn btn-success btn-sm">Add</a> 
                </div>
            </div>
            <div class="box-body">
                <table class="table table-striped">
                    <tr>
						<th>Gift Card Id</th>
						<th>Fk User Id</th>
						<th>Recipient Name</th>
						<th>Recipient Email</th>
						<th>Recipient User Id</th>
						<th>Gift Type</th>
						<th>Fk Business Id</th>
						<th>Fk Service Menu Id</th>
						<th>Total Amount</th>
						<th>Remaining Amount</th>
						<th>Gift Card Token</th>
						<th>Transaction Ref Token</th>
						<th>Transaction Date Time</th>
						<th>Transaction Correlation Id</th>
						<th>Actions</th>
                    </tr>
                    <?php foreach($tbl_gift_card as $t){ ?>
                    <tr>
						<td><?php echo $t['gift_card_id']; ?></td>
						<td><?php echo $t['fk_user_id']; ?></td>
						<td><?php echo $t['recipient_name']; ?></td>
						<td><?php echo $t['recipient_email']; ?></td>
						<td><?php echo $t['recipient_user_id']; ?></td>
						<td><?php echo $t['gift_type']; ?></td>
						<td><?php echo $t['fk_business_id']; ?></td>
						<td><?php echo $t['fk_service_menu_id']; ?></td>
						<td><?php echo $t['total_amount']; ?></td>
						<td><?php echo $t['remaining_amount']; ?></td>
						<td><?php echo $t['gift_card_token']; ?></td>
						<td><?php echo $t['transaction_ref_token']; ?></td>
						<td><?php echo $t['transaction_date_time']; ?></td>
						<td><?php echo $t['transaction_correlation_id']; ?></td>
						<td>
                            <a href="<?php echo site_url('tbl_gift_card/edit/'.$t['gift_card_id']); ?>" class="btn btn-info btn-xs"><span class="fa fa-pencil"></span> Edit</a> 
                            <a href="<?php echo site_url('tbl_gift_card/remove/'.$t['gift_card_id']); ?>" class="btn btn-danger btn-xs"><span class="fa fa-trash"></span> Delete</a>
                        </td>
                    </tr>
                    <?php } ?>
                </table>
                                
            </div>
        </div>
    </div>
</div>
