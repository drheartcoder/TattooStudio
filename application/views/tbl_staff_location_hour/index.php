<div class="row">
    <div class="col-md-12">
        <div class="box">
            <div class="box-header">
                <h3 class="box-title">Tbl Staff Location Hours Listing</h3>
            	<div class="box-tools">
                    <a href="<?php echo site_url('tbl_staff_location_hour/add'); ?>" class="btn btn-success btn-sm">Add</a> 
                </div>
            </div>
            <div class="box-body">
                <table class="table table-striped">
                    <tr>
						<th>Location Hours Id</th>
						<th>Fk Location Id</th>
						<th>Fk Business Id</th>
						<th>Day Of Week</th>
						<th>Start Time</th>
						<th>End Time</th>
						<th>By Appointment</th>
						<th>In Out</th>
						<th>Fk Service Menu Id</th>
						<th>Booked Count</th>
						<th>Fk Staff Id</th>
						<th>Actions</th>
                    </tr>
                    <?php foreach($tbl_staff_location_hours as $t){ ?>
                    <tr>
						<td><?php echo $t['location_hours_id']; ?></td>
						<td><?php echo $t['fk_location_id']; ?></td>
						<td><?php echo $t['fk_business_id']; ?></td>
						<td><?php echo $t['day_of_week']; ?></td>
						<td><?php echo $t['start_time']; ?></td>
						<td><?php echo $t['end_time']; ?></td>
						<td><?php echo $t['by_appointment']; ?></td>
						<td><?php echo $t['in_out']; ?></td>
						<td><?php echo $t['fk_service_menu_id']; ?></td>
						<td><?php echo $t['booked_count']; ?></td>
						<td><?php echo $t['fk_staff_id']; ?></td>
						<td>
                            <a href="<?php echo site_url('tbl_staff_location_hour/edit/'.$t['location_hours_id']); ?>" class="btn btn-info btn-xs"><span class="fa fa-pencil"></span> Edit</a> 
                            <a href="<?php echo site_url('tbl_staff_location_hour/remove/'.$t['location_hours_id']); ?>" class="btn btn-danger btn-xs"><span class="fa fa-trash"></span> Delete</a>
                        </td>
                    </tr>
                    <?php } ?>
                </table>
                                
            </div>
        </div>
    </div>
</div>
