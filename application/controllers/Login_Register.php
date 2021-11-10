<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Login_Register extends CI_Controller {

	function __construct(){
		parent::__construct();
		$this->load->model("Settings_model");
		$this->load->model("Category_model");
		$this->load->model("Auth_model");
		$this->load->model("Cart_model");
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
		$data['usercart']=$this->Cart_model->getUserCart($countvalue);
		$data['user_cart_product']=$this->Cart_model->getCartDetails($countvalue);
		$data['user_cart_count']=$this->Cart_model->getCartCount($countvalue);
		$data['web_settings']=$this->Settings_model->getSetting('web_settings',true);
		$data['categories'] = $this->Category_model->getCategories();
		$data['sub_categories'] = $this->Category_model->getSubCategories();
		$data['slide'] = $this->Settings_model->getSlider();
		$data['blogcategories'] = $this->Blog_model->getAllBlogCategories();
		$data['footcategories'] = $this->Category_model->getFooterCategories();
		$this->load->view('login_register',$data);
	}

		public function register(){

		$data = $insertdata = array(); 
		$data['categories'] = $this->Category_model->getCategories();
		$data['sub_categories'] = $this->Category_model->getSubCategories();
		$data['web_settings'] = $this->Settings_model->getSetting('web_settings',true);


		if($this->session->userdata('id') && !empty($this->session->userdata('id'))){
			redirect(base_url());
		}
	
		$this->form_validation->set_message('is_unique','Mobile no already exits, Please try another.');
		$this->form_validation->set_rules('username', 'User Name', 'required'); 
        $this->form_validation->set_rules('email', 'Email', 'required|valid_email'); 
        $this->form_validation->set_rules('mobile', 'mobile', 'required|is_unique[tbl_users.mobile]'); 
        $this->form_validation->set_rules('password', 'password', 'required'); 
        $this->form_validation->set_rules('cpassword', 'confirm password', 'required|matches[password]'); 

		if($this->form_validation->run() == true){ 

			$insertdata = array(
	    		"username"=>$this->input->post('username'),
	    		"email"=>$this->input->post('email'),
	    		"mobile"=>$this->input->post('mobile'),
	    		"password"=>password_hash($this->input->post('password'), PASSWORD_BCRYPT),
	    		"active"=>1,
	    		"created"=>date("Y-m-d H:i:s"),
	    	);

	    
	    	$this->db->insert("tbl_users",$insertdata);
	    	$this->session->set_flashdata('success','You have Successfully Registered ! Please login.');
	    	redirect(base_url("Login_Register"));
	    	

		}else{
			$this->session->set_flashdata('error','Registration Failes :(');
		}

    	// redirect(base_url("Auth"));
		$data['user']=$insertdata;
		$this->load->view('login_register', $data);
	}


	public function login()
	{
		$data = array();
		$countvalue=$this->session->userdata('id');
		
		$data['wishlistcount']=$this->Wishlist_model->getWishlist($countvalue);
		$data['usercart']=$this->Cart_model->getUserCart($countvalue);
		$data['user_cart_count']=$this->Cart_model->getCartCount($countvalue);

		$data['web_settings']=$this->Settings_model->getSetting('web_settings',true);
		$data['categories'] = $this->Category_model->getCategories();
		$data['sub_categories'] = $this->Category_model->getSubCategories();


		if(isset($_POST['submit'])){
			$mobile = $this->input->post("mobile");
			$password = $this->input->post("password");

			$res = $this->Auth_model->checkUser($mobile);
			if($res){
				if(password_verify($password, $res['password'])){
					$this->session->set_userdata('id',$res['id']);
					$this->session->set_userdata('user',$res['username']);
					$this->session->set_userdata('email',$res['email']);
					$this->session->set_flashdata('success','Login Succesfully');
					redirect(base_url());
					

				}else{
					$this->session->set_flashdata('error','You have entered wrong password.');
					// redirect(base_url());
				}
			}else{
				$this->session->set_flashdata('error','You have entered wrong mobile no.');
				// redirect(base_url());
			}
		}
		if($this->session->userdata('id') && !empty($this->session->userdata('id'))){
			redirect(base_url());
		}
		$this->load->view('login_register',$data);



		
	}

	public function logout(){
					$this->session->unset_userdata('id');
					$this->session->unset_userdata('user');
					$this->session->unset_userdata('username');
					redirect(base_url()."facebookauth/logout");
					// redirect(base_url());	
	}
}
