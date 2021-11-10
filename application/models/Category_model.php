<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Category_model extends CI_Model {

	
	public function getAllCategories()
	{
		return $this->db->get("tbl_categories")->result_array();
		
	}

	public function getCategories(){
		return $this->db->where('parent_id','0')->get("tbl_categories")->result_array();
	}
	
	public function getsubmenuCategories()
	{
		return $this->db->group_by('tbl_categories.parent_id')->where('parent_id > 0')->get("tbl_categories")->result_array();
		
	}

	public function getSubCategories(){

	return $this->db->where('parent_id > 0')->get("tbl_categories")->result_array();

	}
	
	function getFooterCategories(){
		$this->db->select('*');
		$this->db->from('tbl_categories');
		$this->db->where('parent_id>0');
		$this->db->limit(6);         
	    $query = $this->db->get(); 
	    if($query->num_rows() != 0)
	    {
	        return $query->result_array();
	    }
	    else
	    {
	        return false;
	    }
	}

	function getSubCategorylist($id){
		return  $this->db->where('parent_id',$id)->get("tbl_categories")->result_array();
	}

	public function getCategoryBySlug($slug){
		return  $this->db->where('slug',$slug)->get("tbl_categories")->row_array();
	}
	
	public function getCategoryByProduct($id){
		return $this->db->select('id, parent_id')->where('parent_id',$id)->get("tbl_categories")->result_array();
	}
	

	function getSingleCategory($id){
			$this->db->where("id",$id);
		return $this->db->get("tbl_categories")->row_array();
	}
}
