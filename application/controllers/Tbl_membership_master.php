<?php
/* 
 * Generated by CRUDigniter v3.2 
 * www.crudigniter.com
 */
 
class Tbl_membership_master extends CI_Controller{
    function __construct()
    {
        parent::__construct();
        $this->load->model('Tbl_membership_master_model');
    } 

    /*
     * Listing of tbl_membership_master
     */
    function index()
    {
        $data['tbl_membership_master'] = $this->Tbl_membership_master_model->get_all_tbl_membership_master();
        
        $data['_view'] = 'tbl_membership_master/index';
        $this->load->view('layouts/main',$data);
    }

    /*
     * Adding a new tbl_membership_master
     */
    function add()
    {   
        if(isset($_POST) && count($_POST) > 0)     
        {   
            $params = array(
				'membership_plan' => $this->input->post('membership_plan'),
				'membership_price' => $this->input->post('membership_price'),
				'special_user_price' => $this->input->post('special_user_price'),
				'membership_period' => $this->input->post('membership_period'),
				'membership_discount_price' => $this->input->post('membership_discount_price'),
				'membership_discount' => $this->input->post('membership_discount'),
				'membership_type' => $this->input->post('membership_type'),
				'membership_plan_short_desc' => $this->input->post('membership_plan_short_desc'),
				'membership_plan_long_desc' => $this->input->post('membership_plan_long_desc'),
            );
            
            $tbl_membership_master_id = $this->Tbl_membership_master_model->add_tbl_membership_master($params);
            redirect('tbl_membership_master/index');
        }
        else
        {            
            $data['_view'] = 'tbl_membership_master/add';
            $this->load->view('layouts/main',$data);
        }
    }  

    /*
     * Editing a tbl_membership_master
     */
    function edit($membership_id)
    {   
        // check if the tbl_membership_master exists before trying to edit it
        $data['tbl_membership_master'] = $this->Tbl_membership_master_model->get_tbl_membership_master($membership_id);
        
        if(isset($data['tbl_membership_master']['membership_id']))
        {
            if(isset($_POST) && count($_POST) > 0)     
            {   
                $params = array(
					'membership_plan' => $this->input->post('membership_plan'),
					'membership_price' => $this->input->post('membership_price'),
					'special_user_price' => $this->input->post('special_user_price'),
					'membership_period' => $this->input->post('membership_period'),
					'membership_discount_price' => $this->input->post('membership_discount_price'),
					'membership_discount' => $this->input->post('membership_discount'),
					'membership_type' => $this->input->post('membership_type'),
					'membership_plan_short_desc' => $this->input->post('membership_plan_short_desc'),
					'membership_plan_long_desc' => $this->input->post('membership_plan_long_desc'),
                );

                $this->Tbl_membership_master_model->update_tbl_membership_master($membership_id,$params);            
                redirect('tbl_membership_master/index');
            }
            else
            {
                $data['_view'] = 'tbl_membership_master/edit';
                $this->load->view('layouts/main',$data);
            }
        }
        else
            show_error('The tbl_membership_master you are trying to edit does not exist.');
    } 

    /*
     * Deleting tbl_membership_master
     */
    function remove($membership_id)
    {
        $tbl_membership_master = $this->Tbl_membership_master_model->get_tbl_membership_master($membership_id);

        // check if the tbl_membership_master exists before trying to delete it
        if(isset($tbl_membership_master['membership_id']))
        {
            $this->Tbl_membership_master_model->delete_tbl_membership_master($membership_id);
            redirect('tbl_membership_master/index');
        }
        else
            show_error('The tbl_membership_master you are trying to delete does not exist.');
    }
    
}
