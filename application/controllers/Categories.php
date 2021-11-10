<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Categories extends CI_Controller {

	function __construct(){
		parent::__construct();
		$this->load->model("Category_model");
		$this->load->model("Settings_model");
		$this->load->model("Cart_model");
		$this->load->model("Wishlist_model");
        $this->load->model("Blog_model");
		// $this->load->model("Media_model",'mm');
	}

	public function index()
	{
		// print_r($this->session->userdata());die;
		$data = array();
        $data['blogcategories'] = $this->Blog_model->getAllBlogCategories();    
		$data['categories'] = $this->Category_model->getAllCategories();
		$data['footcategories'] = $this->Category_model->getFooterCategories();
		// $this->load->view('product-list',$data);
	}

	public function view($id)
	{
		$data = array();
		$countvalue=$this->session->userdata('id');
		$data['wishlistcount']=$this->Wishlist_model->getWishlist($countvalue);
		$data['usercart']=$this->Cart_model->getUserCart($countvalue);
		$data['user_cart_product']=$this->Cart_model->getCartDetails($countvalue);
		$data['user_cart_count']=$this->Cart_model->getCartCount($countvalue);
		$data['subcategorylist'] = $this->Category_model->getSubCategorylist($id);
		// $data['media'] = $this->mm->getAllMedia();
		// $data['categories'] = $this->Category_model->getCategories();
		$data['blogcategories'] = $this->Blog_model->getAllBlogCategories();
		$data['footcategories'] = $this->Category_model->getFooterCategories();
		$data['web_settings']=$this->Settings_model->getSetting('web_settings',true);
		$data['footcategories'] = $this->Category_model->getFooterCategories();
		$this->load->view('product-list',$data);
	}

}
