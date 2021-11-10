<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Auth_model extends CI_Model {

	public function checkUser($mobile)
	{
		$this->db->where("mobile",$mobile);
		$res = $this->db->get("tbl_users");
		if($res->num_rows() == 1){
			return $res->row_array();
		}else{
			return false;
		}
	}
	
	public function checkUserSocial($userData = array()){
        if(!empty($userData)){
            //check whether user data already exists in database with same oauth info
            $this->db->select("id");
            $this->db->from("social_login_users");
            $this->db->where(array('oauth_provider'=>$userData['oauth_provider'], 'oauth_uid'=>$userData['oauth_uid']));
            $prevQuery = $this->db->get();
            $prevCheck = $prevQuery->num_rows();
            
            if($prevCheck > 0){
                $prevResult = $prevQuery->row_array();
                
                //update user data
                $userData['modified'] = date("Y-m-d H:i:s");
                $update = $this->db->update("social_login_users", $userData, array('id' => $prevResult['id']));
                
                //get user ID
                $social_id = $prevResult['id'];
                $this->db->where("social_id",$social_id);
                $user= $this->db->get("tbl_users")->row_array();
                $userID = $user['id'];
            }else{
                //insert user data
                $userData['created']  = date("Y-m-d H:i:s");
                $userData['modified'] = date("Y-m-d H:i:s");
                $insert = $this->db->insert("social_login_users", $userData);
                $social_id = $this->db->insert_id();

                $newUser = array(
                        "username"=>$userData['first_name']."-".$userData['last_name'].rand(111,999).date("ymd"),
                        "email"=>$userData['email'],
                        // "ip_address"=>$_SERVER['REMOTE_ADDR'],
                        "social_id"=>$social_id,
                );

                $insert = $this->db->insert("tbl_users", $newUser);


                
                //get user ID
                $userID = $this->db->insert_id();
            }
        }
        
        //return user ID
        return $userID?$userID:FALSE;
    }


}