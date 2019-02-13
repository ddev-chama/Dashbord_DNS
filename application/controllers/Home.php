<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Home extends CI_Controller {
    public function __construct()
    {
        parent::__construct();
    }
        
    public function index()
    {
        //get data from the database
        session_destroy();
        $data['title'] = 'CodeIgniter Simple Login Form With Sessions';  
        $this->load->view("login", $data);  
        //load view and pass the data
    }
    function login_validation()  
      {  
           $this->load->library('form_validation');  
           $this->form_validation->set_rules('username', 'Username', 'required');  
           $this->form_validation->set_rules('password', 'Password', 'required');  
           if($this->form_validation->run())  
           {  
                //true  
                $username = $this->input->post('username');  
                $password = $this->input->post('password');  
                //model function  
                $this->load->model('home_model');  
                if($this->home_model->can_login($username, $password))  
                {  
                     $session_data = array(  
                          'username'     =>     $username  
                     );  
                     $this->session->set_userdata($session_data);  
                     redirect(site_url('home/enter') );  
                }  
                else  
                {  
                     $this->session->set_flashdata('error', 'Invalid Username and Password');  
                     redirect(site_url('home/login'));  
                }  
           }  
           else  
           {  
                //false  
                $this->index();  
           }  
      }  
      function enter(){  
           if($this->session->userdata('username') != '')  
           {  
                echo '<h2>Welcome - '.$this->session->userdata('username').'</h2>';  
                echo '<label><a href="'.site_url("home/logout").'">Logout</a></label>';  
           }  
           else  
           {  
                redirect(site_url('home/index'));  
           }  
      }  
      function logout()  
      {  
           $this->session->unset_userdata('username');  
           redirect(site_url('home/index'));  
      }  
 

}