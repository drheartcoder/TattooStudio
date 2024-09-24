<div class="row">
    <div class="col-md-12">
        <div class="box">
            <div class="box-header">
                <h3 class="box-title">Tbl Chat Listing</h3>
            	<div class="box-tools">
                    <a href="<?php echo site_url('tbl_chat/add'); ?>" class="btn btn-success btn-sm">Add</a> 
                </div>
            </div>
            <div class="box-body">
                <table class="table table-striped">
                    <tr>
						<th>ID</th>
						<th>Sender Id</th>
						<th>Receiver Id</th>
						<th>Is Read</th>
						<th>Created At</th>
						<th>Message</th>
						<th>Actions</th>
                    </tr>
                    <?php foreach($tbl_chat as $t){ ?>
                    <tr>
						<td><?php echo $t['id']; ?></td>
						<td><?php echo $t['sender_id']; ?></td>
						<td><?php echo $t['receiver_id']; ?></td>
						<td><?php echo $t['is_read']; ?></td>
						<td><?php echo $t['created_at']; ?></td>
						<td><?php echo $t['message']; ?></td>
						<td>
                            <a href="<?php echo site_url('tbl_chat/edit/'.$t['id']); ?>" class="btn btn-info btn-xs"><span class="fa fa-pencil"></span> Edit</a> 
                            <a href="<?php echo site_url('tbl_chat/remove/'.$t['id']); ?>" class="btn btn-danger btn-xs"><span class="fa fa-trash"></span> Delete</a>
                        </td>
                    </tr>
                    <?php } ?>
                </table>
                                
            </div>
        </div>
    </div>
</div>
