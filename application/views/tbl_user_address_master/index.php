<div class="row">
    <div class="col-md-12">
        <div class="box">
            <div class="box-header">
                <h3 class="box-title">Tbl User Address Master Listing</h3>
            	<div class="box-tools">
                    <a href="<?php echo site_url('tbl_user_address_master/add'); ?>" class="btn btn-success btn-sm">Add</a> 
                </div>
            </div>
            <div class="box-body">
                <table class="table table-striped">
                    <tr>
						<th>Address Id</th>
						<th>Fk User Id</th>
						<th>Street 1</th>
						<th>Street 2</th>
						<th>Street 3</th>
						<th>Country</th>
						<th>District</th>
						<th>City</th>
						<th>Zipcode</th>
						<th>Is Active</th>
						<th>Actions</th>
                    </tr>
                    <?php foreach($tbl_user_address_master as $t){ ?>
                    <tr>
						<td><?php echo $t['address_id']; ?></td>
						<td><?php echo $t['fk_user_id']; ?></td>
						<td><?php echo $t['street_1']; ?></td>
						<td><?php echo $t['street_2']; ?></td>
						<td><?php echo $t['street_3']; ?></td>
						<td><?php echo $t['country']; ?></td>
						<td><?php echo $t['district']; ?></td>
						<td><?php echo $t['city']; ?></td>
						<td><?php echo $t['zipcode']; ?></td>
						<td><?php echo $t['is_active']; ?></td>
						<td>
                            <a href="<?php echo site_url('tbl_user_address_master/edit/'.$t['address_id']); ?>" class="btn btn-info btn-xs"><span class="fa fa-pencil"></span> Edit</a> 
                            <a href="<?php echo site_url('tbl_user_address_master/remove/'.$t['address_id']); ?>" class="btn btn-danger btn-xs"><span class="fa fa-trash"></span> Delete</a>
                        </td>
                    </tr>
                    <?php } ?>
                </table>
                                
            </div>
        </div>
    </div>
</div>
