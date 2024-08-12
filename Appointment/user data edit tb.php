<?php
    require 'database.php';
 
    $id = null;
    if ( !empty($_GET['id'])) {
        $id = $_REQUEST['id'];
    }
     
    if ( !empty($_POST)) {
        // keep track post values
        $name = $_POST['name'];
		$id = $_POST['id'];
		$gender = $_POST['gender'];
        $email = $_POST['email'];
        $Age = $_POST['Age'];
        $mobile = $_POST['mobile'];
		$Number = $_POST['Number'];
         
        $pdo = Database::connect();
		$pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
		$sql = "UPDATE user_data  set name = ?, gender =?, email =?, Age =?, mobile =?, Number =? WHERE id = ?";
		$q = $pdo->prepare($sql);
		$q->execute(array($name,$gender,$email,$mobile,$Age,$Number,$id));
		Database::disconnect();
		header("Location: user data.php");
    }
?>