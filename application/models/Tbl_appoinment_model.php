<?php
/* 
 * Generated by CRUDigniter v3.2 
 * www.crudigniter.com
 */
 
class Tbl_appoinment_model extends CI_Model
{
    function __construct()
    {
        parent::__construct();
    }
    
    /*
     * Get tbl_appoinment by appoinment_id
     */
    function get_tbl_appoinment($appoinment_id)
    {
        return $this->db->get_where('tbl_appoinment',array('appoinment_id'=>$appoinment_id))->row_array();
    }
        
    /*
     * Get all tbl_appoinment
     */
    function get_all_tbl_appoinment()
    {
        $this->db->order_by('appoinment_id', 'desc');
        return $this->db->get('tbl_appoinment')->result_array();
    }
        
    /*
     * function to add new tbl_appoinment
     */
    function add_tbl_appoinment($params)
    {
        $this->db->insert('tbl_appoinment',$params);
        return $this->db->insert_id();
    }
    
    /*
     * function to update tbl_appoinment
     */
    function update_tbl_appoinment($appoinment_id,$params)
    {
        $this->db->where('appoinment_id',$appoinment_id);
        return $this->db->update('tbl_appoinment',$params);
    }
    
    /*
     * function to delete tbl_appoinment
     */
    function delete_tbl_appoinment($appoinment_id)
    {
        return $this->db->delete('tbl_appoinment',array('appoinment_id'=>$appoinment_id));
    }
}
