<?php 
	/**
	* Model used to send verify email to users
	*/
	class verify_email extends CI_Model
	{
		
		function __construct()
		{
			parent::__construct();
		}
            

		//send verification email to user's email id
    	function send_activation_email($to_email)
    	{          
            $firstname = $this->user_management->get_firstname_by_email($email);
            $from_email = $this->config->item('email_from');
            $email_from_name = $this->config->item('email_from_name');
        	$activate_subject = $this->config->item('email_activate_subject');
            $activate_message = '<h1>Hello "'.$firstname.'" !</h1><h3>You regitered a new account !</h3>
                    <br />
                    <a href="'.base_url().'/webapp/verify/' . md5($to_email) .'">Please click here to verify your email address.
                    </a>
                    <br/><br/><br/>Thanks<br/>ICT Lab';
        
        	//send mail
            $this->email->initialize($this->config->item('email_settings'));
        	$this->email->from($from_email, $email_from_name);
        	$this->email->to($to_email);
        	$this->email->subject($activate_subject);
        	$this->email->message($activate_message);
        	return $this->email->send();
    	}
    
    	//activate user account
    	function verifyEmailID($key)
    	{
        	$data = array('accountactive' => 1);
        	$this->db->where('md5(email)', $key);
        	return $this->db->update('users', $data);
    	}

        /*
        send the password reset mail to the user
        */
        public function send_pass_reset_email($to_email)
        {
            if($this->user_management->is_user_exist2($to_email))
            {
                if($this->user_management->is_account_active($to_email))
                {
                    $salt = $this->user_management->get_salt_by_email($to_email);
                    $new_activation = $this->encode->generate_activation($salt);
                    $this->user_management->update_activation_key($to_email,$new_activation);

                    $firstname = $this->user_management->get_firstname_by_email($to_email);
                    $from_email = $this->config->item('email_from');
                    $email_from_name = $this->config->item('email_from_name');
                    $reset_subject = $this->config->item('email_reset_subject');
                    $reset_message = '<h1>Hello "'.$firstname.'" !</h1><h3>You requested a password reset for your account</h3>
                    <br />
                    <a href="'.base_url().'webapp/reset_pass?email='.$to_email.'&token='.$new_activation.'">Click here to reset your password
                    </a>';
                    
                    
                    //send mail
                    $this->email->initialize($this->config->item('email_settings'));
                    $this->email->from($from_email, $email_from_name);
                    $this->email->to($to_email);
                    $this->email->subject($reset_subject);
                    $this->email->message($reset_message);
                    return $this->email->send();

                }else{
                    return false;
                }
            }else{
                return false;
            }
        }
	}
?>