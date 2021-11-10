<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Blog_model extends CI_Model {

	
	public function getAllBlogCategories()
	{
		return $this->db->get("tbl_blog_categories")->result_array();
	}

	function getSingleCategory($id){
		$this->db->where("id",$id);
		return $this->db->get("tbl_blog_categories")->row_array();
	}

	function getSingleCategoryBlogs($id){
		$this->db->where("category_id",$id);
		return $this->db->get("tbl_blog")->result_array();
	}

	public function getAllBlog()
	{
		return $this->db->get("tbl_blog")->result_array();
	}

	function getSingleBlog($slug){
		$this->db->where("slug",$slug);
		return $this->db->get("tbl_blog")->result_array();
	}

	function getFourBlog(){
		$this->db->limit(4);
		return $this->db->get("tbl_blog")->result_array();
	}
}
