<?php
/* 
 * Generated by CRUDigniter v3.2 
 * www.crudigniter.com
 */
 
class Tbl_cancel_and_refund_model extends CI_Model
{
    function __construct()
    {
        parent::__construct();
    }
    
    /*
     * Get tbl_cancel_and_refund by refund_id
     */
    function get_tbl_cancel_and_refund($refund_id)
    {
        return $this->db->get_where('tbl_cancel_and_refund',array('refund_id'=>$refund_id))->row_array();
    }
        
    /*
     * Get all tbl_cancel_and_refund
     */
    function get_all_tbl_cancel_and_refund()
    {
        $this->db->order_by('refund_id', 'desc');
        return $this->db->get('tbl_cancel_and_refund')->result_array();
    }
        
    /*
     * function to add new tbl_cancel_and_refund
     */
    function add_tbl_cancel_and_refund($params)
    {
        $this->db->insert('tbl_cancel_and_refund',$params);
        return $this->db->insert_id();
    }
    
    /*
     * function to update tbl_cancel_and_refund
     */
    function update_tbl_cancel_and_refund($refund_id,$params)
    {
        $this->db->where('refund_id',$refund_id);
        return $this->db->update('tbl_cancel_and_refund',$params);
    }
    
    /*
     * function to delete tbl_cancel_and_refund
     */
    function delete_tbl_cancel_and_refund($refund_id)
    {
        return $this->db->delete('tbl_cancel_and_refund',array('refund_id'=>$refund_id));
    }
}
