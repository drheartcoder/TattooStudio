<div class="row">
    <div class="col-md-12">
      	<div class="box box-info">
            <div class="box-header with-border">
              	<h3 class="box-title">Tbl Business Information Edit</h3>
            </div>
			<?php echo form_open('tbl_business_information/edit/'.$tbl_business_information['business_id']); ?>
			<div class="box-body">
				<div class="row clearfix">
					<div class="col-md-6">
						<label for="fk_user_id" class="control-label">Fk User Id</label>
						<div class="form-group">
							<input type="text" name="fk_user_id" value="<?php echo ($this->input->post('fk_user_id') ? $this->input->post('fk_user_id') : $tbl_business_information['fk_user_id']); ?>" class="form-control" id="fk_user_id" />
						</div>
					</div>
					<div class="col-md-6">
						<label for="contact_way" class="control-label">Contact Way</label>
						<div class="form-group">
							<input type="text" name="contact_way" value="<?php echo ($this->input->post('contact_way') ? $this->input->post('contact_way') : $tbl_business_information['contact_way']); ?>" class="form-control" id="contact_way" />
						</div>
					</div>
					<div class="col-md-6">
						<label for="up_to_miles" class="control-label">Up To Miles</label>
						<div class="form-group">
							<input type="text" name="up_to_miles" value="<?php echo ($this->input->post('up_to_miles') ? $this->input->post('up_to_miles') : $tbl_business_information['up_to_miles']); ?>" class="form-control" id="up_to_miles" />
						</div>
					</div>
					<div class="col-md-6">
						<label for="business_name" class="control-label">Business Name</label>
						<div class="form-group">
							<input type="text" name="business_name" value="<?php echo ($this->input->post('business_name') ? $this->input->post('business_name') : $tbl_business_information['business_name']); ?>" class="form-control" id="business_name" />
						</div>
					</div>
					<div class="col-md-6">
						<label for="business_phone" class="control-label">Business Phone</label>
						<div class="form-group">
							<input type="text" name="business_phone" value="<?php echo ($this->input->post('business_phone') ? $this->input->post('business_phone') : $tbl_business_information['business_phone']); ?>" class="form-control" id="business_phone" />
						</div>
					</div>
					<div class="col-md-6">
						<label for="business_mobile" class="control-label">Business Mobile</label>
						<div class="form-group">
							<input type="text" name="business_mobile" value="<?php echo ($this->input->post('business_mobile') ? $this->input->post('business_mobile') : $tbl_business_information['business_mobile']); ?>" class="form-control" id="business_mobile" />
						</div>
					</div>
					<div class="col-md-6">
						<label for="business_logo" class="control-label">Business Logo</label>
						<div class="form-group">
							<input type="text" name="business_logo" value="<?php echo ($this->input->post('business_logo') ? $this->input->post('business_logo') : $tbl_business_information['business_logo']); ?>" class="form-control" id="business_logo" />
						</div>
					</div>
					<div class="col-md-6">
						<label for="website" class="control-label">Website</label>
						<div class="form-group">
							<input type="text" name="website" value="<?php echo ($this->input->post('website') ? $this->input->post('website') : $tbl_business_information['website']); ?>" class="form-control" id="website" />
						</div>
					</div>
					<div class="col-md-6">
						<label for="site_url" class="control-label">Site Url</label>
						<div class="form-group">
							<input type="text" name="site_url" value="<?php echo ($this->input->post('site_url') ? $this->input->post('site_url') : $tbl_business_information['site_url']); ?>" class="form-control" id="site_url" />
						</div>
					</div>
					<div class="col-md-6">
						<label for="facebook_link" class="control-label">Facebook Link</label>
						<div class="form-group">
							<input type="text" name="facebook_link" value="<?php echo ($this->input->post('facebook_link') ? $this->input->post('facebook_link') : $tbl_business_information['facebook_link']); ?>" class="form-control" id="facebook_link" />
						</div>
					</div>
					<div class="col-md-6">
						<label for="instagram_link" class="control-label">Instagram Link</label>
						<div class="form-group">
							<input type="text" name="instagram_link" value="<?php echo ($this->input->post('instagram_link') ? $this->input->post('instagram_link') : $tbl_business_information['instagram_link']); ?>" class="form-control" id="instagram_link" />
						</div>
					</div>
					<div class="col-md-6">
						<label for="twitter_link" class="control-label">Twitter Link</label>
						<div class="form-group">
							<input type="text" name="twitter_link" value="<?php echo ($this->input->post('twitter_link') ? $this->input->post('twitter_link') : $tbl_business_information['twitter_link']); ?>" class="form-control" id="twitter_link" />
						</div>
					</div>
					<div class="col-md-6">
						<label for="linkedin_link" class="control-label">Linkedin Link</label>
						<div class="form-group">
							<input type="text" name="linkedin_link" value="<?php echo ($this->input->post('linkedin_link') ? $this->input->post('linkedin_link') : $tbl_business_information['linkedin_link']); ?>" class="form-control" id="linkedin_link" />
						</div>
					</div>
					<div class="col-md-6">
						<label for="business_attraction" class="control-label">Business Attraction</label>
						<div class="form-group">
							<input type="text" name="business_attraction" value="<?php echo ($this->input->post('business_attraction') ? $this->input->post('business_attraction') : $tbl_business_information['business_attraction']); ?>" class="form-control" id="business_attraction" />
						</div>
					</div>
					<div class="col-md-6">
						<label for="business_competition" class="control-label">Business Competition</label>
						<div class="form-group">
							<input type="text" name="business_competition" value="<?php echo ($this->input->post('business_competition') ? $this->input->post('business_competition') : $tbl_business_information['business_competition']); ?>" class="form-control" id="business_competition" />
						</div>
					</div>
					<div class="col-md-6">
						<label for="training_info" class="control-label">Training Info</label>
						<div class="form-group">
							<input type="text" name="training_info" value="<?php echo ($this->input->post('training_info') ? $this->input->post('training_info') : $tbl_business_information['training_info']); ?>" class="form-control" id="training_info" />
						</div>
					</div>
					<div class="col-md-6">
						<label for="avg_rating" class="control-label">Avg Rating</label>
						<div class="form-group">
							<input type="text" name="avg_rating" value="<?php echo ($this->input->post('avg_rating') ? $this->input->post('avg_rating') : $tbl_business_information['avg_rating']); ?>" class="form-control" id="avg_rating" />
						</div>
					</div>
					<div class="col-md-6">
						<label for="accept_gift_cards" class="control-label">Accept Gift Cards</label>
						<div class="form-group">
							<input type="text" name="accept_gift_cards" value="<?php echo ($this->input->post('accept_gift_cards') ? $this->input->post('accept_gift_cards') : $tbl_business_information['accept_gift_cards']); ?>" class="form-control" id="accept_gift_cards" />
						</div>
					</div>
					<div class="col-md-6">
						<label for="business_email" class="control-label">Business Email</label>
						<div class="form-group">
							<input type="text" name="business_email" value="<?php echo ($this->input->post('business_email') ? $this->input->post('business_email') : $tbl_business_information['business_email']); ?>" class="form-control" id="business_email" />
						</div>
					</div>
					<div class="col-md-6">
						<label for="bank_acc_name" class="control-label">Bank Acc Name</label>
						<div class="form-group">
							<input type="text" name="bank_acc_name" value="<?php echo ($this->input->post('bank_acc_name') ? $this->input->post('bank_acc_name') : $tbl_business_information['bank_acc_name']); ?>" class="form-control" id="bank_acc_name" />
						</div>
					</div>
					<div class="col-md-6">
						<label for="bank_acc_num" class="control-label">Bank Acc Num</label>
						<div class="form-group">
							<input type="text" name="bank_acc_num" value="<?php echo ($this->input->post('bank_acc_num') ? $this->input->post('bank_acc_num') : $tbl_business_information['bank_acc_num']); ?>" class="form-control" id="bank_acc_num" />
						</div>
					</div>
					<div class="col-md-6">
						<label for="bank_aba_num" class="control-label">Bank Aba Num</label>
						<div class="form-group">
							<input type="text" name="bank_aba_num" value="<?php echo ($this->input->post('bank_aba_num') ? $this->input->post('bank_aba_num') : $tbl_business_information['bank_aba_num']); ?>" class="form-control" id="bank_aba_num" />
						</div>
					</div>
					<div class="col-md-6">
						<label for="bank_name" class="control-label">Bank Name</label>
						<div class="form-group">
							<input type="text" name="bank_name" value="<?php echo ($this->input->post('bank_name') ? $this->input->post('bank_name') : $tbl_business_information['bank_name']); ?>" class="form-control" id="bank_name" />
						</div>
					</div>
					<div class="col-md-6">
						<label for="business_desc" class="control-label">Business Desc</label>
						<div class="form-group">
							<textarea name="business_desc" class="form-control" id="business_desc"><?php echo ($this->input->post('business_desc') ? $this->input->post('business_desc') : $tbl_business_information['business_desc']); ?></textarea>
						</div>
					</div>
					<div class="col-md-6">
						<label for="business_description" class="control-label">Business Description</label>
						<div class="form-group">
							<textarea name="business_description" class="form-control" id="business_description"><?php echo ($this->input->post('business_description') ? $this->input->post('business_description') : $tbl_business_information['business_description']); ?></textarea>
						</div>
					</div>
					<div class="col-md-6">
						<label for="served_locations" class="control-label">Served Locations</label>
						<div class="form-group">
							<textarea name="served_locations" class="form-control" id="served_locations"><?php echo ($this->input->post('served_locations') ? $this->input->post('served_locations') : $tbl_business_information['served_locations']); ?></textarea>
						</div>
					</div>
					<div class="col-md-6">
						<label for="bank_address" class="control-label">Bank Address</label>
						<div class="form-group">
							<textarea name="bank_address" class="form-control" id="bank_address"><?php echo ($this->input->post('bank_address') ? $this->input->post('bank_address') : $tbl_business_information['bank_address']); ?></textarea>
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