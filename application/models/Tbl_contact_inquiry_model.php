<?php
/* 
 * Generated by CRUDigniter v3.2 
 * www.crudigniter.com
 */
 
class Tbl_contact_inquiry_model extends CI_Model
{
    function __construct()
    {
        parent::__construct();
    }
    
    /*
     * Get tbl_contact_inquiry by contact_id
     */
    function get_tbl_contact_inquiry($contact_id)
    {
        return $this->db->get_where('tbl_contact_inquiries',array('contact_id'=>$contact_id))->row_array();
    }
        
    /*
     * Get all tbl_contact_inquiries
     */
    function get_all_tbl_contact_inquiries()
    {
        $this->db->order_by('contact_id', 'desc');
        return $this->db->get('tbl_contact_inquiries')->result_array();
    }
        
    /*
     * function to add new tbl_contact_inquiry
     */
    function add_tbl_contact_inquiry($params)
    {
        $this->db->insert('tbl_contact_inquiries',$params);
        return $this->db->insert_id();
    }
    
    /*
     * function to update tbl_contact_inquiry
     */
    function update_tbl_contact_inquiry($contact_id,$params)
    {
        $this->db->where('contact_id',$contact_id);
        return $this->db->update('tbl_contact_inquiries',$params);
    }
    
    /*
     * function to delete tbl_contact_inquiry
     */
    function delete_tbl_contact_inquiry($contact_id)
    {
        return $this->db->delete('tbl_contact_inquiries',array('contact_id'=>$contact_id));
    }
}
