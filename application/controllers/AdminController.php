<?php

class AdminController extends CI_Controller
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
                    $this->load->view('administracija_admin', array ('result' => $result, 'other_result' => $other_result, 'obj' => $obj)); 
                }
                
                elseif ($this->session->userdata('admin') == 2) {
                    $other_result = $this->LoginModel->body_administration();
                    $this->load->view('administracija_user', array ('result' => $result, 'other_result' => $other_result));  
            }
                   
        }
 else {
            $this->load->view('restricted');
      }
 }
 
 function verify_editing_korisnik()
    {
        if ($this->session->userdata('logged_in'))
        {
            if ($this->session->userdata('admin') == 1)
            {
                
                $this->form_validation->set_rules('user', 'Username', 'trim|required|xss_clean');               
                
                
                if ($this->form_validation->run() == TRUE)
                {
                    $id = $this->uri->segment(3);
                 if ($this->input->post('nesto') == 'admin')
                 {
                       if ($this->LoginModel->edit_admin($id))
                    {
                            redirect(site_url().'AdminController', 'refresh');
                    }
                 }
                 elseif ($this->input->post('nesto') == 'user') {
                 if ($this->LoginModel->edit_user($id))
                 {
                     redirect(site_url().'AdminController', 'refresh');
                 }
             }
                  
                    
      
                }
                
         else {
                    $temp = $this->session->userdata('logged_in');
                    $obj['id'] = $temp['id'];
                    $data['records'] = $this->LoginModel->get_Username($obj);
                    $this->load->view('ErrorEditing_user', $data);
   
 }
    }
                
                else {
                $this->load->view('restricted_admin');
 }
 
            }
 else {
                $this->load->view('restricted');
 }
    
}
 
 function izmeni()
{
    $temp = $this->session->userdata('logged_in');
           $obj['id'] = $temp['id'];
          if ($this->session->userdata('logged_in'))
        {     
                    $result = $this->LoginModel->get_Username($obj);
                
                if ($this->session->userdata('admin') == 1)
                {
                    
                    $other_result = $this->LoginModel->body_edit();
                 
                 
                  $this->load->view('izmeni_korisnik', array ('result' => $result, 'other_result' => $other_result, 'obj' => $obj));
              }
              else {
                  $this->load->view('restricted_admin');
              }      
 
 }
                  

           else{
               $this->load->view('restricted');
           }
    }
 
 function delete_from_korisnik()
{
    $akcija = $this->uri->segment(3);
    $id     = $this->uri->segment(4);

    if (isset($id) and $id > 0) {
        if($akcija == 'brisi'){
        
            
            $this->LoginModel->delete_korisnik($id);
            redirect(site_url() . 'AdminController', 'refresh');
}
    }
}
   
}

?>
