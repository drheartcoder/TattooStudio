<?php
/* 
 * Generated by CRUDigniter v3.2 
 * www.crudigniter.com
 */
 
class Tbl_cover_up_model extends CI_Model
{
    function __construct()
    {
        parent::__construct();
    }
    
    /*
     * Get tbl_cover_up by id
     */
    function get_tbl_cover_up($id)
    {
        return $this->db->get_where('tbl_cover_up',array('id'=>$id))->row_array();
    }
        
    /*
     * Get all tbl_cover_up
     */
    function get_all_tbl_cover_up()
    {
        $this->db->order_by('id', 'desc');
        return $this->db->get('tbl_cover_up')->result_array();
    }
        
    /*
     * function to add new tbl_cover_up
     */
    function add_tbl_cover_up($params)
    {
        $this->db->insert('tbl_cover_up',$params);
        return $this->db->insert_id();
    }
    
    /*
     * function to update tbl_cover_up
     */
    function update_tbl_cover_up($id,$params)
    {
        $this->db->where('id',$id);
        return $this->db->update('tbl_cover_up',$params);
    }
    
    /*
     * function to delete tbl_cover_up
     */
    function delete_tbl_cover_up($id)
    {
        return $this->db->delete('tbl_cover_up',array('id'=>$id));
    }
}
