<div class="row">
    <div class="col-md-12">
        <div class="box">
            <div class="box-header">
                <h3 class="box-title">Tbl Service Offpeak Times Listing</h3>
            	<div class="box-tools">
                    <a href="<?php echo site_url('tbl_service_offpeak_time/add'); ?>" class="btn btn-success btn-sm">Add</a> 
                </div>
            </div>
            <div class="box-body">
                <table class="table table-striped">
                    <tr>
						<th>Offpeak Time Id</th>
						<th>Fk Service Menu Id</th>
						<th>Day</th>
						<th>Start Time</th>
						<th>End Time</th>
						<th>Actions</th>
                    </tr>
                    <?php foreach($tbl_service_offpeak_times as $t){ ?>
                    <tr>
						<td><?php echo $t['offpeak_time_id']; ?></td>
						<td><?php echo $t['fk_service_menu_id']; ?></td>
						<td><?php echo $t['day']; ?></td>
						<td><?php echo $t['start_time']; ?></td>
						<td><?php echo $t['end_time']; ?></td>
						<td>
                            <a href="<?php echo site_url('tbl_service_offpeak_time/edit/'.$t['offpeak_time_id']); ?>" class="btn btn-info btn-xs"><span class="fa fa-pencil"></span> Edit</a> 
                            <a href="<?php echo site_url('tbl_service_offpeak_time/remove/'.$t['offpeak_time_id']); ?>" class="btn btn-danger btn-xs"><span class="fa fa-trash"></span> Delete</a>
                        </td>
                    </tr>
                    <?php } ?>
                </table>
                                
            </div>
        </div>
    </div>
</div>
