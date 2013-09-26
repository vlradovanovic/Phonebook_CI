
<html>
    <head>
        <title>Dodaj u imenik</title>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
        <link rel="stylesheet" type="text/css" href="css/style.css" media="screen" />

    </head>
    <body>

        <div id="okvir">

            <div id="vrh"> </div>

            <div id="pocetak">
                 <?php
               
                     echo "<p id='bbb'><b >"; 
                    
                     foreach ($records as $rec)
                     {
                         echo $rec->username;
                     }

                     
echo "</b>:dobrodošli</p>";
    
                ?>
                <a id="log" href=<?php echo "Home/logout"; ?>>LOGOUT</a>
            </div>


            <div id="meni" id="nav">
                <ul>
                   <li><a href=<?php echo base_url().'Home';  ?>>Početna</a></li>
                    <li><a href=<?php echo base_url().'ImenikController'; ?>>Imenik</a>
                    <li><a href=<?php echo base_url().'AdminController'; ?>>Administracija</a></li>
                     <li><a href="<?php echo base_url().'KontaktController'; ?>">Kontakt</a></li>
                </ul>
            </div>

            <div id="sadrzaj" >

                
                
                <?php echo form_open('InsertController/verify'); ?>
             
                    Ime i prezime (*):&nbsp;&nbsp;&nbsp;
                    <input type='text' name='ime_prezime' > <br><br>
                    Ulica i broj:&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input type='text' name='ulica' > <br><br>
                    Mesto: &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                    <input type='text' name='mesto' > <br><br>
                    Telefon (*):&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                    <input type='text' name='telefon' > <br><br>
                    <u>Napomena: Polja sa zvezdicom su obavezna.</u> <br /> <br />
 
                    &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                        &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                        <input background:url('images/login-btn.png') no-repeat; border: none; width='103' height='42' style='margin-left:90px;'  type='submit' value='Dodaj'>
                               <?php echo form_close(); ?>
                
                &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                        &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                        

                       &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<a href=<?php echo base_url()."ImenikController"; ?>>Nazad</a>

            </div>
            
            

            <div id="kraj">
                Vladimir Radovanović
            </div>

            <div id="ppp"> </div>

        </div>

    </body>
</html>