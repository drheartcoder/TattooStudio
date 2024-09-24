<div class="row">
    <div class="col-md-12">
        <div class="box">
            <div class="box-header">
                <h3 class="box-title">Tbl Appoinment Listing</h3>
            	<div class="box-tools">
                    <a href="<?php echo site_url('tbl_appoinment/add'); ?>" class="btn btn-success btn-sm">Add</a> 
                </div>
            </div>
            <div class="box-body">
                <table class="table table-striped">
                    <tr>
						<th>Appoinment Id</th>
						<th>Deal Id</th>
						<th>Fk User Id</th>
						<th>Fk Business Id</th>
						<th>Fk Business Service Id</th>
						<th>Fk Client Id</th>
						<th>Fk Location Id</th>
						<th>Fk Package Id</th>
						<th>Service Cost</th>
						<th>Total Cost</th>
						<th>Apt Date</th>
						<th>Apt Time</th>
						<th>End Apt Time</th>
						<th>Cancel Time</th>
						<th>Medical Condition</th>
						<th>Card Token</th>
						<th>Transaction Ref Token</th>
						<th>Transaction Date Time</th>
						<th>Transaction Correlation Id</th>
						<th>Apt Repeat Status</th>
						<th>Apt Repeat More Count</th>
						<th>Apt Repeat More Type</th>
						<th>Apt Repeat End</th>
						<th>Apt Repeat End Date</th>
						<th>Apt Status</th>
						<th>Payment Status</th>
						<th>Confirmed Status</th>
						<th>RefTransactionId</th>
						<th>RefTransactionDate</th>
						<th>RefAmount</th>
						<th>Is Recurring</th>
						<th>Recurring Parent</th>
						<th>Fk Location Hours Id</th>
						<th>Is Present</th>
						<th>Fk Staff Id</th>
						<th>Apt Note</th>
						<th>Medical Description</th>
						<th>Recurring Data</th>
						<th>Actions</th>
                    </tr>
                    <?php foreach($tbl_appoinment as $t){ ?>
                    <tr>
						<td><?php echo $t['appoinment_id']; ?></td>
						<td><?php echo $t['deal_id']; ?></td>
						<td><?php echo $t['fk_user_id']; ?></td>
						<td><?php echo $t['fk_business_id']; ?></td>
						<td><?php echo $t['fk_business_service_id']; ?></td>
						<td><?php echo $t['fk_client_id']; ?></td>
						<td><?php echo $t['fk_location_id']; ?></td>
						<td><?php echo $t['fk_package_id']; ?></td>
						<td><?php echo $t['service_cost']; ?></td>
						<td><?php echo $t['total_cost']; ?></td>
						<td><?php echo $t['apt_date']; ?></td>
						<td><?php echo $t['apt_time']; ?></td>
						<td><?php echo $t['end_apt_time']; ?></td>
						<td><?php echo $t['cancel_time']; ?></td>
						<td><?php echo $t['medical_condition']; ?></td>
						<td><?php echo $t['card_token']; ?></td>
						<td><?php echo $t['transaction_ref_token']; ?></td>
						<td><?php echo $t['transaction_date_time']; ?></td>
						<td><?php echo $t['transaction_correlation_id']; ?></td>
						<td><?php echo $t['apt_repeat_status']; ?></td>
						<td><?php echo $t['apt_repeat_more_count']; ?></td>
						<td><?php echo $t['apt_repeat_more_type']; ?></td>
						<td><?php echo $t['apt_repeat_end']; ?></td>
						<td><?php echo $t['apt_repeat_end_date']; ?></td>
						<td><?php echo $t['apt_status']; ?></td>
						<td><?php echo $t['payment_status']; ?></td>
						<td><?php echo $t['confirmed_status']; ?></td>
						<td><?php echo $t['refTransactionId']; ?></td>
						<td><?php echo $t['refTransactionDate']; ?></td>
						<td><?php echo $t['refAmount']; ?></td>
						<td><?php echo $t['is_recurring']; ?></td>
						<td><?php echo $t['recurring_parent']; ?></td>
						<td><?php echo $t['fk_location_hours_id']; ?></td>
						<td><?php echo $t['is_present']; ?></td>
						<td><?php echo $t['fk_staff_id']; ?></td>
						<td><?php echo $t['apt_note']; ?></td>
						<td><?php echo $t['medical_description']; ?></td>
						<td><?php echo $t['recurring_data']; ?></td>
						<td>
                            <a href="<?php echo site_url('tbl_appoinment/edit/'.$t['appoinment_id']); ?>" class="btn btn-info btn-xs"><span class="fa fa-pencil"></span> Edit</a> 
                            <a href="<?php echo site_url('tbl_appoinment/remove/'.$t['appoinment_id']); ?>" class="btn btn-danger btn-xs"><span class="fa fa-trash"></span> Delete</a>
                        </td>
                    </tr>
                    <?php } ?>
                </table>
                                
            </div>
        </div>
    </div>
</div>
