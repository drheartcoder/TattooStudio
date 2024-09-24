<?php
/* 
 * Generated by CRUDigniter v3.2 
 * www.crudigniter.com
 */
 
class Tbl_testimonial extends CI_Controller{
    function __construct()
    {
        parent::__construct();
        $this->load->model('Tbl_testimonial_model');
    } 

    /*
     * Listing of tbl_testimonials
     */
    function index()
    {
        $data['tbl_testimonials'] = $this->Tbl_testimonial_model->get_all_tbl_testimonials();
        
        $data['_view'] = 'tbl_testimonial/index';
        $this->load->view('layouts/main',$data);
    }

    /*
     * Adding a new tbl_testimonial
     */
    function add()
    {   
        if(isset($_POST) && count($_POST) > 0)     
        {   
            $params = array(
				'title' => $this->input->post('title'),
				'address' => $this->input->post('address'),
				'status' => $this->input->post('status'),
				'image' => $this->input->post('image'),
				'name' => $this->input->post('name'),
				'desc' => $this->input->post('desc'),
            );
            
            $tbl_testimonial_id = $this->Tbl_testimonial_model->add_tbl_testimonial($params);
            redirect('tbl_testimonial/index');
        }
        else
        {            
            $data['_view'] = 'tbl_testimonial/add';
            $this->load->view('layouts/main',$data);
        }
    }  

    /*
     * Editing a tbl_testimonial
     */
    function edit($testimony_id)
    {   
        // check if the tbl_testimonial exists before trying to edit it
        $data['tbl_testimonial'] = $this->Tbl_testimonial_model->get_tbl_testimonial($testimony_id);
        
        if(isset($data['tbl_testimonial']['testimony_id']))
        {
            if(isset($_POST) && count($_POST) > 0)     
            {   
                $params = array(
					'title' => $this->input->post('title'),
					'address' => $this->input->post('address'),
					'status' => $this->input->post('status'),
					'image' => $this->input->post('image'),
					'name' => $this->input->post('name'),
					'desc' => $this->input->post('desc'),
                );

                $this->Tbl_testimonial_model->update_tbl_testimonial($testimony_id,$params);            
                redirect('tbl_testimonial/index');
            }
            else
            {
                $data['_view'] = 'tbl_testimonial/edit';
                $this->load->view('layouts/main',$data);
            }
        }
        else
            show_error('The tbl_testimonial you are trying to edit does not exist.');
    } 

    /*
     * Deleting tbl_testimonial
     */
    function remove($testimony_id)
    {
        $tbl_testimonial = $this->Tbl_testimonial_model->get_tbl_testimonial($testimony_id);

        // check if the tbl_testimonial exists before trying to delete it
        if(isset($tbl_testimonial['testimony_id']))
        {
            $this->Tbl_testimonial_model->delete_tbl_testimonial($testimony_id);
            redirect('tbl_testimonial/index');
        }
        else
            show_error('The tbl_testimonial you are trying to delete does not exist.');
    }
    
}
