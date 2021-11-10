<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Checkout extends CI_Controller {


	function __construct(){
		parent::__construct();
		$this->load->model("Settings_model");
		$this->load->model("Auth_model");
		$this->load->model("Cart_model");
		$this->load->model("Product_model");
		$this->load->model("Category_model");
		$this->load->model("Wishlist_model");
		$this->load->model("Account_model");
		$this->load->model("Order_model");
		$this->load->model("Blog_model");
		
		
	
	}


	public function index()
	{	

	
		$countvalue=$this->session->userdata('id');
		$data['wishlistcount']=$this->Wishlist_model->getWishlist($countvalue);
		$data['usercart']=$this->Cart_model->getUserCart($countvalue);
		$data['user_cart_product']=$this->Cart_model->getCartDetails($countvalue);
		$data['user_cart_count']=$this->Cart_model->getCartCount($countvalue);
		$data['useraddress']=$this->Account_model->getUserAddress($countvalue);
		$data['userwishlist']=$this->Wishlist_model->getUserWishlist($countvalue);
		$data['user_wishlist_product']=$this->Wishlist_model->getWishlistDetails($countvalue);
		// $data['user_product']=$this->Product_model->getUserProducts($user_product_id['product_id']);
		$data['web_settings']=$this->Settings_model->getSetting('web_settings',true);
		$data['about_us1']=$this->Settings_model->getSettings('about_us');
		$data['categories'] = $this->Category_model->getCategories();
		$data['sub_categories'] = $this->Category_model->getSubCategories();
		$data['promo_code']=$this->Order_model->getAllPromocodes();
		$data['blogcategories'] = $this->Blog_model->getAllBlogCategories();
		$data['footcategories'] = $this->Category_model->getFooterCategories();

		$this->load->view('checkout',$data);
	}

	 public function initiate_razorpay(){
        // $user_id=$this->session->userdata('id');
		 // $adress_id=1;//$this->input->post('add_id');
		 // $total_sp_amt=[200,100];//$this->input->post('total_sp');
		$order_unique_id='ORD-'.rand();
		// print_r($total);
		$total=$this->input->post('final_value');;
		// for($i=0; $i<count($total_sp_amt); $i++){
		//        $total_sp_amt[$i];
		//  $total=+$total_sp_amt[$i];
		// }
		 $this->load->library(['razorpay']);

		$order = $this->razorpay->create_order(($total * 100));

		if (!isset($order['error'])) {
			echo json_encode(array(
				"status"=>true,
				"order_id"=>$order['id'],
				"data"=>$order,
			));
              return false;
        } else {
            echo json_encode(array(
				"status"=>false,
				"order_id"=>$order['error']['description'],
				"data"=>$order,
			));
           return false;
        }


    }


	public function place_order()
	{	
	    
// 	    $user_id=$this->session->userdata('id');
// 		 $adress_id=$this->input->post('add_id');
	   
//           $userdetails=$this->Account_model->getUserDetails($user_id);
// 		$useraddress=$this->Account_model->getUserAddressbyid($adress_id);
		
	   
// 	   	$product_name=$this->input->post('product_name');
// 		$price=$this->input->post('price');
// 		$special_price=$this->input->post('special_price');
// 		$qty=$this->input->post('qty');
// 		$color=$this->input->post('color');
// 		$ply=$this->input->post('ply');
// 		$gst=$this->input->post('gst');
// 		$total_sp_amount=$this->input->post('total_sp');
// 		$total_p_amount=$this->input->post('total_p');
		
// 			$this->load->config('email');
//         $this->load->library('email');
        
//       $from = $this->config->item('smtp_user');
//         $to = $userdetails[0]['email'];
//         $to = $from;

//         $subject = $this->input->post('subject');
//         $message = $this->input->post('message');

//         $this->email->set_newline("\r\n");
//         $this->email->from($from);
//         $this->email->to($to);
//         $this->email->subject('Simply Carrom Order Placed');
    
        	
		
//       for($j=0; $j<count($product_name); $j++){

//         	// echo $product_name[$i]."<br>";
// 			$variant=array(
// 				$color[$j],
// 				$ply[$j]
// 			);
// 			 $variant_text=implode(',', $variant);
			 
// 			 $address=array(
			     
// 			     'username'=> $userdetails[0]['username'],
//                     'address'=> $useraddress[0]['address'],
//                     'area'=> $useraddress[0]['area'],
//                     'location'=> $useraddress[0]['location'],
//                     'city'=> $useraddress[0]['city'],
//                     'pincode'=> $useraddress[0]['pincode'],
// 			     );
// 			     $address_text=implode(',', $address);


// 			 $this->data['details'][]=array(
// 		    		"product_name"=>$product_name[$j],
// 		    		"qty"=>$qty[$j],
// 		    		"price"=>$price[$j],
// 		    		"special_price"=>$special_price[$j],
// 		    		"gst"=>$gst[$j],
// 		    		"variant_name"=>$variant_text,
// 		    		"total_price"=>$total_p_amount[$j],
// 		    		"total_special_price"=>$total_sp_amount[$j],
// 		    		"address"=>$address_text
		    		
// 		    	);
		    	
//         $body = $this->load->view('email_order.php', $this->data,TRUE);		    	
       	
// 		}
		
		 
        
// 		$this->email->message($body);
         
        
        
//         $this->email->send();
		
		
			
		    	
      
		
// 		die();

	if($this->input->post('cod')=='cod'){
			$user_id=$this->session->userdata('id');
			$adress_id=$this->input->post('add_id');
			$total_sp_amt=$this->input->post('total_sp');
			$promo_code=$this->input->post('promo_code');
			$promo_dis=$this->input->post('promo_amt');
			$order_unique_id='ORD-'.rand();
		// print_r($total);
		
		      
		
		    $current_date=date("H:i:s");

			if($user_id>0 && $adress_id>0){
		    	$total=0;
			for($i=0; $i<count($total_sp_amt); $i++){   
				$total=+$total_sp_amt[$i];
			}
			$insertdata=array(
	    		"user_id"=>$user_id,
	    		"order_no"=>$order_unique_id,
	    		"address_id"=>$adress_id,
	    		"promo_code"=>$promo_code,
	    		"promo_discount"=>$promo_dis,
	    		"amount"=>$total,
	    		"order_date"=>date("Y-m-d H:i:s"),
	    		"status"=>'Placed'
		    );
	    	

			$this->db->insert("tbl_orders",$insertdata);
		}

		$order=$this->Order_model->getOrderid($user_id);
		// print($order);
		foreach($order as $od){
			$order_id=$od['id'];
		}

		$product_id=$this->input->post('product_id');
		$product_name=$this->input->post('product_name');
		$price=$this->input->post('price');
		$special_price=$this->input->post('special_price');
		$qty=$this->input->post('qty');
		$color=$this->input->post('color');
		$ply=$this->input->post('ply');
		$gst=$this->input->post('gst');
		$total_sp_amount=$this->input->post('total_sp');
		$total_p_amount=$this->input->post('total_p');

        for($i=0; $i<count($product_name); $i++){

        	// echo $product_name[$i]."<br>";
			$variant=array(
				$color[$i],
				$ply[$i]
			);
			 $variant_text=implode(',', $variant);


			$data=array(
		    		"order_id"=>$order_id,
		    		"product_id"=>$product_id[$i],
		    		"product_name"=>$product_name[$i],
		    		"qty"=>$qty[$i],
		    		"gst"=>$gst[$i],
		    		"price"=>$price[$i],
		    		"special_price"=>$special_price[$i],
		    		"variant_name"=>$variant_text,
		    		"total_price"=>$total_p_amount[$i],
		    		"total_special_price"=>$total_sp_amount[$i],
		    	);

			$this->db->insert("tbl_order_details",$data);
		}
		// exit();

		// $product_id=$this->input->post('product_id');
		 $user_id=$this->session->userdata('id');
		$user_cart_product=$this->Cart_model->getCartDetails($user_id);
		

		foreach($user_cart_product as $cart){
			 $cart_id=$cart['id'];
			 $product_id=$cart['product_id'];
		

		
		    $cartdata = array(
	    		"user_id"=>$user_id,
	    		"id"=>$cart_id
	    		
	    	);

	    
	    	$this->db->where("user_id",$user_id);
	    	$this->db->where("id",$cart_id);
	    	$this->db->delete("tbl_cart",$cartdata);
	    	
	    
	    
	    
		}
		
		
		
		
// // 		echo $current_date;
// // 		$orderno=$this->Order_model->getOrderDetailbyid($user_id, $current_date);
// // 		$order_details=$this->Order_model->getAllOrderDetails($orderno[0]['id']);
        
// //         // echo $orderno[0]['id'];
		
// // 		echo "<pre>"; print_r($orderno);
// // 		echo "<br>";
// // 		echo "<pre>"; print_r($order_details);
// // 		die();
        
        
        
        
        
          $userdetails=$this->Account_model->getUserDetails($user_id);
		$useraddress=$this->Account_model->getUserAddressbyid($adress_id);
		
        	$this->load->config('email');
        $this->load->library('email');
        
        $from = $this->config->item('smtp_user');
        $from1 = $this->config->item('user_mail');
        $to = $userdetails[0]['email'];

        $subject = $this->input->post('subject');
        $message = $this->input->post('message');

        $this->email->set_newline("\r\n");
        $this->email->from($from);
        $this->email->to($to);
        $this->email->cc($from1);
        $this->email->subject('Simply Carrom Order Placed');
    
        	
		
      for($j=0; $j<count($product_name); $j++){

        	// echo $product_name[$i]."<br>";
			$variant=array(
				$color[$j],
				$ply[$j]
			);
			 $variant_text=implode(',', $variant);
			 
			 $address=array(
			     
			     'username'=> $userdetails[0]['username'],
                    'address'=> $useraddress[0]['address'],
                    'area'=> $useraddress[0]['area'],
                    'location'=> $useraddress[0]['location'],
                    'city'=> $useraddress[0]['city'],
                    'pincode'=> $useraddress[0]['pincode'],
			     );
			     $address_text=implode(',', $address);


			 $this->data['details'][]=array(
		    		"order_id"=>$order_id,
		    		"product_name"=>$product_name[$j],
		    		"qty"=>$qty[$j],
		    		"price"=>$price[$j],
		    		"special_price"=>$special_price[$j],
		    		"gst"=>$gst[$j],
		    		"promo_dis"=>$promo_dis,
		    		"variant_name"=>$variant_text,
		    		"total_price"=>$total_p_amount[$j],
		    		"total_special_price"=>$total_sp_amount[$j],
		    		"address"=>$address_text
		    		
		    	);
		    	
        $body = $this->load->view('email_order.php', $this->data,TRUE);		    	
       	
		}
		
		 
        
		$this->email->message($body);
         
        
        
        $this->email->send();
        

	    


		$this->session->set_flashdata("success","Order Placed Successfully");
		redirect(base_url());
		}else if($this->input->post('cod')=='razorpay'){

			$this->load->library(['razorpay']);



			$txn_id = $this->input->post("razorpay_payment_id_new");
			// echo json_encode($_POST);die;

			$payment = $this->razorpay->fetch_payments($txn_id);
			// echo json_encode($payment);die;

			if ($payment['status'] == 'authorized') {
			 	$capture_response = $this->razorpay->capture_payment($payment['amount'], $txn_id, $payment['currency']);
			    if ($capture_response['status'] == 'captured') {
			    	$this->process_next_order();

			    } else if ($capture_response['status'] == 'refunded') {
			    	$this->session->set_flashdata("error","Your amount is refunded");
			    	redirect(base_url("Checkout"));
			 	}else {
			 		$this->session->set_flashdata("error","Your payment is failed");
			    	redirect(base_url("Checkout"));
			 	}
			}else if ($payment['status'] == 'captured') {
				$this->process_next_order();

			}else{
				$this->session->set_flashdata("error","Your payment is failed");
			    	redirect(base_url("Checkout"));
			}

		}

	
		
	
	}
	public function process_next_order($payment_id=""){
		$user_id=$this->session->userdata('id');
		$adress_id=$this->input->post('add_id');
		$total_sp_amt=$this->input->post('total_sp');
		$promo_code=$this->input->post('promo_code');
		$promo_dis=$this->input->post('promo_amt');
		$order_unique_id='ORD-'.rand();
	    $current_date=date("H:i:s");
		if($user_id>0 && $adress_id>0){
	    	$total=0;
			for($i=0; $i<count($total_sp_amt); $i++){   
				$total=+$total_sp_amt[$i];
			}
			$insertdata=array(
	    		"user_id"=>$user_id,
	    		"order_no"=>$order_unique_id,
	    		"address_id"=>$adress_id,
	    		"promo_code"=>$promo_code,
	    		"promo_discount"=>$promo_dis,
	    		"amount"=>$total,
	    		"payment_id"=>$payment_id,
	    		"order_date"=>date("Y-m-d H:i:s"),
	    		"status"=>'Placed'
		    );
	    	$this->db->insert("tbl_orders",$insertdata);
		}

		$order=$this->Order_model->getOrderid($user_id);
		foreach($order as $od){
			$order_id=$od['id'];
		}

		$product_id=$this->input->post('product_id');
		$product_name=$this->input->post('product_name');
		$price=$this->input->post('price');
		$special_price=$this->input->post('special_price');
		$qty=$this->input->post('qty');
		$color=$this->input->post('color');
		$ply=$this->input->post('ply');
		$gst=$this->input->post('gst');
		$total_sp_amount=$this->input->post('total_sp');
		$total_p_amount=$this->input->post('total_p');

        for($i=0; $i<count($product_name); $i++){
			$variant=array(
				$color[$i],
				$ply[$i]
			);
			$variant_text=implode(',', $variant);
			$data=array(
	    		"order_id"=>$order_id,
	    		"product_id"=>$product_id[$i],
	    		"product_name"=>$product_name[$i],
	    		"qty"=>$qty[$i],
	    		"gst"=>$gst[$i],
	    		"price"=>$price[$i],
	    		"special_price"=>$special_price[$i],
	    		"variant_name"=>$variant_text,
	    		"total_price"=>$total_p_amount[$i],
	    		"total_special_price"=>$total_sp_amount[$i],
	    	);

			$this->db->insert("tbl_order_details",$data);
		}
		$user_id=$this->session->userdata('id');
		$user_cart_product=$this->Cart_model->getCartDetails($user_id);
		

		foreach($user_cart_product as $cart){
			$cart_id=$cart['id'];
			$product_id=$cart['product_id'];
		    $cartdata = array(
	    		"user_id"=>$user_id,
	    		"id"=>$cart_id
	    		
	    	);
	    	$this->db->where("user_id",$user_id);
	    	$this->db->where("id",$cart_id);
	    	$this->db->delete("tbl_cart",$cartdata);
		}

        
        $userdetails=$this->Account_model->getUserDetails($user_id);
		$useraddress=$this->Account_model->getUserAddressbyid($adress_id);
		
        $this->load->config('email');
        $this->load->library('email');
        
        $from = $this->config->item('smtp_user');
        $to = $userdetails[0]['email'];
        $to = $from;

        $subject = $this->input->post('subject');
        $message = $this->input->post('message');

        $this->email->set_newline("\r\n");
        $this->email->from($from);
        $this->email->to($to);
        $this->email->subject('Simply Carrom Order Placed');
    
        	
		
      	for($j=0; $j<count($product_name); $j++){
			$variant=array(
				$color[$j],
				$ply[$j]
			);
			$variant_text=implode(',', $variant);
			$address=array(
			    'username'=> $userdetails[0]['username'],
                'address'=> $useraddress[0]['address'],
                'area'=> $useraddress[0]['area'],
                'location'=> $useraddress[0]['location'],
                'city'=> $useraddress[0]['city'],
                'pincode'=> $useraddress[0]['pincode'],
		    );
			$address_text=implode(',', $address);
			$this->data['details'][]=array(
	    		"order_id"=>$order_id,
	    		"product_name"=>$product_name[$j],
	    		"qty"=>$qty[$j],
	    		"price"=>$price[$j],
	    		"special_price"=>$special_price[$j],
	    		"gst"=>$gst[$j],
	    		"promo_dis"=>$promo_dis,
	    		"variant_name"=>$variant_text,
	    		"total_price"=>$total_p_amount[$j],
	    		"total_special_price"=>$total_sp_amount[$j],
	    		"address"=>$address_text
	    		
	    	);
		    	
        	$body = $this->load->view('email_order.php', $this->data,TRUE);		    	
       	
		}
		$this->email->message($body);
        $this->email->send();
		$this->session->set_flashdata("success","Order Placed Successfully");
		redirect(base_url());
	}

	public function apply_promo_code(){
		 $code=$this->input->post('code');
		 $total_value=$this->input->post('total_value');
		 $promo_type=$this->input->post('promo_type');
		 $promo_val=$this->input->post('promo_val');


		 if($promo_type=='percentage'){
		 	
		 	$percentage=$promo_val/100;

		 	$per_value=$total_value*$percentage;

		 	$final_value=$total_value-$per_value;
		 	

		 	$pass=array(
		 		'code'=>$code,
		 		'promo_discount'=>round($final_value, 2),
		 		'promo_amt'=>$per_value,
		 	);
		 	echo json_encode($pass);
		 	

		 }elseif($promo_type=='amount'){

		 	$final_value=$total_value-$promo_val;
		 
		 		$pass=array(
		 		'code'=>$code,
		 		'promo_discount'=>round($final_value, 2),
		 		'promo_amt'=>$promo_val
		 	);
		 		echo json_encode($pass);
		 	 
		 }
	}
	
	


	
}