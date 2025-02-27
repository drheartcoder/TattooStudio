<?php
/* 
 * Generated by CRUDigniter v3.2 
 * www.crudigniter.com
 */
 
class Tbl_district extends CI_Controller{
    function __construct()
    {
        parent::__construct();
        $this->load->model('Tbl_district_model');
    } 

    /*
     * Listing of tbl_districts
     */
    function index()
    {
        $data['tbl_districts'] = $this->Tbl_district_model->get_all_tbl_districts();
        
        $data['_view'] = 'tbl_district/index';
        $this->load->view('layouts/main',$data);
    }

    /*
     * Adding a new tbl_district
     */
    function add()
    {   
        if(isset($_POST) && count($_POST) > 0)     
        {   
            $params = array(
				'name' => $this->input->post('name'),
				'country_id' => $this->input->post('country_id'),
				'status' => $this->input->post('status'),
            );
            
            $tbl_district_id = $this->Tbl_district_model->add_tbl_district($params);
            redirect('tbl_district/index');
        }
        else
        {            
            $data['_view'] = 'tbl_district/add';
            $this->load->view('layouts/main',$data);
        }
    }  

    /*
     * Editing a tbl_district
     */
    function edit($id)
    {   
        // check if the tbl_district exists before trying to edit it
        $data['tbl_district'] = $this->Tbl_district_model->get_tbl_district($id);
        
        if(isset($data['tbl_district']['id']))
        {
            if(isset($_POST) && count($_POST) > 0)     
            {   
                $params = array(
					'name' => $this->input->post('name'),
					'country_id' => $this->input->post('country_id'),
					'status' => $this->input->post('status'),
                );

                $this->Tbl_district_model->update_tbl_district($id,$params);            
                redirect('tbl_district/index');
            }
            else
            {
                $data['_view'] = 'tbl_district/edit';
                $this->load->view('layouts/main',$data);
            }
        }
        else
            show_error('The tbl_district you are trying to edit does not exist.');
    } 

    /*
     * Deleting tbl_district
     */
    function remove($id)
    {
        $tbl_district = $this->Tbl_district_model->get_tbl_district($id);

        // check if the tbl_district exists before trying to delete it
        if(isset($tbl_district['id']))
        {
            $this->Tbl_district_model->delete_tbl_district($id);
            redirect('tbl_district/index');
        }
        else
            show_error('The tbl_district you are trying to delete does not exist.');
    }
    
}
