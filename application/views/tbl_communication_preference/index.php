<div class="row">
    <div class="col-md-12">
        <div class="box">
            <div class="box-header">
                <h3 class="box-title">Tbl Communication Preferences Listing</h3>
            	<div class="box-tools">
                    <a href="<?php echo site_url('tbl_communication_preference/add'); ?>" class="btn btn-success btn-sm">Add</a> 
                </div>
            </div>
            <div class="box-body">
                <table class="table table-striped">
                    <tr>
						<th>Communication Preferences Id</th>
						<th>Fk User Id</th>
						<th>Receive Product Announcements</th>
						<th>Email</th>
						<th>Sms</th>
						<th>Actions</th>
                    </tr>
                    <?php foreach($tbl_communication_preferences as $t){ ?>
                    <tr>
						<td><?php echo $t['communication_preferences_id']; ?></td>
						<td><?php echo $t['fk_user_id']; ?></td>
						<td><?php echo $t['receive_product_announcements']; ?></td>
						<td><?php echo $t['email']; ?></td>
						<td><?php echo $t['sms']; ?></td>
						<td>
                            <a href="<?php echo site_url('tbl_communication_preference/edit/'.$t['communication_preferences_id']); ?>" class="btn btn-info btn-xs"><span class="fa fa-pencil"></span> Edit</a> 
                            <a href="<?php echo site_url('tbl_communication_preference/remove/'.$t['communication_preferences_id']); ?>" class="btn btn-danger btn-xs"><span class="fa fa-trash"></span> Delete</a>
                        </td>
                    </tr>
                    <?php } ?>
                </table>
                                
            </div>
        </div>
    </div>
</div>
