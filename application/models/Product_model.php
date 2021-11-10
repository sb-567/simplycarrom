<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Product_model extends CI_Model {

	
	public function getAllProducts()
	{
		return $this->db->get("tbl_categories")->result_array();
		
	}

	public function getUserProducts($id)
	{
		return $this->db->where('id',$id)->get("tbl_products")->result_array();
		
	}

	public function getVarientvalue($slug){
		$this->db->select('*');
		$this->db->from('tbl_products');
		$this->db->join('tbl_product_variants', 'tbl_product_variants.product_id = tbl_products.id');
		$this->db->where('tbl_products.slug',$slug);
		// $this->db->group_by('tbl_products.name');
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

	public function getColorvarient($slug){
		$this->db->select('*');
		$this->db->from('tbl_products');
		$this->db->join('tbl_product_attributes', 'tbl_product_attributes.product_id = tbl_products.id');
		$this->db->where('tbl_products.slug',$slug);
		// $this->db->group_by('tbl_products.name');
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
	
	public function getLatestProducts(){
		$this->db->select('*');
		$this->db->from('tbl_products');
		$this->db->join('tbl_product_variants', 'tbl_product_variants.product_id = tbl_products.id');
		$this->db->where('tbl_products.latest_product',1);
// 		$this->db->group_by('tbl_products.name');
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
	
		public function getHomeCategories(){
		$this->db->select('*');
		$this->db->from('tbl_categories');
		$this->db->where('tbl_categories.show_on_home',1);
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
	
		public function getHomeCategorieswithdetails($id){
		$this->db->select('*');
		$this->db->from('tbl_products');
		$this->db->join('tbl_product_variants', 'tbl_product_variants.product_id = tbl_products.id');
		$this->db->where('tbl_products.category_id',$id);
		$this->db->group_by('tbl_products.name','tbl_categories.name');
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
	
	
	public function getPrice($id){
	    $this->db->select('*');
		$this->db->from('tbl_product_variants');
// 		$this->db->join('tbl_products', 'tbl_product_variants.product_id = tbl_products.id');
		$this->db->where('product_id',$id);
		$this->db->group_by('special_price');
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
	
	public function getBestSeller()
	{
		$this->db->select('*');
		$this->db->from('tbl_products');
		$this->db->join('tbl_product_variants', 'tbl_product_variants.product_id = tbl_products.id');
		$this->db->where('tbl_products.best_seller',1);
		// $this->db->group_by('tbl_products.name');
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
	
	public function getOnSell()
	{
		$this->db->select('*');
		$this->db->from('tbl_products');
		$this->db->join('tbl_product_variants', 'tbl_product_variants.product_id = tbl_products.id');
		$this->db->where('tbl_products.pro_on_sale',1);
		// $this->db->group_by('tbl_products.name');
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
	
	public function getFeaturedProduct()
	{
		$this->db->select('*');
		$this->db->from('tbl_products');
		$this->db->join('tbl_product_variants', 'tbl_product_variants.product_id = tbl_products.id');
		$this->db->where('tbl_products.featured_pro',1);
		// $this->db->group_by('tbl_products.name');
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

	public function getvarient($slug){
		

		$this->db->select('*');
		$this->db->from('tbl_products');
		$this->db->join('tbl_product_variants', 'tbl_product_variants.product_id = tbl_products.id');
		$this->db->where('tbl_products.slug',$slug);
		// $this->db->group_by('tbl_products.name');
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
	// function getcolorVariants($colors,$ply){
	// 	$array = array('set_attribute' => $colors, 'set_attribute' => $ply);
	// 	$this->db->where($array);
	// 	return $this->db->get("tbl_product_variants")->result_array();
	// }

	function getVariants($colors,$ply){
		$array = array($colors,$ply);

		$this->db->select_sum('special_price');
		$this->db->select_sum('price');
		$this->db->select_sum('stock');
		$this->db->where_in('id',$array);

		 


		return $this->db->get("tbl_product_variants")->result_array();

	}

	function getVariantsimg($colors){
		$array = array($colors);

		$this->db->select('vimage');
		$this->db->where_in('id',$array);

		 


		return $this->db->get("tbl_product_variants")->result_array();

	}
    
    
    // 24/9/21   varient today updated
	// function getVariants($ply){
	// 	// $array = array($colors,$ply);
	// 	$this->db->select_sum('special_price');
	// 	$this->db->select_sum('price');
	// 	$this->db->select_sum('stock');
	// 	$this->db->where('id',$ply);

	// 	return $this->db->get("tbl_product_variants")->result_array();

	// }
	
	function getMinprice(){
	    $this->db->select_min('special_price');
	    return $this->db->get("tbl_product_variants")->result_array();
	}
	function getMaxprice(){
	    $this->db->select_max('special_price');
	    return $this->db->get("tbl_product_variants")->result_array();
	}
	
	function getsortbyprice($ply){
		// return $this->db->where('category_id',$id)->get("tbl_products")->result_array();
		$this->db->select('*');
		$this->db->from('tbl_product_variants');
		
		
// 		$this->db->group_by('tbl_products.name');
		$this->db->last_query();
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
	

	function getSubCategoryProducts($id){
		// return $this->db->where('category_id',$id)->get("tbl_products")->result_array();
		$this->db->select('*');
		$this->db->from('tbl_products');
		$this->db->join('tbl_product_variants', 'tbl_product_variants.product_id = tbl_products.id');
		$this->db->where('tbl_products.category_id',$id);
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

	function getSingleProduct($slug){
		$this->db->select('*');
		$this->db->from('tbl_products');
		$this->db->join('tbl_product_variants', 'tbl_product_variants.product_id = tbl_products.id');
		$this->db->where('tbl_products.slug',$slug);
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
	
	function getRelatedProduct($slug,$catid){
		$this->db->select('*');
		$this->db->from('tbl_products');
		$this->db->join('tbl_product_variants', 'tbl_product_variants.product_id = tbl_products.id');
		$this->db->where('tbl_products.slug !=',$slug);
		$this->db->where('tbl_products.category_id',$catid);
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
	
	function getAllReview(){
		// return $this->db->where('category_id',$id)->get("tbl_products")->result_array();
		$this->db->select('*');
		$this->db->from('tbl_review');
		$this->db->order_by("id","DESC");
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
