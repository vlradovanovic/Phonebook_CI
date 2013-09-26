<?php

class DodajImenikController extends CI_Controller
{
    function __construct() {
        parent::__construct();
        $this->load->model('LoginModel');
       
    }
    
    function index()
    {
           $temp = $this->session->userdata('logged_in');
           $obj['id'] = $temp['id'];
           if ($this->session->userdata('logged_in'))
           {
              if ($this->session->userdata('admin') == 1)
              {
                  
                  $data['records'] = $this->LoginModel->get_Username($obj);
                  $this->load->view('dodaj_imenik', $data);
              }
 else {
                  $this->load->view('restricted_admin');
 }
           }
           else{
               $this->load->view('restricted');
           }
    }
}
?>