<div class="row">
    <div class="col-md-12">
        <div class="box">
            <div class="box-header">
                <h3 class="box-title">Tbl Campaign Default Listing</h3>
            	<div class="box-tools">
                    <a href="<?php echo site_url('tbl_campaign_default/add'); ?>" class="btn btn-success btn-sm">Add</a> 
                </div>
            </div>
            <div class="box-body">
                <table class="table table-striped">
                    <tr>
						<th>Campaign Id</th>
						<th>Category</th>
						<th>Campaign Name</th>
						<th>Sub Title</th>
						<th>Subject Default</th>
						<th>Campaign Body</th>
						<th>Actions</th>
                    </tr>
                    <?php foreach($tbl_campaign_default as $t){ ?>
                    <tr>
						<td><?php echo $t['campaign_id']; ?></td>
						<td><?php echo $t['category']; ?></td>
						<td><?php echo $t['campaign_name']; ?></td>
						<td><?php echo $t['sub_title']; ?></td>
						<td><?php echo $t['subject_default']; ?></td>
						<td><?php echo $t['campaign_body']; ?></td>
						<td>
                            <a href="<?php echo site_url('tbl_campaign_default/edit/'.$t['campaign_id']); ?>" class="btn btn-info btn-xs"><span class="fa fa-pencil"></span> Edit</a> 
                            <a href="<?php echo site_url('tbl_campaign_default/remove/'.$t['campaign_id']); ?>" class="btn btn-danger btn-xs"><span class="fa fa-trash"></span> Delete</a>
                        </td>
                    </tr>
                    <?php } ?>
                </table>
                                
            </div>
        </div>
    </div>
</div>
