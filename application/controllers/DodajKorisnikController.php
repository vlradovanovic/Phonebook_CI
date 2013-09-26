<?php

class DodajKorisnikController extends CI_Controller
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
                    $result = $this->LoginModel->get_Username($obj);
                
                if ($this->session->userdata('admin') == 1)
                {
                    
                    $other_result = $this->LoginModel->body_administration();
                    $this->load->view('dodaj_korisnik', array ('result' => $result, 'other_result' => $other_result, 'obj' => $obj)); 
                }
 else {
      $this->load->view('restricted_admin');
 }
        }
 else {
            $this->load->view('restricted');
      }
 }
}
?>