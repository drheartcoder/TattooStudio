<?php
/* 
 * Generated by CRUDigniter v3.2 
 * www.crudigniter.com
 */
 
class Tbl_temp_appointment_model extends CI_Model
{
    function __construct()
    {
        parent::__construct();
    }
    
    /*
     * Get tbl_temp_appointment by id
     */
    function get_tbl_temp_appointment($id)
    {
        return $this->db->get_where('tbl_temp_appointment',array('id'=>$id))->row_array();
    }
        
    /*
     * Get all tbl_temp_appointment
     */
    function get_all_tbl_temp_appointment()
    {
        $this->db->order_by('id', 'desc');
        return $this->db->get('tbl_temp_appointment')->result_array();
    }
        
    /*
     * function to add new tbl_temp_appointment
     */
    function add_tbl_temp_appointment($params)
    {
        $this->db->insert('tbl_temp_appointment',$params);
        return $this->db->insert_id();
    }
    
    /*
     * function to update tbl_temp_appointment
     */
    function update_tbl_temp_appointment($id,$params)
    {
        $this->db->where('id',$id);
        return $this->db->update('tbl_temp_appointment',$params);
    }
    
    /*
     * function to delete tbl_temp_appointment
     */
    function delete_tbl_temp_appointment($id)
    {
        return $this->db->delete('tbl_temp_appointment',array('id'=>$id));
    }
}
