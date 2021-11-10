<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Wishlist extends CI_Controller {


	function __construct(){
		parent::__construct();
		$this->load->model("Settings_model");
		$this->load->model("Auth_model");
		$this->load->model("Cart_model");
		$this->load->model("Product_model");
		$this->load->model("Category_model");
		$this->load->model("Wishlist_model");
		$this->load->model("Blog_model");
		if(empty($this->session->userdata('id'))){
			redirect(base_url("Login_Register"));
		}
	}


	public function index()
	{	

	
		$countvalue=$this->session->userdata('id');
		$data['wishlistcount']=$this->Wishlist_model->getWishlist($countvalue);
		$data['usercart']=$this->Cart_model->getUserCart($countvalue);
		$data['user_cart_product']=$this->Cart_model->getCartDetails($countvalue);
		$data['user_cart_count']=$this->Cart_model->getCartCount($countvalue);
        $data['blogcategories'] = $this->Blog_model->getAllBlogCategories();
		$data['userwishlist']=$this->Wishlist_model->getUserWishlist($countvalue);
		$data['user_wishlist_product']=$this->Wishlist_model->getWishlistDetails($countvalue);
		// $data['user_product']=$this->Product_model->getUserProducts($user_product_id['product_id']);
		$data['web_settings']=$this->Settings_model->getSetting('web_settings',true);
		$data['categories'] = $this->Category_model->getCategories();
		$data['sub_categories'] = $this->Category_model->getSubCategories();
		$data['footcategories'] = $this->Category_model->getFooterCategories();
		$this->load->view('wishlist',$data);
	}

	public function add_to_wishlist()
	{	

		
		
		

		if(!empty($this->session->userdata('id'))){
		    
		    if(!empty($this->input->post('wish_id'))){
		    
    	$this->db->where("id",$this->input->post('wish_id'));
    	$this->db->delete("tbl_wishlist");
    	$this->session->set_flashdata("success","Wishlist Deleted Successfully");
    	redirect($_SERVER['HTTP_REFERER']);
		        
		        
		        
		    }else{
		        
		 $user_id=$this->session->userdata('id');
		 $product_id=$this->input->post('product_id');
		
		
		$insertdata = array(
	    		"product_id"=>$product_id,
	    		"user_id"=>$user_id
	    	);

	    // $this->Common_model->getWishlist($user_id);
    	$this->db->insert("tbl_wishlist",$insertdata);
    	// $this->db->delete("tbl_wishlist",$product_id);
    	$this->session->set_flashdata("success","Successfully Wishlist Added");
    	redirect($_SERVER['HTTP_REFERER']);
    
		    }
    
    
    	
    	
    }else{
    	redirect(base_url("Auth/login"));
    }
	    
	}

	public function remove_wishlist($cid)
	{	


			
		// $product_id=$this->input->post('pid');
        $user_id=$this->session->userdata('id');
		$insertdata = array(
	    		"product_id"=>$cid,
	    		"user_id"=>$user_id
	    	);

	   
    	$this->db->where("product_id",$cid);
    	$this->db->where("user_id",$user_id);
    	$this->db->delete("tbl_wishlist",$insertdata);
    	$this->session->set_flashdata("success","Delete Successfully");

    	redirect($_SERVER['HTTP_REFERER']);
	    	

	}

	
}