
<html>
    <head>
        <title>Greška u dodavanju korisnika</title>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
        <link rel="stylesheet" type="text/css" href=<?php echo base_url()."css/style.css"; ?> media="screen" />

    </head>
    <body>

        <div id="okvir">

            <div id="vrh"> </div>

            <div id="pocetak">
                
                
                 <?php
               
                     echo "<p id='bbb'><b >"; 
                    
                     foreach ($records as $rec) {
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
                    <li><a href="administracija.php">Administracija</a></li>
                    <li><a href="kontakt.php">Kontakt</a></li>
                </ul>
            </div>

            <div id="sadrzaj" >

                
                
                <h2>GREŠKA. Sledeća polja moraju biti popunjena.</h2>
                <br /> <br />
                <?php echo validation_errors(); ?>
                <br /> <br />
                        

                       &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<a href=<?php echo base_url()."DodajKorisnikController"; ?>>Nazad</a>

            </div>
            
            

            <div id="kraj">
                Vladimir Radovanović
            </div>

            <div id="ppp"> </div>

        </div>

    </body>
</html>