<?php 
session_start();

require_once ("../database.php");
$db = connectToDatabase();

if(isset($_POST['pseudo']) && isset($_POST['password']))
{
    $pseudo = htmlspecialchars($_POST['pseudo']);
    $password = htmlspecialchars(md5($_POST['password']));

    $sql = " SELECT password FROM user WHERE pseudo = '$pseudo'";
    $result = $db ->prepare($sql);
    $result->execute();
    $nombre = $result->rowCount();
    echo "$nombre<br>";
    echo "$password";
}
?>
