<?php
	include 'connect.php';
	// var_dump($_POST);
	// $data = $_POST;
	$id_ct= $_POST['id'];
	$name_ct = $_POST['name'];
	$description_ct = $_POST['description'];
	$slug_ct = $_POST['slug'];
	$query = "UPDATE categories SET name='$name_ct',description='$description_ct',slug='$slug_ct' WHERE id=$id_ct";
	// echo $query;
	$status = $conn->query($query);
	if($status){
		setcookie('msg','Update thành công!',time()+5);
		header('location: categories.php');
	}
	else{
		setcookie('msg','Update không thành công!',time()+5);
		exit();
	}

?>
