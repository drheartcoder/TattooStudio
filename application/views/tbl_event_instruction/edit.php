<div class="row">
    <div class="col-md-12">
      	<div class="box box-info">
            <div class="box-header with-border">
              	<h3 class="box-title">Tbl Event Instruction Edit</h3>
            </div>
			<?php echo form_open('tbl_event_instruction/edit/'.$tbl_event_instruction['event_instructions_id']); ?>
			<div class="box-body">
				<div class="row clearfix">
					<div class="col-md-6">
						<label for="fk_business_id" class="control-label">Fk Business Id</label>
						<div class="form-group">
							<input type="text" name="fk_business_id" value="<?php echo ($this->input->post('fk_business_id') ? $this->input->post('fk_business_id') : $tbl_event_instruction['fk_business_id']); ?>" class="form-control" id="fk_business_id" />
						</div>
					</div>
					<div class="col-md-6">
						<label for="fk_service_menu_id" class="control-label">Fk Service Menu Id</label>
						<div class="form-group">
							<input type="text" name="fk_service_menu_id" value="<?php echo ($this->input->post('fk_service_menu_id') ? $this->input->post('fk_service_menu_id') : $tbl_event_instruction['fk_service_menu_id']); ?>" class="form-control" id="fk_service_menu_id" />
						</div>
					</div>
					<div class="col-md-6">
						<label for="instruction_name" class="control-label">Instruction Name</label>
						<div class="form-group">
							<input type="text" name="instruction_name" value="<?php echo ($this->input->post('instruction_name') ? $this->input->post('instruction_name') : $tbl_event_instruction['instruction_name']); ?>" class="form-control" id="instruction_name" />
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