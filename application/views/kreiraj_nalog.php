
<html>
    <head>
        <title>Kreiranje naloga</title>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
         <link rel="stylesheet" href="<?php echo base_url(); ?>/css/style.css" 
     type="text/css" media="screen"/>

    </head>
    <body>

        <div id="okvir">

            <div id="vrh"> </div>

            <div id="pocetak">
                 
            </div>


            <div id="meni">
                <ul>
                  
                    <h2><font color="white">Popunite sledeća polja</font></h2></li>
                
            </div>

            <div id="sadrzaj" >

                
                <?php echo validation_errors(); ?> 
                <?php echo form_open('NalogController/verify'); ?>
             
                    Ime i prezime:&nbsp;&nbsp;&nbsp;
                    <input type='text' name='ime_prezime' > <br><br>
                    Korisničko ime:&nbsp;&nbsp;&nbsp;<input type='text' name='korisnik' > <br><br>
                    Lozinka: &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                    <input type='password' name='lozinka' > <br><br>
                    Potvrdi lozinku:&nbsp;
                    <input type='password' name='relozinka' > <br><br>
                    Email:&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                    <input type='text' name='email' > <br><br>
                    <u>Napomena: Sva polja su obavezna.</u> <br /> <br />
 
                    &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                        &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                        <input background:url('images/login-btn.png') no-repeat; border: none; width='103' height='42' style='margin-left:90px;'  type='submit' value='Registruj se'>
                               <?php echo form_close(); ?>
                
                &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                        &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                        

                       &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<a href=<?php echo base_url()."LoginController"; ?>>Nazad</a>

            </div>
            
            

            <div id="kraj">
                Vladimir Radovanović
            </div>

            <div id="ppp"> </div>

        </div>

    </body>
</html>