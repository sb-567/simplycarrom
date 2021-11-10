<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Home extends CI_Controller {

	function __construct(){
		parent::__construct();
		$this->load->model("Settings_model");
		$this->load->model("Category_model");
		$this->load->model("Cart_model");
		$this->load->model("Wishlist_model");
		$this->load->model("Product_model");
		$this->load->model("Blog_model");
	}

	public function index()
	{
		$data = array();
		$countvalue=$this->session->userdata('id');
		$data['wishlistcount']=$this->Wishlist_model->getWishlist($countvalue);
		$data['usercart']=$this->Cart_model->getUserCart($countvalue);
		$data['user_cart_product']=$this->Cart_model->getCartDetails($countvalue);
		$data['user_cart_count']=$this->Cart_model->getCartCount($countvalue);
		$data['web_settings']=$this->Settings_model->getSetting('web_settings',true);
		$data['categories'] = $this->Category_model->getCategories();
		$categories= $this->Category_model->getCategories();
		$data['sub_categories'] = $this->Category_model->getSubCategories();
		foreach($categories as $cat){
		   $data['check_categ']=$this->Category_model->getSubCategories($cat['id']);
		}
		
		
		
		
		
		$data['slide'] = $this->Settings_model->getSlider();
		$data['latestproducts'] = $this->Product_model->getLatestProducts();
		$latestproducts = $this->Product_model->getLatestProducts();
		$bestseller= $this->Product_model->getBestSeller();
// 		$priceid = $this->Product_model->getLatestProducts();
// 		foreach($latestproducts as $pid){
// 		    $data['prices'] = $this->Product_model->getPrice($pid['id']);
// 		    $price = $this->Product_model->getPrice($pid['id']);
// 		    print_r($price);
// 		}
		$data['bestseller'] = $this->Product_model->getBestSeller();
		$data['home_category'] = $this->Product_model->getHomeCategories();
		$data['onsale'] = $this->Product_model->getOnSell();
		$data['featured'] = $this->Product_model->getFeaturedProduct();
		$data['blogcategories'] = $this->Blog_model->getAllBlogCategories();
		$data['footcategories'] = $this->Category_model->getFooterCategories();
		$this->load->view('home',$data);
	}
}
