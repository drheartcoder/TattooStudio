<div class="row">
    <div class="col-md-12">
        <div class="box">
            <div class="box-header">
                <h3 class="box-title">Tbl Studio Tattoos Listing</h3>
            	<div class="box-tools">
                    <a href="<?php echo site_url('tbl_studio_tattoo/add'); ?>" class="btn btn-success btn-sm">Add</a> 
                </div>
            </div>
            <div class="box-body">
                <table class="table table-striped">
                    <tr>
						<th>ID</th>
						<th>Tattoo Title</th>
						<th>Duration</th>
						<th>Tatto Staff</th>
						<th>Tattoo Price</th>
						<th>Tattoo Style</th>
						<th>Tattoo Image</th>
						<th>Category</th>
						<th>Sub Category</th>
						<th>Color</th>
						<th>Size</th>
						<th>User Id</th>
						<th>Is Deleted</th>
						<th>Tattoo Description</th>
						<th>Actions</th>
                    </tr>
                    <?php foreach($tbl_studio_tattoos as $t){ ?>
                    <tr>
						<td><?php echo $t['id']; ?></td>
						<td><?php echo $t['tattoo_title']; ?></td>
						<td><?php echo $t['duration']; ?></td>
						<td><?php echo $t['tatto_staff']; ?></td>
						<td><?php echo $t['tattoo_price']; ?></td>
						<td><?php echo $t['tattoo_style']; ?></td>
						<td><?php echo $t['tattoo_image']; ?></td>
						<td><?php echo $t['category']; ?></td>
						<td><?php echo $t['sub_category']; ?></td>
						<td><?php echo $t['color']; ?></td>
						<td><?php echo $t['size']; ?></td>
						<td><?php echo $t['user_id']; ?></td>
						<td><?php echo $t['is_deleted']; ?></td>
						<td><?php echo $t['tattoo_description']; ?></td>
						<td>
                            <a href="<?php echo site_url('tbl_studio_tattoo/edit/'.$t['id']); ?>" class="btn btn-info btn-xs"><span class="fa fa-pencil"></span> Edit</a> 
                            <a href="<?php echo site_url('tbl_studio_tattoo/remove/'.$t['id']); ?>" class="btn btn-danger btn-xs"><span class="fa fa-trash"></span> Delete</a>
                        </td>
                    </tr>
                    <?php } ?>
                </table>
                                
            </div>
        </div>
    </div>
</div>
