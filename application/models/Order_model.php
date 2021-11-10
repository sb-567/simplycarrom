<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Order_model extends CI_Model {

	
	public function getAllOrder()
	{
		$this->db->select("o.*,u.username as customer_name");
		$this->db->order_by("id","DESC");
		$this->db->join("tbl_users u","u.id=o.user_id","left");
		return $this->db->get("tbl_orders o")->result_array();
		
	}
	public function getAllPromocodes()
	{
		return $this->db->get("tbl_promo_codes")->result_array();
		
	}
	public function getCategories(){
		return $this->db->where('parent_id','0')->get("tbl_categories")->result_array();
	}
	function getSingleCategory($id){
			$this->db->where("id",$id);
		return $this->db->get("tbl_categories")->row_array();
	}
	function getOrderid($user_id){
			$this->db->select("id");
			$this->db->where("user_id",$user_id);
		return $this->db->get("tbl_orders")->result_array();
	}
	public function getOrderforReview()
	{
		$this->db->select("o.id,o.status,p.id,od.order_id,od.product_id");
		$this->db->join("tbl_products p","p.id=od.product_id","left");
		$this->db->join("tbl_orders o","o.id=od.order_id","left");
		 return $this->db->get("tbl_order_details od")->result_array();
		
	}
// 	function getOrderDetailbyid($user_id){
// 			// $this->db->select("id");
// 			$this->db->select('*');
// 		$this->db->from('tbl_orders');
// 		$this->db->join('tbl_order_details', 'tbl_order_details.order_id = tbl_orders.id');
// 		$this->db->where('tbl_orders.user_id',$user_id);
// 		$this->db->group_by('tbl_orders.order_no');
// 	    $query = $this->db->get(); 
// 	    if($query->num_rows() != 0)
// 	    {
// 	        return $query->result_array();
// 	    }
// 	    else
// 	    {
// 	        return false;
// 	    }
// 	}
	
	function getOrderDetailbyid($user_id){
			// $this->db->select("id");
			$this->db->where("user_id",$user_id);
		return $this->db->get("tbl_orders")->result_array();
	}
	function getOrderDetailbyidemail($id){
			// $this->db->select("id");
			$this->db->where("id",$id);
		return $this->db->get("tbl_orders")->result_array();
	}
	public function getAllOrderDetails($order_id)
	{   
	    $this->db->select('*');
		$this->db->from('tbl_order_details');
		$this->db->join('tbl_products', 'tbl_order_details.product_id = tbl_products.id');
		$this->db->where("order_id",$order_id);
	    $query = $this->db->get(); 
	    if($query->num_rows() != 0)
	    {
	        return $query->result_array();
	    }
	    else
	    {
	        return false;
	    }

		// $this->db->select("o.*,u.username as customer_name");
// 		$this->db->where("order_id",$order_id);
// 		return $this->db->get("tbl_order_details")->result_array();
		
	}
}
