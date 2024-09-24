<div class="row">
    <div class="col-md-12">
        <div class="box">
            <div class="box-header">
                <h3 class="box-title">Tbl Event Instructions Listing</h3>
            	<div class="box-tools">
                    <a href="<?php echo site_url('tbl_event_instruction/add'); ?>" class="btn btn-success btn-sm">Add</a> 
                </div>
            </div>
            <div class="box-body">
                <table class="table table-striped">
                    <tr>
						<th>Event Instructions Id</th>
						<th>Fk Business Id</th>
						<th>Fk Service Menu Id</th>
						<th>Instruction Name</th>
						<th>Actions</th>
                    </tr>
                    <?php foreach($tbl_event_instructions as $t){ ?>
                    <tr>
						<td><?php echo $t['event_instructions_id']; ?></td>
						<td><?php echo $t['fk_business_id']; ?></td>
						<td><?php echo $t['fk_service_menu_id']; ?></td>
						<td><?php echo $t['instruction_name']; ?></td>
						<td>
                            <a href="<?php echo site_url('tbl_event_instruction/edit/'.$t['event_instructions_id']); ?>" class="btn btn-info btn-xs"><span class="fa fa-pencil"></span> Edit</a> 
                            <a href="<?php echo site_url('tbl_event_instruction/remove/'.$t['event_instructions_id']); ?>" class="btn btn-danger btn-xs"><span class="fa fa-trash"></span> Delete</a>
                        </td>
                    </tr>
                    <?php } ?>
                </table>
                                
            </div>
        </div>
    </div>
</div>
