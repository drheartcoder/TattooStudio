<?php
/* 
 * Generated by CRUDigniter v3.2 
 * www.crudigniter.com
 */
 
class Tbl_sub_category extends CI_Controller{
    function __construct()
    {
        parent::__construct();
        $this->load->model('Tbl_sub_category_model');
    } 

    /*
     * Listing of tbl_sub_category
     */
    function index()
    {
        $data['tbl_sub_category'] = $this->Tbl_sub_category_model->get_all_tbl_sub_category();
        
        $data['_view'] = 'tbl_sub_category/index';
        $this->load->view('layouts/main',$data);
    }

    /*
     * Adding a new tbl_sub_category
     */
    function add()
    {   
        if(isset($_POST) && count($_POST) > 0)     
        {   
            $params = array(
				'sub_category' => $this->input->post('sub_category'),
				'fk_category_id' => $this->input->post('fk_category_id'),
				'fk_sub_category_tag_id' => $this->input->post('fk_sub_category_tag_id'),
				'sub_cat_status' => $this->input->post('sub_cat_status'),
				'is_delete' => $this->input->post('is_delete'),
            );
            
            $tbl_sub_category_id = $this->Tbl_sub_category_model->add_tbl_sub_category($params);
            redirect('tbl_sub_category/index');
        }
        else
        {            
            $data['_view'] = 'tbl_sub_category/add';
            $this->load->view('layouts/main',$data);
        }
    }  

    /*
     * Editing a tbl_sub_category
     */
    function edit($sub_cat_id)
    {   
        // check if the tbl_sub_category exists before trying to edit it
        $data['tbl_sub_category'] = $this->Tbl_sub_category_model->get_tbl_sub_category($sub_cat_id);
        
        if(isset($data['tbl_sub_category']['sub_cat_id']))
        {
            if(isset($_POST) && count($_POST) > 0)     
            {   
                $params = array(
					'sub_category' => $this->input->post('sub_category'),
					'fk_category_id' => $this->input->post('fk_category_id'),
					'fk_sub_category_tag_id' => $this->input->post('fk_sub_category_tag_id'),
					'sub_cat_status' => $this->input->post('sub_cat_status'),
					'is_delete' => $this->input->post('is_delete'),
                );

                $this->Tbl_sub_category_model->update_tbl_sub_category($sub_cat_id,$params);            
                redirect('tbl_sub_category/index');
            }
            else
            {
                $data['_view'] = 'tbl_sub_category/edit';
                $this->load->view('layouts/main',$data);
            }
        }
        else
            show_error('The tbl_sub_category you are trying to edit does not exist.');
    } 

    /*
     * Deleting tbl_sub_category
     */
    function remove($sub_cat_id)
    {
        $tbl_sub_category = $this->Tbl_sub_category_model->get_tbl_sub_category($sub_cat_id);

        // check if the tbl_sub_category exists before trying to delete it
        if(isset($tbl_sub_category['sub_cat_id']))
        {
            $this->Tbl_sub_category_model->delete_tbl_sub_category($sub_cat_id);
            redirect('tbl_sub_category/index');
        }
        else
            show_error('The tbl_sub_category you are trying to delete does not exist.');
    }
    
}
