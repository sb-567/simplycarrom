<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Product_List extends CI_Controller {

	function __construct(){
		parent::__construct();
		$this->load->model("Settings_model");
		$this->load->model("Category_model");
		$this->load->model("Wishlist_model");
		$this->load->model("Blog_model");
		$this->load->model("Product_model");
	}

	public function index()
	{
		$data = array();
		$countvalue=$this->session->userdata('id');
		$data['user_cart_count']=$this->Cart_model->getCartCount($countvalue);
		$data['wishlistcount']=$this->Wishlist_model->getWishlist($countvalue);
		$data['userwishlist']=$this->Wishlist_model->getUserWishlist($countvalue);
		$data['web_settings']=$this->Settings_model->getSetting('web_settings',true);
	
		$data['categories'] = $this->Category_model->getCategories();
		$data['sub_categories'] = $this->Category_model->getSubCategories();
		$data['blogcategories'] = $this->Blog_model->getAllBlogCategories();
		$data['footcategories'] = $this->Category_model->getFooterCategories();
		$this->load->view('product_list',$data);
	}

}
