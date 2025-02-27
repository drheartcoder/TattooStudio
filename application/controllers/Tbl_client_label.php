<?php
/* 
 * Generated by CRUDigniter v3.2 
 * www.crudigniter.com
 */
 
class Tbl_client_label extends CI_Controller{
    function __construct()
    {
        parent::__construct();
        $this->load->model('Tbl_client_label_model');
    } 

    /*
     * Listing of tbl_client_label
     */
    function index()
    {
        $data['tbl_client_label'] = $this->Tbl_client_label_model->get_all_tbl_client_label();
        
        $data['_view'] = 'tbl_client_label/index';
        $this->load->view('layouts/main',$data);
    }

    /*
     * Adding a new tbl_client_label
     */
    function add()
    {   
        if(isset($_POST) && count($_POST) > 0)     
        {   
            $params = array(
				'fk_client_id' => $this->input->post('fk_client_id'),
				'label_name' => $this->input->post('label_name'),
				'fk_business_id' => $this->input->post('fk_business_id'),
            );
            
            $tbl_client_label_id = $this->Tbl_client_label_model->add_tbl_client_label($params);
            redirect('tbl_client_label/index');
        }
        else
        {            
            $data['_view'] = 'tbl_client_label/add';
            $this->load->view('layouts/main',$data);
        }
    }  

    /*
     * Editing a tbl_client_label
     */
    function edit($label_id)
    {   
        // check if the tbl_client_label exists before trying to edit it
        $data['tbl_client_label'] = $this->Tbl_client_label_model->get_tbl_client_label($label_id);
        
        if(isset($data['tbl_client_label']['label_id']))
        {
            if(isset($_POST) && count($_POST) > 0)     
            {   
                $params = array(
					'fk_client_id' => $this->input->post('fk_client_id'),
					'label_name' => $this->input->post('label_name'),
					'fk_business_id' => $this->input->post('fk_business_id'),
                );

                $this->Tbl_client_label_model->update_tbl_client_label($label_id,$params);            
                redirect('tbl_client_label/index');
            }
            else
            {
                $data['_view'] = 'tbl_client_label/edit';
                $this->load->view('layouts/main',$data);
            }
        }
        else
            show_error('The tbl_client_label you are trying to edit does not exist.');
    } 

    /*
     * Deleting tbl_client_label
     */
    function remove($label_id)
    {
        $tbl_client_label = $this->Tbl_client_label_model->get_tbl_client_label($label_id);

        // check if the tbl_client_label exists before trying to delete it
        if(isset($tbl_client_label['label_id']))
        {
            $this->Tbl_client_label_model->delete_tbl_client_label($label_id);
            redirect('tbl_client_label/index');
        }
        else
            show_error('The tbl_client_label you are trying to delete does not exist.');
    }
    
}
