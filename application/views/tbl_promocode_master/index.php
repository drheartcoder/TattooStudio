<div class="row">
    <div class="col-md-12">
        <div class="box">
            <div class="box-header">
                <h3 class="box-title">Tbl Promocode Master Listing</h3>
            	<div class="box-tools">
                    <a href="<?php echo site_url('tbl_promocode_master/add'); ?>" class="btn btn-success btn-sm">Add</a> 
                </div>
            </div>
            <div class="box-body">
                <table class="table table-striped">
                    <tr>
						<th>Promo Id</th>
						<th>Promo Code</th>
						<th>Promo Discount</th>
						<th>Promo Exp Date</th>
						<th>Actions</th>
                    </tr>
                    <?php foreach($tbl_promocode_master as $t){ ?>
                    <tr>
						<td><?php echo $t['promo_id']; ?></td>
						<td><?php echo $t['promo_code']; ?></td>
						<td><?php echo $t['promo_discount']; ?></td>
						<td><?php echo $t['promo_exp_date']; ?></td>
						<td>
                            <a href="<?php echo site_url('tbl_promocode_master/edit/'.$t['promo_id']); ?>" class="btn btn-info btn-xs"><span class="fa fa-pencil"></span> Edit</a> 
                            <a href="<?php echo site_url('tbl_promocode_master/remove/'.$t['promo_id']); ?>" class="btn btn-danger btn-xs"><span class="fa fa-trash"></span> Delete</a>
                        </td>
                    </tr>
                    <?php } ?>
                </table>
                                
            </div>
        </div>
    </div>
</div>
