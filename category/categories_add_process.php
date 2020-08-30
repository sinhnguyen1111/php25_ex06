<?php
	include 'connect.php';
	// var_dump($_POST);
	$data = $_POST;
	$query = "INSERT INTO categories(name,description,slug) VALUES ('".$data['name']."','".$data['description']."','".$data['slug']."')";
	// echo $query;
	$result = $conn->query($query);

	if($result){
		setcookie('msg','Thêm thành công',time()+5);
		header('location: categories.php');
	}
	else{
		setcookie('msg','Không thành công',time()+5);
	}
?>