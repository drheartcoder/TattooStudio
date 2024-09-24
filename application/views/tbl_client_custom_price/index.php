<div class="row">
    <div class="col-md-12">
        <div class="box">
            <div class="box-header">
                <h3 class="box-title">Tbl Client Custom Price Listing</h3>
            	<div class="box-tools">
                    <a href="<?php echo site_url('tbl_client_custom_price/add'); ?>" class="btn btn-success btn-sm">Add</a> 
                </div>
            </div>
            <div class="box-body">
                <table class="table table-striped">
                    <tr>
						<th>Custom Price Id</th>
						<th>Fk Client Id</th>
						<th>Fk Service Menu Id</th>
						<th>Fk Staff Id</th>
						<th>Custom Price</th>
						<th>Actions</th>
                    </tr>
                    <?php foreach($tbl_client_custom_price as $t){ ?>
                    <tr>
						<td><?php echo $t['custom_price_id']; ?></td>
						<td><?php echo $t['fk_client_id']; ?></td>
						<td><?php echo $t['fk_service_menu_id']; ?></td>
						<td><?php echo $t['fk_staff_id']; ?></td>
						<td><?php echo $t['custom_price']; ?></td>
						<td>
                            <a href="<?php echo site_url('tbl_client_custom_price/edit/'.$t['custom_price_id']); ?>" class="btn btn-info btn-xs"><span class="fa fa-pencil"></span> Edit</a> 
                            <a href="<?php echo site_url('tbl_client_custom_price/remove/'.$t['custom_price_id']); ?>" class="btn btn-danger btn-xs"><span class="fa fa-trash"></span> Delete</a>
                        </td>
                    </tr>
                    <?php } ?>
                </table>
                                
            </div>
        </div>
    </div>
</div>
