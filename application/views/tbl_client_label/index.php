<div class="row">
    <div class="col-md-12">
        <div class="box">
            <div class="box-header">
                <h3 class="box-title">Tbl Client Label Listing</h3>
            	<div class="box-tools">
                    <a href="<?php echo site_url('tbl_client_label/add'); ?>" class="btn btn-success btn-sm">Add</a> 
                </div>
            </div>
            <div class="box-body">
                <table class="table table-striped">
                    <tr>
						<th>Label Id</th>
						<th>Fk Client Id</th>
						<th>Label Name</th>
						<th>Fk Business Id</th>
						<th>Actions</th>
                    </tr>
                    <?php foreach($tbl_client_label as $t){ ?>
                    <tr>
						<td><?php echo $t['label_id']; ?></td>
						<td><?php echo $t['fk_client_id']; ?></td>
						<td><?php echo $t['label_name']; ?></td>
						<td><?php echo $t['fk_business_id']; ?></td>
						<td>
                            <a href="<?php echo site_url('tbl_client_label/edit/'.$t['label_id']); ?>" class="btn btn-info btn-xs"><span class="fa fa-pencil"></span> Edit</a> 
                            <a href="<?php echo site_url('tbl_client_label/remove/'.$t['label_id']); ?>" class="btn btn-danger btn-xs"><span class="fa fa-trash"></span> Delete</a>
                        </td>
                    </tr>
                    <?php } ?>
                </table>
                                
            </div>
        </div>
    </div>
</div>
