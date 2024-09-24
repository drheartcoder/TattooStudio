<div class="row">
    <div class="col-md-12">
        <div class="box">
            <div class="box-header">
                <h3 class="box-title">Tbl Business Locations Listing</h3>
            	<div class="box-tools">
                    <a href="<?php echo site_url('tbl_business_location/add'); ?>" class="btn btn-success btn-sm">Add</a> 
                </div>
            </div>
            <div class="box-body">
                <table class="table table-striped">
                    <tr>
						<th>Location Id</th>
						<th>Fk Business Id</th>
						<th>Travel To Customer</th>
						<th>Street Address</th>
						<th>Street Address2</th>
						<th>Street Address3</th>
						<th>City</th>
						<th>District</th>
						<th>Country</th>
						<th>Zip</th>
						<th>Phone</th>
						<th>Ada Accessible</th>
						<th>Parking</th>
						<th>Language</th>
						<th>Location Detail</th>
						<th>Latitude</th>
						<th>Longitude</th>
						<th>Is Active</th>
						<th>Giolocation</th>
						<th>Event Conduct</th>
						<th>Service Conduct</th>
						<th>Staff Conduct</th>
						<th>Actions</th>
                    </tr>
                    <?php foreach($tbl_business_locations as $t){ ?>
                    <tr>
						<td><?php echo $t['location_id']; ?></td>
						<td><?php echo $t['fk_business_id']; ?></td>
						<td><?php echo $t['travel_to_customer']; ?></td>
						<td><?php echo $t['street_address']; ?></td>
						<td><?php echo $t['street_address2']; ?></td>
						<td><?php echo $t['street_address3']; ?></td>
						<td><?php echo $t['city']; ?></td>
						<td><?php echo $t['district']; ?></td>
						<td><?php echo $t['country']; ?></td>
						<td><?php echo $t['zip']; ?></td>
						<td><?php echo $t['phone']; ?></td>
						<td><?php echo $t['ada_accessible']; ?></td>
						<td><?php echo $t['parking']; ?></td>
						<td><?php echo $t['language']; ?></td>
						<td><?php echo $t['location_detail']; ?></td>
						<td><?php echo $t['latitude']; ?></td>
						<td><?php echo $t['longitude']; ?></td>
						<td><?php echo $t['is_active']; ?></td>
						<td><?php echo $t['giolocation']; ?></td>
						<td><?php echo $t['event_conduct']; ?></td>
						<td><?php echo $t['service_conduct']; ?></td>
						<td><?php echo $t['staff_conduct']; ?></td>
						<td>
                            <a href="<?php echo site_url('tbl_business_location/edit/'.$t['location_id']); ?>" class="btn btn-info btn-xs"><span class="fa fa-pencil"></span> Edit</a> 
                            <a href="<?php echo site_url('tbl_business_location/remove/'.$t['location_id']); ?>" class="btn btn-danger btn-xs"><span class="fa fa-trash"></span> Delete</a>
                        </td>
                    </tr>
                    <?php } ?>
                </table>
                                
            </div>
        </div>
    </div>
</div>
