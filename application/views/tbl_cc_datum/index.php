<div class="row">
    <div class="col-md-12">
        <div class="box">
            <div class="box-header">
                <h3 class="box-title">Tbl Cc Data Listing</h3>
            	<div class="box-tools">
                    <a href="<?php echo site_url('tbl_cc_datum/add'); ?>" class="btn btn-success btn-sm">Add</a> 
                </div>
            </div>
            <div class="box-body">
                <table class="table table-striped">
                    <tr>
						<th>Cc Data Id</th>
						<th>Fk User Id</th>
						<th>Cc End Number</th>
						<th>Is Active</th>
						<th>Data</th>
						<th>Actions</th>
                    </tr>
                    <?php foreach($tbl_cc_data as $t){ ?>
                    <tr>
						<td><?php echo $t['cc_data_id']; ?></td>
						<td><?php echo $t['fk_user_id']; ?></td>
						<td><?php echo $t['cc_end_number']; ?></td>
						<td><?php echo $t['is_active']; ?></td>
						<td><?php echo $t['data']; ?></td>
						<td>
                            <a href="<?php echo site_url('tbl_cc_datum/edit/'.$t['cc_data_id']); ?>" class="btn btn-info btn-xs"><span class="fa fa-pencil"></span> Edit</a> 
                            <a href="<?php echo site_url('tbl_cc_datum/remove/'.$t['cc_data_id']); ?>" class="btn btn-danger btn-xs"><span class="fa fa-trash"></span> Delete</a>
                        </td>
                    </tr>
                    <?php } ?>
                </table>
                                
            </div>
        </div>
    </div>
</div>
