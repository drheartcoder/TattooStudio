<?php
/* 
 * Generated by CRUDigniter v3.2 
 * www.crudigniter.com
 */
 
class Tbl_studio_tattoo_model extends CI_Model
{
    function __construct()
    {
        parent::__construct();
    }
    
    /*
     * Get tbl_studio_tattoo by id
     */
    function get_tbl_studio_tattoo($id)
    {
        return $this->db->get_where('tbl_studio_tattoos',array('id'=>$id))->row_array();
    }
        
    /*
     * Get all tbl_studio_tattoos
     */
    function get_all_tbl_studio_tattoos()
    {
        $this->db->order_by('id', 'desc');
        return $this->db->get('tbl_studio_tattoos')->result_array();
    }
        
    /*
     * function to add new tbl_studio_tattoo
     */
    function add_tbl_studio_tattoo($params)
    {
        $this->db->insert('tbl_studio_tattoos',$params);
        return $this->db->insert_id();
    }
    
    /*
     * function to update tbl_studio_tattoo
     */
    function update_tbl_studio_tattoo($id,$params)
    {
        $this->db->where('id',$id);
        return $this->db->update('tbl_studio_tattoos',$params);
    }
    
    /*
     * function to delete tbl_studio_tattoo
     */
    function delete_tbl_studio_tattoo($id)
    {
        return $this->db->delete('tbl_studio_tattoos',array('id'=>$id));
    }
}
