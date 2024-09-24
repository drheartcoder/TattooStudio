<div class="row">
    <div class="col-md-12">
        <div class="box">
            <div class="box-header">
                <h3 class="box-title">Tbl Service Pakages Listing</h3>
            	<div class="box-tools">
                    <a href="<?php echo site_url('tbl_service_pakage/add'); ?>" class="btn btn-success btn-sm">Add</a> 
                </div>
            </div>
            <div class="box-body">
                <table class="table table-striped">
                    <tr>
						<th>Ser Pk Id</th>
						<th>Pakage Name</th>
						<th>Fk Business Id</th>
						<th>Pakage Qty</th>
						<th>Pakage Duration</th>
						<th>Price</th>
						<th>Date</th>
						<th>Is Delete</th>
						<th>Pk Service Menu Id</th>
						<th>Actions</th>
                    </tr>
                    <?php foreach($tbl_service_pakages as $t){ ?>
                    <tr>
						<td><?php echo $t['ser_pk_id']; ?></td>
						<td><?php echo $t['pakage_name']; ?></td>
						<td><?php echo $t['fk_business_id']; ?></td>
						<td><?php echo $t['pakage_qty']; ?></td>
						<td><?php echo $t['pakage_duration']; ?></td>
						<td><?php echo $t['price']; ?></td>
						<td><?php echo $t['date']; ?></td>
						<td><?php echo $t['is_delete']; ?></td>
						<td><?php echo $t['pk_service_menu_id']; ?></td>
						<td>
                            <a href="<?php echo site_url('tbl_service_pakage/edit/'.$t['ser_pk_id']); ?>" class="btn btn-info btn-xs"><span class="fa fa-pencil"></span> Edit</a> 
                            <a href="<?php echo site_url('tbl_service_pakage/remove/'.$t['ser_pk_id']); ?>" class="btn btn-danger btn-xs"><span class="fa fa-trash"></span> Delete</a>
                        </td>
                    </tr>
                    <?php } ?>
                </table>
                                
            </div>
        </div>
    </div>
</div>
