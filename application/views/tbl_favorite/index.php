<div class="row">
    <div class="col-md-12">
        <div class="box">
            <div class="box-header">
                <h3 class="box-title">Tbl Favorites Listing</h3>
            	<div class="box-tools">
                    <a href="<?php echo site_url('tbl_favorite/add'); ?>" class="btn btn-success btn-sm">Add</a> 
                </div>
            </div>
            <div class="box-body">
                <table class="table table-striped">
                    <tr>
						<th>Favorite Id</th>
						<th>Fk User Id</th>
						<th>Fk Business Id</th>
						<th>Favorite Link</th>
						<th>Actions</th>
                    </tr>
                    <?php foreach($tbl_favorites as $t){ ?>
                    <tr>
						<td><?php echo $t['favorite_id']; ?></td>
						<td><?php echo $t['fk_user_id']; ?></td>
						<td><?php echo $t['fk_business_id']; ?></td>
						<td><?php echo $t['favorite_link']; ?></td>
						<td>
                            <a href="<?php echo site_url('tbl_favorite/edit/'.$t['favorite_id']); ?>" class="btn btn-info btn-xs"><span class="fa fa-pencil"></span> Edit</a> 
                            <a href="<?php echo site_url('tbl_favorite/remove/'.$t['favorite_id']); ?>" class="btn btn-danger btn-xs"><span class="fa fa-trash"></span> Delete</a>
                        </td>
                    </tr>
                    <?php } ?>
                </table>
                                
            </div>
        </div>
    </div>
</div>
