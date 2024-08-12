<?php
    require 'database.php';
	if (!empty($_POST)) {
    $id = $_POST['id'];
    if ( !empty($_GET['id'])) {
        $id = $_REQUEST['id'];
    }
     
    $pdo = Database::connect();
	$pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
	$sql = "SELECT * FROM user_data where id = ?";
	$q = $pdo->prepare($sql);
	$q->execute(array($id));
	$data = $q->fetch(PDO::FETCH_ASSOC);
	Database::disconnect();
		
	if (null==$data['name']) {
		
		$data['id']=$id;
		$data['name']="--------";
		$data['gender']="--------";
		$data['email']="--------";
		$data['mobile']="--------";
	}
	else {
	
	}
	
  $myJSON = json_encode($data);
     
  echo $myJSON;
  }
?>