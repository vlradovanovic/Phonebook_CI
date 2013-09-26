 <html>
        <head>
            <title>Telefonski imenik</title>
            <meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
            <link rel="stylesheet" href="<?php echo base_url(); ?>/css/style.css" 
     type="text/css" media="screen"/>

            <script type="text/javascript" src="pack.js"></script>
            <script type="text/javascript" src="pop.js">

            </script>
     
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

                    <a id="log" href=<?php echo base_url().'Home/logout'; ?>>LOGOUT</a>
                </div>

            <div id="meni" id="nav">
                <ul>
                    <li><a href=<?php echo base_url().'Home';  ?>>Početna</a></li>
                    <li><a href=<?php echo base_url().'ImenikController'; ?>>Imenik</a
                    <li><a href=<?php echo base_url().'AdminController'; ?>>Administracija</a></li>
                     <li><a href="<?php echo base_url().'KontaktController'; ?>">Kontakt</a></li>
                </ul>
            </div>

            <div id="sadrzaj" >

                <h1>Info</h1>
                <hr><br/>
                
                <div align="center">

                    CRUD WEB aplikacija<br/>
                    Korišćena tehnologija: PHP <br />
                    Framework: CodeIgniter <br />
                    Vladimir Radovanović<br /> <br/>
                    email: vl.radovanovic [et] gmail.com<br/>
                   <br /><br />
                   
                   <h2> Vaš email je uspešno poslat. Odgovoriću Vam u najkraćem roku. </h2> <br />
                   <a href=<?php echo base_url()."ImenikController"; ?>>Nazad</a>
           
                </div>   
                    
            </div>

            <div id="kraj">
                Vladimir Radovanović
            </div>

            <div id="ppp"> </div>

        </div>

    </body>
</html>

                
                