<div class="row">
    <div class="col-md-12">
        <div class="box">
            <div class="box-header">
                <h3 class="box-title">Tbl Businessuser Promocode Listing</h3>
            	<div class="box-tools">
                    <a href="<?php echo site_url('tbl_businessuser_promocode/add'); ?>" class="btn btn-success btn-sm">Add</a> 
                </div>
            </div>
            <div class="box-body">
                <table class="table table-striped">
                    <tr>
						<th>Promo Id</th>
						<th>Business Id</th>
						<th>Promo Code</th>
						<th>Promo Nickname</th>
						<th>Promo Discount</th>
						<th>Discount Type</th>
						<th>Promo Start Date</th>
						<th>Promo End Date</th>
						<th>One Use</th>
						<th>New Client</th>
						<th>Promo Location</th>
						<th>Promo Staff</th>
						<th>Promo Services</th>
						<th>Promocode Status</th>
						<th>Fk User Id</th>
						<th>Actions</th>
                    </tr>
                    <?php foreach($tbl_businessuser_promocode as $t){ ?>
                    <tr>
						<td><?php echo $t['promo_id']; ?></td>
						<td><?php echo $t['business_id']; ?></td>
						<td><?php echo $t['promo_code']; ?></td>
						<td><?php echo $t['promo_nickname']; ?></td>
						<td><?php echo $t['promo_discount']; ?></td>
						<td><?php echo $t['discount_type']; ?></td>
						<td><?php echo $t['promo_start_date']; ?></td>
						<td><?php echo $t['promo_end_date']; ?></td>
						<td><?php echo $t['one_use']; ?></td>
						<td><?php echo $t['new_client']; ?></td>
						<td><?php echo $t['promo_location']; ?></td>
						<td><?php echo $t['promo_staff']; ?></td>
						<td><?php echo $t['promo_services']; ?></td>
						<td><?php echo $t['promocode_status']; ?></td>
						<td><?php echo $t['fk_user_id']; ?></td>
						<td>
                            <a href="<?php echo site_url('tbl_businessuser_promocode/edit/'.$t['promo_id']); ?>" class="btn btn-info btn-xs"><span class="fa fa-pencil"></span> Edit</a> 
                            <a href="<?php echo site_url('tbl_businessuser_promocode/remove/'.$t['promo_id']); ?>" class="btn btn-danger btn-xs"><span class="fa fa-trash"></span> Delete</a>
                        </td>
                    </tr>
                    <?php } ?>
                </table>
                                
            </div>
        </div>
    </div>
</div>
