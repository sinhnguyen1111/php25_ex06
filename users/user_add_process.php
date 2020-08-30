<?php
	include 'connect.php';
	// var_dump($_POST);
	$data=$_POST;

	$query = "INSERT INTO users(name,email,password) VALUES ('".$data['name']."','".$data['email']."','".$data['password']."')";
	// echo $query;
	$result =$conn-> query($query);
	if($result){
		setcookie('msg','Thêm thành công!', time()+5);
		header('location:users.php');
	}
	else{
		setcookie('msg','Thêm thành công!', time()+5);
	}

?>