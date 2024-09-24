<div class="row">
    <div class="col-md-12">
        <div class="box">
            <div class="box-header">
                <h3 class="box-title">Tbl Walkin Users Listing</h3>
            	<div class="box-tools">
                    <a href="<?php echo site_url('tbl_walkin_user/add'); ?>" class="btn btn-success btn-sm">Add</a> 
                </div>
            </div>
            <div class="box-body">
                <table class="table table-striped">
                    <tr>
						<th>ID</th>
						<th>Business Id</th>
						<th>First Name</th>
						<th>Last Name</th>
						<th>Email Id</th>
						<th>Mobile No</th>
						<th>Address</th>
						<th>Reg Date</th>
						<th>Actions</th>
                    </tr>
                    <?php foreach($tbl_walkin_users as $t){ ?>
                    <tr>
						<td><?php echo $t['id']; ?></td>
						<td><?php echo $t['business_id']; ?></td>
						<td><?php echo $t['first_name']; ?></td>
						<td><?php echo $t['last_name']; ?></td>
						<td><?php echo $t['email_id']; ?></td>
						<td><?php echo $t['mobile_no']; ?></td>
						<td><?php echo $t['address']; ?></td>
						<td><?php echo $t['reg_date']; ?></td>
						<td>
                            <a href="<?php echo site_url('tbl_walkin_user/edit/'.$t['id']); ?>" class="btn btn-info btn-xs"><span class="fa fa-pencil"></span> Edit</a> 
                            <a href="<?php echo site_url('tbl_walkin_user/remove/'.$t['id']); ?>" class="btn btn-danger btn-xs"><span class="fa fa-trash"></span> Delete</a>
                        </td>
                    </tr>
                    <?php } ?>
                </table>
                                
            </div>
        </div>
    </div>
</div>
