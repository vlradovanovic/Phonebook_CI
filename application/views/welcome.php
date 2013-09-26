 <html>
        <head>
            <title>Dobrodošli</title>
            <meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
            <link href = <?php echo base_url(). 'css/style.css';  ?>  rel="stylesheet" type="text/css"  media="screen" />
        </head>
        <body>

            <div id="okvir">
                <div id="vrh"> </div>
                <div id="pocetak">
                <?php
               
                     echo "<p id='bbb'><b >";                     foreach ($records as $rec) 
                         {
    
                         echo $rec->username ;} echo "</b>:dobrodošli</p>";

              
               
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

                <h1>Početna strana - Dobrodošli</h1>
                <hr><br/><br/><br/>

                <?php
                
                echo" <table id='rounded-corner' >
                     <thead>
                        <tr>
                            <th scope='col' class='rounded-company'>Username</th>
                            <th scope='col' class='rounded-q1'>Ime i prezime</th>
                            <th scope='col' class='rounded-q1'>Vrsta</th>
                            
                        </tr>
                    </thead>
                        <tfoot>
                        <tr>
                                <td colspan='5' class='rounded-foot-left'><em>Trenutno na sistemu</em></td>
                        </tr>
                    </tfoot>";
               
                    echo"<tbody>
                        <tr>";
                           foreach ($records as $rec)
                    {
                        echo "<td>" .$rec->username.  "</td>";
                        echo "<td>" .$rec->ime.  "</td>";
                        echo "<td>" .$rec->vrsta.  "</td>";
                    }
                    
                  
                                
                            
echo "</tr>
                    </tbody>";
                
                echo"</table>";
 ?>
   
            </div>

            <div id="kraj">
                Vladimir Radovanović
            </div>

            <div id="ppp"> </div>

        </div>

    </body>
</html>