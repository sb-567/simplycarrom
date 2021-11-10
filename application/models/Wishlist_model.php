<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Wishlist_model extends CI_Model {

	
	public function getUserWishlist($user_id){

		return $this->db->where('user_id',$user_id)->get("tbl_wishlist")->result_array();

	}
	 public function getWishlist($countvalue)
	{
		// return $this->db->get("tbl_wishlist")->result_array();
		return $this->db->where('user_id',$countvalue)->get("tbl_wishlist")->result_array();
		
	} 

	public function getWishlistDetails($countvalue)
	{
	    
	    $this->db->select('*');
		$this->db->from('tbl_products');
		$this->db->join('tbl_product_variants', 'tbl_product_variants.product_id = tbl_products.id');
		$this->db->join('tbl_product_attributes', 'tbl_product_attributes.product_id = tbl_products.id');        
		$this->db->join('tbl_wishlist', 'tbl_wishlist.product_id = tbl_products.id');        
		$this->db->where('tbl_wishlist.user_id', $countvalue);
		$this->db->group_by('tbl_products.name');         
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

}
