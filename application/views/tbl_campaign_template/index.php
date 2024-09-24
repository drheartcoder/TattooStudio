<div class="row">
    <div class="col-md-12">
        <div class="box">
            <div class="box-header">
                <h3 class="box-title">Tbl Campaign Templates Listing</h3>
            	<div class="box-tools">
                    <a href="<?php echo site_url('tbl_campaign_template/add'); ?>" class="btn btn-success btn-sm">Add</a> 
                </div>
            </div>
            <div class="box-body">
                <table class="table table-striped">
                    <tr>
						<th>Template Id</th>
						<th>Campaign Id</th>
						<th>Fk Business Id</th>
						<th>Template Name</th>
						<th>Category</th>
						<th>Subject</th>
						<th>Reply To Name</th>
						<th>Reply To Email</th>
						<th>Message Body</th>
						<th>Actions</th>
                    </tr>
                    <?php foreach($tbl_campaign_templates as $t){ ?>
                    <tr>
						<td><?php echo $t['template_id']; ?></td>
						<td><?php echo $t['campaign_id']; ?></td>
						<td><?php echo $t['fk_business_id']; ?></td>
						<td><?php echo $t['template_name']; ?></td>
						<td><?php echo $t['category']; ?></td>
						<td><?php echo $t['subject']; ?></td>
						<td><?php echo $t['reply_to_name']; ?></td>
						<td><?php echo $t['reply_to_email']; ?></td>
						<td><?php echo $t['message_body']; ?></td>
						<td>
                            <a href="<?php echo site_url('tbl_campaign_template/edit/'.$t['template_id']); ?>" class="btn btn-info btn-xs"><span class="fa fa-pencil"></span> Edit</a> 
                            <a href="<?php echo site_url('tbl_campaign_template/remove/'.$t['template_id']); ?>" class="btn btn-danger btn-xs"><span class="fa fa-trash"></span> Delete</a>
                        </td>
                    </tr>
                    <?php } ?>
                </table>
                                
            </div>
        </div>
    </div>
</div>
