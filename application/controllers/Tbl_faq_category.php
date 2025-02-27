<?php
/* 
 * Generated by CRUDigniter v3.2 
 * www.crudigniter.com
 */
 
class Tbl_faq_category extends CI_Controller{
    function __construct()
    {
        parent::__construct();
        $this->load->model('Tbl_faq_category_model');
    } 

    /*
     * Listing of tbl_faq_categories
     */
    function index()
    {
        $data['tbl_faq_categories'] = $this->Tbl_faq_category_model->get_all_tbl_faq_categories();
        
        $data['_view'] = 'tbl_faq_category/index';
        $this->load->view('layouts/main',$data);
    }

    /*
     * Adding a new tbl_faq_category
     */
    function add()
    {   
        if(isset($_POST) && count($_POST) > 0)     
        {   
            $params = array(
				'faq_category_name' => $this->input->post('faq_category_name'),
				'faq_category_type' => $this->input->post('faq_category_type'),
				'faq_category_status' => $this->input->post('faq_category_status'),
            );
            
            $tbl_faq_category_id = $this->Tbl_faq_category_model->add_tbl_faq_category($params);
            redirect('tbl_faq_category/index');
        }
        else
        {            
            $data['_view'] = 'tbl_faq_category/add';
            $this->load->view('layouts/main',$data);
        }
    }  

    /*
     * Editing a tbl_faq_category
     */
    function edit($faq_category_id)
    {   
        // check if the tbl_faq_category exists before trying to edit it
        $data['tbl_faq_category'] = $this->Tbl_faq_category_model->get_tbl_faq_category($faq_category_id);
        
        if(isset($data['tbl_faq_category']['faq_category_id']))
        {
            if(isset($_POST) && count($_POST) > 0)     
            {   
                $params = array(
					'faq_category_name' => $this->input->post('faq_category_name'),
					'faq_category_type' => $this->input->post('faq_category_type'),
					'faq_category_status' => $this->input->post('faq_category_status'),
                );

                $this->Tbl_faq_category_model->update_tbl_faq_category($faq_category_id,$params);            
                redirect('tbl_faq_category/index');
            }
            else
            {
                $data['_view'] = 'tbl_faq_category/edit';
                $this->load->view('layouts/main',$data);
            }
        }
        else
            show_error('The tbl_faq_category you are trying to edit does not exist.');
    } 

    /*
     * Deleting tbl_faq_category
     */
    function remove($faq_category_id)
    {
        $tbl_faq_category = $this->Tbl_faq_category_model->get_tbl_faq_category($faq_category_id);

        // check if the tbl_faq_category exists before trying to delete it
        if(isset($tbl_faq_category['faq_category_id']))
        {
            $this->Tbl_faq_category_model->delete_tbl_faq_category($faq_category_id);
            redirect('tbl_faq_category/index');
        }
        else
            show_error('The tbl_faq_category you are trying to delete does not exist.');
    }
    
}
