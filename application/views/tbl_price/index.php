<div class="row">
    <div class="col-md-12">
        <div class="box">
            <div class="box-header">
                <h3 class="box-title">Tbl Price Listing</h3>
            	<div class="box-tools">
                    <a href="<?php echo site_url('tbl_price/add'); ?>" class="btn btn-success btn-sm">Add</a> 
                </div>
            </div>
            <div class="box-body">
                <table class="table table-striped">
                    <tr>
						<th>ID</th>
						<th>Service Id</th>
						<th>Color Id</th>
						<th>Size Id</th>
						<th>Color</th>
						<th>Size</th>
						<th>Time</th>
						<th>Price</th>
						<th>Created At</th>
						<th>Actions</th>
                    </tr>
                    <?php foreach($tbl_price as $t){ ?>
                    <tr>
						<td><?php echo $t['id']; ?></td>
						<td><?php echo $t['service_id']; ?></td>
						<td><?php echo $t['color_id']; ?></td>
						<td><?php echo $t['size_id']; ?></td>
						<td><?php echo $t['color']; ?></td>
						<td><?php echo $t['size']; ?></td>
						<td><?php echo $t['time']; ?></td>
						<td><?php echo $t['price']; ?></td>
						<td><?php echo $t['created_at']; ?></td>
						<td>
                            <a href="<?php echo site_url('tbl_price/edit/'.$t['id']); ?>" class="btn btn-info btn-xs"><span class="fa fa-pencil"></span> Edit</a> 
                            <a href="<?php echo site_url('tbl_price/remove/'.$t['id']); ?>" class="btn btn-danger btn-xs"><span class="fa fa-trash"></span> Delete</a>
                        </td>
                    </tr>
                    <?php } ?>
                </table>
                                
            </div>
        </div>
    </div>
</div>
