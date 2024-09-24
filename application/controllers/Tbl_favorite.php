<?php
/* 
 * Generated by CRUDigniter v3.2 
 * www.crudigniter.com
 */
 
class Tbl_favorite extends CI_Controller{
    function __construct()
    {
        parent::__construct();
        $this->load->model('Tbl_favorite_model');
    } 

    /*
     * Listing of tbl_favorites
     */
    function index()
    {
        $data['tbl_favorites'] = $this->Tbl_favorite_model->get_all_tbl_favorites();
        
        $data['_view'] = 'tbl_favorite/index';
        $this->load->view('layouts/main',$data);
    }

    /*
     * Adding a new tbl_favorite
     */
    function add()
    {   
        if(isset($_POST) && count($_POST) > 0)     
        {   
            $params = array(
				'fk_user_id' => $this->input->post('fk_user_id'),
				'fk_business_id' => $this->input->post('fk_business_id'),
				'favorite_link' => $this->input->post('favorite_link'),
            );
            
            $tbl_favorite_id = $this->Tbl_favorite_model->add_tbl_favorite($params);
            redirect('tbl_favorite/index');
        }
        else
        {            
            $data['_view'] = 'tbl_favorite/add';
            $this->load->view('layouts/main',$data);
        }
    }  

    /*
     * Editing a tbl_favorite
     */
    function edit($favorite_id)
    {   
        // check if the tbl_favorite exists before trying to edit it
        $data['tbl_favorite'] = $this->Tbl_favorite_model->get_tbl_favorite($favorite_id);
        
        if(isset($data['tbl_favorite']['favorite_id']))
        {
            if(isset($_POST) && count($_POST) > 0)     
            {   
                $params = array(
					'fk_user_id' => $this->input->post('fk_user_id'),
					'fk_business_id' => $this->input->post('fk_business_id'),
					'favorite_link' => $this->input->post('favorite_link'),
                );

                $this->Tbl_favorite_model->update_tbl_favorite($favorite_id,$params);            
                redirect('tbl_favorite/index');
            }
            else
            {
                $data['_view'] = 'tbl_favorite/edit';
                $this->load->view('layouts/main',$data);
            }
        }
        else
            show_error('The tbl_favorite you are trying to edit does not exist.');
    } 

    /*
     * Deleting tbl_favorite
     */
    function remove($favorite_id)
    {
        $tbl_favorite = $this->Tbl_favorite_model->get_tbl_favorite($favorite_id);

        // check if the tbl_favorite exists before trying to delete it
        if(isset($tbl_favorite['favorite_id']))
        {
            $this->Tbl_favorite_model->delete_tbl_favorite($favorite_id);
            redirect('tbl_favorite/index');
        }
        else
            show_error('The tbl_favorite you are trying to delete does not exist.');
    }
    
}
