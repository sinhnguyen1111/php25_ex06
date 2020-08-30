<?php
include 'connect.php';
	$id=$_GET['id'];
	$query = "DELETE FROM users WHERE id=".$id;
	echo $query;
	$result =$conn->query($query);
	setcookie('msg','Xóa thành công',time()+5);
	if($result){
	header('location: users.php');

	}
	else{
		setcookie('msg','Xóa không thành công',time()+5);
		exit();
	}
?>