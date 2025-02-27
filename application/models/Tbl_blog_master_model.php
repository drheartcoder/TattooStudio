<?php
/* 
 * Generated by CRUDigniter v3.2 
 * www.crudigniter.com
 */
 
class Tbl_blog_master_model extends CI_Model
{
    function __construct()
    {
        parent::__construct();
    }
    
    /*
     * Get tbl_blog_master by blog_id
     */
    function get_tbl_blog_master($blog_id)
    {
        return $this->db->get_where('tbl_blog_master',array('blog_id'=>$blog_id))->row_array();
    }
        
    /*
     * Get all tbl_blog_master
     */
    function get_all_tbl_blog_master()
    {
        $this->db->order_by('blog_id', 'desc');
        return $this->db->get('tbl_blog_master')->result_array();
    }
        
    /*
     * function to add new tbl_blog_master
     */
    function add_tbl_blog_master($params)
    {
        $this->db->insert('tbl_blog_master',$params);
        return $this->db->insert_id();
    }
    
    /*
     * function to update tbl_blog_master
     */
    function update_tbl_blog_master($blog_id,$params)
    {
        $this->db->where('blog_id',$blog_id);
        return $this->db->update('tbl_blog_master',$params);
    }
    
    /*
     * function to delete tbl_blog_master
     */
    function delete_tbl_blog_master($blog_id)
    {
        return $this->db->delete('tbl_blog_master',array('blog_id'=>$blog_id));
    }
}
