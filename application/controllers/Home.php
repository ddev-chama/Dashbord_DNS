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
        $data['member'] = $this->home_model->get_member();
        
        //load view and pass the data
        $this->load->view('home', $data);
    }
}