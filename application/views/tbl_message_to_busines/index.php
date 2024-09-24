<div class="row">
    <div class="col-md-12">
        <div class="box">
            <div class="box-header">
                <h3 class="box-title">Tbl Message To Business Listing</h3>
            	<div class="box-tools">
                    <a href="<?php echo site_url('tbl_message_to_busines/add'); ?>" class="btn btn-success btn-sm">Add</a> 
                </div>
            </div>
            <div class="box-body">
                <table class="table table-striped">
                    <tr>
						<th>Message Id</th>
						<th>Fk Business Id</th>
						<th>Email Id</th>
						<th>Message</th>
						<th>Actions</th>
                    </tr>
                    <?php foreach($tbl_message_to_business as $t){ ?>
                    <tr>
						<td><?php echo $t['message_id']; ?></td>
						<td><?php echo $t['fk_business_id']; ?></td>
						<td><?php echo $t['email_id']; ?></td>
						<td><?php echo $t['message']; ?></td>
						<td>
                            <a href="<?php echo site_url('tbl_message_to_busines/edit/'.$t['message_id']); ?>" class="btn btn-info btn-xs"><span class="fa fa-pencil"></span> Edit</a> 
                            <a href="<?php echo site_url('tbl_message_to_busines/remove/'.$t['message_id']); ?>" class="btn btn-danger btn-xs"><span class="fa fa-trash"></span> Delete</a>
                        </td>
                    </tr>
                    <?php } ?>
                </table>
                                
            </div>
        </div>
    </div>
</div>
