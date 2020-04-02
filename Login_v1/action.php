<?php
	include("getConnect.php");

	$Username=$_Post['name'];
	$Password=$_Post["pass"];

	$sql="select * from tblaccount where _name ='admin' and _pass='123'";
	$result= pg_query($conn,$sql);

	if(pg_fetch_row($result)){
		echo ' Đăng nhập được rồi!!';
		header('location:home.php');
	}else{
		echo ' Đ được';
	}
?>