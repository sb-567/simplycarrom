<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Blog extends CI_Controller {

	function __construct(){
		parent::__construct();
		$this->load->model("Settings_model");
		$this->load->model("Category_model");
		$this->load->model("Cart_model");
		$this->load->model("Wishlist_model");
		$this->load->model("Blog_model");
	}

	public function index()
	{
		$data = array();
		$countvalue=$this->session->userdata('id');
		$data['usercart']=$this->Cart_model->getUserCart($countvalue);
		$data['wishlistcount']=$this->Wishlist_model->getWishlist($countvalue);
		$data['user_cart_product']=$this->Cart_model->getCartDetails($countvalue);
		$data['user_cart_count']=$this->Cart_model->getCartCount($countvalue);
		$data['web_settings']=$this->Settings_model->getSetting('web_settings',true);
		$data['categories'] = $this->Category_model->getCategories();
		$data['sub_categories'] = $this->Category_model->getSubCategories();
		$data['blogcategories'] = $this->Blog_model->getAllBlogCategories();
		$data['footcategories'] = $this->Category_model->getFooterCategories();

		$this->load->view('blog_category',$data);
	}
	
    public function blog_list($id)
	{
		$data = array();
		$countvalue=$this->session->userdata('id');
		$data['usercart']=$this->Cart_model->getUserCart($countvalue);
		$data['user_cart_product']=$this->Cart_model->getCartDetails($countvalue);
		$data['user_cart_count']=$this->Cart_model->getCartCount($countvalue);
		$data['web_settings']=$this->Settings_model->getSetting('web_settings',true);
		$data['categories'] = $this->Category_model->getCategories();
		$data['sub_categories'] = $this->Category_model->getSubCategories();
		$data['blogs'] = $this->Blog_model->getSingleCategoryBlogs($id);
		$data['blogcategories'] = $this->Blog_model->getAllBlogCategories();
		$data['fourblogs'] = $this->Blog_model->getFourBlog();
		$data['footcategories'] = $this->Category_model->getFooterCategories();
		$this->load->view('blog_list',$data);
	}

	public function single_blog($slug)
	{
		$data = array();
		$countvalue=$this->session->userdata('id');
		$data['usercart']=$this->Cart_model->getUserCart($countvalue);
		$data['user_cart_product']=$this->Cart_model->getCartDetails($countvalue);
		$data['user_cart_count']=$this->Cart_model->getCartCount($countvalue);
		$data['web_settings']=$this->Settings_model->getSetting('web_settings',true);
		$data['categories'] = $this->Category_model->getCategories();
		$data['sub_categories'] = $this->Category_model->getSubCategories();
		// $data['blogs'] = $this->Blog_model->getSingleCategoryBlogs($id);
		$data['blogcategories'] = $this->Blog_model->getAllBlogCategories();
		$data['singleblog'] = $this->Blog_model->getSingleBlog($slug);
		$data['fourblogs'] = $this->Blog_model->getFourBlog();
		$data['footcategories'] = $this->Category_model->getFooterCategories();
		$this->load->view('single_blog',$data);
	}
}