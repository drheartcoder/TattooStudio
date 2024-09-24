<div class="row">
    <div class="col-md-12">
        <div class="box">
            <div class="box-header">
                <h3 class="box-title">Admin Login Listing</h3>
            	<div class="box-tools">
                    <a href="<?php echo site_url('admin_login/add'); ?>" class="btn btn-success btn-sm">Add</a> 
                </div>
            </div>
            <div class="box-body">
                <table class="table table-striped">
                    <tr>
						<th>ID</th>
						<th>Admin Password</th>
						<th>Admin Username</th>
						<th>First Name</th>
						<th>Last Name</th>
						<th>Admin Email</th>
						<th>Admin Contactus</th>
						<th>Admin Fax</th>
						<th>Site Status</th>
						<th>Admin Address2</th>
						<th>Admin Address3</th>
						<th>Admin Country</th>
						<th>Admin State</th>
						<th>Admin City</th>
						<th>Admin Postcode</th>
						<th>Profile Picture</th>
						<th>Admin Address</th>
						<th>Actions</th>
                    </tr>
                    <?php foreach($admin_login as $a){ ?>
                    <tr>
						<td><?php echo $a['id']; ?></td>
						<td><?php echo $a['admin_password']; ?></td>
						<td><?php echo $a['admin_username']; ?></td>
						<td><?php echo $a['first_name']; ?></td>
						<td><?php echo $a['last_name']; ?></td>
						<td><?php echo $a['admin_email']; ?></td>
						<td><?php echo $a['admin_contactus']; ?></td>
						<td><?php echo $a['admin_fax']; ?></td>
						<td><?php echo $a['site_status']; ?></td>
						<td><?php echo $a['admin_address2']; ?></td>
						<td><?php echo $a['admin_address3']; ?></td>
						<td><?php echo $a['admin_country']; ?></td>
						<td><?php echo $a['admin_state']; ?></td>
						<td><?php echo $a['admin_city']; ?></td>
						<td><?php echo $a['admin_postcode']; ?></td>
						<td><?php echo $a['profile_picture']; ?></td>
						<td><?php echo $a['admin_address']; ?></td>
						<td>
                            <a href="<?php echo site_url('admin_login/edit/'.$a['id']); ?>" class="btn btn-info btn-xs"><span class="fa fa-pencil"></span> Edit</a> 
                            <a href="<?php echo site_url('admin_login/remove/'.$a['id']); ?>" class="btn btn-danger btn-xs"><span class="fa fa-trash"></span> Delete</a>
                        </td>
                    </tr>
                    <?php } ?>
                </table>
                                
            </div>
        </div>
    </div>
</div>
