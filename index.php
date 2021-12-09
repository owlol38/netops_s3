<?php
    require_once ("database.php");
    //$db = connectToDatabase();
    //$database = requestAllData($db);

    if (isset($_GET['action'])) {
        switch ($_GET['action']) {
            case 'Vue/acceuil.php':
                session_start();
                $content = "Vue/accueil.php";
                break;

             case 'Vue/creer_pub.php':
                session_start();
                $content = "Vue/creer_pub.php";
                break;

            case 'Vue/about.php':
                session_start();
                $content = "Vue/about.php";
                break;

             case 'Vue/profil.php':
                session_start();
                $content = "Vue/profil.php";
                break;

            case 'Vue/acceuil_membre.php':
                session_start();
                $content = "Vue/acceuil_membre.php";
                break;

            case 'Vue/connection.php':
                session_start();
                $content = "Vue/connection.php";
                break;

            case 'Vue/inscription.php':
                session_start();
                $content = 'Vue/inscription.php';
                break;
			
			case 'Vue/about.php':
                session_start();
                $content = "Vue/about.php";
                break;

            case 'Vue/acceuil_membre.php':
                session_start();
                $content = "Vue/acceuil_membre.php";
                break;

            case 'Vue/modifier.php':
                session_start();
                $content = "Vue/modifier.php";
                break;

            case 'Vue/afficher_profil.php':
                session_start();
                $content = "Vue/afficher_profil.php";
                break;


            default:
                $content = "Vue/inconstruction.php";
        }
    } else {
        $content = 'Vue/accueil.php';
    }

    include($content);
?>