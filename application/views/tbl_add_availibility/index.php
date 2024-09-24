<div class="row">
    <div class="col-md-12">
        <div class="box">
            <div class="box-header">
                <h3 class="box-title">Tbl Add Availibility Listing</h3>
            	<div class="box-tools">
                    <a href="<?php echo site_url('tbl_add_availibility/add'); ?>" class="btn btn-success btn-sm">Add</a> 
                </div>
            </div>
            <div class="box-body">
                <table class="table table-striped">
                    <tr>
						<th>Availibility Id</th>
						<th>Fk Business Id</th>
						<th>Staff Id</th>
						<th>Day Of Week</th>
						<th>Date</th>
						<th>Start Time</th>
						<th>End Time</th>
						<th>Date Time</th>
						<th>Status</th>
						<th>Actions</th>
                    </tr>
                    <?php foreach($tbl_add_availibility as $t){ ?>
                    <tr>
						<td><?php echo $t['availibility_id']; ?></td>
						<td><?php echo $t['fk_business_id']; ?></td>
						<td><?php echo $t['staff_id']; ?></td>
						<td><?php echo $t['day_of_week']; ?></td>
						<td><?php echo $t['date']; ?></td>
						<td><?php echo $t['start_time']; ?></td>
						<td><?php echo $t['end_time']; ?></td>
						<td><?php echo $t['date_time']; ?></td>
						<td><?php echo $t['status']; ?></td>
						<td>
                            <a href="<?php echo site_url('tbl_add_availibility/edit/'.$t['availibility_id']); ?>" class="btn btn-info btn-xs"><span class="fa fa-pencil"></span> Edit</a> 
                            <a href="<?php echo site_url('tbl_add_availibility/remove/'.$t['availibility_id']); ?>" class="btn btn-danger btn-xs"><span class="fa fa-trash"></span> Delete</a>
                        </td>
                    </tr>
                    <?php } ?>
                </table>
                                
            </div>
        </div>
    </div>
</div>
