<div class="row">
    <div class="col-md-12">
        <div class="box">
            <div class="box-header">
                <h3 class="box-title">Tbl Business Photos Listing</h3>
            	<div class="box-tools">
                    <a href="<?php echo site_url('tbl_business_photo/add'); ?>" class="btn btn-success btn-sm">Add</a> 
                </div>
            </div>
            <div class="box-body">
                <table class="table table-striped">
                    <tr>
						<th>Photo Id</th>
						<th>Fk Business Id</th>
						<th>Name</th>
						<th>Photo Name</th>
						<th>Actions</th>
                    </tr>
                    <?php foreach($tbl_business_photos as $t){ ?>
                    <tr>
						<td><?php echo $t['photo_id']; ?></td>
						<td><?php echo $t['fk_business_id']; ?></td>
						<td><?php echo $t['name']; ?></td>
						<td><?php echo $t['photo_name']; ?></td>
						<td>
                            <a href="<?php echo site_url('tbl_business_photo/edit/'.$t['photo_id']); ?>" class="btn btn-info btn-xs"><span class="fa fa-pencil"></span> Edit</a> 
                            <a href="<?php echo site_url('tbl_business_photo/remove/'.$t['photo_id']); ?>" class="btn btn-danger btn-xs"><span class="fa fa-trash"></span> Delete</a>
                        </td>
                    </tr>
                    <?php } ?>
                </table>
                                
            </div>
        </div>
    </div>
</div>
