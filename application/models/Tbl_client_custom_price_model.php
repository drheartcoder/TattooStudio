<?php
/* 
 * Generated by CRUDigniter v3.2 
 * www.crudigniter.com
 */
 
class Tbl_client_custom_price_model extends CI_Model
{
    function __construct()
    {
        parent::__construct();
    }
    
    /*
     * Get tbl_client_custom_price by custom_price_id
     */
    function get_tbl_client_custom_price($custom_price_id)
    {
        return $this->db->get_where('tbl_client_custom_price',array('custom_price_id'=>$custom_price_id))->row_array();
    }
        
    /*
     * Get all tbl_client_custom_price
     */
    function get_all_tbl_client_custom_price()
    {
        $this->db->order_by('custom_price_id', 'desc');
        return $this->db->get('tbl_client_custom_price')->result_array();
    }
        
    /*
     * function to add new tbl_client_custom_price
     */
    function add_tbl_client_custom_price($params)
    {
        $this->db->insert('tbl_client_custom_price',$params);
        return $this->db->insert_id();
    }
    
    /*
     * function to update tbl_client_custom_price
     */
    function update_tbl_client_custom_price($custom_price_id,$params)
    {
        $this->db->where('custom_price_id',$custom_price_id);
        return $this->db->update('tbl_client_custom_price',$params);
    }
    
    /*
     * function to delete tbl_client_custom_price
     */
    function delete_tbl_client_custom_price($custom_price_id)
    {
        return $this->db->delete('tbl_client_custom_price',array('custom_price_id'=>$custom_price_id));
    }
}
