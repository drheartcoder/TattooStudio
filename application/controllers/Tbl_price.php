<?php
/* 
 * Generated by CRUDigniter v3.2 
 * www.crudigniter.com
 */
 
class Tbl_price extends CI_Controller{
    function __construct()
    {
        parent::__construct();
        $this->load->model('Tbl_price_model');
    } 

    /*
     * Listing of tbl_price
     */
    function index()
    {
        $data['tbl_price'] = $this->Tbl_price_model->get_all_tbl_price();
        
        $data['_view'] = 'tbl_price/index';
        $this->load->view('layouts/main',$data);
    }

    /*
     * Adding a new tbl_price
     */
    function add()
    {   
        if(isset($_POST) && count($_POST) > 0)     
        {   
            $params = array(
				'service_id' => $this->input->post('service_id'),
				'color_id' => $this->input->post('color_id'),
				'size_id' => $this->input->post('size_id'),
				'color' => $this->input->post('color'),
				'size' => $this->input->post('size'),
				'time' => $this->input->post('time'),
				'price' => $this->input->post('price'),
				'created_at' => $this->input->post('created_at'),
            );
            
            $tbl_price_id = $this->Tbl_price_model->add_tbl_price($params);
            redirect('tbl_price/index');
        }
        else
        {            
            $data['_view'] = 'tbl_price/add';
            $this->load->view('layouts/main',$data);
        }
    }  

    /*
     * Editing a tbl_price
     */
    function edit($id)
    {   
        // check if the tbl_price exists before trying to edit it
        $data['tbl_price'] = $this->Tbl_price_model->get_tbl_price($id);
        
        if(isset($data['tbl_price']['id']))
        {
            if(isset($_POST) && count($_POST) > 0)     
            {   
                $params = array(
					'service_id' => $this->input->post('service_id'),
					'color_id' => $this->input->post('color_id'),
					'size_id' => $this->input->post('size_id'),
					'color' => $this->input->post('color'),
					'size' => $this->input->post('size'),
					'time' => $this->input->post('time'),
					'price' => $this->input->post('price'),
					'created_at' => $this->input->post('created_at'),
                );

                $this->Tbl_price_model->update_tbl_price($id,$params);            
                redirect('tbl_price/index');
            }
            else
            {
                $data['_view'] = 'tbl_price/edit';
                $this->load->view('layouts/main',$data);
            }
        }
        else
            show_error('The tbl_price you are trying to edit does not exist.');
    } 

    /*
     * Deleting tbl_price
     */
    function remove($id)
    {
        $tbl_price = $this->Tbl_price_model->get_tbl_price($id);

        // check if the tbl_price exists before trying to delete it
        if(isset($tbl_price['id']))
        {
            $this->Tbl_price_model->delete_tbl_price($id);
            redirect('tbl_price/index');
        }
        else
            show_error('The tbl_price you are trying to delete does not exist.');
    }
    
}
