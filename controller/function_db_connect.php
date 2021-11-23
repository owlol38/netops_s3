<?php
  function dbConnect() {
    $defaut_host = "localhost";
    $default_username = "root";
    $default_password = "";
    $default_dbname = "/*nom de la base de donnée*/";
    try {
      $dbConnect = new PDO("mysql:host=$defaut_host;dbname=$default_dbname", $default_username, $default_password);
    } catch (PDOException $e) {
      echo "Error: " . $e->getMessage();
    }
    return $dbConnect;
  };
?>