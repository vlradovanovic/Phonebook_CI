<html>
    
 <head>
        <meta http-equiv='Content-Type' content='text/html; charset=UTF-8' />
        <title>Login</title>

        <link href=<?php echo base_url()."css/login-box.css"; ?> rel='stylesheet' type='text/css' />
    </head>

    <body>
        <div style='padding: 100px 0 0 250px;'>
            <div id='login-box'>
                <h2>Telefonski imenik</h2>
                <br />
                <br />
                
                <?php echo validation_errors(); ?>
               <?php echo form_open('verifylogin/index'); ?>
                    <div id='login-box-name' style='margin-top:20px;'>Korisnik:</div><div id='login-box-field' style='margin-top:20px;'><input name='korisnik' class='form-login' title='korisnik' size='30' maxlength='2048' /></div>
<div id='login-box-name'>Šifra:</div><div id='login-box-field'><input name='lozinka' type='password' class='form-login' title='lozinka' size='30' maxlength='2048' /></div>
<br />


<input background:url('images/login-btn.png') no-repeat; border: none; width='103' height='42' style='margin-left:90px;'  type='submit' value='Prijavi me'>
       <div id='login-box-field'>&nbsp;&nbsp;&nbsp;&nbsp;
    &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
    &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Nemate nalog? 
    
  <a href="<?php echo base_url().'NalogController'; ?>" style="color: #FFFFFF ">Registruj se</a></div>
       
<?php echo form_close(); ?>
 
       
</div>
</div>
</body>
    </html>