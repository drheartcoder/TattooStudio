<div class="row">
    <div class="col-md-12">
      	<div class="box box-info">
            <div class="box-header with-border">
              	<h3 class="box-title">Tbl Promocode Master Add</h3>
            </div>
            <?php echo form_open('tbl_promocode_master/add'); ?>
          	<div class="box-body">
          		<div class="row clearfix">
					<div class="col-md-6">
						<label for="promo_code" class="control-label">Promo Code</label>
						<div class="form-group">
							<input type="text" name="promo_code" value="<?php echo $this->input->post('promo_code'); ?>" class="form-control" id="promo_code" />
						</div>
					</div>
					<div class="col-md-6">
						<label for="promo_discount" class="control-label">Promo Discount</label>
						<div class="form-group">
							<input type="text" name="promo_discount" value="<?php echo $this->input->post('promo_discount'); ?>" class="form-control" id="promo_discount" />
						</div>
					</div>
					<div class="col-md-6">
						<label for="promo_exp_date" class="control-label">Promo Exp Date</label>
						<div class="form-group">
							<input type="text" name="promo_exp_date" value="<?php echo $this->input->post('promo_exp_date'); ?>" class="form-control" id="promo_exp_date" />
						</div>
					</div>
				</div>
			</div>
          	<div class="box-footer">
            	<button type="submit" class="btn btn-success">
            		<i class="fa fa-check"></i> Save
            	</button>
          	</div>
            <?php echo form_close(); ?>
      	</div>
    </div>
</div>