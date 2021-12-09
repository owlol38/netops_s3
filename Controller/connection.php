<?php

require_once ('../Modele/connection.php');

if($nombre > 0 )
{
    $data = $result->fetchAll();
    print_r($data[0]["password"]);

        
    if ($password == $data[0]["password"]) {
        header('Location:../Vue/accueil_membre.php');
        $_SESSION['pseudo'] = $pseudo;
    }
    else
    {
        header('Location:../Vue/connection.php?login_err=password'); 
    }
}
else
{
	header('Location:../Vue/connection.php?login_err=already');
}

?>