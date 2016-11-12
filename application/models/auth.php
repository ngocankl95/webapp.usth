<?php
	class Auth extends CI_Model {
		function __construct()
		{
			parent::__construct();
			$this->load->library('session');
			$this->load->database();
			$this->load->helper('url');
			$this->load->model(array('encode'));
		}

		function process_login($login_array_input = NULL){
			if(!isset($login_array_input) OR count($login_array_input) != 2)
				return false;
				
				//set its variable
				$username = $login_array_input[0];
				$password = $login_array_input[1];
				
				// select data from database to check user exist or not?
				$sql = $this->db->query("SELECT * FROM `users` WHERE `username`= '".$username."' OR `email`='".$username."' LIMIT 1");
				
				if ($sql->num_rows() > 0)
				{
					$row = $sql->row();
					// $user_id = $row->ID;
					$user_pass = $row->password;
					// $user_salt = $row->salt;
					
					if($this->encode->encryptUserPwd($password) === $user_pass)
					{
						return true;
					}
					return false;
				}
				return false;
			}

			function check_logged()
			{
				return ($this->session->userdata('logged_user'))?TRUE:FALSE;
			}

			function logged_id()
			{
				return ($this->check_logged())?$this->session->userdata('logged_user'):'';
			}
	}