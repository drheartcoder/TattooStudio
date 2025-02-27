<?php
/* 
 * Generated by CRUDigniter v3.2 
 * www.crudigniter.com
 */
 
class Tbl_cc_datum_model extends CI_Model
{
    function __construct()
    {
        parent::__construct();
    }
    
    /*
     * Get tbl_cc_datum by cc_data_id
     */
    function get_tbl_cc_datum($cc_data_id)
    {
        return $this->db->get_where('tbl_cc_data',array('cc_data_id'=>$cc_data_id))->row_array();
    }
        
    /*
     * Get all tbl_cc_data
     */
    function get_all_tbl_cc_data()
    {
        $this->db->order_by('cc_data_id', 'desc');
        return $this->db->get('tbl_cc_data')->result_array();
    }
        
    /*
     * function to add new tbl_cc_datum
     */
    function add_tbl_cc_datum($params)
    {
        $this->db->insert('tbl_cc_data',$params);
        return $this->db->insert_id();
    }
    
    /*
     * function to update tbl_cc_datum
     */
    function update_tbl_cc_datum($cc_data_id,$params)
    {
        $this->db->where('cc_data_id',$cc_data_id);
        return $this->db->update('tbl_cc_data',$params);
    }
    
    /*
     * function to delete tbl_cc_datum
     */
    function delete_tbl_cc_datum($cc_data_id)
    {
        return $this->db->delete('tbl_cc_data',array('cc_data_id'=>$cc_data_id));
    }
}
