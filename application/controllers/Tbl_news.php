<?php
/* 
 * Generated by CRUDigniter v3.2 
 * www.crudigniter.com
 */
 
class Tbl_news extends CI_Controller{
    function __construct()
    {
        parent::__construct();
        $this->load->model('Tbl_news_model');
    } 

    /*
     * Listing of tbl_news
     */
    function index()
    {
        $data['tbl_news'] = $this->Tbl_news_model->get_all_tbl_news();
        
        $data['_view'] = 'tbl_news/index';
        $this->load->view('layouts/main',$data);
    }

    /*
     * Adding a new tbl_news
     */
    function add()
    {   
        if(isset($_POST) && count($_POST) > 0)     
        {   
            $params = array(
				'news_title' => $this->input->post('news_title'),
				'news_image' => $this->input->post('news_image'),
				'news_status' => $this->input->post('news_status'),
				'news_desc' => $this->input->post('news_desc'),
            );
            
            $tbl_news_id = $this->Tbl_news_model->add_tbl_news($params);
            redirect('tbl_news/index');
        }
        else
        {            
            $data['_view'] = 'tbl_news/add';
            $this->load->view('layouts/main',$data);
        }
    }  

    /*
     * Editing a tbl_news
     */
    function edit($news_id)
    {   
        // check if the tbl_news exists before trying to edit it
        $data['tbl_news'] = $this->Tbl_news_model->get_tbl_news($news_id);
        
        if(isset($data['tbl_news']['news_id']))
        {
            if(isset($_POST) && count($_POST) > 0)     
            {   
                $params = array(
					'news_title' => $this->input->post('news_title'),
					'news_image' => $this->input->post('news_image'),
					'news_status' => $this->input->post('news_status'),
					'news_desc' => $this->input->post('news_desc'),
                );

                $this->Tbl_news_model->update_tbl_news($news_id,$params);            
                redirect('tbl_news/index');
            }
            else
            {
                $data['_view'] = 'tbl_news/edit';
                $this->load->view('layouts/main',$data);
            }
        }
        else
            show_error('The tbl_news you are trying to edit does not exist.');
    } 

    /*
     * Deleting tbl_news
     */
    function remove($news_id)
    {
        $tbl_news = $this->Tbl_news_model->get_tbl_news($news_id);

        // check if the tbl_news exists before trying to delete it
        if(isset($tbl_news['news_id']))
        {
            $this->Tbl_news_model->delete_tbl_news($news_id);
            redirect('tbl_news/index');
        }
        else
            show_error('The tbl_news you are trying to delete does not exist.');
    }
    
}
