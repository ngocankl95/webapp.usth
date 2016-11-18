<?php
class Admin extends CI_Controller {
 
    public function __construct()
    {
        parent::__construct();
        $this->load->model(array('user_management'));

        if($this->auth->check_logged() === false)){
            redirect(base_url().'webapp/login');
        }
    }
 
    public function index()
    {

        //all the posts sent by the view
        $username = $this->input->post('username');        
        $title = $this->input->post('title');        
        // $order = $this->input->post('order'); 
        // $order_type = $this->input->post('order_type'); 

        //pagination settings
        $config['per_page'] = 5;
        // $config['base_url'] = base_url().'admin/users';
        $config['use_page_numbers'] = TRUE;
        $config['num_links'] = 20;
        $config['full_tag_open'] = '<ul>';
        $config['full_tag_close'] = '</ul>';
        $config['num_tag_open'] = '<li>';
        $config['num_tag_close'] = '</li>';
        $config['cur_tag_open'] = '<li class="active"><a>';
        $config['cur_tag_close'] = '</a></li>';

        //limit end
        $page = $this->uri->segment(3);

        //math to get the initial record to be select in the database
        $limit_end = ($page * $config['per_page']) - $config['per_page'];
        if ($limit_end < 0){
            $limit_end = 0;
        } 

        //if order type was changed
        // if($order_type){
        //     $filter_session_data['order_type'] = $order_type;
        // }
        // else{
        //     //we have something stored in the session? 
        //     if($this->session->userdata('order_type')){
        //         $order_type = $this->session->userdata('order_type');    
        //     }else{
        //         //if we have nothing inside session, so it's the default "Asc"
        //         $order_type = 'Asc';    
        //     }
        // }
        // //make the data type var avaible to our view
        // $data['order_type_selected'] = $order_type;        


        //we must avoid a page reload with the previous session data
        //if any filter post was sent, then it's the first time we load the content
        //in this case we clean the session filter data
        //if any filter post was sent but we are in some page, we must load the session data

        //filtered && || paginated
        if($user_id !== false && $title !== false || $this->uri->segment(3) == true){ 
           
            /*
            The comments here are the same for line 79 until 99
            if post is not null, we store it in session data array
            if is null, we use the session data already stored
            we save order into the the var to load the view with the param already selected       
            */

            if($user_id !== 0){
                $filter_session_data['user_selected'] = $user_id;
            }else{
                $user_id = $this->session->userdata('user_selected');
            }
            $data['user_selected'] = $user_id;

            if($title){
                $filter_session_data['title_selected'] = $title;
            }else{
                $title = $this->session->userdata('title_selected');
            }
            $data['title_selected'] = $title;

            // if($order){
            //     $filter_session_data['order'] = $order;
            // }
            // else{
            //     $order = $this->session->userdata('order');
            // }
            // $data['order'] = $order;

            //save session data into the session
            $this->session->set_userdata($filter_session_data);

            //fetch users data into arrays
            $data['users'] = $this->user_management->get_users();

            $data['count_users']= $this->user_management->count_users($user_id, $title);
            $config['total_rows'] = $data['count_users'];

            //fetch sql data into arrays
            if($title){
                // if($order){
                //     $data['users'] = $this->user_management->get_users($user_id, $title, $order, $order_type, $config['per_page'],$limit_end);        
                // }else{
                //     $data['users'] = $this->user_management->get_users($user_id, $title, '', $order_type, $config['per_page'],$limit_end);           
                // }
                $data['users'] = $this->user_management->get_users($user_id, $title, $config['per_page'], $limit_end);
            }else{
                // if($order){
                //     $data['users'] = $this->user_management->get_users($user_id, '', $order, $order_type, $config['per_page'],$limit_end);        
                // }else{
                //     $data['users'] = $this->user_management->get_users($user_id, '', '', $order_type, $config['per_page'],$limit_end);        
                // }
                $data['users'] = $this->user_management->get_users($user_id, '', $config['per_page'],$limit_end);
            }

        }else{

            //clean filter data inside section
            $filter_session_data['user_selected'] = null;
            $filter_session_data['title_selected'] = null;
            // $filter_session_data['order'] = null;
            // $filter_session_data['order_type'] = null;
            $this->session->set_userdata($filter_session_data);

            //pre selected options
            $data['title_selected'] = '';
            $data['user_selected'] = 0;
            // $data['order'] = 'id';

            //fetch sql data into arrays
            $data['users'] = $this->user_management->get_users();
            $data['count_users']= $this->user_management->count_users();
            $data['users'] = $this->user_management->get_users('', '', '', $config['per_page'],$limit_end);        
            $config['total_rows'] = $data['count_users'];

        }//!isset($user_id) && !isset($title) && !isset($order)

        //initializate the panination helper 
        $this->pagination->initialize($config);   

        //load the view
        $data['main_content'] = 'admin/users/list';
        $this->load->view('includes/template', $data);  

    }//index

    public function add()
    {
        //if save button was clicked, get the data sent via post
        if ($this->input->server('REQUEST_METHOD') === 'POST')
        {

            //form validation
            $this->form_validation->set_rules('title', 'title', 'required');
            $this->form_validation->set_rules('user_id', 'ID', 'required');
            $this->form_validation->set_error_delimiters('<div class="alert alert-error"><a class="close" data-dismiss="alert">×</a><strong>', '</strong></div>');

            //if the form has passed through the validation
            if ($this->form_validation->run())
            {
                $data_to_store = array(
                    'title' => $this->input->post('title'),         
                    'user_id' => $this->input->post('user_id')
                );
                //if the insert has returned true then we show the flash message
                if($this->user_management->store_product($data_to_store)){
                    $data['flash_message'] = TRUE; 
                }else{
                    $data['flash_message'] = FALSE; 
                }

            }

        }
        //fetch users data to populate the select field
        $data['users'] = $this->user_management->get_users();
        //load the view
        $data['main_content'] = 'admin/users/add';
        $this->load->view('includes/template', $data);  
    }       

    /**
    * Update item by his id
    * @return void
    */
    public function update()
    {
        //product id 
        $id = $this->uri->segment(4);
  
        //if save button was clicked, get the data sent via post
        if ($this->input->server('REQUEST_METHOD') === 'POST')
        {
            //form validation
            $this->form_validation->set_rules('title', 'title', 'required');
            $this->form_validation->set_rules('user_id', 'ID', 'required');
            $this->form_validation->set_error_delimiters('<div class="alert alert-error"><a class="close" data-dismiss="alert">×</a><strong>', '</strong></div>');
            //if the form has passed through the validation
            if ($this->form_validation->run())
            {
    
                $data_to_store = array(
                    'title' => $this->input->post('title'),          
                    'user_id' => $this->input->post('user_id')
                );
                //if the insert has returned true then we show the flash message
                if($this->user_management->update_product($id, $data_to_store) == TRUE){
                    $this->session->set_flashdata('flash_message', 'updated');
                }else{
                    $this->session->set_flashdata('flash_message', 'not_updated');
                }
                redirect('admin/users/update/'.$id.'');

            }//validation run

        }

        //if we are updating, and the data did not pass trough the validation
        //the code below wel reload the current data

        //fetch users data to populate the select field
        $data['users'] = $this->user_management->get_users();
        //load the view
        $data['main_content'] = 'admin/users/edit';
        $this->load->view('includes/template', $data);            

    }//update

    /**
    * Delete product by his id
    * @return void
    */
    public function delete()
    {
        //product id 
        $id = $this->uri->segment(4);
        $this->user_management->delete_user($id);
        redirect('admin/users');
    }//edit

}