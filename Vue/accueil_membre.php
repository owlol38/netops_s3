<?php
session_start();
$pseudo = $_SESSION["pseudo"];
echo "$pseudo";
echo "<br/>";
echo "<br/>";
echo '<button>Créer une VLANS</button>';
echo "<br/>";
echo "<br/>";
echo '<button>Supprimer une VLANS</button>';
echo "<br/>";
echo "<br/>";
echo "afficher les vlans de la bdd";
?>