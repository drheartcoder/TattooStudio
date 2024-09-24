<div class="row">
    <div class="col-md-12">
        <div class="box">
            <div class="box-header">
                <h3 class="box-title">Tbl My Styles Listing</h3>
            	<div class="box-tools">
                    <a href="<?php echo site_url('tbl_my_style/add'); ?>" class="btn btn-success btn-sm">Add</a> 
                </div>
            </div>
            <div class="box-body">
                <table class="table table-striped">
                    <tr>
						<th>ID</th>
						<th>Style Id</th>
						<th>Business User Id</th>
						<th>Actions</th>
                    </tr>
                    <?php foreach($tbl_my_styles as $t){ ?>
                    <tr>
						<td><?php echo $t['id']; ?></td>
						<td><?php echo $t['style_id']; ?></td>
						<td><?php echo $t['business_user_id']; ?></td>
						<td>
                            <a href="<?php echo site_url('tbl_my_style/edit/'.$t['id']); ?>" class="btn btn-info btn-xs"><span class="fa fa-pencil"></span> Edit</a> 
                            <a href="<?php echo site_url('tbl_my_style/remove/'.$t['id']); ?>" class="btn btn-danger btn-xs"><span class="fa fa-trash"></span> Delete</a>
                        </td>
                    </tr>
                    <?php } ?>
                </table>
                                
            </div>
        </div>
    </div>
</div>
