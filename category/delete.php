<?php
include 'connect.php';
	$id=$_GET['id'];
	$query = "DELETE FROM categories WHERE id=".$id;
	// echo $query;
	$result = $conn->query($query);
	if($result){
		setcookie('msg','Xóa thành công',time()+5);
		header('location: categories.php');
	}
	else{
		setcookie('msg','Không thành công',time()+5);
		exit();
	}

?>