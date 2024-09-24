<div class="row">
    <div class="col-md-12">
        <div class="box">
            <div class="box-header">
                <h3 class="box-title">Tbl Testimonials Listing</h3>
            	<div class="box-tools">
                    <a href="<?php echo site_url('tbl_testimonial/add'); ?>" class="btn btn-success btn-sm">Add</a> 
                </div>
            </div>
            <div class="box-body">
                <table class="table table-striped">
                    <tr>
						<th>Testimony Id</th>
						<th>Title</th>
						<th>Address</th>
						<th>Status</th>
						<th>Image</th>
						<th>Name</th>
						<th>Desc</th>
						<th>Actions</th>
                    </tr>
                    <?php foreach($tbl_testimonials as $t){ ?>
                    <tr>
						<td><?php echo $t['testimony_id']; ?></td>
						<td><?php echo $t['title']; ?></td>
						<td><?php echo $t['address']; ?></td>
						<td><?php echo $t['status']; ?></td>
						<td><?php echo $t['image']; ?></td>
						<td><?php echo $t['name']; ?></td>
						<td><?php echo $t['desc']; ?></td>
						<td>
                            <a href="<?php echo site_url('tbl_testimonial/edit/'.$t['testimony_id']); ?>" class="btn btn-info btn-xs"><span class="fa fa-pencil"></span> Edit</a> 
                            <a href="<?php echo site_url('tbl_testimonial/remove/'.$t['testimony_id']); ?>" class="btn btn-danger btn-xs"><span class="fa fa-trash"></span> Delete</a>
                        </td>
                    </tr>
                    <?php } ?>
                </table>
                                
            </div>
        </div>
    </div>
</div>
