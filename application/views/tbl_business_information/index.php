<div class="row">
    <div class="col-md-12">
        <div class="box">
            <div class="box-header">
                <h3 class="box-title">Tbl Business Information Listing</h3>
            	<div class="box-tools">
                    <a href="<?php echo site_url('tbl_business_information/add'); ?>" class="btn btn-success btn-sm">Add</a> 
                </div>
            </div>
            <div class="box-body">
                <table class="table table-striped">
                    <tr>
						<th>Business Id</th>
						<th>Fk User Id</th>
						<th>Contact Way</th>
						<th>Up To Miles</th>
						<th>Business Name</th>
						<th>Business Phone</th>
						<th>Business Mobile</th>
						<th>Business Logo</th>
						<th>Website</th>
						<th>Site Url</th>
						<th>Facebook Link</th>
						<th>Instagram Link</th>
						<th>Twitter Link</th>
						<th>Linkedin Link</th>
						<th>Business Attraction</th>
						<th>Business Competition</th>
						<th>Training Info</th>
						<th>Avg Rating</th>
						<th>Accept Gift Cards</th>
						<th>Business Email</th>
						<th>Bank Acc Name</th>
						<th>Bank Acc Num</th>
						<th>Bank Aba Num</th>
						<th>Bank Name</th>
						<th>Business Desc</th>
						<th>Business Description</th>
						<th>Served Locations</th>
						<th>Bank Address</th>
						<th>Actions</th>
                    </tr>
                    <?php foreach($tbl_business_information as $t){ ?>
                    <tr>
						<td><?php echo $t['business_id']; ?></td>
						<td><?php echo $t['fk_user_id']; ?></td>
						<td><?php echo $t['contact_way']; ?></td>
						<td><?php echo $t['up_to_miles']; ?></td>
						<td><?php echo $t['business_name']; ?></td>
						<td><?php echo $t['business_phone']; ?></td>
						<td><?php echo $t['business_mobile']; ?></td>
						<td><?php echo $t['business_logo']; ?></td>
						<td><?php echo $t['website']; ?></td>
						<td><?php echo $t['site_url']; ?></td>
						<td><?php echo $t['facebook_link']; ?></td>
						<td><?php echo $t['instagram_link']; ?></td>
						<td><?php echo $t['twitter_link']; ?></td>
						<td><?php echo $t['linkedin_link']; ?></td>
						<td><?php echo $t['business_attraction']; ?></td>
						<td><?php echo $t['business_competition']; ?></td>
						<td><?php echo $t['training_info']; ?></td>
						<td><?php echo $t['avg_rating']; ?></td>
						<td><?php echo $t['accept_gift_cards']; ?></td>
						<td><?php echo $t['business_email']; ?></td>
						<td><?php echo $t['bank_acc_name']; ?></td>
						<td><?php echo $t['bank_acc_num']; ?></td>
						<td><?php echo $t['bank_aba_num']; ?></td>
						<td><?php echo $t['bank_name']; ?></td>
						<td><?php echo $t['business_desc']; ?></td>
						<td><?php echo $t['business_description']; ?></td>
						<td><?php echo $t['served_locations']; ?></td>
						<td><?php echo $t['bank_address']; ?></td>
						<td>
                            <a href="<?php echo site_url('tbl_business_information/edit/'.$t['business_id']); ?>" class="btn btn-info btn-xs"><span class="fa fa-pencil"></span> Edit</a> 
                            <a href="<?php echo site_url('tbl_business_information/remove/'.$t['business_id']); ?>" class="btn btn-danger btn-xs"><span class="fa fa-trash"></span> Delete</a>
                        </td>
                    </tr>
                    <?php } ?>
                </table>
                                
            </div>
        </div>
    </div>
</div>
