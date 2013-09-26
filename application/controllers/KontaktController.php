<?php

class KontaktController extends CI_Controller
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
                  $data['records'] = $this->LoginModel->get_Username($obj);
                  $this->load->view('kontakt', $data);
           }
           
           else{
               $this->load->view('restricted');
           }
    }
    
    function verify_email()
    {
        if ($this->session->userdata('logged_in'))
        {
            $this->form_validation->set_rules('ime', 'Vaše ime', 'trim|required|xss_clean');
            $this->form_validation->set_rules('email', 'Vaš email', 'trim|required|xss_clean|valid_email');
            $this->form_validation->set_rules('poruka', 'Poruka', 'trim|required|xss_clean');
            
            if ($this->form_validation->run() == FALSE)
            {
                
                $temp = $this->session->userdata('logged_in');
                $obj['id'] = $temp['id'];
                $data['records'] = $this->LoginModel->get_Username($obj);
                $this->load->view('kontakt', $data);
            }
 else {
   
                $this->load->helper('email');
                $this->load->library('email');
             
                $this->email->from(set_value("email"), set_value("ime"));
                $this->email->to("vl.radovanovic@gmail.com");
                $this->email->subject("Pitanje/poruka sa Telefonskog imenika");
                $this->email->message(set_value("message"));
                
               $mail = $this->email->send();
               if ($mail)
               {
                
                $temp = $this->session->userdata('logged_in');
                $obj['id'] = $temp['id'];
                $data['records'] = $this->LoginModel->get_Username($obj);
                $this->load->view('poslato', $data);
               }
 else {
                   show_404();
 }
  
 }
            
        }
        
 else {
            $this->load->view('restricted');
 }
    }
}
?>