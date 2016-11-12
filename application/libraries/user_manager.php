<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed'); 


class User_manager {

	function __construct(){

	}
	
	
	//updates the password for a user
	public function update_password($email,$token,$newpassword){
		$CI =& get_instance();
		
		if($CI->user_management->is_user_exist2($email)){
			$dbtoken = $CI->user_management->get_activation_key_by_email($email);
			if($token == $dbtoken){
				$CI->user_management->update_password($email, $CI->encode->encryptUserPwd($newpassword));
				//and reset the activation key no more resetting
				$salt = $CI->user_management->get_salt_by_email($email);
				$new_activation = $CI->encode->generate_activation($salt);
				$CI->user_management->update_activation_key($email, $new_activation);
				return true;
			}else{
				return false;
			}
		}else{
			return false;
		}
	}
	
	//updates user info
	public function update_user_info($username,$dbdata){
		$CI =& get_instance();
		
		if($CI->user_management->is_user_exist($username)){
			$CI->user_management->update_user($username,$dbdata);
			return true;
		}else{
			return false;
		}
	}
	
	
	/*
	returns the current username
	*/
	public function this_user_name(){
		$CI =& get_instance();
		
		$session_data['username'] = $CI->session->userdata('logged_user');
		return $session_data['username'];
		
	}

	/*
	returns true if the current user is admin
	*/
	public function is_this_admin(){
		$CI =& get_instance();
		
		if($CI->user_management->get_user_lvl($this->this_user_name()) != '0'){
			return true;
		}else{
			return false;
		}
	}	
	/*
	uploads and resizes the dp image
	*/
	public function process_dp($field){
		$CI =& get_instance();

		$config['upload_path'] = $CI->config->item('img_dp_path');
		$config['allowed_types'] = $CI->config->item('img_allowed_types');
		$config['max_size']	= $CI->config->item('img_max_size');
		$config['max_width']  =$CI->config->item('img_max_width');
		$config['max_height']  = $CI->config->item('img_max_height');
		
		$config['file_name']  = $this->this_user_name();
		$config['overwrite']  = true;
		
		$CI->load->library('upload', $config);

		if ( ! $CI->upload->do_upload($field)){
			//print_r($CI->upload->display_errors());//turn on for debugging
			return false;
		}else{
			//print_r($CI->upload->data());//turn on for debugging
			
			$return = $CI->upload->data();
			$filename = $return['full_path'];
			
			//now lets resize it
			$config['image_library'] = 'gd2';
			$config['source_image']	= $filename;
			$config['create_thumb'] = TRUE;
			$config['maintain_ratio'] = TRUE;
			$config['width'] = $CI->config->item('img_dp_thumb_w');
			$config['height'] = $CI->config->item('img_dp_thumb_h');
			
			$CI->load->library('image_lib', $config); 
			$CI->image_lib->resize();
			
			return true;
		}
	}
	
	/*
	deletes or resets the profile picture
	*/
	public function delete_dp($username){
	$CI =& get_instance();
	$CI->load->helper('file');
		if (file_exists($CI->config->item('img_dp_path').$username.'.jpg')){
			delete_files(base_url().'dps\''.$username.'.jpg');
			delete_files(base_url().'dps\''.$username.'_thumb.jpg');
		}
	}
	
	/*
	this function sees if there's a dp for this user or not and returns whats best
	*/
	public function get_dp($username){
	$CI =& get_instance();

		if (file_exists($CI->config->item('img_dp_path').$username.'.jpg')){
			return $CI->config->item('img_dp_path').$username;
		}else{
			return $CI->config->item('img_dp_path').'default';
		}
	}
	
}