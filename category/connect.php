<?php
	$servername='localhost';
	$username='root';
	$password='';
	$dataname='btvn_05';
	$conn=new mysqli($servername,$username,$password,$dataname);

	if($conn->connect_errno){
		echo 'Fail'.$conn->connect_errno;
		exit();
	}

?>