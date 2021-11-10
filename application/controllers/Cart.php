<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Cart extends CI_Controller {


	function __construct(){
		parent::__construct();
		$this->load->model("Settings_model");
		$this->load->model("Auth_model");
		$this->load->model("Wishlist_model");
		$this->load->model("Cart_model");
		$this->load->model("Product_model");
		$this->load->model("Category_model");
		$this->load->model("Blog_model");
		if(empty($this->session->userdata('id'))){
			redirect(base_url("Login_Register"));
		}
	}


	public function index()
	{	
		$data = array();
		$countvalue=$this->session->userdata('id');
		$data['wishlistcount']=$this->Wishlist_model->getWishlist($countvalue);
		$data['usercart']=$this->Cart_model->getUserCart($countvalue);
		$data['user_cart_product']=$this->Cart_model->getCartDetails($countvalue);
		$data['user_cart_count']=$this->Cart_model->getCartCount($countvalue);
		// $user_product_id=$this->Cart_model->getUserCart($user_id);
		// $data['user_product']=$this->Product_model->getUserProducts($user_product_id['product_id']);
		$data['web_settings']=$this->Settings_model->getSetting('web_settings',true);
		$data['categories'] = $this->Category_model->getCategories();
		$data['sub_categories'] = $this->Category_model->getSubCategories();
		$data['blogcategories'] = $this->Blog_model->getAllBlogCategories();
		$data['footcategories'] = $this->Category_model->getFooterCategories();
		$this->load->view('cart',$data);
	}

	public function add_to_cart()
	{	

		$user_id=$this->session->userdata('id');
		
		$product_id=$this->input->post('product_id');
		$quantity=$this->input->post('qty');
		$sum_sp=$this->input->post('sum_sp');
		$sum_p=$this->input->post('sum_p');
		$ply=$this->input->post('plys');
		$colors=$this->input->post('colors');

		if(!empty($user_id)){
		$insertdata = array(
	    		"product_id"=>$product_id,
	    		"qty"=>$quantity,
	    		"user_id"=>$user_id,
	    		"sum_sp"=>$sum_sp,
	    		"sum_p"=>$sum_p,
	    		"ply"=>$ply,
	    		"colors"=>$colors
	    	);

		

	    // $this->Common_model->getWishlist($user_id);
    	$this->db->insert("tbl_cart",$insertdata);
    	// $this->db->delete("tbl_wishlist",$product_id);
    	$this->session->set_flashdata("success","Successfully Cart Added");
    	redirect($_SERVER['HTTP_REFERER']);
    }else{
    	redirect(base_url("Auth/login"));
    }
	    
	}

	public function remove_cart($cid)
	{	


			
		// $product_id=$this->input->post('pid');
        $user_id=$this->session->userdata('id');
		$insertdata = array(
	    		"product_id"=>$cid,
	    		"user_id"=>$user_id
	    	);

	   
    	$this->db->where("product_id",$cid);
    	$this->db->where("user_id",$user_id);
    	$this->db->delete("tbl_cart",$insertdata);
    	$this->session->set_flashdata("success","Delete Successfully");

    	redirect($_SERVER['HTTP_REFERER']);
	    	

	}


	// public function update()
	// {	
	// 	$qty=$this->input->post('qty');
	//         $user_id=$this->session->userdata('id');

		
			
	// 		$insertdata = array(
	// 	    		"qty"=>$qty,
	// 	    		"user_id"=>$user_id
	// 	    	);

		   
	//     	$this->db->where("qty",$qty);
	//     	$this->db->where("user_id",$user_id);
	//     	$this->db->update("tbl_cart",$insertdata);
	//     	$this->session->set_flashdata("success","Updated Successfully");
    	

 //    	redirect($_SERVER['HTTP_REFERER']);
	    	

	// }

	public function increment_decrement()
	{	
		
		$qtyprice=0;
		$value_cart=0;
		$user_id=$this->session->userdata('id');
		$product_id=$this->input->post('product_id');
		$qty=$this->input->post('new_quantity');
		$sp=$this->input->post('special_price');
		$fprice=$sp*$qty;
		$value_cart=$fprice+($sp*$qty);

		$arr1=array(
				"qty"=>$qty,
	    		"product_id"=>$product_id
	    	);
		$this->db->where("product_id",$product_id);
    	$this->db->where("user_id",$user_id);
    	$this->db->update("tbl_cart",$arr1);
    	
		echo json_encode(array('product_id' => $product_id,'qtyprice' =>$fprice,'total'=> $value_cart));	

		// echo json_encode($qtyprice);
		
	    	

	}

	
}