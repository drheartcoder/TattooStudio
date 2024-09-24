<?php
/* 
 * Generated by CRUDigniter v3.2 
 * www.crudigniter.com
 */
 
class Tbl_user_package_model extends CI_Model
{
    function __construct()
    {
        parent::__construct();
    }
    
    /*
     * Get tbl_user_package by user_pakage_id
     */
    function get_tbl_user_package($user_pakage_id)
    {
        return $this->db->get_where('tbl_user_package',array('user_pakage_id'=>$user_pakage_id))->row_array();
    }
        
    /*
     * Get all tbl_user_package
     */
    function get_all_tbl_user_package()
    {
        $this->db->order_by('user_pakage_id', 'desc');
        return $this->db->get('tbl_user_package')->result_array();
    }
        
    /*
     * function to add new tbl_user_package
     */
    function add_tbl_user_package($params)
    {
        $this->db->insert('tbl_user_package',$params);
        return $this->db->insert_id();
    }
    
    /*
     * function to update tbl_user_package
     */
    function update_tbl_user_package($user_pakage_id,$params)
    {
        $this->db->where('user_pakage_id',$user_pakage_id);
        return $this->db->update('tbl_user_package',$params);
    }
    
    /*
     * function to delete tbl_user_package
     */
    function delete_tbl_user_package($user_pakage_id)
    {
        return $this->db->delete('tbl_user_package',array('user_pakage_id'=>$user_pakage_id));
    }
}
