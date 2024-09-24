<?php
/* 
 * Generated by CRUDigniter v3.2 
 * www.crudigniter.com
 */
 
class Tbl_business_video extends CI_Controller{
    function __construct()
    {
        parent::__construct();
        $this->load->model('Tbl_business_video_model');
    } 

    /*
     * Listing of tbl_business_videos
     */
    function index()
    {
        $data['tbl_business_videos'] = $this->Tbl_business_video_model->get_all_tbl_business_videos();
        
        $data['_view'] = 'tbl_business_video/index';
        $this->load->view('layouts/main',$data);
    }

    /*
     * Adding a new tbl_business_video
     */
    function add()
    {   
        if(isset($_POST) && count($_POST) > 0)     
        {   
            $params = array(
				'fk_business_id' => $this->input->post('fk_business_id'),
				'fk_staff_id' => $this->input->post('fk_staff_id'),
				'video_name' => $this->input->post('video_name'),
				'video_status' => $this->input->post('video_status'),
            );
            
            $tbl_business_video_id = $this->Tbl_business_video_model->add_tbl_business_video($params);
            redirect('tbl_business_video/index');
        }
        else
        {            
            $data['_view'] = 'tbl_business_video/add';
            $this->load->view('layouts/main',$data);
        }
    }  

    /*
     * Editing a tbl_business_video
     */
    function edit($video_id)
    {   
        // check if the tbl_business_video exists before trying to edit it
        $data['tbl_business_video'] = $this->Tbl_business_video_model->get_tbl_business_video($video_id);
        
        if(isset($data['tbl_business_video']['video_id']))
        {
            if(isset($_POST) && count($_POST) > 0)     
            {   
                $params = array(
					'fk_business_id' => $this->input->post('fk_business_id'),
					'fk_staff_id' => $this->input->post('fk_staff_id'),
					'video_name' => $this->input->post('video_name'),
					'video_status' => $this->input->post('video_status'),
                );

                $this->Tbl_business_video_model->update_tbl_business_video($video_id,$params);            
                redirect('tbl_business_video/index');
            }
            else
            {
                $data['_view'] = 'tbl_business_video/edit';
                $this->load->view('layouts/main',$data);
            }
        }
        else
            show_error('The tbl_business_video you are trying to edit does not exist.');
    } 

    /*
     * Deleting tbl_business_video
     */
    function remove($video_id)
    {
        $tbl_business_video = $this->Tbl_business_video_model->get_tbl_business_video($video_id);

        // check if the tbl_business_video exists before trying to delete it
        if(isset($tbl_business_video['video_id']))
        {
            $this->Tbl_business_video_model->delete_tbl_business_video($video_id);
            redirect('tbl_business_video/index');
        }
        else
            show_error('The tbl_business_video you are trying to delete does not exist.');
    }
    
}
