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
        $this->load->view('login');
        //load view and pass the data
    }
    //News login
    public function login()
    {
        $this->load->model("");  
        $this->load->library('form_validation');  
        $this->form_validation->set_rules("user", "User Name", 'callback_username_check');  
        $this->form_validation->set_rules("password", "Password", 'required|alpha');  
        if($this->form_validation->run())  
           {  
                //true  
               
                $data = array(  
                     "user"     =>$this->input->post("user"),  
                     "password" =>$this->input->post("password")  
                );  
                ///check form_login
                $this->home_model->login_checker($data);
                
                if ( ! $data["dd"] = $this->home_model->login_checker() ) {    
                    $data['error'] = 'Your Account is Invalid';
                    $this->load->view('test',$data);  
                }  
                else{  
                      
                    $this->load->view('test',$data );  
                }

           }  
           else  
           {  
                //false  
                $this->index();  
           }  
    }
    //old login
    public function dd_login()  
    {   
        //load model
        $this->load->model('home_model');
        $user = $this->input->post('user');  
        $pass = $this->input->post('pass');  
        $data['get_member'] = $this->home_model->get_member();
        
        
        if ($user=='earth' && $pass=='123456')   
        {  
            //declaring session  
            $this->session->set_userdata(array('user'=>$user));  
            $this->load->view('test');  
        }  
        else{  
            $data['error'] = 'Your Account is Invalid';  
            $this->load->view('login',$data);  
        }  
    }
    public function logout()
    {
        $this->session->sess_destroy();
        redirect(set_url("index.php"));
        
    }
}