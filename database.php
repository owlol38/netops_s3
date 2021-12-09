<?php
function connectToDatabase() {
    Try{
        $db=new PDO("mysql:host=localhost;dbname=mydb","root","");
    } Catch(PDOException $e) {
        Echo $e->getMessage();
    }
    return $db;
}

  function requestAllData($db) {
   
    $sql = "SELECT * FROM user";
    $res = $db->query($sql);
    $info = array();

    while ($d = $res->fetch()) {
      $info[] =  array(
        "id" => $d['id'],
        "pseudo" => $d['pseudo'],
        "password" => $d['password']     ); 
    }


    $sql = "SELECT * FROM categorie";
    $res = $db->query($sql);
    $cat = array();

    while ($d = $res->fetch()) {
      $cat[] = array(
        "id" => $d['id'],
        "categorie_name" => $d['categorie_name']
        );
    }

    $sql = "SELECT * FROM commenter";
    $res = $db->query($sql);
    $comment = array();  

    while ($d = $res->fetch()) {
      $comment[] = array(
        "id" => $d['id'],
        "commentaire" => $d['commentaire'],
        "publication_id" => $d['publication_id'],
        "publication_id" => $d['publication_id'],
        "auhtor" => $d['comment_date'],
       
      );
    } 

    $sql = "SELECT * FROM conversations";
    $res = $db->query($sql);
    $conv = array();  

    while ($d = $res->fetch()) {
      $conv[] = array(
        "id" => $d['id'],
        "user_one" => $d['user_one'],
        "user_two" => $d['user_two']
      
      );
    }


    $sql = "SELECT * FROM follow";
    $res = $db->query($sql);
    $follow = array();  

    while ($d = $res->fetch()) {
      $follow[] = array(
        "id" => $d['id'],
        "user_one" => $d['user_one'],
        "user_two" => $d['user_two']
       
      );
    }

	$sql = "SELECT * FROM user_has_follow";
    $res = $db->query($sql);
    $user_follow = array();  

    while ($d = $res->fetch()) {
      $user_follow[] = array(
        "id" => $d['id'],
        "follow_id" => $d['follow_id'],
        "user_id" => $d['user_id']
       
      );
    } 

    $sql = "SELECT * FROM liker";
    $res = $db->query($sql);
    $like = array();  

    while ($d = $res->fetch()) {
      $like[] = array(
        "id" => $d['id'],
        "id_participer" => $d['id_participer']
        
      );
    } 

	$sql = "SELECT * FROM messages";
    $res = $db->query($sql);
    $mess = array();  

    while ($d = $res->fetch()) {
      $mess[] = array(
        "id" => $d['id'],
        "message" => $d['message'],
        "id_conversations" => $d['id_conversations']
       
      );
    } 

	$sql = "SELECT * FROM publication";
    $res = $db->query($sql);
    $pub = array();  

    while ($d = $res->fetch()) {
      $pub[] = array(
        "id" => $d['id'],
        "titre" => $d['titre'],
        "description" => $d['description'],
        "date_pub" => $d['date_pub'],
        "categorie" => $d['categorie'],
        "contenu" => $d['contenu'],
        "format" => $d['format']
       
      );
    } 

	$sql = "SELECT * FROM reagir";
    $res = $db->query($sql);
    $react = array();  

    while ($d = $res->fetch()) {
      $react[] = array(
        "id" => $d['id'],
        "id_user" => $d['id_user'],
        "id_publication" => $d['id_publication'],
        "type" => $d['type']
       
      );
    }   

	$sql = "SELECT * FROM user_has_conversations";
    $res = $db->query($sql);
    $user_conv = array();  

    while ($d = $res->fetch()) {
      $user_conv[] = array(
        "id" => $d['id'],
        "conversations_id" => $d['conversations_id'],
       	"user_id" => $d['user_id']
       
      ); 
    }

    $database = array(
      "info" => $info,
      "cat" => $cat,
      "comment" => $comment,
      "conv" => $conv,
      "follow" => $follow,
      "user_follow" => $user_follow,
      "like" => $like,
      "mess" => $mess,
      "pub" => $pub,
      "react" => $react,
      "user_conv" => $user_conv



    );

    return $database;
  }
