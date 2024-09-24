<?php
/* 
 * Generated by CRUDigniter v3.2 
 * www.crudigniter.com
 */
 
class Tbl_event_direction extends CI_Controller{
    function __construct()
    {
        parent::__construct();
        $this->load->model('Tbl_event_direction_model');
    } 

    /*
     * Listing of tbl_event_directions
     */
    function index()
    {
        $data['tbl_event_directions'] = $this->Tbl_event_direction_model->get_all_tbl_event_directions();
        
        $data['_view'] = 'tbl_event_direction/index';
        $this->load->view('layouts/main',$data);
    }

    /*
     * Adding a new tbl_event_direction
     */
    function add()
    {   
        if(isset($_POST) && count($_POST) > 0)     
        {   
            $params = array(
				'fk_business_id' => $this->input->post('fk_business_id'),
				'fk_location_id' => $this->input->post('fk_location_id'),
				'event_directions_name' => $this->input->post('event_directions_name'),
            );
            
            $tbl_event_direction_id = $this->Tbl_event_direction_model->add_tbl_event_direction($params);
            redirect('tbl_event_direction/index');
        }
        else
        {            
            $data['_view'] = 'tbl_event_direction/add';
            $this->load->view('layouts/main',$data);
        }
    }  

    /*
     * Editing a tbl_event_direction
     */
    function edit($event_directions_id)
    {   
        // check if the tbl_event_direction exists before trying to edit it
        $data['tbl_event_direction'] = $this->Tbl_event_direction_model->get_tbl_event_direction($event_directions_id);
        
        if(isset($data['tbl_event_direction']['event_directions_id']))
        {
            if(isset($_POST) && count($_POST) > 0)     
            {   
                $params = array(
					'fk_business_id' => $this->input->post('fk_business_id'),
					'fk_location_id' => $this->input->post('fk_location_id'),
					'event_directions_name' => $this->input->post('event_directions_name'),
                );

                $this->Tbl_event_direction_model->update_tbl_event_direction($event_directions_id,$params);            
                redirect('tbl_event_direction/index');
            }
            else
            {
                $data['_view'] = 'tbl_event_direction/edit';
                $this->load->view('layouts/main',$data);
            }
        }
        else
            show_error('The tbl_event_direction you are trying to edit does not exist.');
    } 

    /*
     * Deleting tbl_event_direction
     */
    function remove($event_directions_id)
    {
        $tbl_event_direction = $this->Tbl_event_direction_model->get_tbl_event_direction($event_directions_id);

        // check if the tbl_event_direction exists before trying to delete it
        if(isset($tbl_event_direction['event_directions_id']))
        {
            $this->Tbl_event_direction_model->delete_tbl_event_direction($event_directions_id);
            redirect('tbl_event_direction/index');
        }
        else
            show_error('The tbl_event_direction you are trying to delete does not exist.');
    }
    
}
