<div class="row">
    <div class="col-md-12">
      	<div class="box box-info">
            <div class="box-header with-border">
              	<h3 class="box-title">Tbl Cancel And Refund Add</h3>
            </div>
            <?php echo form_open('tbl_cancel_and_refund/add'); ?>
          	<div class="box-body">
          		<div class="row clearfix">
					<div class="col-md-6">
						<label for="fk_business_id" class="control-label">Fk Business Id</label>
						<div class="form-group">
							<input type="text" name="fk_business_id" value="<?php echo $this->input->post('fk_business_id'); ?>" class="form-control" id="fk_business_id" />
						</div>
					</div>
					<div class="col-md-6">
						<label for="fk_business_user_id" class="control-label">Fk Business User Id</label>
						<div class="form-group">
							<input type="text" name="fk_business_user_id" value="<?php echo $this->input->post('fk_business_user_id'); ?>" class="form-control" id="fk_business_user_id" />
						</div>
					</div>
					<div class="col-md-6">
						<label for="fk_user_id" class="control-label">Fk User Id</label>
						<div class="form-group">
							<input type="text" name="fk_user_id" value="<?php echo $this->input->post('fk_user_id'); ?>" class="form-control" id="fk_user_id" />
						</div>
					</div>
					<div class="col-md-6">
						<label for="fk_cancel_appointment_id" class="control-label">Fk Cancel Appointment Id</label>
						<div class="form-group">
							<input type="text" name="fk_cancel_appointment_id" value="<?php echo $this->input->post('fk_cancel_appointment_id'); ?>" class="form-control" id="fk_cancel_appointment_id" />
						</div>
					</div>
					<div class="col-md-6">
						<label for="refund_amount" class="control-label">Refund Amount</label>
						<div class="form-group">
							<input type="text" name="refund_amount" value="<?php echo $this->input->post('refund_amount'); ?>" class="form-control" id="refund_amount" />
						</div>
					</div>
					<div class="col-md-6">
						<label for="is_refund" class="control-label">Is Refund</label>
						<div class="form-group">
							<input type="text" name="is_refund" value="<?php echo $this->input->post('is_refund'); ?>" class="form-control" id="is_refund" />
						</div>
					</div>
					<div class="col-md-6">
						<label for="cancel_date" class="control-label">Cancel Date</label>
						<div class="form-group">
							<input type="text" name="cancel_date" value="<?php echo $this->input->post('cancel_date'); ?>" class="has-datetimepicker form-control" id="cancel_date" />
						</div>
					</div>
					<div class="col-md-6">
						<label for="refund_done_date" class="control-label">Refund Done Date</label>
						<div class="form-group">
							<textarea name="refund_done_date" class="form-control" id="refund_done_date"><?php echo $this->input->post('refund_done_date'); ?></textarea>
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