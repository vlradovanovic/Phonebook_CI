
    <html>
        <head>
            <title>Administracija</title>
            <meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
            <link rel="stylesheet" type="text/css" href="css/style.css" media="screen" />

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
                     foreach ($result as $rec) {
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

                <h1>Imenik</h1>
                <hr><br/><br/><br/>
                
  
                <?php
                
                echo "&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp"; ?>
                <a href='<?php echo base_url().'DodajKorisnikController'; ?>'>
                    <img src='images/add.jpeg' style='width:4%' align='middle'> </img>
                     <?php                                    echo "&nbsp Dodaj novog korisnika</a>";
                
                echo" <table id='rounded-corner' >
     <thead>
    	<tr>
   <th scope='col' class='rounded-company'>Username</th>     	
<th scope='col' class='rounded-company'>Ime i prezime</th>
            <th scope='col' class='rounded-q1'>Email</th>
            <th scope='col' class='rounded-q2'>Vrsta korisnika</th>";
               
           echo"<th scope='col' class='rounded-q4'>Opcije</th>";
               
                echo"

        </tr>
    </thead>
        <tfoot>
    	<tr>
        	<td colspan='5' class='rounded-foot-left'><em>Spisak zavedenih korisnika</em></td>

        </tr>
    </tfoot>"; ?>
                <tbody>
        <?php foreach ($other_result as $red): ?>
            <tr>
                <td><?php echo $red->username; ?></td>
                <td><?php echo $red->ime; ?></td>
                <td><?php echo $red->email; ?></td>
                <td><?php echo $red->vrsta; ?></td>
                
                <td>     
                    <a href="<?php echo site_url(). 'AdminController/izmeni/'.$red->id; ?>">Izmeni</a>                      
  &nbsp;&nbsp;&nbsp
                   <a href="<?php echo site_url(). 'AdminController/delete_from_korisnik/brisi/'.$red->id; ?>">Briši</a>                       
                </td>
            </tr>
                 <?php endforeach; ?>                
    </tbody>
                
                <?php echo "</table>";
                ?>

            </div>

            <div id="kraj">
                Vladimir Radovanović
            </div>

            <div id="ppp"> </div>

        </div>

    </body>
</html>
                
?>
