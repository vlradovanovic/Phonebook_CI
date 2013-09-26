<?php

class verifylogin extends CI_Controller
{
    function __construct() {
        parent::__construct();
        $this->load->model('LoginModel', '' , TRUE);
    }
    
    function index()
    {
        $this->form_validation->set_rules('korisnik', 'Korisnik', 'trim|required|xss_clean');
        $this->form_validation->set_rules('lozinka', 'Lozinka', 'trim|md5|required|xss_clean|callback_verify_password');
        
        if ($this->form_validation->run())
        {
            redirect('Home');
        }
 else {
            $this->load->view('login_view');
 }
    }
            
    function verify_password($user, $pass)
        {
            $user = $this->input->post('korisnik');
            $pass = $this->input->post('lozinka');
            
            $result = $this->LoginModel->login($user, $pass);
          
            if ($result)
            {
                $sess_array = array();
                foreach ($result as $row)
                {
                    $sess_array = array(
                        'ime' => $row->ime, 'username' => $row->username, 'id' => $row->id, 
                        'id_korisnika' => $row->id_korisnika
                    );
                  
                    
                  
                }
                
                $this->session->set_userdata('logged_in', $sess_array);               
                return TRUE;
                
                }
 else {
     
                    $this->form_validation->set_message('verify_password', 'GREŠKA. Uneto je pogrešno 
                        korisničko ime ili lozinka. Molimo pokušajte ponovo.');
                    return FALSE;
 }
 
 
        }
        
        
            
        
}

?>
