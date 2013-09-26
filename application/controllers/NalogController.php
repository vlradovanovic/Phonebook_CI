<?php

class NalogController extends CI_Controller
{
    function __construct() {
        parent::__construct();
        $this->load->model('LoginModel');
    }
    
    function index()
    {
        $this->load->view('kreiraj_nalog');
    }
    
    function verify()
    {
        $this->form_validation->set_rules('ime_prezime', 'Ime i prezime', 'trim|required|xss_clean');
        $this->form_validation->set_rules('korisnik', 'Korisničko ime', 'trim|required|xss_clean');
        $this->form_validation->set_rules('lozinka', 'Lozinka', 'trim|required|xss_clean');
        $this->form_validation->set_rules('relozinka', 'Potvrdi lozinku', 'trim|required|matches[lozinka]');
        $this->form_validation->set_rules('email', 'Email', 'trim|required|valid_email|is_unique[privremeni_korisnici.email]');
        
        $this->form_validation->set_message('is_unique', 'GREŠKA! Uneta Email adresa već postoji');
        
        if ($this->form_validation->run())
        {
            $key = md5(uniqid());
            $this->load->library('email', array('mailtype' => 'html'));
            $this->email->from('noreply@telefonski imenik', 'Admin');
            $this->email->to($this->input->post('email'));
            $this->email->subject('Potvrdite Vašu registraciju');
            
            $message = "<p>Hvala što ste se registrovali. </p>";
            $message .="<p><a href='".base_url()."NalogController/register/$key'>Potvrdi registraciju</a></p>";
            
            $this->email->message($message);
            
            if ($this->LoginModel->add_temp_user($key))
            {
                if ($this->email->send())
                {
                    $this->load->view('confirm');
                }
                else                    echo 'Konfirmacioni link Vam nije poslat. Pokusajte kasnije';
                
            }
            else echo 'Javio se problem oko upisa novog korisnika. Molimo Vas pokusajte kasnije.';
            
        }
        else {
            $this->load->view('kreiraj_nalog');    
        }
        
    }
    
    function register($key)
    {
        if ($this->LoginModel->is_key_valid($key))
        {
            if ($this->LoginModel->add_user($key))
            {
                $this->load->view('success');
            }
        }
 else     echo 'Pogresan key';
    }
}

?>