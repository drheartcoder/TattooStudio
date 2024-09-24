<?php
/* 
 * Generated by CRUDigniter v3.2 
 * www.crudigniter.com
 */
 
class Tbl_cover_up extends CI_Controller{
    function __construct()
    {
        parent::__construct();
        $this->load->model('Tbl_cover_up_model');
    } 

    /*
     * Listing of tbl_cover_up
     */
    function index()
    {
        $data['tbl_cover_up'] = $this->Tbl_cover_up_model->get_all_tbl_cover_up();
        
        $data['_view'] = 'tbl_cover_up/index';
        $this->load->view('layouts/main',$data);
    }

    /*
     * Adding a new tbl_cover_up
     */
    function add()
    {   
        if(isset($_POST) && count($_POST) > 0)     
        {   
            $params = array(
				'cover_up_name' => $this->input->post('cover_up_name'),
				'cover_up_slug' => $this->input->post('cover_up_slug'),
				'is_delete' => $this->input->post('is_delete'),
				'cover_up_status' => $this->input->post('cover_up_status'),
            );
            
            $tbl_cover_up_id = $this->Tbl_cover_up_model->add_tbl_cover_up($params);
            redirect('tbl_cover_up/index');
        }
        else
        {            
            $data['_view'] = 'tbl_cover_up/add';
            $this->load->view('layouts/main',$data);
        }
    }  

    /*
     * Editing a tbl_cover_up
     */
    function edit($id)
    {   
        // check if the tbl_cover_up exists before trying to edit it
        $data['tbl_cover_up'] = $this->Tbl_cover_up_model->get_tbl_cover_up($id);
        
        if(isset($data['tbl_cover_up']['id']))
        {
            if(isset($_POST) && count($_POST) > 0)     
            {   
                $params = array(
					'cover_up_name' => $this->input->post('cover_up_name'),
					'cover_up_slug' => $this->input->post('cover_up_slug'),
					'is_delete' => $this->input->post('is_delete'),
					'cover_up_status' => $this->input->post('cover_up_status'),
                );

                $this->Tbl_cover_up_model->update_tbl_cover_up($id,$params);            
                redirect('tbl_cover_up/index');
            }
            else
            {
                $data['_view'] = 'tbl_cover_up/edit';
                $this->load->view('layouts/main',$data);
            }
        }
        else
            show_error('The tbl_cover_up you are trying to edit does not exist.');
    } 

    /*
     * Deleting tbl_cover_up
     */
    function remove($id)
    {
        $tbl_cover_up = $this->Tbl_cover_up_model->get_tbl_cover_up($id);

        // check if the tbl_cover_up exists before trying to delete it
        if(isset($tbl_cover_up['id']))
        {
            $this->Tbl_cover_up_model->delete_tbl_cover_up($id);
            redirect('tbl_cover_up/index');
        }
        else
            show_error('The tbl_cover_up you are trying to delete does not exist.');
    }
    
}
