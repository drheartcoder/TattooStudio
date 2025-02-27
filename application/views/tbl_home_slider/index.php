<div class="row">
    <div class="col-md-12">
        <div class="box">
            <div class="box-header">
                <h3 class="box-title">Tbl Home Slider Listing</h3>
            	<div class="box-tools">
                    <a href="<?php echo site_url('tbl_home_slider/add'); ?>" class="btn btn-success btn-sm">Add</a> 
                </div>
            </div>
            <div class="box-body">
                <table class="table table-striped">
                    <tr>
						<th>Slider Id</th>
						<th>Slider Image</th>
						<th>Slider Link</th>
						<th>Status</th>
						<th>Actions</th>
                    </tr>
                    <?php foreach($tbl_home_slider as $t){ ?>
                    <tr>
						<td><?php echo $t['slider_id']; ?></td>
						<td><?php echo $t['slider_image']; ?></td>
						<td><?php echo $t['slider_link']; ?></td>
						<td><?php echo $t['status']; ?></td>
						<td>
                            <a href="<?php echo site_url('tbl_home_slider/edit/'.$t['slider_id']); ?>" class="btn btn-info btn-xs"><span class="fa fa-pencil"></span> Edit</a> 
                            <a href="<?php echo site_url('tbl_home_slider/remove/'.$t['slider_id']); ?>" class="btn btn-danger btn-xs"><span class="fa fa-trash"></span> Delete</a>
                        </td>
                    </tr>
                    <?php } ?>
                </table>
                                
            </div>
        </div>
    </div>
</div>
