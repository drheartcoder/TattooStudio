<?php
/* 
 * Generated by CRUDigniter v3.2 
 * www.crudigniter.com
 */
 
class Tbl_size_model extends CI_Model
{
    function __construct()
    {
        parent::__construct();
    }
    
    /*
     * Get tbl_size by id
     */
    function get_tbl_size($id)
    {
        return $this->db->get_where('tbl_size',array('id'=>$id))->row_array();
    }
        
    /*
     * Get all tbl_size
     */
    function get_all_tbl_size()
    {
        $this->db->order_by('id', 'desc');
        return $this->db->get('tbl_size')->result_array();
    }
        
    /*
     * function to add new tbl_size
     */
    function add_tbl_size($params)
    {
        $this->db->insert('tbl_size',$params);
        return $this->db->insert_id();
    }
    
    /*
     * function to update tbl_size
     */
    function update_tbl_size($id,$params)
    {
        $this->db->where('id',$id);
        return $this->db->update('tbl_size',$params);
    }
    
    /*
     * function to delete tbl_size
     */
    function delete_tbl_size($id)
    {
        return $this->db->delete('tbl_size',array('id'=>$id));
    }
}
