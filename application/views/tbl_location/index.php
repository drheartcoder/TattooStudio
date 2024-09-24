<div class="row">
    <div class="col-md-12">
        <div class="box">
            <div class="box-header">
                <h3 class="box-title">Tbl Location Listing</h3>
            	<div class="box-tools">
                    <a href="<?php echo site_url('tbl_location/add'); ?>" class="btn btn-success btn-sm">Add</a> 
                </div>
            </div>
            <div class="box-body">
                <table class="table table-striped">
                    <tr>
						<th>ID</th>
						<th>Name</th>
						<th>Districts Id</th>
						<th>Status</th>
						<th>Video</th>
						<th>Address</th>
						<th>Zipcode</th>
						<th>Actions</th>
                    </tr>
                    <?php foreach($tbl_location as $t){ ?>
                    <tr>
						<td><?php echo $t['id']; ?></td>
						<td><?php echo $t['name']; ?></td>
						<td><?php echo $t['districts_id']; ?></td>
						<td><?php echo $t['status']; ?></td>
						<td><?php echo $t['video']; ?></td>
						<td><?php echo $t['address']; ?></td>
						<td><?php echo $t['zipcode']; ?></td>
						<td>
                            <a href="<?php echo site_url('tbl_location/edit/'.$t['id']); ?>" class="btn btn-info btn-xs"><span class="fa fa-pencil"></span> Edit</a> 
                            <a href="<?php echo site_url('tbl_location/remove/'.$t['id']); ?>" class="btn btn-danger btn-xs"><span class="fa fa-trash"></span> Delete</a>
                        </td>
                    </tr>
                    <?php } ?>
                </table>
                                
            </div>
        </div>
    </div>
</div>
