<div class="row">
    <div class="col-md-12">
        <div class="box">
            <div class="box-header">
                <h3 class="box-title">Tbl Service Time Listing</h3>
            	<div class="box-tools">
                    <a href="<?php echo site_url('tbl_service_time/add'); ?>" class="btn btn-success btn-sm">Add</a> 
                </div>
            </div>
            <div class="box-body">
                <table class="table table-striped">
                    <tr>
						<th>Time Id</th>
						<th>Fk Business Id</th>
						<th>Service Time Count</th>
						<th>Service Time</th>
						<th>Actions</th>
                    </tr>
                    <?php foreach($tbl_service_time as $t){ ?>
                    <tr>
						<td><?php echo $t['time_id']; ?></td>
						<td><?php echo $t['fk_business_id']; ?></td>
						<td><?php echo $t['service_time_count']; ?></td>
						<td><?php echo $t['service_time']; ?></td>
						<td>
                            <a href="<?php echo site_url('tbl_service_time/edit/'.$t['time_id']); ?>" class="btn btn-info btn-xs"><span class="fa fa-pencil"></span> Edit</a> 
                            <a href="<?php echo site_url('tbl_service_time/remove/'.$t['time_id']); ?>" class="btn btn-danger btn-xs"><span class="fa fa-trash"></span> Delete</a>
                        </td>
                    </tr>
                    <?php } ?>
                </table>
                                
            </div>
        </div>
    </div>
</div>
