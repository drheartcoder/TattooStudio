<?php
/* 
 * Generated by CRUDigniter v3.2 
 * www.crudigniter.com
 */
 
class Notification extends CI_Controller{
    function __construct()
    {
        parent::__construct();
        $this->load->model('Notification_model');
    } 

    /*
     * Listing of notification
     */
    function index()
    {
        $data['notification'] = $this->Notification_model->get_all_notification();
        
        $data['_view'] = 'notification/index';
        $this->load->view('layouts/main',$data);
    }

    /*
     * Adding a new notification
     */
    function add()
    {   
        if(isset($_POST) && count($_POST) > 0)     
        {   
            $params = array(
				'from_id' => $this->input->post('from_id'),
				'to_id' => $this->input->post('to_id'),
				'status' => $this->input->post('status'),
				'notification_date' => $this->input->post('notification_date'),
				'is_delete' => $this->input->post('is_delete'),
				'message' => $this->input->post('message'),
            );
            
            $notification_id = $this->Notification_model->add_notification($params);
            redirect('notification/index');
        }
        else
        {            
            $data['_view'] = 'notification/add';
            $this->load->view('layouts/main',$data);
        }
    }  

    /*
     * Editing a notification
     */
    function edit($notification_id)
    {   
        // check if the notification exists before trying to edit it
        $data['notification'] = $this->Notification_model->get_notification($notification_id);
        
        if(isset($data['notification']['notification_id']))
        {
            if(isset($_POST) && count($_POST) > 0)     
            {   
                $params = array(
					'from_id' => $this->input->post('from_id'),
					'to_id' => $this->input->post('to_id'),
					'status' => $this->input->post('status'),
					'notification_date' => $this->input->post('notification_date'),
					'is_delete' => $this->input->post('is_delete'),
					'message' => $this->input->post('message'),
                );

                $this->Notification_model->update_notification($notification_id,$params);            
                redirect('notification/index');
            }
            else
            {
                $data['_view'] = 'notification/edit';
                $this->load->view('layouts/main',$data);
            }
        }
        else
            show_error('The notification you are trying to edit does not exist.');
    } 

    /*
     * Deleting notification
     */
    function remove($notification_id)
    {
        $notification = $this->Notification_model->get_notification($notification_id);

        // check if the notification exists before trying to delete it
        if(isset($notification['notification_id']))
        {
            $this->Notification_model->delete_notification($notification_id);
            redirect('notification/index');
        }
        else
            show_error('The notification you are trying to delete does not exist.');
    }
    
}
