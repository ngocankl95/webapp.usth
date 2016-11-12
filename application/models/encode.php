<?php 
	/**
	* 
	*/
	class Encode extends CI_Model
	{
		
		function __construct()
		{
			parent::__construct();
		}

		//Generate Random Salt
		function generate_salt()
		{
			$CI =& get_instance();
			$CI->load->library('encrypt');
			return $CI->encrypt->encode(time(), md5('KYnIgZxWKew0nOm2bu4Zd7cMX1pZv0KbavSEdpFlCru'));
		}

		//Create Random Hash based on Salt
		function generate_activation($salt)
		{
			$CI =& get_instance();
			$CI->load->library('encrypt');
			return md5($CI->encrypt->encode(time(),$salt));
		} 

		//Encrypt Password
		function encryptUserPwd($pwd)
		{
			return sha1(md5($pwd));
		}
	}
?>