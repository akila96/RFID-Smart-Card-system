<?php
  include 'database.php';
  
  if (!empty($_POST)) {
    $id=$_POST["ID"];
    $pdo = Database::connect();
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    $sql = 'SELECT id FROM table_nodemcu';
    
    $q = $pdo->prepare($sql);
    $q->execute();
	$array = $q->fetchAll(PDO::FETCH_COLUMN);

    Database::disconnect();
    
    echo json_encode($array);
  }
?>