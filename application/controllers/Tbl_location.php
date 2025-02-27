<?php
/* 
 * Generated by CRUDigniter v3.2 
 * www.crudigniter.com
 */
 
class Tbl_location extends CI_Controller{
    function __construct()
    {
        parent::__construct();
        $this->load->model('Tbl_location_model');
    } 

    /*
     * Listing of tbl_location
     */
    function index()
    {
        $data['tbl_location'] = $this->Tbl_location_model->get_all_tbl_location();
        
        $data['_view'] = 'tbl_location/index';
        $this->load->view('layouts/main',$data);
    }

    /*
     * Adding a new tbl_location
     */
    function add()
    {   
        if(isset($_POST) && count($_POST) > 0)     
        {   
            $params = array(
				'name' => $this->input->post('name'),
				'districts_id' => $this->input->post('districts_id'),
				'status' => $this->input->post('status'),
				'video' => $this->input->post('video'),
				'address' => $this->input->post('address'),
				'zipcode' => $this->input->post('zipcode'),
            );
            
            $tbl_location_id = $this->Tbl_location_model->add_tbl_location($params);
            redirect('tbl_location/index');
        }
        else
        {            
            $data['_view'] = 'tbl_location/add';
            $this->load->view('layouts/main',$data);
        }
    }  

    /*
     * Editing a tbl_location
     */
    function edit($id)
    {   
        // check if the tbl_location exists before trying to edit it
        $data['tbl_location'] = $this->Tbl_location_model->get_tbl_location($id);
        
        if(isset($data['tbl_location']['id']))
        {
            if(isset($_POST) && count($_POST) > 0)     
            {   
                $params = array(
					'name' => $this->input->post('name'),
					'districts_id' => $this->input->post('districts_id'),
					'status' => $this->input->post('status'),
					'video' => $this->input->post('video'),
					'address' => $this->input->post('address'),
					'zipcode' => $this->input->post('zipcode'),
                );

                $this->Tbl_location_model->update_tbl_location($id,$params);            
                redirect('tbl_location/index');
            }
            else
            {
                $data['_view'] = 'tbl_location/edit';
                $this->load->view('layouts/main',$data);
            }
        }
        else
            show_error('The tbl_location you are trying to edit does not exist.');
    } 

    /*
     * Deleting tbl_location
     */
    function remove($id)
    {
        $tbl_location = $this->Tbl_location_model->get_tbl_location($id);

        // check if the tbl_location exists before trying to delete it
        if(isset($tbl_location['id']))
        {
            $this->Tbl_location_model->delete_tbl_location($id);
            redirect('tbl_location/index');
        }
        else
            show_error('The tbl_location you are trying to delete does not exist.');
    }
    
}
