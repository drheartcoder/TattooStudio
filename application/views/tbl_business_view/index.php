<div class="row">
    <div class="col-md-12">
        <div class="box">
            <div class="box-header">
                <h3 class="box-title">Tbl Business View Listing</h3>
            	<div class="box-tools">
                    <a href="<?php echo site_url('tbl_business_view/add'); ?>" class="btn btn-success btn-sm">Add</a> 
                </div>
            </div>
            <div class="box-body">
                <table class="table table-striped">
                    <tr>
						<th>View Id</th>
						<th>Business Id</th>
						<th>Fk User Id</th>
						<th>Ip Address</th>
						<th>View Count</th>
						<th>Added Date</th>
						<th>Actions</th>
                    </tr>
                    <?php foreach($tbl_business_view as $t){ ?>
                    <tr>
						<td><?php echo $t['view_id']; ?></td>
						<td><?php echo $t['business_id']; ?></td>
						<td><?php echo $t['fk_user_id']; ?></td>
						<td><?php echo $t['ip_address']; ?></td>
						<td><?php echo $t['view_count']; ?></td>
						<td><?php echo $t['added_date']; ?></td>
						<td>
                            <a href="<?php echo site_url('tbl_business_view/edit/'.$t['']); ?>" class="btn btn-info btn-xs"><span class="fa fa-pencil"></span> Edit</a> 
                            <a href="<?php echo site_url('tbl_business_view/remove/'.$t['']); ?>" class="btn btn-danger btn-xs"><span class="fa fa-trash"></span> Delete</a>
                        </td>
                    </tr>
                    <?php } ?>
                </table>
                                
            </div>
        </div>
    </div>
</div>
