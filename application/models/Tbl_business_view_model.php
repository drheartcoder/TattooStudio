<?php
/* 
 * Generated by CRUDigniter v3.2 
 * www.crudigniter.com
 */
 
class Tbl_business_view_model extends CI_Model
{
    function __construct()
    {
        parent::__construct();
    }
    
    /*
     * Get tbl_business_view by 
     */
    function get_tbl_business_view($)
    {
        return $this->db->get_where('tbl_business_view',array(''=>$))->row_array();
    }
        
    /*
     * Get all tbl_business_view
     */
    function get_all_tbl_business_view()
    {
        $this->db->order_by('', 'desc');
        return $this->db->get('tbl_business_view')->result_array();
    }
        
    /*
     * function to add new tbl_business_view
     */
    function add_tbl_business_view($params)
    {
        $this->db->insert('tbl_business_view',$params);
        return $this->db->insert_id();
    }
    
    /*
     * function to update tbl_business_view
     */
    function update_tbl_business_view($,$params)
    {
        $this->db->where('',$);
        return $this->db->update('tbl_business_view',$params);
    }
    
    /*
     * function to delete tbl_business_view
     */
    function delete_tbl_business_view($)
    {
        return $this->db->delete('tbl_business_view',array(''=>$));
    }
}
