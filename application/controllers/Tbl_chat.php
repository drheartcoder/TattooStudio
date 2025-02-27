<?php
/* 
 * Generated by CRUDigniter v3.2 
 * www.crudigniter.com
 */
 
class Tbl_chat extends CI_Controller{
    function __construct()
    {
        parent::__construct();
        $this->load->model('Tbl_chat_model');
    } 

    /*
     * Listing of tbl_chat
     */
    function index()
    {
        $data['tbl_chat'] = $this->Tbl_chat_model->get_all_tbl_chat();
        
        $data['_view'] = 'tbl_chat/index';
        $this->load->view('layouts/main',$data);
    }

    /*
     * Adding a new tbl_chat
     */
    function add()
    {   
        if(isset($_POST) && count($_POST) > 0)     
        {   
            $params = array(
				'sender_id' => $this->input->post('sender_id'),
				'receiver_id' => $this->input->post('receiver_id'),
				'is_read' => $this->input->post('is_read'),
				'created_at' => $this->input->post('created_at'),
				'message' => $this->input->post('message'),
            );
            
            $tbl_chat_id = $this->Tbl_chat_model->add_tbl_chat($params);
            redirect('tbl_chat/index');
        }
        else
        {            
            $data['_view'] = 'tbl_chat/add';
            $this->load->view('layouts/main',$data);
        }
    }  

    /*
     * Editing a tbl_chat
     */
    function edit($id)
    {   
        // check if the tbl_chat exists before trying to edit it
        $data['tbl_chat'] = $this->Tbl_chat_model->get_tbl_chat($id);
        
        if(isset($data['tbl_chat']['id']))
        {
            if(isset($_POST) && count($_POST) > 0)     
            {   
                $params = array(
					'sender_id' => $this->input->post('sender_id'),
					'receiver_id' => $this->input->post('receiver_id'),
					'is_read' => $this->input->post('is_read'),
					'created_at' => $this->input->post('created_at'),
					'message' => $this->input->post('message'),
                );

                $this->Tbl_chat_model->update_tbl_chat($id,$params);            
                redirect('tbl_chat/index');
            }
            else
            {
                $data['_view'] = 'tbl_chat/edit';
                $this->load->view('layouts/main',$data);
            }
        }
        else
            show_error('The tbl_chat you are trying to edit does not exist.');
    } 

    /*
     * Deleting tbl_chat
     */
    function remove($id)
    {
        $tbl_chat = $this->Tbl_chat_model->get_tbl_chat($id);

        // check if the tbl_chat exists before trying to delete it
        if(isset($tbl_chat['id']))
        {
            $this->Tbl_chat_model->delete_tbl_chat($id);
            redirect('tbl_chat/index');
        }
        else
            show_error('The tbl_chat you are trying to delete does not exist.');
    }
    
}
