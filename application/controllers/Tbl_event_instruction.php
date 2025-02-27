<?php
/* 
 * Generated by CRUDigniter v3.2 
 * www.crudigniter.com
 */
 
class Tbl_event_instruction extends CI_Controller{
    function __construct()
    {
        parent::__construct();
        $this->load->model('Tbl_event_instruction_model');
    } 

    /*
     * Listing of tbl_event_instructions
     */
    function index()
    {
        $data['tbl_event_instructions'] = $this->Tbl_event_instruction_model->get_all_tbl_event_instructions();
        
        $data['_view'] = 'tbl_event_instruction/index';
        $this->load->view('layouts/main',$data);
    }

    /*
     * Adding a new tbl_event_instruction
     */
    function add()
    {   
        if(isset($_POST) && count($_POST) > 0)     
        {   
            $params = array(
				'fk_business_id' => $this->input->post('fk_business_id'),
				'fk_service_menu_id' => $this->input->post('fk_service_menu_id'),
				'instruction_name' => $this->input->post('instruction_name'),
            );
            
            $tbl_event_instruction_id = $this->Tbl_event_instruction_model->add_tbl_event_instruction($params);
            redirect('tbl_event_instruction/index');
        }
        else
        {            
            $data['_view'] = 'tbl_event_instruction/add';
            $this->load->view('layouts/main',$data);
        }
    }  

    /*
     * Editing a tbl_event_instruction
     */
    function edit($event_instructions_id)
    {   
        // check if the tbl_event_instruction exists before trying to edit it
        $data['tbl_event_instruction'] = $this->Tbl_event_instruction_model->get_tbl_event_instruction($event_instructions_id);
        
        if(isset($data['tbl_event_instruction']['event_instructions_id']))
        {
            if(isset($_POST) && count($_POST) > 0)     
            {   
                $params = array(
					'fk_business_id' => $this->input->post('fk_business_id'),
					'fk_service_menu_id' => $this->input->post('fk_service_menu_id'),
					'instruction_name' => $this->input->post('instruction_name'),
                );

                $this->Tbl_event_instruction_model->update_tbl_event_instruction($event_instructions_id,$params);            
                redirect('tbl_event_instruction/index');
            }
            else
            {
                $data['_view'] = 'tbl_event_instruction/edit';
                $this->load->view('layouts/main',$data);
            }
        }
        else
            show_error('The tbl_event_instruction you are trying to edit does not exist.');
    } 

    /*
     * Deleting tbl_event_instruction
     */
    function remove($event_instructions_id)
    {
        $tbl_event_instruction = $this->Tbl_event_instruction_model->get_tbl_event_instruction($event_instructions_id);

        // check if the tbl_event_instruction exists before trying to delete it
        if(isset($tbl_event_instruction['event_instructions_id']))
        {
            $this->Tbl_event_instruction_model->delete_tbl_event_instruction($event_instructions_id);
            redirect('tbl_event_instruction/index');
        }
        else
            show_error('The tbl_event_instruction you are trying to delete does not exist.');
    }
    
}
