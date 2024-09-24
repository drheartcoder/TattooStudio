<?php
/* 
 * Generated by CRUDigniter v3.2 
 * www.crudigniter.com
 */
 
class Tbl_social_link extends CI_Controller{
    function __construct()
    {
        parent::__construct();
        $this->load->model('Tbl_social_link_model');
    } 

    /*
     * Listing of tbl_social_link
     */
    function index()
    {
        $data['tbl_social_link'] = $this->Tbl_social_link_model->get_all_tbl_social_link();
        
        $data['_view'] = 'tbl_social_link/index';
        $this->load->view('layouts/main',$data);
    }

    /*
     * Adding a new tbl_social_link
     */
    function add()
    {   
        if(isset($_POST) && count($_POST) > 0)     
        {   
            $params = array(
				'facebook' => $this->input->post('facebook'),
				'twitter' => $this->input->post('twitter'),
				'googleplus' => $this->input->post('googleplus'),
				'instagram' => $this->input->post('instagram'),
            );
            
            $tbl_social_link_id = $this->Tbl_social_link_model->add_tbl_social_link($params);
            redirect('tbl_social_link/index');
        }
        else
        {            
            $data['_view'] = 'tbl_social_link/add';
            $this->load->view('layouts/main',$data);
        }
    }  

    /*
     * Editing a tbl_social_link
     */
    function edit($social_id)
    {   
        // check if the tbl_social_link exists before trying to edit it
        $data['tbl_social_link'] = $this->Tbl_social_link_model->get_tbl_social_link($social_id);
        
        if(isset($data['tbl_social_link']['social_id']))
        {
            if(isset($_POST) && count($_POST) > 0)     
            {   
                $params = array(
					'facebook' => $this->input->post('facebook'),
					'twitter' => $this->input->post('twitter'),
					'googleplus' => $this->input->post('googleplus'),
					'instagram' => $this->input->post('instagram'),
                );

                $this->Tbl_social_link_model->update_tbl_social_link($social_id,$params);            
                redirect('tbl_social_link/index');
            }
            else
            {
                $data['_view'] = 'tbl_social_link/edit';
                $this->load->view('layouts/main',$data);
            }
        }
        else
            show_error('The tbl_social_link you are trying to edit does not exist.');
    } 

    /*
     * Deleting tbl_social_link
     */
    function remove($social_id)
    {
        $tbl_social_link = $this->Tbl_social_link_model->get_tbl_social_link($social_id);

        // check if the tbl_social_link exists before trying to delete it
        if(isset($tbl_social_link['social_id']))
        {
            $this->Tbl_social_link_model->delete_tbl_social_link($social_id);
            redirect('tbl_social_link/index');
        }
        else
            show_error('The tbl_social_link you are trying to delete does not exist.');
    }
    
}
