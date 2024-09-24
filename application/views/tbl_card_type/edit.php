<div class="row">
    <div class="col-md-12">
      	<div class="box box-info">
            <div class="box-header with-border">
              	<h3 class="box-title">Tbl Card Type Edit</h3>
            </div>
			<?php echo form_open('tbl_card_type/edit/'.$tbl_card_type['id']); ?>
			<div class="box-body">
				<div class="row clearfix">
					<div class="col-md-6">
						<label for="card_type" class="control-label">Card Type</label>
						<div class="form-group">
							<input type="text" name="card_type" value="<?php echo ($this->input->post('card_type') ? $this->input->post('card_type') : $tbl_card_type['card_type']); ?>" class="form-control" id="card_type" />
						</div>
					</div>
					<div class="col-md-6">
						<label for="card_logo" class="control-label">Card Logo</label>
						<div class="form-group">
							<input type="text" name="card_logo" value="<?php echo ($this->input->post('card_logo') ? $this->input->post('card_logo') : $tbl_card_type['card_logo']); ?>" class="form-control" id="card_logo" />
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