<?php
    $name = $_POST['name'];
	$email = $_POST['email'];
	$password = $_POST['password'];
	$cpassword = $_POST['cpassword'];
	
	$conn = new mysqli('localhost','root','','test');
	if($conn->connect_error){
		die('Connection Failed : '.$conn->connect_error);
	}else{
		$stmt = $conn->prepare("insert into registration(name, email, password, cpassword)
		values(?, ?, ?, ?)");
		$stmt->bind_param("sssssi", $name, $email, $password, $cpassword);
		$stmt->execute();
		echo "registration Successfully...";
		$stmt->close();
		$conn->close();
?>