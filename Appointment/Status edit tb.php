<?php
    require 'database.php';
 
    $Status = null;
    if ( !empty($_GET['Status'])) {
        $Status = $_REQUEST['Status'];
    }
     
    if ( !empty($_POST)) {
        // keep track post values
		$Status = $_POST['Status'];
         
        $pdo = Database::connect();
		$pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
		$sql = "UPDATE current  set Status =?";
		$q = $pdo->prepare($sql);
		$q->execute(array($Status));
		Database::disconnect();
		header("Location: Status.php");
    }
?>