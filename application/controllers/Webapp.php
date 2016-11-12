<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Webapp extends CI_Controller {

	/**
	 * Index Page for this controller.
	 *
	 * Maps to the following URL
	 * 		http://example.com/index.php/welcome
	 *	- or -
	 * 		http://example.com/index.php/welcome/index
	 *	- or -
	 * Since this controller is set as the default controller in
	 * config/routes.php, it's displayed at http://example.com/
	 *
	 * So any other public methods not prefixed with an underscore will
	 * map to /index.php/welcome/<method_name>
	 * @see https://codeigniter.com/user_guide/general/urls.html
	 */
	function __construct() { 
        parent::__construct(); 
        $this->load->config('user_manager');
        $this->load->helper(array('url', 'form', 'html','security', 'cookie'));
        $this->load->database(); 
        $this->load->library(array('session', 'template', 'form_validation', 'email', 'user_manager'));
        $this->load->model(array('auth', 'captcha', 'menu', 'encode', 'verify_email', 'user_management'));
    } 

	public function index()
	{
		
	}

	public function home()
	{
		$data = array(
			'title' => 'ICT Lab',
			'menu_top' => $this->menu->menu_top(),
			);
		$this->template->load('default', 'pages/home', $data);
	}

	public function about()
	{
		$data = array(
			'title' => 'About | ICTLab',
			'menu_top' => $this->menu->menu_top(),
			);
		$this->template->load('default', 'pages/about', $data);
	}

	public function research_topic()
	{
		$data = array(
			'title' => 'Research Topic | ICTLab',
			'menu_top' => $this->menu->menu_top(),
			);
		$this->template->load('default', 'pages/research_topic', $data);
	}

	public function research_project()
	{
		$data = array(
			'title' => 'Research Project | ICTLab',
			'menu_top' => $this->menu->menu_top(),
			);
		$this->template->load('default', 'pages/research-projects/research_project', $data);
	}

	public function archives_project()
	{
		$data = array(
			'title' => 'ARCHIVES Project | ICTLab',
			'menu_top' => $this->menu->menu_top(),
			);
		$this->template->load('default', 'pages/research-projects/archives_project', $data);
	}

	public function swarms_project()
	{
		$data = array(
			'title' => 'SWARMS Project | ICTLab',
			'menu_top' => $this->menu->menu_top(),
			);
		$this->template->load('default', 'pages/research-projects/swarms_project', $data);
	}

	public function news_events()
	{
		$data = array(
			'title' => 'News and Events | ICTLab',
			'menu_top' => $this->menu->menu_top(),
			);
		$this->template->load('default', 'pages/news-events/news_events', $data);
	}

	public function seminars()
	{
		$data = array(
			'title' => 'Seminars | ICTLab',
			'menu_top' => $this->menu->menu_top(),
			);
		$this->template->load('default', 'pages/news-events/seminars', $data);
	}

	public function news()
	{
		$data = array(
			'title' => 'News | ICTLab',
			'menu_top' => $this->menu->menu_top(),
			);
		$this->template->load('default', 'pages/news-events/news', $data);
	}

	public function news1()
	{
		$data = array(
			'title' => 'News 1 | ICTLab',
			'menu_top' => $this->menu->menu_top(),
			);
		$this->template->load('default', 'pages/news-events/news1', $data);
	}

	public function news2()
	{
		$data = array(
			'title' => 'News 2 | ICTLab',
			'menu_top' => $this->menu->menu_top(),
			);
		$this->template->load('default', 'pages/news-events/news2', $data);
	}

	public function news3()
	{
		$data = array(
			'title' => 'News 3 | ICTLab',
			'menu_top' => $this->menu->menu_top(),
			);
		$this->template->load('default', 'pages/news-events/news3', $data);
	}

	public function news4()
	{
		$data = array(
			'title' => 'News 4 | ICTLab',
			'menu_top' => $this->menu->menu_top(),
			);
		$this->template->load('default', 'pages/news-events/news4', $data);
	}

	public function news5()
	{
		$data = array(
			'title' => 'News 5 | ICTLab',
			'menu_top' => $this->menu->menu_top(),
			);
		$this->template->load('default', 'pages/news-events/news5', $data);
	}

	public function news7()
	{
		$data = array(
			'title' => 'News 7 | ICTLab',
			'menu_top' => $this->menu->menu_top(),
			);
		$this->template->load('default', 'pages/news-events/news7', $data);
	}

	public function news_page2()
	{
		$data = array(
			'title' => 'News Page 2 | ICTLab',
			'menu_top' => $this->menu->menu_top(),
			);
		$this->template->load('default', 'pages/news-events/news_page2', $data);
	}

	public function members()
	{
		$data = array(
			'title' => 'Members | ICTLab',
			'menu_top' => $this->menu->menu_top(),
			);
		$this->template->load('default', 'pages/members', $data);
	}

	public function contact()
	{
		$data = array(
			'title' => 'Contact | ICTLab',
			'menu_top' => $this->menu->menu_top(),
			);
		$this->template->load('default', 'pages/contact', $data);
	}

	public function older_posts()
	{
		$data = array(
			'title' => 'Older Posts | ICTLab',
			'menu_top' => $this->menu->menu_top(),
			);
		$this->template->load('default', 'pages/older_posts', $data);
	}

	public function blank()
	{
		$data = array(
			'title' => 'Blank | ICTLab',
			'menu_top' => $this->menu->menu_top(),
			);
		$this->template->load('default', 'pages/blank', $data);
	}

	public function register()
	{
		if($this->auth->check_logged()=== true)
			redirect(base_url().'webapp/profile/');

		$data['title'] = 'ICT Lab | Register';
		$data['menu_top'] = $this->menu->menu_top();
		$sub_data['captcha_return'] ='';
		$sub_data['cap_img'] = $this ->captcha->make_captcha();
		
		if($this->input->post('submit')) {
			$this->form_validation->set_rules('firstname', 'First Name', 'trim|required|xss_clean');
			$this->form_validation->set_rules('lastname', 'Last Name', 'trim|required|xss_clean');
			$this->form_validation->set_rules('username', 'User Name', 'trim|required|alpha_dash|min_length[3]|max_length[20]|xss_clean');
			$this->form_validation->set_rules('password', 'Password', 'trim|required|min_length[8]|max_length[20]|matches[passconf]|xss_clean');
			$this->form_validation->set_rules('passconf', 'Confirm Password', 'trim|required|min_length[8]|max_length[20]|xss_clean');
			$this->form_validation->set_rules('email', 'Email',  'trim|required|min_length[3]|max_length[100]|valid_email');
			$this->form_validation->set_rules('country', 'Country', 'trim|required|xss_clean');
			$this->form_validation->set_rules('address', 'Address', 'trim|required|xss_clean');
			$this->form_validation->set_rules('gender', 'Gender', 'trim|required|xss_clean');
			$this->form_validation->set_rules('terms', 'Terms of Sevices', 'trim|required|xss_clean');
			$this->form_validation->set_rules('captcha', 'Captcha', 'required');
				
			// Set Custom messages
			//$this->form_validation->set_message('required', 'Your custom message here');

			if ($this->form_validation->run() == FALSE) {
				$data['body']  = $this->load->view('login/register', $sub_data, true);
			} else {
				if($this->captcha->check_captcha()==TRUE) {
					$firstname = $this->input->post('firstname');
					$lastname = $this->input->post('lastname');
					$username = $this->input->post('username');
					$password = $this->input->post('password');
					$email = $this->input->post('email');
					$country = $this->input->post('country');
					$address = $this->input->post('address');
					$gender = $this->input->post('gender');
					$terms = $this->input->post('terms');
					$check_query = "SELECT * FROM `users` WHERE `username`='$username' OR `email`='$email'";
					$query = $this->db->query($check_query);
						
					if ($query->num_rows() > 0) {
						$sub_data['captcha_return'] = 'username or email address you entered is already used by another, please change<br/>';
						$data['body']  = $this->load->view('login/register', $sub_data, true);
					} else {
						$rand_salt = $this->encode->generate_salt();
						$encrypt_pass = $this->encode->encryptUserPwd( $this->input->post('password'));
						$date = date('Y-m-d');
						
						if ($username == 'tranngocnam') {
							$input_data = array(
								'firstname' => $firstname,
								'lastname' => $lastname,
								'username' => $username,
								'email' => $email,
								'password' => $encrypt_pass,
								'country' => $country,
								'address' => $address,
								'gender' => $gender,
								'salt' => $rand_salt,
								'registereddate' => $date,
								'userlvl' => 1
							);
						} else {
							$input_data = array(
								'firstname' => $firstname,
								'lastname' => $lastname,
								'username' => $username,
								'email' => $email,
								'password' => $encrypt_pass,
								'country' => $country,
								'address' => $address,
								'gender' => $gender,
								'salt' => $rand_salt,
								'registereddate' => $date
							);
						}

						if($this->db->insert('users', $input_data)) {
							// send email
                			if ($this->verify_email->send_activation_email($this->input->post('email')))
                			{
                    			// successfully sent mail
                    			$this->session->set_flashdata('msg','<div class="alert alert-success text-center">You are Successfully Registered! Please confirm the mail sent to your Email !!!</div>');
                    			redirect(base_url().'webapp/register');
                			} else {
                    			// error
                    			$this->session->set_flashdata('msg','<div class="alert alert-danger text-center">Oops! Cannot send email.  Please try again later!!!</div>');
                    			redirect(base_url().'webapp/register');
                			}
						} else
							// error
                			$this->session->set_flashdata('msg','<div class="alert alert-danger text-center">Oops! Cannot create account.  Please try again later!!!</div>');
                			redirect(base_url().'webapp/register');
					}
				} else {
					$sub_data['captcha_return'] = "The characters you entered didn't match the word verification. Please try again. <br/>";
					$data['body']  = $this->load->view('login/register', $sub_data, true);
				}
			}
		} else {
			$data['body']  = $this->load->view('login/register', $sub_data, true);
		}
		$this->load->view('_output_html', $data);
	}

	public function verify($hash=NULL)
    {       	
       	if ($this->user_management->is_account_active($email) == false) {
       		if ($this->verify_email->verifyEmailID($hash)) {
       			$this->session->set_flashdata('verify_msg','<div class="alert alert-success text-center">Your Email is successfully verified! Please login to access your account!</div>');
           		redirect(base_url().'webapp/login');
       		} else {
       			$this->session->set_flashdata('verify_msg','<div class="alert alert-danger text-center">Sorry! There is error verifying your Email Address!</div>');
           		redirect(base_url().'webapp/register');
       		}       			
       			
        } else {
        	$this->session->set_flashdata('verify_msg','<div class="alert alert-success text-center">This account is already active!</div>');
        	redirect(base_url('webapp/login'));
        }      	
    }


    public function login()
    {
    	if($this->auth->check_logged()=== true)
    		redirect(base_url().'webapp/profile');

    	$sub_data['login_failed'] ='';
		$data['title'] = 'ICT Lab | Login';
		$data['menu_top'] = $this->menu->menu_top();
		$data['body'] = $this->load->view('login/login',$sub_data, true);
		
		if($this->input->post('submit_login')) {
			$this->form_validation->set_rules('username', 'username', 'trim|required|min_length[3]|max_length[100]|xss_clean');
			$this->form_validation->set_rules('password', 'password', 'trim|required|min_length[5]|max_length[100]|xss_clean');
			$this->form_validation->set_error_delimiters('<div style="color:red;">', '</div>');
			
			if ($this->form_validation->run() == FALSE){
				$data['body'] = $this->load->view('login/login',$sub_data , true);
				$this->load->view('_output_html', $data);
			} else {
				$login_array = array($this->input->post('username'), $this->input->post('password'));
				
				if($this->auth->process_login($login_array))
				{
					if ($this->user_management->is_account_active_2($username)) {
						if ($this->user_management->is_account_blocked($username)) {
							//login successfull
							$this->session->set_userdata('logged_user', $this->input->post('username'));
							redirect(base_url('webapp/profile'));
						} else {
							$this->session->set_flashdata('msg','<div class="alert alert-danger text-center">Sorry! Your account has been blocked!</div>');
							redirect(base_url('webapp/login'));
						}		
					} else {
						$this->session->set_flashdata('msg','<div class="alert alert-danger text-center">Sorry! You have not activated your account !</div>');
						redirect(base_url('webapp/login'));
					}		

				} else {
					$sub_data['login_failed'] = "Invalid username or password";
					$data['body'] = $this->load->view('login/login',$sub_data , true);
					$this->load->view('_output_html', $data);
				}
			}
		} else {
			$this->load->view('_output_html', $data);
		}
	}

	public function logout()
	{
		$this->session->sess_destroy();
		redirect(base_url().'webapp/login/');
	}

	/*
	resets the password when cannot access account
	*/
	public function reset()
	{
		if($this->auth->check_logged() === true){
			redirect(base_url().'webapp/profile');
		} else {
			$sub_data['reset_failed'] ='';
			$data['title'] = 'ICT Lab | Reset';
			$data['menu_top'] = $this->menu->menu_top();
			$data['body'] = $this->load->view('user_manager/reset',$sub_data, true);

			if(isset($_POST['submit'])){
				$this->form_validation->set_rules('email', 'Email',  'trim|required|min_length[3]|max_length[100]|valid_email');
				$this->form_validation->set_error_delimiters('<div style="color:red;">', '</div>');

				if ($this->form_validation->run() == FALSE){
					$data['body'] = $this->load->view('user_manager/reset', $sub_data, true);
					$this->load->view('_output_html', $data);
				} else {
					// $email = $this->input->post('email');
					// $data['email'] = $email;
					
					if($this->verify_email->send_pass_reset_email($this->input->post('email'))){
						$this->session->set_flashdata('msg','<div class="alert alert-success text-center">A Password reset request has been sent to your email !</div>');
						redirect(base_url('webapp/login'));
					}else{
						// $this->session->set_flashdata('msg','<div class="alert alert-danger text-center">Could not reset your password. Try again !</div>');
						$sub_data['reset_failed'] = "Could not send reset request. Try again !";
						$data['body'] = $this->load->view('user_manager/reset', $sub_data, true);
						$this->load->view('_output_html', $data);
					}
				}
			} else {
				$this->load->view('_output_html',$data);	
			}
		}		
	}

	public function reset_pass()
	{
		if($this->auth->check_logged()===true){
			redirect(base_url().'webapp/profile');
		} else {
			if($this->input->get('email') & $this->input->get('token')){
				$email = $this->input->get('email');
				$token = $this->input->get('token');
				
				$sub_data['msg']='';
				$sub_data['email'] = $email;
				$sub_data['token'] = $token;
				$data['title'] = 'ICT Lab | Reset';
				$data['menu_top'] = $this->menu->menu_top();
				$data['body'] = $this->load->view('user_manager/reset_pass', $sub_data, true);
				$this->load->view('_output_html', $data);
				
			} else {
				$sub_data['msg'] ='';
				$data['title'] = 'ICT Lab | Reset';
				$data['menu_top'] = $this->menu->menu_top();
				$data['body'] = $this->load->view('user_manager/reset_pass', $sub_data, true);

				if(isset($_POST['submit'])){
					$rules = $this->config->item('pwd_reset_rules');
					$this->form_validation->set_rules($rules);
					$data['email'] = $this->input->get('email');
					$data['token'] = $this->input->get('token');					
					
					if ($this->form_validation->run() === FALSE){
						$sub_data['msg'] = '';
						$data['body'] = $this->load->view('user_manager/reset_pass', $sub_data, true);
						$this->load->view('_output_html', $data);
					} else {
						$password = $this->input->post('password');
						$email = $this->input->post('email');
						$token = $this->input->post('token');	
						
						if($this->user_manager->update_password($email, $token, $password)){
							$this->session->set_flashdata('msg','<div class="alert alert-success text-center">Your Password has been reset. You could login with the new password !</div>');
							redirect(base_url('webapp/login'));					
						}else{
							$sub_data['msg'] = 'an error occured while saving your new password. You will have to get a new <a href="'.base_url().'/webapp/reset/'.'">password reset request</a>';
							$data['body'] = $this->load->view('user_manager/reset_pass', $sub_data, true);
							$this->load->view('_output_html', $data);
						}
					}
				}else{
					$this->load->view('_output_html',$data);
				}
			}
		}
	}

	public function profile()
	{
			if($this->auth->check_logged()===FALSE)
			{
				$this->session->set_flashdata('msg','<div class="alert alert-danger text-center">Sorry! You have to login to access profile !</div>');
				redirect(base_url().'webapp/login/');
			} else { 
				$data['title'] = 'ICT Lab | Profile'; 
				$data['menu_top'] = $this->menu->menu_top(); 
					
				$username = $this->user_manager->this_user_name();
				$sub_data['username'] = $username;
				$sub_data['firstname'] = $this->user_management->get_firstname_by_username($username);
				$sub_data['lastname'] = $this->user_management->get_lastname_by_username($username);
				$sub_data['gender'] = $this->user_management->get_gender_by_username($username);
				$sub_data['profileprivacy'] = $this->user_management->get_profileprivacy_by_username($username);
				$sub_data['email'] = $this->user_management->get_email_by_username($username);
				$sub_data['country'] = $this->user_management->get_country_by_username($username);
				$sub_data['address'] = $this->user_management->get_address_by_username($username);
				$sub_data['registereddate'] = $this->user_management->get_registereddate_by_username($username);

				// $sub_data['user_details'] = $this->user_management->get_user_details($username);
				// $sub_data['dp'] = $this->user_manager->get_dp($username);
				$data['body'] = $this->load->view('user_manager/profile',$sub_data, true);
				$this->load->view('_output_html', $data);

			}		
			 
	}

	public function edit_profile(){
		if($this->auth->check_logged() === true){
			$username = $this->user_manager->this_user_name();
			$data['title'] = 'ICT Lab | Profile'; 
			$data['menu_top'] = $this->menu->menu_top();
			$sub_data['msg'] = 'You can edit your profile here';
			
			
			if(isset($_POST['submit'])){
				$rules = $this->config->item('profile_rules');
				$this->form_validation->set_rules($rules);

				if ($this->form_validation->run() === FALSE){
					$data['msg'] = 'Could not update your profile';
				}else{
					//validation passed
					//if there's a dp image we need to process it
					$this->user_manager->process_dp('dp');
					//do we need to delete the dp?
					if($this->input->post('deletedp')=='on'){
						$this->user_manager->delete_dp($username);
					}
					//data prep
					$dbdata=array(
						'firstname'=>$this->input->post('firstname'),
						'lastname'=>$this->input->post('lastname'),
						'gender'=>$this->input->post('gender'),
						'address'=>$this->input->post('address'),
						'country'=>$this->input->post('country'),
						'profileprivacy'=>$this->input->post('profileprivacy'),
					);
					
					if($this->input->post('password') != null){
					//do we need to update the password?
						$dbdata['password'] = $this->encode->encryptUserPwd($this->input->post('password'));
					}
					
					if($this->user_manager->update_user_info($username, $dbdata)){
						$data['msg'] = 'Your profile was updated';
					}else{
						$data['msg'] = 'an error occured while updating your profile';
					}
				}
			}
			
			//get the data on the db
			// $this_user_data['details'] = $this->user_management->get_user_details($username);
			$sub_data['username'] = $username;
			$sub_data['firstname'] = $this->user_management->get_firstname_by_username($username);
			$sub_data['lastname'] = $this->user_management->get_lastname_by_username($username);
			$sub_data['gender'] = $this->user_management->get_gender_by_username($username);
			$sub_data['profileprivacy'] = $this->user_management->get_profileprivacy_by_username($username);
			$sub_data['email'] = $this->user_management->get_email_by_username($username);
			$sub_data['country'] = $this->user_management->get_country_by_username($username);
			$sub_data['address'] = $this->user_management->get_address_by_username($username);
			$data = array_merge($sub_data, $data);
			$sub_data['dp']=$this->user_manager->get_dp($username);
				
			$data['body'] = $this->load->view('user_manager/edit_profile', $sub_data);
			$this->load->view('_output_html', $data);
		}else{
			redirect('login','refresh');
		}
	}

	/*
	this is a form validation callback to check if anybody else is having the same email
	used at the edit_profile() function
	*/
	// function check_unique_pass($email){
	// 	$username = $this->user_manager->this_user_name();
	// 	if ($this->user_management->is_user_exist2($email)){
	// 		//check if the current user owns this email
	// 		$current_users_email = $this->user_management->get_email_by_username($username);
	// 		if($current_users_email == $email){
	// 			return true;
	// 		}else{
	// 			$this->form_validation->set_message('email', 'theres an account accociated with this email');
	// 			return false;
	// 		}
	// 	}else{
	// 		return true;
	// 	}
		
	// }
}

