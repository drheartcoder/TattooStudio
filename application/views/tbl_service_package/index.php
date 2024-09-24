<div class="row">
    <div class="col-md-12">
        <div class="box">
            <div class="box-header">
                <h3 class="box-title">Tbl Service Packages Listing</h3>
            	<div class="box-tools">
                    <a href="<?php echo site_url('tbl_service_package/add'); ?>" class="btn btn-success btn-sm">Add</a> 
                </div>
            </div>
            <div class="box-body">
                <table class="table table-striped">
                    <tr>
						<th>Package Id</th>
						<th>Fk Business Id</th>
						<th>Fk Subcat Id</th>
						<th>Package Name</th>
						<th>No Of Appointments</th>
						<th>Expires</th>
						<th>Package Details</th>
						<th>Package Price</th>
						<th>Can Be Used For</th>
						<th>Actions</th>
                    </tr>
                    <?php foreach($tbl_service_packages as $t){ ?>
                    <tr>
						<td><?php echo $t['package_id']; ?></td>
						<td><?php echo $t['fk_business_id']; ?></td>
						<td><?php echo $t['fk_subcat_id']; ?></td>
						<td><?php echo $t['package_name']; ?></td>
						<td><?php echo $t['no_of_appointments']; ?></td>
						<td><?php echo $t['expires']; ?></td>
						<td><?php echo $t['package_details']; ?></td>
						<td><?php echo $t['package_price']; ?></td>
						<td><?php echo $t['can_be_used_for']; ?></td>
						<td>
                            <a href="<?php echo site_url('tbl_service_package/edit/'.$t['package_id']); ?>" class="btn btn-info btn-xs"><span class="fa fa-pencil"></span> Edit</a> 
                            <a href="<?php echo site_url('tbl_service_package/remove/'.$t['package_id']); ?>" class="btn btn-danger btn-xs"><span class="fa fa-trash"></span> Delete</a>
                        </td>
                    </tr>
                    <?php } ?>
                </table>
                                
            </div>
        </div>
    </div>
</div>
