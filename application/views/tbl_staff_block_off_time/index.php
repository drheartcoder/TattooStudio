<div class="row">
    <div class="col-md-12">
        <div class="box">
            <div class="box-header">
                <h3 class="box-title">Tbl Staff Block Off Time Listing</h3>
            	<div class="box-tools">
                    <a href="<?php echo site_url('tbl_staff_block_off_time/add'); ?>" class="btn btn-success btn-sm">Add</a> 
                </div>
            </div>
            <div class="box-body">
                <table class="table table-striped">
                    <tr>
						<th>Block Off Id</th>
						<th>Fk Business Id</th>
						<th>Fk Location Id</th>
						<th>Fk Staff Id</th>
						<th>Block Off Title</th>
						<th>Block Off Start Date</th>
						<th>Block Off End Date</th>
						<th>Block Off Start Time</th>
						<th>Block Off End Time</th>
						<th>Off Note</th>
						<th>Actions</th>
                    </tr>
                    <?php foreach($tbl_staff_block_off_time as $t){ ?>
                    <tr>
						<td><?php echo $t['block_off_id']; ?></td>
						<td><?php echo $t['fk_business_id']; ?></td>
						<td><?php echo $t['fk_location_id']; ?></td>
						<td><?php echo $t['fk_staff_id']; ?></td>
						<td><?php echo $t['block_off_title']; ?></td>
						<td><?php echo $t['block_off_start_date']; ?></td>
						<td><?php echo $t['block_off_end_date']; ?></td>
						<td><?php echo $t['block_off_start_time']; ?></td>
						<td><?php echo $t['block_off_end_time']; ?></td>
						<td><?php echo $t['off_note']; ?></td>
						<td>
                            <a href="<?php echo site_url('tbl_staff_block_off_time/edit/'.$t['block_off_id']); ?>" class="btn btn-info btn-xs"><span class="fa fa-pencil"></span> Edit</a> 
                            <a href="<?php echo site_url('tbl_staff_block_off_time/remove/'.$t['block_off_id']); ?>" class="btn btn-danger btn-xs"><span class="fa fa-trash"></span> Delete</a>
                        </td>
                    </tr>
                    <?php } ?>
                </table>
                                
            </div>
        </div>
    </div>
</div>
