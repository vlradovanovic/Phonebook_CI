<?php

class Home extends CI_Controller
{
    function __construct() {
        parent::__construct();
    }
    
    function index()
    {
        $this->load->model('LoginModel');
        $temp = $this->session->userdata('logged_in');
        
        if ($temp['id_korisnika'] == "1")
        {
            $this->session->set_userdata('admin', 1);
        }
 else {
            $this->session->set_userdata('admin', 2);
 }
        $obj['id'] = $temp['id'];
        
        if ($this->session->userdata('logged_in'))
        {     
          
                $data['records'] = $this->LoginModel->body($obj);
                $this->load->view('welcome', $data);    
        }
 else {
            $this->load->view('restricted');
 }
 }
 
 function logout()
    {
        $this->session->unset_userdata('logged_in');
      
        redirect('LoginController', 'refresh');
    }
}
?>