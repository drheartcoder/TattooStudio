<div class="row">
    <div class="col-md-12">
        <div class="box">
            <div class="box-header">
                <h3 class="box-title">Tbl Business Mailing Address Listing</h3>
            	<div class="box-tools">
                    <a href="<?php echo site_url('tbl_business_mailing_addres/add'); ?>" class="btn btn-success btn-sm">Add</a> 
                </div>
            </div>
            <div class="box-body">
                <table class="table table-striped">
                    <tr>
						<th>Mailing Id</th>
						<th>Fk Business Id</th>
						<th>Recipient Name</th>
						<th>Giolocation</th>
						<th>Street Address</th>
						<th>Street Address2</th>
						<th>Street Address3</th>
						<th>City</th>
						<th>District</th>
						<th>Country</th>
						<th>Zip</th>
						<th>Actions</th>
                    </tr>
                    <?php foreach($tbl_business_mailing_address as $t){ ?>
                    <tr>
						<td><?php echo $t['mailing_id']; ?></td>
						<td><?php echo $t['fk_business_id']; ?></td>
						<td><?php echo $t['recipient_name']; ?></td>
						<td><?php echo $t['giolocation']; ?></td>
						<td><?php echo $t['street_address']; ?></td>
						<td><?php echo $t['street_address2']; ?></td>
						<td><?php echo $t['street_address3']; ?></td>
						<td><?php echo $t['city']; ?></td>
						<td><?php echo $t['district']; ?></td>
						<td><?php echo $t['country']; ?></td>
						<td><?php echo $t['zip']; ?></td>
						<td>
                            <a href="<?php echo site_url('tbl_business_mailing_addres/edit/'.$t['mailing_id']); ?>" class="btn btn-info btn-xs"><span class="fa fa-pencil"></span> Edit</a> 
                            <a href="<?php echo site_url('tbl_business_mailing_addres/remove/'.$t['mailing_id']); ?>" class="btn btn-danger btn-xs"><span class="fa fa-trash"></span> Delete</a>
                        </td>
                    </tr>
                    <?php } ?>
                </table>
                                
            </div>
        </div>
    </div>
</div>
