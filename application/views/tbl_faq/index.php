<div class="row">
    <div class="col-md-12">
        <div class="box">
            <div class="box-header">
                <h3 class="box-title">Tbl Faq Listing</h3>
            	<div class="box-tools">
                    <a href="<?php echo site_url('tbl_faq/add'); ?>" class="btn btn-success btn-sm">Add</a> 
                </div>
            </div>
            <div class="box-body">
                <table class="table table-striped">
                    <tr>
						<th>Faq Id</th>
						<th>Faq Type</th>
						<th>Fk Faq Category Id</th>
						<th>Faq Question</th>
						<th>Faq Status</th>
						<th>Faq Answer</th>
						<th>Actions</th>
                    </tr>
                    <?php foreach($tbl_faq as $t){ ?>
                    <tr>
						<td><?php echo $t['faq_id']; ?></td>
						<td><?php echo $t['faq_type']; ?></td>
						<td><?php echo $t['fk_faq_category_id']; ?></td>
						<td><?php echo $t['faq_question']; ?></td>
						<td><?php echo $t['faq_status']; ?></td>
						<td><?php echo $t['faq_answer']; ?></td>
						<td>
                            <a href="<?php echo site_url('tbl_faq/edit/'.$t['faq_id']); ?>" class="btn btn-info btn-xs"><span class="fa fa-pencil"></span> Edit</a> 
                            <a href="<?php echo site_url('tbl_faq/remove/'.$t['faq_id']); ?>" class="btn btn-danger btn-xs"><span class="fa fa-trash"></span> Delete</a>
                        </td>
                    </tr>
                    <?php } ?>
                </table>
                                
            </div>
        </div>
    </div>
</div>
