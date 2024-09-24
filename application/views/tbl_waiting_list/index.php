<div class="row">
    <div class="col-md-12">
        <div class="box">
            <div class="box-header">
                <h3 class="box-title">Tbl Waiting List Listing</h3>
            	<div class="box-tools">
                    <a href="<?php echo site_url('tbl_waiting_list/add'); ?>" class="btn btn-success btn-sm">Add</a> 
                </div>
            </div>
            <div class="box-body">
                <table class="table table-striped">
                    <tr>
						<th>Waiting Id</th>
						<th>Selected Date</th>
						<th>Fk User Id</th>
						<th>Fk Business Id</th>
						<th>Fk Location Id</th>
						<th>Fk Location Hours Id</th>
						<th>Fk Service Menu Id</th>
						<th>Serv Start Time</th>
						<th>Serv End Time</th>
						<th>Created Date</th>
						<th>Status</th>
						<th>Url Status</th>
						<th>Fk Staff Id</th>
						<th>Actions</th>
                    </tr>
                    <?php foreach($tbl_waiting_list as $t){ ?>
                    <tr>
						<td><?php echo $t['waiting_id']; ?></td>
						<td><?php echo $t['selected_date']; ?></td>
						<td><?php echo $t['fk_user_id']; ?></td>
						<td><?php echo $t['fk_business_id']; ?></td>
						<td><?php echo $t['fk_location_id']; ?></td>
						<td><?php echo $t['fk_location_hours_id']; ?></td>
						<td><?php echo $t['fk_service_menu_id']; ?></td>
						<td><?php echo $t['serv_start_time']; ?></td>
						<td><?php echo $t['serv_end_time']; ?></td>
						<td><?php echo $t['created_date']; ?></td>
						<td><?php echo $t['status']; ?></td>
						<td><?php echo $t['url_status']; ?></td>
						<td><?php echo $t['fk_staff_id']; ?></td>
						<td>
                            <a href="<?php echo site_url('tbl_waiting_list/edit/'.$t['waiting_id']); ?>" class="btn btn-info btn-xs"><span class="fa fa-pencil"></span> Edit</a> 
                            <a href="<?php echo site_url('tbl_waiting_list/remove/'.$t['waiting_id']); ?>" class="btn btn-danger btn-xs"><span class="fa fa-trash"></span> Delete</a>
                        </td>
                    </tr>
                    <?php } ?>
                </table>
                                
            </div>
        </div>
    </div>
</div>
