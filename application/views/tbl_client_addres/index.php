<div class="row">
    <div class="col-md-12">
        <div class="box">
            <div class="box-header">
                <h3 class="box-title">Tbl Client Address Listing</h3>
            	<div class="box-tools">
                    <a href="<?php echo site_url('tbl_client_addres/add'); ?>" class="btn btn-success btn-sm">Add</a> 
                </div>
            </div>
            <div class="box-body">
                <table class="table table-striped">
                    <tr>
						<th>Client Address Id</th>
						<th>Fk Client Id</th>
						<th>Street Address 1</th>
						<th>Street Address 2</th>
						<th>Street Address 3</th>
						<th>Country</th>
						<th>State</th>
						<th>City</th>
						<th>Zip</th>
						<th>Actions</th>
                    </tr>
                    <?php foreach($tbl_client_address as $t){ ?>
                    <tr>
						<td><?php echo $t['client_address_id']; ?></td>
						<td><?php echo $t['fk_client_id']; ?></td>
						<td><?php echo $t['street_address_1']; ?></td>
						<td><?php echo $t['street_address_2']; ?></td>
						<td><?php echo $t['street_address_3']; ?></td>
						<td><?php echo $t['country']; ?></td>
						<td><?php echo $t['state']; ?></td>
						<td><?php echo $t['city']; ?></td>
						<td><?php echo $t['zip']; ?></td>
						<td>
                            <a href="<?php echo site_url('tbl_client_addres/edit/'.$t['client_address_id']); ?>" class="btn btn-info btn-xs"><span class="fa fa-pencil"></span> Edit</a> 
                            <a href="<?php echo site_url('tbl_client_addres/remove/'.$t['client_address_id']); ?>" class="btn btn-danger btn-xs"><span class="fa fa-trash"></span> Delete</a>
                        </td>
                    </tr>
                    <?php } ?>
                </table>
                                
            </div>
        </div>
    </div>
</div>
