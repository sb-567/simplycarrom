<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Common extends CI_Controller {


	function __construct(){
		parent::__construct();
		$this->load->model("Settings_model");
		$this->load->model("Auth_model");
		$this->load->model("Cart_model");
		$this->load->model("Product_model");
		$this->load->model("Category_model");
		$this->load->model("Wishlist_model");
		$this->load->model("Blog_model");
		
		
	
	}
    
    public function fetch(){
      $output = '';
      $query = '';
      
      if($this->input->post('query'))
      {
       $query = $this->input->post('query');
      }
      $data = $this->Settings_model->fetch_data($query);
      $output .= '<ul>';
      if($data->num_rows() > 0)
      {
       foreach($data->result() as $row)
       {
        $output .= '
        
           <li><a href='.base_url().'Products/productdetail/'.$row->slug.'/'.$row->category_id.'>
                <div class="in-line">
                <div class="sm-img"><img src="'.base_url('admin/').$row->image.'" ></div>
                <div class="sm-txt">'.$row->name.'</div>
                </div>
                </a>
            </li>
        ';
       }
      }
      else
      {
       $output .= '<li>No Data Found</li>';
      }
      $output .= '</ul>';
      echo $output;
     }

	public function about()
	{	

	
		$countvalue=$this->session->userdata('id');
		$data['wishlistcount']=$this->Wishlist_model->getWishlist($countvalue);
		$data['usercart']=$this->Cart_model->getUserCart($countvalue);
		$data['user_cart_product']=$this->Cart_model->getCartDetails($countvalue);
		$data['user_cart_count']=$this->Cart_model->getCartCount($countvalue);

		$data['userwishlist']=$this->Wishlist_model->getUserWishlist($countvalue);
		$data['user_wishlist_product']=$this->Wishlist_model->getWishlistDetails($countvalue);
		// $data['user_product']=$this->Product_model->getUserProducts($user_product_id['product_id']);
		$data['web_settings']=$this->Settings_model->getSetting('web_settings',true);
		$data['about_us1']=$this->Settings_model->getSettings('about_us');
		$data['blogcategories'] = $this->Blog_model->getAllBlogCategories();
		$data['categories'] = $this->Category_model->getCategories();
		$data['sub_categories'] = $this->Category_model->getSubCategories();
		$data['footcategories'] = $this->Category_model->getFooterCategories();
		$this->load->view('aboutus',$data);
	}
	
		public function contact()
	{	

		$countvalue=$this->session->userdata('id');
		$data['wishlistcount']=$this->Wishlist_model->getWishlist($countvalue);
		$data['usercart']=$this->Cart_model->getUserCart($countvalue);
		$data['user_cart_product']=$this->Cart_model->getCartDetails($countvalue);
		$data['user_cart_count']=$this->Cart_model->getCartCount($countvalue);

		$data['userwishlist']=$this->Wishlist_model->getUserWishlist($countvalue);
		$data['user_wishlist_product']=$this->Wishlist_model->getWishlistDetails($countvalue);
		// $data['user_product']=$this->Product_model->getUserProducts($user_product_id['product_id']);
		$data['web_settings']=$this->Settings_model->getSetting('web_settings',true);
		$data['about_us1']=$this->Settings_model->getSettings('about_us');
		$data['categories'] = $this->Category_model->getCategories();
		$data['blogcategories'] = $this->Blog_model->getAllBlogCategories();
		$data['sub_categories'] = $this->Category_model->getSubCategories();
		$data['footcategories'] = $this->Category_model->getFooterCategories();
		
		
        
		$this->load->view('contact',$data);
	}
	
		public function send_mail()
	{	

	
		
		$this->load->config('email');
        $this->load->library('email');
        
        $from = $this->config->item('smtp_user');
        $to = $this->config->item('user_mail');
        $name = $this->input->post('name');
        $email = $this->input->post('email');
        $subject = $this->input->post('subject');
        $message = $this->input->post('message');

        $this->email->set_newline("\r\n");
        $this->email->from($from);
        $this->email->to($to);
        $this->email->subject($subject);
        
         $data = array(
             'name'=> $name,
             'email'=> $email,
              'message'=>$message
                 );
        $body = $this->load->view('email_contact.php',$data,TRUE);
        $this->email->message($body);
        

        if ($this->email->send()) 
		{
            // echo 'Email has been sent successfully';
            $this->session->set_flashdata('success','Email has been sent successfully');
            
        } 
		else 
		{
		    $this->session->set_flashdata('success','Email Failed');
            // show_error($this->email->print_debugger());
        }
        
        redirect(base_url("Common/contact"));
        
		
	}


	public function terms_and_condition()
	{	

		$countvalue=$this->session->userdata('id');
		$data['wishlistcount']=$this->Wishlist_model->getWishlist($countvalue);
		$data['usercart']=$this->Cart_model->getUserCart($countvalue);
		$data['user_cart_product']=$this->Cart_model->getCartDetails($countvalue);
		$data['user_cart_count']=$this->Cart_model->getCartCount($countvalue);

		$data['userwishlist']=$this->Wishlist_model->getUserWishlist($countvalue);
		$data['user_wishlist_product']=$this->Wishlist_model->getWishlistDetails($countvalue);
		// $data['user_product']=$this->Product_model->getUserProducts($user_product_id['product_id']);
		$data['web_settings']=$this->Settings_model->getSetting('web_settings',true);
		$data['terms']=$this->Settings_model->getSettings('terms_and_conditions');
		$data['categories'] = $this->Category_model->getCategories();
		$data['sub_categories'] = $this->Category_model->getSubCategories();
		$data['footcategories'] = $this->Category_model->getFooterCategories();
		$this->load->view('terms_and_condition',$data);
	}

	public function refund_and_return()
	{	

		$countvalue=$this->session->userdata('id');
		$data['wishlistcount']=$this->Wishlist_model->getWishlist($countvalue);
		$data['usercart']=$this->Cart_model->getUserCart($countvalue);
		$data['user_cart_product']=$this->Cart_model->getCartDetails($countvalue);
		$data['user_cart_count']=$this->Cart_model->getCartCount($countvalue);

		$data['userwishlist']=$this->Wishlist_model->getUserWishlist($countvalue);
		$data['user_wishlist_product']=$this->Wishlist_model->getWishlistDetails($countvalue);
		// $data['user_product']=$this->Product_model->getUserProducts($user_product_id['product_id']);
		$data['web_settings']=$this->Settings_model->getSetting('web_settings',true);
		$data['refund']=$this->Settings_model->getSettings('refund_policy');
		$data['about_us1']=$this->Settings_model->getSettings('about_us');
		$data['categories'] = $this->Category_model->getCategories();
		$data['sub_categories'] = $this->Category_model->getSubCategories();
		$data['footcategories'] = $this->Category_model->getFooterCategories();
		$this->load->view('refund_and_return',$data);
	}


	
}