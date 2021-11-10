<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Settings_model extends CI_Model {

	
	public function getSetting($variable,$jsonConvert = false)
	{
		$data =  $this->db->where("variable",$variable)->get("tbl_settings")->row_array();
		// return $data["value"];
		 if(!empty($data)){

			return $jsonConvert ? json_decode($data['value'],true) : $data['value'];
		}else{
			return false;
		}

	}
	
	function getSettings($variable){
		$this->db->select('value');
		$this->db->from('tbl_settings');
		$this->db->where('variable',$variable);
	    $query = $this->db->get(); 
	    if($query->num_rows() != 0)
	    {
	        return $query->row_array();
	    }
	    else
	    {
	        return false;
	    }
	}

	public function getSlider(){
		return $this->db->get("tbl_slider")->result_array();
	}
	
	public function fetch_data($query){
      $this->db->select("*");
      $this->db->from("tbl_products");
      if($query != '')
      {
       $this->db->like('name', $query);
    //   $this->db->or_like('short_description', $query);
      }
      $this->db->order_by('id', 'ASC');
      return $this->db->get();
     }
}