<?php
/* 
 * Generated by CRUDigniter v3.2 
 * www.crudigniter.com
 */
 
class Tbl_blog_master extends CI_Controller{
    function __construct()
    {
        parent::__construct();
        $this->load->model('Tbl_blog_master_model');
    } 

    /*
     * Listing of tbl_blog_master
     */
    function index()
    {
        $data['tbl_blog_master'] = $this->Tbl_blog_master_model->get_all_tbl_blog_master();
        
        $data['_view'] = 'tbl_blog_master/index';
        $this->load->view('layouts/main',$data);
    }

    /*
     * Adding a new tbl_blog_master
     */
    function add()
    {   
        if(isset($_POST) && count($_POST) > 0)     
        {   
            $params = array(
				'blog_status' => $this->input->post('blog_status'),
				'blog_title' => $this->input->post('blog_title'),
				'blog_description' => $this->input->post('blog_description'),
            );
            
            $tbl_blog_master_id = $this->Tbl_blog_master_model->add_tbl_blog_master($params);
            redirect('tbl_blog_master/index');
        }
        else
        {            
            $data['_view'] = 'tbl_blog_master/add';
            $this->load->view('layouts/main',$data);
        }
    }  

    /*
     * Editing a tbl_blog_master
     */
    function edit($blog_id)
    {   
        // check if the tbl_blog_master exists before trying to edit it
        $data['tbl_blog_master'] = $this->Tbl_blog_master_model->get_tbl_blog_master($blog_id);
        
        if(isset($data['tbl_blog_master']['blog_id']))
        {
            if(isset($_POST) && count($_POST) > 0)     
            {   
                $params = array(
					'blog_status' => $this->input->post('blog_status'),
					'blog_title' => $this->input->post('blog_title'),
					'blog_description' => $this->input->post('blog_description'),
                );

                $this->Tbl_blog_master_model->update_tbl_blog_master($blog_id,$params);            
                redirect('tbl_blog_master/index');
            }
            else
            {
                $data['_view'] = 'tbl_blog_master/edit';
                $this->load->view('layouts/main',$data);
            }
        }
        else
            show_error('The tbl_blog_master you are trying to edit does not exist.');
    } 

    /*
     * Deleting tbl_blog_master
     */
    function remove($blog_id)
    {
        $tbl_blog_master = $this->Tbl_blog_master_model->get_tbl_blog_master($blog_id);

        // check if the tbl_blog_master exists before trying to delete it
        if(isset($tbl_blog_master['blog_id']))
        {
            $this->Tbl_blog_master_model->delete_tbl_blog_master($blog_id);
            redirect('tbl_blog_master/index');
        }
        else
            show_error('The tbl_blog_master you are trying to delete does not exist.');
    }
    
}
