<?php
/* 
 * Generated by CRUDigniter v3.2 
 * www.crudigniter.com
 */
 
class Tbl_country extends CI_Controller{
    function __construct()
    {
        parent::__construct();
        $this->load->model('Tbl_country_model');
    } 

    /*
     * Listing of tbl_countries
     */
    function index()
    {
        $data['tbl_countries'] = $this->Tbl_country_model->get_all_tbl_countries();
        
        $data['_view'] = 'tbl_country/index';
        $this->load->view('layouts/main',$data);
    }

    /*
     * Adding a new tbl_country
     */
    function add()
    {   
        if(isset($_POST) && count($_POST) > 0)     
        {   
            $params = array(
				'name' => $this->input->post('name'),
				'status' => $this->input->post('status'),
            );
            
            $tbl_country_id = $this->Tbl_country_model->add_tbl_country($params);
            redirect('tbl_country/index');
        }
        else
        {            
            $data['_view'] = 'tbl_country/add';
            $this->load->view('layouts/main',$data);
        }
    }  

    /*
     * Editing a tbl_country
     */
    function edit($id)
    {   
        // check if the tbl_country exists before trying to edit it
        $data['tbl_country'] = $this->Tbl_country_model->get_tbl_country($id);
        
        if(isset($data['tbl_country']['id']))
        {
            if(isset($_POST) && count($_POST) > 0)     
            {   
                $params = array(
					'name' => $this->input->post('name'),
					'status' => $this->input->post('status'),
                );

                $this->Tbl_country_model->update_tbl_country($id,$params);            
                redirect('tbl_country/index');
            }
            else
            {
                $data['_view'] = 'tbl_country/edit';
                $this->load->view('layouts/main',$data);
            }
        }
        else
            show_error('The tbl_country you are trying to edit does not exist.');
    } 

    /*
     * Deleting tbl_country
     */
    function remove($id)
    {
        $tbl_country = $this->Tbl_country_model->get_tbl_country($id);

        // check if the tbl_country exists before trying to delete it
        if(isset($tbl_country['id']))
        {
            $this->Tbl_country_model->delete_tbl_country($id);
            redirect('tbl_country/index');
        }
        else
            show_error('The tbl_country you are trying to delete does not exist.');
    }
    
}
