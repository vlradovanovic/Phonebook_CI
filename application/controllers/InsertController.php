<?php

class InsertController extends CI_Controller
{
    function __construct() {
        parent::__construct();
        $this->load->model('LoginModel');
        
    }
    
    function verify()
    {
        if ($this->session->userdata('logged_in'))
        {
            if ($this->session->userdata('admin') == 1)
            {
                
                $this->form_validation->set_rules('ime_prezime', 'Ime i prezime', 'trim|required|xss_clean');               
                $this->form_validation->set_rules('telefon', 'Telefon', 'trim|required|xss_clean');
                
                if ($this->form_validation->run())
                {
                        if ($this->LoginModel->dodajImenik())
                        {
                            redirect('ImenikController');
                        }
 else {
                            echo "Dodavanje nije uspelo";
 }
                }
 else {
                    $temp = $this->session->userdata('logged_in');
                    $obj['id'] = $temp['id'];
                    $data['records'] = $this->LoginModel->get_Username($obj);
                    $this->load->view('ErrorAdding', $data);
   
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
    
    function verify_korisnik()
    {
        if ($this->session->userdata('logged_in'))
        {
            if ($this->session->userdata('admin') == 1)
            {
                
                $this->form_validation->set_rules('user', 'Username', 'trim|required|xss_clean');               
                $this->form_validation->set_rules('ime', 'Ime i prezime', 'trim|required|xss_clean');
                $this->form_validation->set_rules('passwd', 'Lozinka', 'trim|required|xss_clean');
               $this->form_validation->set_rules('email', 'Email', 'required|valid_email|is_unique[korisnici.email]');
               $this->form_validation->set_rules('nesto', 'Vrsta korisnika', 'trim|required|xss_clean|callback_nesto');
                
                if ($this->form_validation->run() == TRUE)
                {
                    $this->nesto();
                }
 else {
                    $temp = $this->session->userdata('logged_in');
                    $obj['id'] = $temp['id'];
                    $data['records'] = $this->LoginModel->get_Username($obj);
                    $this->load->view('ErrorAdding_Korisnik', $data);
   
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
    
    function nesto()
    {
        $vrsta = $this->input->post('nesto');
        if ($vrsta == 'admin')
        {
            if ($this->LoginModel->dodajKorisnik_admin())
            {
                
                    redirect('AdminController');                 
            }
        
        }
        
        elseif ($vrsta == 'user') {
        if ($this->LoginModel->dodajKorisnik_user())
        {       
                redirect('AdminController');         
        }
    }
    }
}
?>