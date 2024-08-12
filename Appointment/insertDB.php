<?php
     
    require 'database.php';
 
    if ( !empty($_POST)) {
        // keep track post values
        $name = $_POST['name'];
		$id = $_POST['id'];
		$gender = $_POST['gender'];
        $email = $_POST['email'];
        $Age = $_POST['Age'];
		$mobile = $_POST['mobile'];
		$Number = $_POST['Number'];
        
		// insert data
        $pdo = Database::connect();
		$pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
		$sql = "INSERT INTO user_data (name,id,gender,email,Age,mobile,Number) values(?, ?, ?,? , ?, ?, ?)";
		$q = $pdo->prepare($sql);
		$q->execute(array($name,$id,$gender,$email,$Age,$mobile,$Number));
		Database::disconnect();
		header("Location: user data.php");
    }
?>