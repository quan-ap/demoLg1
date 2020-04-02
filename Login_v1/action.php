<?php
	include("getConnect.php");

	$name=$_POST['name'];
	$pass=$_POST["pass"];

	$sql="select * from tblaccount where _name ='$name' and _pass='$pass'";
	$result= pg_query($conn,$sql);

	if(pg_fetch_row($result)){
		echo ' Đăng nhập được rồi!!';
		header('location:home.php');
	}else{
		echo ' Đ được ';
		echo $sql;
	}
?>