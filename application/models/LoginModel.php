<?php

class LoginModel extends CI_Model
{
    function login($user, $pass)
    {
        $this->db->where('username', $user);
        $this->db->where('password', md5($pass));
       
        
       $query = $this->db->get('korisnici');
        
       if ($query->num_rows() == 1)
       {
           
           return $query->result();
           
       }
       
 else {
           return FALSE;    
       }
    }
    
    function body($obj)
    {
        $this->db->select('t1.username, t1.ime, t2.vrsta');
        $this->db->from('korisnici AS t1, tip_korisnika AS t2');
        $this->db->where('t1.id_korisnika = t2.id');
        $this->db->where('t1.id', $obj['id']);
        $this->db->limit(1);
        
        $sql = $this->db->get();
       
        
        if ($sql->num_rows() > 0)
        {
            return $sql->result();
        }
 else {
            return FALSE;
 }
    }
    
    function body_administration()
    {
        $this->db->select('t1.id, t1.username, t1.ime, t1.email, t2.vrsta');
        $this->db->from('korisnici as t1, tip_korisnika as t2');
        $this->db->where('t1.id_korisnika = t2.id');
       
        
        
        $upit = $this->db->get();
        
        if ($upit->num_rows > 0)
        {
            return $upit->result();
            return TRUE;
        }
        else            return FALSE;
    }
    
    function body_edit()
    {
        $this->db->select('username, ime, email');
        $this->db->from('korisnici');
        $this->db->where('id', $this->uri->segment(3));
       
        $upit = $this->db->get();
        
        if ($upit->num_rows > 0)
        {
            return $upit->result();
            return TRUE;
        }
        else            return FALSE;
    }
    
    function body_edit_phonebook()
    {
        $this->db->select('ime_prezime, ulica, mesto, telefon');
        $this->db->from('pregled');
        $this->db->where('id', $this->uri->segment(3));
       
        $upit = $this->db->get();
        
        if ($upit->num_rows > 0)
        {
            return $upit->result();
            return TRUE;
        }
        else            return FALSE;
    }


    function get_Username($obj)
    {
        $this->db->select('*');
        $this->db->from('korisnici');
        $this->db->where('id', $obj['id']);
        $this->db->limit(1);
        $upit = $this->db->get();
        
        if ($upit->num_rows() == 1)
        {
            return $upit->result();
        }
 else {
            return FALSE;
 }
        
    }
    
    function add_temp_user($key)
    {
        $data = array ('ime' => $this->input->post('ime_prezime'),
                'username' => $this->input->post('korisnik'), 
                'password' => md5($this->input->post('lozinka')),
                'email' => $this->input->post('email'),
                'key' => $key);
        $upit = $this->db->insert('privremeni_korisnici', $data);
        
        if ($upit)
        {
            return TRUE;
        }
        else            return FALSE;
    }
    
    
    function is_key_valid($key)
    {
        $this->db->where('key', $key);
        $upit = $this->db->get('temp_users');
        if ($upit)
        {
            return TRUE;
        }
        else            return FALSE;
    }
    
    function add_user($key)
    {
        $this->db->where('key', $key);
        $upit = $this->db->get('temp_users');
        
        if ($upit)
        {
            $red = $upit->row();
            $data = array (
                'username' => $red->username, 'password' => $red->password, 'ime' => $red->ime, 
                'email' => $red->email, 'id_korisnika' => 2
            );
           
            $nov_privremeni = $this->db->insert('korisnici', $data);
            
            if ($nov_privremeni)
            {
                $this->db->where('key', $key);
                $this->db->delete('privremeni_korisnici');
                return TRUE;
            }
            else                return FALSE;
           
        }
       
    }

    function prikazi()
    {
        $this->db->select('id, ime_prezime, ulica, mesto, telefon');
        $this->db->from('pregled');
        $upit = $this->db->get();
        return $upit->result();
    }
    
    function dodajImenik()
    {
        $data = array('ime_prezime' => $this->input->post('ime_prezime', TRUE),
                'ulica' => $this->input->post('ulica', TRUE),
                'mesto' => $this->input->post('mesto', TRUE), 
                'telefon' => $this->input->post('telefon', TRUE));
            $rezultat = $this->db->insert('pregled', $data);
            if ($rezultat)
            {
                return TRUE;
                
            }
            else                return FALSE;
            
    }
    
    function dodajKorisnik_admin()
    {
        $data = array('username' => $this->input->post('user'),
            'ime' => $this->input->post('ime'), 'password' => md5($this->input->post('passwd')),
            'email' => $this->input->post('email'), 'id_korisnika' => 1);
        $upit = $this->db->insert('korisnici', $data);
        if ($upit)
        {
            return TRUE;
        }
        else            return FALSE;
    }
        
        function dodajKorisnik_user()
        {
            $data = array('username' => $this->input->post('user'),
            'ime' => $this->input->post('ime'), 'password' => md5($this->input->post('passwd')),
            'email' => $this->input->post('email'), 'id_korisnika' => 2);
        $upit = $this->db->insert('korisnici', $data);
        if ($upit)
        {
            return TRUE;
        }
        else            return FALSE;
        }
        
        
        
        

    function delete_phonebook($id)
    {    
    $this->db->delete('pregled', array('id' => $id));         
    }
    
    function delete_korisnik($id)
    {
        $this->db->delete('korisnici', array('id' => $id)); 
    }

    function edit_phonebook($id)
    {
        $data = array ('ime_prezime' => $this->input->post('ime_prezime'), 
            'ulica' => $this->input->post('ulica'),
            'mesto' => $this->input->post('mesto'),
            'telefon' => $this->input->post('telefon'));
        
       $this->db->where('id', $id);
    $update = $this->db->update('pregled', $data);
    return $update;
    
        
    }
    
    function edit_admin($id)
    {
        $data = array ('username' => $this->input->post('user'), 
            'ime' => $this->input->post('ime'),
            'email' => $this->input->post('email'),
            'id_korisnika' => 1);
        
       $this->db->where('id', $id);
    $update = $this->db->update('korisnici', $data);
    return $update;
    
        
    }
    
    function edit_user($id)
    {
        $data = array ('username' => $this->input->post('user'), 
            'ime' => $this->input->post('ime'),
            'email' => $this->input->post('email'),
            'id_korisnika' => 2);
        
       $this->db->where('id', $id);
    $update = $this->db->update('korisnici', $data);
    return $update;
    
        
    }

}
   
?>