<?php 
	/**
	* 
	*/
	class Menu extends CI_Model
	{
		
		function __construct()
		{
			parent::__construct();
			$this->load->library('session');
			$this->load->database();
			$this->load->helper('url');
			$this->load->model(array('auth'));
		}

		function create_menu($menu, $separator = '|')
		{
			$data = array(
				'menu' => $menu,
				'separator' => $separator
			);

			return $this->load->view('_links', $data, true);
		}

		function menu_top()
		{
			$menu_common = array(
				'Home' => base_url('webapp'),
				);

			$menu_unlogged = array(
				'Register' => base_url('webapp/register'),
				'Login' => base_url().'webapp/login'
				);

			$menu_logged = array(
				'People' => '#',
				'My Account' => base_url().'webapp/profile',
				'Logout' => base_url().'webapp/logout'
				 );

			$menu = array_merge($menu_common,($this->auth->check_logged() == true)?$menu_logged:$menu_unlogged);
			return $this->create_menu($menu);
		}
	}
?>