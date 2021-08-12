<?php
	//lay du lieu tu form goi len
	//
	$u = $_POST['username'];
	$p = $_POST['password'];
	//ket noi csdl
	//
	$db=mysql_connect("localhost","root","","csdldemo");
	$sql="select * from users where username='$u' and password='$p'";
	echo $sql;
	exit;
	//truy van du lieu
	$rs= mysql_query($db,$sql);
	if(mysqli_num_rows($sr)>0
	{
		echo "<h1>dang nhap thanh cong</h1>";
	}else{
		echo"<h2>dang nhap that bai</h2>"
		require_once 'login.html';
	}
?>