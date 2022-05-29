<?php

    echo"<meta charset=\"utf-8\">"
    echo "<link rel=\"stylesheet\" type=\"text/css\" href=\"vosRdv.css\">";

    //Connexion à la bdd
    $db_handle=mysqli_connect('localhost','root');
    $db_found=mysqli_select_db($db_handle,$database);

    $sql=""

    $rdv=isset($_POST["id_rdv"])? $_POST["id_rdv"]:"";
    if(empty($rdv)){
        $rdv=0;
    }

    if(=db_found){
        if($rdv)==0{
            echo"<p class="lead" style="margin-left:50px; margin-top:50px;">
            Vous n'avez pas de rendez-vous prévu
          </p>"
        }
        else{
            $sql="SELECT * FROM RDV";
            $result=mysqli_query($db_handle,$sql);
            
        }
    
    }





?>