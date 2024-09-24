<?php
/* 
 * Generated by CRUDigniter v3.2 
 * www.crudigniter.com
 */
 
class Tbl_client_addres extends CI_Controller{
    function __construct()
    {
        parent::__construct();
        $this->load->model('Tbl_client_addres_model');
    } 

    /*
     * Listing of tbl_client_address
     */
    function index()
    {
        $data['tbl_client_address'] = $this->Tbl_client_addres_model->get_all_tbl_client_address();
        
        $data['_view'] = 'tbl_client_addres/index';
        $this->load->view('layouts/main',$data);
    }

    /*
     * Adding a new tbl_client_addres
     */
    function add()
    {   
        if(isset($_POST) && count($_POST) > 0)     
        {   
            $params = array(
				'fk_client_id' => $this->input->post('fk_client_id'),
				'street_address_1' => $this->input->post('street_address_1'),
				'street_address_2' => $this->input->post('street_address_2'),
				'street_address_3' => $this->input->post('street_address_3'),
				'country' => $this->input->post('country'),
				'state' => $this->input->post('state'),
				'city' => $this->input->post('city'),
				'zip' => $this->input->post('zip'),
            );
            
            $tbl_client_addres_id = $this->Tbl_client_addres_model->add_tbl_client_addres($params);
            redirect('tbl_client_addres/index');
        }
        else
        {            
            $data['_view'] = 'tbl_client_addres/add';
            $this->load->view('layouts/main',$data);
        }
    }  

    /*
     * Editing a tbl_client_addres
     */
    function edit($client_address_id)
    {   
        // check if the tbl_client_addres exists before trying to edit it
        $data['tbl_client_addres'] = $this->Tbl_client_addres_model->get_tbl_client_addres($client_address_id);
        
        if(isset($data['tbl_client_addres']['client_address_id']))
        {
            if(isset($_POST) && count($_POST) > 0)     
            {   
                $params = array(
					'fk_client_id' => $this->input->post('fk_client_id'),
					'street_address_1' => $this->input->post('street_address_1'),
					'street_address_2' => $this->input->post('street_address_2'),
					'street_address_3' => $this->input->post('street_address_3'),
					'country' => $this->input->post('country'),
					'state' => $this->input->post('state'),
					'city' => $this->input->post('city'),
					'zip' => $this->input->post('zip'),
                );

                $this->Tbl_client_addres_model->update_tbl_client_addres($client_address_id,$params);            
                redirect('tbl_client_addres/index');
            }
            else
            {
                $data['_view'] = 'tbl_client_addres/edit';
                $this->load->view('layouts/main',$data);
            }
        }
        else
            show_error('The tbl_client_addres you are trying to edit does not exist.');
    } 

    /*
     * Deleting tbl_client_addres
     */
    function remove($client_address_id)
    {
        $tbl_client_addres = $this->Tbl_client_addres_model->get_tbl_client_addres($client_address_id);

        // check if the tbl_client_addres exists before trying to delete it
        if(isset($tbl_client_addres['client_address_id']))
        {
            $this->Tbl_client_addres_model->delete_tbl_client_addres($client_address_id);
            redirect('tbl_client_addres/index');
        }
        else
            show_error('The tbl_client_addres you are trying to delete does not exist.');
    }
    
}
