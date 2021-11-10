<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Account_model extends CI_Model {

	public function getUserDetails($id)
	{
		return $this->db->where('id',$id)->get("tbl_users")->result_array();
		
	}

	public function getUserAddress($id)
	{
		return $this->db->where('user_id',$id)->get("tbl_address")->result_array();
		
	}
	public function getUserAddressbyid($id)
	{
		return $this->db->where('id',$id)->get("tbl_address")->result_array();
		
	}

}