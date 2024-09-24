<div class="row">
    <div class="col-md-12">
        <div class="box">
            <div class="box-header">
                <h3 class="box-title">Tbl Event Directions Listing</h3>
            	<div class="box-tools">
                    <a href="<?php echo site_url('tbl_event_direction/add'); ?>" class="btn btn-success btn-sm">Add</a> 
                </div>
            </div>
            <div class="box-body">
                <table class="table table-striped">
                    <tr>
						<th>Event Directions Id</th>
						<th>Fk Business Id</th>
						<th>Fk Location Id</th>
						<th>Event Directions Name</th>
						<th>Actions</th>
                    </tr>
                    <?php foreach($tbl_event_directions as $t){ ?>
                    <tr>
						<td><?php echo $t['event_directions_id']; ?></td>
						<td><?php echo $t['fk_business_id']; ?></td>
						<td><?php echo $t['fk_location_id']; ?></td>
						<td><?php echo $t['event_directions_name']; ?></td>
						<td>
                            <a href="<?php echo site_url('tbl_event_direction/edit/'.$t['event_directions_id']); ?>" class="btn btn-info btn-xs"><span class="fa fa-pencil"></span> Edit</a> 
                            <a href="<?php echo site_url('tbl_event_direction/remove/'.$t['event_directions_id']); ?>" class="btn btn-danger btn-xs"><span class="fa fa-trash"></span> Delete</a>
                        </td>
                    </tr>
                    <?php } ?>
                </table>
                                
            </div>
        </div>
    </div>
</div>
