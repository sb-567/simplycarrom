<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Orders extends CI_Controller {

	function __construct(){
		parent::__construct();
		if(empty($this->session->userdata('id'))){
			redirect(base_url("Auth"));
		}
		$this->load->model("Order_model",'om');
		$this->load->model("Customer_model",'cm');
	}

	public function index()
	{
		// print_r($this->session->userdata());die;
		$data = array();
		$data['orders'] = $this->om->getAllOrder();	
		$this->load->view('orders/orders-list',$data);
	}
	
	public function ajaxOrderDetails(){
		$order_id = $this->input->post("order_id");
		$order_data = $this->om->getAllOrderDetails($order_id);
		$str = "";
		$total = 0;

		foreach ($order_data as $ord) {
			$str.="<tr><td>".$ord['product_name']." - ".$ord['variant_name']."</td>";
			$str.="<td>".$ord['qty']."</td>";
			$str.="<td>".$ord['special_price']."</td>";
			$str.="<td>".$ord['total_special_price']."</td></tr>";
			$total +=$ord['total_special_price'];
		}
		$str.="<tr><td colspan='3' style='text-align:right'>Total</td><td>".number_format($total,2)."</td></tr>";

		echo $str;

	}

	public function status(){
		 $id = $this->input->post("id");
		 $status = $this->input->post("status");
		 
		 $order_data = $this->om->getOrderDetailbyid($id);
		
        
		if($order_data[0]['status'] == $status){
			$this->session->set_flashdata("error","Already Placed Successfully...");
		 redirect(base_url("Orders"));
		}
		if($order_data[0]['status'] == $status){
			$this->session->set_flashdata("error","Already Packed Successfully...");
		 redirect(base_url("Orders"));
		}
		if($order_data[0]['status'] == $status){
			$this->session->set_flashdata("error","Already Shipped Successfully...");
		 redirect(base_url("Orders"));
		}
		if($order_data[0]['status'] == $status){
			$this->session->set_flashdata("error","Already Delivered Successfully...");
		 redirect(base_url("Orders"));
		}


		$arr=array(
			'status'=>$status
		);
		
	
		 $this->db->where("id",$id);
		 $this->db->update("tbl_orders", $arr);
		 
		 
		 
		  
		 
// 		echo "<pre>"; print_r($order_data); 
		 
		 
		 $data['userdetails']=$this->cm->getUserDetails($order_data[0]['user_id']);
		$userdetails=$this->cm->getUserDetails($order_data[0]['user_id']);
        
        // echo "<pre>"; print_r($userdetails);
        // echo exit();
        
		$data['useraddress']=$this->cm->getUserAddress($order_data[0]['user_id']);
		$useraddress=$this->cm->getUserAddress($order_data[0]['user_id']);
        
        
        
        // echo "<pre>"; print_r($useraddress);
        
        
	   // $data['orders']=$this->om->getOrderDetailbyidemail($order_data[0]['id']);

	   // $orders=$this->om->getOrderDetailbyidemail($order_data[0]['id']);
	    
	   // echo "<pre>"; print_r($orders);
	    
	    
	    $this->load->config('email');
        $this->load->library('email');
        
        $from = $this->config->item('smtp_user');
        $from1 = $this->config->item('user_mail');
        $to = $userdetails[0]['email'];
        // $to = $from;

        $subject = $this->input->post('subject');
        $message = $this->input->post('message');

        $this->email->set_newline("\r\n");
        $this->email->from($from);
        $this->email->to($to);
        $this->email->cc($from1);
        $this->email->subject('Simply Carrom Order Status');
        
        
        $this->data['details'][]=array(
        // $details=array(
			     
			     'username'=> $userdetails[0]['username'],
                    'address'=> $useraddress[0]['address'],
                    'area'=> $useraddress[0]['area'],
                    'location'=> $useraddress[0]['location'],
                    'city'=> $useraddress[0]['city'],
                    'pincode'=> $useraddress[0]['pincode'],
                    'order'=>$order_data
			     );
			     //$address_text=implode(',', $address);
			     
			     //echo "<pre>"; print_r($address_text);
        
         $body=$this->load->view('orders/email_order.php', $this->data,TRUE);		    	
        //  $this->load->view('orders/email_order', $details);		    	
        
        // $this->load->view('orders/orders-list',$data);
        // die();
        
         $this->email->message($body);
         
        
        
        $this->email->send();
	    
// 	    die();
// 		 exit();
		 
		 
		 
		 $this->session->set_flashdata("success","Status Updated Successfully...");
		 redirect(base_url("Orders"));
		

	}
	
	public function delete($id){
		$this->db->where("id",$id);
		$this->db->delete("tbl_orders");

		$this->db->where("order_id",$id);
		$this->db->delete("tbl_order_details");
		$this->session->set_flashdata("success","Product Deleted Successfully");
		redirect(base_url("Orders"));
	}
	
	public function invoice($id)
	{   
		$data = array();
		
		 
		 
		 $order_data = $this->om->getOrderDetailbyid($id);

		$data['userdetails']=$this->cm->getUserDetails($order_data[0]['user_id']);
		$userdetails=$this->cm->getUserDetails($order_data[0]['user_id']);

		$data['useraddress']=$this->cm->getUserAddress($order_data[0]['user_id']);

	    $data['orders']=$this->om->getOrderDetailbyidemail($order_data[0]['id']);

	    $orders=$this->om->getOrderDetailbyidemail($order_data[0]['id']);

// 		$orderno=$this->Order_model->getOrderDetailbyid($countvalue);
		
// 		foreach($orderno as $ord){
		   
// 		   $data['order_details']=$this->Order_model->getAllOrderDetails($ord['id']);
//         	$order_details=$this->Order_model->getAllOrderDetails($ord['id']);
// 		  //  echo "<pre>";print_r($order_details);
		    		
// 		}
        	
		$this->load->view('orders/invoice',$data);
	}

}
