<?php
if ( ! defined('BASEPATH')) exit('No direct script access allowed');

     class user_management extends CI_Model
     {
          function __construct()
          {
               parent::__construct();
          }


          /*
          GET users from database
          */
          function get_user_details($username){
               $this->db->select('*');
               $this->db->where('username', $this->input->post('username'));
               // $this->db->or_where('email', $this->input->post('username'));
               $query=$this->db->get('users');
               return $query->row_array(); 
          }

          public function get_id_by_username($username){
               $this->db->select('ID');
               $this->db->where('username', $this->input->post('username'));
               $this->db->or_where('email', $this->input->post('username'));
               $query=$this->db->get('users');
               $query=$query->row_array(); 
               return $query['ID'];
          }

          public function get_firstname_by_email($email){
               $this->db->select('firstname');
               $this->db->where('email', $this->input->post('email'));
               $query=$this->db->get('users');
               $query=$query->row_array(); 
               return $query['firstname'];
          }

          public function get_firstname_by_username($username){
               $this->db->select('firstname');
               $this->db->where('username', $this->input->post('username'));
               $this->db->or_where('email', $this->input->post('username'));
               $query=$this->db->get('users');
               $query=$query->row_array(); 
               return $query['firstname'];
          }

          public function get_lastname_by_username($username){
               $this->db->select('lastname');
               $this->db->where('username', $this->input->post('username'));
               $this->db->or_where('email', $this->input->post('username'));
               $query=$this->db->get('users');
               $query=$query->row_array(); 
               return $query['lastname'];
          }

         public function get_gender_by_username($username){
               $this->db->select('gender');
               $this->db->where('username', $this->input->post('username'));
               $this->db->or_where('email', $this->input->post('username'));
               $query=$this->db->get('users');
               $query=$query->row_array(); 
               return $query['gender'];
          }

          public function get_profileprivacy_by_username($username){
               $this->db->select('profileprivacy');
               $this->db->where('username', $this->input->post('username'));
               $this->db->or_where('email', $this->input->post('username'));
               $query=$this->db->get('users');
               $query=$query->row_array(); 
               return $query['profileprivacy'];
          }

          public function get_country_by_username($username){
               $this->db->select('country');
               $this->db->where('username', $this->input->post('username'));
               $this->db->or_where('email', $this->input->post('username'));
               $query=$this->db->get('users');
               $query=$query->row_array(); 
               return $query['country'];
          }

          public function get_address_by_username($username){
               $this->db->select('address');
               $this->db->where('username', $this->input->post('username'));
               $this->db->or_where('email', $this->input->post('username'));
               $query=$this->db->get('users');
               $query=$query->row_array(); 
               return $query['address'];
          }

          public function get_registereddate_by_username($username){
               $this->db->select('registereddate');
               $this->db->where('username', $this->input->post('username'));
               $this->db->or_where('email', $this->input->post('username'));
               $query=$this->db->get('users');
               $query=$query->row_array(); 
               return $query['registereddate'];
          }
            
          function get_username_by_email($email){
               $this->db->select('username');
               $this->db->where('email', $this->input->post('email'));
               $query=$this->db->get('users');
               $query=$query->row_array(); 
               return $query['username'];
          }

          function get_username_by_id($id){
               $this->db->select('username');
               $this->db->where('ID', $this->input->post('ID'));
               $query=$this->db->get('users');
               $query=$query->row_array(); 
               return $query['username'];
          }
          
          function get_email_by_username($username){
               $this->db->select('email');
               $this->db->where('username', $this->input->post('username'));
               $this->db->or_where('email', $this->input->post('username'));
               $query=$this->db->get('users');
               $query=$query->row_array(); 
               return $query['email'];
          }
          
          function get_activation_key_by_email($email){
               $this->db->select('activationkey');
               $this->db->where('email', $this->input->post('email'));
               $query=$this->db->get('users');
               $query=$query->row_array(); 
               return $query['activationkey'];
          }
          
          function get_salt_by_username($username){
               $this->db->select('salt');
               $this->db->where('username', $this->input->post('username'));
               $this->db->or_where('email', $this->input->post('username'));
               $query=$this->db->get('users');
               $query=$query->row_array(); 
               return $query['salt'];
          }    
          
          function get_salt_by_email($email){
               $this->db->select('salt');
               $this->db->where('email', $this->input->post('email'));
               $query=$this->db->get('users');
               $query=$query->row_array(); 
               return $query['salt'];
          }    
          
          
          public function get_password_by_username($username){
               $this->db->select('password');
               $this->db->where('username', $this->input->post('username'));
               $this->db->or_where('email', $this->input->post('username'));
               $query=$this->db->get('users');
               $query=$query->row_array(); 
               return $query['password'];
          }

          public function get_user_online_setting($username){
               $this->db->select('appearonline');
               $this->db->where('username', $this->input->post('username'));
               $this->db->or_where('email', $this->input->post('username'));
               $query=$this->db->get('users');
               $query=$query->row_array(); 
               return $query['appearonline'];
          }
          
          public function get_user_lvl($username){
               $this->db->select('userlvl');
               $this->db->where('username', $this->input->post('username'));
               $this->db->or_where('email', $this->input->post('username'));
               $query=$this->db->get('users');
               $query=$query->row_array(); 
               return $query['userlvl'];
          }
          
          public function get_all_users($start,$per_page){
               $this->db->select('*');
               $this->db->limit($start,$per_page);
               $this->db->order_by('tbl_users_id');
               $query= $this->db->get('users');
               return $query->result_array();
          }

          /*
          CHECK users from database
          */
          public function is_account_active($email){
               $this->db->select('accountactive');
               $this->db->where('email', $this->input->post('email'));
               $query=$this->db->get('users');
               $query=$query->row_array(); 
               return $query['accountactive'];
          }
          
          public function is_account_active_2($username){
               $this->db->select('accountactive');
               $this->db->where('username', $this->input->post('username'));
               $this->db->or_where('email', $this->input->post('username'));
               $query=$this->db->get('users');
               $query=$query->row_array(); 
               if($query['accountactive']==1){
                    return true;
               }else{
                    return false;
               }
          }
               
          public function is_account_blocked($username){
               $this->db->select('accountblocked');
               $this->db->where('username', $this->input->post('username'));
               $this->db->or_where('email', $this->input->post('username'));
               $query=$this->db->get('users');
               $query=$query->row_array(); 
               if($query['accountblocked']==0){
                    return true;
               }else{
                    return false;
               }

          }
          
          public function is_user_exist($username){
               $this->db->select('*');
               $this->db->where('username', $this->input->post('username'));
               $this->db->or_where('email', $this->input->post('username'));
               $query=$this->db->get('users');
               if($query -> num_rows() > 0){
                    return true;
               }else{
                    return false;
               }
          }
          
          public function is_user_exist2($email){
               $this->db->select('*');
               $this->db->where('email', $this->input->post('email'));
               $query=$this->db->get('users');
               if($query -> num_rows()> 0){
                    return true;
               }else{
                    return false;
               }
          }
          
          public function is_user_logged_in($username){
               $this->db->select('*');
               $this->db->where('loggedusername = "'.$username.'"');
               $query=$this->db->get('loggedin_users');
                   if($query -> num_rows() > 0){
                    return true;
               }else{
                    return false;
               }
          }

          /*
          UPDATE users from database
          */
          public function update_activation_key($email,$new_activation){
               $this->db->where('email', $this->input->post('email'));
               return $this->db->update('users', array('activationkey'=>$new_activation));
          }    
          
          public function update_password($email,$new_pass){
               $this->db->where('email', $this->input->post('email'));
               return $this->db->update('users', array('password' => $new_pass));
          }  
          
          function update_user($username,$dbdata){
               $this->db->where('username', $this->input->post('username'));
               return $this->db->update('users', $dbdata);
          }
     }
?>