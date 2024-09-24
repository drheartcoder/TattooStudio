<div class="row">
    <div class="col-md-12">
        <div class="box">
            <div class="box-header">
                <h3 class="box-title">Tbl Cancel And Refund Listing</h3>
            	<div class="box-tools">
                    <a href="<?php echo site_url('tbl_cancel_and_refund/add'); ?>" class="btn btn-success btn-sm">Add</a> 
                </div>
            </div>
            <div class="box-body">
                <table class="table table-striped">
                    <tr>
						<th>Refund Id</th>
						<th>Fk Business Id</th>
						<th>Fk Business User Id</th>
						<th>Fk User Id</th>
						<th>Fk Cancel Appointment Id</th>
						<th>Refund Amount</th>
						<th>Is Refund</th>
						<th>Cancel Date</th>
						<th>Refund Done Date</th>
						<th>Actions</th>
                    </tr>
                    <?php foreach($tbl_cancel_and_refund as $t){ ?>
                    <tr>
						<td><?php echo $t['refund_id']; ?></td>
						<td><?php echo $t['fk_business_id']; ?></td>
						<td><?php echo $t['fk_business_user_id']; ?></td>
						<td><?php echo $t['fk_user_id']; ?></td>
						<td><?php echo $t['fk_cancel_appointment_id']; ?></td>
						<td><?php echo $t['refund_amount']; ?></td>
						<td><?php echo $t['is_refund']; ?></td>
						<td><?php echo $t['cancel_date']; ?></td>
						<td><?php echo $t['refund_done_date']; ?></td>
						<td>
                            <a href="<?php echo site_url('tbl_cancel_and_refund/edit/'.$t['refund_id']); ?>" class="btn btn-info btn-xs"><span class="fa fa-pencil"></span> Edit</a> 
                            <a href="<?php echo site_url('tbl_cancel_and_refund/remove/'.$t['refund_id']); ?>" class="btn btn-danger btn-xs"><span class="fa fa-trash"></span> Delete</a>
                        </td>
                    </tr>
                    <?php } ?>
                </table>
                                
            </div>
        </div>
    </div>
</div>
