<?php
/* 
 * Generated by CRUDigniter v3.2 
 * www.crudigniter.com
 */
 
class Tbl_price_model extends CI_Model
{
    function __construct()
    {
        parent::__construct();
    }
    
    /*
     * Get tbl_price by id
     */
    function get_tbl_price($id)
    {
        return $this->db->get_where('tbl_price',array('id'=>$id))->row_array();
    }
        
    /*
     * Get all tbl_price
     */
    function get_all_tbl_price()
    {
        $this->db->order_by('id', 'desc');
        return $this->db->get('tbl_price')->result_array();
    }
        
    /*
     * function to add new tbl_price
     */
    function add_tbl_price($params)
    {
        $this->db->insert('tbl_price',$params);
        return $this->db->insert_id();
    }
    
    /*
     * function to update tbl_price
     */
    function update_tbl_price($id,$params)
    {
        $this->db->where('id',$id);
        return $this->db->update('tbl_price',$params);
    }
    
    /*
     * function to delete tbl_price
     */
    function delete_tbl_price($id)
    {
        return $this->db->delete('tbl_price',array('id'=>$id));
    }
}
