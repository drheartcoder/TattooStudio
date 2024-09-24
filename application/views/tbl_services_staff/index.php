<div class="row">
    <div class="col-md-12">
        <div class="box">
            <div class="box-header">
                <h3 class="box-title">Tbl Services Staff Listing</h3>
            	<div class="box-tools">
                    <a href="<?php echo site_url('tbl_services_staff/add'); ?>" class="btn btn-success btn-sm">Add</a> 
                </div>
            </div>
            <div class="box-body">
                <table class="table table-striped">
                    <tr>
						<th>ID</th>
						<th>Fk Location Id</th>
						<th>Fk Service Id</th>
						<th>Fk Business Id</th>
						<th>Fk Staff Id</th>
						<th>Actions</th>
                    </tr>
                    <?php foreach($tbl_services_staff as $t){ ?>
                    <tr>
						<td><?php echo $t['id']; ?></td>
						<td><?php echo $t['fk_location_id']; ?></td>
						<td><?php echo $t['fk_service_id']; ?></td>
						<td><?php echo $t['fk_business_id']; ?></td>
						<td><?php echo $t['fk_staff_id']; ?></td>
						<td>
                            <a href="<?php echo site_url('tbl_services_staff/edit/'.$t['id']); ?>" class="btn btn-info btn-xs"><span class="fa fa-pencil"></span> Edit</a> 
                            <a href="<?php echo site_url('tbl_services_staff/remove/'.$t['id']); ?>" class="btn btn-danger btn-xs"><span class="fa fa-trash"></span> Delete</a>
                        </td>
                    </tr>
                    <?php } ?>
                </table>
                                
            </div>
        </div>
    </div>
</div>
