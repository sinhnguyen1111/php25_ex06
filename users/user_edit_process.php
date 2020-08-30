<?php
	include 'connect.php';
	// var_dump($_POST);
	// $data = $_POST;
	$iduser=$_POST['id'];
	$nameuser = $_POST['name'];
	// echo $nameuser;
	$emailuser = $_POST['email'];
	$password = $_POST['password'];
	$query = "UPDATE users SET name='$nameuser',email='$emailuser',password='$password' WHERE id=$iduser";
	// echo $query;
	$status=$conn->query($query);
	if($status){
		setcookie('msg',"Update thành công",time()+5);
		header('location: users.php');
	}
	else{
		echo 'Update không thành công';

	}

?>