<div class="row">
    <div class="col-md-12">
        <div class="box">
            <div class="box-header">
                <h3 class="box-title">Tbl Card Type Listing</h3>
            	<div class="box-tools">
                    <a href="<?php echo site_url('tbl_card_type/add'); ?>" class="btn btn-success btn-sm">Add</a> 
                </div>
            </div>
            <div class="box-body">
                <table class="table table-striped">
                    <tr>
						<th>ID</th>
						<th>Card Type</th>
						<th>Card Logo</th>
						<th>Actions</th>
                    </tr>
                    <?php foreach($tbl_card_type as $t){ ?>
                    <tr>
						<td><?php echo $t['id']; ?></td>
						<td><?php echo $t['card_type']; ?></td>
						<td><?php echo $t['card_logo']; ?></td>
						<td>
                            <a href="<?php echo site_url('tbl_card_type/edit/'.$t['id']); ?>" class="btn btn-info btn-xs"><span class="fa fa-pencil"></span> Edit</a> 
                            <a href="<?php echo site_url('tbl_card_type/remove/'.$t['id']); ?>" class="btn btn-danger btn-xs"><span class="fa fa-trash"></span> Delete</a>
                        </td>
                    </tr>
                    <?php } ?>
                </table>
                                
            </div>
        </div>
    </div>
</div>
