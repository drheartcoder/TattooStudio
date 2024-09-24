<?php
/* 
 * Generated by CRUDigniter v3.2 
 * www.crudigniter.com
 */
 
class Tbl_sub_category_model extends CI_Model
{
    function __construct()
    {
        parent::__construct();
    }
    
    /*
     * Get tbl_sub_category by sub_cat_id
     */
    function get_tbl_sub_category($sub_cat_id)
    {
        return $this->db->get_where('tbl_sub_category',array('sub_cat_id'=>$sub_cat_id))->row_array();
    }
        
    /*
     * Get all tbl_sub_category
     */
    function get_all_tbl_sub_category()
    {
        $this->db->order_by('sub_cat_id', 'desc');
        return $this->db->get('tbl_sub_category')->result_array();
    }
        
    /*
     * function to add new tbl_sub_category
     */
    function add_tbl_sub_category($params)
    {
        $this->db->insert('tbl_sub_category',$params);
        return $this->db->insert_id();
    }
    
    /*
     * function to update tbl_sub_category
     */
    function update_tbl_sub_category($sub_cat_id,$params)
    {
        $this->db->where('sub_cat_id',$sub_cat_id);
        return $this->db->update('tbl_sub_category',$params);
    }
    
    /*
     * function to delete tbl_sub_category
     */
    function delete_tbl_sub_category($sub_cat_id)
    {
        return $this->db->delete('tbl_sub_category',array('sub_cat_id'=>$sub_cat_id));
    }
}
