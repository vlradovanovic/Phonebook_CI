
<html>
    <head>
        <title>Dodaj korisnika</title>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
        <link rel="stylesheet" type="text/css" href="css/style.css" media="screen" />

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

                
                
                <?php echo form_open('InsertController/verify_korisnik'); ?>
             
                    Username (*):&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                    <input type='text' name='user' > <br><br>
                    Ime i prezime (*):&nbsp;&nbsp;&nbsp;&nbsp;<input type='text' name='ime' > <br><br>
                    Lozinka (*):&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                    <input type='password' name='passwd' > <br><br>
                    Email:&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                    <input type='text' name='email' > <br><br>
                    Vrsta korisnika (*):  &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                        &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                       
                               
                            <select name='nesto'>
                                
                                
                                 <option value="admin">admin</option>
                                 <option value="user">user</option>

                                
                 </select><br/><br/>
                    &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                     &nbsp;&nbsp;  &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                        <input type='submit'  value='Dodaj' > <br />
                         &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                         &nbsp; &nbsp;&nbsp; &nbsp; &nbsp; &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<a href=<?php echo base_url()."AdminController"; ?>>Nazad</a>
                    <?php
                    echo form_close();
                        ?>
                        
                <br /> <br />
                
                 <u>Napomena: Polja sa zvezdicom su obavezna.</u> <br /> <br />

            </div>
            
            

            <div id="kraj">
                Vladimir Radovanović
            </div>

            <div id="ppp"> </div>

        </div>

    </body>
</html>