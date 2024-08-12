<?php
  require 'database.php';
  
  //---------------------------------------- Condition to check that POST value is not empty.
  if (!empty($_POST)) {
    //........................................ keep track POST values
    $NAME = $_POST['NAME'];
	$ID = $_POST['ID'];
    $GENDER = $_POST['GENDER'];
	$EMAIL = $_POST['EMAIL'];
    $PHONE = $_POST['PHONE'];
	
    //........................................  
    
    //........................................ Updating the data in the table.
    $pdo = Database::connect();
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    $sql = "INSERT INTO report SET NAME = ?, ID = ?, GENDER = ?, EMAIL = ?, PHONE = ?";
    $q = $pdo->prepare($sql);
    $q->execute(array($NAME,$ID,$GENDER,$EMAIL,$PHONE));
    Database::disconnect();
    //........................................ 
  }
  //---------------------------------------- 
?>