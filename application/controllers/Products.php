<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Products extends CI_Controller {

	function __construct(){
		parent::__construct();
		$this->load->model("Product_model");
		$this->load->model("Settings_model");
		$this->load->model("Category_model");
		$this->load->model("Cart_model");
		$this->load->model("Wishlist_model");
		$this->load->model("Order_model");
	    $this->load->model("Blog_model");
		// $this->load->model("Media_model",'mm');
	}

	public function view($slug)
	{
	   
		$data = array();
		$countvalue=$this->session->userdata('id');
		$data['wishlistcount']=$this->Wishlist_model->getWishlist($countvalue);
		$data['usercart']=$this->Cart_model->getUserCart($countvalue);
		$data['user_cart_product']=$this->Cart_model->getCartDetails($countvalue);
		$data['user_cart_count']=$this->Cart_model->getCartCount($countvalue);
		$categoryslug = $this->Category_model->getCategoryBySlug($slug);
		$data['submenuproduct']=$this->Category_model->getCategoryByProduct($categoryslug['id']);
		$data['footcategories'] = $this->Category_model->getFooterCategories();
		$data['footcategories'] = $this->Category_model->getFooterCategories();
		$data['slide'] = $this->Settings_model->getSlider();
// 		echo "<pre>"; print_r($submenu);
		
		$data['categoryslug']=$categoryslug;
		$data['subcategoryproducts'] = $this->Product_model->getSubCategoryProducts($categoryslug['id']);
// 		$data['productbycategory'] = $this->Product_model->getSubCategoryProducts($categoryslug['id']);
// 		$data['productbycategory'] = $this->Category_model->getSubCategorylist($categoryslug['id']);
		$data['allproducts'] = $this->Product_model->getAllProducts();
		// $data['media'] = $this->mm->getAllMedia();
		$data['categories'] = $this->Category_model->getCategories();
		$data['sub_categories'] = $this->Category_model->getSubCategories();
		$data['web_settings']=$this->Settings_model->getSetting('web_settings',true);
		$data['user_cart_count']=$this->Cart_model->getCartCount($countvalue);
		$data['blogcategories'] = $this->Blog_model->getAllBlogCategories();
		$data['min_price']=$this->Product_model->getMinprice();
		$data['max_price']=$this->Product_model->getMaxprice();
		
	
		$this->load->view('product_list',$data);

		
	}

	public function productdetail($slug,$catid)
	{
		$data = array();
		$countvalue=$this->session->userdata('id');
		$data['wishlistcount']=$this->Wishlist_model->getWishlist($countvalue);
		$data['usercart']=$this->Cart_model->getUserCart($countvalue);
		$data['user_cart_product']=$this->Cart_model->getCartDetails($countvalue);
		$data['user_cart_count']=$this->Cart_model->getCartCount($countvalue);
		$data['allproducts'] = $this->Product_model->getAllProducts();
		$data['singleproduct'] = $this->Product_model->getSingleProduct($slug);
		$data['relatedproducts'] = $this->Product_model->getRelatedProduct($slug,$catid);
		$data['bestseller'] = $this->Product_model->getBestSeller();
		// $data['media'] = $this->mm->getAllMedia();
		$data['slide'] = $this->Settings_model->getSlider();
		$data['categories'] = $this->Category_model->getCategories();
		$data['sub_categories'] = $this->Category_model->getSubCategories();
		$data['userwishlist']=$this->Wishlist_model->getUserWishlist($countvalue);
		$data['color_varient'] = $this->Product_model->getColorvarient($slug);
		$data['varient_value'] = $this->Product_model->getVarientvalue($slug);
		$data['web_settings']=$this->Settings_model->getSetting('web_settings',true);
		$data['user_cart_count']=$this->Cart_model->getCartCount($countvalue);
		$data['footcategories'] = $this->Category_model->getFooterCategories();
		$this->load->view('product_detail',$data);
	}


	public function product_variant()
	{
		
		$ply=$this->input->post('ply');
		$colors=$this->input->post('colors');
		$test=$this->Product_model->getVariants($ply,$colors);
		
		echo json_encode($test);
	}
	
	public function product_variant_img()
	{
		
		$colors=$this->input->post('colors');
		$test=$this->Product_model->getVariantsimg($colors);
		
		echo json_encode($test);
	}
	
	public function product_variant_img_ply()
	{
		
		$ply=$this->input->post('ply');
		$test=$this->Product_model->getVariantsimg($ply);
		
		echo json_encode($test);
	}
	
	public function sort_by()
	{   
	    $data = array();
	    $min_price=$this->Product_model->getMinprice();
			$max_price=$this->Product_model->getMaxprice();
		$ply=$this->input->post('sortby');
		if($max_price[0]['special_price'] == $ply){
		    $data['sub_categories']=$this->Product_model->getsortbypricemin($ply);    
		}elseif($min_price[0]['special_price'] == $ply){
		    $data['sub_categories']=$this->Product_model->getsortbypricemax($ply);    
		}
		
	
		$this->load->view('product_list',$data);
		
// 		echo json_encode($test1);
	}

	public function add_review()
	{	
		// $op_uid=$this->session->userdata('id');
		
		


		$data = $insertdata = array();

		$insertdata = array(
				"u_id"=>$this->session->userdata('id'),
	    		"p_id"=>$this->input->post('p_id'),
	    		"rating"=>$this->input->post('rating3'),
	    		"comment"=>$this->input->post('review')
	    	);

		// echo "<pre>"; print_r($insertdata);
		// exit();

	    	$this->db->insert("tbl_review",$insertdata);
	    	$this->session->set_flashdata('success','Thank you For your kind words.');
	    	redirect($_SERVER['HTTP_REFERER']);
	}
	
	
}
