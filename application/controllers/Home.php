<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Home extends CI_Controller {
    public function __construct()
    {
        parent::__construct();
        
        //load model
        $this->load->model('home_model');
    }
        
    public function index()
    {
        //get data from the database
        $this->load->view('login');
        //load view and pass the data
    }
    public function login()  
    {
        $data['member'] = $this->home_model->get_member();
        $user = $this->input->post('user');  
        $pass = $this->input->post('pass');  
        if ($user=='sushi' && $pass=='123')   
        {  
            //declaring session  
            $this->session->set_userdata(array('user'=>$user));  
            
           $this->user_assesement();
        }  
        else{  
            $data['error'] = 'Your Account is Invalid';  
            $this->load->view('login');  
        }  
    }
    public function logout()
    {
        $this->session->unset_userdata('user');     
        $this->session->sess_destroy();
        $this->load->view('login');  
        
    }
    public function histoy()
    {
        $history = $this->load->view('history', '', true);
    }
    public function user_assesement()
    {
        $this->load->view('user_assesement'); 
        $assessment = $this->load->view('assessment', '', true);
    }
}