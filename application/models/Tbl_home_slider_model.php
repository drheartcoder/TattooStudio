<?php
/* 
 * Generated by CRUDigniter v3.2 
 * www.crudigniter.com
 */
 
class Tbl_home_slider_model extends CI_Model
{
    function __construct()
    {
        parent::__construct();
    }
    
    /*
     * Get tbl_home_slider by slider_id
     */
    function get_tbl_home_slider($slider_id)
    {
        return $this->db->get_where('tbl_home_slider',array('slider_id'=>$slider_id))->row_array();
    }
        
    /*
     * Get all tbl_home_slider
     */
    function get_all_tbl_home_slider()
    {
        $this->db->order_by('slider_id', 'desc');
        return $this->db->get('tbl_home_slider')->result_array();
    }
        
    /*
     * function to add new tbl_home_slider
     */
    function add_tbl_home_slider($params)
    {
        $this->db->insert('tbl_home_slider',$params);
        return $this->db->insert_id();
    }
    
    /*
     * function to update tbl_home_slider
     */
    function update_tbl_home_slider($slider_id,$params)
    {
        $this->db->where('slider_id',$slider_id);
        return $this->db->update('tbl_home_slider',$params);
    }
    
    /*
     * function to delete tbl_home_slider
     */
    function delete_tbl_home_slider($slider_id)
    {
        return $this->db->delete('tbl_home_slider',array('slider_id'=>$slider_id));
    }
}
