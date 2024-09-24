<div class="row">
    <div class="col-md-12">
        <div class="box">
            <div class="box-header">
                <h3 class="box-title">Tbl User Package Listing</h3>
            	<div class="box-tools">
                    <a href="<?php echo site_url('tbl_user_package/add'); ?>" class="btn btn-success btn-sm">Add</a> 
                </div>
            </div>
            <div class="box-body">
                <table class="table table-striped">
                    <tr>
						<th>User Pakage Id</th>
						<th>Pakage Name</th>
						<th>Fk User Id</th>
						<th>Fk Business Id</th>
						<th>Packge Qty</th>
						<th>Fk Pakage Id</th>
						<th>Pakage Remaining Qty</th>
						<th>Purchase Date</th>
						<th>Expiry Date</th>
						<th>Status</th>
						<th>Fk Service Menu Id</th>
						<th>Actions</th>
                    </tr>
                    <?php foreach($tbl_user_package as $t){ ?>
                    <tr>
						<td><?php echo $t['user_pakage_id']; ?></td>
						<td><?php echo $t['pakage_name']; ?></td>
						<td><?php echo $t['fk_user_id']; ?></td>
						<td><?php echo $t['fk_business_id']; ?></td>
						<td><?php echo $t['packge_qty']; ?></td>
						<td><?php echo $t['fk_pakage_id']; ?></td>
						<td><?php echo $t['pakage_remaining_qty']; ?></td>
						<td><?php echo $t['purchase_date']; ?></td>
						<td><?php echo $t['expiry_date']; ?></td>
						<td><?php echo $t['status']; ?></td>
						<td><?php echo $t['fk_service_menu_id']; ?></td>
						<td>
                            <a href="<?php echo site_url('tbl_user_package/edit/'.$t['user_pakage_id']); ?>" class="btn btn-info btn-xs"><span class="fa fa-pencil"></span> Edit</a> 
                            <a href="<?php echo site_url('tbl_user_package/remove/'.$t['user_pakage_id']); ?>" class="btn btn-danger btn-xs"><span class="fa fa-trash"></span> Delete</a>
                        </td>
                    </tr>
                    <?php } ?>
                </table>
                                
            </div>
        </div>
    </div>
</div>
