<div class="row">
    <div class="col-md-12">
        <div class="box">
            <div class="box-header">
                <h3 class="box-title">Tbl Deposit Storage Listing</h3>
            	<div class="box-tools">
                    <a href="<?php echo site_url('tbl_deposit_storage/add'); ?>" class="btn btn-success btn-sm">Add</a> 
                </div>
            </div>
            <div class="box-body">
                <table class="table table-striped">
                    <tr>
						<th>Deposit Info Id</th>
						<th>Fk User Id</th>
						<th>Paypal Email</th>
						<th>Paper Check</th>
						<th>Selected</th>
						<th>Direct Deposit</th>
						<th>Actions</th>
                    </tr>
                    <?php foreach($tbl_deposit_storage as $t){ ?>
                    <tr>
						<td><?php echo $t['deposit_info_id']; ?></td>
						<td><?php echo $t['fk_user_id']; ?></td>
						<td><?php echo $t['paypal_email']; ?></td>
						<td><?php echo $t['paper_check']; ?></td>
						<td><?php echo $t['selected']; ?></td>
						<td><?php echo $t['direct_deposit']; ?></td>
						<td>
                            <a href="<?php echo site_url('tbl_deposit_storage/edit/'.$t['deposit_info_id']); ?>" class="btn btn-info btn-xs"><span class="fa fa-pencil"></span> Edit</a> 
                            <a href="<?php echo site_url('tbl_deposit_storage/remove/'.$t['deposit_info_id']); ?>" class="btn btn-danger btn-xs"><span class="fa fa-trash"></span> Delete</a>
                        </td>
                    </tr>
                    <?php } ?>
                </table>
                                
            </div>
        </div>
    </div>
</div>
