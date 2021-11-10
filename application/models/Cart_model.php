<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Cart_model extends CI_Model {

	
	public function getUserCart($user_id){

		return $this->db->where('user_id',$user_id)->get("tbl_cart")->result_array();

	}
	

	public function getCartDetails($countvalue)
	{
	    
	    $this->db->select('*,tbl_taxes.percentage as taxes_percentage');
		$this->db->from('tbl_products');
		$this->db->join('tbl_product_variants', 'tbl_product_variants.product_id = tbl_products.id');
		$this->db->join('tbl_product_attributes', 'tbl_product_attributes.product_id = tbl_products.id');
		$this->db->join('tbl_taxes', 'tbl_taxes.id = tbl_products.tax_id', 'left');        
		$this->db->join('tbl_cart', 'tbl_cart.product_id = tbl_products.id');        
		$this->db->where('tbl_cart.user_id', $countvalue);
		$this->db->group_by('tbl_products.name');         
	    $query = $this->db->get(); 
	    if($query->num_rows() != 0)
	    {
	        return $query->result_array();
	    }else{
	        return false;
	    }
	}
	
		public function getproducttax()
	{
	    
	    $this->db->select('*');
		$this->db->from('tbl_taxes');
		$this->db->join('tbl_products', 'tbl_taxes.id = tbl_products.tax_id');        
	    $query = $this->db->get(); 
	    if($query->num_rows() != 0)
	    {
	        return $query->result_array();
	    }else{
	        return false;
	    }
	}

	public function getCartCount($countvalue)
	{
	    
	    $this->db->select('*');
		$this->db->from('tbl_products');
		$this->db->join('tbl_product_variants', 'tbl_product_variants.product_id = tbl_products.id');
		$this->db->join('tbl_product_attributes', 'tbl_product_attributes.product_id = tbl_products.id');
		$this->db->join('tbl_cart', 'tbl_cart.product_id = tbl_products.id');        
		$this->db->where('tbl_cart.user_id', $countvalue);
		$this->db->group_by('tbl_products.name');         
	    $query = $this->db->get(); 
	    if($query->num_rows() != 0)
	    {
	        return $query->num_rows();
	    }
	    else
	    {
	        return false;
	    }
	}

}
