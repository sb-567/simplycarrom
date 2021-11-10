<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class My_Account extends CI_Controller {

	function __construct(){
		parent::__construct();
		$this->load->model("Settings_model");
		$this->load->model("Category_model");
		$this->load->model("Cart_model");
		$this->load->model("Account_model");
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
		$data['slide'] = $this->Settings_model->getSlider();
		$data['blogcategories'] = $this->Blog_model->getAllBlogCategories();
		$data['footcategories'] = $this->Category_model->getFooterCategories();
		$this->load->view('my_account',$data);
	}

	public function edit(){

		$data = $insertdata = array();

		$insertdata = array(
	    		"username"=>$this->input->post('username'),
	    		"email"=>$this->input->post('email'),
	    		"mobile"=>$this->input->post('mobile'),
	    	);

	    
	    	$this->db->where("id",$this->session->userdata("id"));
	    	$this->db->update("tbl_users",$insertdata);
	    	$this->session->set_flashdata('success','You have Successfully Updated your profile.');
	    	redirect(base_url("My_Account"));
	}

	public function change_password()
	{	
		 
		 if(!empty($this->input->post('oldpass'))){

			 $this->load->library('form_validation');

	        $this->form_validation->set_rules('oldpass', 'old password', 'required');
	        $this->form_validation->set_rules('newpass', 'new password', 'required');
	        $this->form_validation->set_rules('cpass', 'confirm password', 'required|matches[newpass]');


	        if($this->form_validation->run() == true) {
	        	
	            $id = $this->session->userdata('id');

	            $newpass = $this->input->post('newpass');

	            $this->db->where("id",$id);
	            $this->db->update('tbl_users', array('password' => password_hash($newpass, PASSWORD_BCRYPT)));
	        	$this->session->set_flashdata('success','You have Successfully Changed your password. Please Lpgin again');
	         	redirect('login_Register/logout');

		 }else{

				$this->load->view('my_account');
		 	}
		}
	}

	public function add_address()
	{

		$data = $insertdata = array();

		$insertdata = array(
				"user_id"=>$this->session->userdata('id'),
	    		"name"=>$this->input->post('name'),
	    		"mobile"=>$this->input->post('mobile'),
	    		"location"=>$this->input->post('location'),
	    		"area"=>$this->input->post('area'),
	    		"pincode"=>$this->input->post('pincode'),
	    		"city"=>$this->input->post('city'),
	    		"address"=>$this->input->post('address'),
	    	);

	    	$this->db->insert("tbl_address",$insertdata);
	    	$this->session->set_flashdata('success','You have Successfully added your Address.');
	    	redirect(base_url("My_Account"));
	}

	public function remove_address($id)
	{	
	   
    	$this->db->where("id",$id);
    	$this->db->delete("tbl_address");
    	$this->session->set_flashdata("success","Delete Successfully");

    	redirect($_SERVER['HTTP_REFERER']);
	    	

	}

	public function edit_address($id){

		$data = $insertdata = array();

		$insertdata = array(
	    		"name"=>$this->input->post('name'),
	    		"mobile"=>$this->input->post('mobile'),
	    		"location"=>$this->input->post('location'),
	    		"area"=>$this->input->post('area'),
	    		"pincode"=>$this->input->post('pincode'),
	    		"city"=>$this->input->post('city'),
	    		"address"=>$this->input->post('address'),
	    	);
	    
	    	$this->db->where("id",$id);
	    	$this->db->update("tbl_address",$insertdata);
	    	$this->session->set_flashdata('success','You have Successfully Updated your Address.');
	    	redirect(base_url("My_Account"));
	}
}