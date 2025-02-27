<?php
/* 
 * Generated by CRUDigniter v3.2 
 * www.crudigniter.com
 */
 
class Tbl_country_master extends CI_Controller{
    function __construct()
    {
        parent::__construct();
        $this->load->model('Tbl_country_master_model');
    } 

    /*
     * Listing of tbl_country_master
     */
    function index()
    {
        $data['tbl_country_master'] = $this->Tbl_country_master_model->get_all_tbl_country_master();
        
        $data['_view'] = 'tbl_country_master/index';
        $this->load->view('layouts/main',$data);
    }

    /*
     * Adding a new tbl_country_master
     */
    function add()
    {   
        if(isset($_POST) && count($_POST) > 0)     
        {   
            $params = array(
				'published' => $this->input->post('published'),
				'country' => $this->input->post('country'),
				'status' => $this->input->post('status'),
            );
            
            $tbl_country_master_id = $this->Tbl_country_master_model->add_tbl_country_master($params);
            redirect('tbl_country_master/index');
        }
        else
        {            
            $data['_view'] = 'tbl_country_master/add';
            $this->load->view('layouts/main',$data);
        }
    }  

    /*
     * Editing a tbl_country_master
     */
    function edit($id)
    {   
        // check if the tbl_country_master exists before trying to edit it
        $data['tbl_country_master'] = $this->Tbl_country_master_model->get_tbl_country_master($id);
        
        if(isset($data['tbl_country_master']['id']))
        {
            if(isset($_POST) && count($_POST) > 0)     
            {   
                $params = array(
					'published' => $this->input->post('published'),
					'country' => $this->input->post('country'),
					'status' => $this->input->post('status'),
                );

                $this->Tbl_country_master_model->update_tbl_country_master($id,$params);            
                redirect('tbl_country_master/index');
            }
            else
            {
                $data['_view'] = 'tbl_country_master/edit';
                $this->load->view('layouts/main',$data);
            }
        }
        else
            show_error('The tbl_country_master you are trying to edit does not exist.');
    } 

    /*
     * Deleting tbl_country_master
     */
    function remove($id)
    {
        $tbl_country_master = $this->Tbl_country_master_model->get_tbl_country_master($id);

        // check if the tbl_country_master exists before trying to delete it
        if(isset($tbl_country_master['id']))
        {
            $this->Tbl_country_master_model->delete_tbl_country_master($id);
            redirect('tbl_country_master/index');
        }
        else
            show_error('The tbl_country_master you are trying to delete does not exist.');
    }
    
}
