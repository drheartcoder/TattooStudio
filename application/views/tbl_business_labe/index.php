<div class="row">
    <div class="col-md-12">
        <div class="box">
            <div class="box-header">
                <h3 class="box-title">Tbl Business Labes Listing</h3>
            	<div class="box-tools">
                    <a href="<?php echo site_url('tbl_business_labe/add'); ?>" class="btn btn-success btn-sm">Add</a> 
                </div>
            </div>
            <div class="box-body">
                <table class="table table-striped">
                    <tr>
						<th>ID</th>
						<th>Fk User Id</th>
						<th>Label Name</th>
						<th>Fk Business Id</th>
						<th>Actions</th>
                    </tr>
                    <?php foreach($tbl_business_labes as $t){ ?>
                    <tr>
						<td><?php echo $t['id']; ?></td>
						<td><?php echo $t['fk_user_id']; ?></td>
						<td><?php echo $t['label_name']; ?></td>
						<td><?php echo $t['fk_business_id']; ?></td>
						<td>
                            <a href="<?php echo site_url('tbl_business_labe/edit/'.$t['']); ?>" class="btn btn-info btn-xs"><span class="fa fa-pencil"></span> Edit</a> 
                            <a href="<?php echo site_url('tbl_business_labe/remove/'.$t['']); ?>" class="btn btn-danger btn-xs"><span class="fa fa-trash"></span> Delete</a>
                        </td>
                    </tr>
                    <?php } ?>
                </table>
                                
            </div>
        </div>
    </div>
</div>
