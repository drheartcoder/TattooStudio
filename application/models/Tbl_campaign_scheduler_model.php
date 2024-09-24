<?php
/* 
 * Generated by CRUDigniter v3.2 
 * www.crudigniter.com
 */
 
class Tbl_campaign_scheduler_model extends CI_Model
{
    function __construct()
    {
        parent::__construct();
    }
    
    /*
     * Get tbl_campaign_scheduler by scheduler_id
     */
    function get_tbl_campaign_scheduler($scheduler_id)
    {
        return $this->db->get_where('tbl_campaign_scheduler',array('scheduler_id'=>$scheduler_id))->row_array();
    }
        
    /*
     * Get all tbl_campaign_scheduler
     */
    function get_all_tbl_campaign_scheduler()
    {
        $this->db->order_by('scheduler_id', 'desc');
        return $this->db->get('tbl_campaign_scheduler')->result_array();
    }
        
    /*
     * function to add new tbl_campaign_scheduler
     */
    function add_tbl_campaign_scheduler($params)
    {
        $this->db->insert('tbl_campaign_scheduler',$params);
        return $this->db->insert_id();
    }
    
    /*
     * function to update tbl_campaign_scheduler
     */
    function update_tbl_campaign_scheduler($scheduler_id,$params)
    {
        $this->db->where('scheduler_id',$scheduler_id);
        return $this->db->update('tbl_campaign_scheduler',$params);
    }
    
    /*
     * function to delete tbl_campaign_scheduler
     */
    function delete_tbl_campaign_scheduler($scheduler_id)
    {
        return $this->db->delete('tbl_campaign_scheduler',array('scheduler_id'=>$scheduler_id));
    }
}
