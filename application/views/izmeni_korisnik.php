
<html>
    <head>
        <title>Izmena korisničkih podataka</title>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
        <link rel="stylesheet" href="<?php echo base_url(); ?>/css/style.css" 
     type="text/css" media="screen"/>

    </head>
    <body>

        <div id="okvir">

            <div id="vrh"> </div>

            <div id="pocetak">
                 <?php
  
                     echo "<p id='bbb'><b >"; 
                    
                     foreach ($result as $rec)
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

              
                
                <?php echo form_open('AdminController/verify_editing_korisnik/'.$this->uri->segment(3)); ?>
               
                
                <?php foreach ($other_result as $rec): ?>
                    
                Username (*):&nbsp;&nbsp;&nbsp;<input type='text' name='user' value="<?php echo $rec->username; ?>"> <br><br>
                        Ime i prezime:&nbsp;&nbsp;
                        <input type='text' name='ime' value="<?php echo $rec->ime; ?>"> <br><br>
                        Email:&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                        <input type='text' name='email' value="<?php echo $rec->email;  ?>"> <br><br>
                        
                       <?php endforeach;  ?>
                        Vrsta korisnika:&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                        &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                        <select name="nesto">
                            <option>admin</option>
                            <option>user</option>
                        </select> <br /> <br />

                    <u>Napomena: Polja sa zvezdicom su obavezna.</u> <br /> <br />
 
                    &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                        &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                        <input background:url('images/login-btn.png') no-repeat; border: none; width='103' height='42' style='margin-left:90px;'  type='submit' value='Izmeni'>
                               <?php echo form_close(); ?>
                
                &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                        &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                        

                       &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<a href=<?php echo base_url()."AdminController"; ?>>Nazad</a>

            </div>
            
            

            <div id="kraj">
                Vladimir Radovanović
            </div>

            <div id="ppp"> </div>

        </div>

    </body>
</html>