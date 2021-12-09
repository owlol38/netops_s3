<?php 

include_once '../Modele/accueil_membre.php';

$data = requestAllData($db);
$user = $data['info'];

function affichePub($data) {

    $nbr = rand(0,(count($data['pub'])-1));

    $pub = $data['pub'];
    $re = $data['react'];
    $pub = $pub[$nbr];
    $user = $data['info'];

    

    //on selectionne que les actions:publier
    $react = array();
    for ($i=0; $i< (count($re)); $i++) { 
        if($re[$i]['type'] == "publier"){
            
            array_push($react, $re[$i]);    
        }
    }
    //on recupere le id user
    for ($i=0; $i< (count($react)); $i++) { 
        if ($pub['id'] ==$react[$i]['id_publication'] ) {
            $id_user = $react[$i]['id_user'];   
                
        }
    }
    //on recupere le pseudo grace à l'id user de la table reagir
    for ($i=0; $i< (count($user)); $i++) { 
        if ($id_user == $user[$i]['id'] ) {
            $pseudo = $user[$i]['pseudo'];  
        }
    }

array_push($pub, $pseudo);

return array('pub' => $pub, 'nbr' => $nbr);
}
?>


