<?php
/* 
 * Generated by CRUDigniter v3.2 
 * www.crudigniter.com
 */
 
class Tbl_message_to_busines extends CI_Controller{
    function __construct()
    {
        parent::__construct();
        $this->load->model('Tbl_message_to_busines_model');
    } 

    /*
     * Listing of tbl_message_to_business
     */
    function index()
    {
        $data['tbl_message_to_business'] = $this->Tbl_message_to_busines_model->get_all_tbl_message_to_business();
        
        $data['_view'] = 'tbl_message_to_busines/index';
        $this->load->view('layouts/main',$data);
    }

    /*
     * Adding a new tbl_message_to_busines
     */
    function add()
    {   
        if(isset($_POST) && count($_POST) > 0)     
        {   
            $params = array(
				'fk_business_id' => $this->input->post('fk_business_id'),
				'email_id' => $this->input->post('email_id'),
				'message' => $this->input->post('message'),
            );
            
            $tbl_message_to_busines_id = $this->Tbl_message_to_busines_model->add_tbl_message_to_busines($params);
            redirect('tbl_message_to_busines/index');
        }
        else
        {            
            $data['_view'] = 'tbl_message_to_busines/add';
            $this->load->view('layouts/main',$data);
        }
    }  

    /*
     * Editing a tbl_message_to_busines
     */
    function edit($message_id)
    {   
        // check if the tbl_message_to_busines exists before trying to edit it
        $data['tbl_message_to_busines'] = $this->Tbl_message_to_busines_model->get_tbl_message_to_busines($message_id);
        
        if(isset($data['tbl_message_to_busines']['message_id']))
        {
            if(isset($_POST) && count($_POST) > 0)     
            {   
                $params = array(
					'fk_business_id' => $this->input->post('fk_business_id'),
					'email_id' => $this->input->post('email_id'),
					'message' => $this->input->post('message'),
                );

                $this->Tbl_message_to_busines_model->update_tbl_message_to_busines($message_id,$params);            
                redirect('tbl_message_to_busines/index');
            }
            else
            {
                $data['_view'] = 'tbl_message_to_busines/edit';
                $this->load->view('layouts/main',$data);
            }
        }
        else
            show_error('The tbl_message_to_busines you are trying to edit does not exist.');
    } 

    /*
     * Deleting tbl_message_to_busines
     */
    function remove($message_id)
    {
        $tbl_message_to_busines = $this->Tbl_message_to_busines_model->get_tbl_message_to_busines($message_id);

        // check if the tbl_message_to_busines exists before trying to delete it
        if(isset($tbl_message_to_busines['message_id']))
        {
            $this->Tbl_message_to_busines_model->delete_tbl_message_to_busines($message_id);
            redirect('tbl_message_to_busines/index');
        }
        else
            show_error('The tbl_message_to_busines you are trying to delete does not exist.');
    }
    
}
