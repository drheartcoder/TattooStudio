<div class="row">
    <div class="col-md-12">
        <div class="box">
            <div class="box-header">
                <h3 class="box-title">Tbl Booking Listing</h3>
            	<div class="box-tools">
                    <a href="<?php echo site_url('tbl_booking/add'); ?>" class="btn btn-success btn-sm">Add</a> 
                </div>
            </div>
            <div class="box-body">
                <table class="table table-striped">
                    <tr>
						<th>ID</th>
						<th>Payment Method</th>
						<th>Admin Seen Status</th>
						<th>Incremental Value</th>
						<th>Db Insert Date</th>
						<th>Txn Id</th>
						<th>Balance Transaction</th>
						<th>User Id</th>
						<th>Walkin Id</th>
						<th>Booking Type</th>
						<th>Business Id</th>
						<th>Service Id</th>
						<th>Tattoo Id</th>
						<th>Start Time</th>
						<th>End Time</th>
						<th>Availibility Id</th>
						<th>Booking No</th>
						<th>Booking Date</th>
						<th>Staff Id</th>
						<th>Service Name</th>
						<th>Service Price</th>
						<th>Esitmated Amount</th>
						<th>Booking Status</th>
						<th>Is Refunded</th>
						<th>Walkin Status</th>
						<th>Reference Tattoo</th>
						<th>Previous Tattoo Img</th>
						<th>Cover Up</th>
						<th>Booking Desc</th>
						<th>Medical Condition</th>
						<th>Medical Description</th>
						<th>StripeResponse</th>
						<th>Cancellation Reason</th>
						<th>Reschedule Reason</th>
						<th>Actions</th>
                    </tr>
                    <?php foreach($tbl_booking as $t){ ?>
                    <tr>
						<td><?php echo $t['id']; ?></td>
						<td><?php echo $t['payment_method']; ?></td>
						<td><?php echo $t['admin_seen_status']; ?></td>
						<td><?php echo $t['incremental_value']; ?></td>
						<td><?php echo $t['db_insert_date']; ?></td>
						<td><?php echo $t['txn_id']; ?></td>
						<td><?php echo $t['balance_transaction']; ?></td>
						<td><?php echo $t['user_id']; ?></td>
						<td><?php echo $t['walkin_id']; ?></td>
						<td><?php echo $t['booking_type']; ?></td>
						<td><?php echo $t['business_id']; ?></td>
						<td><?php echo $t['service_id']; ?></td>
						<td><?php echo $t['tattoo_id']; ?></td>
						<td><?php echo $t['start_time']; ?></td>
						<td><?php echo $t['end_time']; ?></td>
						<td><?php echo $t['availibility_id']; ?></td>
						<td><?php echo $t['booking_no']; ?></td>
						<td><?php echo $t['booking_date']; ?></td>
						<td><?php echo $t['staff_id']; ?></td>
						<td><?php echo $t['service_name']; ?></td>
						<td><?php echo $t['service_price']; ?></td>
						<td><?php echo $t['esitmated_amount']; ?></td>
						<td><?php echo $t['booking_status']; ?></td>
						<td><?php echo $t['is_refunded']; ?></td>
						<td><?php echo $t['walkin_status']; ?></td>
						<td><?php echo $t['reference_tattoo']; ?></td>
						<td><?php echo $t['previous_tattoo_img']; ?></td>
						<td><?php echo $t['cover_up']; ?></td>
						<td><?php echo $t['booking_desc']; ?></td>
						<td><?php echo $t['medical_condition']; ?></td>
						<td><?php echo $t['medical_description']; ?></td>
						<td><?php echo $t['stripeResponse']; ?></td>
						<td><?php echo $t['cancellation_reason']; ?></td>
						<td><?php echo $t['reschedule_reason']; ?></td>
						<td>
                            <a href="<?php echo site_url('tbl_booking/edit/'.$t['id']); ?>" class="btn btn-info btn-xs"><span class="fa fa-pencil"></span> Edit</a> 
                            <a href="<?php echo site_url('tbl_booking/remove/'.$t['id']); ?>" class="btn btn-danger btn-xs"><span class="fa fa-trash"></span> Delete</a>
                        </td>
                    </tr>
                    <?php } ?>
                </table>
                                
            </div>
        </div>
    </div>
</div>
