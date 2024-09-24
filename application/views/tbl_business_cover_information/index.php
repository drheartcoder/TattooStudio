<div class="row">
    <div class="col-md-12">
        <div class="box">
            <div class="box-header">
                <h3 class="box-title">Tbl Business Cover Information Listing</h3>
            	<div class="box-tools">
                    <a href="<?php echo site_url('tbl_business_cover_information/add'); ?>" class="btn btn-success btn-sm">Add</a> 
                </div>
            </div>
            <div class="box-body">
                <table class="table table-striped">
                    <tr>
						<th>Cover Id</th>
						<th>Fk Business Id</th>
						<th>Cover Photo</th>
						<th>Text One</th>
						<th>Text Two</th>
						<th>Text Three</th>
						<th>Actions</th>
                    </tr>
                    <?php foreach($tbl_business_cover_information as $t){ ?>
                    <tr>
						<td><?php echo $t['cover_id']; ?></td>
						<td><?php echo $t['fk_business_id']; ?></td>
						<td><?php echo $t['cover_photo']; ?></td>
						<td><?php echo $t['text_one']; ?></td>
						<td><?php echo $t['text_two']; ?></td>
						<td><?php echo $t['text_three']; ?></td>
						<td>
                            <a href="<?php echo site_url('tbl_business_cover_information/edit/'.$t['']); ?>" class="btn btn-info btn-xs"><span class="fa fa-pencil"></span> Edit</a> 
                            <a href="<?php echo site_url('tbl_business_cover_information/remove/'.$t['']); ?>" class="btn btn-danger btn-xs"><span class="fa fa-trash"></span> Delete</a>
                        </td>
                    </tr>
                    <?php } ?>
                </table>
                                
            </div>
        </div>
    </div>
</div>
