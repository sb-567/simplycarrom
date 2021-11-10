<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class My_Orders extends CI_Controller {

	function __construct(){
		parent::__construct();
		$this->load->model("Settings_model");
		$this->load->model("Category_model");
		$this->load->model("Cart_model");
		$this->load->model("Account_model");
		$this->load->model("Order_model");
		$this->load->model("Wishlist_model");
		$this->load->library("form_validation");
		$this->load->model("Blog_model");
	}

	public function index()
	{
		$data = array();
		$countvalue=$this->session->userdata('id');
		$data['wishlistcount']=$this->Wishlist_model->getWishlist($countvalue);
		$data['usercart']=$this->Cart_model->getUserCart($countvalue);
		$data['userdetails']=$this->Account_model->getUserDetails($countvalue);
		$data['useraddress']=$this->Account_model->getUserAddress($countvalue);
		$data['user_cart_product']=$this->Cart_model->getCartDetails($countvalue);
		$data['user_cart_count']=$this->Cart_model->getCartCount($countvalue);
		$data['web_settings']=$this->Settings_model->getSetting('web_settings',true);
		$data['categories'] = $this->Category_model->getCategories();
		$data['sub_categories'] = $this->Category_model->getSubCategories();
		$data['blogcategories'] = $this->Blog_model->getAllBlogCategories();
	    $data['orders']=$this->Order_model->getOrderDetailbyid($countvalue);
	    $data['footcategories'] = $this->Category_model->getFooterCategories();
	    
// 		$orderno=$this->Order_model->getOrderDetailbyid($countvalue);
		
// 		foreach($orderno as $ord){
		   
// 		   $data['order_details']=$this->Order_model->getAllOrderDetails($ord['id']);
//         	$order_details=$this->Order_model->getAllOrderDetails($ord['id']);
// 		  //  echo "<pre>";print_r($order_details);
		    		
// 		}
        	
		$this->load->view('my_orders',$data);
	}
	
	public function cancel_order($id){
	    
	   
	   
	    $this->db->where("id",$id);
	    $this->db->set("status","Cancel");
		$this->db->update("tbl_orders");
		
		$this->session->set_flashdata("success","Product Cancel Successfully");
		redirect(base_url("My_Orders"));
	}
	
	public function invoice($od_id)
	{   
		$data = array();
		$countvalue=$this->session->userdata('id');
		$data['wishlistcount']=$this->Wishlist_model->getWishlist($countvalue);
		$data['usercart']=$this->Cart_model->getUserCart($countvalue);
		$data['userdetails']=$this->Account_model->getUserDetails($countvalue);
		$data['useraddress']=$this->Account_model->getUserAddress($countvalue);
		$data['user_cart_product']=$this->Cart_model->getCartDetails($countvalue);
		$data['user_cart_count']=$this->Cart_model->getCartCount($countvalue);
		$data['web_settings']=$this->Settings_model->getSetting('web_settings',true);
		$data['categories'] = $this->Category_model->getCategories();
		$data['sub_categories'] = $this->Category_model->getSubCategories();
		$data['footcategories'] = $this->Category_model->getFooterCategories();
		
	    $data['orders']=$this->Order_model->getOrderDetailbyidemail($od_id);
	    
// 		$orderno=$this->Order_model->getOrderDetailbyid($countvalue);
		
// 		foreach($orderno as $ord){
		   
// 		   $data['order_details']=$this->Order_model->getAllOrderDetails($ord['id']);
//         	$order_details=$this->Order_model->getAllOrderDetails($ord['id']);
// 		  //  echo "<pre>";print_r($order_details);
		    		
// 		}
        	
		$this->load->view('invoice',$data);
	}
	

	
}