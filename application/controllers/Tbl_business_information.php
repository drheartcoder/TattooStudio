<?php
/* 
 * Generated by CRUDigniter v3.2 
 * www.crudigniter.com
 */
 
class Tbl_business_information extends CI_Controller{
    function __construct()
    {
        parent::__construct();
        $this->load->model('Tbl_business_information_model');
    } 

    /*
     * Listing of tbl_business_information
     */
    function index()
    {
        $data['tbl_business_information'] = $this->Tbl_business_information_model->get_all_tbl_business_information();
        
        $data['_view'] = 'tbl_business_information/index';
        $this->load->view('layouts/main',$data);
    }

    /*
     * Adding a new tbl_business_information
     */
    function add()
    {   
        if(isset($_POST) && count($_POST) > 0)     
        {   
            $params = array(
				'fk_user_id' => $this->input->post('fk_user_id'),
				'contact_way' => $this->input->post('contact_way'),
				'up_to_miles' => $this->input->post('up_to_miles'),
				'business_name' => $this->input->post('business_name'),
				'business_phone' => $this->input->post('business_phone'),
				'business_mobile' => $this->input->post('business_mobile'),
				'business_logo' => $this->input->post('business_logo'),
				'website' => $this->input->post('website'),
				'site_url' => $this->input->post('site_url'),
				'facebook_link' => $this->input->post('facebook_link'),
				'instagram_link' => $this->input->post('instagram_link'),
				'twitter_link' => $this->input->post('twitter_link'),
				'linkedin_link' => $this->input->post('linkedin_link'),
				'business_attraction' => $this->input->post('business_attraction'),
				'business_competition' => $this->input->post('business_competition'),
				'training_info' => $this->input->post('training_info'),
				'avg_rating' => $this->input->post('avg_rating'),
				'accept_gift_cards' => $this->input->post('accept_gift_cards'),
				'business_email' => $this->input->post('business_email'),
				'bank_acc_name' => $this->input->post('bank_acc_name'),
				'bank_acc_num' => $this->input->post('bank_acc_num'),
				'bank_aba_num' => $this->input->post('bank_aba_num'),
				'bank_name' => $this->input->post('bank_name'),
				'business_desc' => $this->input->post('business_desc'),
				'business_description' => $this->input->post('business_description'),
				'served_locations' => $this->input->post('served_locations'),
				'bank_address' => $this->input->post('bank_address'),
            );
            
            $tbl_business_information_id = $this->Tbl_business_information_model->add_tbl_business_information($params);
            redirect('tbl_business_information/index');
        }
        else
        {            
            $data['_view'] = 'tbl_business_information/add';
            $this->load->view('layouts/main',$data);
        }
    }  

    /*
     * Editing a tbl_business_information
     */
    function edit($business_id)
    {   
        // check if the tbl_business_information exists before trying to edit it
        $data['tbl_business_information'] = $this->Tbl_business_information_model->get_tbl_business_information($business_id);
        
        if(isset($data['tbl_business_information']['business_id']))
        {
            if(isset($_POST) && count($_POST) > 0)     
            {   
                $params = array(
					'fk_user_id' => $this->input->post('fk_user_id'),
					'contact_way' => $this->input->post('contact_way'),
					'up_to_miles' => $this->input->post('up_to_miles'),
					'business_name' => $this->input->post('business_name'),
					'business_phone' => $this->input->post('business_phone'),
					'business_mobile' => $this->input->post('business_mobile'),
					'business_logo' => $this->input->post('business_logo'),
					'website' => $this->input->post('website'),
					'site_url' => $this->input->post('site_url'),
					'facebook_link' => $this->input->post('facebook_link'),
					'instagram_link' => $this->input->post('instagram_link'),
					'twitter_link' => $this->input->post('twitter_link'),
					'linkedin_link' => $this->input->post('linkedin_link'),
					'business_attraction' => $this->input->post('business_attraction'),
					'business_competition' => $this->input->post('business_competition'),
					'training_info' => $this->input->post('training_info'),
					'avg_rating' => $this->input->post('avg_rating'),
					'accept_gift_cards' => $this->input->post('accept_gift_cards'),
					'business_email' => $this->input->post('business_email'),
					'bank_acc_name' => $this->input->post('bank_acc_name'),
					'bank_acc_num' => $this->input->post('bank_acc_num'),
					'bank_aba_num' => $this->input->post('bank_aba_num'),
					'bank_name' => $this->input->post('bank_name'),
					'business_desc' => $this->input->post('business_desc'),
					'business_description' => $this->input->post('business_description'),
					'served_locations' => $this->input->post('served_locations'),
					'bank_address' => $this->input->post('bank_address'),
                );

                $this->Tbl_business_information_model->update_tbl_business_information($business_id,$params);            
                redirect('tbl_business_information/index');
            }
            else
            {
                $data['_view'] = 'tbl_business_information/edit';
                $this->load->view('layouts/main',$data);
            }
        }
        else
            show_error('The tbl_business_information you are trying to edit does not exist.');
    } 

    /*
     * Deleting tbl_business_information
     */
    function remove($business_id)
    {
        $tbl_business_information = $this->Tbl_business_information_model->get_tbl_business_information($business_id);

        // check if the tbl_business_information exists before trying to delete it
        if(isset($tbl_business_information['business_id']))
        {
            $this->Tbl_business_information_model->delete_tbl_business_information($business_id);
            redirect('tbl_business_information/index');
        }
        else
            show_error('The tbl_business_information you are trying to delete does not exist.');
    }
    
}
