<div class="row">
    <div class="col-md-12">
        <div class="box">
            <div class="box-header">
                <h3 class="box-title">Tbl Services Menu Listing</h3>
            	<div class="box-tools">
                    <a href="<?php echo site_url('tbl_services_menu/add'); ?>" class="btn btn-success btn-sm">Add</a> 
                </div>
            </div>
            <div class="box-body">
                <table class="table table-striped">
                    <tr>
						<th>Service Menu Id</th>
						<th>Regular Price Exisiting</th>
						<th>Is Offpeak Time</th>
						<th>Offpeak Type</th>
						<th>Offpeak Price New</th>
						<th>Offpeak Price Exisiting</th>
						<th>Offpeak Times</th>
						<th>Pause Status</th>
						<th>Is Setup</th>
						<th>Time Slot Type</th>
						<th>Is Delete</th>
						<th>Service Type</th>
						<th>Service Start Date</th>
						<th>Service End Date</th>
						<th>Fk Business Id</th>
						<th>Fk Category Id</th>
						<th>Fk Subcat Id</th>
						<th>Service Index</th>
						<th>Service Name</th>
						<th>Service Cat Name</th>
						<th>Service Duration</th>
						<th>Service Capacity</th>
						<th>Regular Price New</th>
						<th>Service Style</th>
						<th>Service Color</th>
						<th>Service Size</th>
						<th>Service Status</th>
						<th>Service Description</th>
						<th>Questions Answers</th>
						<th>Offered By</th>
						<th>Actions</th>
                    </tr>
                    <?php foreach($tbl_services_menu as $t){ ?>
                    <tr>
						<td><?php echo $t['service_menu_id']; ?></td>
						<td><?php echo $t['regular_price_exisiting']; ?></td>
						<td><?php echo $t['is_offpeak_time']; ?></td>
						<td><?php echo $t['offpeak_type']; ?></td>
						<td><?php echo $t['offpeak_price_new']; ?></td>
						<td><?php echo $t['offpeak_price_exisiting']; ?></td>
						<td><?php echo $t['offpeak_times']; ?></td>
						<td><?php echo $t['pause_status']; ?></td>
						<td><?php echo $t['is_setup']; ?></td>
						<td><?php echo $t['time_slot_type']; ?></td>
						<td><?php echo $t['is_delete']; ?></td>
						<td><?php echo $t['service_type']; ?></td>
						<td><?php echo $t['service_start_date']; ?></td>
						<td><?php echo $t['service_end_date']; ?></td>
						<td><?php echo $t['fk_business_id']; ?></td>
						<td><?php echo $t['fk_category_id']; ?></td>
						<td><?php echo $t['fk_subcat_id']; ?></td>
						<td><?php echo $t['service_index']; ?></td>
						<td><?php echo $t['service_name']; ?></td>
						<td><?php echo $t['service_cat_name']; ?></td>
						<td><?php echo $t['service_duration']; ?></td>
						<td><?php echo $t['service_capacity']; ?></td>
						<td><?php echo $t['regular_price_new']; ?></td>
						<td><?php echo $t['service_style']; ?></td>
						<td><?php echo $t['service_color']; ?></td>
						<td><?php echo $t['service_size']; ?></td>
						<td><?php echo $t['service_status']; ?></td>
						<td><?php echo $t['service_description']; ?></td>
						<td><?php echo $t['questions_answers']; ?></td>
						<td><?php echo $t['offered_by']; ?></td>
						<td>
                            <a href="<?php echo site_url('tbl_services_menu/edit/'.$t['service_menu_id']); ?>" class="btn btn-info btn-xs"><span class="fa fa-pencil"></span> Edit</a> 
                            <a href="<?php echo site_url('tbl_services_menu/remove/'.$t['service_menu_id']); ?>" class="btn btn-danger btn-xs"><span class="fa fa-trash"></span> Delete</a>
                        </td>
                    </tr>
                    <?php } ?>
                </table>
                                
            </div>
        </div>
    </div>
</div>
