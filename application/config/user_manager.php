<?php  if ( ! defined('BASEPATH')) exit('No direct script access allowed');


/*
settings for new users
*/
$config['accountactive'] = false;
$config['accountblocked'] = false;
$config['profileprivacy'] = 'public';
$config['appearonline'] = 1;

/*
users who didnt show any activity more than 900=15mins will be considered as logged out. works only when the hook is enabled.
*/
$config['login_timeout']=900;

//email settings
$config['email_from']='anngoc.4595@gmail.com';
$config['email_from_name']='ICT Lab';
$config['email_activate_subject']='Activate your account';
$config['email_reset_subject']='Did you requested a password reset?';

/*
image processing
*/
$config['img_dp_path']='./assets/img/dps/';
$config['img_pics_path']='./assets/img/pics/';
$config['img_allowed_types']='gif|jpg';
$config['img_max_size']=1000;
$config['img_max_width']=1000;
$config['img_max_height']=1000;

$config['img_dp_thumb_w']=75;
$config['img_dp_thumb_h']=75;

/*
config email
*/
$config['email_settings'] = array(
   'protocol' => 'smtp',
   'smtp_host' => 'ssl://smtp.gmail.com', //smtp host name
   'smtp_port' => '465', //smtp port number
   'smtp_user' => 'anngoc.4595@gmail.com',
   'smtp_pass' => 'chimyeuuyenle',
   'mailtype' => 'html',
   'charset' => 'iso-8859-1',
   'wordwrap' => TRUE,
   'newline' => "\r\n", //use double quotes
   );

/*
this array defines the rules for the password reset form 2
*/
$config['pwd_reset_rules']=array(
               array(
                     'field'   => 'password', 
                     'label'   => 'Password', 
                     'rules'   => 'trim|required|min_length[8]|max_length[20]'
                  ),
			      array(
                     'field'   => 'passconf', 
                     'label'   => 'Confirm Password', 
                     'rules'   => 'trim|required|min_length[8]|max_length[20]|matches[password]'
                  ),   
               array(
                     'field'   => 'email',
                     'label'   => 'email',
                     'rules'   => 'trim|required|valid_email'
                  ),
			      array(
                     'field'   => 'token', 
                     'label'   => 'token', 
                     'rules'   => 'trim|required'
                  )
            );

/*
this array defines the rules for the profile editor
*/
$config['profile_rules']=array(
               array(
                     'field'   => 'password', 
                     'label'   => 'Your Password', 
                     'rules'   => 'trim|min_length[8]|max_length[20]'
                  ), 
			      array(
                     'field'   => 'passconf', 
                     'label'   => 'Confirm Your Password', 
                     'rules'   => 'trim|min_length[8]|max_length[20]|matches[password]'
                  ),   
               array(
                     'field'   => 'firstname', 
                     'label'   => 'Your First Name', 
                     'rules'   => 'trim|required|xss_clean'
                  ),
               array(
                     'field'   => 'gender', 
                     'label'   => 'Your Gender', 
                     'rules'   => 'trim|required|xss_clean'
                  ),
               array(
                     'field'   => 'lastname', 
                     'label'   => 'Your Last Name', 
                     'rules'   => 'trim|required|xss_clean'
                  ),
			      array(
                     'field'   => 'country', 
                     'label'   => 'Country', 
                     'rules'   => 'trim|required|xss_clean'
                  ),
			      array(
					      'field'   => 'address', 
                     'label'   => 'Your Address', 
                     'rules'   => 'trim|required|xss_clean'
                  ),
            );

// country list that appears on the form
// $config['country_list'] = array(
//    'Vietnam' => 'Vietnam',
//    'Laos' => 'Laos',
//    'Brunei' => 'Brunei',
//    'Cambodia' => 'Cambodia',
//    'Myanmar' => 'Myanmar',
//    'Thailand' => 'Thailand'
//    );

// $config['default_country'] = null;



