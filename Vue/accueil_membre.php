<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>Accueil Member</title>
</head>
<body>
    <div class= "logged">
        <?php
        session_start();
        $pseudo = $_SESSION["pseudo"];
        echo "$pseudo";
        ?>
        <div class= "box_1">
            <div class= "bunton">
                <input class="b1" type="button"  value="Créer une VLANS">
                <input class="b2" type="button" value="Supprimer des VLANS">
            </div>
            <div class= "afficher_VLANS">afficher les vlans de la bdd</div>
        </div>
    </div>
</body>
<style>
body{
    background: #E5E5E5;
}    

.b1{
left: 10px;
border-radius: 5px;
}
.b2{
    border-radius: 5px;
}
.box_1{
    margin-top: 3%;
    margin-left: 10%;
}
.bunton{
    display: flex;
    justify-content: space-between;
    width: 80%;
    margin-bottom: 1%;
}
.afficher_VLANS{
width: 80%;
height: 400px;
border-radius: 3px;


background: #FFFFFF;
}
</style>
</html>