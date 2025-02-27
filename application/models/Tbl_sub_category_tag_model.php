<?php
/* 
 * Generated by CRUDigniter v3.2 
 * www.crudigniter.com
 */
 
class Tbl_sub_category_tag_model extends CI_Model
{
    function __construct()
    {
        parent::__construct();
    }
    
    /*
     * Get tbl_sub_category_tag by sub_category_tag_id
     */
    function get_tbl_sub_category_tag($sub_category_tag_id)
    {
        return $this->db->get_where('tbl_sub_category_tag',array('sub_category_tag_id'=>$sub_category_tag_id))->row_array();
    }
        
    /*
     * Get all tbl_sub_category_tag
     */
    function get_all_tbl_sub_category_tag()
    {
        $this->db->order_by('sub_category_tag_id', 'desc');
        return $this->db->get('tbl_sub_category_tag')->result_array();
    }
        
    /*
     * function to add new tbl_sub_category_tag
     */
    function add_tbl_sub_category_tag($params)
    {
        $this->db->insert('tbl_sub_category_tag',$params);
        return $this->db->insert_id();
    }
    
    /*
     * function to update tbl_sub_category_tag
     */
    function update_tbl_sub_category_tag($sub_category_tag_id,$params)
    {
        $this->db->where('sub_category_tag_id',$sub_category_tag_id);
        return $this->db->update('tbl_sub_category_tag',$params);
    }
    
    /*
     * function to delete tbl_sub_category_tag
     */
    function delete_tbl_sub_category_tag($sub_category_tag_id)
    {
        return $this->db->delete('tbl_sub_category_tag',array('sub_category_tag_id'=>$sub_category_tag_id));
    }
}
